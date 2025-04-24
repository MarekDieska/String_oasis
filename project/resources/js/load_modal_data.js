const plusModal = document.querySelector('#plusModal');

if (plusModal) {
    plusModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tlačidlo, ktoré otvorilo modal

        // Získanie údajov z atribútov tlačidla
        var productId = button.getAttribute('data-id');
        var productName = button.getAttribute('data-name');
        var productPrice = button.getAttribute('data-price');
        var productImage = button.getAttribute('data-image');
        var productLink = button.getAttribute('data-link');

        // Nastavenie údajov do modalu
        var modal = this;

        var productNameElem = modal.querySelector('#modalProductName');
        if (productNameElem) productNameElem.textContent = productName;

        var productPriceElem = modal.querySelector('#modalProductPrice');
        if (productPriceElem) productPriceElem.textContent = productPrice + ' €';

        var productImageElem = modal.querySelector('#modalProductImage');
        if (productImageElem) productImageElem.setAttribute('src', productImage);

        var productLinkElem = modal.querySelector('a#modalProductLink');
        if (productLinkElem) productLinkElem.setAttribute('href', productLink);

        // Nastavenie údajov na tlačidle "Pridať do košíka"
        var addToCartBtn = modal.querySelector('#addToCartBtn');
        if (addToCartBtn) addToCartBtn.setAttribute('data-product-id', productId);
    });
}
