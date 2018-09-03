<?php

use Faker\Generator as Faker;

/**
* the faker model of this Store class its an store with a fake company name and a fake company address
*/

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address
    ];
});
