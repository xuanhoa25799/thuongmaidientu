<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TheLoai;
use Faker\Generator as Faker;

$factory->define(TheLoai::class, function (Faker $faker) {
    return [
        'tentheloai'=> $faker->name,
        'parent_id'=> $faker->unique()->numberBetween(1,100),
        'slug'=> $faker->slug
    ];
});
