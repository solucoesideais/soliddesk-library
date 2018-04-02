<?php

use Faker\Generator as Faker;
use Library\Eloquent\Auth\Manager;
use Library\Eloquent\Auth\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Manager::class, function (Faker $faker) {
    return ['is_manager' => true] + factory(User::class)->raw();
});
