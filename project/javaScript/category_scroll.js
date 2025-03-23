window.addEventListener('scroll', function() {
    // Skontroluje, či je veľkosť obrazovky >= 768px (md a väčšie)
    if (window.matchMedia('(min-width: 768px)').matches) {
        const category = document.querySelector('.category-custom');
        if (window.scrollY > 100) {
            category.classList.add('scrolled');
        } else {
            category.classList.remove('scrolled');
        }
    }
});
