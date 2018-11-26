<?php
namespace Apps\Core_Messages\Controller\Admin;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Search;
use Phpfox_Pager;
use Phpfox_Error;

defined('PHPFOX') or exit('NO DICE!');

class ManageMessageController extends Phpfox_Component
{
    public function process()
    {
        Phpfox::getUserParam('mail.can_read_private_messages', true);

        $iThreadId = $this->request()->get('id');

        if(!$iThreadId)
        {
            return Phpfox_Error::set(_p('Invalid Conversation'));
        }
        $iPage = $this->request()->get('page');
        if(empty($iPage))
        {
            $iPage = 1;
        }
        $iSize = 10;
        $aSearch = $this->request()->get('search');

        if(!empty($aSearch['from_month']) && !empty($aSearch['to_month']))
        {
            $aSearch['date_from'] = $this->request()->get('js_from__datepicker');
            $aSearch['date_to'] = $this->request()->get('js_to__datepicker');
        }
        else
        {
            $aSearch['date_from'] = $aSearch['date_to'] = date('n').'/'.date('j').'/'.date('Y');
            $aSearch['from_day'] = $aSearch['to_day'] = date('j');
            $aSearch['from_month'] = $aSearch['to_month'] = date('n');
            $aSearch['from_year'] = $aSearch['to_year'] = date('Y');
        }

        if(!empty($aSearch['member_name']))
        {
            $this->search()->setCondition('AND (u.full_name LIKE "%'.$aSearch['member_name'].'%")');
        }
        if(!empty($aSearch['member_id']))
        {
            if(!is_numeric($aSearch['member_id']))
            {
                Phpfox_Error::set(_p('Member ID must be a number'));
            }
            else
            {
                $this->search()->setCondition('AND (u.user_id ='.$aSearch['member_id'].')');
            }
        }
        if(!empty($aSearch['date_from']) || !empty($aSearch['date_to']))
        {
            if(!empty($aSearch['date_from']) && empty($aSearch['date_to']))
            {
                Phpfox_Error::set('Time "To Date" must be not null if you choose search by time');
            }
            elseif (!empty($aSearch['date_to']) && empty($aSearch['date_from']))
            {
                Phpfox_Error::set('Time "From Date" must be not null if you choose search by time');
            }
            elseif (!empty($aSearch['date_from']) && !empty($aSearch['date_to']))
            {
                $iDateFrom = strtotime($aSearch['date_from']);
                $iDateTo = strtotime($aSearch['date_to']);
                if(!is_numeric($iDateFrom))
                {
                    Phpfox_Error::set(_p('Invalid Time "From Date"'));
                }
                if(!is_numeric($iDateTo))
                {
                    Phpfox_Error::set(_p('Invalid Time "To Date"'));
                }
                if($iDateFrom > $iDateTo)
                {
                    Phpfox_Error::set(_p('Time "From Date" must smaller than Time "To Date"'));
                }
                else
                {
                    $this->search()->setCondition('AND (mtt.time_stamp BETWEEN '.strtotime($aSearch['date_from'].' 00:00:00').' AND '.strtotime($aSearch['date_to'].' 23:59:59').')');
                }
            }
        }
        if(!empty($aSearch['keyword']))
        {
            $this->search()->setCondition('AND (mtt.text LIKE "%'.$aSearch['keyword'].'%")');
        }
        if(!empty($aSearch['status']))
        {
            $this->search()->setCondition('AND (mtt.is_show = '. ($aSearch['status'] == "showing" ? 1 : 0).')' );
        }


        if(!Phpfox_Error::isPassed())
        {
            $this->template()->setTitle(_p('Manage Messages'))
                ->assign([
                'aForms' => $aSearch,
                'iId' => $iThreadId,
                'sCalendarImagePath' => Phpfox::getParam('core.path_actual').'PF.Site/Apps/core-messages/assets/images/calendar.gif'
            ]);
            return false;
        }
        $this->search()->setCondition('AND (mtt.is_deleted = 0 AND mtt.thread_id = '.$iThreadId.')');
        list($iCnt,$aMessages) = Phpfox::getService('mail')->getMessagesForAdmin($this->search()->getConditions(), $iPage, $iSize);

        $this->search()->browse()->setPagingMode('pagination');
        Phpfox_Pager::instance()->set(array(
            'page' => $iPage,
            'size' => $iSize,
            'count' => $iCnt,
            'paging_mode' => $this->search()->browse()->getPagingMode(),
            'params' => [
                'paging_show_icon' => true // use icon only
            ]
        ));
        $this->template()->setTitle(_p('Manage Messages'))
            ->assign([
            'aMessages' => $aMessages,
            'iId' => $iThreadId,
            'aForms' => $aSearch ,
            'sCalendarImagePath' => Phpfox::getParam('core.path_actual').'PF.Site/Apps/core-messages/assets/images/calendar.gif'
        ]);
    }
}