
<section class="row w-100 justify-content-center">
    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center p-5">
        <div class="card bg-dark border-danger text-dark w-100">
            <div class="card-header text-center text_color">Admin - Odstránenie produktu</div>
            <div class="card-body">
                <form id="productForm">
                    <div class="mb-3">
                        <input type="text" class="form-control text-black placeholder-black" maxlength="100" placeholder="Názov produktu">
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option value="">Kategória</option>
                            <option value="1">Gitara</option>
                            <option value="2">Basgitara</option>
                            <option value="3">Iné struny</option>
                            <option value="4">Kombá</option>
                            <option value="5">Príslušenstvo</option>
                            <option value="6">Platne</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <select class="form-select">
                            <option value="">Podkategória</option>
                            <option value="1">Elektrické</option>
                            <option value="2">Elektro-akustické</option>
                            <option value="3">Akustické</option>
                            <option value="4">Klasické</option>
                            <option value="5">Detské</option>
                        </select>
                    </div>
                    <div class="card bg-dark text_color align-items-center">
                        <button class="btn btn-outline-primary w-100 mb-3">Hľadať</button>
                        <img src="../images/product_guitar.jpg" style="width:75%; height: auto" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HarmonyTone Sunset D-50</h5>
                            <p class="card-text">HarmonyTone Sunset D-50 je perfektná pre začinajúcich aj pokročilých hudobníkov, ktorí
                                hľadajú spoľahlivý nástroj s výbroným zvukom a luxusným vzhľadom.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary">Zrušiť</button>
                        <button type="submit" class="btn btn-danger">Odstrániť produkt</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>