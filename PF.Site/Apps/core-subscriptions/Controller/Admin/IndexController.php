<?php
namespace Apps\Core_Subscriptions\Controller\Admin;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Pager;
use Phpfox_Error;

defined('PHPFOX') or exit('NO DICE!');

class IndexController extends Phpfox_Component
{
    public function process()
    {
        if (($iDeleteId = $this->request()->getInt('delete')))
        {
            if (Phpfox::getService('subscribe.process')->delete($iDeleteId))
            {
                $this->url()->send('admincp.subscribe', null, _p('package_successfully_deleted'));
            }
        }
        $aVals = $this->request()->getArray('val');
        $this->template()->assign([
            'aTypes' => [
                'onetime' => _p('One Time'),
                'recurring' => _p('Recurring')
            ],
            'aPackageStatus' => [
                'on' => _p('On'),
                'off' => _p('Off')
            ],
            'aPeriod' => [
                'all' => _p('All Time'),
                'custom' => _p('Custom Time')
            ],
            'sDefaultPeriod' => !empty($aVals['period']) ? $aVals['period'] : 'all'
        ]);


        $iSize = 20;
        $iPage = $this->request()->getInt('page');
        if(empty($iPage))
        {
            $iPage = 1;
        }
        if(!empty($aVals['period']) && $aVals['period'] == "custom")
        {
            if(empty($aVals['from']))
            {
                Phpfox_Error::set(_p("Time from can't be empty when selecting custom for period statistics"));
            }
            if(empty($aVals['to']))
            {
                Phpfox_Error::set(_p("Time to can't be empty when selecting custom for period statistics"));
            }
            if(!empty($aVals['from']) && !empty($aVals['to']) && ((int)strtotime($aVals['from']) > (int)strtotime($aVals['to']) ))
            {
                Phpfox_Error::set(_p("Time to must be longer than Time from"));
            }
            if(!Phpfox_Error::isPassed())
            {
                $this->template()->assign([
                    'aSearch' => $aVals,
                    'bError' => true
                ]);
                return false;
            }
        }
        list($aPackages, $iCnt) = Phpfox::getService('subscribe')->getForAdmin($aVals, $iPage, $iSize, true);
        $this->search()->browse()->setPagingMode('pagination');
        $bHasPackage = Phpfox::getService('subscribe')->getPackageCount();
        Phpfox_Pager::instance()->set(array(
            'page' => $iPage,
            'size' => $iSize,
            'count' => $iCnt,
            'paging_mode' => $this->search()->browse()->getPagingMode(),
            'params' => [
                'paging_show_icon' => true // use icon only
            ]
        ));
        $this->template()->setTitle(_p('subscription_packages'))
            ->setBreadCrumb(_p('subscription_packages'), $this->url()->makeUrl('admincp.subscribe'))
            ->setActiveMenu('admincp.member.subscribe')
            ->assign(array(
                    'aPackages' => $aPackages,
                    'aSearch' => $aVals,
                    'bHasPackage' => (bool)$bHasPackage
                )
            );
    }

    /**
     * Garbage collector. Is executed after this class has completed
     * its job and the template has also been displayed.
     */
    public function clean()
    {
        (($sPlugin = Phpfox_Plugin::get('subscribe.component_controller_admincp_index_clean')) ? eval($sPlugin) : false);
    }
}