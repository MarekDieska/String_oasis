<!DOCTYPE html>
<html lang = sk>
    <head>
        <title>String Oasis</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/filter_style.css">
        <link rel="stylesheet" href="../styles/products_style.css">
    </head>
    <body>
        <header>
            <?php include "../components/header.php" ?>
        </header>

        <main>
            <aside class = "filter">
                <?php include "../components/filter.php" ?>
            </aside>
            <article class = "products">
                <?php include "../components/products.php" ?>
            </article>
        </main>

        <footer class = "foot">
            <p>--Info on nas</p>
        </footer>
    </body>
</html>