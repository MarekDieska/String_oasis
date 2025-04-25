document.addEventListener('DOMContentLoaded', function () {
    const continueBtn = document.getElementById('continueButton');

    continueBtn.addEventListener('click', function (e) {
        e.preventDefault();

        const doprava = document.querySelector('input[name="doprava"]:checked');
        const platba = document.querySelector('input[name="platba"]:checked');

        if (!doprava || !platba) {
            alert('Prosím, vyberte spôsob dopravy a platby.');
            return;
        }

        const dopravaId = doprava.value;
        const platbaId = platba.value;

        console.log('Doprava:', dopravaId);
        console.log('Platba:', platbaId);

        // Optional: Redirect with selected params
        const url = `/cart_page3?doprava=${dopravaId}&platba=${platbaId}`;
        window.location.href = url;
    });
});
