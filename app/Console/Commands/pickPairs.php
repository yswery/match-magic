<?php

namespace App\Console\Commands;

use App\Models\Member;
use App\Models\Pool;
use App\Models\Suggestion;
use App\Services\Slack;
use Illuminate\Console\Command;

class pickPairs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zMatchMagic:pick-pairs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get 3 pairs for the dates';

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
        $pool  = new Pool();
        $slack = new Slack();

        $pairs = $pool->createPairs();

        // ##### TO REMOVE THIS LINE
        $pairs = [
            Member::where('name', 'Hanna.S')->orWhere('name', 'Josh.P')->get(),
            Member::where('name', 'Jess.F')->orWhere('name', 'Tito.C')->get(),
            Member::where('name', 'Tia.A')->orWhere('name', 'Wouter.P')->get(),
        ];

        // Send notifications on slack for the private people with suggestions?
        foreach ($pairs as $pair) {
            $suggestions = [
                'food'     => Suggestion::where('category', 'food')->inRandomOrder()->first(),
                'activity' => Suggestion::where('category', 'activity')->inRandomOrder()->limit(1)->first(),
                'random'   => Suggestion::where('category', 'random')->inRandomOrder()->limit(1)->first(),
            ];

            $slack->sendPrivateMessage($pair, view('slack-messages.private-dm')->with('pair', $pair)->with($suggestions));
        }

        $upcomingIds   = Pool::limit(3)->pluck('member_id')->toArray();
        $membersToDate = Member::whereIn('id', $upcomingIds)->get();

        // Post a message on channel on slack
        $slack->sendToChannel('#announcements', view('slack-messages.pair-announce')->with('pairs', $pairs)->with('membersToDate', $membersToDate));

    }
}
