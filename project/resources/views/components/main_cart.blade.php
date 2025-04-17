<?php include "../components/variables.blade.php";?>

<section class="row justify-content-center align-items-center">
    <div class="d-none d-md-flex col-2 justify-content-center">
        <a class="btn btn-secondary but-back" href="../song_oasis_laravel/public/filters_page.blade.php">
            <i class="fa fa-arrow-left m-0"></i> na nákup
        </a>
    </div>

    <h1 class="d-flex d-sm-none text-light ps-5">Nákupný košík</h1>

    <div class="col-12 col-md-8 d-none d-sm-flex flex-row justify-content-center align-items-center">

        <div class="d-flex align-items-center flex-column circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill">1</button>
            <h6 class="text-light txt-custom">Košík</h6>
        </div>
        <button class="btn btn-secondary arrow-custom "><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill disabled">2</button>
            <h6 class="text-light txt-custom">Doprava</h6>
        </div>
        <button class="btn btn-secondary arrow-custom "><i class="fa fa-arrow-right m-0"></i></button>
        <div class="d-flex align-items-center flex-column  circle-box-custom">
            <button class="btn btn-secondary circle-custom rounded-pill disabled">3</button>
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

    <div class="col-2"></div>
</section>

<section class="row">
    <div class="col-12 col-md-7 cart-slider overflow-auto">

        <?php for( $i = 0; $i < 6; $i++):?>
        <div class="cart-product m-3 me-md-0">
            <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="<?php echo $obrazkyProduktov[$i % count($obrazkyProduktov)]; ?>" width="60" alt="">

                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between w-100">
                    <a href="../song_oasis_laravel/public/produkt_detail.blade.php" class="link-custom text-black">
                        <div class="d-flex flex-column cart-prod-txt">
                            <h5><?php echo $nazvyProduktov[$i % count($nazvyProduktov)]; ?></h5>
                            <h6>elektrická gitara</h6>
                        </div>
                    </a>

                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <div class="d-flex flex-row p-3">
                            <i class="btn fa fa-minus p-2"></i>
                            <h5 class="pt-1 px-1">1</h5>
                            <i class="btn fa fa-plus p-2"></i>
                        </div>
                        <h4 class="pt-1 cart-prod-cost txt-custom2"><?php echo $cenyProduktov[$i % count($cenyProduktov)]; ?></h4>
                    </div>
                </div>

                <i class="fa fa-xmark"></i>
            </div>
        </div>
        <?php endfor;?>
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
            </div>

            <div class="d-flex flex-column align-items-center">
                <div class="d-flex justify-content-between align-items-center w-100 p-3 pb-0 pt-0">
                    <h5>Počet položiek</h5>
                    <h5>5ks</h5>
                </div>
                <hr class="line2-custom">
                <div class="d-flex justify-content-between align-items-center w-100 m-3 p-3 pb-0 mt-1 pt-0">
                    <h4>Súčet</h4>
                    <h4>960€</h4>
                </div>
                <a href="../song_oasis_laravel/public/cart_page2.blade.php" class="btn mt-0 btn-dark mb-4">Pokračovať na výber dopravy</a>
            </div>

        </div>
    </div>
</section>
