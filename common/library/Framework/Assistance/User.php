<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 25.08.18
 * Time: 2:16
 */

namespace Framework\Assistance;


class User
{
    public static function findCurrent() {
        $oUser = new \stdClass();
        $oUser->id = 55;
        $oUser->name = 'Anton';
        return $oUser;
    }
}