document.addEventListener('DOMContentLoaded', function() {
    let userIcon = document.getElementById('userIcon');
    let loginButton = document.getElementById('loginButton');
    let loginModal = document.getElementById('login_form');
    let name = document.getElementById('Name');
    let surname = document.getElementById('Surname');
    let registerButton = document.getElementById('registerButton');
    let pasRec = document.getElementById('pass_rec');
    let finishButton = document.getElementById('finishRegister');
    let siteInfo = document.getElementById('siteInfo');
    let adminButton = document.getElementById('adminButton');
    let buttons = document.querySelectorAll('.logout-action');

    function changeIconToLoggedIn() {
        if (userIcon) {
            userIcon.classList.remove('fa-regular', 'fa-user');
            userIcon.classList.add('fa-solid', 'fa-user-tie');
        }
        if (loginButton) {
            loginButton.classList.add('d-none');
        }
        buttons.forEach(button => {
            if(button){
                button.classList.remove('d-none');
            }
        });
        if (pasRec) {
            pasRec.classList.add('d-none');
        }
        if (registerButton) {
            registerButton.classList.add('d-none');
        }
        if (siteInfo) {
            siteInfo.classList.add('d-none');
        }
        if (adminButton) {
            adminButton.classList.remove('d-none');
        }
        sessionStorage.setItem('userLoggedIn', 'true');
    }

    function changeIconToLoggedOut() {
        if (userIcon) {
            userIcon.classList.remove('fa-solid', 'fa-user-tie');
            userIcon.classList.add('fa-regular', 'fa-user');
        }
        if (loginButton) {
            loginButton.classList.remove('d-none');
        }
        buttons.forEach(button => {
            if(button){
                button.classList.add('d-none');
            }
        });
        if (siteInfo) {
            siteInfo.classList.remove('d-none');
        }
        if (registerButton) {
            registerButton.classList.remove('d-none');
        }
        if (adminButton) {
            adminButton.classList.add('d-none');
        }
        sessionStorage.removeItem('userLoggedIn');
    }

    function changeToRegister() {
        if (loginButton) {
            loginButton.classList.add('d-none');
        }
        if (pasRec) {
            pasRec.classList.add('d-none');
        }
        if (name) {
            name.classList.remove('d-none');
        }
        if (surname) {
            surname.classList.remove('d-none');
        }
        if (registerButton) {
            registerButton.classList.add('d-none');
        }
        if (finishButton) {
            finishButton.classList.remove('d-none');
        }
    }

    function changeToFinish() {
        if (loginButton) {
            loginButton.classList.remove('d-none');
        }
        if (finishButton) {
            finishButton.classList.add('d-none');
        }
        if (pasRec) {
            pasRec.classList.remove('d-none');
        }
        if (name) {
            name.classList.add('d-none');
        }
        if (surname) {
            surname.classList.add('d-none');
        }
    }

    if (sessionStorage.getItem('userLoggedIn')) {
        changeIconToLoggedIn();
    } else {
        changeIconToLoggedOut();
    }

    if (loginButton) {
        loginButton.addEventListener('click', function(event) {
            event.preventDefault();
            changeIconToLoggedIn();
            if (loginModal) {
                bootstrap.Modal.getInstance(loginModal).hide();
            }
        });
    }

    buttons.forEach(button => {
        if(button){
            button.addEventListener('click', function(event) {
                event.preventDefault();
                changeIconToLoggedOut();
                window.location.href = "../views/pages/index.blade.php";
                if(loginModal){
                    bootstrap.Modal.getInstance(loginModal).hide();
                }
            });
        }
    });

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
