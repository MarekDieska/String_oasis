// Make sure this is in your global script, after the modal HTML
window.addToCart = function(button) {
    // 1. Get the product ID from the button
    var productId = button.getAttribute('data-product-id');

    // 2. Find the modal that contains this button
    //    (we assume your modal has id="plusModal")
    var modal = document.getElementById('plusModal');

    // 3. Pull the quantity from the input inside that modal
    var quantityInput = modal.querySelector('#quantityInput');
    // Make sure we parse an integer (and fallback to 1 if it's invalid)
    var quantity = parseInt(quantityInput.value, 10) || 1;

    // 4. Logging for debugging
    //console.log('Produkt pridaný do košíka, ID:', productId, 'Množstvo:', quantity);
};
