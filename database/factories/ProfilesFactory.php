<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'website_url'   => $faker->domainName,
        'github_url'    => $faker->url,
        'twitter_url'   => $faker->domainWord,
        'user_id'       => function () {
            return factory(User::class)->create();
        },
    ];
});
