<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Card;
use Faker\Generator as Faker;

$factory->define(Card::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'body'  => $faker->text(20);
    ];
});
