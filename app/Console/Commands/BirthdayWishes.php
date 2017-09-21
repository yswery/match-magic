<?php

namespace App\Console\Commands;

use App\Models\Member;
use App\Services\Slack;
use Carbon\Carbon;
use Illuminate\Console\Command;

class BirthdayWishes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zMatchMagic:birthday-wishes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loops through though users and wishes';

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

        $members = Member::where('active', true)->get();
        
        foreach ($members as $member) {
            if ($member->birthday === Carbon::now()->toDateString()) {
                $slack->sendToChannel('#announcements', view('slack-messages.birthday')->with('member', $member));
            }
        }
    }
}
