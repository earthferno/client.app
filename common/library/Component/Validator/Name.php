<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 25.08.18
 * Time: 2:18
 */

namespace Component\Validator;


class Name
{
    public static function validate($sName) {
        if (strlen($sName) > 5) {
            throw new \Exception('Bad name');
        }

        return true;
    }
}