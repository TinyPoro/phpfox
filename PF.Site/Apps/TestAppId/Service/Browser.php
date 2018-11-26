<?php
/**
 * Created by PhpStorm.
 * User: TinyPoro
 * Date: 11/24/18
 * Time: 11:29 AM
 */

namespace Apps\TestAppId\Service;

class Browse extends \Phpfox_Service
{
    public function __construct()
    {
        $this->_sTable = \Phpfox::getT('todolist_task');
    }

    /**
     *
     */
    public function query()
    {

    }

    public function getQueryJoins($bIsCount = false, $bNoQueryFriend = false)
    {

    }
}