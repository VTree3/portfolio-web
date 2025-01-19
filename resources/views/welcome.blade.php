@vite(['resources/css/home.css'])
@extends('includes.bootstrap')
@section('content')
    <div class="home-page container-home">
        @include('includes.header')
        <div class="image-container">
            <div class = "main-logo align-items-center">
                <img src="{{ asset('images/portfolio-text.png') }}" alt="Portfolio Logo">
            </div>
        </div>
    </div>
@endsection