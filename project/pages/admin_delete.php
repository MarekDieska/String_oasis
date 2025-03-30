<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../javaScript/change_user_icon.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/category.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/main_filter.css">
    <link href="../fonts/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../fonts/fontawesome/css/solid.css" rel="stylesheet" />
    <link href="../fonts/fontawesome/css/regular.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <script src="../javaScript/animate.js"></script>
</head>
<body class="bg-dark">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    <?php include "../components/header.php" ?>
</header>

<main class="container-fluid" style="padding-top: 50px">
    <?php include "../components/delete.php"?>
</main>

<footer style="margin-top: 0;">
    <?php include "../components/footer.php"?>
</footer>
</body>

<?php include "../components/login.php" ?>
</html>