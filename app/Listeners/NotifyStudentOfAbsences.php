<?php

namespace App\Listeners;

use App\Events\StudentReachedAbsenceThreshold;
use App\Notifications\AbsenceThresholdNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyStudentOfAbsences
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StudentReachedAbsenceThreshold $event)
    {
        $event->student->notify(new AbsenceThresholdNotification(
            $event->course,
            $event->absences
        ));
    }
}
