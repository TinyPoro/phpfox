<?php
            namespace Apps\TestAppId;

            use Core\App;

            /**
             * Class Install
             * @author  Neil J. <neil@phpfox.com>
             * @version 4.6.0
             * @package Apps\TestAppId
             */
            class Install extends App\App
            {
                private $_app_phrases = [
        
                ];
                protected function setId()
                {
                    $this->id = 'TestAppId';
                }
                protected function setAlias()
                {
                    $this->alias = 'todo';
                }
                protected function setName()
                {
                    $this->name = 'TestAppId';
                }
                protected function setVersion() {
                    $this->version = '4.1.0';
                }
                protected function setSupportVersion() {
                    $this->start_support_version = '4.7.0';
                    $this->end_support_version = '4.7.0';
                }
                protected function setSettings() {} protected function setUserGroupSettings() {} protected function setComponent() {} protected function setComponentBlock() {} protected function setPhrase() {
                    $this->phrase = $this->_app_phrases;
                }
                protected function setOthers() {
                    //add the menu for your app
                    $this->menu = [
                        "name" => "To Do List",  // Menu label
                        "url"  => "/to-do-list", // Menu Url
                        "icon" => "tasks"      // Menu icons, see http://fontawesome.io/icons/
                    ];
                }
            }