<link rel="stylesheet" href="{{ asset('styles/onsubmit/styles.css') }}">

@extends('template')

@section('title', 'Thank you!')

@section('content')
    <div class="modal-container">
        <div class="modal-form">
            <div class="thanks">
                <h2>Thank you!</h2>
                <p>Your message has been successfully received.</p>
            </div>
            <p class="cta">Somebody will get back to within the next 24 hours.</p>
            <div class="redirect">
                <a href="{{ URL::to('/portfolio') }}">View Portfolio</a>
                <a href="{{ URL::to('/') }}">Home</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/fade_in_modal.js') }}"></script>
@endsection