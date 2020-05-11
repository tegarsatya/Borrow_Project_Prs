<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;
use\App\Author;

$factory->define(Book::class, function (Faker $faker) {

    $randomNumber = rand(1, 100);
    $cover = "https://picsum.photos/id/{$randomNumber}/200/300";

    return [
        'author_id'      => Author::inRandomOrder()->first()->id,
        'title'          => $faker->sentence(4),
        'description'    => $faker->sentence(50),
        'cover'          => $cover,
        'qty'            => rand(10, 20),
    ];
});
