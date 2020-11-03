<link rel="stylesheet" href="{{ asset('styles/main/index/styles.css') }}">
<title>{{ config('app.name', 'Cloud Copy') }} - Home of the best content quality</title>

@extends('template')

@section('content')
    <div id="loading"></div>

    <section class="hero">
        <div class="hero-container">
            <div class="hero-heading">
                <h1><span>Cloud Copy.</span> See you at nine.</h1>
                <p>
                    Cloud Copy creates content to strengthen businesses' brand 
                    proposition.
                </p>
                <span id="quote">Start your conversation with eloquence</span>
            </div>
            <div class="hero-img">
                <div class="hero-img-container">
                    <div class="hero-img-slide">
                        <img src="{{ asset('images/carousel3.jpg') }}" id="lastClone" alt="">
                        @foreach($images as $image)
                        <img src="{{ $image }}" alt="Carousel images">
                        @endforeach
                        <img src="{{ asset('images/carousel1.jpg') }}" id="firstClone" alt="">
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
                    @if (count($categories) > 0)
                        @foreach($categories as $category)
                        <li class="category-list-{{ $category->title }}">
                            <div class="category-list-img">
                                <img src="{{ asset('images/Cloud-04.png') }}" alt="">
                            </div>
                            <h3>{{ $category->title }}</h3>
                            <p>{{ $category->description }}</p>
                        </li>
                        @endforeach
                    @else
                        <p>Nothing to display.</p>
                    @endif
                </ul>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <h2><span>Subscribe</span> to our newsletter.</h2>
        <form action="{{ URL::to('/sub') }}" method="POST">
            @csrf
            <input type="email" name="subEmail" placeholder="Enter email here...">
            <input type="submit" name="subButton">
        </form>
    </section>

    <script src="{{ asset('js/autoslide.js') }}"></script>
    <script src="{{ asset('js/switch_text.js') }}"></script>
    <script src="{{ asset('js/preload.js') }}"></script>
@endsection