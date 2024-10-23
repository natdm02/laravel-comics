@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    <section class="comics-hero">

        <img src="{{ asset('images/cd-logo.png') }}" alt="Hero Image" class="hero-image">

        <section class="comics-list-section">

            <div class="container">

                <h2 class="section-title">Current Series</h2>

                <div class="comics-grid">

                    @foreach ($comics as $index => $comic)
                        <div class="comic-item">
                            <div class="comic-thumb-container">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="comic-thumb">
                            </div>
                            <div class="comic-details">
                                <h3 class="comic-title">
                                    <a href="{{ url('comic.thumb' . $index) }}">{{ $comic['title'] }}</a>
                                </h3>
                                <p class="comic-price">{{ $comic['price'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="load-more">Load More</button>

            </div>

        </section>
@endsection




