@include('components.plusModal')

<div class="container-fluid m-2 m-lg-4">
    <div class="row row-cols-1 row-cols-lg-2 flex-row justify-content-between align-items-center">
        <div class="col">
            <h1 class="title-filter">Elektrické gitary</h1>
        </div>
        <div class="col d-flex flex-column flex-sm-row
             justify-content-start justify-content-lg-end align-items-center">
            <h5 class="pt-2">Zoradiť podľa:</h5>
            <div class="btn-group sort-custom" role="group">
                <input type="radio" class="btn-check" name="sortovanie" id="sort1" checked>
                <label class="btn btn-outline-secondary" for="sort1">Názvu</label>

                <input type="radio" class="btn-check" name="sortovanie" id="sort2">
                <label class="btn btn-outline-secondary" for="sort2">Ceny</label>

                <input type="radio" class="btn-check" name="sortovanie" id="sort3">
                <label class="btn btn-outline-secondary" for="sort3">Hodnotenia</label>
            </div>

            <div class="btn-group sort2-custom" role="group">
                <input type="radio" class="btn-check" name="zoradenie" id="sort11" checked>
                <label class="btn btn-outline-secondary" for="sort11">
                    <i class="fa fa-arrow-up-wide-short m-2"></i>
                </label>

                <input type="radio" class="btn-check" name="zoradenie" id="sort12">
                <label class="btn btn-outline-secondary" for="sort12">
                    <i class="fa fa-arrow-up-short-wide m-2"></i>
                </label>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 prod-row">
        @foreach ($products as $product)
            <div class="col d-flex justify-content-center p-3 r-custom">
                <div class="card products-card d-flex flex-column">

                    <div class="product-image">
                        <img class="card-photo"
                             src="{{ $product->image }}"
                             alt="{{ $product->name }}">
                    </div>

                    <div class="favorite-btn text-center">
                        <p>&#x2661;</p>
                    </div>

                    <div class="cart-btn text-center" type="button" data-bs-toggle="modal" data-bs-target="#plusModal">
                        <p>+</p>
                    </div>

                    <a href="{{ route('produkt_detail') }}">
                        <div class="text-custom">
                            <h5 class="t1-custom">{{ $product->name}}</h5>

                            <div class="star-rating">
                                @include('components.stars', ['rating' => $product->stars])
                            </div>

                            <h4 class="t2-custom">{{ number_format($product->price, 0, ',', ' ') }} €</h4>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="d-flex justify-content-center">
            <ul class="pagination dark-custom">
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span>&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span>&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
