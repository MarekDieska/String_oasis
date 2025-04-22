document.addEventListener('DOMContentLoaded', function () {
    const ratingInputs = document.querySelectorAll('input[name="rating"], input[name="brand[]", input[name="cat[]"]');
    ratingInputs.forEach(input => {
        input.addEventListener('change', function () {
            this.form.submit();
        });
    });
});

document.getElementById('{{ $isOffcanvas ? "priceRangeOffcanvas" : "priceRange" }}').addEventListener('input', function (e) {
    document.getElementById('priceValue').textContent = e.target.value;
});
