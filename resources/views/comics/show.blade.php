@extends('layouts.app')

@section('title', $comic['title'])

@section('content')

    <section class="comic-details-section">

        <div class="container">
            <h1 class="comic-title">{{ $comic['title'] }}</h1>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="comic-thumb">
            <p class="comic-description">{{ $comic['description'] }}</p>
            <p class="comic-price">Price: {{ $comic['price'] }}</p>
            <p class="comic-series">Series: {{ $comic['series'] }}</p>
            <p class="comic-sale-date">Sale Date: {{ $comic['sale_date'] }}</p>
            <p class="comic-type">Type: {{ $comic['type'] }}</p>
            <a href="{{ url('/comics') }}" class="back-button">Back to Comics</a>
        </div>

    </section>

@endsection
