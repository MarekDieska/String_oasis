<!DOCTYPE html>
<html lang = sk>
    <head>
        <title>String Oasis</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/selected_category_style.css">
    </head>
    <body>
        <header>
            <?php include "../components/header.php" ?>
        </header>

        <main>
            <aside class = "filter">
                <h3>Filter</h3>
            </aside>
            <article class = "products">
                <?php include "../components/product.php" ?>
            </article>
        </main>

        <footer class = "foot">
            <p>--Info on nas</p>
        </footer>
    </body>
</html>