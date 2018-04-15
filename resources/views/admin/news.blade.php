@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addNews') }}">Добавить новость</a>
        @foreach($news as $item)
            <div class="slider__item">
                <img src="{{asset('img/news/'.$item['img'])}}" alt="">
                <div class="news__title">
                    {{ $item['title'] }}
                </div>
                <div class="news__description">
                    {!! $item['description'] !!}
                </div>
                <div>
                    <a href="{{ route('editNews', ['id' => $item['id']]) }}">Редактировать</a>
                    <a href="{{ route('deleteNews', ['id' => $item['id']]) }}">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection