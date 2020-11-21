<link rel="stylesheet" href="{{ asset('styles/main/portfolio/styles.css') }}">

@extends('template')

@section('title', 'Our Works')

@section('content')
    <main>
        <section class="company-names" data-aos="zoom-in" data-aos-duration="1500">
            <aside>
                <select id="company-selection">
                <option value="All">All</option>
                @foreach($company_names as $company_name)
                    <option value="{{ $company_name->concat }}">{{ $company_name->name }}</option>
                @endforeach
                </select>
            </aside>
        </section>
        <section class="portfolio-projects" data-aos="fade-up" data-aos-duration="1500">
            <ul class="portfolio-projects-list">
                @foreach($portfolio as $p)
                <a href="{{ URL::to($p->link) }}" class="{{ $p->concat }} option-item">
                    <li class="portfolio-projects-list-items">
                        <h2 class="company-name">{{ $p->name }}</h2>
                        <p class="company-campaign">Campaign: {{ $p->campaign }}</p>
                        <p class="company-brief">Brief: {{ $p->brief }}</p>
                    </li>
                </a>
                @endforeach
            </ul>
        </section>
    </main>
    <section class="testimonials">
        <h2>Testimonials</h2>
        @foreach($testimonials['name'] as $key => $testimonial)
        <div class="test-container">
            <h3>{{ $testimonial }}</h3>
            <small>{{ $testimonials['role'][$key] }} at {{ $testimonials['company'][$key] }}</small>
            <p>{{ $testimonials['desc'][$key] }}</p>
            <div class="test-img">
                <img src="{{ asset($testimonials['img'][$key]) }}" alt="company logo">
            </div>
        </div>
        @endforeach
    </section>

    <script src="{{ asset('js/select.js') }}"></script>
@endsection