<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use App\Notifications\HappyBirthday;
use App\Patient;
use Illuminate\Notifications\Notifiable;

class SendPatientBirthdayNotification extends Command
{
    use Notifiable;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:patientbirthdaynotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifies admin by email and via dashbaord of a patients birthday';

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
        $user = User::where("email", "imakulateeyeclinic@gmail.com")->first();
        $filtered = Patient::all()->filter(function ($value, $key) {
            return $value->dateofbirth === date('Y-m-d');
        });
        $patients = $filtered->all();
        $user->notify(new HappyBirthday($patients));
    }
}
