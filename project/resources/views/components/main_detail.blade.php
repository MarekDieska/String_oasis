@include('components.variables')
@include('components.plusModal')

<section class="row justify-content-between align-items-center p-4">

    <div class="col-12 col-md-6 d-flex flex-column product-detail">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb text_color">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Domov</a></li>
                <li class="breadcrumb-item"><a href="{{ route('filters_page') }}">Produkty</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>

        <div class="card border-custom border-5 mx-auto">
            <img src="{{ asset('images/product_guitar.jpg') }}" class="img-fluid img-big" alt="fotka svetlohnedej drevenej akustickej gitary z predu">
        </div>
    </div>

    <div class="col-12 col-md-6 text_color d-flex flex-column">
        <p class="fs-1 pt-1 mt-4">HarmonyTone Sunset D-50</p>
        <h5>HarmonyTone Sunset D-50 je perfektná pre začínajúcich aj pokročilých hudobníkov, ktorí hľadajú spoľahlivý nástroj s výborným zvukom a luxusným vzhľadom.</h5>

        <div class="row mb-md-4">
            <div class="col-6 d-flex align-items-center">
                <div class="ratings hidden">
                    @include('components.stars', ['rating' => 4])
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end p-3 pt-0 pb-0">
                <h1>
                    <a class="link-offset-1 link-light" href="#">250,23 €</a>
                </h1>
            </div>
        </div>

        <h3 class="mt-md-0 mb-3">Farba: </h3>

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
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#plusModal">Pridať do košíka</button>
        </div>
    </div>
</section>

<section class="row m-2">
    <hr class="text_color mt-5 mb-5">
    <h1 class="text_color detail_large_text mt-md-1">HarmonyTone Sunset D-50</h1>
    <h5 class="text_color mt-4" style="font-family: 'Times New Roman', sans-serif;">
        HarmonyTone Sunset D-50
        HarmonyTone Sunset D-50 je kvalitná elektro-akustická gitara, ktorá kombinuje klasický dizajn s moderným spracovaním. Jej telo je vyrobené z výberového mahagónu, ktorý zabezpečuje hlboký, bohatý tón s teplými basmi a jasnými výškami. Vrchná doska zo smreku pridáva rezonanciu a dynamiku, vďaka čomu je ideálna pre hráčov všetkých úrovní.
        <br><br>
        Výnimočný sunburst lak dodáva gitare elegantný a nadčasový vzhľad, zatiaľ čo ergonomický výrez umožňuje jednoduchý prístup k vyšším pražcom. Integrovaný predzosilňovač s ekvalizérom a zabudovanou ladičkou zaručuje, že váš zvuk bude vždy presný a vyvážený, či už hráte doma, v štúdiu alebo na pódiu.
    </h5>

    @for($i = 0; $i < 4; $i++)
        <div class="d-flex justify-content-center col-md-3">
            <div class="p-3">
                <div class="card">
                    <img src="{{ $detaily[$i] }}" class="card-img-top" alt="detailnejší záber gitary">
                </div>
            </div>
        </div>
    @endfor

    <hr class="text_color mt-5">

    <h3 class="text_color text-center mt-1" style="font-family: 'Times New Roman', sans-serif;">
        <i>Telo:</i> <br>Mahagón so smrekovou vrchnou doskou <br><br>
        <i>Krk:</i> <br>Mahagón s palisandrovým hmatníkom <br><br>
        <i>Farba:</i> <br>Sunburst <br><br>
        <i>Počet pražcov:</i> <br>20 <br><br>
        <i>Elektronika:</i> <br>Predzosilňovač s 3-pásmovým EQ a ladičkou <br><br>
        <i>Kobylka:</i> <br>Palisander pre optimálny prenos vibrácií
    </h3>

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
                        <h4 class="card-title" style="height: 20px;">{{ $recenzia['nadpis'] }}</h4>
                        <hr>
                        <p class="overflow-y-scroll fs-5 card-text" style="height: 180px">
                            {{ $recenzia['text'] }}
                        </p>
                        <div class="card-footer bg-transparent">
                            <h5 class="mb-0">{{ $recenzia['autor'] }}</h5>
                            <p class="fs-5 opacity-50 mb-0">{{ $recenzia['cas'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
