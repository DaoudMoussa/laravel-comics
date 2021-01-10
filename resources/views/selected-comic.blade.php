@extends('layouts.app')

@section('title', 'DC Comic - ' . $comic['title'])

@section('jumbo')
    <div class="jumbo teen-titans"></div>
@endsection

@section('content')
    <section id="intestation">
        <div class="small container">
            <div class="poster-container">
                <div class="uc comic-type">
                    {{ $comic['type'] }}
                </div>
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
                <div class="uc gallery">
                    View gallery
                </div>
            </div>
        </div>
    </section>

    <section id="comic-main-info">
        <div class="container small">
            <div class="content-container">
                <h2 class="uc">{{ $comic['title'] }}</h2>
                <div class="availability-info">
                    <div class="price">
                        US price:
                        <span>{{ $comic['price'] }}</span>
                    </div>

                    <div class="uc availability-status">
                        Available
                    </div>

                    <div class="dropdown placing">
                        Check availability
                    </div>
                </div>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>

            <div class="ad-container">
                <h5 class="uc">Advertisment</h5>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>

    </section>


@endsection
