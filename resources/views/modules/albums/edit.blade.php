@extends('layouts.admin')

@section('content')
    <form action="{{ route('updateAlbum', ['id' => $album['id']]) }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <img src="{{ asset('img/albums/'.$album['img']) }}" alt="">
        <div class="form-group">
            <label for="inputEmail">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file">
        </div>
        <div class="form-group">
            <label for="inputPassword">Название</label>
            <input value="{{ $album['title'] }}" type="text" class="form-control" placeholder="Название" name="title" required>
        </div>
        <button type="submit" class="btn btn-dark">Сохранить</button>
    </form>
@endsection