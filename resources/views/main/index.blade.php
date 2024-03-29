<link rel="stylesheet" href="{{ asset('styles/main/index/styles.css') }}">

@extends('template')

@section('title', 'Home')

@section('content')
    <div id="loading"></div>

    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <div class="hero-heading">
                    <h1><span>Cloud Copy.</span> See you at nine.</h1>
                    <p>Cloud Copy creates content to strengthen your brand proposition</p>
                    <span id="quote">Start your conversation with eloquence</span>
                </div>
            </div>
            <div class="hero-img">
                <div class="hero-img-container">
                    <img src="{{ asset('images/new_carousel1.jpeg') }}" alt="cloud copy first image carousel">
                </div>
            </div>
        </div>
    </section>
    <section class="contents">
        <div class="contents-container">
            <div class="contents-heading">
                <h2>Cloud Copy Products</h2>
            </div>
            <div class="contents-category">
                <ul class="category-list">
                    @if (count($category_titles) > 0)
                        @foreach($category_titles as $key => $category_title)
                        <li class="category-list-{{ $category_title }} category-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="category-list-img">
                                <img src="{{ asset('images/Cloud-04.png') }}" alt="">
                            </div>
                            <h3>{{ $category_title }}</h3>
                            <p>{{ $category_desc[$key++] }}</p>
                        </li>
                        @endforeach
                    @else
                        <p>Nothing to display.</p>
                    @endif
                    <a href="{{ URL::to('/services') }}" id="service-cta" data-aos="fade-up" data-aos-duration="1000">
                        <li class="last-list-item">
                            <h3 class="last-h3">View Services</h3>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/autoslider.js') }}"></script>
    <script src="{{ asset('js/switch_text.js') }}"></script>
    <script src="{{ asset('js/preload.js') }}"></script>
@endsection