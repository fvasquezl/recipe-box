<?php

use Faker\Generator as Faker;

$factory->define(App\RecipeIngredient::class, function (Faker $faker) {
    return [
        'recipe_id' =>function(){
            return factory(\App\User::class)->create()->id;
        },
        'name' => $faker->word,
        'qty' => mt_rand(1,12) .'Kg'
    ];
});
