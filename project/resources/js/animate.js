console.log("JS file loaded");

document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM fully loaded");
});

document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    });

    const hiddenElements = document.querySelectorAll('.hidden');
    hiddenElements.forEach((el) => {
        observer.observe(el);
        console.log("observed element:",el);
    });
});
