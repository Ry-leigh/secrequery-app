<?php

namespace App\Notifications;

use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AbsenceThresholdNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $course;
    public $absences;

    public function __construct(Course $course, $absences)
    {
        $this->course = $course;
        $this->absences = $absences;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("How are you, we hope you are doing fine ^^")
            ->line("You now have {$this->absences} absences in {$this->course->course}.")
            ->line('Please be advised that further absences may sanction to disciplinary actions.')
            ->salutation('Regards, The Secrequery Devs');
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => "You now have {$this->absences} absences in {$this->course->course}.",
            'course_id' => $this->course->id,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
