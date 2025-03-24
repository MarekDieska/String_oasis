<div class="m-0 w-100 d-flex justify-content-end justify-content-ml-center">

    <!--ked je mala obrazovka -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="d-flex d-md-none flex-column accordion accordion-flush accordion-custom" id="accordionFlushExample">
            <div class="accordion-item">
                <h1 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Gitary
                    </button>
                </h1>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column">
                        <a href="#">elektrické</a>
                        <a href="#">elektro-akustické</a>
                        <a href="#">klasické</a>
                        <a href="#">detské</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h1 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Basgitary
                    </button>
                </h1>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column">
                        <a href="#">4 strunové</a>
                        <a href="#">5 strunové</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h1 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Iné strunové nástroje
                    </button>
                </h1>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column">
                        <a href="#">ukulele</a>
                        <a href="#">banjo</a>
                        <a href="#">mandolína</a>
                        <a href="#">kora</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h1 class="accordion-header">
                <button class="accordion-button collapsed accordion-custom" type="button">
                    Reproduktory a kombá
                </button>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed accordion-custom" type="button">
                    Príslušenstvo
                </button>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed accordion-custom" type="button">
                    Platne
                </button>
            </div>
        </div>
    </div>



    <!--toggler na malu obrazovku -->
    <button class="navbar-toggler menu-custom" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <!--ked je velka obrazovka -->
    <div class="category-scroll row d-none d-md-flex w-100">
        <div class="m-0 col-2 d-flex flex-column position-relative">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#gitaryCollapse" class="d-flex flex-column">
                <img src="../images/git.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0">GITARY</p>
            </a>
            <ul id="gitaryCollapse" class="collapse position-absolute w-100 mt-2 bg-white rounded dropdown-custom">
                <li>elektrické</li>
                <li>elektro-akustické</li>
                <li>akustické</li>
                <li>klasické</li>
                <li>detské</li>
            </ul>
        </div>

        <div class="m-0 col-2 d-flex flex-column  position-relative">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#basgitaryCollapse" class="d-flex flex-column">
                <img src="../images/bass.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">BASGITARY</p>
            </a>
            <ul id="basgitaryCollapse" class="collapse position-absolute w-100 mt-2 bg-white rounded dropdown-custom">
                <li>4 strunové</li>
                <li>5 strunové</li>
            </ul>
        </div>

        <div class="m-0 col-2 d-flex flex-column position-relative">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#ineStrunyCollapse" class="d-flex flex-column">
                <img src="../images/banjo.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">INÉ STRUNY</p>
            </a>
            <ul id="ineStrunyCollapse" class="collapse position-absolute w-100 mt-2 bg-white rounded dropdown-custom">
                <li>ukulele</li>
                <li>banjo</li>
                <li>mandolína</li>
                <li>kora</li>
            </ul>
        </div>

        <div class="m-0 col-2 d-flex flex-column">
            <a href="#" class="d-flex flex-column">
                <img src="../images/kombo.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">KOMBÁ</p>
            </a>
        </div>

        <div class="m-0 col-2 d-flex flex-column">
            <a href="#" class="d-flex flex-column">
                <img src="../images/kabel.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">PRÍSLUŠENSTVO</p>
            </a>
        </div>

        <div class="m-0 col-2 d-flex flex-column">
            <a href="#" class="d-flex flex-column">
                <img src="../images/platna.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">PLATNE</p>
            </a>
        </div>
    </div>
    <script src="../javaScript/category_scroll.js"></script>
</div>