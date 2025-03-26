<div class="m-0 w-100 d-flex justify-content-end justify-content-ml-center">

    <!--ked je mala obrazovka -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="d-flex d-md-none flex-column accordion accordion-flush accordion-custom" id="accordionFlushExample">
            <div class="accordion-item accordion_color">
                <h1 class="accordion-header">
                    <button class="accordion-button collapsed accordion_color" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Gitary
                    </button>
                </h1>
                <div id="flush-collapseOne" class="accordion-collapse collapse bg-dark" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column">
                        <a href="../pages/filters_page.php">elektrické</a>
                        <a href="../pages/filters_page.php">elektro-akustické</a>
                        <a href="../pages/filters_page.php">klasické</a>
                        <a href="../pages/filters_page.php">detské</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion_color">
                <h1 class="accordion-header">
                    <button class="accordion-button collapsed accordion_color border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Basgitary
                    </button>
                </h1>
                <div id="flush-collapseTwo" class="accordion-collapse collapse bg-dark" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column">
                        <a href="../pages/filters_page.php">4 strunové</a>
                        <a href="../pages/filters_page.php">5 strunové</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion_color">
                <h1 class="accordion-header">
                    <button class="accordion-button collapsed accordion_color border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Iné strunové nástroje
                    </button>
                </h1>
                <div id="flush-collapseThree" class="accordion-collapse collapse bg-dark" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column">
                        <a href="../pages/filters_page.php">ukulele</a>
                        <a href="../pages/filters_page.php">banjo</a>
                        <a href="../pages/filters_page.php">mandolína</a>
                        <a href="../pages/filters_page.php">kora</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion_color">
                <h1 class="accordion-header">
                    <a href="../pages/filters_page.php">
                        <button class="accordion-button collapsed accordion_color border-0" type="button">
                            Reproduktory a kombá
                        </button>
                    </a>
            </div>
            <div class="accordion-item accordion_color">
                <a href="../pages/filters_page.php">
                    <button class="accordion-button collapsed accordion_color border-0" type="button">
                        Príslušenstvo
                    </button>
                </a>
            </div>
            <div class="accordion-item accordion_color">
                <a href="../pages/filters_page.php">
                    <button class="accordion-button collapsed accordion_color" type="button">
                        Platne
                    </button>
                </a>
            </div>
        </div>
    </div>



    <!--toggler na malu obrazovku -->
    <button class="navbar-toggler menu-custom" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="../images/menu.svg" alt="" height="35">
    </button>



    <!--ked je velka obrazovka -->
    <div class="category-scroll row d-none d-md-flex w-100">
        <div class="m-0 col-2 d-flex flex-column position-relative">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#gitaryCollapse" class="d-flex flex-column">
                <img src="../images/git.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0">GITARY</p>
            </a>
            <ul id="gitaryCollapse" class="collapse position-absolute w-100 mt-2 bg-white rounded dropdown-custom">
                <li><a href="../pages/filters_page.php">elektrické</a></li>
                <li><a href="../pages/filters_page.php">elektro-akustické</a></li>
                <li><a href="../pages/filters_page.php">akustické</a></li>
                <li><a href="../pages/filters_page.php">klasické</a></li>
                <li><a href="../pages/filters_page.php">detské</a></li>
            </ul>
        </div>

        <div class="m-0 col-2 d-flex flex-column  position-relative">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#basgitaryCollapse" class="d-flex flex-column">
                <img src="../images/bass.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">BASGITARY</p>
            </a>
            <ul id="basgitaryCollapse" class="collapse position-absolute w-100 mt-2 bg-white rounded dropdown-custom">
                <li><a href="../pages/filters_page.php">4 strunové</a></li>
                <li><a href="../pages/filters_page.php">5 strunové</a></li>
            </ul>
        </div>

        <div class="m-0 col-2 d-flex flex-column position-relative">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#ineStrunyCollapse" class="d-flex flex-column">
                <img src="../images/banjo.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">INÉ STRUNY</p>
            </a>
            <ul id="ineStrunyCollapse" class="collapse position-absolute w-100 mt-2 bg-white rounded dropdown-custom">
                <li><a href="../pages/filters_page.php">ukulele</a></li>
                <li><a href="../pages/filters_page.php">banjo</a></li>
                <li><a href="../pages/filters_page.php">mandolína</a></li>
                <li><a href="../pages/filters_page.php">kora</a></li>
            </ul>
        </div>

        <div class="m-0 col-2 d-flex flex-column">
            <a href="../pages/filters_page.php" class="d-flex flex-column">
                <img src="../images/kombo.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">KOMBÁ</p>
            </a>
        </div>

        <div class="m-0 col-2 d-flex flex-column">
            <a href="../pages/filters_page.php" class="d-flex flex-column">
                <img src="../images/kabel.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">PRÍSLUŠENSTVO</p>
            </a>
        </div>

        <div class="m-0 col-2 d-flex flex-column">
            <a href="../pages/filters_page.php" class="d-flex flex-column">
                <img src="../images/platna.svg" alt="gitary" height="70" class="d-none d-md-block">
                <p class="m-0  ">PLATNE</p>
            </a>
        </div>
    </div>
    <script src="../javaScript/category_scroll.js"></script>
</div>