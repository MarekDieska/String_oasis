document.addEventListener('DOMContentLoaded', function() {
    let userIcon = document.getElementById('userIcon');
    let loginButton = document.getElementById('loginButton');
    let logoutButton = document.getElementById('logoutButton');
    let loginModal = document.getElementById('login_form');
    let name = document.getElementById('Name');
    let surname = document.getElementById('Surname');
    let registerButton = document.getElementById('registerButton');
    let pasRec = document.getElementById('pass_rec');
    let finishButton = document.getElementById('finishRegister');
    let siteInfo = document.getElementById('siteInfo');
    let adminButton = document.getElementById('adminButton');

    function changeIconToLoggedIn() {
        userIcon.classList.remove('fa-regular', 'fa-user');
        userIcon.classList.add('fa-solid', 'fa-user-tie');
        loginButton.classList.add('d-none');
        logoutButton.classList.remove('d-none');
        pasRec.classList.add('d-none');
        registerButton.classList.add('d-none');
        siteInfo.classList.add('d-none');
        adminButton.classList.remove('d-none');
        sessionStorage.setItem('userLoggedIn', 'true');
    }

    function changeIconToLoggedOut() {
        userIcon.classList.remove('fa-solid', 'fa-user-tie');
        userIcon.classList.add('fa-regular', 'fa-user');
        loginButton.classList.remove('d-none');
        logoutButton.classList.add('d-none');
        siteInfo.classList.remove('d-none');
        registerButton.classList.remove('d-none');
        adminButton.classList.add('d-none');
        sessionStorage.removeItem('userLoggedIn');
    }

    function changeToRegister() {
        loginButton.classList.add('d-none');
        pasRec.classList.add('d-none');
        name.classList.remove('d-none');
        surname.classList.remove('d-none');
        registerButton.classList.add('d-none');
        finishButton.classList.remove('d-none');
        loginButton.classList.add('d-none');
    }

    function changeToFinish() {
        loginButton.classList.remove('d-none');
        finishButton.classList.add('d-none');
        pasRec.classList.remove('d-none');
        name.classList.add('d-none');
        surname.classList.add('d-none');
    }

    // Pri načítaní stránky zisti stav sessionStorage
    if (sessionStorage.getItem('userLoggedIn')) {
        changeIconToLoggedIn();
    } else {
        changeIconToLoggedOut();
    }

    // Kliknutie na tlačidlo prihlásenia
    if (loginButton) {
        loginButton.addEventListener('click', function(event) {
            event.preventDefault();
            changeIconToLoggedIn();
            bootstrap.Modal.getInstance(loginModal).hide();
        });
    }

    // Kliknutie na tlačidlo odhlásenia
    if (logoutButton) {
        logoutButton.addEventListener('click', function(event) {
            event.preventDefault();
            changeIconToLoggedOut();
            window.location.href = "../pages/index.php";
            bootstrap.Modal.getInstance(loginModal).hide();
        });
    }

    if (registerButton) {
        registerButton.addEventListener('click', function(event) {
            event.preventDefault();
            changeToRegister();
        });
    }

    if (finishButton) {
        finishButton.addEventListener('click', function(event) {
            event.preventDefault();
            changeToFinish();
        });
    }
});
