<?php

use Platonic\Modules\Blog\Models\Tag;

$factory->define(Tag::class, function (Faker\Generator $faker) {

	return[
		'name' => $faker->word
	];

});