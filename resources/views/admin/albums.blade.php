@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addAlbum') }}">Добавить альбом</a>
    </div>
    <div class="albums__items wp">
        @foreach($albums as $album)
            <a href="{{ route('user.photosInAlbum', ['id' => $album['id']]) }}" class="albums__item">
                <div class="album__title">{{ $album['title'] }}</div>
                <div class="album__preview" style="background-image: url({{ asset('img/albums/'.$album['img']) }})">
                    <div class="view-hidden">посмотреть</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection