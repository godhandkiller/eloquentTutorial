<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Card;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id'   => function (){
            factory(Card::class)->create()->id
        },
        'body'      => $faker->word(3, true),
    ];
});
