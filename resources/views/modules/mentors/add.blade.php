@extends('layouts.admin')

@section('content')
    <form action="{{ route('createMentor') }}" method="POST" enctype="multipart/form-data" class="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputEmail">Картинка</label>
            <input type="file" class="form-control" placeholder="Введите email" name="file" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">ФИО</label>
            <input type="text" class="form-control" placeholder="ФИО" name="name" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Должность</label>
            <input type="text" class="form-control" placeholder="Должность" name="position" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Опыт</label>
            <input type="text" class="form-control" placeholder="Опыт" name="experience" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Образование</label>
            <input type="text" class="form-control" placeholder="Образование" name="education" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Достижения</label>
            <input type="text" class="form-control" placeholder="Достижения" name="merit" required>
        </div>
        <button type="submit" class="btn btn-dark">Добавить</button>
    </form>
@endsection