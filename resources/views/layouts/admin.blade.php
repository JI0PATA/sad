<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Админ-панель') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('components/ckeditor/ckeditor.js') }}"></script>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/admin') }}">
            Админ-панель
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                @if(\Request::session()->has('admin'))
                    <li><a href="{{ route('admin') }}" class="nav-link" href="">{{ __('Главная') }}</a></li>
                    <li><a href="{{ route('mentors') }}" class="nav-link" href="">{{ __('Наставники') }}</a></li>
                    <li><a href="{{ route('news') }}" class="nav-link" href="">{{ __('Новости') }}</a></li>
                    <li><a href="{{ route('reviews') }}" class="nav-link" href="">{{ __('Отзывы') }}</a></li>
                    <li><a href="{{ route('albums') }}" class="nav-link" href="">{{ __('Альбомы') }}</a></li>
                    <li><a href="{{ route('logout') }}" class="nav-link" href="">{{ __('Выйти') }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<script>
    $(document).ready(_ => {
        CKEDITOR.replace('textarea');
    });
</script>


</body>
</html>