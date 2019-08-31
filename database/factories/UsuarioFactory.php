<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'email' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'telefone' => $faker->word,
        'endereco' => $faker->word,
        'cidade_id' => $faker->randomDigitNotNull,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
    ];
});
