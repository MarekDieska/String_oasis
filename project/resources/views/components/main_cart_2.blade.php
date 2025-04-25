@include('components.variables')
@extends('layouts.index')

@section('content')
    <form id="cartForm" method="GET" action="{{ route('cart_page3') }}">
        <section class="row justify-content-center align-items-center mt-4">
            <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">
                @foreach (['Košík', 'Delivery', 'Údaje', 'Kontrola', 'hotovo'] as $index => $step)
                    <div class="d-flex align-items-center flex-column circle-box-custom">
                        <button class="btn btn-secondary circle-custom rounded-pill {{ $index > 1 ? 'disabled' : '' }}">
                            {{ $index == 4 ? '' : $index + 1 }}
                            @if($index == 4)
                                <i class="fa-regular fa-circle-check"></i>
                            @endif
                        </button>
                        <h6 class="text-light txt-custom">{{ $step }}</h6>
                    </div>
                    @if ($index < 4)
                        <button class="btn btn-secondary arrow-custom">
                            <i class="fa fa-arrow-right m-0"></i>
                        </button>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="row ms-lg-4">
            <div class="col-12 col-md-4 col-lg-4 p-5 ps-md-5 pe-md-4 p-lg-2 justify-content-center mt-md-4">
                <h4 class="text_color cart_text">Doprava</h4>
                <div class="cart-slider justify-content-center mt-0 overflow-y-scroll overflow-x-hidden mx-custom">
                    <div class="btn-group d-flex flex-column" role="group">
                        @foreach ($dopravy as $doprava)
                            <label class="cart-product-small bg-light d-flex align-items-center w-100 ps-3 pe-2">
                                <input type="radio"
                                       name="doprava"
                                       value="{{ $doprava->id }}"
                                       class="form-check-input me-3"
                                       style="transform: scale(1.5);"
                                       onchange="updatePrices(this, 'doprava', {{ $doprava->price }})"
                                >
                                <i class="fa-solid fa-box-open fa-2x me-3"></i>
                                <div class="d-flex w-100 flex-column cart-prod-txt">
                                    <h4>{{ $doprava->name }}</h4>
                                    <h5>{{ $doprava->description }}</h5>
                                </div>
                                <h4 class="cart-prod-cost ms-auto p-0">
                                    {{ $doprava->price > 0 ? $doprava->price . '€' : 'zadarmo' }}
                                </h4>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Platba --}}
            <div class="col-12 col-md-4 col-lg-4 p-5 ps-md-2 pe-md-5 p-lg-2 justify-content-center mt-md-4">
                <h4 class="text_color">Spôsob platby</h4>
                <div class="cart-slider justify-content-center mt-0 overflow-x-hidden">
                    @foreach ($platby as $platba)
                        <label class="cart-product-small bg-light d-flex align-items-center w-100 ps-3 pe-2">
                            <input type="radio"
                                   name="platba"
                                   value="{{ $platba->id }}"
                                   class="form-check-input me-3"
                                   style="transform: scale(1.5);"
                                   onchange="updatePrices(this, 'platba', {{ $platba->price }})"
                            >
                            <i class="fa-regular fa-credit-card fa-2x me-3"></i>
                            <div class="d-flex w-100 flex-column cart-prod-txt">
                                <h4>{{ $platba->name }}</h4>
                                <h5>{{ $platba->description }}</h5>
                            </div>
                            <h4 class="cart-prod-cost ms-auto p-0">
                                {{ $platba->price > 0 ? $platba->price . '€' : 'zadarmo' }}
                            </h4>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-center align-items-end">
                <div class="total-custom rounded-1 p-3 d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="subtotal">Zhrnutie:</h2>
                        <div class="d-flex justify-content-between align-items-center m-3">
                            <h5>Medzisúčet</h5>
                            <h5>{{ number_format($s, 2) }}€</h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-3">
                            <h5>Zľavy</h5>
                            <h5>{{ $d }}%</h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-3">
                            <h5>Doprava</h5>
                            <h5 id="shippingPrice">€</h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-3">
                            <h5>Platba</h5>
                            <h5 id="paymentPrice">€</h5>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 pt-0">
                            <h5>Počet položiek</h5>
                            <h5>{{ $i }} ks</h5>
                        </div>
                        <hr class="line2-custom">
                        <div class="d-flex justify-content-between align-items-center w-100 m-3 p-3 pb-0 mt-1 pt-0">
                            <h4>Súčet</h4>
                            <h4 id="total">€</h4>
                        </div>
                        <button type="submit" class="btn mt-0 btn-dark mb-4">
                            Pokračovať na výber dopravy
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
