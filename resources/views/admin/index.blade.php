@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addSlide') }}">Добавить слайд</a>
        @foreach($slides as $slide)
            <div class="slider__item">
                <img src="{{asset('img/slider/'.$slide['img'])}}" alt="">
                <div>
                    <a href="{{ route('editSlide', ['id' => $slide['id']]) }}">Редактировать</a>
                    <a href="{{ route('deleteSlide', ['id' => $slide['id']]) }}">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection