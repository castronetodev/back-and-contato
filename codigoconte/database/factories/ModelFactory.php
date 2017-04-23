<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(\apiPoseidon\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(apiPoseidon\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'categoryName' => $faker->name
    ];
});

$factory->define(apiPoseidon\Models\Menu::class, function (Faker\Generator $faker) {
    return [
        'itemName' => $faker->name,
        'desc' => $faker->name,
        'value' => $faker->randomFloat(2,100,1000),
        'category_id' => rand(1, 20)
    ];
});

$factory->define(apiPoseidon\Models\City::class, function (Faker\Generator $faker) {
    return [
        'cityName' => $faker->name,
    ];
});

$factory->define(apiPoseidon\Models\Contact::class, function (Faker\Generator $faker) {
    return [
        'nome_empresa' => $faker->name,
        'tel' => rand(1, 50),
        'cel' =>rand(1, 50),
        'email' =>$faker->unique()->safeEmail,
        'endereco' => $faker->name,
        'bairro' => $faker->name,
        'numero' => rand(1, 50),
        'referencia' => $faker->name,
        'desc' => $faker->name,
        'category_id' => rand(1, 20),
        'cities_id' => rand(1, 20)
		

    ];
});



