// Skontroluje, či sme na stránke index.php
if (window.location.pathname === '/project/pages/index.php') {
    // Kód pre index.php (skrolovanie)
    window.addEventListener('scroll', function() {
        // Skontroluje, či je veľkosť obrazovky >= 768px (md a väčšie)
        if (window.matchMedia('(min-width: 768px)').matches) {
            const category = document.querySelector('.category-custom');
            if (category) {
                if (window.scrollY > 100) {
                    category.classList.add('scrolled');
                } else {
                    category.classList.remove('scrolled');
                }
            }
        }
    });
} else {
    // Kód pre ostatné stránky (načítať)
    window.addEventListener('load', function() {
        // Skontroluje, či je veľkosť obrazovky >= 768px (md a väčšie)
        if (window.matchMedia('(min-width: 768px)').matches) {
            const category = document.querySelector('.category-custom');
            if (category) {
                category.classList.add('scrolled');
            }
        }
    });
}