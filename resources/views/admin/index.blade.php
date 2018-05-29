@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addSlide') }}" class="btn btn-primary">Добавить слайд</a>
        @foreach($slides as $slide)
            <div class="slider__item slider">
                <img src="{{asset('img/slider/'.$slide['img'])}}" alt="" class="slide__img">
                <div class="slide__description">
                    {!! $slide['description'] !!}
                </div>
            </div>
            <div>
                <a href="{{ route('editSlide', ['id' => $slide['id']]) }}" class="btn btn-primary">Редактировать</a>
                <a href="{{ route('deleteSlide', ['id' => $slide['id']]) }}" class="btn btn-danger">Удалить</a>
            </div>
        @endforeach
    </div>
@endsection