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
            @foreach($products as $product)
                <div class="pas">
                    <div class="card produkt mt-3">
                        <div class="product-image">
                            <img class="card-photo" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661;</p>
                        </div>
                        <div class="cart-btn text-center" type="button" data-bs-toggle="modal"
                             data-bs-target="#plusModal">
                            <p>+</p>
                        </div>
                        <a class="link-custom" href="{{ route('produkt_detail', ['product' => $product->id]) }}">
                            <div class="text-custom sirka">
                                <h5 class="t1-custom">{{ $product->name }}</h5>
                                <div class="t2-hv">
                                    <div>
                                        @include('components.stars', ['rating' => $product->stars])
                                    </div>
                                    <h4 class="t2-custom">{{ number_format($product->price, 0, ',', ' ') }} €</h4>
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
            @foreach($products as $product)
            @if($product->category === 'platne')
            <div class="pas">
                <div class="card produkt mt-3">
                    <div class="product-image">
                        <img class="card-photo" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="favorite-btn text-center">
                        <p>&#x2661;</p>
                    </div>
                    <div class="cart-btn text-center" type="button" data-bs-toggle="modal"
                         data-bs-target="#plusModal">
                        <p>+</p>
                    </div>
                    <a class="link-custom" href="{{ route('produkt_detail', ['product' => $product->id])}}">
                        <div class="text-custom sirka pt-3">
                            <h5 class="t1-custom">{{ $product->name }}</h5>
                            <div class="t2-hv">
                                <div>
                                    @include('components.stars', ['rating' => $product->rating])
                                </div>
                                <h4 class="t2-custom">{{ number_format($product->price, 0, ',', ' ') }} €</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
@endsection
