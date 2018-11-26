<?php

namespace Apps\Core_BetterAds;

use Core\App;
use Core\App\Install\Setting;

/**
 * Class Install
 * @package Apps\Core_BetterAds
 */
class Install extends App\App
{
    public $store_id = 1665;

    protected function setId()
    {
        $this->id = 'Core_BetterAds';
    }

    protected function setAlias()
    {
        $this->alias = 'ad';
    }

    protected function setName()
    {
        $this->name = 'Ad';
    }

    protected function setVersion()
    {
        $this->version = '4.2.4';
    }

    protected function setSupportVersion()
    {
        $this->start_support_version = '4.6.1';
    }

    protected function setSettings()
    {
        $this->settings = [
            'better_enable_ads' => [
                'var_name' => 'better_enable_ads',
                'info' => 'Enable Ads',
                'description' => 'Set to Yes in order to enable ads.',
                'type' => Setting\Site::TYPE_RADIO,
                'value' => '1',
                'ordering' => 0
            ],
            'better_ads_advanced_ad_filters' => [
                'var_name' => 'better_ads_advanced_ad_filters',
                'info' => 'Enable Advanced Ad Filters',
                'description' => 'This setting enables the site to display ads based on the State/Province, Zip Code/Postal Code and City',
                'type' => Setting\Site::TYPE_RADIO,
                'value' => '0',
                'ordering' => 1
            ],
            'better_ads_show_create_ads_button' => [
                'var_name' => 'better_ads_advanced_ad_filters',
                'info' => 'Show create ads button',
                'description' => 'The "create ad button" will be displayed below the ads block if this setting is enabled',
                'type' => Setting\Site::TYPE_RADIO,
                'value' => '1',
                'ordering' => 2
            ],
            'better_ads_number_ads_per_location' => [
                'var_name' => 'better_ads_number_ads_per_location',
                'info' => 'Number of ad on each multi ads location (side blocks)',
                'description' => 'Maximum of ad can display on each multi ads location (side blocks)',
                'type' => Setting\Site::TYPE_TEXT,
                'value' => '3',
                'ordering' => 4
            ]
        ];
    }

    protected function setUserGroupSettings()
    {
        $this->user_group_settings = [
            'better_ads_show_ads' => [
                'var_name' => 'better_ads_show_ads',
                'info' => 'Should ads be shown to members of this user group?',
                'type' => Setting\Groups::TYPE_RADIO,
                'value' => [
                    "1" => "1",
                    "2" => "1",
                    "3" => "1",
                    "4" => "1",
                    "5" => "1"
                ],
                'options' => Setting\Groups::$OPTION_YES_NO
            ],
            'better_can_create_ad_campaigns' => [
                'var_name' => 'better_can_create_ad_campaigns',
                'info' => 'Can create ad campaigns?',
                'type' => Setting\Groups::TYPE_RADIO,
                'value' => [
                    "1" => "1",
                    "2" => "1",
                    "3" => "0",
                    "4" => "1",
                    "5" => "0"
                ],
                'options' => Setting\Groups::$OPTION_YES_NO
            ],
            'better_ads_allow_hide_ads' => [
                'var_name' => 'better_ads_allow_hide_ads',
                'info' => 'Can hide a campaigns?',
                'type' => Setting\Groups::TYPE_RADIO,
                'value' => [
                    "1" => "1",
                    "2" => "1",
                    "3" => "0",
                    "4" => "1",
                    "5" => "0"
                ],
                'options' => Setting\Groups::$OPTION_YES_NO
            ],
            'better_can_approval_ad_campaigns' => [
                'var_name' => 'better_can_create_ad_campaigns',
                'info' => 'Can approval ad campaigns?',
                'description' => 'Note: this user group have to has permission to access adminCP',
                'type' => Setting\Groups::TYPE_RADIO,
                'value' => [
                    "1" => "1",
                    "2" => "0",
                    "3" => "0",
                    "4" => "1",
                    "5" => "0"
                ],
                'options' => Setting\Groups::$OPTION_YES_NO
            ],
            'better_ad_campaigns_must_be_approved_first' => [
                'var_name' => 'better_ad_campaigns_must_be_approved_first',
                'info' => 'Ad campaigns must be approved first?',
                'description' => '',
                'type' => Setting\Groups::TYPE_RADIO,
                'value' => [
                    "1" => "0",
                    "2" => "1",
                    "3" => "0",
                    "4" => "0",
                    "5" => "0"
                ],
                'options' => Setting\Groups::$OPTION_YES_NO
            ],
        ];
    }

    protected function setComponent()
    {
        $this->component = [
            "block" => [
                "display" => "",
            ],
            "controller" => [
                "index" => "ad.index",
                "add" => "ad.add",
                "manage" => "ad.manage",
                "manage-sponsor" => "ad.manage-sponsor",
                "sample" => "ad.sample",
                "sponsor" => "ad.sponsor",
                "report" => "ad.report",
            ]
        ];
    }

    protected function setComponentBlock()
    {
    }

    protected function setPhrase()
    {
    }

    protected function setOthers()
    {
        $this->_publisher = 'phpFox';
        $this->_publisher_url = 'https://store.phpfox.com/';
        $adminMenu = [
            "Manage Ads" => "ad",
            "Manage Placements" => "ad.placements",
            "Manage Invoice" => "ad.invoice",
            "Manage Sponsorships" => "ad.sponsor",
            "Sponsor Settings" => "ad.sponsor-setting",
            "Migrate Ads" => "ad.migrate-ads",
            "Migrate Sponsorships" => "ad.migrate-sponsorships"
        ];
        $this->admincp_menu = $adminMenu;
        $this->admincp_route = 'admincp.ad';
        $this->database = [
            'BetterAds',
            'Country',
            'Invoice',
            'Log',
            'Plan',
            'Sponsor',
            'View',
            'Hide',
        ];
        $this->menu = [
            "name" => "Advertise",
            "url" => "ad",
            "icon" => "tachometer"
        ];
        $this->_admin_cp_menu_ajax = false;
        $this->_writable_dirs = [
            'PF.Base/file/pic/ad/'
        ];
        $this->_apps_dir = 'core-better-ads';
    }
}
