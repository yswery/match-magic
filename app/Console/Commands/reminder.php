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

        $historicPairs = HistoricPair::limit(3)->orderBy('created_at', 'DESC')->get();

        // Send notifications on slack for the private people with suggestions?
        foreach ($historicPairs as $historicPair) {
            $pairs = Member::where('id', $historicPair->member_id_1)->orWhere('id', $historicPair->member_id_2)->get();
            $slack->sendPrivateMessage($pairs, view('slack-messages.reminder'));
        }
    }
}
