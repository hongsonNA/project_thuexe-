<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gửi thông báo sắp hết hạn đăng kiểm xe.';

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
        //

    }
}
