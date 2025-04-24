<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" media="all">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

</head>
<body class="bg-dark" data-user="@auth auth @else guest @endauth" data-status="{{ session('status') }}">
<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    @include("../components/header")
</header>

<div class="filler-custom"></div>

<nav class="navbar navbar-expand-md category-custom fixed-top {{ Route::currentRouteName() === 'index' ? 'sticky-md-top' : '' }}">
    @include('components.category')
</nav>

<main class="container-fluid">
    @yield('content')
</main>

<footer style="margin-top: {{ in_array(Route::currentRouteName(), ['cart_page', 'cart_page2','cart_page3', 'cart_page4', 'cart_page5']) ? '0' : '100px' }};">
    @include('components.footer')
</footer>

@include('components.login')
</body>
</html>
