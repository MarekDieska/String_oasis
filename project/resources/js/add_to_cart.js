// public/js/add_to_cart.js
document.addEventListener('DOMContentLoaded', () => {
    const addBtn = document.getElementById('addToCartBtn');
    if (!addBtn) {
        console.error('Add-to-Cart button (#addToCartBtn) not found in DOM');
        return;
    }

    addBtn.addEventListener('click', async function(event) {
        event.preventDefault();

        // 1) Read data
        const productId = this.getAttribute('data-product-id');
        const modal     = document.getElementById('plusModal');
        const qtyInput  = modal.querySelector('#quantityInput');
        const quantity  = parseInt(qtyInput.value, 10) || 1;

        // 2) CSRF token
        const meta = document.querySelector('meta[name="csrf-token"]');
        if (!meta) {
            alert('CSRF token not found — check that you have <meta name="csrf-token"> in your layout.');
            return;
        }
        const csrfToken = meta.content;

        try {
            // 3) Fire the request
            const response = await fetch('/cart/add', {
                method:      'POST',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept':       'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ product_id: productId, quantity })
            });

            // 4) Grab raw response
            const raw = await response.text();

            // 5) If error status, throw with full payload
            if (!response.ok) {
                let errMsg;
                try {
                    // try to pretty-print JSON
                    const json = JSON.parse(raw);
                    errMsg = JSON.stringify(json, null, 2);
                } catch {
                    errMsg = raw;
                }
                throw new Error(errMsg);
            }

            // 6) Parse JSON on success
            const data = JSON.parse(raw);

            // 7) Show toast
            const toastEl = document.getElementById('cartToast');
            new bootstrap.Toast(toastEl, { autohide: true, delay: 3000 }).show();

            console.log('Pridané do košíka:', data.cartItem);
        } catch (err) {
            console.error('Add-to-cart failed:', err);
            alert('Chyba pri pridávaní do košíka:\n' + err.message);
        }
    });
});
