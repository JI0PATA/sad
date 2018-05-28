@extends('layouts.app')

@section('content')

    <div class="hor-center wp">
        <h2 class="title">{{ $album['title'] }}</h2>
    </div>
    <div class="albums__items wp">
        @foreach($photos as $photo)
            <div class="albums__item">
                <div class="album__preview">
                    <a href="{{ asset('img/albums/photos/'.$photo['img']) }}" data-lightbox="album">
                        <img src="{{ asset('img/albums/photos/'.$photo['img']) }}" alt="">
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection