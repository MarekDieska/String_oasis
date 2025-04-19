@include('components.variables')
@extends('layouts.app')

@section('content')
    <section class="row justify-content-center align-items-center mt-4">
        <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">
            @foreach (['Košík', 'Doprava', 'Údaje', 'Kontrola', 'hotovo'] as $index => $step)
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
        {{-- Doprava --}}
        <div class="col-12 col-md-6 col-lg-4 p-5 ps-md-5 pe-md-4 mb-5 p-lg-2 justify-content-center">
            <h4 class="text_color cart_text">Doprava</h4>
            <div class="cart-slider justify-content-center mt-0 overflow-y-scroll overflow-x-hidden mx-custom">
                <div class="btn-group d-flex flex-column" role="group">
                    @for ($i = 0; $i < count($dopravy); $i++)
                        <div class="cart-product-small bg-light">
                            <div class="d-flex flex-row ms-3 w-100 align-items-center">
                                <i class="fa-solid fa-box-open fa-2x"></i>
                                <div class="d-flex w-100 flex-column cart-prod-txt">
                                    <h4 class="ms-3">{{ $dopravy[$i] }}</h4>
                                    <h5 class="ms-3">{{ $dopravy2[$i] }}</h5>
                                </div>
                                <h4 class="cart-prod-cost d-flex w-100 me-0 justify-content-end">{{ $dopravyCeny[$i] }}</h4>
                                <i class="fa fa-xmark me-2 d-flex justify-content-center"></i>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        {{-- Platba --}}
        <div class="col-12 col-md-6 col-lg-4 p-5 ps-md-2 pe-md-5 p-lg-2 justify-content-center">
            <h4 class="text_color cart_text">Spôsob platby</h4>
            <div class="cart-slider justify-content-center mt-0 overflow-y-scroll overflow-x-hidden mx-custom">
                @for ($i = 0; $i < count($platby); $i++)
                    <div class="cart-product-small bg-light">
                        <div class="d-flex flex-row ms-3 w-100 align-items-center">
                            <i class="fa-regular fa-credit-card fa-2x"></i>
                            <div class="d-flex w-100 flex-column cart-prod-txt">
                                <h4 class="ms-3">{{ $platby[$i] }}</h4>
                                <h5 class="ms-3">{{ $platby2[$i] }}</h5>
                            </div>
                            <h4 class="cart-prod-cost d-flex w-100 justify-content-end">{{ $platbyCeny[$i] }}</h4>
                            <i class="fa fa-xmark me-2 d-flex justify-content-center"></i>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Súčet --}}
        <div class="col-12 col-lg-4 d-flex justify-content-center align-items-end">
            <div class="total-custom rounded-1 p-3 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="subtotal">Zhrnutie:</h2>
                    <div class="d-flex justify-content-between align-items-center m-3">
                        <h5>Medzisúčet</h5>
                        <h5>1200€</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center m-3">
                        <h5>Zľavy</h5>
                        <h5>-200€</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center m-3">
                        <h5>Kupóny</h5>
                        <h5>-40€</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center m-3">
                        <h5>Doprava</h5>
                        <h5>20€</h5>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 pt-0">
                        <h5>Počet položiek</h5>
                        <h5>5ks</h5>
                    </div>
                    <hr class="line2-custom">
                    <div class="d-flex justify-content-between align-items-center w-100 m-3 p-3 pb-0 mt-1 pt-0">
                        <h4>Súčet</h4>
                        <h4>980€</h4>
                    </div>
                    <a href="{{ route('cart_page3') }}" class="btn mt-0 btn-dark mb-4">Pokračovať na vyplnenie údajov</a>
                </div>
            </div>
        </div>
    </section>
@endsection
