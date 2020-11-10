<link rel="stylesheet" href="{{ asset('styles/main/services/styles.css') }}">
<title>{{ config('app.name', 'Cloud Copy') }} Services</title>

@extends('template')

@section('content')
    <section class="intro" data-aos="fade-right" data-aos-duration="1500">
        <h1 class="intro-heading">Clouds of Content</h1>
        <p>{{ trans($txt1) }}</p>
    </section>
    <section class="cloud-services">
        <ul class="cloud-service-links" data-aos="fade-up" data-aos-duration="1500">
            <li class="cloud-service-links-container">
                <div class="cloud-service-link-content">
                    <h2>Rain Cloud</h2>
                    <p>{{ trans($service1) }}</p>
                    <ul>
                        <li>{{ trans($include[0]) }}</li>
                        <li>{{ trans($include[1]) }}</li>
                        <li>{{ trans($include[2]) }}</li>
                    </ul>
                </div>
            </li>
            <li class="cloud-service-links-container">
                <div class="cloud-service-link-content">
                    <h2>Snow Cloud</h2>
                    <p>{{ trans($service3) }}</p>
                    <ul>
                        <li>{{ trans($include[1]) }}</li>
                    </ul>
                </div>
            </li>
            <li class="cloud-service-links-container">
                <div class="cloud-service-link-content">
                    <h2>Rainbow Cloud</h2>
                    <p>{{ trans($service4) }}</p>
                    <ul>
                        <li>{{ trans($include[2]) }}</li>
                        <li>{{ trans($include[3]) }}</li>
                        <li>{{ trans($include[4]) }}</li>
                    </ul>
                    <span>
                        *The illustrations and film services are standalone 
                        packages which are outsourced with Cloud Copy’s trusted 
                        friends and charged at daily rates.
                        <br><br>
                        *Illustrations and films are optional add-ons that are 
                        tailored to suit business requirements.
                    </span>
                </div>
            </li>
            <li class="cloud-service-links-container">
                <div class="cloud-service-link-content">
                    <h2>Blue-Sky Thinking</h2>
                    <p>{{ trans($service2) }}</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="cta" data-aos="fade-up" data-aos-duration="1500">
        <div class="cta-btn">
            <h3>Get in Touch</h3>
            <p>Call us, discuss your business requirements.</p>
            <a href="{{ URL::to('/contact') }}">Get In Touch</a>
        </div>
    </section>

    <script src="{{ asset('js/ser_animate.js') }}"></script>
@endsection