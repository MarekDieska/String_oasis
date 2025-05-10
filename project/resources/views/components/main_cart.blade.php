@include("../components/variables")
@extends('layouts.index')

@php
    $subtotal = 0;
    $totalItems = 0;
    $finalValue = 0;
    $discount = 10;
@endphp

@section('content')
    <section class="row justify-content-center align-items-center mt-4">
        <div class="d-none d-md-flex col-2 justify-content-center">
            <a class="btn btn-secondary but-back" href="{{route('filters_page')}}">
                <i class="fa fa-arrow-left m-0"></i> na nákup
            </a>
        </div>

        <h1 class="d-flex d-sm-none text-light ps-5">Nákupný košík</h1>

        <div class="col-12 col-md-8 d-none d-sm-flex flex-row justify-content-center align-items-center mt-4 mt-md-0">
            @foreach (['Košík', 'Delivery', 'Údaje', 'Kontrola', 'hotovo'] as $index => $step)
                <div class="d-flex align-items-center flex-column circle-box-custom">
                    <div class="btn btn-secondary circle-custom rounded-pill {{ $index > 0 ? 'disabled' : '' }}">
                        {{ $index == 4 ? '' : $index + 1 }}
                        @if($index == 4)
                            <i class="fa-regular fa-circle-check"></i>
                        @endif
                    </div>
                    <h6 class="text-light txt-custom">{{ $step }}</h6>
                </div>
                @if ($index < 4)
                    <p class="btn btn-secondary arrow-custom fs-5">
                        <i class="fa fa-arrow-right m-0"></i>
                    </p>
                @endif
            @endforeach
        </div>

        <div class="col-2"></div>
    </section>

    <section class="row">
        <div class="col-12 col-md-7 cart-slider overflow-auto mt-0 mt-md-3">
            @if($isEmpty)
                <div class="alert alert-danger m-3 me-md-0 text-center">
                    Váš košík je prázdny.
                </div>
            @else
                @foreach ($cart_products as $prod)
                    @php
                        $subtotal += $prod->price * $prod->quantity;
                        $totalItems += $prod->quantity;
                        $finalValue += $prod->price * $prod->quantity * (1 - 0.01*$discount);
                    @endphp
                    <div id="productRow{{ $prod->id }}" class="cart-product m-3 me-md-1 align-items-center row">

                        <div class="col-12 col-sm-2 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('storage/images/' . $prod->image) }}" alt="obrazok produktu {{$prod->name}}" style="max-height: 100px; max-width: 75%; height: auto; width: auto;">
                        </div>

                        <div class="col-12 col-sm-10 align-items-center">
                            <div class="row">
                                <a href="#" class="col-12 col-sm-5 col-lg-7 link-custom text-black">
                                    <p class="mb-0 fs-5">{{ $prod->name }}</p>
                                </a>

                                <div class="col-12 col-sm-7 col-lg-5 d-flex align-items-center justify-content-between">
                                    <form method="POST" action="{{ route('cart.update', $prod->id) }}" class="me-2">
                                        @method('PUT')
                                        @csrf
                                        <input
                                            type="number"
                                            class="form-control text-center p-2 input-plus-minus rounded-0"
                                            value="{{ $prod->quantity ?? 1 }}"
                                            min="1"
                                            style="width: 70px;"
                                            name="quantity"
                                            onchange="this.form.submit()">
                                    </form>

                                    <p class="mb-0 mx-2 cart-prod-cost txt-custom2 fs-4 pt-0 pb-1" style="white-space: nowrap;">
                                        {{ $prod->price }}€
                                    </p>

                                    <form action="{{ route('cart.remove', $prod->id) }}" method="POST" id="removeProductForm{{ $prod->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn p-0 border-0 bg-transparent">
                                            <i class="fa fa-xmark text-danger fs-4"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="col-12 col-md-5 d-flex justify-content-center align-items-end">
            <div class="total-custom rounded-1 p-3 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="subtotal">Zhrnutie:</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-5">Medzisúčet</p>
                        <p class="fs-5">{{ number_format($subtotal, 2) }}€</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-5">Zľavy</p>
                        <p class="fs-5">{{$discount}}%</p>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 pt-0">
                        <p class="fs-5">Počet položiek</p>
                        <p class="fs-5">{{ $totalItems }} ks</p>
                    </div>
                    <hr class="line2-custom">
                    <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 mt-1 pt-0">
                        <p class="fs-4">Súčet</p>
                        <p class="fs-4">{{ number_format($finalValue, 2) }}€</p>
                    </div>
                    <a href="{{ route('cart_page2', ['s' => $subtotal, 'd' => $discount, 'i' => $totalItems, 'm' => $finalValue])}}"
                       class="btn mt-0 btn-dark mb-4
                       @if ($totalItems < 1)
                             disabled
                         @endif
                         ">Pokračovať na výber dopravy</a>
                </div>
            </div>
        </div>
    </section>
@endsection
