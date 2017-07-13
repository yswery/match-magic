<?php

namespace App\Console\Commands;

use App\Services\Slack;
use Illuminate\Console\Command;

class hypeHype extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zMatchMagic:hype-hype';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create some hype on slack';

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


        $slack->sendToChannel('#matchmagic', view('slack-messages.hype'));
    }
}
