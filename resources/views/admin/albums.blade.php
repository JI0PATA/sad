@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addAlbum') }}">Добавить альбом</a>
    </div>
    <div class="albums__items wp">
        @foreach($albums as $album)
            <div class="albums__item">
                <div class="album__title">{{ $album['title'] }}</div>
                <div class="album__preview">
                    <img src="{{ asset('img/albums/'.$album['img']) }}" alt="">
                </div>
                <a href="{{ route('photosInAlbum', ['id' => $album['id']]) }}">Обзор</a><br>
                <a href="{{ route('editAlbum', ['id' => $album['id']]) }}">Редактировать</a><br>
                <a href="{{ route('deleteAlbum', ['id' => $album['id']]) }}">Удалить</a>
            </div>
        @endforeach
    </div>
@endsection