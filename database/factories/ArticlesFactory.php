<?php

use Faker\Generator as Faker;

/**
* the faker model of this Article class its an article with a 5 random words for name, a lorem ipsum text in the description of max 150 characters, a
* float price of 2 decimal points, and a value of 1 to 500 dolars, total in shelf and total in valut from 0 to 150.
* and a store_id from 1 to 20 as the total of stores created before
*
*/

$factory->define(App\Article::class, function (Faker $faker) {
  return [
    'name' => $faker->words(5, true),
    'description' => $faker->text(150),
    'price' => $faker->randomFloat(2, 1, 500),
    'total_in_shelf' => $faker->numberBetween(0, 150),
    'total_in_vault' => $faker->numberBetween(0, 150),
    'store_id' => $faker->numberBetween(1,20)
  ];
});
