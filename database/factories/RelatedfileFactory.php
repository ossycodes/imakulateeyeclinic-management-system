<?php

use App\Relatedfile;
use Faker\Generator as Faker;

$factory->define(Relatedfile::class, function (Faker $faker) {
    return [
        'patient_id' => factory('App\Patient')->create()->id,
        'record' => $faker->sentence()
    ];
});
