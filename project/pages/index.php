<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Song Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/category.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <script src="../javaScript/animate.js"></script>
</head>
    <body>
        <header class="navbar navbar-expand-md fixed-top shadow header-custom">
            <?php include "../components/header.php" ?>
        </header>

        <nav class="navbar navbar-expand-md category-custom w-100 fixed-top">
            <?php include "../components/category.php" ?>
        </nav>

        <main class="container">
            <?php include "../components/main.php"?>
        </main>

        <footer class="foot">
            <p>--info o nas--</p>
        </footer>
    </body>

    <div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="LoginForm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content login-form-color">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="form-area login-form-color">
                        <h1 class="text-center login-form-label">Prihlásenie</h1>
                        <form>
                            <div class="mb-2 mt-2">
                                <label for="exampleInputEmail1" class="form-label login-form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label login-form-label">Heslo</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                                <button type="submit" class="btn bg-white w-100 mt-5 mb-2">LOGIN</button>
                                <p><a href="#" class="login-form-label link-light justify-content-center d-flex">Registrácia</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>