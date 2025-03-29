<?php include "../components/variables.php"?>

<article class="row justify-content-center align-items-center position-relative
                w-100 text-center grad">
    <img class="background-image hidden text-center opacity-25 position-absolute" src="../images/home_background.svg" alt="photo" width=70%>
    <h1 class="position-relative hidden text_color">
        "Struny vašich snov, melódia vášho srdca."
    </h1>
</article>

<section class="container_pre_platne m-5">
    <h2 class="zlava text_color pt-5">Zľavy</h2>

    <div class="produkty-container d-flex">
        <?php for($i = 0; $i < 10; $i++):?>
            <a class="link-custom" href="../pages/produkt_detail.php">
                <div class="pas">
                    <div class="card produkt mt-3">
                        <div class="product-image">
                            <img class="card-photo " src="<?php echo $obrazkyProduktov[$i % count($obrazkyProduktov)]; ?>" alt="<?php echo $nazvyProduktov[$i % count($nazvyProduktov)]; ?>">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661</p>
                        </div>
                        <div class="cart-btn text-center">
                            <p>+</p>
                        </div>
                        <div class="text-custom sirka">
                            <h5 class="t1-custom"><?php echo $nazvyProduktov[$i % count($nazvyProduktov)]; ?></h5>
                            <div class="t2-hv">
                                <div>
                                    <?php include $hodnoteniaProduktov[$i % count($hodnoteniaProduktov)]; ?>
                                </div>
                                <h4 class="t2-custom"><?php echo $cenyProduktov[$i % count($cenyProduktov)]; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endfor;?>
    </div>
</section>


<section class="container_pre_platne m-5">
    <h2 class="zlava text_color pt-5">Platne</h2>

    <div class="produkty-container d-flex">
        <?php for($i = 0; $i < 10; $i++):?>
            <a class="link-custom" href="../pages/produkt_detail.php">
                <div class="pas">
                    <div class="card produkt mt-3">
                        <div class="product-image">
                            <img class="card-photo " src="<?php echo $obrazkyP[$i % count($obrazkyP)]; ?>" alt="<?php echo $nazvyP[$i % count($nazvyP)]; ?>">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661</p>
                        </div>
                        <div class="cart-btn text-center">
                            <p>+</p>
                        </div>
                        <div class="text-custom sirka">
                            <h5 class="t1-custom"><?php echo $nazvyP[$i % count($nazvyP)]; ?></h5>
                            <div class="t2-hv">
                                <div>
                                    <?php include $hodnoteniaP[$i % count($hodnoteniaP)]; ?>
                                </div>
                                <h4 class="t2-custom"><?php echo $cenyP[$i % count($cenyP)]; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endfor;?>
    </div>
</section>