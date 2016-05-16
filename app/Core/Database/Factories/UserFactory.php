<?php

use Platonic\Core\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {
	
	return[
		'username' => $faker->name,
		'display_name' => $faker->name,
		'profile_picture' => $faker->imageUrl(160, 160, 'people'),
		'description' => $faker->sentences(3, true),
		'email' => $faker->freeEmail,
		'active' => true,
		'password' => bcrypt($faker->word),
		'remember_token' => str_random(10)
	];

});