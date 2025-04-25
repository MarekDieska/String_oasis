<div class="side-filter-custom">
    <div>
            <h2 class="text-center">FILTROVAŤ</h2>

        <form method="GET" action="{{ route('filters_page') }}" class="d-flex justify-content-center pb-5">
            <input type="submit" class="btn-check" name="sub" value="0" id="rmv">
            <label class="btn btn-outline-danger" for="rmv">všetko</label>
        </form>

        <form method="GET" action="{{ route('filters_page') }}">
            <div class="mb-4">
                <div class="d-flex flex-row gap-2 align-items-center mb-2">
                    <h5 class="mb-0">Cena</h5>
                </div>

                <div class="d-flex gap-3">
                    <div class="flex-fill">
                        <label for="priceMin" class="form-label">Od (€)</label>
                        <input type="number" class="form-control"
                               id="priceMin"
                               name="min"
                               min="0" max="5000" step="1"
                               value="{{ max(0, min(request('min', 0), 5000)) }}"
                               onchange="checkPriceRange(this)">
                    </div>

                    <div class="flex-fill">
                        <label for="priceMax" class="form-label">Do (€)</label>
                        <input type="number" class="form-control"
                               id="priceMax"
                               name="max"
                               min="0" max="5000" step="1"
                               value="{{ max(0, min(request('max', 5000), 5000)) }}"
                               onchange="checkPriceRange(this)">
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-outline-danger">Filtrovať</button>
                </div>
            </div>



            <div>
                <h4>Typ strunového nástroja</h4>
                <div class="p-3">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio"
                               name="sub" value="0"
                               onchange="this.form.submit()"
                               id="{{ $isOffcanvas ? 'typ' . '0' . '_offcanvas' : 'typ' . '0' }}"
                            {{ request('sub') == 0 ? 'checked' : '' }}>
                        <label for="{{ $isOffcanvas ? 'typ' . '0' . '_offcanvas' : 'typ' . '0' }}">
                            všetky produkty
                        </label>
                    </div>

                    @foreach($categories as $category)
                        @foreach($category->subcategories as $i => $subcategory)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio"
                                       name="sub" value="{{ $subcategory->id }}"
                                       onchange="this.form.submit()"
                                       id="{{ $isOffcanvas ? 'typ' . $i . '_offcanvas' : 'typ' . $i }}"
                                    {{ request('sub') == $subcategory->id ? 'checked' : '' }}>
                                <label for="{{ $isOffcanvas ? 'typ' . $i . '_offcanvas' : 'typ' . $i }}">
                                    {{ $subcategory->name }}
                                    @if($category->name !== 'Iné struny')
                                        {{ strtolower($category->name) }}
                                    @endif
                                </label>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="d-flex flex-column mt-5">
                <h4>Hodnotenie: </h4>
                <div class="d-flex justify-content-center flex-column m-4 mt-3">
                    <div class="btn-group-vertical" role="group">
                        @foreach($p_ratings as $rating)
                            <input type="radio" class="btn-check" name="r" value="{{ $rating }}"
                                   id="{{ $isOffcanvas ? 'vbtn-' . $rating . '_offcanvas' : 'vbtn-' . $rating }}"
                                   onchange="this.form.submit()"
                                {{ request('r') == $rating ? 'checked' : '' }}
                            >
                            <label class="btn btn-outline-danger hv-custom" for="{{ $isOffcanvas ? 'vbtn-' . $rating . '_offcanvas' : 'vbtn-' . $rating }}">
                                @include("components.stars", ['r' => $rating])
                            </label>
                        @endforeach

                        <input type="radio" class="btn-check" name="r" value=""
                               id="{{ $isOffcanvas ? 'vbtn-62_offcanvas' : 'vbtn-62' }}"
                               onchange="this.form.submit()"
                            {{ request('r') == null ? 'checked' : '' }}>
                        <label class="btn btn-outline-danger hv-custom" for="{{ $isOffcanvas ? 'vbtn-62_offcanvas' : 'vbtn-62' }}">všetky ohodnotenia</label>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column mt-5">
                <h4>Značka</h4>
                <div class="p-3">
                    @foreach($p_brands as $i => $brand)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="b[]" value="{{ $brand }}"
                                   id="{{ $isOffcanvas ? 'zn' . $i . '_offcanvas' : 'zn' . $i }}"
                                   {{ in_array($brand, (array) request('b')) ? 'checked' : '' }}
                                   onchange="this.form.submit()"
                            >
                            <label class="form-check-label" for="{{ $isOffcanvas ? 'zn' . $i . '_offcanvas' : 'zn' . $i }}">
                                {{ $brand }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            @if(request('s') !== null)
                <input type="hidden" name="s" value="{{ request('s') }}">
            @endif
            @if(request('z') !== null)
                <input type="hidden" name="z" value="{{ request('z') }}">
            @endif
            @if(request('q') !== null)
                <input type="hidden" name="q" value="{{ request('q') }}">
            @endif
        </form>
    </div>
</div>

<script>
    function updatePriceValue(slider) {
        document.getElementById('priceValue').textContent = slider.value;
    }
</script>

<script>
    function checkPriceRange(input) {
        let minInput = document.getElementById('priceMin');
        let maxInput = document.getElementById('priceMax');

        let minVal = parseInt(minInput.value);
        let maxVal = parseInt(maxInput.value);

        if (isNaN(minVal) || minVal < 0) {
            minVal = 0;
            minInput.value = 0;
        }

        if (isNaN(maxVal) || maxVal > 5000) {
            maxVal = 5000;
            maxInput.value = 5000;
        }

        // Ak min > max → obe sa nastavia na 0
        if (minVal > maxVal) {
            minInput.value = 0;
            maxInput.value = 0;
        }
    }
</script>

