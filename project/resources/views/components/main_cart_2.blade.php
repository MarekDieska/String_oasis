@extends('layouts.index')

@section('content')
    <form id="cartForm" method="GET" action="{{ route('cart_page3') }}">
        <input type="hidden" name="d" value="{{ request('d') }}">
        <input type="hidden" name="i" value="{{ request('i') }}">
        <input type="hidden" name="m" value="{{ request('m') }}">
        <input type="hidden" name="s" value="{{ request('s')}}">

        <section class="row justify-content-center align-items-center mt-4">
            <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center mt-4 mt-md-0">
                @foreach (['Košík', 'Delivery', 'Údaje', 'Kontrola', 'hotovo'] as $index => $step)
                    <div class="d-flex align-items-center flex-column circle-box-custom">
                        <div class="btn btn-secondary circle-custom rounded-pill {{ $index > 1 ? 'disabled' : '' }}">
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
        </section>

        <section class="row ms-lg-4">
            <div class="col-12 col-sm-6 col-lg-4 p-3 ps-md-5 pe-md-4 p-lg-2 justify-content-center mt-md-4">
                <p class="text_color cart_text fs-4">Doprava</p>
                <div class="cart-slider justify-content-center mt-0 overflow-y-scroll overflow-x-hidden mx-custom">
                    <div class="btn-group d-flex flex-column" role="group">
                        @foreach ($dopravy as $doprava)
                            <label class="cart-product-small bg-light d-flex align-items-center w-100 ps-3 pe-3">
                                <input type="radio"
                                       name="doprava"
                                       value="{{ $doprava->id }}"
                                       class="form-check-input me-3"
                                       style="transform: scale(1.5);"
                                       onchange="updatePrices(this, 'doprava', {{ $doprava->price }})"
                                       required
                                >
                                <i class="fa-solid fa-box-open fa-2x me-3"></i>
                                <div class="d-flex w-100 flex-column cart-prod-txt">
                                    <p class="fs-4 mb-0">{{ $doprava->name }}</p>
                                    <p class="fs-5 mb-0">{{ $doprava->description }}</p>
                                </div>
                                <p class="cart-prod-cost ms-auto p-0 fs-4 mb-0">
                                    {{ $doprava->price > 0 ? $doprava->price . '€' : 'zadarmo' }}
                                </p>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Platba --}}
            <div class="col-12 col-sm-6 col-lg-4 p-3 ps-md-2 pe-md-5 p-lg-2 justify-content-center mt-md-4">
                <p class="text_color fs-4">Spôsob platby</p>
                <div class="cart-slider justify-content-center mt-0 overflow-x-hidden">
                    @foreach ($platby as $platba)
                        <label class="cart-product-small bg-light d-flex align-items-center w-100 ps-3 pe-3">
                            <input type="radio"
                                   name="platba"
                                   value="{{ $platba->id }}"
                                   class="form-check-input me-3"
                                   style="transform: scale(1.5);"
                                   onchange="updatePrices(this, 'platba', {{ $platba->price }})"
                                   required
                            >
                            <i class="fa-regular fa-credit-card fa-2x me-3"></i>
                            <div class="d-flex w-100 flex-column cart-prod-txt">
                                <p class="fs-4 mb-0">{{ $platba->name }}</p>
                                <p class="fs-5 mb-0">{{ $platba->description }}</p>
                            </div>
                            <p class="cart-prod-cost ms-auto p-0 fs-4 mb-0">
                                {{ $platba->price > 0 ? $platba->price . '€' : 'zadarmo' }}
                            </p>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-end">
                <div class="total-custom rounded-1 p-3 d-flex flex-column justify-content-between">
                    <div>
                        <p class="subtotal fs-2">Zhrnutie:</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-5">Medzisúčet</p>
                            <p class="fs-5">{{ number_format($s, 2) }}€</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-5">Zľavy</p>
                            <p class="fs-5">{{ $d }}%</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-5">Doprava</p>
                            <p class="fs-5" id="shippingPrice">€</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-5">Platba</p>
                            <p class="fs-5" id="paymentPrice">€</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 pt-0">
                            <p class="fs-5">Počet položiek</p>
                            <p class="fs-5">{{ $i }} ks</p>
                        </div>
                        <hr class="line2-custom">
                        <div class="d-flex justify-content-between align-items-center w-100 m-3 p-3 pb-0 mt-1 pt-0">
                            <p class="fs-4">Súčet</p>
                            <p class="fs-4" id="total">€</p>
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
