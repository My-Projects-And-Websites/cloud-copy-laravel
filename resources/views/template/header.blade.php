<header>
    <div class="header-container">
        <div class="header-logo">
            <a href="{{ URL::to('/') }}"><img src="{{ asset('images/cloudcopylogo-cropped.png') }}" alt="Company logo for cloud copy"></a>
        </div>
        <nav class="header-nav">
            <ul class="header-nav-links">
                <li><a href="{{ URL::to('/services') }}">Services</a></li>
                <li><a href="{{ URL::to('/about') }}">About</a></li>
                <li><a href="{{ URL::to('/portfolio') }}">Portfolio</a></li>
                <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div id="hbg">
            <span>&#9776;</span>
        </div>
    </div>
</header>

<div class="sidebar" style="margin-left: -250px;">
    <nav class="sidebar-nav">
        <ul class="sidebar-nav-links">
            <li class="sidebar-nav-link-item"><a href="{{ URL::to('/services') }}">Services</a></li>
            <li class="sidebar-nav-link-item"><a href="{{ URL::to('/about') }}">About</a></li>
            <li class="sidebar-nav-link-item"><a href="{{ URL::to('/portfolio') }}">Portfolio</a></li>
            <li class="sidebar-nav-link-item"><a href="{{ URL::to('/contact') }}">Contact</a></li>
        </ul>
    </nav>
</div>