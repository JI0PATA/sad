@extends('layouts.admin')

@section('content')
    <form action="{{ route('createSlide') }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file" required>
        </div>
        <div class="form-group">
            <label for="textarea">Описание</label>
            <textarea name="description" id="textarea"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Добавить</button>
    </form>
@endsection