<header>
    <div class="header-container">
        <div class="header-logo">
            <a href="{{ URL::to('/') }}"><img src="{{ asset('images/Cloud-01.png') }}" alt="Company logo for cloud copy"></a>
        </div>
        <nav class="header-nav">
            <ul class="header-nav-links">
                <a href="{{ URL::to('/services') }}"><li>Services</li></a>
                <a href="{{ URL::to('/about') }}"><li>About</li></a>
                <a href="{{ URL::to('/portfolio') }}"><li>Portfolio</li></a>
                <a href="{{ URL::to('/contact') }}"><li>Contact</li></a>
            </ul>
        </nav>
    </div>
</header>