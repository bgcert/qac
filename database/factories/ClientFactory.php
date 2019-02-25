<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'logo' => 'https://placeimg.com/200/150/any?id=' . rand(20,400),
        'visible' => 1,
        'priority' => 0
    ];
});
