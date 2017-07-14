<?php

namespace App\Console\Commands;

use App\Models\HistoricPair;
use App\Models\Member;
use App\Services\Slack;
use Illuminate\Console\Command;

class reminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zMatchMagic:reminder';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind the last set of dated to go out';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $slack = new Slack();

        $pairs = HistoricPair::limit(3)->orderBy('created_at', 'DESC')->get();


        // ##### TO REMOVE THIS LINE
        $pairs = [
            Member::where('name', 'Hanna.S')->orWhere('name', 'Josh.P')->get(),
            Member::where('name', 'Jess.F')->orWhere('name', 'Tito.C')->get(),
            Member::where('name', 'Tia.A')->orWhere('name', 'Wouter.P')->get(),
        ];


        // Send notifications on slack for the private people with suggestions?
        foreach ($pairs as $pair) {
            $slack->sendPrivateMessage($pair, view('slack-messages.reminder'));
        }
    }
}
