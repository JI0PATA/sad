@extends('layouts.admin')

@section('content')
    <form action="{{ route('updateSlide', ['id' => $slide['id']]) }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <img src="{{ asset('img/slider/'.$slide['img']) }}" alt="">
        <div class="form-group">
            <label for="inputEmail">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file" required>
        </div>
        <button type="submit" class="btn btn-dark">Сохранить</button>
    </form>
@endsection