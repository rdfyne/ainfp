<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
		'email' => $faker->email,
		'country' => $faker->country,
		'phone' => $faker->phoneNumber,
		'company' => $faker->company,
		'year_established' => random_int(1950, 2018),
		'company_phone' => $faker->phoneNumber,
		'company_email' => $faker->email,
		'physical_address' => $faker->streetAddress,
		'form_of_business' => $faker->word,
		'home_office' => random_int(0, 1) ?: $faker->address,
		'corporate_partners' => random_int(0, 1) ?: $faker->company,
		'employee_number' => random_int(1, 50),
		'annual_revenue' => random_int(1000, 10000),
		'ownership_proportion' => $faker->word,
		'farmers_number' => random_int(1, 50),
		'products_produced' => random_int(1, 500),
		'major_markets' => $faker->paragraph,
		'potential_markets' => $faker->paragraph,
		'installed_capacity' => $faker->word,
		'financing' => random_int(0, 1) ?: $faker->company,
		'production_goal' => $faker->paragraph,
		'technology' => $faker->paragraph,
		'ngo_partnerships' => $faker->company,
		'challenges' => $faker->paragraph,
		'interests' => $faker->paragraph,
		'needs' => $faker->paragraph,
		'success' => $faker->paragraph,
    ];
});
