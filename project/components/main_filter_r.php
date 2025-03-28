<?php
$nazvyProduktov = [
    "Gibson SG Standard Electric Guitar Heritage Cherry",
    "Fender Squier Affinity Series Stratocaster Lake Placid Blue",
    "Vintage 1963 Gibson Barney Kessel Sunburst Finish",
    "Fender American Professional Jazzmaster Silverburst",
    "Neal Moser Guitar",
    "James Tyler Classic Burning Water",
];

$cenyProduktov = [
    "1799€",
    "233€",
    "4999€",
    "1899€",
    "650€",
    "930€",
];


$obrazkyProduktov = [
    "../images/gi1.png",
    "../images/g2.png",
    "../images/g3.png",
    "../images/g4.png",
    "../images/g5.png",
    "../images/g6.png",
];

$hodnoteniaProduktov = [
    "../components/stars5.php",
    "../components/stars3.php",
    "../components/stars5.php",
    "../components/stars4.php",
    "../components/stars5.php",
];
?>

<div class="container-fluid m-5 m-md-2 m-lg-4">
    <div class="row row-cols-1 row-cols-lg-2 flex-row justify-content-between align-items-center">
        <div class="col">
            <h1 class="title-filter">Elektrické gitary</h1>
        </div>
        <div class="col d-flex flex-column flex-sm-row
            justify-content-start justify-content-lg-end align-items-center">
            <h5 class="pt-2">Zoradiť podľa:</h5>
            <div class="btn-group sort-custom" role="group">
                <input type="radio" class="btn-check" name="sortovanie" id="sort1" checked>
                <label class="btn btn-outline-secondary" for="sort1">Názvu</label>

                <input type="radio" class="btn-check" name="sortovanie" id="sort2">
                <label class="btn btn-outline-secondary" for="sort2">Ceny</label>

                <input type="radio" class="btn-check" name="sortovanie" id="sort3">
                <label class="btn btn-outline-secondary" for="sort3">Hodnotenia</label>
            </div>

            <div class="btn-group sort2-custom" role="group">
                <input type="radio" class="btn-check" name="zoradenie" id="sort11" checked>
                <label class="btn btn-outline-secondary" for="sort11">
                    <i class="fa fa-arrow-up-wide-short m-2"></i>
                </label>

                <input type="radio" class="btn-check" name="zoradenie" id="sort12">
                <label class="btn btn-outline-secondary" for="sort12">
                    <i class="fa fa-arrow-up-short-wide m-2"></i>
                </label>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 prod-row">
        <?php for ($i = 0; $i < 16; $i++): ?>
            <div class="col d-flex justify-content-center p-3 r-custom">
                <a href="../pages/produkt_detail.php">
                    <div class="card products-card d-flex flex-col">
                        <div class="product-image">
                            <img class="card-photo " src="<?php echo $obrazkyProduktov[$i % count($obrazkyProduktov)]; ?>" alt="<?php echo $nazvyProduktov[$i % count($nazvyProduktov)]; ?>">
                        </div>
                        <div class="favorite-btn text-center">
                            <p>&#x2661</p>
                        </div>
                        <div class="cart-btn text-center">
                            <p>+</p>
                        </div>
                        <div class="text-custom">
                            <h5 class="t1-custom"><?php echo $nazvyProduktov[$i % count($nazvyProduktov)]; ?></h5>
                            <div class="t2-hv">
                                <div>
                                    <?php include $hodnoteniaProduktov[$i % count($hodnoteniaProduktov)]; ?>
                                </div>
                                <h4 class="t2-custom"><?php echo $cenyProduktov[$i % count($cenyProduktov)]; ?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>

    <div class="row mt-5">
        <div class="d-flex justify-content-center">
            <ul class="pagination dark-custom">
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span>&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span>&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>