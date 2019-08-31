<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'telefone' => $faker->phoneNumber,
        'endereco' => $faker->streetAddress,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
