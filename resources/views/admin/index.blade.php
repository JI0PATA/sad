@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addSlide') }}">Добавить слайд</a>
        @foreach($slides as $slide)
            <div class="slider__item slider">
                <img src="{{asset('img/slider/'.$slide['img'])}}" alt="" class="slide__img">
                <div class="slide__description">
                    {!! $slide['description'] !!}
                </div>
            </div>
            <div>
                <a href="{{ route('editSlide', ['id' => $slide['id']]) }}">Редактировать</a>
                <a href="{{ route('deleteSlide', ['id' => $slide['id']]) }}">Удалить</a>
            </div>
        @endforeach
    </div>
@endsection