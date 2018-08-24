<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 25.08.18
 * Time: 2:31
 */

namespace Http\Controller;

use \Component\Validator\Name as NameValidator;

class Main
{
    public static function index() {
        try {
            $oUser = \Framework\Assistance\User::findCurrent();

            NameValidator::validate($oUser->name);

            echo "Hello, {$oUser->name}";
        } catch (\Exception $oException) {
            echo 'ERROR';
        }
    }
}