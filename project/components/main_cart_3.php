<?php include "../components/variables.php";?>

<div class="row justify-content-center align-items-center">

    <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">

        <div class="d-flex align-items-center flex-column circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill">1</button>
            <h6 class="text-light txt-custom">Košík</h6>
        </div>
        <button class="btn btn-secondary arrow-custom "><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill">2</button>
            <h6 class="text-light txt-custom">Doprava</h6>
        </div>
        <button class="btn btn-secondary arrow-custom "><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill">3</button>
            <h6 class="text-light txt-custom">Údaje</h6>
        </div>
        <button class="btn btn-secondary arrow-custom "><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill disabled">4</button>
            <h6 class="text-light txt-custom">Kontrola</h6>
        </div>
        <button class="btn btn-secondary arrow-custom"><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill disabled"><i class="fa-regular fa-circle-check"></i></button>
            <h6>hotovo</h6>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-12 col-md-7 align-items-start justify-content-center p-3 p-sm-5 pe-md-0">
        <div class="mt-0">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="meno" class="text_color form-label">Meno</label>
                        <input type="text" class="form-control" id="meno" placeholder="Meno">
                    </div>
                    <div class="col-md-6">
                        <label for="ulica" class="text_color form-label">Ulica + Číslo domu</label>
                        <input type="text" class="form-control" id="ulica" placeholder="Ulica 123/45">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="priezvisko" class="text_color form-label">Priezvisko</label>
                        <input type="text" class="form-control" id="priezvisko" placeholder="Priezvisko">
                    </div>
                    <div class="col-md-4">
                        <label for="mesto" class="text_color form-label">Mesto</label>
                        <input type="text" class="form-control" id="mesto" placeholder="Mesto">
                    </div>
                    <div class="col-md-2">
                        <label for="psc" class="text_color form-label">PSČ</label>
                        <input type="text" class="form-control" id="psc" placeholder="00000">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="text_color form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="priklad@gmail.com">
                    </div>
                    <div class="col-md-6">
                        <label for="krajina" class="text_color form-label">Krajina</label>
                        <select class="form-select" id="krajina">
                            <option selected>Vyberte krajinu</option>
                            <option value="SK">Slovensko</option>
                            <option value="CZ">Česko</option>
                            <option value="PL">Poľsko</option>
                            <option value="HU">Maďarsko</option>
                            <option value="AT">Rakúsko</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="telefon" class="text_color form-label">Telefónne číslo</label>
                        <input type="tel" class="form-control" id="telefon" placeholder="+421000000">
                    </div>
                    <div class="col-md-6">
                        <label for="poznamka" class="text_color form-label">Poznámka k objednávke</label>
                        <textarea class="form-control" id="poznamka" rows="3" placeholder="Vaše poznámky pre nás"></textarea>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="text_color form-check-input" id="suhlas">
                    <label class="text_color form-check-label" for="suhlas">Súhlasím so spracovaním osobných údajov</label>
                </div>
            </form>
        </div>

    </div>


    <div class="col-12 col-md-5 d-flex justify-content-center align-items-end">
        <div class=" total-custom rounded-1 p-3 d-flex flex-column justify-content-between">
            <div>
                <h2 class="subtotal">Zhrnutie:</h2>
                <div class="d-flex justify-content-between align-items-center m-3">
                    <h5>Medzisúčet</h5>
                    <h5>1200€</h5>
                </div>
                <div class="d-flex justify-content-between align-items-center m-3">
                    <h5>Zľavy</h5>
                    <h5>-200€</h5>
                </div>
                <div class="d-flex justify-content-between align-items-center m-3">
                    <h5>Kupóny</h5>
                    <h5>-40€</h5>
                </div>
                <div class="d-flex justify-content-between align-items-center m-3">
                    <h5>Doprava</h5>
                    <h5>20€</h5>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center">
                <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 pt-0">
                    <h5>Počet položiek</h5>
                    <h5>5ks</h5>
                </div>
                <hr class="line2-custom">
                <div class="d-flex justify-content-between align-items-center w-100 m-3 p-3 pb-0 mt-1 pt-0">
                    <h4>Súčet</h4>
                    <h4>980€</h4>
                </div>
                <a href="../pages/cart_page4.php" class="btn mt-0 btn-dark mb-4">Skontrolovať údaje</a>
            </div>

        </div>
    </div>
</div>