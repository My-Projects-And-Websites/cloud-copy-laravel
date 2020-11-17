<link rel="stylesheet" href="{{ asset('styles/main/contact/styles.css') }}">
<title>{{ config('app.name', 'Cloud Copy') }} - Get in Touch</title>

@extends('template')

@section('title', 'Get in Touch')

@section('content')
    <main>
        <section class="contact" data-aos="fade-right" data-aos-duration="1250">
            <div class="contact-text">
                <h1>{{ $longtext[1] }}</h1>
                <p>{{ $longtext[0] }}</p>
            </div>
            <div class="contact-form">
                <form action="{{ URL::to('/send') }}" method="POST" id="contact-form-input">
                    <div class="text-input">
                        <small class="text-input-error">Please enter your name.</small>
                        <input type="text" name="queryName" placeholder="Name:" id="text-input">
                    </div>
                    <div class="email-input">
                        <small class="email-input-error">Please provide a valid email.</small>
                        <input type="email" name="queryEmail" placeholder="Email:" id="email-input">
                    </div>
                    <div class="msg-input">
                        <small class="msg-input-error">Please write a message.</small>
                        <textarea name="queryText" placeholder="Message:" id="msg-input"></textarea>
                    </div>
                    <input type="submit" name="querySubmit" value="Submit">
                    @csrf
                </form>
            </div>
        </section>
        <section class="contact-img" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="250">
            <div class="contact-img-container">
                <img src="{{ asset('images/Final Files/CAGE/PNG/Birdcage Illustration.png') }}" alt="Contact illustration">
            </div>
        </section>
    </main>

    <script src="{{ asset('js/form.js') }}"></script>
@endsection