<?php

use Platonic\Blog\Models\Post;

$factory->define(Post::class, function (Faker\Generator $faker) {

	return[
		'title' => $faker->sentence(6, true),
		'body' => $faker->paragraphs(3, true),
		'extract' => $faker->paragraph(3, true),
		'slug' => $faker->slug,
		'user_id' => $faker->numberBetween(1, 50),
		'published_at' => $faker->dateTimeBetween('-7 days', '+7 days')
	];

});