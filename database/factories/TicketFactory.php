<?php

use Faker\Generator as Faker;
use Library\Eloquent\Auth\User;
use Library\Eloquent\Ticket;

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

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id' => factory(User::class)
    ];
});
