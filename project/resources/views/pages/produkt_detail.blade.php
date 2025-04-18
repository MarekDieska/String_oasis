<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../../../public/fonts/fontawesome/css/fontawesome.css" rel="stylesheet"/>
    <link href="../../../public/fonts/fontawesome/css/solid.css" rel="stylesheet"/>
    <link href="../../../public/fonts/fontawesome/css/regular.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/category.css">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/main_produkt.css">
    <link rel="icon" type="image/x-icon" href="../../../public/images/favicon.ico">
    <script src="../../js/animate.js"></script>
</head>
<body class="bg-dark">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    @include("../components/header")
</header>

<nav class="navbar navbar-expand-md category-custom w-100 fixed-top">
    @include("../components/category")
</nav>

<main class="container-fluid main-f-custom" style="margin: 140px 0 0 0">
    @include("../components/main_detail")
</main>

<footer>
    @include("../components/footer")
</footer>
</body>

    @include("../components/login")
</html>
