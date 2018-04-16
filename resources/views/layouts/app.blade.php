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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('components/slick/slick.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">
</head>
<body class="no-transition">
<header id="hat">
    <menu id="menu" class="wp">
        <a href="/" class="menu__item">главная</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#stuff" class="menu__item">о садике</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#stuff" class="menu__item">события</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#mentors" class="menu__item">педагоги</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#albums" class="menu__item">галерея</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#callback" class="menu__item">отзывы</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#contacts" class="menu__item">контакты</a>
    </menu>

    <div class="hat__item wp">
        <div id="slider" class="hat__sub-item">
            <?php
            $slides = App\Slide::orderBy('id', 'DESC')->get();
            ?>
            @foreach($slides as $slide)
                <div class="slider__item"
                     style="background-image: url('{{asset('img/slider/'.$slide['img'])}}')"></div>
            @endforeach
        </div>
        <form id="callback-form" class="hat__sub-item" method="POST" action="">
            <h2 class="title">запишитесь на приём</h2>
            <div class="form__group">
                <div class="field-title">Дата рождения ребёнка</div>
                <input type="text" name="birthdate">
            </div>
            <div class="form__group">
                <div class="field-title">Ф.И.О. заявителя</div>
                <input type="text" name="name">
            </div>
            <div class="form__group">
                <div class="field-title">Телефон заявителя</div>
                <input type="text" name="call">
            </div>
            <button>Отправить</button>
        </form>

    </div>
</header>

@yield('content')

<section id="contacts">
    <div class="wp">
        <div class="mail_icon">
            <img src="{{ asset('img/mail_icon.png') }}" alt="">
        </div>
        <div class="contacts__item contacts__callback">
            <h2 class="title">у вас есть вопросы?</h2>
            <h3 class="title">напиште нам</h3>

            <form action="{{ route('callback') }}" method="POST" class="contacts__form">
                {{ csrf_field() }}
                <div>
                    <div class="form__group">
                        <div class="field-title">Ф.И.О.</div>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form__group">
                        <div class="field-title">Ваш E-mail</div>
                        <input type="email" name="email" required>
                    </div>
                </div>
                <div>
                    <div class="form__group">
                        <div class="field-title">Ваш отзыв</div>
                        <textarea name="comment" required></textarea>
                    </div>
                    <button>Отправить</button>
                </div>
            </form>
        </div>

        <div class="contacts__item">
            <h2 class="title">контакты</h2>
            <div class="contacts__info">
                <img src="{{ asset('img/geo_icon.png') }}" alt="">
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, totam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, totam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, totam?
                </div>
            </div>
            <div class="contacts__info">
                <img src="{{ asset('img/call_icon.png') }}" alt="">
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, totam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, totam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, totam?
                </div>
            </div>
        </div>
    </div>
</section>

<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.5114967003638!2d49.174819215932445!3d55.80171998056637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415eb2821ae12973%3A0xb7064b3d52be5316!2z0YPQuy4g0JPQsNC70LXQtdCy0LAsIDPQkCwg0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjAwNjE!5e0!3m2!1sru!2sru!4v1523809992347"
            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

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
            arrows: false,
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
