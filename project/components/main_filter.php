<div class="row">
    <div class="col-3 bg-red side-filter-custom">
        <div>
            <h2 class="text-center pb-5">FILTROVAŤ</h2>

            <div class="mb-4">
                <div class="d-flex flex-row gap-2 align-items-center mb-2" >
                    <h5 style="margin-bottom: 2px;">Cena do:</h5>
                    <span id="priceValue">2500</span>€
                </div>

                <div class="price-slider-container bg-transparent">
                    <input type="range" class="form-range bg-transparent thumb-custom mt-0" id="priceRange" min="0" max="5000" step="100">
                </div>

                <div class="d-flex justify-content-between mt-0">
                    <span>0€</span>
                    <span>5000€</span>
                </div>
            </div>
            <label for="priceRange"></label>


            <div>
                <h5>Typ strunového nástroja</h5>
                <div>
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
                <h5>Hodnotenie: </h5>

                <div class="d-flex justify-content-center flex-column m-4 mt-3">
                    <div class="btn-group-vertical" role="group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-1" autocomplete="off" checked>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9 bg-blue">
        <br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
        <h1>toto je filtrovanie.</h1>
        <h2>dakujem za pozornost</h2>
        <br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
    </div>
</div>

<script>
    document.getElementById('priceRange').addEventListener('input', function(e) {
        document.getElementById('priceValue').textContent = e.target.value;
    });
</script>
