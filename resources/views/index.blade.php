{{ config(['app.name' => 'Главная страница']) }}

@extends('layouts.app')

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
                Наш детский садик - не просто сад в привычном для всех понимании. Это своего рода комплексный центр
                развития Вашего чада.

                Самое главное - безграничная любовь наших педагогов к детям и преданность своей профессии, вот в чем
                секрет успеха детского садика!
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
                <a href="{{ route('licenses') }}">Лицензии</a><br>
                <a href="{{ route('documents') }}">Документы</a>
            </div>
        </div>
        <div class="full_item">
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