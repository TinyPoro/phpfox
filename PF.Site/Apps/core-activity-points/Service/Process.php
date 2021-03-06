<?php
namespace Apps\Core_Activity_Points\Service;

use Phpfox;
use Phpfox_Error;
use Phpfox_Plugin;
use Phpfox_Service;
use Phpfox_Locale;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class Process
 * @package Apps\Core_Activity_Points\Service
 */
class Process extends Phpfox_Service
{

    /**
     * Track gift points actions
     * @param $iSenderUserId
     * @param $iReceiverUserId
     * @param $iAmount
     * @return bool
     */
    public function doGiftPoints($iSenderUserId, $iReceiverUserId, $iAmount)
    {
        if(empty($iSenderUserId) || empty($iReceiverUserId))
        {
            return false;
        }
        $iAmount = abs((int)$iAmount);
        if($iAmount <= 0)
        {
            return false;
        }

        $aUsers = db()->select('a.user_id, a.total_sent, a.total_received, u.full_name, u.user_name')
                    ->from(Phpfox::getT('activitypoint_statistics'), 'a')
                    ->join(Phpfox::getT('user'),'u','u.user_id = a.user_id')
                    ->where('a.user_id IN ('.$iSenderUserId.','.$iReceiverUserId.')')
                    ->execute('getSlaveRows');

        $aUserNames = array_combine(array_column($aUsers,'user_id'), array_column($aUsers, 'user_name'));
        $aFullNames = array_combine(array_column($aUsers,'user_id'), array_column($aUsers, 'user_name'));

        $iTimestamp = PHPFOX_TIME;
        foreach($aUsers as $aUser)
        {
            $iNewPoints = ((int)$aUser['user_id'] == (int)$iSenderUserId ? (int)$aUser['total_sent'] + $iAmount : (int)$aUser['total_received'] + $iAmount);
            db()->update(Phpfox::getT('activitypoint_statistics'),[((int)$aUser['user_id'] == (int)$iSenderUserId ? 'total_sent' : 'total_received') => $iNewPoints], 'user_id = '.(int)$aUser['user_id']);
            db()->insert(Phpfox::getT('activitypoint_transaction'),[
                'user_id' => $aUser['user_id'],
                'module_id' => 'activitypoint',
                'type' => (int)$aUser['user_id'] == (int)$iSenderUserId ? 'Sent' : 'Received',
                'action' => (int)$aUser['user_id'] == (int)$iSenderUserId ? 'activitypoint_sent_points_action' : 'activitypoint_received_points_action',
                'points' => $iAmount,
                'time_stamp' => $iTimestamp,
                'action_params' => serialize(['full_name' => (int)$aUser['user_id'] == (int)$iSenderUserId ? $aFullNames[$iReceiverUserId] : $aFullNames[$iSenderUserId], 'link' => Phpfox::getLib('url')->makeUrl('profile',[ (int)$aUser['user_id'] == (int)$iSenderUserId ? $aUserNames[$iReceiverUserId] : $aUserNames[$iSenderUserId]])])
            ]);
        }

        return true;
    }

    /**
     * Get transactions searching for admincp
     * @param $aConds
     * @param $iPage
     * @param $iSize
     * @param $sSort
     * @return array
     */
    public function getTransactionsForAdmin($aConds, $iPage, $iSize, $sSort)
    {
        $iCnt = db()->select('COUNT(*)')
                    ->from(Phpfox::getT('activitypoint_transaction'),'t')
                    ->join(Phpfox::getT('user'),'u', 'u.user_id = t.user_id')
                    ->where($aConds)
                    ->execute('getSlaveField');
        $aRows = [];
        if((int)$iCnt > 0)
        {
            $sDefaultLanguage = Phpfox_Locale::instance()->getLangId();
            $aRows = db()->select('t.*, s.phrase_var_name, '. Phpfox::getUserField())
                ->from(Phpfox::getT('activitypoint_transaction'),'t')
                ->join(Phpfox::getT('user'),'u', 'u.user_id = t.user_id')
                ->leftJoin(Phpfox::getT('activitypoint_setting'),'s', 's.var_name = t.action')
                ->where($aConds)
                ->order($sSort)
                ->limit($iPage, $iSize)
                ->execute('getSlaveRows');

            foreach($aRows as $iKey => $aRow)
            {
                $aRows[$iKey]['phrase'] = !empty($aRow['phrase_var_name']) && \Core\Lib::phrase()->isPhrase($aRow['phrase_var_name']) ? $aRow['phrase_var_name'] : $aRow['action'];
                $aRows[$iKey]['type'] = Phpfox::getService('activitypoint')->getTypePhrase($aRow['type']);
            }
        }
        return [$iCnt, $aRows];
    }

    /**
     * Get members statistics of points in admincp
     * @param $aConds
     * @param $iPage
     * @param $iSize
     * @param $sSort
     * @return array
     */
    public function getMemberPointsForAdmin($aConds, $iPage, $iSize, $sSort)
    {
        $iCnt = db()->select('COUNT(*)')
                    ->from(Phpfox::getT('activitypoint_statistics'),'s')
                    ->join(Phpfox::getT('user'), 'u', 'u.user_id = s.user_id')
                    ->join(Phpfox::getT('user_activity'),'a', 'a.user_id = s.user_id')
                    ->where($aConds)
                    ->execute('getSlaveField');
        $aRows = [];
        if($iCnt)
        {
            $aRows = db()->select('s.*, a.activity_points, '.Phpfox::getUserField())
                ->from(Phpfox::getT('activitypoint_statistics'),'s')
                ->join(Phpfox::getT('user'), 'u', 'u.user_id = s.user_id')
                ->join(Phpfox::getT('user_activity'),'a', 'a.user_id = s.user_id')
                ->where($aConds)
                ->order($sSort)
                ->limit($iPage, $iSize)
                ->execute('getSlaveRows');
        }
        return [$iCnt, $aRows];

    }

    /**
     * Execute actions for users with points
     * @param $sUserId
     * @param $sAction
     * @param $iPoints
     * @return bool
     * @throws \Exception
     */
    public function adjustPoints($sUserId, $sAction, $iPoints)
    {
        Phpfox::isAdmin(true);
        $sUserId = Phpfox::getLib('parse.input')->clean(strip_tags(trim($sUserId,',')));
        $aUserIds = explode(',', $sUserId);
        $iMemberNumber = !empty($aUserIds) ? count($aUserIds) : 0;
        $iPoints = (int)$iPoints;

        if(($iPoints * $iMemberNumber) <= 0)
        {
            return Phpfox_Error::set(_p('activitypoint_cannot_send_negative_point_number'));
        }

        if($sAction == "send" && !$this->checkAdjustPointPermission(Phpfox::getUserId(), Phpfox::getUserBy('user_group_id'), $iPoints*$iMemberNumber))
        {
            return Phpfox_Error::set(_p('activitypoint_do_not_permission'));
        }


        if(!empty($aUserIds))
        {
            $aCurrentPoints = db()->select('user_id, activity_points AS points')
                                ->from(Phpfox::getT('user_activity'))
                                ->where('user_id IN ('.$sUserId.')')
                                ->execute('getSlaveRows');
            $aTotalSent = db()->select('s.user_id, '. ($sAction == "send" ? 's.total_received' : 's.total_sent'))
                ->from(Phpfox::getT('activitypoint_statistics'), 's')
                ->join(Phpfox::getT('user'), 'u', 'u.user_id = s.user_id')
                ->where('s.user_id IN ('.$sUserId.')')
                ->execute('getSlaveRows');

            $aTotalSent = array_combine(array_column($aTotalSent,'user_id'),array_column($aTotalSent,($sAction == "send") ? 'total_received' : 'total_sent'));
            $aCurrentPoints = array_combine(array_column($aCurrentPoints,'user_id'),array_column($aCurrentPoints,'points'));

            foreach($aUserIds as $iId)
            {
                $iNewPoints = ($sAction == "send") ? ((int)$aCurrentPoints[$iId] + $iPoints) : ((int)$aCurrentPoints[$iId] - $iPoints);
                $iNewTotalSent = (int)$aTotalSent[$iId] + $iPoints;
                db()->update(Phpfox::getT('user_activity'),['activity_points' => $iNewPoints],'user_id = '.(int)$iId);
                if($sAction == "send")
                {
                    db()->update(Phpfox::getT('activitypoint_statistics'),['total_received' => $iNewTotalSent],'user_id = '. (int)$iId);
                }
                else
                {
                    db()->update(Phpfox::getT('activitypoint_statistics'),['total_sent' => $iNewTotalSent],'user_id = '. (int)$iId);
                }
                db()->insert(Phpfox::getT('activitypoint_transaction'),[
                    'user_id' => (int)$iId,
                    'module_id' => 'activitypoint',
                    'type' => ($sAction == "send") ? 'Received':'Sent',
                    'action' => ($sAction == "send") ? 'activitypoint_received_points_from_admin' : 'activitypoint_subtracted_points_from_admin',
                    'points' => $iPoints,
                    'time_stamp' => PHPFOX_TIME,
                    'action_params' => serialize(['full_name' => Phpfox::getUserBy('full_name'), 'link' => Phpfox::getLib('url')->makeUrl('profile',[Phpfox::getUserBy('user_name')])])
                ]);
            }
            db()->insert(Phpfox::getT('activitypoint_period_adjust_point'),[
                'user_id' => Phpfox::getUserId(),
                'time_stamp' => PHPFOX_TIME,
                'points' => $iPoints * $iMemberNumber,
                'type' => $sAction
            ]);
            return true;
        }
        return Phpfox_Error::set(_p('activitypoint_invalid_users'));

    }


    /**
     * Get transactions by conditions for users
     * @param $aConds
     * @param $iPage
     * @param $iSize
     * @param $sSort
     * @return array
     */
    public function getTransactions($aConds, $iPage, $iSize, $sSort)
    {
        $iCnt = db()->select('COUNT(*)')
            ->from(Phpfox::getT('activitypoint_transaction'),'t')
            ->where($aConds)
            ->execute('getSlaveField');
        $aRows = [];
        if((int)$iCnt > 0)
        {
            $sDefaultLanguage = Phpfox_Locale::instance()->getLangId();
            $aRows = db()->select('t.*, s.phrase_var_name')
                ->from(Phpfox::getT('activitypoint_transaction'),'t')
                ->leftJoin(Phpfox::getT('activitypoint_setting'),'s', 's.var_name = t.action')
                ->where($aConds)
                ->order($sSort)
                ->group('t.transaction_id')
                ->limit($iPage, $iSize)
                ->execute('getSlaveRows');
            foreach($aRows as $iKey => $aRow)
            {
                $aRows[$iKey]['phrase'] = !empty($aRow['phrase_var_name']) && \Core\Lib::phrase()->isPhrase($aRow['phrase_var_name']) ? $aRow['phrase_var_name'] : $aRow['action'];
                $aRows[$iKey]['type'] = Phpfox::getService('activitypoint')->getTypePhrase($aRow['type']);
            }
        }
        return [$iCnt, $aRows];
    }

    /**
     * Check user permission for adjusting points
     * @param $iUserId
     * @param $iUserGroupId
     * @param bool $bDoAction
     * @return bool
     */
    public function checkAdjustPointPermission($iUserId, $iUserGroupId, $iPoints)
    {
        $iUserGroupId = (int)$iUserGroupId;
        if(!Phpfox::getUserGroupParam($iUserGroupId, 'activitypoint.can_admin_adjust_activity_points'))
        {
            return false;
        }
        $sPeriod = Phpfox::getUserGroupParam($iUserGroupId,'activitypoint.period_time_admin_adjust_activity_points');
        $iPeriodTime = Phpfox::getService('activitypoint')->getPeriodTime($sPeriod);

        if(!$iPeriodTime)
        {
            return false;
        }

        $iTotalSentPoints = db()->select('SUM(points)')
                                ->from(Phpfox::getT('activitypoint_period_adjust_point'))
                                ->where('type = "send" AND user_id = '.(int)$iUserId.' AND time_stamp >= '.$iPeriodTime)
                                ->execute('getSlaveField');
        $iMaxPoints = Phpfox::getUserParam('activitypoint.maximum_activity_points_admin_can_adjust');

        if(($iTotalSentPoints + $iPoints) > $iMaxPoints)
        {
            return false;
        }
        return true;
    }


    /**
     * Update point settings for usergroup
     * @param $aVals
     * @param $iGroupId
     * @return bool
     */
    public function updatePointSettings($aVals, $iGroupId)
    {
        $aPointSettings = Phpfox::getService('activitypoint')->getAllPointSettings();
        foreach($aVals as $sModule => $aModule)
        {
            $bActiveModule = !empty($aModule['is_active']) ? true : false;
            foreach($aModule['settings'] as $sVarName => $aSetting)
            {
                $aMaxEarned = unserialize($aPointSettings[$sVarName]['max_earned']);
                $aPeriod = unserialize($aPointSettings[$sVarName]['period']);
                $aActive = unserialize($aPointSettings[$sVarName]['is_active']);

                $aMaxEarned[$iGroupId] = (int)$aSetting['max_earned'];
                $aPeriod[$iGroupId] = (int)$aSetting['period'];
                $aActive[$iGroupId] = $bActiveModule ? (!empty($aSetting['is_active']) ? 1 : 0) : 0;
                db()->update(Phpfox::getT('activitypoint_setting'),[
                    'max_earned' => serialize($aMaxEarned),
                    'period' => serialize($aPeriod),
                    'is_active' => serialize($aActive)
                ],'var_name = "'.$sVarName.'" AND module_id = "'.$sModule.'"');

                $iValue = (int)$aSetting['value'];
                db()->delete(Phpfox::getT('user_setting'),
                    'user_group_id = ' . $iGroupId . ' AND setting_id = ' . (int)$aPointSettings[$sVarName]['setting_id']);
                db()->insert(Phpfox::getT('user_setting'),
                    array('user_group_id' => $iGroupId, 'setting_id' => (int)$aPointSettings[$sVarName]['setting_id'], 'value_actual' => (int)$iValue));
            }
        }
        $this->cache()->remove('point_settings_usergroup_'.$iGroupId);
        $this->cache()->remove('active_point_settings_usergroup_'.$iGroupId);
        $this->cache()->remove('activitypoint_get_all_point_settings');
        $this->cache()->remove('user_group_setting_' . $iGroupId);
        $this->cache()->remove('activitypoint_all_settings_for_update_points');
        return true;
    }

    /**
     * @param $sModule
     * @param $iItem
     * @param $iTotal
     * @param $sCurrency
     * @param int|null $iUserId
     * @return bool|mixed
     */
    public function purchaseWithPoints($sModule, $iItem, $iTotal, $sCurrency, $iUserId = null)
    {
        if (!Phpfox::isModule($sModule))
        {
            return Phpfox_Error::set(_p('not_a_valid_module_dot'));
        }
        if (!isset($iUserId)) {
            $iUserId = Phpfox::getUserId();
        }
        $iTotalPoints = (int) db()->select('activity_points')
            ->from(Phpfox::getT('user_activity'))
            ->where('user_id = ' . (int) $iUserId)
            ->execute('getSlaveField');
        $aSetting = Phpfox::getParam('activitypoint.activity_points_conversion_rate');
        if (isset($aSetting[$sCurrency]))
        {
            $iConversion = ($aSetting[$sCurrency] == 0) ? 0 : $iTotal / $aSetting[$sCurrency];
            if ($iTotalPoints >= $iConversion)
            {
                $iNewPoints = ($iTotalPoints - $iConversion);

                $bReturn = Phpfox::callback($sModule. '.paymentApiCallback', array(
                        'gateway' => 'activitypoints',
                        'status' => 'completed',
                        'item_number' => $iItem,
                        'total_paid' => $iTotal
                    )
                );

                Phpfox::getService('api.gateway')->callback('activitypoints');

                if ($bReturn === false)
                {
                    return false;
                }

                db()->update(Phpfox::getT('user_activity'), array('activity_points' => (int) $iNewPoints), 'user_id = ' . (int) $iUserId);

                $iTotalSpent = db()->select('total_spent')
                                ->from(Phpfox::getT('activitypoint_statistics'))
                                ->where('user_id = '.(int)$iUserId)
                                ->execute('getSlaveField');
                $iTotalSpent = (int)$iTotalSpent + (int)$iConversion;
                db()->update(Phpfox::getT('activitypoint_statistics'),['total_spent' => $iTotalSpent], 'user_id = '.(int)$iUserId);

                $aTransaction = [
                    'user_id' => (int)$iUserId,
                    'module_id' => $sModule,
                    'type' => 'Spent',
                    'action' => 'activitypoint_use_points_to_buy',
                    'points' => $iConversion,
                    'time_stamp' => PHPFOX_TIME
                ];
                db()->insert(Phpfox::getT('activitypoint_transaction'), $aTransaction);

                if (!empty($bReturn) && !empty($bReturn['return_array'])) {
                    return $bReturn;
                }

                return true;
            }
        }

        return Phpfox_Error::set(_p('not_enough_points', array('total' => (int) $iTotalPoints)));
    }

    /**
     * @param $iUserId
     * @param $sType
     * @param string $sMethod
     * @param int $iCnt
     * @return bool
     */
    public function updatePoints($iUserId, $sType, $sMethod = '+', $iCnt = 0)
    {
        if (!$iUserId) {
            return false;
        }

        if ($sMethod != '+' && $sMethod != '-') {
            return Phpfox_Error::trigger('Invalid activity method: ' . $sMethod);
        }

        $sModule = $sType;
        $sModuleExtra = null;
        if (preg_match('/(.*)_(.*)/i', $sModule, $aMatches)) {
            $sModule = $aMatches[1];
        }
        if(!Phpfox::isModule($sModule))
        {
            return false;
        }

        $iPoints = Phpfox::getUserParam($sModule . '.points_' . $sType);

        if((int)$iPoints <= 0)
        {
            return false;
        }

        $iUserGroupId = $this->database()->select("user_group_id")
            ->from(Phpfox::getT('user'))
            ->where('user_id = ' . (int) $iUserId)
            ->execute('getSlaveField');

        if ($iUserId != Phpfox::getUserId())
        {
            $iPoints = Phpfox::getService('user.group.setting')->getGroupParam($iUserGroupId, $sModule . '.points_' . $sType);
        }

        // add job item
        Phpfox::getLib('queue')->instance()->addJob('core_activitypoint_update_points', [
            'iUserId' => (int)$iUserId,
            'sType' => $sType,
            'iCnt' => $iCnt,
            'sSettingName' => 'points_'.$sType,
            'sModule' => $sModule,
            'iTimestamp' => PHPFOX_TIME,
            'sMethod' => $sMethod,
            'iPoints' => (int)$iPoints,
            'iUserGroupId' => $iUserGroupId
        ], null, 3600);
    }
}