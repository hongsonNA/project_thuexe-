<?php

namespace App\Console\Commands;

use App\Model\Target;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
        Log::info('Vao cron email');
        //
        $vehicle = Target::with([
            'user' => function ($query) {
                $query->select(['id', 'name', 'email']);
            },
            'vehicle' => function ($query) {
                $query->select(['id', 'user_id', 'name', 'status']);
            }
        ])->get()->toArray();

        foreach ( $vehicle as $v ){
            if (date('Y-m-d') == date('Y-m-d', strtotime($v['end_date']))) {
                $to_name = "le van hieu"; // ten nguoi nhan
                $to_email = "hieulv@baokim.vn"; // mail nguoi nhan
                $data = array('name' => 'ten nguoi gui', 'body' => 'xe ban da het han');
                try {
                    Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
                        $message->to($to_email, $to_name)
                            ->subject('V/v het han dang kiem xe');
                        $message->from('hson8711@gmail.com', 'Test Mail');
                    });
                } catch (\Exception $e) {
                    Log::info($e->getMessage() . '-' . $e->getFile() . '-' . $e->getLine());
                }
            }
        }
    }
}
