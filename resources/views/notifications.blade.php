@extends('layouts.main')

@section('title', 'Notifications')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Notifications</h1>

    @forelse (auth()->user()->notifications as $notification)
        <div class="bg-white shadow p-4 mb-3 rounded">
            <p>{{ $notification->data['message'] }}</p>

            @if (isset($notification->data['url']))
                <a href="{{ $notification->data['url'] }}"
                   class="inline-block mt-2 px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                    View Details
                </a>
            @endif

            <div class="text-sm text-gray-500 mt-1">
                {{ $notification->created_at->diffForHumans() }}
            </div>
        </div>
    @empty
        <p>No notifications yet.</p>
    @endforelse
@endsection
