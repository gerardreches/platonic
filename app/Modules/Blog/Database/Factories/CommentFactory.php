<?php

use Platonic\Modules\Blog\Models\Comment;

$factory->define(Comment::class, function (Faker\Generator $faker) {

	return[
		'post_id' => $faker->numberBetween(1, 50),
		'user_id' => $faker->numberBetween(1, 50),
		'body' => $faker->paragraph
	];

});