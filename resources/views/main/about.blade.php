<link rel="stylesheet" href="{{ asset('styles/main/about/styles.css') }}">
<title>{{ config('app.name', 'Cloud Copy') }} - About Us</title>

@extends('template')

@section('content')
    <section class="hero" data-aos="fade-up" data-aos-duration="1500">
        <div class="hero-text">
            <h1>{{ trans($titles[0]) }}</h1>
            <p>{{ trans($contents[0]) }}</p>
        </div>
        <div class="hero-img">
            <img src="{{ asset('images/illus_notes.png') }}" alt="Notes hero image">
        </div>
    </section>
    <section class="row-about1" data-aos="fade-up" data-aos-duration="1500">
        <div class="row-about1-text">
            <h2>{{ trans($titles[1]) }}</h2>
            <p>{{ trans($contents[1]) }}</p>
        </div>
    </section>
    <section class="row-about2" data-aos="fade-up" data-aos-duration="1500">
        <div class="row-about2-text">
            <h2>{{ trans($titles[2]) }}</h2>
            <p>{{ trans($contents[2]) }}</p>
        </div>
        <div class="row-about2-img">
            <img src="{{ asset('images/illus_notes2.png') }}" alt="Personal notebook illustration from undraw">
        </div>
    </section>
@endsection