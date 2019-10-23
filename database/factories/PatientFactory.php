<?php

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'parentname' => $faker->name,
        'address' => $faker->address,
        'occupation' => $faker->company,
        'phonenumber' => '08027332873',
        'alternativephonenumber' => '08027332873',
        'nextofkin' => $faker->name,
        'dateofbirth' => date('Y-m-d'),
        'cliniccardnumber' => $faker->word,
    ];
});
