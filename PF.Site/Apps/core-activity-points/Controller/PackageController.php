<?php
namespace Apps\Core_Activity_Points\Controller;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class PackageController
 * @package Apps\Core_Activity_Points\Controller
 */
class PackageController extends Phpfox_Component
{
    public function process()
    {
        Phpfox::isUser(true);
        if(user('activitypoint.can_purchase_points'))
        {
            $aPackages = Phpfox::getService('activitypoint.package')->getPackages();
            foreach($aPackages as $iKey => $aPackage)
            {
                if(empty($aPackage['default_price']['price']))
                {
                    unset($aPackages[$iKey]);
                }
            }
            Phpfox::getService('activitypoint')->buildMenu();
            $this->template()->setPhrase([
                    'activitypoint_select_payment_method'
                ])->assign([
                    'aPackages' => $aPackages
                ]);
        }
        else
        {
            $sWarning = _p('activitypoint_permission_purchase_packages_warning_message',[
                'link' => $this->url()->makeUrl('activitypoint.information')
            ]);
            $this->template()->assign([
                'sWarningMessage' => $sWarning
            ]);
        }
        $this->template()->setTitle(_p('activitypoint_point_packages_title'))
            ->setBreadCrumb(_p('activitypoint_point_packages_title'));
    }
}