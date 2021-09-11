<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sach;
use Faker\Generator as Faker;

$factory->define(Sach::class, function (Faker $faker) {
    return [
        'TenSach'=> $faker->name,
        'MaTheLoai'=> $faker->numberBetween(1,100),
        'MoTa'=> $faker->text(200),
        'Gia'=> $faker->numberBetween(20000,500000),
        'So_Luong'=> $faker->numberBetween(1,100),
        'Nam_XB'=> $faker->numberBetween(1950,2100),
        'user_id'=> $faker->numberBetween(1,100),
        'feature_image_path'=> $faker->text(100),
        'feature_image_name'=> $faker->text(100),
    ];
});
