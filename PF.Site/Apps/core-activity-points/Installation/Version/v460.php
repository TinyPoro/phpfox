<?php
namespace Apps\Core_Activity_Points\Installation\Version;
use Phpfox;

class v460
{
    public function process()
    {
        $this->initSettingData();
        $this->initStatistic();
    }
    private function initSettingData()
    {
        if(db()->tableExists(Phpfox::getT('activitypoint_setting')))
        {
            $iCnt = db()->select('COUNT(*)')
                        ->from(Phpfox::getT('activitypoint_setting'))
                        ->execute('getSlaveField');
            if((int)$iCnt == 0)
            {
                //init setting for core-app
                db()->query('INSERT INTO '.Phpfox::getT('activitypoint_setting').' (SELECT NULL AS setting_id, name, concat("user_setting","_",name) AS phrase_var_name, module_id, NULL, NULL, NULL FROM '.Phpfox::getT('user_group_setting') .' WHERE name LIKE "%points_%" AND module_id !="activitypoint")');
                //create new user_grou_setting for core
                $aNewSettings = [
                    'points_user_sign-up' => [
                        'module' => 'user',
                        'name' => 'points_user_signup',
                        'user_group' => [
                            '1' => 10,
                            '2' => 10,
                            '3' => 10,
                            '4' => 10,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user sign up'
                    ],
                    'points_user_accesssite' => [
                        'module' => 'user',
                        'name' => 'points_user_accesssite',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user access to site'
                    ],
                    'points_invite_inviteereceiveuponrequest' => [
                        'module' => 'invite',
                        'name' => 'points_invite_inviteereceiveuponrequest',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when invitee received upon a successfully request'
                    ],
                    'points_share_item' => [
                        'module' => 'share',
                        'name' => 'points_share_item',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user shared an item'
                    ],
                    'points_feed_postonwall' => [
                        'module' => 'feed',
                        'name' => 'points_feed_postonwall',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user posted a status on wall'
                    ],
                    'points_feed_postonotherprofile' => [
                        'module' => 'feed',
                        'name' => 'points_feed_postonotherprofile',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user posted a status on other profiles'
                    ],
                    'points_user_uploadprofilephoto' => [
                        'module' => 'user',
                        'name' => 'points_user_uploadprofilephoto',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user uploaded profile photos'
                    ],
                    'points_user_uploadcoverphoto' => [
                        'module' => 'user',
                        'name' => 'points_user_uploadcoverphoto',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user uploaded cover photos'
                    ],
                    'points_friend_addnewfriend' => [
                        'module' => 'friend',
                        'name' => 'points_friend_addnewfriend',
                        'user_group' => [
                            '1' => 1,
                            '2' => 1,
                            '3' => 1,
                            '4' => 1,
                        ],
                        'product_id' => 'phpfox',
                        'type' => 'string',
                        'text' => 'Get activity points when user added a new friend'
                    ],
                ];
                $aLanguages = Phpfox::getService('language')->getAll();
                foreach($aNewSettings as $aSetting)
                {
                    $aText = [];
                    foreach ($aLanguages as $aLanguage) {
                        $aText[$aLanguage['language_code']] = $aSetting['text'];
                    }
                    $aSetting['text'] = $aText;
                    Phpfox::getService('user.group.setting.process')->addSetting($aSetting);
                    db()->insert(Phpfox::getT('activitypoint_setting'),[
                       'var_name' => $aSetting['name'],
                        'phrase_var_name' => 'user_setting_'.$aSetting['name'],
                        'module_id' => $aSetting['module'],
                    ]);
                }
            }
        }
    }
    private function initStatistic()
    {
        if(db()->tableExists(Phpfox::getT('activitypoint_statistics')))
        {
            $iCnt = db()->select('COUNT(*)')
                ->from(Phpfox::getT('activitypoint_statistics'))
                ->execute('getSlaveField');
            if((int)$iCnt == 0)
            {
                db()->query('INSERT INTO phpfox_activitypoint_statistics (SELECT NULL AS statistic_id, u.user_id, a.activity_points, 0, 0, 0, 0 FROM phpfox_user_activity a INNER JOIN phpfox_user u ON u.user_id = a.user_id WHERE u.profile_page_id = 0)');
            }

        }
    }

}
