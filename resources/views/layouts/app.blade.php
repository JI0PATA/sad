{{ config(['app.name' => 'Детский сад "Березка"']) }}

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
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('components/slick/slick.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">

    <script src="{{ asset('components/lightbox/js/lightbox.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('components/lightbox/css/lightbox.css') }}">
</head>
<body class="no-transition">

@if(\Session::has('popup_msg'))
    {!! \Session::get('popup_msg') !!}
@endif

<header id="hat">
    <input type="checkbox" class="hidden" id="menu_mobile">
    <label class="san-menu" for="menu_mobile">
        <div></div>
        <div></div>
        <div></div>
    </label>
    <menu id="menu" class="wp">
        <label for="menu_mobile" class="close">X</label>

        <a href="/" class="menu__item">главная</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#stuff" class="menu__item">о нас</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#news" class="menu__item">новости</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#mentors" class="menu__item">воспитатели</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#albums" class="menu__item">галерея</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#callback" class="menu__item">отзывы</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#contacts" class="menu__item">контакты</a>
    </menu>

    @yield('slider')
</header>

@yield('content')

<section id="contacts">
    <div class="wp">
        <div class="mail_icon">
            <img src="{{ asset('img/mail_icon.png') }}" alt="">
        </div>
        <div class="contacts__item contacts__callback">
            <h2 class="title">у вас есть вопросы?</h2>
            <h3 class="title">напишите нам</h3>

            <form action="{{ route('callback') }}" method="POST" class="contacts__form">
                {{ csrf_field() }}
                <div>
                    <div class="form__group">
                        <div class="field-title">Ф.И.О</div>
                        <input type="text" placeholder="ФИО" name="name" required pattern="^[А-Яа-яЁё\s]+$" title="ФИО"
                               maxlength="30">
                    </div>
                    <div class="form__group">
                        <div class="field-title">Ваш E-mail</div>
                        <input type="email" placeholder="E-mail" name="email" required>
                    </div>
                </div>
                <br>
                <div>
                    <div class="form__group">
                        <div>
                            <select name="type" title="Тип отзыва">
                                <option value="0">Вопрос</option>
                                <option value="1">Отзыв</option>
                            </select>
                        </div>
                        <br>
                        <textarea name="comment" required title="" placeholder="Комментарий"></textarea>
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
                    Адрес:422870, Республика Татарстан, Алькеевский район, с. Базарные Матаки, ул. Школьная, д. 11
                </div>
            </div>
            <div class="contacts__info">
                <img src="{{ asset('img/call_icon.png') }}" alt="">
                <div>
                    Телефон: +7(843)-462-08-29; <br>+7(843)-462-08-30<br>
                    EMail:Berezka.Alk@tatar.ru
                </div>
            </div>
        </div>
    </div>
</section>

<div id="map">
    <iframe src="https://yandex.ru/map-widget/v1/-/CBqdiOUTcD" width="100%" height="500" frameborder="0"
            allowfullscreen="true"></iframe>
</div>

<footer>
    2017 - 2018. Все права защищены.<br><br>
    Сайт разработан<br><a href="mailto:lenarkaaa12345@gmail.com">Ленаром Сулеймановым</a>
</footer>

<script>
    $(document).ready(function () {
        $('.no-transition').removeClass('no-transition');

        $('#slider').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            accessibility: false,
        });

        var stHeight = $('.slide__description').height();
        $('#slider').css('height', stHeight + 'px');

        $('#menu a').on('click', _ => {
            if ($('#menu_mobile').prop('checked')) {
                $('#menu_mobile').prop('checked', false);
            }
        });

        $("a[href^='#']").on("click", function (event) {
            event.preventDefault();
            let id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top - 100}, 1500);
        });

        let url = location.href;
        let anchor = url.substring(url.indexOf("#") + 1);

        if (anchor.length !== 0) {
            $(document).scrollTop(0);
            let top = $(`#${anchor}`).offset().top;
            $('body,html').animate({scrollTop: top - 100}, 1500);
        }


    });
</script>
</body>
</html>
