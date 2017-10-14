<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
        'user_id' =>function(){
            return factory(\App\User::class)->create()->id;
        },
        'name' => $faker->sentence,
        'description' => $faker->paragraph(mt_rand(5,15)),
        'image' => 'test.png'
    ];
});
