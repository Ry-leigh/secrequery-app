<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $groupedEvents = Event::orderBy('date')
                              ->get()
                              ->groupBy(function ($event) {
            return \Carbon\Carbon::parse($event->date)->format('F Y');
        });
        return view('events', compact('groupedEvents'));
    }
}
