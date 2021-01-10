@extends('layouts.app')

@section('title', 'DC Comics - Home')

@section('jumbo')
    <div class="jumbo teen-titans"></div>
@endsection

@section('content')

    <section id="comic-section" class="dark-bg-section">
        <div class="container">
            <h2 class="uc">Current series</h2>
            <div class="comics-list">
                @foreach ($comics as $index => $comic)
                    <a href="{{ route('selected-comic', [ 'id' => $index ]) }}" class="comic-card">
                        <div class="poster-container">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <p>
                            {{ $comic['title'] }}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="button-container">
                <a href="#" class="btn uc">Load more</a>
            </div>
        </div>
    </section>
    <section id="products-ad">
        <div class="container">
            <div class="products-list">
                <a class="product">
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    <p class="uc">Digital comics</p>
                </a>
                <a class="product">
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    <p class="uc">DC merchandise</p>
                </a>
                <a class="product">
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    <p class="uc">Subscription</p>
                </a>
                <a class="product">
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    <p class="uc">Comic shop locator</p>
                </a>
                <a class="product">
                    <img class="horizontal" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    <p class="uc">DC Power visa</p>
                </a>
            </div>
        </div>
    </section>

@endsection
