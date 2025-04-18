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

        <div>
            <h4>Typ strunového nástroja</h4>
            <div class="p-3">
                @foreach($typy as $i => $typ)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="{{ $isOffcanvas ? 'typ' . $i . '_offcanvas' : 'typ' . $i }}">
                        <label for="{{ $isOffcanvas ? 'typ' . $i . '_offcanvas' : 'typ' . $i }}">{{ $typ }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex flex-column mt-5">
            <h4>Hodnotenie: </h4>
            <div class="d-flex justify-content-center flex-column m-4 mt-3">
                <div class="btn-group-vertical" role="group">
                    @for($i = 1; $i <= 5; $i++)
                        <input type="radio" class="btn-check" name="vbtn-radio2" id="{{ $isOffcanvas ? 'vbtn-' . $i . '_offcanvas' : 'vbtn-' . $i }}2" autocomplete="off">
                        <label class="btn btn-outline-danger hv-custom" for="{{ $isOffcanvas ? 'vbtn-' . $i . '_offcanvas' : 'vbtn-' . $i }}2">
                            @include("components.stars", ['rating' => $i])
                        </label>
                    @endfor

                    <input type="radio" class="btn-check" name="vbtn-radio2" id="{{ $isOffcanvas ? 'vbtn-62_offcanvas' : 'vbtn-62' }}" autocomplete="off" checked>
                    <label class="btn btn-outline-danger hv-custom" for="{{ $isOffcanvas ? 'vbtn-62_offcanvas' : 'vbtn-62' }}">všetky ohodnotenia</label>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mt-5">
            <h4>Veľkosť gitary</h4>
            <div class="p-3">
                @foreach($velkosti as $i => $velkost)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="size_offcanvas" id="{{ $isOffcanvas ? 'check' . $i . '_offcanvas' : 'check' . $i }}">
                        <label class="form-check-label" for="{{ $isOffcanvas ? 'check' . $i . '_offcanvas' : 'check' . $i }}">
                            {{ $velkost }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex flex-column mt-5">
            <h4>Značka</h4>
            <div class="p-3">
                @foreach($znacky as $i => $znacka)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="{{ $isOffcanvas ? 'zn' . $i . '_offcanvas' : 'zn' . $i }}">
                        <label class="form-check-label" for="{{ $isOffcanvas ? 'zn' . $i . '_offcanvas' : 'zn' . $i }}">
                            {{ $znacka }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('{{ $isOffcanvas ? "priceRangeOffcanvas" : "priceRange" }}').addEventListener('input', function (e) {
        document.getElementById('priceValue').textContent = e.target.value;
    });
</script>
