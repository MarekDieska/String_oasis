<div class="modal fade" id="plusModal" aria-labelledby="plusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-black">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="plusModalLabel">Pridať do košíka</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column align-items-center">
                    <img src="../images/p4.png" alt="Produkt" class="img-fluid" width="100">

                    <div class="d-flex flex-row">
                        <button class="btn btn-outline-secondary p-2 rounded-0" type="button">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input class="form-control text-center p-2 input-plus-minus rounded-0" value="1" min="1">
                        <button class="btn btn-outline-secondary p-2 rounded-0" type="button">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>

                    <h4 class="mt-3" id="productName">
                        "Midnight Echoes - Vinyl Special Edition"
                    </h4>
                    <p id="productPrice" class="mb-3">
                        Cena:
                        <span id="priceValue">
                            29.50€
                        </span>
                    </p>
                    <div class="d-flex justify-content-between w-100">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Späť na nákup
                        </button>
                        <a href="../pages/cart_page.php" type="button" class="btn btn-success">
                            Do košíka
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


