<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../../../public/fonts/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../../../public/fonts/fontawesome/css/solid.css" rel="stylesheet" />
    <link href="../../../public/fonts/fontawesome/css/regular.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/category.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/main_filter.css">
    <link rel="icon" type="image/x-icon" href="../../../public/images/favicon.ico">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <script src="../../js/animate.js"></script>
</head>
<body class="bg-dark">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    <?php include "../components/header.blade.php" ?>
</header>

<nav class="navbar navbar-expand-md category-custom w-100 fixed-top">
    <?php include "../components/category.blade.php" ?>
</nav>

<main class="main-p-custom" style="margin-top: 140px">
    <div class="d-flex flex-row">
        <button class="btn btn-danger rounded-pill d-block d-md-none position-fixed end-0 mt-4 ms-2 me-1 float-filter-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <img src="../../../public/images/filter.svg" alt="" width="25">
        </button>


        <div class="d-none d-md-flex line-custom">
            <?php include "../components/radio_desc.blade.php";?>
        </div>

        <div class="offcanvas offcanvas-start off-custom overflow-auto p-3 pt-5 pb-5 bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <?php include "../components/main_filter.blade.php";?>
        </div>

        <?php include "../components/main_filter_r.blade.php" ?>

    </div>
</main>

<footer>
    <?php include "../components/footer.blade.php" ?>
</footer>
</body>

<?php include "../components/login.blade.php" ?>
</html>
