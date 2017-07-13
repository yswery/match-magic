<?php

use Illuminate\Database\Seeder;

class PoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (\App\Models\Member::all() as $member) {
            $pool            = new \App\Models\Pool();
            $pool->member_id = $member->id;
            $pool->save();
        }
    }
}
