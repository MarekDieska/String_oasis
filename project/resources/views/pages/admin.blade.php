<!DOCTYPE html>
<html lang="sk">
<head>
    <title>String Oasis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css")}}" rel="stylesheet">
    <script src="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js")}}"></script>

    <script src="{{ asset('js/change_user_icon.js') }}"></script>
    <script src="{{ asset('js/animate.js') }}"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_filter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <link href="{{ asset('fonts/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/regular.css') }}" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body class="bg-dark">

<header class="navbar navbar-expand-md fixed-top shadow header-custom">
    @include('components.header')
</header>

<main class="container-fluid" style="padding-top: 50px;">
    @yield('content')
</main>

<footer style="margin-top: 0;">
    @include('components.footer')
</footer>

@include('components.login')

</body>
</html>
