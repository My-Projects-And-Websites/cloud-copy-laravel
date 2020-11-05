<link rel="stylesheet" href="{{ asset('styles/main/contact/styles.css') }}">
<title>{{ config('app.name', 'Cloud Copy') }} - Get in Touch</title>

@extends('template')

@section('content')
    <main>
        <section class="contact" data-aos="fade-right" data-aos-duration="1250">
            <div class="contact-text">
                <h1>Get in Touch</h1>
                <p>
                    Connect with us and be part of our network. Don't be shy, we
                    are truly looking forward to your message.
                </p>
            </div>
            <div class="contact-form">
                <form action="{{ URL::to('') }}" method="POST">
                    <input type="text" name="queryName" placeholder="Name:">
                    <input type="email" name="queryEmail" placeholder="Email:">
                    <textarea name="queryText" placeholder="Message:"></textarea>
                    <input type="submit" name="querySubmit" value="Submit">
                </form>
            </div>
        </section>
        <section class="contact-img" data-aos="fade-left" data-aos-duration="1250" data-aos-delay="250">
            <div class="contact-img-container">
                <img src="{{ asset('images/contact.png') }}" alt="Contact illustration">
            </div>
        </section>
    </main>

    <script src="{{ asset('js/form_animation.js') }}"></script>
@endsection