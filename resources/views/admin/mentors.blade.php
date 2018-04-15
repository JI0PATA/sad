@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addMentor') }}">Добавить воспитателя</a><br>
        <div class="flex">
            @foreach($mentors as $mentor)
                <div class="slider__item mentors">
                    <img src="{{asset('img/mentors/'.$mentor['img'])}}" alt="">
                    <div>
                        <a href="{{ route('editMentor', ['id' => $mentor['id']]) }}">Редактировать</a>
                        <a href="{{ route('deleteMentor', ['id' => $mentor['id']]) }}">Удалить</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection