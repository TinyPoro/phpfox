<?php

namespace Apps\Core_BetterAds\Service;

use Phpfox;
use Phpfox_Error;
use Phpfox_Plugin;
use Phpfox_Template;
use Phpfox_Module;

/**
 * Ad Service
 * Handles all requests to the ad database tables.
 *
 * Class Ad_Service_Ad
 */
class Ad extends \Phpfox_Service
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->_sTable = ':better_ads';
    }

    /**
     * Receives a list of items and returns an array with the items to show depending on the viewer.
     *
     * @param array $aAds Ads to filter.
     * @return array ARRAY of ads.
     */
    public function filterSponsor($aAds)
    {
        if (empty($aAds) || !is_array($aAds)) {
            return [];
        }

        $aOut = [];
        $iUserGender = Phpfox::getUserBy('gender');
        $sCurrentLanguage = Phpfox::getLib('locale')->getLangId();

        foreach ($aAds as $iKey => $aAd) {
            if ($aAd['impressions'] > 0 && $aAd['total_view'] > 0 && $aAd['impressions'] < $aAd['total_view']) {
                continue;
            }

            if (!empty($aAd['country_iso']) && Phpfox::isUser() && !in_array(Phpfox::getUserBy('country_iso'),
                    explode(',', $aAd['country_iso']))) {
                continue;
            }

            if (!empty($aAd['gender']) && Phpfox::isUser() && !in_array($iUserGender, explode(',', $aAd['gender']))) {
                continue;
            }

            if (!empty($aAd['age_from'])
                && !empty($aAd['age_to'])
                && Phpfox::isUser()
                && ($aAd['age_from'] > Phpfox::getUserBy('age') || $aAd['age_to'] < Phpfox::getUserBy('age'))
            ) {
                continue;
            }
            // filter start date
            if ($aAd['start_date'] > PHPFOX_TIME) {
                continue;
            }
            // filter end date
            if (!empty($aAd['end_date']) && $aAd['end_date'] < PHPFOX_TIME) {
                continue;
            }

            if(empty($aAd['languages']))
            {
                continue;
            }

            $aSponsorLanguages = explode(',', $aAd['languages']);

            if(!in_array($sCurrentLanguage, $aSponsorLanguages))
            {
                continue;
            }

            $aOut[] = $aAd;
        }

        return $aOut;
    }


    /**
     * @param int $iBlock
     *
     * @return null|string
     */
    public function getSizeForBlock($iBlock)
    {
        static $aSizes = null;
        if ($aSizes === null) {
            $aSizes = Phpfox::getLib('xml.parser')->parse(file_get_contents(str_replace(Phpfox::getParam('core.path'),
                PHPFOX_DIR, Phpfox_Template::instance()->getStyle('xml', 'ad.xml'))));
        }

        if (isset($aSizes['block' . $iBlock])) {
            return ' (' . $aSizes['block' . $iBlock] . ')';
        }

        return null;
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
        if ($sPlugin = Phpfox_Plugin::get('ad.service_ad__call')) {
            return eval($sPlugin);
        }

        /**
         * No method or plug-in found we must throw a error.
         */
        Phpfox_Error::trigger('Call to undefined method ' . __CLASS__ . '::' . $sMethod . '()', E_USER_ERROR);

        return null;
    }


    /**
     * @param array $aFeed
     * Returns the id of a record in the feed table, this feed is a sponsored one.
     *    This function is called from the feed service in the function get as part of the show-sponsored-stories feature
     * @return bool|int
     */
    public function getSponsoredFeed($aFeed = null)
    {
        if (isset($aFeed)) {
            $sNotIn = '';
            foreach ($aFeed as $feed) {
                $sNotIn .= $feed['feed_id'] . ',';
            }
            $sNotIn = trim($sNotIn, ',');
            $sNotIn = ' AND item_id NOT IN (' . $sNotIn . ')';
        } else {
            $sNotIn = '';
        }

        Phpfox::getLib('cache')->remove('ad_sponsored_feed_items');
        $sCache = Phpfox::getLib('cache')->set('ad_sponsored_feed_items');
        $aSponsoredAdItems = Phpfox::getLib('cache')->get($sCache);

        if ($aSponsoredAdItems === false) {
            $aSponsoredAdItems = $this->database()->select('sponsor. *, sponsor.item_id as item_id')
                ->from(Phpfox::getT('better_ads_sponsor'), 'sponsor')
                ->join(Phpfox::getT('feed'), 'feed', 'feed.feed_id = sponsor.item_id')
                ->where('sponsor.is_active = 1 AND sponsor.module_id = \'feed\' AND sponsor.is_custom IN (0,3)' . $sNotIn)// 0 => free, 1 => pending payment, 2 => pending approval, 3 => approved, 4 => denied
                ->group('sponsor.item_id', true)
                ->order('rand()')
                ->limit(100)
                ->executeRows();
            Phpfox::getLib('cache')->save($sCache, $aSponsoredAdItems);
        }

        $aSponsoredAdItems = $this->filterSponsor($aSponsoredAdItems);



        if (count($aSponsoredAdItems)) {
            $aReturn = $aSponsoredAdItems[array_rand($aSponsoredAdItems)];
            Phpfox::getService('ad.process')->addSponsorViewsCount($aReturn['sponsor_id'], $aReturn['module_id']);
            return $aReturn['item_id'];
        } else {
            return false;
        }
    }

    /**
     * Get ads based on the block positioning.
     *
     * @param int $iBlockId Block ID#.
     * @return array returned if ads cannot be viewed by the user. FALSE is returned if no ads exists. An ARRAY of ads are returned of ads exist for the specific block.
     * @throws \Exception
     */
    public function getForBlock($iBlockId)
    {
        static $aCacheAd = [];

        if (isset($aCacheAd[$iBlockId])) {
            return $aCacheAd[$iBlockId];
        }

        (($sPlugin = Phpfox_Plugin::get('ad.service_ad_getforblock__start')) ? eval($sPlugin) : false);

        if (user('better_ads_show_ads') == false) {
            $aCacheAd[$iBlockId] = [];

            return [];
        }
        $bMultiAds = false;
        $aMultiAdsLocations = [1, 3, 9, 10];
        if (in_array($iBlockId, $aMultiAdsLocations)) {
            $bMultiAds = true;
        }

        $bUpdateCounter = true;
        if (Phpfox_Module::instance()->getFullControllerName() == 'error.404') {
            $bUpdateCounter = false;
        }

        $aConds = [
            'a.is_custom' => 3,
            // get active ads
            'a.is_active' => 1,
            // get ads of current block $iId
            'ap.block_id' => $iBlockId,
            // placement must be active
            'ap.is_active' => 1,
            // start date
            ' AND a.start_date <= ' . PHPFOX_TIME,
            // end date
            ' AND (a.end_date = 0 OR a.end_date >= ' . PHPFOX_TIME . ')'
        ];

        $sCacheId = $this->cache()->set('block_' . $iBlockId . '_ads');
        if (($aRows = $this->cache()->get($sCacheId, 5)) === false) {
            $aRows = db()->select('a.*, ap.block_id, ap.disallow_controller, ac.child_id, ac.country_id')
                ->from($this->_sTable, 'a')
                ->join(':better_ads_plan', 'ap', 'ap.plan_id=a.location')
                ->leftJoin(':better_ads_country', 'ac', 'ac.ads_id = a.ads_id')
                ->where($aConds)
                ->executeRows();

            $this->cache()->save($sCacheId, $aRows);
            $this->cache()->group('betterads', $sCacheId);
        }

        $aAds = [];
        foreach ($aRows as $iKey => $aRow) {
            if (!$this->_isValidDisplayAd($aRow)) {
                continue;
            }

            $iAdId = $aRow['ads_id'];

            if (!isset($aAds[$iAdId])) {
                $aAds[$iAdId] = $aRow;
                $aAds[$iAdId]['country_child_id'] = [];
                $aAds[$iAdId]['countries_list'] = [];
                unset($aAds[$iAdId]['country_id']);
            }

            if (!empty($aRow['child_id'])) {
                $aAds[$iAdId]['country_child_id'][] = $aRow['child_id'];
                unset($aAds[$iAdId]['child_id']);
            }

            if (!empty($aRow['country_id'])) {
                $aAds[$iAdId]['countries_list'][$aRow['country_id']] = $aRow['country_id'];
            }

            if (!empty($aRow['html_code'])) {
                $aAds[$iAdId]['html_code'] = str_replace('target="_blank"', 'target="_blank" class="no_ajax_link"',
                    $aRow['html_code']);

                $aAds[$iAdId] = array_merge($aAds[$iAdId], json_decode($aAds[$iAdId]['html_code'], true));
            }
            $aAds[$iAdId]['url_link'] = \Phpfox_Url::instance()->makeUrl('ad', array('id' => $iAdId));
        }


        if ($sPlugin = Phpfox_Plugin::get('ad.service_ads_getforblock__1')) {
            eval($sPlugin);
        }

        if (empty($aAds)) {
            $aCacheAd[$iBlockId] = [];

            return [];
        }

        if ($bMultiAds) {
            $iTotal = min(intval(setting('better_ads_number_ads_per_location')), count($aAds));
            shuffle($aAds);
            $aAds = array_slice($aAds, 0, $iTotal);

            foreach ($aAds as $aRow) {
                if ($bUpdateCounter) {
                    db()->updateCounter('better_ads', 'count_view', 'ads_id', $aRow['ads_id']);
                    Phpfox::getService('ad.report')->updateAdsCount($aRow['ads_id']);
                }
            }
            $aCacheAd[$iBlockId] = $aAds;

            return $aAds;
        }

        $aRow = $aAds[array_rand($aAds)];
        if ($bUpdateCounter) {
            db()->updateCounter('better_ads', 'count_view', 'ads_id', $aRow['ads_id']);
            Phpfox::getService('ad.report')->updateAdsCount($aRow['ads_id']);
        }

        (($sPlugin = Phpfox_Plugin::get('ad.service_ad_getforblock__end')) ? eval($sPlugin) : false);

        return [$aRow];
    }

    private function _isValidDisplayAd($aAd)
    {
        // limit gender
        $iCurrentUserGenderId = intval(Phpfox::getUserBy('gender'));
        if(!in_array($iCurrentUserGenderId, explode(',', $aAd['gender'])))
        {
            return false;
        }

        // limit age
        $iCurrentUserAge = intval(Phpfox::getUserBy('age'));
        if (((int)$aAd['age_from'] > 0 && (int)$iCurrentUserAge < (int)$aAd['age_from']) || ((int)$aAd['age_to'] > 0 && (int)$aAd['age_to'] < (int)$iCurrentUserAge)) {
            return false;
        }

        $sCurrentLanguage = Phpfox::getLib('locale')->getLangId();
        if(!in_array($sCurrentLanguage, explode(',', $aAd['languages'])))
        {
            return false;
        }

        $aHideSponsorIds = Phpfox::getService('ad.get')->getHiddenAdsByUser(Phpfox::getUserId());
        if(in_array($aAd['ads_id'], $aHideSponsorIds))
        {
            return false;
        }

        // check total view/click
        if (($aAd['is_cpm'] == 1 && $aAd['total_view'] > 0 && $aAd['count_view'] >= $aAd['total_view'])
            || $aAd['is_cpm'] != 1 && $aAd['total_click'] > 0 && $aAd['count_click'] >= $aAd['total_click']) {
            db()->update(':better_ads', array('is_active' => '0', 'is_custom' => 5), 'ads_id = ' . (int)$aAd['ads_id']);
            return false;
        }

        // disallow controller
        if (!empty($aAd['disallow_controller'])) {
            $sControllerName = Phpfox_Module::instance()->getFullControllerName();
            $aParts = explode(',', $aAd['disallow_controller']);
            foreach ($aParts as $sPart) {
                $sPart = trim($sPart);
                // str_replace for marketplace.invoice/index
                // str_replace for music.browse/album
                if ($sControllerName == $sPart || (str_replace('/index', '',
                            $sControllerName) == $sPart) || (str_replace('/', '.', $sControllerName) == $sPart)) {
                    return false;
                }
            }
        }

        $aLocationInfo = $this->getLocationInformation();

        // Check for Country, Postal Code and City
        if (setting('better_ads_advanced_ad_filters')) {
            $sUserPostalCode = isset($aLocationInfo['postal_code'])?$aLocationInfo['postal_code']:'';
            $sUserCityLocation = isset($aLocationInfo['city_location'])?$aLocationInfo['city_location']:'';
            $sUserCountryIso = Phpfox::getUserBy('country_iso');
            $aAd['postal_code'] = json_decode(trim($aAd['postal_code']));
            $aAd['city_location'] = json_decode(trim($aAd['city_location']), true);
            $aAd['country_iso'] = trim($aAd['country_id']);

            if (!empty($aAd['postal_code'])) {
                $bSkip = true;
                foreach ($aAd['postal_code'] as $sCode) {
                    if (strtolower($sCode) == strtolower($sUserPostalCode) || $sCode == '') {
                        $bSkip = false;
                        break;
                    }
                }
                if ($bSkip) {
                    return false;
                }
            }

            if (!empty($aAd['city_location'])) {
                $bSkip = true;
                foreach ($aAd['city_location'] as $sCity) {
                    if (strtolower($sCity) == strtolower($sUserCityLocation) || $sCity == '') {
                        $bSkip = false;
                        break;
                    }
                }
                if ($bSkip) {
                    return false;
                }
            }

            if (!empty($aAd['country_iso']) && (empty($sUserCountryIso) || strpos($aAd['country_iso'], $sUserCountryIso) === false)) {
                return false;
            }
        }

        return true;
    }

    public function getLocationInformation()
    {
        $aLocationInfo = $this->database()
            ->select('uf.postal_code, uf.country_child_id, uf.city_location')
            ->from(Phpfox::getT('user'), 'u')
            ->join(Phpfox::getT('user_field'), 'uf', 'u.user_id = uf.user_id')
            ->where('u.user_id =' . Phpfox::getUserId())
            ->executeRow();
        return $aLocationInfo;
    }
}
