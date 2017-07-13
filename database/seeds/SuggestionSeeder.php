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
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category    = '';
        $suggestion->description = '';
        $suggestion->save();

    }
}
