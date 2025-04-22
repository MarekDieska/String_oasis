<div class="side-filter-custom">
    <div>
        <h2 class="text-center pb-5">FILTROVAŤ</h2>

        <div class="mb-4">
            <div class="d-flex flex-row gap-2 align-items-center mb-2">
                <h5 class="mb-0">Cena do:</h5>
                <span id="priceValue">5000</span>€
            </div>

            <div class="price-slider-container bg-transparent">
                <input type="range" class="form-range bg-transparent thumb-custom mt-0"
                       id="{{ $isOffcanvas ? 'priceRangeOffcanvas' : 'priceRange' }}" min="0" max="5000" step="100" value="5000">
            </div>

            <div class="d-flex justify-content-between mt-0">
                <span>0€</span>
                <span>5000€</span>
            </div>
        </div>

        <form method="GET" action="{{ route('filters_page') }}">
            <input type="hidden" name="subcategory" value="{{ request('subcategory') }}">
            <input type="hidden" name="rating" value="{{ request('rating') }}">
            <input type="hidden" name="brand[]" value="{{ implode(',', (array) request('brand')) }}">

            <div>
                <h4>Typ strunového nástroja</h4>
                <div class="p-3">
                    @foreach($p_categories as $i => $p_category)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox"
                                   name="cat[]" value="{{ $p_category->id }}"
                                   onchange="this.form.submit()"
                                   id="{{ $isOffcanvas ? 'typ' . $i . '_offcanvas' : 'typ' . $i }}"
                                {{ in_array($p_category->id, (array) request('cat')) ? 'checked' : '' }}>
                            <label for="{{ $isOffcanvas ? 'typ' . $i . '_offcanvas' : 'typ' . $i }}">
                                {{ $p_category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>

        <form method="GET" action="{{ route('filters_page') }}">
            <input type="hidden" name="subcategory" value="{{ request('subcategory') }}">
            <input type="hidden" name="brand[]" value="{{ implode(',', (array) request('brand')) }}">
            <input type="hidden" name="cat[]" value="{{ implode(',', (array) request('cat')) }}">

            <div class="d-flex flex-column mt-5">
                <h4>Hodnotenie: </h4>
                <div class="d-flex justify-content-center flex-column m-4 mt-3">
                    <div class="btn-group-vertical" role="group">
                        @foreach($p_ratings as $rating)
                            <input type="radio" class="btn-check" name="rating" value="{{ $rating }}"
                                   id="{{ $isOffcanvas ? 'vbtn-' . $rating . '_offcanvas' : 'vbtn-' . $rating }}"
                                   onchange="this.form.submit()"
                                {{ request('rating') == $rating ? 'checked' : '' }}
                            >
                            <label class="btn btn-outline-danger hv-custom" for="{{ $isOffcanvas ? 'vbtn-' . $rating . '_offcanvas' : 'vbtn-' . $rating }}">
                                @include("components.stars", ['rating' => $rating])
                            </label>
                        @endforeach

                        <input type="radio" class="btn-check" name="rating" value=""
                               id="{{ $isOffcanvas ? 'vbtn-62_offcanvas' : 'vbtn-62' }}"
                               onchange="this.form.submit()"
                            {{ request('rating') == null ? 'checked' : '' }}>
                        <label class="btn btn-outline-danger hv-custom" for="{{ $isOffcanvas ? 'vbtn-62_offcanvas' : 'vbtn-62' }}">všetky ohodnotenia</label>
                    </div>
                </div>
            </div>
        </form>

        <form method="GET" action="{{ route('filters_page') }}">
            <input type="hidden" name="subcategory" value="{{ request('subcategory') }}">
            <input type="hidden" name="rating" value="{{ request('rating') }}">
            <input type="hidden" name="cat[]" value="{{ implode(',', (array) request('cat')) }}">


            <div class="d-flex flex-column mt-5">
                <h4>Značka</h4>
                <div class="p-3">
                    @foreach($p_brands as $i => $brand)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="brand[]" value="{{ $brand }}"
                                   id="{{ $isOffcanvas ? 'zn' . $i . '_offcanvas' : 'zn' . $i }}"
                                   {{ in_array($brand, (array) request('brand')) ? 'checked' : '' }}
                                   onchange="this.form.submit()"
                                   >
                            <label class="form-check-label" for="{{ $isOffcanvas ? 'zn' . $i . '_offcanvas' : 'zn' . $i }}">
                                {{ $brand }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div>

