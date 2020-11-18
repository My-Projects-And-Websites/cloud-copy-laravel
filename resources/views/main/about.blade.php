<link rel="stylesheet" href="{{ asset('styles/main/about/styles.css') }}">

@extends('template')

@section('title', 'About Us')

@section('content')
    <section class="hero" data-aos="fade-right" data-aos-duration="1500">
        <div class="hero-text">
            <h1>{{ trans($titles[1]) }}</h1>
            <p>{{ trans($contents[1]) }}</p>
            <div class="cta">
                <a href="{{ URL::to('/portfolio') }}">View Portfolio</a>
            </div>
        </div>
        <div class="hero-img">
            <img src="{{ asset('images/Neninka Office_Winch Media.jpg') }}" alt="Neninka office">
        </div>
    </section>
    <section class="row-about1" data-aos="fade-right" data-aos-duration="1500">
        <div class="row-about1-text">
            <h2>{{ trans($titles[0]) }}</h2>
            <p>{{ trans($contents[0]) }}</p>
            <div class="cta">
                <a href="{{ URL::to('/portfolio') }}">View Portfolio</a>
            </div>
        </div>
        <div class="row-about1-img">
            <img src="{{ asset('images/Maltese Falcon by Carlo Borlenghi.JPG') }}" alt="Boat with falcon on the sail">
        </div>
    </section>
@endsection