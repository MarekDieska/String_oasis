<?php include "../components/variables.php"?>

<div class="side-filter-custom">
    <div>
        <h2 class="text-center pb-5">FILTROVAŤ</h2>

        <div class="mb-4">
            <div class="d-flex flex-row gap-2 align-items-center mb-2" >
                <h5 style="margin-bottom: 2px;">Cena do:</h5>
                <span id="priceValue1">5000</span>€
            </div>

            <div class="price-slider-container bg-transparent">
                <input type="range" class="form-range bg-transparent thumb-custom mt-0" id="priceRange1" min="0" max="5000" step="100" value="5000">
            </div>

            <div class="d-flex justify-content-between mt-0">
                <span>0€</span>
                <span>5000€</span>
            </div>
        </div>
        <label for="priceRange1"></label>


        <div>
            <h4>Typ strunového nástroja</h4>
            <div class="p-3">
                <?php for($i = 0; $i < count($typy); $i++): ?>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="typ<?php echo $i?>">
                        <label for="typ<?php echo $i?>"><?php echo $typy[$i]?></label>
                    </div>
                <?php endfor;?>
            </div>
        </div>


        <div class="d-flex flex-column mt-5">
            <h4>Hodnotenie: </h4>

            <div class="d-flex justify-content-center flex-column m-4 mt-3">
                <div class="btn-group-vertical" role="group">
                    <?php for($i = 1; $i < 6; $i++):?>
                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-<?php echo $i?>" autocomplete="off">
                    <label class="btn btn-outline-danger hv-custom" for="vbtn-<?php echo $i?>">
                        <?php include "../components/stars".$i.".php" ?>
                    </label>
                    <?php endfor;?>

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
                <?php for($i = 0; $i < count($velkosti); $i++):?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="size_offcanvas" value="" id="check<?php echo $i?>_offcanvas">
                        <label class="form-check-label" for="check<?php echo $i?>_offcanvas">
                            <?php echo $velkosti[$i]?>
                        </label>
                    </div>
                <?php endfor;?>
            </div>
        </div>

        <div class="d-flex flex-column mt-5">
            <h4>Značka</h4>
            <div class=" p-3">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="zn1">
                    <label class="form-check-label" for="zn1">
                        Alvarez
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('priceRange1').addEventListener('input', function(e) {
        document.getElementById('priceValue1').textContent = e.target.value;
    });
</script>
