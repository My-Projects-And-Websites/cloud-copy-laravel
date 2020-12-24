<link rel="stylesheet" href="{{ asset('styles/main/portfolio/styles.css') }}">

@extends('template')

@section('title', 'Our Works')

@section('content')
    <section id="main-portfolio-content">
        <div class="portfolio-title">
            <div class="portfolio-title-text">
                <h2>Cloud Copy's Portfolio of Work</h2>
            </div>
        </div>
        <main>
            @if(count($company_names) > 0)
            <section class="company-names" data-aos="zoom-in" data-aos-duration="1000">
                <aside class="company-sel">
                    <select id="company-selection">
                        <option value="All">All</option>
                        @foreach($company_names as $company_name)
                        <option value="{{ $company_name->concat }}">{{ $company_name->name }}</option>
                        @endforeach
                    </select>
                    <div class="arrow-down">
                        <ion-icon class="arrow-point" name="caret-down-outline"></ion-icon>
                    </div>
                </aside>
            </section>
            <section class="portfolio-projects" data-aos="fade-up" data-aos-duration="1500">
                <ul class="portfolio-projects-list">
                    @foreach($portfolio as $p)
                    <div class="{{ $p->concat }} option-item">
                        <li class="portfolio-projects-list-items">
                            <h2 class="company-name">{{ $p->name }}</h2>
                            <p class="company-campaign">Campaign: {{ $p->campaign }}</p>
                            <p class="company-brief">Brief: {{ $p->brief }}</p>
                            <div class="company-project-cta">
                                <a href="{{ URL::to($p->link) }}">View</a>
                            </div>
                        </li>
                    </div>
                    @endforeach
                </ul>
            </section>
            @else
            <p>Nothing to display.</p>
            @endif
        </main>
    </section>
    <section class="testimonials">
        <h2>Testimonials</h2>
        @foreach($testimonials['name'] as $key => $testimonial)
        <div class="test-container">
            <h3>{{ $testimonial }}</h3>
            <small>{{ $testimonials['role'][$key] }} at {{ $testimonials['company'][$key] }}</small>
            <p class="testimonials-description">{{ $testimonials['desc'][$key] }}</p>
            <div class="test-img">
                <img src="{{ asset($testimonials['img'][$key]) }}" alt="company logo">
            </div>
        </div>
        @endforeach
    </section>

    <script src="{{ asset('js/select.js') }}"></script>
@endsection