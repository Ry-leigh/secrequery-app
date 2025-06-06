@extends('layouts.main')

@section('title', 'Events')
    
@section('content')
    <h1>Events</h1>
    @foreach ($groupedEvents as $month => $events)
        <h2 class="text-xl font-bold mt-6">{{ $month }}</h2>

        @foreach ($events as $event)
            <div class="ml-4 mb-2">
                <strong>{{ \Carbon\Carbon::parse($event->date)->format('M d') }}: {{ $event->title }}</strong> 
                
                <br>
                {{ $event->content }}
            </div>
        @endforeach
    @endforeach
@endsection 