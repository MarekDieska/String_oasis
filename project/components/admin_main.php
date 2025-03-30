<div class="col-12 txt-custom3 d-flex justify-content-center">
    <h2 class="text-light">Stránka správcu e-shopu String Oasis</h2>
</div>

<section class="row d-flex align-items-center justify-content-center admin-main">

    <div class="col-12 col-md-4">
        <a href="../pages/admin_add.php" class="link-custom">
            <div class="card bg-dark border-success text-light m-3 pick-custom text-center">
                <h3 class="pt-5 pb-2">Pridať produkt</h3>
                <i class="fa fa-plus fs-3"></i>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-4">
        <a href="../pages/admin_delete.php" class="link-custom">
            <div class="card bg-dark border-danger text-light m-3 pick-custom text-center">
                <h3 class="pt-5 pb-2">Odobrať produkt</h3>
                <i class="fa fa-minus fs-3"></i>
            </div>
        </a>
    </div>

    <div class="col 12 col-md-4">
        <a href="../pages/admin_edit.php" class="link-custom">
            <div class="card bg-dark border-warning text-light m-3 pick-custom text-center">
                <h3 class="pt-5 pb-2">Upraviť produkt</h3>
                <i class="fa fa-repeat fs-3"></i>
            </div>
        </a>
    </div>

    <hr class="text_color">

    <div class="mt-4 text_color p-5">
        <h2>Pridanie Admina</h2>
        <form>
            <div class="form-group text_color">
                <label for="adminUsername">Používateľské meno</label>
                <input type="text" class="form-control placeholder-black" id="adminUsername" placeholder="Zadajte používateľské meno" required>
            </div>
            <div class="form-group">
                <label for="adminEmail">Email</label>
                <input type="email" class="form-control placeholder-black" id="adminEmail" placeholder="Zadajte email" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Pridať Admina</button>
        </form>
    </div>

    <hr class="text_color mt-4">

    <div class="mt-4 text_color p-5">
        <h2>Odstránenie Admina</h2>
        <form>
            <div class="form-group text_color">
                <label for="adminToRemove">Používateľské meno admina</label>
                <input type="text" class="form-control placeholder-black" id="adminToRemove" placeholder="Zadajte používateľské meno admina" required>
            </div>
            <button type="submit" class="btn btn-danger mt-2">Odstrániť Admina</button>
        </form>
    </div>

    <hr class="text_color mt-4">

    <div class="d-flex w-100 justify-content-center p-4">
        <a href="../pages/index.php" type="button" class="btn text_color btn-primary w-50 mt-0" id="logoutButton">Odhlásiť sa</a>
    </div>

</section>







