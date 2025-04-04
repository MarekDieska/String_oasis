<?php include "../components/variables.php";?>

<section class="row justify-content-center align-items-center">

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
            <button class="btn btn-secondary circle-custom rounded-pill">4</button>
            <h6 class="text-light txt-custom">Kontrola</h6>
        </div>
        <button class="btn btn-secondary arrow-custom"><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill disabled"><i class="fa-regular fa-circle-check"></i></button>
            <h6>hotovo</h6>
        </div>

    </div>

</section>

<section class="row">
    <div class="col-12 col-md-7 align-items-start justify-content-center ps-5 pe-5 pe-md-0 text-light">
        <h3 class="mb-3 pt-4 pb-2  opacity-75">Kontrola údajov</h3>

        <div class="row pb-2 mb-2 ps-xl-5 pt-4 border-top  border-secondary">
            <div class="col-12 col-md-3 fw-bold pb-3 pb-md-0">Osobné údaje</div>
            <div class="col-6 col-md-4 opacity-75">Meno a priezvisko:</div>
            <div class="col-6 col-md-5">Ján Novák</div>
        </div>
        <div class="row pb-2 mb-2 ps-xl-5">
            <div class="col-12 col-md-3"></div>
            <div class="col-6 col-md-4  opacity-75">Email:</div>
            <div class="col-6 col-md-5">jan.novak@example.com</div>
        </div>
        <div class="row pb-2 mb-2 ps-xl-5">
            <div class="col-12 col-md-3"></div>
            <div class="col-6 col-md-4  opacity-75">Telefón:</div>
            <div class="col-6 col-md-5">+421 900 123 456</div>
        </div>
        <div class="row pb-2 mb-2 ps-xl-5">
            <div class="col-12 col-md-3"></div>
            <div class="col-6 col-md-4  opacity-75">Adresa:</div>
            <div class="col-6 col-md-5">Hlavná 123, 821 09 Bratislava</div>
        </div>

        <div class="row pb-2 mb-2 pt-4 ps-xl-5  border-top  border-secondary">
            <div class="col-12 col-md-3 fw-bold pb-3 pb-md-0">Doprava</div>
            <div class="col-6 col-md-4  opacity-75">Spôsob doručenia:</div>
            <div class="col-6 col-md-5">Kuriér GLS</div>
        </div>
        <div class="row pb-2 mb-2 ps-xl-5">
            <div class="col-12 col-md-3"></div>
            <div class="col-6 col-md-4  opacity-75">Dodacia adresa:</div>
            <div class="col-6 col-md-5">Rovnaká ako fakturačná</div>
        </div>
        <div class="row pb-2 mb-2 ps-xl-5">
            <div class="col-12 col-md-3"></div>
            <div class="col-6 col-md-4  opacity-75">Odhadovaný čas doručenia:</div>
            <div class="col-6 col-md-5">2-3 pracovné dni</div>
        </div>

        <div class="row pb-4 mb-2 pt-4 ps-xl-5 border-top border-secondary border-bottom">
            <div class="col-12 col-md-3 fw-bold pb-3 pb-md-0">Platba</div>
            <div class="col-6 col-md-4 opacity-75">Spôsob platby:</div>
            <div class="col-6 col-md-5">Platba kartou online</div>
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
                <a href="../pages/cart_page5.php" class="btn mt-0 btn-dark mb-4">Objednať s povinnosťou platby</a>
            </div>

        </div>
    </div>
</section>