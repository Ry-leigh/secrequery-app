<?php

namespace App\Providers;

use App\Events\StudentReachedAbsenceThreshold;
use App\Listeners\NotifyStudentOfAbsences;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        StudentReachedAbsenceThreshold::class => [
            NotifyStudentOfAbsences::class,
        ],
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
