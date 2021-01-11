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

    <section id="comic-infos">
        <div class="container small">
            <div class="list-container">
                <ul class="info-list">
                    <li class="clearfix">
                        <h3>Talent</h3>
                    </li>

                    <li class="clearfix">
                        <h5>Art by:</h5>
                        <p>
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{ $artist }}</a>{{--
                            --}}{{$loop->last ? '.' : ','}}
                            @endforeach
                        </p>
                    </li>

                    <li class="clearfix">
                        <h5>Written by:</h5>
                        <p>
                            @foreach ($comic['writers'] as $writer)
                                <a href="#">{{ $writer }}</a>{{--
                            --}}{{$loop->last ? '.' : ','}}
                            @endforeach
                        </p>
                    </li>
                </ul>
                <ul class="info-list">
                    <li class="clearfix">
                        <h3>Specs</h3>
                    </li>

                    <li class="clearfix">
                        <h5>Series:</h5>
                        <p>
                            <a href="#">
                                {{ $comic['series'] }}
                            </a>
                        </p>
                    </li>

                    <li class="clearfix">
                        <h5>U.S. Price:</h5>
                        <p>
                            <a href="#">
                                {{ $comic['price'] }}
                            </a>
                        </p>
                    </li>

                    <li class="clearfix">
                        <h5>On Sale Date:</h5>
                        <p>
                            {{
                                DateTime::createFromFormat('Y-m-d', $comic['sale_date']) -> format('M d Y')
                            }}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div id="products">
            <div class="container small">
                <ul>
                    <li>
                        <a href="#">
                            <span class="uc">
                                Digital comics
                            </span>
                            <span class="img-box"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uc">
                                Shop DC
                            </span>
                            <span class="img-box"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uc">
                                Comic shop locator
                            </span>
                            <span class="img-box"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uc">
                                Subscriptions
                            </span>
                            <span class="img-box"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
