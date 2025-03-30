<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Song Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="../fonts/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../fonts/fontawesome/css/solid.css" rel="stylesheet" />
    <link href="../fonts/fontawesome/css/regular.css" rel="stylesheet"/>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/category.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/main_filter.css">
    <link rel="stylesheet" href="../styles/main.css">
    <script src="../javaScript/animate.js"></script>
</head>
<body class="bg-dark">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    <?php include "../components/header.php" ?>
</header>

<nav class="navbar navbar-expand-md category-custom w-100 fixed-top">
    <?php include "../components/category.php" ?>
</nav>

<main class="main-p-custom" style="margin-top: 140px">
    <div class="d-flex flex-row">
        <button class="btn btn-danger rounded-pill d-block position-fixed end-0 mt-4 ms-2 me-1 float-filter-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <img src="../images/filter.svg" alt="" width="25">
        </button>


        <div class="d-none d-md-flex line-custom">
            <?php include "../components/radio_desc.php";?>
        </div>

        <div class="offcanvas offcanvas-start off-custom overflow-auto p-3 pt-5 pb-5 bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <?php include "../components/main_filter.php";?>
        </div>

        <?php include "../components/main_filter_r.php"?>

    </div>
</main>

<footer>
    <?php include "../components/footer.php"?>
</footer>
</body>

<?php include "../components/login.php" ?>
</html>