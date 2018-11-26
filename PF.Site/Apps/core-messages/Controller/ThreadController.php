<?php
namespace Apps\Core_Messages\Controller;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Template;
use Phpfox_Error;
use Phpfox_Validator;

defined('PHPFOX') or exit('NO DICE!');

class ThreadController extends Phpfox_Component
{
    /**
     * Controller
     */
    public function process()
    {
        Phpfox::isUser(true);

        $iThreadId = !empty($this->request()->getInt('id')) ? $this->request()->getInt('id') : ($this->getParam('id'));
        $sView = !empty($this->getParam('view') ? $this->getParam('view') : '');
        list($aThread, $aMessages) = Phpfox::getService('mail')->getThreadedMail($iThreadId);

        if ($aThread === false)
        {
            return Phpfox_Error::display(_p('unable_to_find_a_conversation_history_with_this_user'));
        }

        $aMessages = Phpfox::getService('mail')->listDateForMessages($aMessages);

        $aValidation = array(
            'message' => _p('add_reply')
        );

        $oValid = Phpfox_Validator::instance()->set(array(
                'sFormName' => 'js_form',
                'aParams' => $aValidation
            )
        );

        if ($aThread['user_is_archive'])
        {
            $this->request()->set('view', 'trash');
        }

        Phpfox::getService('mail.process')->threadIsRead($aThread['thread_id']);

        if($aThread['is_group'])
        {
            $sGroupTitle = Phpfox::getService('mail')->getGroupTitle($aThread['thread_id']);
        }

        $iUserCnt = 0;
        $sUsers = '';
        $bCanViewThread = false;
        $bCanReplyThread = false;

        if(!empty($sGroupTitle) && $aThread['is_group'])
        {
            $sUsers = $sGroupTitle;
        }
        else
        {
            foreach ($aThread['users'] as $aUser)
            {
                if ($aUser['user_id'] == Phpfox::getUserId())
                {
                    continue;
                }

                $iUserCnt++;

                if ($iUserCnt == (count($aThread['users']) - 1) && (count($aThread['users']) - 1) > 1)
                {
                    $sUsers .= ' &amp; ';
                }
                else
                {
                    if ($iUserCnt != '1')
                    {
                        $sUsers .= ', ';
                    }
                }
                $sUsers .= $aUser['full_name'];
            }
        }


        foreach ($aThread['users'] as $aUser)
        {
            if ($aUser['user_id'] == Phpfox::getUserId())
            {
                $bCanViewThread = true;
                continue;
            }
            if (Phpfox::getService('user.privacy')->hasAccess('' . $aUser['user_id'] . '', 'mail.send_message')) {
                $bCanReplyThread = true;
            }
        }

        if (!$bCanViewThread)
        {
            return Phpfox_Error::display('Unable to view this thread.');
        }

        $this->template()->setHeader('cache', array(
                    'jscript/mail.js' => 'app_core-messages',
                    'jquery/plugin/jquery.scrollTo.js' => 'static_script'
                )
            )
            ->setEditor()
            ->assign(array(
                    'sCreateJs' => $oValid->createJS(),
                    'sGetJsForm' => $oValid->getJsForm(false),
                    'aMessages' => $aMessages,
                    'aThread' => $aThread,
                    'sCurrentPageCnt' => ($this->request()->getInt('page', 0) + 1),
                    'bCanReplyThread' => $bCanReplyThread,
                    'bCanLoadMore' => count($aMessages) < 10 ? 0 : 1
                )
            );

        $this->setParam('global_moderation', array(
                'name' => 'mail',
                'custom_fields' => '<div><input type="hidden" name="forward_thread_id" value="' . $aThread['thread_id'] . '" id="js_forward_thread_id" /></div>',
                'menu' => array(
                    array(
                        'phrase' => _p('forward'),
                        'action' => 'forward'
                    )
                )
            )
        );

        $this->setParam('attachment_share', array(
                'type' => 'mail',
                'inline' => true,
                'id' => 'js_compose_new_message'
            )
        );
        return null;
    }

    /**
     * Garbage collector. Is executed after this class has completed
     * its job and the template has also been displayed.
     */
    public function clean()
    {
        (($sPlugin = Phpfox_Plugin::get('mail.component_controller_thread_clean')) ? eval($sPlugin) : false);
    }
}