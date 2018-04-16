@extends('layouts.app')

@section('content')

    <div class="albums__items wp">
        @foreach($albums as $album)
            <a href="{{ route('user.photosInAlbum', ['id' => $album['id']]) }}" class="albums__item">
                <div class="album__title">{{ $album['title'] }}</div>
                <div class="album__preview">
                    <img src="{{ asset('img/albums/'.$album['img']) }}" alt="">
                    <div class="view-hidden">посмотреть</div>
                </div>
            </a>
        @endforeach
    </div>

@endsection