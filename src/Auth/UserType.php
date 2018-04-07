<?php

namespace Library\Auth;

class UserType
{
    const USER = 'user';

    const MANAGER = 'manager';

    public static function options()
    {
        return [self::USER, self::MANAGER];
    }
}