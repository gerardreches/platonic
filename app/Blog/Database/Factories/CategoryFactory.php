<?php

use Platonic\Blog\Models\Category;

$factory->define(Category::class, function (Faker\Generator $faker) {

	return[
		'name' => $faker->word
	];

});