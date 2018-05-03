@extends('layouts.app')

@section('content')
    <section class="page wp">
        <div class="hor-center">
            <h1 class="title">документы</h1>
        </div>
        <div class="page__description">
            <a href="{{ asset('documents/2-kh_ned_menyu.xls') }}" download>2-х недельное меню</a><br>
            <a href="{{ asset('documents/raspisanie_na_2017-18_g_1.pdf') }}" download>Расписание на 2017-18 гг.</a><br>
            <a href="{{ asset('documents/Ustav_2015_Berezka.pdf') }}" download>Устав 2015 Березка</a><br>
        </div>
        <div class="albums__items wp">
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/album1.png') }}" alt="">
                </div>
            </div>
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/album2.png') }}" alt="">
                </div>
            </div>
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/album3.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection