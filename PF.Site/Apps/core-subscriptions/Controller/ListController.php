<?php
namespace Apps\Core_Subscriptions\Controller;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Pager;

defined('PHPFOX') or exit('NO DICE!');

class ListController extends Phpfox_Component
{
    public function process()
    {
        Phpfox::isUser(true);
        $aPurchases = Phpfox::getService('subscribe.purchase')->getPackagesWithUser(Phpfox::getUserId());
        foreach($aPurchases as $iKey =>  $aPurchase)
        {
            $aPurchases[$iKey]['title_parse'] = Phpfox::isPhrase($aPurchase['title']) ? _p($aPurchase['title']) : $aPurchase['title'];
            $aPurchases[$iKey]['s_title'] = Phpfox::isPhrase($aPurchase['s_title']) ? _p($aPurchase['s_title']) : $aPurchase['s_title'];
            $aPurchases[$iKey]['f_title'] = Phpfox::isPhrase($aPurchase['f_title']) ? _p($aPurchase['f_title']) : $aPurchase['f_title'];
        }

        $iPage = $this->request()->get('page');
        $iSize = 10;
        if(empty($iPage))
        {
            $iPage = 1;
        }
        $aStatus = Phpfox::getService('subscribe')->getStatusList();
        $aVals = $this->request()->getArray('val');

        list($aFilters, $iCnt) = Phpfox::getService('subscribe.purchase')->getMySubscriptions(Phpfox::getUserId(), $aVals, $iPage, $iSize, true);
        foreach($aFilters as $key => $aFilter)
        {
            $aFilters[$key]['title_parse'] = Phpfox::isPhrase($aFilter['title']) ? _p($aFilter['title']) : $aFilter['title'];
            $aFilters[$key]['s_title'] = Phpfox::isPhrase($aFilter['s_title']) ? _p($aFilter['s_title']) : $aFilter['s_title'];
            $aFilters[$key]['f_title'] = Phpfox::isPhrase($aFilter['f_title']) ? _p($aFilter['f_title']) : $aFilter['f_title'];
            $aFilters[$key]['url_detail'] = $this->url()->makeUrl('subscribe.view').'?id='.$aFilter['package_id'];
            if(Phpfox::getLib('parse.format')->isSerialized($aFilter['cost']))
            {
                $aCost = unserialize($aFilter['cost']);
                $iCost = (float)$aCost[$aFilter['currency_id']];
                $sSymbol = Phpfox::getService('core.currency')->getSymbol($aFilter['currency_id']);
                $aFilters[$key]['cost_parse'] = !empty($iCost) ? $sSymbol.$iCost : _p('Free');
            }
            if((int)$aFilter['recurring_period'] > 0 && (int)$aFilter['renew_type'] == 2 && (int)$aFilter['is_removed'] == 0)
            {
                $sToday = strtotime('10/11/2018');
                $iNumberDaysToNofity = (int)$aFilter['number_day_notify_before_expiration'];
                $sShowRenewDay = strtotime($iNumberDaysToNofity == 1 ? "-1 day" : "-".$iNumberDaysToNofity.' days', $aFilter['expiry_date']);
                if(($sShowRenewDay <= $sToday) && ($sToday <= ((int)$aFilter['expiry_date'] + 3*24*3600)))
                {
                    $aFilters[$key]['show_renew'] = true;
                }
            }
        }

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

        $this->template()->assign([
           'aFilters' => $aFilters,
            'aSearchData' => $aVals
        ]);



        if ( ($sPlugin = Phpfox_Plugin::get('subscribe.component_controller_list__1')) ){eval($sPlugin); if (isset($mReturnPlugin)){return $mReturnPlugin;}}

        $this->template()->setTitle(_p('membership_packages'))
            ->setBreadCrumb(_p('membership_packages'), $this->url()->makeUrl('subscribe'))
            ->setBreadCrumb(_p('subscriptions'), $this->url()->makeUrl('subscribe.list'), true)
            ->assign(array(
                    'aPurchases' => $aPurchases,
                    'aStatuses' => $aStatus,
                    'sDefaultPhoto' => Phpfox::getParam('subscribe.default_photo_package')
                )
            );
        $aSectionMenus = [
            _p('menu_membership_packages') => '',
            _p('menu_my_subscriptions') => 'subscribe.list',
        ];
        if(setting('subscribe.enable_subscription_packages'))
        {
            $aSectionMenus[_p('subscribe_menu_plan_comparison')] = 'subscribe.compare';
        }
        $this->template()->buildSectionMenu('subscribe', $aSectionMenus);

        return null;
    }

    /**
     * Garbage collector. Is executed after this class has completed
     * its job and the template has also been displayed.
     */
    public function clean()
    {
        (($sPlugin = Phpfox_Plugin::get('subscribe.component_controller_list_clean')) ? eval($sPlugin) : false);
    }
}