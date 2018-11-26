<?php

namespace Apps\TestAppId\Controller;

// Index controller must be child of \Phpfox_Component class.

class AddController extends \Phpfox_Component
{
    public function process()
    {
        // Get phpFox core template service
        $template = $this->template();

        // set view title
        $template->setTitle(_p('Add To Do'));

        // set view breadcrumb
        $template->setBreadCrumb(_p('Add To Do'),
            $this->url()->makeUrl('to-do-list/add'));


        // add your section menus
        $template->buildSectionMenu('to-do-list', [
            'Browse' => $this->url()->makeUrl('/to-do-list'),
            'Create' => $this->url()->makeUrl('/to-do-list/add'),
        ]);

        // get current requests
        $request = $this->request();

        // get request data
        $vals = $request->get('val');

        if (!empty($vals)) {
            // validate
            if (empty($vals['name'])) {
                \Phpfox_Error::set(_p('To do name is required'));
            }

            if (empty($vals['description'])) {
                \Phpfox_Error::set(_p('Do do description is required'));
            }

            if (\Phpfox_Error::isPassed()) {
                // insert to do item database
                \Phpfox::getLib('database')->insert(\Phpfox::getT('todolist_task'),[
                    'user_id'=> \Phpfox::getUserId(), // get current user id
                    'name'=> $vals['name'],
                    'description'=>$vals['description'],
                    'time_stamp'=>time(),  // creatation time
                    'time_update'=>time(), // last modification time
                    'privacy'=>0, // public
                    'task_status'=>0, // mark task is in-complete
                ]);

                $this->url()->send('to-do-list'); // redirect to to-do-list
            }
        }
    }
}