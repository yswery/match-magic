<?php

namespace App\Console\Commands;

use App\Models\Member;
use App\Models\Pool;
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
        $pairs = [Member::where('name', 'Hanna.S')->orWhere('name', 'Dan.O')->get(), Member::where('name', 'Shane.M')->orWhere('name', 'Yif.S')->get()];

        // Send notifications on slack for the private people with suggestions?
        foreach ($pairs as $pair) {
            $slack->sendPrivateMessage($pair, view('slack-messages.private-dm')->with('pair', $pair));
        }

        // Post a message on channel on slack
        ### TO DO, CHANGE TO ANNOUNCEMENTS and use template
        //dump($slack->sendToChannel('#matchmagic', 'a few people been slected: ' . print_r($pairs[0]->toArray(), true) . print_r($pairs[1]->toArray(), true)));



    }
}
