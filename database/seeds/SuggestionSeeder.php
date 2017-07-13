<?php

use Illuminate\Database\Seeder;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catagories = [
            'activity',
            'food',
            'random',
        ];

        $faker = Faker\Factory::create();

        foreach (range(1, 50) as $index) {
            $suggestion = new \App\Models\Suggestion();

            $suggestion->category    = $catagories[rand(0, 2)];
            $suggestion->description = $faker->paragraph;

            $suggestion->save();
        }
    }
}
