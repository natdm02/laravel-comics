@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <section class="comics-hero">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="jumbo">

    </section>

    <section class="comics-list-section">
        <div class="container">
            <h2>Current Series</h2>
            <div class="comics-grid">
                @foreach ($comics as $comic)
                    <div class="comic-item">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h3>{{ $comic['title'] }}</h3>
                    </div>
                @endforeach
            </div>
            <button class="load-more">Load More</button>
        </div>
    </section>
@endsection

