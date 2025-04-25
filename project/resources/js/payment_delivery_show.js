window.updatePrices = function updatePrices(input, type, price) {
    if (type === 'doprava') {
        document.getElementById('shippingPrice').textContent = price > 0 ? price + '€' : 'zadarmo';
    } else if (type === 'platba') {
        document.getElementById('paymentPrice').textContent = price > 0 ? price + '€' : 'zadarmo';
    }

    // Update the total
    updateTotal();
}

function getUrlParameter(name) {
    // Get the URL parameters and return the value of the requested parameter
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

function updateTotal() {
    // Get the values of shipping, payment, and subtotal
    var shippingPrice = parseFloat(document.getElementById('shippingPrice').textContent.replace('€', '')) || 0;
    var paymentPrice = parseFloat(document.getElementById('paymentPrice').textContent.replace('€', '')) || 0;
    var subtotal = parseFloat(getUrlParameter('m')) || 0; // Get subtotal from URL parameter 'm'

    // Calculate the total
    var total = subtotal + shippingPrice + paymentPrice;

    // Update the total element
    document.getElementById('total').textContent = total.toFixed(2) + '€';
}
