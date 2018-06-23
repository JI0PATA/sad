@extends('layouts.admin')

@section('content')
    <form action="{{ route('updateNews', ['id' => $news['id']]) }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <img src="{{ asset('img/news/'.$news['img']) }}" alt="">
        <div class="form-group">
            <label for="inputEmail">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file">
        </div>
        <div class="form-group">
            <label for="inputPassword">Заголовок</label>
            <input value="{{ $news['title'] }}" type="text" class="form-control" placeholder="Заголовок" name="title" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Описание</label>
            <textarea name="description" id="textarea">{{ $news['description'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-dark">Сохранить</button>
    </form>
@endsection