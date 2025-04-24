@include('components.plusModal')

<div class="container-fluid m-2 m-lg-4">
    <div class="row row-cols-1 row-cols-lg-2 flex-row justify-content-between align-items-center">
        <div class="col">
            <h1 class="title-filter">{{ ucwords(strtolower($title)) }}</h1>
        </div>
        <div class="col d-flex flex-column flex-sm-row
             justify-content-start justify-content-lg-end align-items-center">
            <h5 class="pt-2 title-filter">Zoradiť podľa:</h5>

            <form method="GET" action="{{ route('filters_page') }}">
                @if(request('p'))
                    <input type="hidden" name="p" value="{{ request('p') }}">
                @endif
                @if(request('sub'))
                    <input type="hidden" name="sub" value="{{ request('sub') }}">
                @endif
                @if(request('r') !== null)
                    <input type="hidden" name="r" value="{{ request('r') }}">
                @endif
                @if(request('b'))
                    @foreach(request('b') as $brand)
                        <input type="hidden" name="b[]" value="{{ $brand }}">
                    @endforeach
                @endif

                <div class="btn-group sort-custom" role="group">
                    @foreach(['Názvu', 'Ceny', 'Hodnotenia'] as $i => $nazov)
                        <input type="radio" class="btn-check" name="s" id="sort{{ $i }}"
                               value="{{ $i }}"
                               onchange="this.form.submit()"
                            {{ request('s') == $i ? 'checked' : '' }}>
                        <label class="btn btn-outline-secondary" for="sort{{ $i }}">{{ $nazov }}</label>
                    @endforeach
                </div>

                <div class="btn-group sort2-custom" role="group">
                    @foreach([1, 2] as $z)
                        <input type="radio" class="btn-check" name="z" id="sort{{ $z + 10 }}"
                               value="{{ $z }}"
                               onchange="this.form.submit()"
                            {{ request('z') == $z ? 'checked' : '' }}>
                        <label class="btn btn-outline-secondary" for="sort{{ $z + 10 }}">
                            @if($z == 1)
                                <i class="fa fa-arrow-up-wide-short m-2"></i>
                            @else
                                <i class="fa fa-arrow-up-short-wide m-2"></i>
                            @endif
                        </label>
                    @endforeach
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 prod-row">
        @foreach ($products as $product)
            <div class="col d-flex justify-content-center p-3 r-custom">
                <div class="card products-card d-flex flex-column">

                    <div class="product-image">
                        <img class="card-photo"
                             src="{{ asset('images/' . $product->image) }}"
                             alt="{{ $product->name }}">
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

                    <a href="{{ route('produkt_detail', $product) }}">
                        <div class="text-custom">
                            <h5 class="t1-custom">{{ $product->name }}</h5>
                            <div class="t2-hv">
                                <div>
                                    @include('components.stars', ['rating' => $product->stars])
                                </div>
                                <h4 class="t2-custom">{{ number_format($product->price, 0, ',', ' ') }} €</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="d-flex justify-content-center dark-custom">
            {{ $p_products->links() }}
        </div>
    </div>
</div>
