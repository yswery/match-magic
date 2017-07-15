<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoolSelectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection_pool', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->timestamps();
        });

        foreach (\App\Models\Member::all() as $member) {
            $pool = new \App\Models\Pool;
            $pool->member_id = $member->id;
            $pool->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('selection_pool');
    }
}
