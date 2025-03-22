<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Song Oasis</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/category.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
    <body>
        <header class="navbar fixed-top header-custom">
            <?php include "../components/header.php" ?>
        </header>

        <nav class="category-custom fixed-top">
            <?php include "../components/category.php" ?>
        </nav>

        <main>
            <?php include "../components/main.php"?>
        </main>

        <footer class="foot">
            <p>--info o nas--</p>
        </footer>

        <script src="../js/bootstrap.bundle.min.js"></script>
    </body>
</html>