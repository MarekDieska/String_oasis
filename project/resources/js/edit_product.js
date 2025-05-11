function showErrorToast(message) {
    const toastEl = document.getElementById('errorToast');
    if (toastEl) {
        const toastContent = document.getElementById('errorContent');
        const toast = bootstrap.Toast.getOrCreateInstance(toastEl);
        toastContent.textContent = message;
        toast.show();
    }
}

window.onload = function() {
    const imagesToDelete = [];

    document.body.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-delete-image')) {
            e.preventDefault();
            const imageCard = e.target.closest('.card.bg-transparent');
            if (imageCard) {
                imageCard.style.display = 'none';
                imagesToDelete.push(e.target.dataset.photoId);
                console.log('Image removed. Queue:', imagesToDelete);
            }
        }
    });

    const form = document.getElementById('editProductForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const visibleImages = document.querySelectorAll('.card.bg-transparent:not([style*="display: none"])').length;
            const fileInput = form.querySelector('input[name="images[]"]');
            const newImages = fileInput ? fileInput.files.length : 0;

            if (visibleImages + newImages === 0) {
                e.preventDefault();
                showErrorToast('Produkt musí mať aspoň jeden obrázok!');
                const uploadSection = document.querySelector('.col-md-6.d-inline-block:has(input[name="images[]"])');
                if (uploadSection) {
                    uploadSection.style.border = '2px solid red';
                    uploadSection.style.borderRadius = '5px';
                    setTimeout(() => {
                        uploadSection.style.border = '';
                    }, 3000);
                }
                return;
            }

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'deleted_images';
            input.value = JSON.stringify(imagesToDelete);
            this.appendChild(input);
        });
    }
};
