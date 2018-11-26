<?php
namespace Apps\Core_Subscriptions\Service;

use Phpfox;
use Phpfox_Error;
use Phpfox_Plugin;
use Phpfox_Service;

defined('PHPFOX') or exit('NO DICE!');

class Subscribe extends Phpfox_Service
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->_sTable = Phpfox::getT('subscribe_package');
    }

    public function getCurrentUsingPackageForCompare($iUserId)
    {
        $aPackage = db()->select('*')
                        ->from($this->_sTable,'spack')
                        ->join(Phpfox::getT('subscribe_purchase'),'sp', 'sp.package_id = spack.package_id')
                        ->where('sp.user_id = '.$iUserId.' AND sp.status = "completed"')
                        ->order('field(sp.status,"completed") DESC, sp.time_stamp DESC')
                        ->limit(1)
                        ->execute('getSlaveRow');
        if(!empty($aPackage))
        {
            if (!empty($aPackage['cost']) && Phpfox::getLib('parse.format')->isSerialized($aPackage['cost'])) {
                $aCosts = unserialize($aPackage['cost']);

                foreach ($aCosts as $sKey => $iCost) {
                    if (Phpfox::getService('core.currency')->getDefault() == $sKey) {
                        $aPackage['default_cost'] = $iCost;
                    }
                }
            }

            if (empty($aPackage['recurring_cost']) || !Phpfox::getLib('parse.format')->isSerialized($aPackage['recurring_cost']) || $aPackage['recurring_period'] == 0) {
                $aPackage['recurring_fee'] = (int)$aPackage['recurring_cost'];
            } else {
                $aPackage['aRecurring'] = unserialize($aPackage['recurring_cost']);
                foreach ($aPackage['aRecurring'] as $sCurrency => $iAmount) {
                    if ($sCurrency == Phpfox::getService('core.currency')->getDefault()) {
                        $aPackage['recurring_fee'] = $iAmount;
                        break;
                    }
                }
            }

            $aPackageForCompare = [
                'title' => $aPackage['title'],
                'package_id' => $aPackage['package_id'],
                'description' => $aPackage['description'],
                'background_color' => $aPackage['background_color'],
                'default_cost' => $aPackage['default_cost'],
                'show_price' => $aPackage['show_price'],
                'default_recurring_cost' => (int)$aPackage['recurring_period'] > 0 ? $this->getPeriodPhrase($aPackage['recurring_period'],
                    $aPackage['recurring_fee'], $aPackage['default_cost'], '') : '',
                'membership_title' => Phpfox::getService('user.group')->getGroup($aPackage['user_group_id'])['title'],
                'user_group_id' => $aPackage['user_group_id'],
                'purchased_by_current_user' => true,
                'membership_permission' => true,
                'is_active' => $aPackage['is_active'],
                'recurring_period' => $aPackage['recurring_period'],
            ];

            return $aPackageForCompare;
        }
        return [];
    }

    public function getPackageCount()
    {
        $iCnt = db()->select('COUNT(*)')
                    ->from($this->_sTable)
                    ->where('is_removed = 0')
                    ->execute('getSlaveField');
        return $iCnt;
    }
    public function getActiveUserListByPackage($iPackageId)
    {
        $aRows = db()->select('sp.purchase_id AS last_purchase_id, sp.user_id, u.email, spack.title, u.full_name, sp.expiry_date, u.language_id')
                    ->from(Phpfox::getT('subscribe_purchase'),'sp')
                    ->join(Phpfox::getT('user'),'u', 'u.user_id = sp.user_id')
                    ->join(Phpfox::getT('subscribe_package'),'spack', 'spack.package_id = sp.package_id')
                    ->where('sp.package_id = '.$iPackageId.' AND sp.status = "completed" AND (u.email IS NOT NULL OR u.email != "")')
                    ->group('sp.user_id')
                    ->execute('getSlaveRows');
        return $aRows;

    }

    public function checkNumbersOfSubscription($iPackageId)
    {
        $iCnt = db()->select('COUNT(*)')
                    ->from(Phpfox::getT('subscribe_purchase'))
                    ->where('package_id = '.$iPackageId.' AND status IS NOT NULL')
                    ->execute('getSlaveField');
        return (int)$iCnt > 0 ? true : false;
    }

    public function getStatusList()
    {
        $aStatus = [
            'completed' => _p('sub_active'),
            'pending' => _p('Pending'),
            'cancel' => _p('Cancel'),
            'expire' => _p('Expired'),
            'pendingaction' => _p('Pending Action')
        ];
        return $aStatus;
    }
    public function markPackagePopular($iPackageId)
    {
        Phpfox::isAdmin(true);
        if(!empty($iPackageId))
        {
            $aRow = db()->select('package_id')
                        ->from(Phpfox::getT('subscribe_package'))
                        ->where('is_popular = 1')
                        ->execute('getSlaveRow');
            if(!empty($aRow))
            {
                $iOldId = $aRow['package_id'];
                db()->update(Phpfox::getT('subscribe_package'),['is_popular' => 0], 'package_id = '.$iOldId);
            }
            db()->update(Phpfox::getT('subscribe_package'),['is_popular' => 1], 'package_id = '.(int)$iPackageId);
            return true;
        }
        return false;

    }


    /**
     * @param string $sPeriod
     * @param string $sRecurring
     * @param string       $sInitialFee
     * @param string $sCurrencyId
     *
     * @return null|string
     */
    public function getPeriodPhrase($sPeriod, $sRecurring, $sInitialFee, $sCurrencyId = '')
    {
        // recurring price = 0 then, no recurring!
        if (empty($sRecurring)) {
            return null;
        }

        // $sRecurring = `recurring`
        // $sInitialFee = `cost` = initial fee
        $aValues = array(
            'period' => $sPeriod,
            'recurring_fee' => Phpfox::getService('core.currency')->getCurrency($sRecurring,$sCurrencyId),
            'cost' => Phpfox::getService('core.currency')->getCurrency($sInitialFee,$sCurrencyId),
            'initial_fee' => Phpfox::getService('core.currency')->getCurrency($sInitialFee,$sCurrencyId),
            'currency_symbol' => ''
        );
        switch ($sPeriod) {
            case '0': // no recurring
                if ($sInitialFee > 0) {
                    $sPhrase = _p('never_expire_subscription');
                } else {
                    $sPhrase = _p('free');
                }
                break;
            case '1':
                // monthly
                $aValues['period'] = 'monthly';
                $sPhrase = _p('fee_for_recurring', $aValues);

                break;
            case '2':
                // quarterly
                $aValues['period'] = 'quarterly';
                $sPhrase = _p('fee_for_recurring', $aValues);
                break;
            case '3':
                // biannually
                $aValues['period'] = 'biannually';
                $sPhrase = _p('fee_for_recurring', $aValues);
                break;
            case '4':
                // yearly
                $aValues['period'] = 'yearly';
                $sPhrase = _p('fee_for_recurring', $aValues);
                break;
        }

        return isset($sPhrase) ? $sPhrase : '';
    }

    public function getPackages($bIsForSignUp = false, $bShowAllSubscriptions = false, $bGetAll = false)
    {
        $aPackages = $this->database()->select('sp.*')
            ->from($this->_sTable, 'sp')
            ->where('sp.is_removed = 0' . ($bIsForSignUp ? ' AND sp.is_registration = 1' : '') . ($bGetAll ? '' :' AND sp.is_active = 1'))
            ->order('sp.ordering ASC')
            ->execute('getSlaveRows');

        $aSubscriptionsIdPurchasedByUser = $bIsForSignUp ? [] : Phpfox::getService('subscribe.purchase')->getSubscriptionsIdPurchasedByUser(Phpfox::getUserId());

        foreach ($aPackages as $iKey => $aPackage) {

            if ($bShowAllSubscriptions == false) {
                $aVisibleGroup = Phpfox::getLib('parse.format')->isSerialized($aPackage['visible_group']) ? unserialize($aPackage['visible_group']) : $aPackage['visible_group'];
                if(is_array($aVisibleGroup))
                {
                    if(!in_array($aPackage['package_id'],$aSubscriptionsIdPurchasedByUser))
                    {
                        $iCurrenUserGroup = Phpfox::getUserBy('user_group_id');
                        if(!in_array($iCurrenUserGroup, $aVisibleGroup))
                        {
                            unset($aPackages[$iKey]);
                            continue;
                        }
                    }
                }
                else
                {
                    unset($aPackages[$iKey]);
                    continue;
                }

            }

            if (!empty($aPackage['cost']) && Phpfox::getLib('parse.format')->isSerialized($aPackage['cost'])) {
                $aCosts = unserialize($aPackage['cost']);

                foreach ($aCosts as $sKey => $iCost) {
                    if (Phpfox::getService('core.currency')->getDefault() == $sKey) {
                        $aPackages[$iKey]['default_cost'] = $iCost;
                        $aPackages[$iKey]['default_currency_id'] = $sKey;
                        $aPackages[$iKey]['currency_symbol'] = Phpfox::getService('core.currency')->getSymbol($sKey);
                    } else {
                        if ((int)$iCost === 0) {
                            continue;
                        }

                        $aPackages[$iKey]['price'][$sKey]['cost'] = $iCost;
                        $aPackages[$iKey]['price'][$sKey]['currency_id'] = $sKey;
                        $aPackages[$iKey]['price'][$sKey]['currency_symbol'] = Phpfox::getService('core.currency')->getSymbol($sKey);
                    }
                }
                $aPackage = $aPackages[$iKey];
                if ($aPackage['recurring_period'] > 0 && Phpfox::getLib('parse.format')->isSerialized($aPackage['recurring_cost'])) {
                    $aRecurringCosts = unserialize($aPackage['recurring_cost']);
                    foreach ($aRecurringCosts as $sKey => $iCost) {
                        if (Phpfox::getService('core.currency')->getDefault() == $sKey) {
                            $aPackages[$iKey]['default_recurring_cost'] = $this->getPeriodPhrase($aPackage['recurring_period'],
                                $iCost, $aPackages[$iKey]['default_cost'], $aPackage['default_currency_id']);
                            $aPackages[$iKey]['default_recurring_cost_no_phrase'] = $aRecurringCosts[$sKey];
                            $aPackages[$iKey]['default_recurring_currency_id'] = $sKey;
                        }
                    }
                }
            }
        }
        return $aPackages;
    }

    public function getPackagesForCompare($bIsAdminCP = false)
    {
        $aPackages = $this->getPackages(false, true, $bIsAdminCP);
        $aCompare = $this->database()->select('*')->from(Phpfox::getT('subscribe_compare'))->order('ordering ASC')->execute('getSlaveRows');

        $aForCompare = array('packages' => array(), 'features' => array());

        // We store here the packages that have at least one feature assigned, others will be removed
        $aUsedPackages = array();
        // figure out the cost, recurring cost and symbol based on my currency
        foreach ($aPackages as $iKey => $aPackage) {
            $aPackage['aCosts'] = unserialize($aPackage['cost']);

            // Assign the initial fee
            foreach ($aPackage['aCosts'] as $sCurrency => $iAmount) {
                if ($sCurrency == Phpfox::getService('core.currency')->getDefault()) {
                    $aPackages[$iKey]['initial_fee'] = $iAmount;
                    break;
                }
            }

            // Assign the recurring fee
            if (empty($aPackage['recurring_cost']) || !Phpfox::getLib('parse.format')->isSerialized($aPackage['recurring_cost']) || $aPackage['recurring_period'] == 0) {
                $aPackages[$iKey]['recurring_fee'] = (int)$aPackage['recurring_cost'];
            } else {
                $aPackage['aRecurring'] = unserialize($aPackage['recurring_cost']);
                foreach ($aPackage['aRecurring'] as $sCurrency => $iAmount) {
                    if ($sCurrency == Phpfox::getService('core.currency')->getDefault()) {
                        $aPackages[$iKey]['recurring_fee'] = $iAmount;
                        break;
                    }
                }
            }
        }

        // Shape the final array
        foreach ($aCompare as $aRow) {
            $aRow['feature_value'] = json_decode($aRow['feature_value'], true);
            $aForCompare['features'][$aRow['feature_title']] = array();
            $aForCompare['features'][$aRow['feature_title']]['compare_id'] = $aRow['compare_id'];
            $aForCompare['features'][$aRow['feature_title']]['ordering'] = $aRow['ordering'];
            foreach ($aPackages as $aPackage) {
                foreach ($aRow['feature_value'] as $iKey => $aFeatureValue) {
                    if ($iKey == $aPackage['package_id']) {
                        $aForCompare['features'][$aRow['feature_title']]['data'][$aPackage['package_id']] = array(
                            'option' => $aFeatureValue['option'],
                            'text' => $aFeatureValue['text']
                        );
                        $aUsedPackages[$aPackage['package_id']] = 1;
                    }

                }

            }
        }
        $aSubscriptionsIdPurchasedByUser = Phpfox::getService('subscribe.purchase')->getSubscriptionsIdPurchasedByUser(Phpfox::getUserId());
        foreach ($aPackages as $aPackage) {
            $aVisibleGroup = Phpfox::getLib('parse.format')->isSerialized($aPackage['visible_group']) ? unserialize($aPackage['visible_group']): [];
            if (!isset($aPackage['default_recurring_cost']) &&
                (!isset($aPackage['recurring_period']) || !isset($aPackage['recurring_fee']) || !isset($aPackage['initial_fee']) || !isset($aPackage['currency_symbol']))) {
                continue;
            }

            if ($aPackage['recurring_period'] == '0') {
                $aPackage['recurring_fee'] = $aPackage['default_cost'];
            }

            $aForCompare['packages'][$aPackage['package_id']] = array(
                'title' => $aPackage['title'],
                'package_id' => $aPackage['package_id'],
                'description' => $aPackage['description'],
                'background_color' => $aPackage['background_color'],
                'default_cost' => $aPackage['default_cost'],
                'show_price' => $aPackage['show_price'],
                'default_recurring_cost' => (int)$aPackage['recurring_period'] > 0 ? $this->getPeriodPhrase($aPackage['recurring_period'],
                        $aPackage['recurring_fee'], $aPackage['initial_fee'], '') : '',
                'membership_title' => Phpfox::getService('user.group')->getGroup($aPackage['user_group_id'])['title'],
                'user_group_id' => $aPackage['user_group_id'],
                'purchased_by_current_user' => in_array($aPackage['package_id'] , $aSubscriptionsIdPurchasedByUser),
                'membership_permission' => !empty($aVisibleGroup) ? (in_array(Phpfox::getUserBy('user_group_id'), $aVisibleGroup) ? true : false) : false,
                'is_active' => $aPackage['is_active'],
                'recurring_period' => $aPackage['recurring_period'],
            );

        }

        if ($bIsAdminCP == false) {
            // Remove unused packages
            foreach ($aForCompare['packages'] as $iPackageId => $sTitle) {
                if (!isset($aUsedPackages[$iPackageId])) {
                    unset($aForCompare['packages'][$iPackageId]);
                }
            }
        }
        // Add empty cells
        foreach ($aForCompare['features'] as $iFeatureId => $aFeature) {
            foreach ($aForCompare['packages'] as $iPackageId => $aPackage) {
                if (!isset($aForCompare['features'][$iFeatureId]['data'][$iPackageId])) {
                    $aForCompare['features'][$iFeatureId]['data'][$iPackageId] = array(
                        'option' => 2,
                        'text' => ''
                    );
                }
            }
        }

        return $aForCompare;
    }

    public function  getPackage($iPackageId, $bIsAdminEdit = false)
    {
        $aPackage = $this->database()->select('sp.*')
            ->from($this->_sTable, 'sp')
            ->where('sp.package_id = ' . (int)$iPackageId . ' ' . ($bIsAdminEdit ? '' : 'AND sp.is_active = 1'))
            ->order('sp.ordering ASC')
            ->execute('getSlaveRow');

        if (!isset($aPackage['package_id'])) {
            return false;
        }

        if (!empty($aPackage['cost']) && Phpfox::getLib('parse.format')->isSerialized($aPackage['cost'])) {
            $aCosts = unserialize($aPackage['cost']);
            foreach ($aCosts as $sKey => $iCost) {
                if (Phpfox::getService('core.currency')->getDefault() == $sKey) {
                    $aPackage['default_cost'] = $iCost;
                    $aPackage['default_currency_id'] = $sKey;
                } else {
                    $aPackage['price'][] = array($sKey => $iCost);
                }
            }
        }

        if ($aPackage['recurring_period'] > 0 && Phpfox::getLib('parse.format')->isSerialized($aPackage['recurring_cost'])) {
            $aRecurringCosts = unserialize($aPackage['recurring_cost']);
            foreach ($aRecurringCosts as $sKey => $iCost) {
                if (Phpfox::getService('core.currency')->getDefault() == $sKey) {
                    $aPackage['default_recurring_cost'] = $iCost;
                    $aPackage['default_recurring_currency_id'] = $sKey;
                } else {
                    $aPackage['recurring_price'][] = array($sKey => $iCost);
                }
            }
        }

        if ($aPackage['recurring_period'] > 0) {
            $aPackage['is_recurring'] = '1';
        }
        return $aPackage;
    }

    public function getForEdit($iPackageId)
    {
        return $this->getPackage($iPackageId, true);
    }
    public function getForAdmin($aFilters, $iPage = 1, $iLimit = 20, $bCount = false)
    {
        $sWhere = '';

        if(!empty($aFilters))
        {
            if(!empty($aFilters['type']))
            {
                $sWhere.= $aFilters['type'] == "onetime" ? ' AND sp.recurring_period = 0' : ' AND sp.recurring_period > 0';
            }
            if(!empty($aFilters['status']))
            {
                $sWhere.= $aFilters['status'] == "on" ? ' AND sp.is_active = 1' : ' AND sp.is_active = 0';
            }
        }
        if($bCount)
        {
            $iCnt = $this->database()->select('COUNT(sp.package_id)')
                ->from($this->_sTable, 'sp')
                ->where('sp.is_removed = 0'.$sWhere)
                ->execute('getSlaveField');
        }

        $aPackages = $this->database()->select('sp.*')
            ->from($this->_sTable, 'sp')
            ->where('sp.is_removed = 0'.$sWhere)
            ->order('sp.ordering ASC')
            ->limit($iPage, $iLimit)
            ->execute('getSlaveRows');

        $aTime = (!empty($aFilters['from']) && !empty($aFilters['to'])) ? [
            'time_from' => (int)strtotime($aFilters['from'].' 00:00:00'),
            'time_to' => (int)strtotime($aFilters['to'].' 23:59:59')
        ] : [];

        foreach($aPackages as $iKey => $aPackage)
        {
            $aStatistics = Phpfox::getService('subscribe.purchase')->getStatusStatictisForPackage($aPackage['package_id'], $aTime);
            foreach($aStatistics as $aStatistic)
            {
                $aPackages[$iKey]['statistic_'.$aStatistic['status']] = $aStatistic;
            }
            if (!empty($aPackage['cost']) && Phpfox::getLib('parse.format')->isSerialized($aPackage['cost']))
            {
                $aCosts = unserialize($aPackage['cost']);
                foreach ($aCosts as $sKey => $iCost)
                {
                    if (Phpfox::getService('core.currency')->getDefault() == $sKey)
                    {
                        $aPackages[$iKey]['default_cost'] = (int)$iCost;
                        $aPackages[$iKey]['currency_symbol'] = Phpfox::getService('core.currency')->getSymbol($sKey);
                    }
                }
            }

            switch ($aPackage['recurring_period']){
                case 0:
                    $aPackages[$iKey]['type'] = _p('one_time');
                    break;
                case 1:
                    $aPackages[$iKey]['type'] = _p('monthly');
                    break;
                case 2:
                    $aPackages[$iKey]['type'] = _p('quarterly');
                    break;
                case 3:
                    $aPackages[$iKey]['type'] = _p('biannualy');
                    break;
                case 4:
                    $aPackages[$iKey]['type'] = _p('annually');
                    break;
                default:
                    $aPackages[$iKey]['type'] = _p('other');
                    break;
            }
        }

        return ($bCount) ? [$aPackages, $iCnt] : $aPackages;
    }


    public function getCompareArray()
    {
        $aRows = $this->database()->select('*')->from(Phpfox::getT('subscribe_compare'))->execute('getSlaveRows');
        $aCompare = array();
        foreach ($aRows as $aRow) {
            $aCompare[] = array(
                'feature_title' => $aRow['feature_title'],
                'feature_value' => json_decode($aRow['feature_value'], true)
            );
        }

        return $aCompare;
    }

    /**
     * If a call is made to an unknown method attempt to connect
     * it to a specific plug-in with the same name thus allowing
     * plug-in developers the ability to extend classes.
     *
     * @param string $sMethod is the name of the method
     * @param array $aArguments is the array of arguments of being passed
     * @return null
     */
    public function __call($sMethod, $aArguments)
    {
        /**
         * Check if such a plug-in exists and if it does call it.
         */
        if ($sPlugin = Phpfox_Plugin::get('subscribe.service_subscribe__call')) {
            eval($sPlugin);

            return null;
        }

        /**
         * No method or plug-in found we must throw a error.
         */
        Phpfox_Error::trigger('Call to undefined method ' . __CLASS__ . '::' . $sMethod . '()', E_USER_ERROR);
    }
}