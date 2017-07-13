<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PoolSeeder::class);
        $this->call(HistoricPairsSeeder::class);
        $this->call(SuggestionSeeder::class);
    }
}
