<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'start' => now()->addWeek(),
        'end' => now()->addWeeks(2),
    ];
});
