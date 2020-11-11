<link rel="stylesheet" href="{{ asset('styles/main/index/styles.css') }}">
<title>{{ config('app.name', 'Cloud Copy') }} - Home of the best content quality</title>

@extends('template')

@section('content')
    <div id="loading"></div>

    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <div class="hero-heading">
                    <h1><span>Cloud Copy.</span> See you at nine.</h1>
                    <p>
                        Cloud Copy creates content to strengthen businesses' brand 
                        proposition.
                    </p>
                    <span id="quote">Start your conversation with eloquence</span>
                </div>
            </div>
            <div class="hero-img">
                <div class="hero-img-container">
                    <div class="hero-img-slide">
                        <img src="{{ asset('images/carousel1.jpg') }}" alt="cloud copy first image carousel">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contents">
        <div class="contents-container">
            <div class="contents-heading">
                <h2><span>Cloud Copy</span> Products</h2>
            </div>
            <div class="contents-category">
                <ul class="category-list">
                    @if (count($category_titles) > 0)
                        @foreach($category_titles as $key => $category_title)
                        <li class="category-list-{{ $category_title }}">
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
                    <a href="{{ URL::to('/services') }}" id="service-cta">
                        <li class="last-list-item">
                            <h3 class="last-h3">View Services</h3>
                            <ion-icon name="arrow-forward-circle-outline" class="arrow-right"></ion-icon>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/autoslider.js') }}"></script>
    <script src="{{ asset('js/switch_text.js') }}"></script>
    <script src="{{ asset('js/preload.js') }}"></script>
    <script src="{{ asset('js/product_animation.js') }}"></script>
@endsection