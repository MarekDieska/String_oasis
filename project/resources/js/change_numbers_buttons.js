document.addEventListener('DOMContentLoaded', function () {
    const minusBtn = document.getElementById('quantityMinus');
    const plusBtn = document.getElementById('quantityPlus');
    const input = document.getElementById('quantityInput');

    if (!minusBtn || !plusBtn || !input) return;

    minusBtn.addEventListener('click', () => {
        let current = parseInt(input.value);
        if (current > 1) {
            input.value = current - 1;
        }
    });

    plusBtn.addEventListener('click', () => {
        let current = parseInt(input.value);
        input.value = current + 1;
    });
});
