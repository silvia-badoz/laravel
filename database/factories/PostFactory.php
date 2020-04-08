<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_title' => $faker->sentence,
        'post_content' => $faker->paragraph($nbSentences = 50),
        'post_date' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        'post_status' => $faker->word,
        'post_name' => $faker->word,
        'post_type' => "post",
        'post_category' =>$faker->word,
        //'author_id' => factory(User::class)->create()

    ];
});
