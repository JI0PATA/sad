{{ config(['app.name' => 'Главная страница']) }}

@extends('layouts.app')

@section('slider')
    <div class="hat__item wp">
        <div id="slider" class="hat__sub-item">
            <?php
            $slides = App\Slide::orderBy('id', 'DESC')->get();
            ?>
            @foreach($slides as $slide)
                <div class="slider__item"
                     style="background-image: url('{{asset('img/slider/'.$slide['img'])}}')">
                    <div class="slide__description">
                        {!! $slide['description'] !!}
                    </div>
                </div>
            @endforeach
        </div>
        <form id="callback-form" class="hat__sub-item" method="POST" action="{{ route('subscribe') }}">
            {{ csrf_field() }}
            <h2 class="title">запишитесь на приём</h2>
            <div class="form__group">
                <div class="field-title">Дата рождения ребёнка</div>
                <input type="text" name="birthdate" required maxlength="10" title="Дата рождения: дд/мм/гггг" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}">
            </div>
            <div class="form__group">
                <div class="field-title">Ф.И.О. заявителя</div>
                <input type="text" name="name" pattern="^[А-Яа-яЁё\s]+$" title="ФИО" maxlength="40" required>
            </div>
            <div class="form__group">
                <div class="field-title">Телефон заявителя</div>
                <input type="tel" name="call" maxlength="11" title="Номер телефона (11 цифр)" required pattern="[0-9]{11}">
            </div>
            <button>Отправить</button>
        </form>

    </div>
@endsection

@section('content')

    <section id="stuff" class="wp">
        <div class="half_item">
            <div class="top">
                <div class="line"></div>
                <div class="circle">
                    <img src="{{ asset('img/duck_icon.png') }}" alt="">
                </div>
            </div>
            <div class="text">
                Наш детский сад - не просто сад в привычном для всех понимании. Это своего рода комплексный центр
                развития Вашего чада.

                Самое главное - безграничная любовь наших педагогов к детям и преданность своей профессии, вот в чем
                секрет успеха детского сада!
                <br><br>
                <div class="hor-left">
                    <a href="{{ route('about') }}" class="btn btn-primary">Подробнее...</a>
                </div>
            </div>
        </div>
        <div class="half_item">
            <div class="top">
                <div class="line"></div>
                <div class="circle">
                    <img src="{{ asset('img/list_icon.png') }}" alt="">
                </div>
            </div>
            <div class="text">
                <a href="{{ route('licenses') }}" class="btn btn-primary">Лицензии</a><br><br>
                <a href="{{ route('documents') }}" class="btn btn-primary">Документы</a>
            </div>
        </div>
        <div class="full_item" id="news">
            <div class="top">
                <div class="line"></div>
                <div class="circle">
                    <img src="{{ asset('img/clock_icon.png') }}" alt="">
                </div>
            </div>
            <div class="text">
                {!! $news['description'] !!}
            </div>
            <a href="{{ route('getNews') }}" class="btn btn-primary">Все новости</a>
        </div>
    </section>

    <section id="mentors">
        <div class="hor-center">
            <h2 class="title">воспитатели</h2>
        </div>
        <div class="list__items wp">
            @foreach($mentors as $mentor)
                <div class="list__item">
                    <div class="item__photo">
                        <img src="{{ asset('img/mentors/'.$mentor['img']) }}" alt="">
                    </div>
                    <div class="item__info">
                        <p>{{ $mentor['name'] }}</p>
                        <p>Должность: {{ $mentor['position'] }}</p>
                        <p>Стаж: {{ $mentor['experience'] }}</p>
                        <p>Образование: {{ $mentor['education'] }}</p>
                        <p>Грамоты: {{ $mentor['merit'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="wp">
            <a href="{{ route('allMentors') }}" class="btn btn-primary">Все воспитатели</a>
        </div>
    </section>

    <section id="albums" class="wp">
        <div class="top yellow">
            <div class="line"></div>
            <div class="circle">
                <img src="{{ asset('img/photo_icon.png') }}" alt="">
            </div>
        </div>
        <div class="albums__items">
            @foreach($albums as $album)
                <a href="{{ route('user.photosInAlbum', ['id' => $album['id']]) }}" class="albums__item">
                    <div class="album__title">{{ $album['title'] }}</div>
                    <div class="album__preview"
                         style="background-image: url('{{ asset('img/albums/'.$album['img']) }}')">
                        <div class="view-hidden">посмотреть</div>
                    </div>
                </a>
            @endforeach
        </div>
        <br><br>
        <a href="{{ route('user.albums') }}" class="btn btn-primary">Все альбомы</a>
    </section>

    <section id="callback" class="wp">
        <div class="top yellow">
            <div class="line"></div>
            <div class="circle">
                <img src="{{ asset('img/callback_icon.png') }}" alt="">
            </div>
        </div>
        <div class="callback__items">
            @foreach($reviews as $review)
                <div class="callback__item">
                    <div class="callback__name">{{ $review['name'] }}</div>
                    <div class="callback__comment">
                        {{ $review['comment'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <br><br>
        <a href="{{ route('user.reviews') }}" class="btn btn-primary">Все отзывы</a>
    </section>
@endsection