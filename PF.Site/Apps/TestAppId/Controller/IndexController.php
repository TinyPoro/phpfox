<?php

namespace Apps\TestAppId\Controller;

use Phpfox;
use Phpfox_Pager;

// Index controller must be child of \Phpfox_Component class.

class IndexController extends \Phpfox_Component
{
    public function process()
    {
        // Get phpFox core template service
        $template = $this->template();

        // set view title
        $template->setTitle('To Do List');

        // set view breadcrumb

        // get url
        $url = $this->url()->makeUrl('to-do-list');

        $template->setBreadCrumb('To Do List',$url);

        // add your section menus
        $template->buildSectionMenu('to-do-list', [
            'Browse' => $this->url()->makeUrl('/to-do-list'),
            'Create' => $this->url()->makeUrl('/to-do-list/add'),
        ]);

        $template->menu('Add To Do', $this->url()->makeUrl('/to-do-list/add'));

//        // set is in profile
//        $bIsProfile = false;
//
//        // Configure search form
//        $search = $this->search();
//
//        // get current view
//        $sView = $this->request()->get('view');
//
//        // form action
//        $sFormAction = $this->url()->makeUrl('to-do-list', ['view' => $sView]);
//
//        $search->set([
//            'type'           => 'todo',
//            'field'          => 'todo.task_id',
//            'ignore_blocked' => true,
//            'search_tool'    => [
//                'table_alias' => 'todo',
//                'search'      => [
//                    'action'        => $sFormAction,
//                    'default_value' => '',
//                    'name'          => 'search',
//                    'field'         => ['todo.name'],
//                ],
//                'sort'        => [
//                    'latest'     => ['todo.time_stamp', _p('Latest')],
//                    'most-liked' => ['todo.total_like', _p('Most Liked')],
//                ],
//                'show'        => [10, 20, 30],
//            ],
//        ]);
//
//        // Configure search service
//        $aBrowseParams = [
//            'module_id' => 'todo',
//            'alias'     => 'todo',
//            'field'     => 'task_id',
//            'table'     => Phpfox::getT('todolist_task')
//        ];
//
//        $search->setContinueSearch(true);
//        $search->browse()->params($aBrowseParams)->execute();
//        $cnt = $search->browse()->getCount();
//        $aItems = $search->browse()->getRows();
//
//        // register pager service
//        Phpfox_Pager::instance()->set([
//            'page'  => $search->getPage(),
//            'size'  => $search->getDisplay(),
//            'count' => $search->browse()->getCount(),
//        ]);
//
//        // assign variables to template
//        $this->template()->assign([
//                'iCnt'         => $cnt,
//                'aItems'       => $aItems,
//                'sSearchBlock' => _p('search to do'),
//                'bIsProfile'   => $bIsProfile,
//                'sTaskStatus'  => $this->request()->get('status'),
//                'sView'        => $sView,
//            ]
//        );
    }
}