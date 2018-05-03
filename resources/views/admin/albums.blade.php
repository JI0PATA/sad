@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addAlbum') }}">Добавить альбом</a>
    </div>
    <div class="albums__items wp">
        @foreach($albums as $album)
            <div class="albums__item">
                <a href="{{ route('user.photosInAlbum', ['id' => $album['id']]) }}">
                    <div class="album__title">{{ $album['title'] }}</div>
                    <div class="album__preview" style="background-image: url('{{ asset('img/albums/'.$album['img']) }}')">
                        <div class="view-hidden">посмотреть</div>
                    </div>
                </a>
                <div>
                    <a href="{{ route('photosInAlbum', ['id' => $album['id']]) }}">Обзор</a><br>
                    <a href="{{ route('editAlbum', ['id' => $album['id']]) }}">Редактировать</a><br>
                    <a href="{{ route('deleteAlbum', ['id' => $album['id']]) }}">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection