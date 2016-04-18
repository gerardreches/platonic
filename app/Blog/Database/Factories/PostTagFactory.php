<?php

use Platonic\Blog\Models\PostTag;

$factory->define(PostTag::class, function (Faker\Generator $faker) {

	return[
		'post_id' => $faker->numberBetween(1, 50),
		'tag_id' => $faker->numberBetween(1, 50)
	];

});