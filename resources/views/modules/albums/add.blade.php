@extends('layouts.admin')

@section('content')
    <form action="{{ route('createAlbum') }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputEmail">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Название</label>
            <input type="text" class="form-control" placeholder="Название" name="title" required>
        </div>
        <button type="submit" class="btn btn-dark">Добавить</button>
    </form>
@endsection