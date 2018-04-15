@extends('layouts.admin')

@section('content')
    <form action="{{ route('updateMentor', ['id' => $mentor['id']]) }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <img src="{{ asset('img/mentors/'.$mentor['img']) }}" alt="">
        <div class="form-group">
            <label for="inputEmail">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file">
        </div>
        <div class="form-group">
            <label for="inputPassword">ФИО</label>
            <input value="{{ $mentor['name'] }}" type="text" class="form-control" placeholder="ФИО" name="name" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Должность</label>
            <input value="{{ $mentor['position'] }}" type="text" class="form-control" placeholder="Должность" name="position" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Опыт</label>
            <input value="{{ $mentor['experience'] }}" type="text" class="form-control" placeholder="Опыт" name="experience" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Образование</label>
            <input value="{{ $mentor['education'] }}" type="text" class="form-control" placeholder="Образование" name="education" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Достижения</label>
            <input value="{{ $mentor['merit'] }}" type="text" class="form-control" placeholder="Достижения" name="merit" required>
        </div>
        <button type="submit" class="btn btn-dark">Сохранить</button>
    </form>
@endsection