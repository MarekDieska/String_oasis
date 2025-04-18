{{-- Include variables --}}
@include('components.variables')

<div class="side-filter-custom">
    <div>
        <h2 class="text-center pb-5">FILTROVAŤ</h2>

        {{-- Price Range --}}
        <div class="mb-4">
            <div class="d-flex flex-row gap-2 align-items-center mb-2">
                <h5 class="mb-0">Cena do:</h5>
                <span id="priceValue">5000</span>€
            </div>

            <div class="price-slider-container bg-transparent">
                <input type="range" class="form-range bg-transparent thumb-custom mt-0"
                       id="priceRange" min="0" max="5000" step="100" value="5000">
            </div>

            <div class="d-flex justify-content-between mt-0">
                <span>0€</span>
                <span>5000€</span>
            </div>
        </div>

        {{-- Instrument Type --}}
        <div>
            <h4>Typ strunového nástroja</h4>
            <div class="p-3">
                @foreach($typy as $i => $typ)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="typ{{ $i }}">
                        <label for="typ{{ $i }}">{{ $typ }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Rating --}}
        <div class="d-flex flex-column mt-5">
            <h4>Hodnotenie: </h4>
            <div class="d-flex justify-content-center flex-column m-4 mt-3">
                <div class="btn-group-vertical" role="group">
                    @for($i = 1; $i <= 5; $i++)
                        <input type="radio" class="btn-check" name="vbtn-radio2" id="vbtn-{{ $i }}2" autocomplete="off">
                        <label class="btn btn-outline-danger hv-custom" for="vbtn-{{ $i }}2">
                            @include("components.stars", ['rating' => $i])
                        </label>
                    @endfor

                    <input type="radio" class="btn-check" name="vbtn-radio2" id="vbtn-62" autocomplete="off" checked>
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-62">všetky ohodnotenia</label>
                </div>
            </div>
        </div>

        {{-- Size --}}
        <div class="d-flex flex-column mt-5">
            <h4>Veľkosť gitary</h4>
            <div class="p-3">
                @foreach($velkosti as $i => $velkost)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="size_offcanvas" id="check{{ $i }}_offcanvas">
                        <label class="form-check-label" for="check{{ $i }}_offcanvas">
                            {{ $velkost }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Brands --}}
        <div class="d-flex flex-column mt-5">
            <h4>Značka</h4>
            <div class="p-3">
                @foreach($znacky as $i => $znacka)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="zn{{ $i }}">
                        <label class="form-check-label" for="zn{{ $i }}">
                            {{ $znacka }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('priceRange').addEventListener('input', function (e) {
        document.getElementById('priceValue').textContent = e.target.value;
    });
</script>
