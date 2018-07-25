<?php

use App\Travel;
use Faker\Generator as Faker;

$factory->define(Travel::class, function (Faker $faker) {
    return [
        'start' => now()->addWeek(),
        'end' => now()->addWeeks(2),
    ];
});
