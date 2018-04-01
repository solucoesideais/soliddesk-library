<?php

use Faker\Generator as Faker;
use Library\Eloquent\Department;

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

$factory->define(Department::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->words(3, true),
    ];
});
