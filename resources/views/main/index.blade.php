<link rel="stylesheet" href="{{ asset('styles/main/index/styles.css') }}">

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
                        <img src="{{ asset('images/Excellence Office 2_Winch Media.jpg') }}" id="lastClone" alt="">
                        <img src="{{ asset('images/Amels 60 (I)_ Winch Media.jpg') }}" alt="">
                        <img src="{{ asset('images/Here Comes The Sun Office_Winch Media-min.jpg') }}" alt="">
                        <img src="{{ asset('images/Excellence Office 2_Winch Media (1).jpg') }}" alt="">
                        <img src="{{ asset('images/Amels 60 (I)_ Winch Media.jpg') }}" id="firstClone" alt="">
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
        <form action="#">
            <input type="email" name="subEmail" placeholder="Enter email here...">
            <input type="submit" name="subButton">
        </form>
    </section>

    <script src="{{ asset('js/autoslide.js') }}"></script>
    <script src="{{ asset('js/switch_text.js') }}"></script>
    <script src="{{ asset('js/preload.js') }}"></script>
@endsection