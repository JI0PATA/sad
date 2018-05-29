@extends('layouts.admin')

@section('content')
    <div class="wp">
        <form action="{{ route('uploadPhotos', ['id' => $album_id]) }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputEmail">Фотографии</label>
                <input type="file" multiple="multiple" accept="image/jpeg,image/png" class="form-control" placeholder="Введите email" name="file[]" required>
            </div>
            <button type="submit" class="btn btn-dark">Добавить фотографии</button>
        </form>
    </div>
    <div class="albums__items wp">
        @foreach($photos as $photo)
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/photos/'.$photo['img']) }}" alt="">
                </div><br>
                <a href="{{ route('deletePhoto', ['id' => $photo['id']]) }}" class="btn btn-danger">Удалить</a>
            </div>
        @endforeach
    </div>
@endsection