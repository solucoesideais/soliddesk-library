<?php

namespace Library\Eloquent\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Library\Eloquent\Department;

class Manager extends User
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('is_manager', true);
        });
    }
}
