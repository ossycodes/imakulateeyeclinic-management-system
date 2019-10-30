<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class HappyBirthday extends Notification
{
    use Queueable;

    public $patient;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($patients)
    {
        $this->patients = $patients;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $celebrants = $this->patientsWhoseBirthdayAreTodayString();
        return (new MailMessage)
            ->line("{$celebrants} have birthday today!");
        // ->action('Notification Action', url('/'))
        // ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $celebrants = $this->patientsWhoseBirthdayAreTodayString();
        return [
            'patients_fullname' => $celebrants
        ];
    }

    public function patientsWhoseBirthdayAreTodayString()
    {
        $patientsWhoseBirthdayAreTodayArray = [];
        foreach ($this->patients as $p) {
            array_push($patientsWhoseBirthdayAreTodayArray, $p->fullname);
        }
        return implode(",", $patientsWhoseBirthdayAreTodayArray);
    }
}
