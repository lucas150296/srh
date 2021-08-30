<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\site_produto;
use Faker\Generator as Faker;

$factory->define(site_Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => Srt::random(10),
        'peso' => Srt::random(10),
        'preco_venada' => Srt::random(10),
    ];
});
