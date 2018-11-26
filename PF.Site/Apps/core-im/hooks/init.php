<?php
// THIS HOOK USE FOR CHECKING HOSTING SERVICE

$package_id = 0;
$cache = cache('im/hosted');
if (request()->get('im-reset-cache')) {
    $cache->del();
}

if (!($host = $cache->get()) || defined('PF_IM_DEBUG_URL')) {
    if (!defined('PHPFOX_TRIAL_MODE') and defined('PHPFOX_LICENSE_ID') and PHPFOX_LICENSE_ID) {
        $home = new Core\Home(PHPFOX_LICENSE_ID, PHPFOX_LICENSE_KEY);
        $hosted = $home->im();
        if (isset($hosted->license_id)) {
            $package_id = $hosted->package_id;
        }
    }

    $cache->set('im/hosted', [
        'package_id' => $package_id
    ]);

    $host = cache('im/hosted')->get();
}

if (!empty($host['package_id']) && request()->segment(2) != 'hosting') {
    define('PF_IM_PACKAGE_ID', $host['package_id']);

    if (empty(storage()->get('im/host/status')->value) || storage()->get('im/host/status')->value == 'on') {
        if (PF_IM_PACKAGE_ID) {
            $url = (defined('PF_IM_DEBUG_URL') ? PF_IM_DEBUG_URL : 'https://im-node.phpfox.com/');
            setting()->set('pf_im_node_server', $url);

            $token = cache('im/host/token')->get(null, 1440);
            if (!$token) {
                $token = (new Core\Home(PHPFOX_LICENSE_ID, PHPFOX_LICENSE_KEY))->im_token();
                storage()->update('im/host/expired', !isset($token->token));
                cache()->set('im/host/token', $token);
                $cache->del();
            }
            $token = (object)$token;

            define('PHPFOX_IM_TOKEN', isset($token->token) ? $token->token : 'failed');
            if (isset($token->token)) {
                storage()->del('im/host/status');
                storage()->set('im/host/status', 'on');
            }
        }
    }
}
