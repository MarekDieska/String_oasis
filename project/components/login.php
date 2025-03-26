<script type="text/javascript" src="../javaScript/change_user_icon.js"></script>

<div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="LoginForm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content login-form-color">
            <div class="modal-body">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="form-area login-form-color">
                    <h1 class="text-center login-form-label">Prihlásenie</h1>
                    <form>
                        <div class="input-group mb-2 mt-2">
                            <label for="Name" class="form-label"></label>
                            <input type="text" class="form-control" id="Name" aria-describedby="Name" placeholder="Meno">
                            <label for="Surname" class="form-label">&nbsp;&nbsp;</label>
                            <input type="text" class="form-control" id="Surname" aria-describedby="Name" placeholder="Priezvisko">
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="Email" class="form-label login-form-label">Email</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <label for="Password" class="form-label login-form-label">Heslo</label>
                            <input type="password" class="form-control" id="Password" aria-describedby="Password" placeholder="Heslo">
                            <p><a href="#" class="login-form-label link-light">Zabudol si heslo?</a></p>
                        </div>
                        <button id="loginButton" type="submit" class="btn text-black bg-white w-100 mt-5 mb-2">LOGIN</button>
                        <p><a href="#" class="login-form-label link-light justify-content-center d-flex">Registrácia</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Odhlásenie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Naozaj sa chcete odhlásiť?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrušiť</button>
                <button type="button" class="btn btn-primary" id="logoutButton">Odhlásiť sa</button>
            </div>
        </div>
    </div>
</div>

