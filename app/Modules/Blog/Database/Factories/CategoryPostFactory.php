<?php

use Platonic\Modules\Blog\Models\CategoryPost;

$factory->define(CategoryPost::class, function (Faker\Generator $faker) {

	return[
		'category_id' => $faker->numberBetween(1, 50),
		'post_id' => $faker->numberBetween(1, 50)
	];

});