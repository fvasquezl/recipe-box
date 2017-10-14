<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::query()->select('id')->get();
        for ($i = 0; $i < 10; ++$i) {
            $recipe = factory(\App\Recipe::class)->create([
                'user_id' => $users->random()->id,
            ]);

            foreach (range(1,mt_rand(3,12)) as $item) {
                    factory(\App\RecipeIngredient::class)->create([
                        'recipe_id' => $recipe->id
                    ]);
            }

            foreach (range(1,mt_rand(5,12)) as $item) {
                factory(\App\RecipeDirection::class)->create([
                    'recipe_id' => $recipe->id
                ]);
            }
        }
    }
}
