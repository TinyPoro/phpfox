<?php
namespace Apps\Core_Messages\Controller;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_File;
use Phpfox_Error;
use Phpfox_Pager;
use Phpfox_Module;
use Phpfox_Template;

defined('PHPFOX') or exit('NO DICE!');

class IndexController extends Phpfox_Component
{
    /**
     * Controller
     */
    public function process()
    {
        Phpfox::isUser(true);

        if (($aItemModerate = $this->request()->get('conversation_action')))
        {
            $sFile = Phpfox::getService('mail')->getThreadsForExport($aItemModerate);

            Phpfox_File::instance()->forceDownload($sFile, 'mail.xml');
        }

        if(($sAction = $this->request()->get('action')) && ($iActionId = $this->request()->get('thread_id')))
        {
            if(Phpfox::getService('mail.process')->applyConversationAction($sAction, $iActionId))
            {
                $this->url()->send('mail', [], ($sAction == 'spam') ? _p('Marked spam successfully') : _p('Deleted successfully'));
            }
        }
        $aDefaultFolders = Phpfox::getService('mail.helper')->getDefaultFolder();
        $aSearch = $this->request()->get('search');
        $sTitleFolderDefault = !empty($aSearch['view']) ? $aDefaultFolders[$aSearch['view']]['title'] : (!empty($aSearch['custom']) ? Phpfox::getService('mail.customlist')->getCustomList($aSearch['custom'])['name'] : _p('All Mails') );
        $sView = !empty($aSearch['view']) ? $aSearch['view'] : '';

        $iPageSize = 8;
        $aFolders = Phpfox::getService('mail.customlist')->get();


        list($iCnt, $aRows) = Phpfox::getService('mail')->getSearch($aSearch, $this->search()->getPage(), $iPageSize);
        $bCanLoadMore = ($iPageSize < $iCnt) ? true : false;

        $sChatContentDefault = '';
        if(!empty($aRows[0]))
        {
            $aThread = $aRows[0];
            if(!$aThread['is_read'])
            {
                $aRows[0]['viewer_is_new'] = 0;
            }
            $sChatContentDefault = Phpfox::getService('mail')->getChatContentDefault($aThread['thread_id']);
            $sContentTitle = Phpfox::getService('mail.helper')->createConversationTitle($aRows[0], $sView);
            Phpfox_Module::instance()->dispatch('mail.index');
        }

        $iCustomlistId = $this->request()->getInt('customlist_id');
        $bIsRealCustomlistMessage = false;
        if(!empty($iCustomlistId))
        {
            $sChatContentDefault = '';
            $bIsRealCustomlistMessage = true;
        }

        if(empty($sChatContentDefault))
        {
            $sContentTitle = Phpfox::getService('mail')->getMailComposeContent($bIsRealCustomlistMessage, $iCustomlistId);
            Phpfox_Module::instance()->dispatch('mail.index');
            $this->setParam('attachment_share', array(
                    'type' => 'mail',
                    'inline' => true,
                    'id' => 'js_compose_new_message'
                )
            );
        }

        $aMassActions = [];

        if ($sView == 'trash') {
            $aMassActions['un-archive'] = '<i class="ico ico-inbox-o mr-1"></i>'._p('un_archive');
        }
        elseif ($sView == 'spam')
        {
            $aMassActions['un-spam'] = '<i class="ico ico-flag-triangle-o mr-1"></i>'._p('Un-spam');
        }
        else {
            $aMassActions['archive'] = '<i class="ico ico-inbox-o mr-1"></i>'._p('archive');
            $aMassActions['spam'] = '<i class="ico ico-inbox-o mr-1"></i>'._p('Spam');
            $aMassActions['delete'] ='<i class="ico ico-trash-o mr-1"></i>'._p('Delete');
            $aMassActions['mark_as_read'] ='<i class="ico ico-check-circle-alt mr-1"></i>'._p('mail_mark_as_read');
        }
        $aMassActions['export'] = '<i class="ico ico-external-link mr-1"></i>'._p('export');

        $this->template()
            ->setPhrase(array(
                'add_new_folder',
                'adding_new_folder',
                'view_folders',
                'edit_folders',
                'you_will_delete_every_message_in_this_folder',
                'updating'
            ))
            ->setHeader('cache', array(
                'jquery/plugin/jquery.highlightFade.js' => 'static_script',
                'selector.js' => 'static_script',
                'jscript/mail.js' => 'app_core-messages',
            ))
            ->assign(array(
                    'aMails' => $aRows,
                    'aFolders' => $aFolders,
                    'iTotalMessages' => $iCnt,
                    'sSiteName' => Phpfox::getParam('core.site_title'),
                    'sChatContentDefault' => $sChatContentDefault,
                    'sTitleContentDefault' => $sContentTitle,
                    'sView' => !empty($aSearch['view']) ? $aSearch['view'] : '',
                    'aDefaultFolders' => $aDefaultFolders,
                    'aForms' => $aSearch,
                    'sCustomList' => !empty($aSearch['custom']) ? $aSearch['custom'] : '',
                    'bCanLoadMore' => $bCanLoadMore,
                    'sDefaultFolderTitle' => $sTitleFolderDefault,
                    'aMassActions' => $aMassActions,
                    'sForm' => !empty($sChatContentDefault) ? 'js_ajax_mail_thread' : 'js_ajax_compose_message',
                    'bIsComposeForCustomlist' => $bIsRealCustomlistMessage ? 1 : 0
                )
            );
    }

    /**
     * Garbage collector. Is executed after this class has completed
     * its job and the template has also been displayed.
     */
    public function clean()
    {
        (($sPlugin = Phpfox_Plugin::get('mail.component_controller_index_clean')) ? eval($sPlugin) : false);
    }
}