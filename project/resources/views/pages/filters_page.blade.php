<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('fonts/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/regular.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body class="bg-dark">

<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    @include('components.header')
</header>

<nav class="navbar navbar-expand-md category-custom w-100 fixed-top">
    @include('components.category')
</nav>

<main class="main-p-custom" style="margin-top: 140px">
    <div class="d-flex flex-row">
        <button class="btn btn-danger rounded-pill d-block d-md-none position-fixed end-0 mt-4 ms-2 me-1 float-filter-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <img src="{{ asset('images/filter.svg') }}" alt="" width="25">
        </button>

        <div class="d-none d-md-flex line-custom">
            @include('components.main_filter', ['isOffcanvas' => false])
        </div>

        <div class="offcanvas offcanvas-start off-custom overflow-auto p-3 pt-5 pb-5 bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            @include('components.main_filter', ['isOffcanvas' => true])
        </div>

        @include('components.main_filter_r')
    </div>
</main>

<footer>
    @include('components.footer')
</footer>

@include('components.login')

</body>
</html>
