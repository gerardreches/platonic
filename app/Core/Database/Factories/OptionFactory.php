<?php

use Platonic\Core\Models\Option;

$factory->define(Option::class, function (Faker\Generator $faker) {
	
	return[
		'name' => $faker->word,
		'value' => $faker->word,
		'group_id' => $faker->numberBetween(1, 5)
	];

});