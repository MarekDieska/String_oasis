<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 prod-row">
    @for ($i = 0; $i < count($nazvyProduktov); $i++)
        <div class="col d-flex justify-content-center p-3 r-custom">
            <div class="card products-card d-flex flex-column">

                <div class="product-image">
                    <img class="card-photo"
                         src="{{ $obrazkyProduktov[$i % count($obrazkyProduktov)] }}"
                         alt="{{ $nazvyProduktov[$i % count($nazvyProduktov)] }}">
                </div>

                <div class="favorite-btn text-center">
                    <p>&#x2661;</p>
                </div>

                <a class="cart-btn text-center" type="button" data-bs-toggle="modal" data-bs-target="#plusModal">
                    <p>+</p>
                </a>

                <a href="{{ route('produkt_detail') }}">
                    <div class="text-custom">
                        <h5 class="t1-custom">{{ $nazvyProduktov[$i % count($nazvyProduktov)] }}</h5>

                        <div class="star-rating">
                            @php
                                $rating = $hodnoteniaProduktov[$i % count($hodnoteniaProduktov)];
                            @endphp
                            @for ($j = 1; $j <= 5; $j++)
                                @if ($j <= $rating)
                                    <i class="fa fa-star rating-color"></i>
                                @else
                                    <i class="fa fa-star rating-color2"></i>
                                @endif
                            @endfor
                        </div>

                        <h4 class="t2-custom">{{ $cenyProduktov[$i % count($cenyProduktov)] }}</h4>
                    </div>
                </a>
            </div>
        </div>
    @endfor
</div>
