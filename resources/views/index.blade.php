{{ config(['app.name' => 'Главная страница']) }}

@extends('layouts.app')

@section('content')
    <header id="hat">
        <menu id="menu" class="wp">
            <a href="#hat" class="menu__item">главная</a>
            <a href="#stuff" class="menu__item">о садике</a>
            <a href="#stuff" class="menu__item">события</a>
            <a href="#mentors" class="menu__item">педагоги</a>
            <a href="#albums" class="menu__item">галерея</a>
            <a href="#callback" class="menu__item">отзывы</a>
            <a href="#contacts" class="menu__item">контакты</a>
        </menu>

        <div class="hat__item wp">
            <div id="slider" class="hat__sub-item">
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

    <section id="stuff" class="wp">
        <div class="half_item">
            <div class="top">
                <div class="line"></div>
                <div class="circle">
                    <img src="{{ asset('img/duck_icon.png') }}" alt="">
                </div>
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque laudantium minus nam
                perspiciatis quam quidem, reprehenderit suscipit temporibus voluptas.
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque laudantium minus nam
                perspiciatis quam quidem, reprehenderit suscipit temporibus voluptas.
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
            <a href="{{ route('getNews') }}">Все новости</a>
        </div>
    </section>

    <section id="mentors">
        <div class="hor-center">
            <h2 class="title">наставники</h2>
        </div>
        <div class="list__items wp">
            @foreach($mentors as $mentor)
            <div class="list__item">
                <div class="item__photo">
                    <img src="{{ asset('img/mentors/'.$mentor['img']) }}" alt="">
                </div>
                <div class="item__info">
                    <p>{{ $mentor['position'] }}</p>
                    <p>{{ $mentor['experience'] }}</p>
                    <p>{{ $mentor['education'] }}</p>
                    <p>{{ $mentor['merit'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="wp">
            <a href="">Все воспитатели</a>
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
                <a href="" class="albums__item">
                    <div class="album__title">{{ $album['title'] }}</div>
                    <div class="album__preview">
                        <img src="{{ asset('img/albums/'.$album['img']) }}" alt="">
                    </div>
                </a>
            @endforeach
        </div><br><br>
        <a href="">Все альбомы</a>
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
        </div><br><br>
        <a href="">Все отзывы</a>
    </section>

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
                    <img src="{{ asset('img/geo_icon.png') }}" alt="">
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
@endsection