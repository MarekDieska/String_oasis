<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Song Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../javaScript/change_user_icon.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/category.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/main_cart.css">
    <link href="../fonts/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../fonts/fontawesome/css/solid.css" rel="stylesheet" />
    <link href="../fonts/fontawesome/css/regular.css" rel="stylesheet" />
    <script src="../javaScript/animate.js"></script>
</head>
<body class="bg-dark">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    <?php include "../components/header.php" ?>
</header>

<nav class="navbar navbar-expand-md category-custom w-100 fixed-top">
    <?php include "../components/category.php" ?>
</nav>

<main class="container-fluid" style="margin-top: 140px">
    <?php include "../components/main_cart_2.php"?>
</main>

<footer>
    <?php include "../components/footer.php"?>
</footer>
</body>

<?php include "../components/login.php" ?>
</html>
