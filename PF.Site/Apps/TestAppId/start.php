<?php

namespace Apps\TestAppId;

// Load phpFox module service instance, this is core of phpFox service,
// module service contains your app configuration.
$module =\Phpfox_Module::instance();

// Instead of \Apps\FirstApp every where. Let register an alias **first_app** that map to our app.
$module->addAliasNames('todo', 'TestAppId');

// Register your controller here
$module->addComponentNames('controller', [
    'todo.index' => Controller\IndexController::class,
    'todo.add'   => Controller\AddController::class,
]);

// Register template directory
$module->addTemplateDirs([
    'todo' => PHPFOX_DIR_SITE_APPS . 'TestAppId/views',
]);

// register service
$module->addServiceNames([
    'todo.browse'=> Service\Browse::class,
]);

route('to-do-list',function (){

    \Phpfox_Module::instance()->dispatch('todo.index');
    return 'controller';
});

route('to-do-list/add', function () {
    \Phpfox_Module::instance()->dispatch('todo.add'); // add routing
    return 'controller';
});

//(new Install())->processInstall();