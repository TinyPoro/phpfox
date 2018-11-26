<?php
namespace Apps\Core_Activity_Points\Controller\Admin;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Error;
use Phpfox_Pager;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class TransactionController
 * @package Apps\Core_Activity_Points\Controller\Admin
 */
class TransactionController extends Phpfox_Component
{
    public function process()
    {
        $iDay = 7;
        $sDefaultDateTo = PHPFOX_TIME;
        $sDefaultDateFrom = $sDefaultDateTo - ($iDay * 86400);
        $aSearch = $this->request()->get('val');
        $aModuleAppNames = Phpfox::getService('activitypoint')->getAllAppAndModuleNameForTransaction();
        $aModuleAppForSearch = Phpfox::getService('activitypoint')->getSettingApps();
        if(empty($aSearch['from_month']) && empty($aSearch['to_month']))
        {
            $aSearch['from_day'] = Phpfox::getTime('j',$sDefaultDateFrom);
            $aSearch['from_month'] = Phpfox::getTime('n',$sDefaultDateFrom);
            $aSearch['from_year'] = Phpfox::getTime('Y',$sDefaultDateFrom);

            $aSearch['to_day'] = Phpfox::getTime('j',$sDefaultDateTo);
            $aSearch['to_month'] = Phpfox::getTime('n',$sDefaultDateTo);
            $aSearch['to_year'] = Phpfox::getTime('Y',$sDefaultDateTo);
        }
        if((!empty($aSearch['from_month']) && empty($aSearch['to_month'])) || (!empty($aSearch['to_month']) && empty($aSearch['from_month'])))
        {
            Phpfox_Error::set(_p('Invalid "From Date" or "To Date"'));
        }
        if(!empty($aSearch['from_month']) && !empty($aSearch['to_month']) && (Phpfox::getLib('date')->mktime(0, 0, 0,
                    $aSearch['from_month'], $aSearch['from_day'], $aSearch['from_year']) > Phpfox::getLib('date')->mktime(0, 0, 0,
                    $aSearch['to_month'], $aSearch['to_day'], $aSearch['to_year'])))
        {
            Phpfox_Error::set(_p('"From Date" must be smaller than "To Date"'));
        }
        if(!empty($aSearch['user_id']))
        {
            $aSearch['user_id'] = Phpfox::getLib('parse.input')->clean(strip_tags(trim($aSearch['user_id'],',')));
            $aUserIds = explode(',',$aSearch['user_id']);
            if(empty($aUserIds))
            {
                Phpfox_Error::set(_p('Invalid User(s)'));
            }
            foreach($aUserIds as $iId)
            {
                if(!is_numeric($iId))
                {
                    Phpfox_Error::set(_p('Invalid User(s)'));
                    break;
                }
            }

        }
        $sSort = !empty($this->request()->get('sort')) ? $this->request()->get('sort') : 't.time_stamp DESC';

        if(Phpfox_Error::isPassed())
        {
            $oSearch = $this->search();
            if(!empty($aSearch['user']))
            {
                $oSearch->setCondition(' AND (u.full_name LIKE "%'.$aSearch['user'].'%")');
            }
            if(!empty($aSearch['type']))
            {
                $oSearch->setCondition(' AND (t.type = "'.$aSearch['type'].'")');
            }
            if(!empty($aSearch['from_month']) && !empty($aSearch['to_month']))
            {
                $oSearch->setCondition(' AND (t.time_stamp BETWEEN '.Phpfox::getLib('date')->mktime(0, 0, 0,
                        $aSearch['from_month'], $aSearch['from_day'], $aSearch['from_year']).' AND '.Phpfox::getLib('date')->mktime(23, 59, 59,
                        $aSearch['to_month'], $aSearch['to_day'], $aSearch['to_year']).')');
            }
            if(!empty($aSearch['module_id']))
            {
                $oSearch->setCondition(' AND (t.module_id = "'.$aSearch['module_id'].'")');
            }
            if(!empty($aSearch['action']))
            {
                $oSearch->setCondition(' AND (t.action = "'. $aSearch['action']. '")');
            }
            if(!empty($aSearch['user_id']))
            {
                $oSearch->setCondition(' AND (t.user_id IN ('. $aSearch['user_id'] . '))');
            }
            $oSearch->setCondition(' AND (t.is_hidden = 0)');

            $iPage = $this->request()->getInt('page');
            if(empty($iPage))
            {
                $iPage = 1;
            }
            $iSize = 10;
            list($iCnt, $aTransactions) = Phpfox::getService('activitypoint.process')->getTransactionsForAdmin($oSearch->getConditions(), $iPage, $iSize, $sSort);
            if(!empty($aModuleAppNames))
            {
                foreach($aTransactions as $iKey => $aTransaction)
                {
                    $aTransactions[$iKey]['module_title'] = $aModuleAppNames[$aTransaction['module_id']];
                    $aParams = [];
                    if(!empty($aTransaction['action_params']) && Phpfox::getLib('parse.format')->isSerialized($aTransaction['action_params']))
                    {
                        $aParams = unserialize($aTransaction['action_params']);
                    }
                    $aTransactions[$iKey]['phrase'] = \Core\Lib::phrase()->isPhrase($aTransaction['phrase']) ? (!empty($aParams) ? _p($aTransaction['phrase'],$aParams) : _p($aTransaction['phrase'])) : $aTransaction['phrase'];
                }
            }
            $oSearch->browse()->setPagingMode('pagination');
            Phpfox_Pager::instance()->set(array(
                'page' => $iPage,
                'size' => $iSize,
                'count' => $iCnt,
                'paging_mode' => $this->search()->browse()->getPagingMode()
            ));
        }

        Phpfox::getService('activitypoint')->buildMenu();
        $this->template()->setTitle(_p('activitypoint_transaction_history'))
                        ->setBreadCrumb(_p('apps'), $this->url()->makeUrl('admincp.apps'))
                        ->setBreadCrumb('module_activitypoint', $this->url()->makeUrl('admincp.app', ['id' => 'Core_Activity_Points']))
                        ->setBreadCrumb(_p('activitypoint_transaction_history'), $this->url()->makeUrl('admincp.activitypoint.transaction'))
                        ->assign([
                            'sFromDate' => Phpfox::getTime('n/j/Y', $sDefaultDateFrom),
                            'sToDate' => Phpfox::getTime('n/j/Y', $sDefaultDateTo),
                            'sCalendarImage' => Phpfox::getParam('activitypoint.url_asset_images').'calendar.gif',
                            'sCurrent' => $sSort,
                            'aTransactions' => $aTransactions,
                            'aForms' => $aSearch,
                            'aPointTypes' => [ _p('Bought'), _p('Earned'), _p('Received'), _p('Sent'), _p('Spent')],
                            'aActions' => Phpfox::getService('activitypoint')->getSettingActions(),
                            'aSettingApps' => $aModuleAppForSearch,
                        ]);
    }
}