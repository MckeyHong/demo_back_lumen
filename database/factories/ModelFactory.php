<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use Illuminate\Support\Facades\Hash;

$factory->define(App\Entities\Customer\Customer::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'password' => Hash::make($faker->password),
        'name'     => $faker->name,
        'email'    => $faker->email,
        'phone'    => $faker->phoneNumber,
        'country'  => $faker->country,
    ];
});
