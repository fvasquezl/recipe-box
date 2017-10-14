<?php

use Faker\Generator as Faker;

$factory->define(App\RecipeDirection::class, function (Faker $faker) {
    return [
        'recipe_id' =>function(){
            return factory(\App\User::class)->create()->id;
        },
        'description' => $faker->sentence,
    ];
});
