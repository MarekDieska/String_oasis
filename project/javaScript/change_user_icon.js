document.addEventListener('DOMContentLoaded', function() {
    let loginButton = document.getElementById('loginButton');
    let userIcon = document.getElementById('userIcon');
    let loginModal = document.getElementById('login_form');
    let logoutModal = document.getElementById('logoutModal');

    // Funkcia na zmenu ikony na prihláseného používateľa
    function changeIconToLoggedIn() {
        userIcon.classList.remove('fa-regular', 'fa-user');
        userIcon.classList.add('fa-solid', 'fa-user-tie');
    }

    // Funkcia na zmenu ikony na odhláseného používateľa
    function changeIconToLoggedOut() {
        userIcon.classList.remove('fa-solid', 'fa-user-tie');
        userIcon.classList.add('fa-regular', 'fa-user');
    }

    // Zobrazenie správneho modálneho okna pri kliknutí na ikonu
    userIcon.addEventListener('click', function() {
        if (userIcon.classList.contains('fa-solid', 'fa-user-tie')) {
            // Používateľ je prihlásený, zobraziť odhlasovacie okno
            new bootstrap.Modal(logoutModal).show();
        } else {
            // Používateľ je odhlásený, zobraziť prihlasovacie okno
            new bootstrap.Modal(loginModal).show();
        }
    });

    // Simulácia prihlásenia
    if (loginButton) {
        loginButton.addEventListener('click', function(event) {
            event.preventDefault();
            changeIconToLoggedIn();
            bootstrap.Modal.getInstance(loginModal).hide();
        });
    }

    // Simulácia odhlásenia
    if (logoutModal) {
        document.getElementById('logoutButton').addEventListener('click', function() {
            changeIconToLoggedOut();
            bootstrap.Modal.getInstance(logoutModal).hide();
        });
    }

    // Kontrola stavu prihlásenia pri načítaní stránky
    if (userIcon.classList.contains('fa-solid', 'fa-user-tie')) {
        changeIconToLoggedIn();
    } else {
        changeIconToLoggedOut();
    }
});