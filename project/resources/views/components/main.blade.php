@extends('layouts.index')
@include('components.plusModal')

@section('content')
    <article class="row justify-content-center align-items-center position-relative w-100 text-center grad">
        <img class="background-image hidden text-center opacity-25 position-absolute"
             src="{{ asset('images/home_background.svg') }}" alt="photo" width="70%">
        <h1 class="position-relative text_color">
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
                            <img class="card-photo" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->image }}">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661;</p>
                        </div>
                        <div class="cart-btn text-center"
                             type="button"
                             data-bs-toggle="modal"
                             data-bs-target="#plusModal"
                             data-name="{{ $product->name }}"
                             data-price="{{ $product->price }}"
                             data-image="{{ asset('images/' . $product->image) }}"
                             data-id="{{ $product->id }}">
                            <p>+</p>
                        </div>
                        <a class="link-custom" href="{{ route('produkt_detail', ['product' => $product->id]) }}">
                            <div class="text-custom sirka">
                                <p class="t1-custom fs-5">{{ $product->name }}</p>
                                <div class="t2-hv">
                                    <div>
                                        @include('components.stars', ['rating' => $product->stars])
                                    </div>
                                    <p class="t2-custom fs-4">{{ number_format($product->price, 0, ',', ' ') }} €</p>
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
            @foreach($platne as $product)
            <div class="pas">
                <div class="card produkt mt-3">
                    <div class="product-image">
                        <img class="card-photo" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->image }}">
                    </div>
                    <div class="favorite-btn text-center">
                        <p>&#x2661;</p>
                    </div>
                    <div class="cart-btn text-center"
                         type="button"
                         data-bs-toggle="modal"
                         data-bs-target="#plusModal"
                         data-name="{{ $product->name }}"
                         data-price="{{ $product->price }}"
                         data-image="{{ asset('images/' . $product->image) }}"
                         data-id="{{ $product->id }}">
                        <p>+</p>
                    </div>
                    <a class="link-custom" href="{{ route('produkt_detail', ['product' => $product->id])}}">
                        <div class="text-custom sirka pt-3">
                            <p class="t1-custom fs-5">{{ $product->name }}</p>
                            <div class="t2-hv">
                                <div>
                                    @include('components.stars', ['rating' => $product->stars])
                                </div>
                                <p class="t2-custom fs-4">{{ number_format($product->price, 0, ',', ' ') }} €</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div id="cartToast"
             class="toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0"
             role="alert"
             aria-live="assertive"
             aria-atomic="true"
             data-bs-delay="3000"
             data-bs-autohide="true">
            <div class="d-flex">
                <div class="toast-body">
                    Pridané do košíka!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Zavrieť"></button>
            </div>
        </div>
    </section>
@endsection
