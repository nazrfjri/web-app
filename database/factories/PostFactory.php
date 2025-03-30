<?php

use Faker\Factory;
use App\Models\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function () {
    $faker = Factory::create('id_ID');

    return [
        'title' => $faker->sentence(mt_rand(2, 8)),
        'slug' => $faker->slug(),
        'excerpt' => $faker->paragraph(),
        // 'body' => '<p>' . implode('</p><p>', $this->$faker->paragraphs(mt_rand(5, 10))) . '</p>',
        'body' => collect($faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
            return "<p>$p</p>";
        })->implode(''),
        'user_id' => mt_rand(1, 3),
        'category_id' => mt_rand(1, 3), 
    ];
});
