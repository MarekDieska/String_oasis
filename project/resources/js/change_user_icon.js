document.addEventListener('DOMContentLoaded', function () {
    let userIcon = document.getElementById('userIcon');
    let loginButton = document.getElementById('loginButton');
    let loginModal = document.getElementById('login_form');
    let registerButton = document.getElementById('registerButton');
    let passRecovery = document.getElementById('pass_rec');
    let registerForm = document.getElementById('registerForm');
    let siteInfo = document.getElementById('siteInfo');
    let adminButton = document.getElementById('adminButton');
    let logoutButtons = document.querySelectorAll('.logout-action');

    function showLoggedInUI() {
        userIcon?.classList.replace('fa-user', 'fa-user-tie');
        loginButton?.classList.add('d-none');
        logoutButtons.forEach(btn => btn?.classList.remove('d-none'));
        registerButton?.classList.add('d-none');
        passRecovery?.classList.add('d-none');
        siteInfo?.classList.add('d-none');
        adminButton?.classList.remove('d-none');
    }

    function showLoggedOutUI() {
        userIcon?.classList.replace('fa-user-tie', 'fa-user');
        loginButton?.classList.remove('d-none');
        logoutButtons.forEach(btn => btn?.classList.add('d-none'));
        registerButton?.classList.remove('d-none');
        passRecovery?.classList.remove('d-none');
        siteInfo?.classList.remove('d-none');
        adminButton?.classList.add('d-none');
    }

    function switchToRegisterForm() {
        registerForm?.classList.remove('d-none');
        loginButton?.classList.add('d-none');
        passRecovery?.classList.add('d-none');
    }

    // Register button click
    registerButton?.addEventListener('click', function (event) {
        event.preventDefault();
        switchToRegisterForm();
    });

    // Laravel will handle the real login/logout, we just update UI on page load:
    // Use Blade directives to determine real auth state
    if (document.body.dataset.user === 'auth') {
        showLoggedInUI();
    } else {
        showLoggedOutUI();
    }

    // Auto-hide modal after successful login
    const loginStatus = document.body.dataset.status;
    if (loginStatus === 'login-success' && loginModal) {
        const modalInstance = bootstrap.Modal.getInstance(loginModal);
        modalInstance?.hide();
    }
});
