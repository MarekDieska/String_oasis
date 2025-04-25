@include("../components/variables")
@extends('layouts.index')

@section('content')
    <section class="row justify-content-center align-items-center mt-4">
        <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">
            @php
                $steps = ['Košík', 'Doprava', 'Údaje', 'Kontrola', 'hotovo'];
            @endphp

            @foreach ($steps as $index => $step)
                <div class="d-flex align-items-center flex-column circle-box-custom">
                    <button class="btn btn-secondary circle-custom rounded-pill {{ $index > 2 ? 'disabled' : '' }}">
                        {{ $index < 4 ? $index + 1 : ($index === 4 ? '' : '✔') }}
                        @if ($index === 4)
                            <i class="fa-regular fa-circle-check"></i>
                        @endif
                    </button>
                    <h6 class="{{ $index < 4 ? 'text-light txt-custom' : '' }}">{{ $step }}</h6>
                </div>
                @if ($index < 4)
                    <button class="btn btn-secondary arrow-custom"><i class="fa fa-arrow-right m-0"></i></button>
                @endif
            @endforeach
        </div>
    </section>

    <form method="POST" action="{{ route('cart_page4') }}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="hidden" name="doprava" value=" {{ request('doprava') }}">
        <input type="hidden" name="platba" value="{{ request('platba') }}">

        <section class="row">
            <div class="col-12 col-md-7 align-items-start justify-content-center p-3 p-sm-5 pe-md-0">
                <div class="mt-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-3 mt-0 me-md-1">
                                <label for="meno" class="text_color form-label">Meno</label>
                                <input type="text" class="form-control placeholder-black" id="meno" name="meno" placeholder="Meno" value="{{ old('meno') }}" required>
                            </div>

                            <div class="row mb-3 mt-0 me-md-1">
                                <label for="priezvisko" class="text_color form-label">Priezvisko</label>
                                <input type="text" class="form-control placeholder-black" id="priezvisko" name="priezvisko" placeholder="Priezvisko" value="{{ old('priezvisko') }}" required>
                            </div>


                            <div class="row mb-3 mt-0 me-md-1">
                                <label for="email" class="text_color form-label">Email</label>
                                <input type="email" class="form-control placeholder-black" id="email" name="email" placeholder="priklad@gmail.com" value="{{ old('email') }}" required>
                            </div>

                            <div class="row mb-3 mt-0 me-md-1">
                                <label for="telefon" class="text_color form-label">Telefónne číslo</label>
                                <input type="tel" class="form-control placeholder-black" id="telefon" name="telefon" placeholder="+421..." value="{{ old('telefon') }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row mb-3 mt-0 ms-md-1">
                                <label for="ulica" class="text_color form-label">Ulica + Číslo domu</label>
                                <input type="text" class="form-control placeholder-black" id="ulica" name="ulica" placeholder="Ulica 123/45" value="{{ old('ulica') }}" required>
                            </div>

                            <div class="row mb-3 mt-0 ms-md-1">
                                <div class="col-9 p-0">
                                    <label for="mesto" class="text_color form-label ps-3">Mesto</label>
                                    <input type="text" class="form-control placeholder-black" id="mesto" name="mesto" placeholder="Mesto" value="{{ old('mesto') }}" required>
                                </div>
                                <div class="col-3 p-0">
                                    <label for="psc" class="text_color form-label ps-3">PSČ</label>
                                    <input type="text" class="form-control placeholder-black" id="psc" name="psc" placeholder="00000" value="{{ old('psc') }}" required>
                                </div>
                            </div>

                            <div class="row mb-3 mt-0 ms-md-1">
                                <label for="krajina" class="text_color form-label">Krajina</label>
                                <select class="form-select" id="krajina" name="krajina" required>
                                    <option value="">Vyberte krajinu</option>
                                    <option value="SK" {{ old('krajina') == 'SK' ? 'selected' : '' }}>Slovensko</option>
                                    <option value="CZ" {{ old('krajina') == 'CZ' ? 'selected' : '' }}>Česko</option>
                                    <option value="PL" {{ old('krajina') == 'PL' ? 'selected' : '' }}>Poľsko</option>
                                    <option value="HU" {{ old('krajina') == 'HU' ? 'selected' : '' }}>Maďarsko</option>
                                    <option value="AT" {{ old('krajina') == 'AT' ? 'selected' : '' }}>Rakúsko</option>
                                </select>
                            </div>

                            <div class="row mb-3 mt-0 ms-md-1">
                                <label for="poznamka" class="text_color form-label">Poznámka k objednávke</label>
                                <textarea class="form-control placeholder-black" id="poznamka" name="poznamka" rows="3" placeholder="Vaše poznámky pre nás">{{ old('poznamka') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="m-3 me-0 form-check">
                        <input type="checkbox" class="text_color form-check-input" id="suhlas" name="suhlas" {{ old('suhlas') ? 'checked' : '' }} required>
                        <label class="text_color form-check-label" for="suhlas">Súhlasím so spracovaním osobných údajov</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 d-flex justify-content-center align-items-end">
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
                        <button type="submit" class="btn btn-dark">
                            Skontrolovať údaje
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
