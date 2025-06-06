@extends('layouts.main')

@section('content')
    <h1>Welcome, {{ Auth::user()->first_name }}</h1>
@endsection