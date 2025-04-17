<!DOCTYPE html>
<html lang="sk">
    <head>
        <title>String Oasis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap & Icons -->
        <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css')}}">

        <!-- Local CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/category.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main_filter.css') }}">

        <!-- Fonts & Favicon -->
        <link href="{{ asset('fonts/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
        <link href="{{ asset('fonts/fontawesome/css/solid.css') }}" rel="stylesheet" />
        <link href="{{ asset('fonts/fontawesome/css/regular.css') }}" rel="stylesheet"/>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        <!-- JS -->
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/change_user_icon.js') }}"></script>
        <script src="{{ asset('js/animate.js') }}"></script>
    </head>
    <body class="bg-dark">
    <header class="navbar navbar-expand-md fixed-top shadow header-custom">
        @include('components.header')
    </header>

    <div class="filler-custom"></div>

    <nav class="navbar navbar-expand-md category-custom fixed-top sticky-md-top">
        @include('components.category')
    </nav>

    <main class="container-fluid">
        @include('components.main')
    </main>

    <footer>
        @include('components.footer')
    </footer>

        @include('components.login')
    </body>
</html>
