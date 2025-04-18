<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 prod-row">

    {{-- Loop through the products --}}
    @for ($i = 0; $i < 16; $i++)

        <div class="col d-flex justify-content-center p-3 r-custom">

            <div class="card products-card d-flex flex-column">

                {{-- Product Image --}}
                <div class="product-image">
                    <img class="card-photo"
                         src="{{ $obrazkyProduktov[$i % count($obrazkyProduktov)] }}"
                         alt="{{ $nazvyProduktov[$i % count($nazvyProduktov)] }}">
                </div>

                <div class="favorite-btn text-center">
                    <p>&#x2661;</p>
                </div>

                <div class="cart-btn text-center" type="button" data-bs-toggle="modal" data-bs-target="#plusModal">
                    <p>+</p>
                </div>

                <a href="{{ route('produkt_detail') }}">
                    <div class="text-custom">
                        <h5 class="t1-custom">{{ $nazvyProduktov[$i % count($nazvyProduktov)] }}</h5>
                    </div>
                </a>

            </div>

        </div>

    @endfor

</div>
