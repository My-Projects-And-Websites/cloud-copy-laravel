<link rel="stylesheet" href="{{ asset('styles/main/portfolio/styles.css') }}">

@extends('template')

@section('title', 'Our Works')

@section('content')
    <main>
        <section class="company-names">
            <aside>
                <select id="company-selection">
                <option value="All">All</option>
                @foreach($company_names as $company_name)
                    <option value="{{ $company_name->concat }}">{{ $company_name->name }}</option>
                @endforeach
                </select>
            </aside>
        </section>
        <section class="portfolio-projects">
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

    <script src="{{ asset('js/select.js') }}"></script>
@endsection