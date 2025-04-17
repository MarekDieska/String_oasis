<section class="card mt-5 mb-3 bg-dark border-success-subtle text_color">
    <div class="text-center m-3">
        <div class="card-header text_colors">Admin - Pridanie produktu</div>
        <form id="productForm">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="mb-2">
                        <label class="form-label fw-bold">Produkt</label>
                        <input type="text" class="form-control text-black placeholder-black" maxlength="100" placeholder="Názov produktu">
                    </div>
                    <div class="mb-2">
                        <label class="form-label fw-bold">Popis produktu</label>
                        <textarea class="form-control placeholder-black" rows="3" minlength="50" maxlength="500" placeholder="Detailný popis produktu"></textarea>
                    </div>
                    <div class="mb-2 parameters-section">
                        <label class="form-label fw-bold">Parametre</label>
                        <div class="parameter-fields">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control placeholder-black" placeholder="Telo">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control placeholder-black" placeholder="Krk">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control placeholder-black" placeholder="Počet pražcov">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-primary mb-0">+ Pridať Parameter</button>
                        <button type="button" class="ms-3 btn btn-outline-danger mb-0">Odstrániť Parameter</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-2">
                        <label class="form-label fw-bold">Cenové detaily</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control placeholder-black" placeholder="Cena €">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control placeholder-black" placeholder="Zľava %">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label fw-bold">Kategória</label>
                        <select class="form-select mb-3">
                            <option value="">Kategória</option>
                            <option value="1">Gitara</option>
                            <option value="2">Basgitara</option>
                            <option value="3">Iné struny</option>
                            <option value="4">Kombá</option>
                            <option value="5">Príslušenstvo</option>
                            <option value="6">Platne</option>
                        </select>
                        <select class="form-select mb-2">
                            <option value="">Podkategória</option>
                            <option value="1">Elektrické</option>
                            <option value="2">Elektro-akustické</option>
                            <option value="3">Akustické</option>
                            <option value="4">Klasické</option>
                            <option value="5">Detské</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-0">
                        <label class="form-label fw-bold mt-0">Obrázky</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control form-control-lg bg-dark text_color" id="addProductImage" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-2 mb-3">
                <a type="button" href="../song_oasis_laravel/public/admin.blade.php" class="btn btn-outline-secondary">Zrušiť</a>
                <button type="reset" class="btn btn-outline-danger">Vyčistiť</button>
                <button type="submit" class="btn btn-primary">Pridať produkt</button>
            </div>
        </form>
    </div>
</section>

<hr class="text_color">

<div class="d-flex w-100 justify-content-center align-items-center p-3 pb-4">
    <a type="button" href="../song_oasis_laravel/public/admin.blade.php" class="btn btn-success w-75 p-1 fs-5">Dokončiť</a>
</div>