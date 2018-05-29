@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addMentor') }}" class="btn btn-primary">Добавить воспитателя</a><br>
        <div class="flex">
            @foreach($mentors as $mentor)
                <div class="slider__item mentors">
                    <div>
                        <img src="{{asset('img/mentors/'.$mentor['img'])}}" alt="">
                    </div><br>
                    <div>
                        <a href="{{ route('editMentor', ['id' => $mentor['id']]) }}" class="btn btn-primary">Редактировать</a>
                        <a href="{{ route('deleteMentor', ['id' => $mentor['id']]) }}" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection