<div class="side-filter-custom">
    <div>
        <h2 class="text-center pb-5">FILTROVAŤ</h2>

        <div class="mb-4">
            <div class="d-flex flex-row gap-2 align-items-center mb-2" >
                <h5 style="margin-bottom: 2px;">Cena do:</h5>
                <span id="priceValue">5000</span>€
            </div>

            <div class="price-slider-container bg-transparent">
                <input type="range" class="form-range bg-transparent thumb-custom mt-0" id="priceRange" min="0" max="5000" step="100" value="5000">
            </div>

            <div class="d-flex justify-content-between mt-0">
                <span>0€</span>
                <span>5000€</span>
            </div>
        </div>
        <label for="priceRange"></label>


        <div>
            <h4>Typ strunového nástroja</h4>
            <div class="p-3">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ1">
                    <label for="typ1">Elektrické gitary</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ2">
                    <label for="typ2">Elektro-akustické gitary</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ4">
                    <label for="typ4">Akustické gitary</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ5">
                    <label for="typ5">Klasické gitary</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ6">
                    <label for="typ6">Detské gitary</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ7">
                    <label for="typ7">Basgitary</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ8">
                    <label for="typ8">Ukulele</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ9">
                    <label for="typ9">Banjo</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ10">
                    <label for="typ10">Mandolína</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="typ11">
                    <label for="typ11">Kora</label>
                </div>
            </div>
        </div>


        <div class="d-flex flex-column mt-5">
            <h4>Hodnotenie: </h4>

            <div class="d-flex justify-content-center flex-column m-4 mt-3">
                <div class="btn-group-vertical" role="group">
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-1" autocomplete="off">
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-1">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                    </label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-2" autocomplete="off">
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-2">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color2"></i>
                    </label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-3" autocomplete="off">
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-3">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color2"></i>
                        <i class="fa fa-star rating-color2"></i>
                    </label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-4" autocomplete="off">
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-4">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color2"></i>
                        <i class="fa fa-star rating-color2"></i>
                        <i class="fa fa-star rating-color2"></i>
                    </label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-5" autocomplete="off">
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-5">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color2"></i>
                        <i class="fa fa-star rating-color2"></i>
                        <i class="fa fa-star rating-color2"></i>
                        <i class="fa fa-star rating-color2"></i>
                    </label>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-6" autocomplete="off" checked>
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-6">
                        všetky ohodnotenia
                    </label>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mt-5">
            <h4>Veľkosť gitary</h4>
            <div class="p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check1">
                    <label class="form-check-label" for="check1">
                        Junior
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check2">
                    <label class="form-check-label" for="check2">
                        3/4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check3">
                    <label class="form-check-label" for="check3">
                        7/8
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check4">
                    <label class="form-check-label" for="check4">
                        4/4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check5">
                    <label class="form-check-label" for="check5">
                        Full size
                    </label>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mt-5">
            <h4>Značka</h4>
            <div class="overflow-auto f-scroll p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn1">
                    <label class="form-check-label" for="zn1">
                        Alvarez
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn2">
                    <label class="form-check-label" for="zn2">
                        Fender
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn3">
                    <label class="form-check-label" for="zn3">
                        Gipson
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn4">
                    <label class="form-check-label" for="zn4">
                        Ibanez
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn5">
                    <label class="form-check-label" for="zn5">
                        Mahalo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn6">
                    <label class="form-check-label" for="zn6">
                        Ortega
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn7">
                    <label class="form-check-label" for="zn7">
                        Pasadena
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn8">
                    <label class="form-check-label" for="zn8">
                        Takamine
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn9">
                    <label class="form-check-label" for="zn9">
                        Taylor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn10">
                    <label class="form-check-label" for="zn10">
                        Yamaha
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('priceRange').addEventListener('input', function(e) {
        document.getElementById('priceValue').textContent = e.target.value;
    });
</script>

