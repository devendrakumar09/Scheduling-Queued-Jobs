<?php

namespace App\Console\Commands;

use App\Jobs\GoodMorning;
use Illuminate\Console\Command;

class MorningMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'morning:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Good morning  Email At 8:00 am tot all users';

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
     * @return int
     */
    public function handle()
    {
    //    dispatch( new GoodMorning);
    }
}
