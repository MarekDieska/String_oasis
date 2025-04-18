<div class="container-fluid m-0">
    <div class="row d-flex justify-content-between align-items-center w-100">

        <!-- Logo Section -->
        <div class="col-md-4 col-6 d-flex align-items-center">
            <a href="{{ asset('index.blade.php') }}" class="navbar-brand d-flex align-items-center m-0 p-0">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="60">
                <p class="mb-0 p-0 ms-2 fs-3 logo-p">String<br>Oasis</p>
            </a>
        </div>

        <!-- Search and Navigation Links (Visible on Medium and Larger Screens) -->
        <div class="col-md-4 d-none d-md-flex flex-column align-items-center">
            <label class="search w-100">
                <input type="text" placeholder="Hľadať podľa názvu..." class="form-control input-custom rounded-pill border-0">
            </label>
            <ul class="navbar-nav d-flex list-unstyled mt-2 mb-0 fs-6">
                <li class="nav item ms-3"><a class="link-custom" href="#">Mapa</a></li>
                <li class="nav item ms-3"><a class="link-custom" href="#">FAQ</a></li>
                <li class="nav item ms-3"><a class="link-custom" href="#">Reklamácie</a></li>
            </ul>
        </div>

        <!-- Cart, User Icon, and Wishlist (Visible on Small and Medium Screens) -->
        <div class="col-md-4 col-6 d-flex justify-content-end align-items-center">
            <ul class="d-flex list-unstyled fs-3 m-0 justify-content-end">
                <li class="marg-bug"><a href="{{ route('cart_page') }}"><i class="link-custom text_color fa fa-cart-shopping"></i></a></li>
                <li class="marg-bug"><i id="userIcon" class="link-custom text_color fa-regular fa-user" data-bs-toggle="modal" data-bs-target="#login_form"></i></li>
                <li class="marg-bug"><i class="link-custom text_color fa-regular fa-heart"></i></li>
            </ul>
        </div>

    </div>
</div>
