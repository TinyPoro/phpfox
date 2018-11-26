<?php
namespace Apps\Core_Activity_Points\Controller;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class InformationController
 * @package Apps\Core_Activity_Points\Controller
 */
class InformationController extends Phpfox_Component
{
    public function process()
    {
        Phpfox::isUser(true);
        $aModules = Phpfox::getService('activitypoint')->getPointSettings(Phpfox::getUserBy('user_group_id'));
        $aActiveSettings = Phpfox::getService('activitypoint')->filterActivePointSetting($aModules, Phpfox::getUserBy('user_group_id'));
        if(!empty($aModules))
        {
            $iFlag = 0;
            foreach($aModules as $sKey => $aModule)
            {
                if($iFlag == 1)
                {
                    break;
                }
                $aModules[$sKey]['active'] = 1;
                $iFlag++;
            }
        }
        Phpfox::getService('activitypoint')->buildMenu();
        $this->template()->setTitle(_p('activitypoint_how_to_earn'))
            ->setPhrase(['activitypoint_select_payment_method'])
            ->setBreadCrumb(_p('activitypoint_how_to_earn'))
            ->assign([
                'aModules' => $aActiveSettings,
            ]);
    }
}