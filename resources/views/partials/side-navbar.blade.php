<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<div class="sidebar">
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <span class="material-symbols-outlined">flood</span>
                <span class="label">Dashboard</span>
            </a>
        </li>
        <li>
            @if (auth()->user()->role_id == 4)
                <a href="{{ route('secretary.instructor.index', ['date' => now()->toDateString()]) }}" class="{{ request()->routeIs('secretary*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">done_outline</span>
                    <span class="label">Attendance</span>
                </a>
            @elseif (auth()->user()->role_id == 5)
                <a href="{{ route('attendance', ['date' => now()->toDateString()]) }}" class="{{ request()->routeIs('attendance') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">done_outline</span>
                    <span class="label">Attendance</span>
                </a>
            @endif
        </li>
        <li>
            <a href="{{ route('notes') }}" class="{{ request()->routeIs('notes*') ? 'active' : '' }}">
                <span class="material-symbols-outlined">edit_note</span>
                <span class="label">Notes</span>
            </a>
        </li>
        <li>
            <a href="{{ route('tasks') }}" class="{{ request()->routeIs('tasks*') ? 'active' : '' }}">
                <span class="material-symbols-outlined">checklist</span>
                <span class="label">Tasks</span>
            </a>
        </li>
        <li>
            <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">
                <span class="material-symbols-outlined">celebration</span>
                <span class="label">Events</span>
            </a>
        </li>
        <li>
            <a href="{{ route('notifications') }}" class="{{ request()->routeIs('notifications') ? 'active' : '' }}">
                <span class="material-symbols-outlined">notifications</span>
                <span class="label">Notifications</span>
            </a>
        </li>
    </ul>
</div>
<div class="topbar">
    <div class="topbar-left">📘 SecreQuery</div>
    <div class="topbar-right">
        <div class="user-dropdown">
            <span class="username">Hi, {{ auth()->user()->first_name }}  ▼</span>
            <div class="dropdown-content">
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 
<a href="{{ route('profile.edit') }}">Edit Profile</a>

--}}