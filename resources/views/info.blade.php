@extends('layouts.app')

@section('title', 'Info')

@section('container')
    <div class="container text-white fs-3 pt-3">
        @if(session('user_data'))
            <div>Your name is: {{ session('user_data.first_name') }}</div>
            <div>Your last name is: {{ session('user_data.last_name') }}</div>

            @if(session('user_data.email'))
                <div>Your email is: {{ session('user_data.email') }}</div>
            @endif
        @else
            <p>No user data available.</p>
        @endif
    </div>
@endsection
