<?php

use Illuminate\Database\Seeder;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        foreach (range(1, 20) as $index) {
            $memory              = new \App\Models\Memory();
            $memory->image       = 'image1.jpg';
            $memory->description = $faker->sentence(15);
            $memory->save();
        }
    }
}
