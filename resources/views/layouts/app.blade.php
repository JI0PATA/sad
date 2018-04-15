<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Детский сад') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('components/slick/slick.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">
</head>
<body class="no-transition">

@yield('content')

<footer>
    2004 - 2018. Все вправа защищены
</footer>

<script>
    $(document).ready(function() {
        $('.no-transition').removeClass('no-transition');

        $('#slider').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
        });

        $("a[href^='#']").on("click", function (event) {
            event.preventDefault();
            let id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>
</body>
</html>
