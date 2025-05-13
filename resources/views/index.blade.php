@extends('layouts.app')

@section('title', 'Home')

@section('container')

<div class="container">
    <section class="home">
        <img src="{{ asset('images/cafe.jpg') }}" alt="Cafe">
    
            <div class="content">
                <div class="text-home">
                    <p>LOREM IPSUM</p>
                    <h3>LOREM IPSUM</h3>
                    <p>Erin sunt aliquip ullamco laborum ali laboris non aliqua mollit consequat. Sunt qui laboris quis tempor reprehenderit nulla libero iure aute ipsum incididunt nostrud laborum. Consequat ea exom velit veniam excepteur sint sunt elit.</p>
                </div>
                <a href="/" class="button">Visit us today</a>
            </div>
    </section>
</div>
<section class="promise mb-4">
    <div class="container">
        <div class="promise-content">
            <p>Our Promise</p>
            <h2>to {{ session()->has('user_data') ? session('user_data.first_name'). ' ' . session('user_data.last_name') : 'YOU' }}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ut, quia veniam officiis vitae distinctio sit ipsa temporibus iure sunt odio fuga atque quibusdam qui. Quisquam assumenda eius a ipsam officiis saepe nihil inventore repellendus. Voluptatibus quasi hic sed pariatur ducimus enim, magni a debitis rem delectus consectetur tempora? Reiciendis!</p>
        </div>
    </div>
</section>

    
@endsection
