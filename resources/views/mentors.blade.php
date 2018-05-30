@extends('layouts.app')

@section('content')
    <br>
    <div class="hor-center">
        <h1 class="title">Воспитатели</h1>
    </div>
    <div class="mentors wp">
        @foreach($mentors as $mentor)
            <div class="mentor__item">
                <div class="mentor__photo">
                    <img src="{{ asset('img/mentors/'.$mentor['img']) }}" alt="">
                </div>
                <div class="mentor__info">
                    <p>{{ $mentor['name'] }}</p>
                    <p>Должность: {{ $mentor['position'] }}</p>
                    <p>Стаж: {{ $mentor['experience'] }}</p>
                    <p>Образование: {{ $mentor['education'] }}</p>
                    <p>Грамоты: {{ $mentor['merit'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection