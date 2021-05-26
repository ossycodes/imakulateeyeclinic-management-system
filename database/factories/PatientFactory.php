<?php

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'parentname' => $faker->name,
        'address' => $faker->address,
        'occupation' => $faker->company,
        'phonenumber' => '080xxxxxxxx',
        'alternativephonenumber' => '080xxxxxxxx',
        'nextofkin' => $faker->name,
        'dateofbirth' => date('Y-m-d'),
        'dateofbirthexceptyear' => date('m-d'),
        'cliniccardnumber' => $faker->randomNumber(),
    ];
});
