@include('components.plusModal')
@extends('layouts.index')

@section('content')
    <nav class="mt-0 w-25 mb-0" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb text_color">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Domov</a></li>
            <li class="breadcrumb-item"><a href="{{ route('filters_page') }}">Produkty</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <section class="row justify-content-between mt-0">

        <div class="col-12 col-md-6 d-flex flex-column product-detail justify-content-center">
            <div class="card mx-auto">
                <img src="{{ asset('images/' . $product->image) }}" class="img-fluid img-big"
                     alt="fotka svetlohnedej drevenej akustickej gitary z predu">
            </div>
        </div>

        <div class="col-12 col-md-6 text_color d-flex flex-column">
            <p class="fs-1 pt-1">{{ $product->name }}</p>
            <p class="fs-5">{{ $product->name }} je perfektná pre začínajúcich aj pokročilých hudobníkov, ktorí hľadajú
                spoľahlivý nástroj s výborným zvukom a luxusným vzhľadom.</p>

            <div class="row mb-md-4">
                <div class="col-6 d-flex align-items-center">
                    <div class="ratings hidden">
                        @include('components.stars', ['rating' => $product->stars])
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end p-3 pt-0 pb-0">
                    <h1>
                        <a class="link-offset-1 link-light" href="#">{{ $product->price }} €</a>
                    </h1>
                </div>
            </div>

            <p class="mt-md-0 mb-3 fs-3">Farba: </p>

            <div class="row mb-3 mb-md-0 d-flex justify-content-center align-items-center pb-4">
                @for($i = 0; $i < 3; $i++)
                    <div class="col-4 d-flex justify-content-end">
                        <figure class="card justify-content-center align-items-center">
                            <img src="{{ $farby[$i] }}" class="card-img-top card-img-custom" alt="gitara s inou farbou">
                            <figcaption>{{ $nazvyFarieb[$i] }}</figcaption>
                        </figure>
                    </div>
                @endfor
            </div>

            <div class="row d-flex justify-content-center m-3 align-items-center">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#plusModal"
                        data-name="{{ $product->name }}"
                        data-price="{{ $product->price }}"
                        data-image="{{ asset('images/' . $product->image) }}"
                        data-id="{{ $product->id }}">Pridať
                    do košíka
                </button>
            </div>
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

    <section class="row m-2">
        <hr class="text_color mt-5 mb-5">
        <h1 class="text_color detail_large_text mt-md-1">{{ $product->name }}</h1>
        <p class="text_color mt-4 fs-5" style="font-family: 'Times New Roman', sans-serif;">
            {{ $product->name }}
            {{ $product->name }} je kvalitná elektro-akustická gitara, ktorá kombinuje klasický dizajn s moderným
            spracovaním. Jej telo je vyrobené z výberového mahagónu, ktorý zabezpečuje hlboký, bohatý tón s teplými
            basmi a jasnými výškami. Vrchná doska zo smreku pridáva rezonanciu a dynamiku, vďaka čomu je ideálna pre
            hráčov všetkých úrovní.
            <br><br>
            Výnimočný sunburst lak dodáva gitare elegantný a nadčasový vzhľad, zatiaľ čo ergonomický výrez umožňuje
            jednoduchý prístup k vyšším pražcom. Integrovaný predzosilňovač s ekvalizérom a zabudovanou ladičkou
            zaručuje, že váš zvuk bude vždy presný a vyvážený, či už hráte doma, v štúdiu alebo na pódiu.
        </p>

        @foreach($product->photos as $photo)
            <div class="d-flex justify-content-center col-md-3">
                <div class="p-3">
                    <div class="card">
                        <img src="{{asset('images/' . $photo->url)}}" class="card-img-top" alt="detailnejší záber gitary">
                    </div>
                </div>
            </div>
        @endforeach

        <hr class="text_color mt-5">

        <p class="text_color text-center mt-1 fs-3" style="font-family: 'Times New Roman', sans-serif;">
            <i>Telo:</i> <br>Mahagón so smrekovou vrchnou doskou <br><br>
            <i>Krk:</i> <br>Mahagón s palisandrovým hmatníkom <br><br>
            <i>Farba:</i> <br>Sunburst <br><br>
            <i>Počet pražcov:</i> <br>20 <br><br>
            <i>Elektronika:</i> <br>Predzosilňovač s 3-pásmovým EQ a ladičkou <br><br>
            <i>Kobylka:</i> <br>Palisander pre optimálny prenos vibrácií
        </p>

        <hr class="text_color mt-5">
        <h1 class="mt-md-3 text_color align-items-left">Recenzie</h1>
    </section>

    <section class="overflow-auto reviews p-2">
        <div class="row flex-row flex-nowrap">
            @foreach($hodnotenia as $recenzia)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card text-bg-{{ $recenzia['uspech'] }}">
                        <div class="card-header">
                            <div class="ratings hidden">
                                @include('components.stars', ['rating' => $recenzia['hviezdy']])
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-title fs-4" style="height: 20px;">{{ $recenzia['nadpis'] }}</p>
                            <hr>
                            <p class="overflow-y-scroll fs-5 card-text" style="height: 180px">
                                {{ $recenzia['text'] }}
                            </p>
                            <div class="card-footer bg-transparent">
                                <p class="mb-0 fs-5">{{ $recenzia['autor'] }}</p>
                                <p class="fs-5 opacity-50 mb-0">{{ $recenzia['cas'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
