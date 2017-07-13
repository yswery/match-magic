<?php

use Illuminate\Database\Seeder;

class HistoricPairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $members = \App\Models\Member::all();
        foreach (range(1, 7) as $index) {

            $members = $members->shuffle();
            $m1      = $members->first();

            $members = $members->shuffle();
            $m2      = $members->first();

            if ($m1->id === $m2->id) {

            }

            $historicPair              = new \App\Models\HistoricPair;
            $historicPair->member_id_1 = $m1->id;
            $historicPair->member_id_2 = $m2->id;
            $historicPair->save();

        }
    }
}
