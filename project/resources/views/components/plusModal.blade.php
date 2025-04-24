<div class="modal fade" id="plusModal" aria-labelledby="plusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-black">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="plusModalLabel">Pridať do košíka</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavrieť"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column align-items-center">

                    <!-- Obrázok produktu -->
                    <img id="modalProductImage" src="" alt="Produkt" class="img-fluid" width="100">

                    <!-- Množstvo -->
                    <div class="d-flex flex-row my-3">
                        <button id="quantityMinus" class="btn btn-outline-secondary p-2 rounded-0" type="button">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input id="quantityInput" class="form-control text-center p-2 input-plus-minus rounded-0" value="1" min="1">
                        <button id="quantityPlus" class="btn btn-outline-secondary p-2 rounded-0" type="button">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>

                    <!-- Názov a cena -->
                    <h4 class="mt-2" id="modalProductName">Názov produktu</h4>
                    <p class="mb-3">
                        Cena:
                        <span id="modalProductPrice">0,00 €</span>
                    </p>

                    <!-- Tlačidlá -->
                    <div class="d-flex justify-content-between w-100">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Späť na nákup
                        </button>
                        <button class="btn btn-success" id="addToCartBtn" data-product-id="" onclick="addToCart(this)">
                            Pridať do košíka
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
