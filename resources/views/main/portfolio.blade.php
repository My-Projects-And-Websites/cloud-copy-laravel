<link rel="stylesheet" href="{{ asset('styles/main/portfolio/styles.css') }}">

@extends('template')

@section('title', 'Our Works')

@section('content')
    <main>
        <section class="company-names">
            <aside>
                <ul class="company-names-list">
                    @foreach($portfolio as $p)
                    <a href="#{{ $p->name }}">
                        <li class="company-names-list-items">{{ $p->name }}</li>
                    </a>
                    @endforeach
                </ul>
            </aside>
        </section>
        <section class="portfolio-projects">
            <ul class="portfolio-projects-list">
                @foreach($portfolio as $p)
                <a href="{{ URL::to($p->link) }}" id="{{ $p->name }}">
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
@endsection