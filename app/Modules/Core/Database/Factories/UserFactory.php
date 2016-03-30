<?php

use Platonic\Modules\Core\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {
	
	return[
		'name' => $faker->name,
		'email' => $faker->freeEmail,
		'password' => bcrypt($faker->word),
		'remember_token' => str_random(10)
	];

});