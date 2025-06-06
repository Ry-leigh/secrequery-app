<a href="{{ route('profile.edit') }}">Edit Profile</a>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Log Out</button>
</form>

<nav>
    <ul>
        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        @if (auth()->user()->role_id == 4)
            <li><a href="{{ route('secretary.instructor.index', ['date' => now()->toDateString()]) }}">Attendance</a></li>
        @elseif (auth()->user()->role_id == 5)
            <li><a href="{{ route('attendance', ['date' => now()->toDateString()]) }}">Attendance</a></li>
        @endif
        <a href="{{ ('notes') }}">Notes</a>
        <li><a href="{{ ('tasks') }}">Tasks</a></li>
        <li><a href="{{ ('events') }}">Events</a></li>
    </ul>
</nav>