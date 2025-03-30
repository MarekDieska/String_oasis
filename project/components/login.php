<script type="text/javascript" src="../javaScript/change_user_icon.js"></script>

<div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="LoginForm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content login-form-color">
            <div class="modal-body">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="form-area login-form-color">
                    <h1 class="text-center login-form-label">Účet</h1>
                    <form>
                        <div class="input-group mb-2 mt-2">
                            <label for="Name" class="form-label"></label>
                            <input type="text" class="form-control d-none" id="Name" aria-describedby="Name" placeholder="Meno">
                            <label for="Surname" class="form-label">&nbsp;&nbsp;</label>
                            <input type="text" class="form-control d-none" id="Surname" aria-describedby="Name" placeholder="Priezvisko">
                        </div>
                        <div id="siteInfo">
                            <div class="mb-2 mt-2">
                                <label for="Email" class="form-label login-form-label">Email</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Email">
                            </div>
                            <div class="mb-2">
                                <label for="Password" class="form-label login-form-label">Heslo</label>
                                <input type="password" class="form-control" id="Password" aria-describedby="Password" placeholder="Heslo">
                                <p><a href="#" class="login-form-label link-light" id="pass_rec">Zabudol si heslo?</a></p>
                            </div>
                        </div>
                        <button id="loginButton" type="submit" class="btn text-black bg-white w-100 mt-5 mb-2">LOGIN</button>
                        <a type="button" href="../pages/admin_add.php" class="btn text-black bg-primary-subtle w-100 mb-2 d-none" id="adminButton">Stránka pre admina</a>
                        <button type="button" class="btn text-black bg-white w-100 mb-2 d-none" id="logoutButton">Odhlásiť sa</button>
                        <p><a class="login-form-label link-light justify-content-center d-flex" id="registerButton">Registrácia</a></p>
                        <p><a class="btn text-black bg-white w-100 mb-2 d-none" id="finishRegister">Registrovať</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

