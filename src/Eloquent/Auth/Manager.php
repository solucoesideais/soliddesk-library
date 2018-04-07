<?php

namespace Library\Eloquent\Auth;

use Library\Auth\UserType;

class Manager extends User
{
    protected $table = 'users';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('type', UserType::MANAGER);
        });
    }
}
