<?php

namespace Library\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Library\Eloquent\Auth\User;
use Library\Listeners\ValidateUserDepartment;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'eloquent.saving: ' . User::class => [
            ValidateUserDepartment::class
        ]
    ];
}
