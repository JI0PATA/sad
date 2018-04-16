@extends('layouts.app')

@section('content')

    <div class="hor-center wp">
        <h2 class="title">{{ $album['title'] }}</h2>
    </div>
    <div class="albums__items wp">
        @foreach($photos as $photo)
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/photos/'.$photo['img']) }}" alt="">
                </div>
            </div>
        @endforeach
    </div>

@endsection