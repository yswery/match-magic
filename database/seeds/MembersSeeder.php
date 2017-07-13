<?php

use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 25) as $index) {
            $member             = new \App\Models\Member();
            $member->first_name = $faker->firstName;
            $member->last_name  = $faker->lastName;
            $member->email      = $faker->email;
            $member->save();

            $pool            = new \App\Models\Pool();
            $pool->member_id = $member->id;
            $pool->save();
        }
    }
}
