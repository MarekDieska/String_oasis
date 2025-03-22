window.addEventListener('scroll', function() {
    const category = document.querySelector('.category-custom');
    if (window.scrollY > 100) {
        category.classList.add('scrolled');
    } else {
        category.classList.remove('scrolled');
    }
});