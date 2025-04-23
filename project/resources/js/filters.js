document.addEventListener('DOMContentLoaded', function () {
    const ratingInputs = document.querySelectorAll('input[name="rating"], input[name="brand[]"], input[name="subcategory"]');
    ratingInputs.forEach(input => {
        input.addEventListener('change', function () {
            this.form.submit();
        });
    });
});


