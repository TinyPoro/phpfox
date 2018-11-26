<?php
use Apps\Core_Subscriptions\Installation\Version\v460 as v460;
use Apps\Core_Subscriptions\Installation\Version\v461 as v461;

$installer = new Core\App\Installer();
$installer->onInstall(function () use ($installer) {
    (new v460())->process();
    (new v461())->process();
});
