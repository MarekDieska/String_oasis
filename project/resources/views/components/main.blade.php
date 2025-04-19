@extends('layouts.index')
@include('components.plusModal')

@section('content')
    <article class="row justify-content-center align-items-center position-relative w-100 text-center grad">
        <img class="background-image hidden text-center opacity-25 position-absolute"
             src="{{ asset('images/home_background.svg') }}" alt="photo" width="70%">
        <h1 class="position-relative hidden text_color">
            "Struny vašich snov, melódia vášho srdca."
        </h1>
    </article>

    <section class="container_pre_platne m-5">
        <h2 class="zlava text_color pt-5">Zľavy</h2>

        <div class="produkty-container d-flex">
            @foreach($nazvyProduktov as $i => $nazov)
                <div class="pas">
                    <div class="card produkt mt-3">
                        <div class="product-image">
                            <img class="card-photo" src="{{ $obrazkyProduktov[$i] ?? '' }}" alt="{{ $nazov }}">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661;</p>
                        </div>
                        <div class="cart-btn text-center" type="button" data-bs-toggle="modal"
                             data-bs-target="#plusModal">
                            <p>+</p>
                        </div>
                        <a class="link-custom" href="{{ route('produkt_detail') }}">
                            <div class="text-custom sirka">
                                <h5 class="t1-custom">{{ $nazov }}</h5>
                                <div class="t2-hv">
                                    <div>
                                        {{-- Pass the rating dynamically --}}
                                        @include('components.stars', ['rating' => $hodnoteniaProduktov[$i] ?? 0])
                                    </div>
                                    <h4 class="t2-custom">{{ $cenyProduktov[$i] ?? '—' }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container_pre_platne m-5">
        <h2 class="zlava text_color pt-5">Platne</h2>

        <div class="produkty-container d-flex">
            @foreach($nazvyP as $i => $nazov)
                <div class="pas">
                    <div class="card produkt mt-3">
                        <div class="product-image">
                            <img class="card-photo" src="{{ $obrazkyP[$i] ?? '' }}" alt="{{ $nazov }}">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661;</p>
                        </div>
                        <div class="cart-btn text-center" type="button" data-bs-toggle="modal"
                             data-bs-target="#plusModal">
                            <p>+</p>
                        </div>
                        <a class="link-custom" href="{{ route('produkt_detail') }}">
                            <div class="text-custom sirka pt-3">
                                <h5 class="t1-custom">{{ $nazov }}</h5>
                                <div class="t2-hv">
                                    <div>
                                        {{-- Include the dynamic rating for each vinyl --}}
                                        @include('components.stars', ['rating' => $hodnoteniaP[$i] ?? 0])
                                    </div>
                                    <h4 class="t2-custom">{{ $cenyP[$i] ?? '—' }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
