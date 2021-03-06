<?php
namespace Apps\Core_Activity_Points\Block;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Error;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class AdjustPointBlock
 * @package Apps\Core_Activity_Points\Block
 */
class AdjustPointBlock extends Phpfox_Component
{
    public function process()
    {
        Phpfox::isUser(true);

        $sUserId = $this->getParam('user_id');
        $aUsers = Phpfox::getService('activitypoint')->getUsersForPointActions($sUserId);
        $sMaximumPointsForReduce = Phpfox::getService('activitypoint')->getMaximumPointsForReduceAction($sUserId);
        $iSentMaximumPoints = (int)Phpfox::getUserGroupParam(Phpfox::getUserBy('user_group_id'), 'activitypoint.maximum_activity_points_admin_can_adjust');
        $iPointsCanSent = (int)Phpfox::getService('activitypoint')->getPointsUserCanSentInAdmincp(Phpfox::getUserId());
        $this->template()->assign([
            'aUsers' => $aUsers,
            'sUserId' => Phpfox::getLib('parse.input')->clean(strip_tags(trim($sUserId,','))),
            'sMaximumPointsForReduce' => $sMaximumPointsForReduce,
            'iSentMaximumPoints' => $iSentMaximumPoints,
            'bDisableAll' => ((empty($iSentMaximumPoints) || empty($iPointsCanSent))&& (int)$sMaximumPointsForReduce == 0) ? true : false,
            'iPointsCanSent' => $iPointsCanSent
        ]);
    }
}