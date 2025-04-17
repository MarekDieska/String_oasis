<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/change_user_icon.js"></script>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/category.css">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/main_filter.css">
    <link href="../../../public/fonts/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../../../public/fonts/fontawesome/css/solid.css" rel="stylesheet" />
    <link href="../../../public/fonts/fontawesome/css/regular.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="../../../public/images/favicon.ico">
    <script src="../../js/animate.js"></script>
</head>
<body class="bg-dark">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    <?php include "../components/header.blade.php" ?>
</header>

<main class="container-fluid" style="padding-top: 50px">
    <?php include "../components/edit.blade.php" ?>
</main>

<footer style="margin-top: 0;">
    <?php include "../components/footer.blade.php" ?>
</footer>
</body>

<?php include "../components/login.blade.php" ?>
</html>
