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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/



$factory->define( \App\Address::class, function (Faker\Generator $faker) {

$Lfaker = Faker\Factory::create("en_NG");

    return[
        'name'=> $Lfaker->name,
        'tel'=> $Lfaker->phoneNumber,
        'addrs1'=> $Lfaker->streetAddress,
        'addrs2'=>$Lfaker->buildingNumber,
        'zip'=> $Lfaker->postcode,
        'city'=> $Lfaker->city,
        'state'=>$Lfaker->region
    ];


});
