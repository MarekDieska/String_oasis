<div class="container-fluid m-0">
    <div class="row d-flex justify-content-between align-items-center w-100">

        <div class="col-md-4 col-6 d-flex align-items-center">
            <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center m-0 p-0">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="60">
                <p class="mb-0 p-0 ms-2 fs-3 logo-p">String<br>Oasis</p>
            </a>
        </div>

        <div class="col-md-4 d-none d-md-flex flex-column align-items-center">
            <form action="{{ route('filters_page') }}" method="GET" class="w-100">
                <input type="hidden" name="sub" value="0">
                <label class="search w-100">
                    <input type="text" name="q" placeholder="Hľadať podľa názvu..." class="form-control input-custom rounded-pill border-0" value="{{ request('q') }}">
                </label>
            </form>
            <ul class="navbar-nav d-flex list-unstyled mt-2 mb-0 fs-6">
                <li class="nav item ms-3"><a class="link-custom" href="#">Mapa</a></li>
                <li class="nav item ms-3"><a class="link-custom" href="#">FAQ</a></li>
                <li class="nav item ms-3"><a class="link-custom" href="#">Reklamácie</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-6 d-flex justify-content-end align-items-center">
            <ul class="d-flex list-unstyled fs-3 m-0 justify-content-end">
                <li class="marg-bug"><a href="{{ route('cart_page') }}"><i class="link-custom text_color fa fa-cart-shopping"></i></a></li>
                @guest
                    <li class="marg-bug">
                        <i class="link-custom text_color fa-regular fa-user" data-bs-toggle="modal" data-bs-target="#login_form"></i>
                    </li>
                @endguest

                @auth
                    <li class="marg-bug dropdown">
                        <a class="link-custom text_color dropdown-toggle fs-3" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="userDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item">Odhlásiť sa</button>
                                </form>
                            </li>
                            @if (Auth::user() && Auth::user()->hasRole('admin'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin') }}">Admin</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endauth
                <li class="marg-bug"><i class="link-custom text_color fa-regular fa-heart"></i></li>
            </ul>
        </div>

    </div>
</div>
