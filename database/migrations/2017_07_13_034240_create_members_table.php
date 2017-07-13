<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slack_id');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        $member = new \App\Models\Member;
        $member->name = 'Anton.V';
        $member->slack_id = 'U3PDVUKNK';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Armig.E';
        $member->slack_id = 'U2WGFSSMB';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Bettina.S';
        $member->slack_id = 'U02T25M17';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Caique.C';
        $member->slack_id = 'U5E5W031D';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Craig.B';
        $member->slack_id = 'U025H2P01';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Damian.R';
        $member->slack_id = 'U07MPE06Q';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Dan.O';
        $member->slack_id = 'U0KUB147R';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Edward.L';
        $member->slack_id = 'U2GMZ28Q7';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Hanna.S';
        $member->slack_id = 'U0MS4PHQB';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Hayden.J';
        $member->slack_id = 'U0A80HBPF';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Helen.L';
        $member->slack_id = 'U15J931EC';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Jana.M';
        $member->slack_id = 'U1WRN962K';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Jess.F';
        $member->slack_id = 'U0CMF3AN7';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'JP';
        $member->slack_id = 'U219BR9A6';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Josh.P';
        $member->slack_id = 'U285JPZV3';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Kat.B';
        $member->slack_id = 'U02PRAM2F';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Mauro.V';
        $member->slack_id = 'U025G79C8';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Morgan.P';
        $member->slack_id = 'U5AK4LF7E';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Shane.M';
        $member->slack_id = 'U1ZRQSB5X';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Shane.O';
        $member->slack_id = 'U0A80KHKP';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Thibault.M';
        $member->slack_id = 'U3NFVMK8Q';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Tia.A';
        $member->slack_id = 'U0SEL5BRV';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Tito.C';
        $member->slack_id = 'U41070BCY';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Reece.H';
        $member->slack_id = 'U4LK27PD3';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Wouter.P';
        $member->slack_id = 'U025FGZJK';
        $member->save();

        // ================================

        $member = new \App\Models\Member;
        $member->name = 'Yif.S';
        $member->slack_id = 'U02RYP9S4';
        $member->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
