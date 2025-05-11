document.addEventListener("DOMContentLoaded", function () {
    // ✅ Show toast if there are validation errors
    if (window.validationErrors && window.validationErrors.length > 0) {
        const toastEl = document.getElementById('errorToast');
        const toastBody = document.getElementById('errorContent');

        if (toastEl && toastBody) {
            toastBody.innerHTML = window.validationErrors.map(e => `<div>${e}</div>`).join('');
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    }

    // 🔁 Toggle between login and register forms
    const registerBtn = document.getElementById('registerButton');
    const backToLoginBtn = document.getElementById('backToLogin');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    if (registerBtn) {
        registerBtn.addEventListener('click', function (e) {
            e.preventDefault();
            loginForm.classList.add('d-none');
            registerForm.classList.remove('d-none');
            registerBtn.classList.add('d-none');
            backToLoginBtn.classList.remove('d-none');
        });
    }

    if (backToLoginBtn) {
        backToLoginBtn.addEventListener('click', function (e) {
            e.preventDefault();
            loginForm.classList.remove('d-none');
            registerForm.classList.add('d-none');
            registerBtn.classList.remove('d-none');
            backToLoginBtn.classList.add('d-none');
        });
    }
});
