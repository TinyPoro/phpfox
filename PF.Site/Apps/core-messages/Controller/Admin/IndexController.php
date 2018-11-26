<?php
namespace Apps\Core_Messages\Controller\Admin;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Pager;
use Phpfox_Url;

defined('PHPFOX') or exit('NO DICE!');

class IndexController extends Phpfox_Component
{
    /**
     * Controller
     */
    public function process()
    {
        $sUrl = Phpfox_Url::instance()->makeUrl('admincp.setting.edit', ['module-id' => 'mail']);
        Phpfox_Url::instance()->send($sUrl);
    }
}