<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductImage;
use Faker\Generator as Faker;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'image_path'=>$faker->text(100),
        'product_id'=>$faker->numberBetween(1,100),
        'image_name'=>$faker->text(100)
    ];
});
