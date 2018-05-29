@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addNews') }}" class="btn btn-primary">Добавить новость</a>
        @foreach($news as $item)
            <div class="slider__item news">
                <img src="{{asset('img/news/'.$item['img'])}}" alt="">
                <div class="news__title">
                    {{ $item['title'] }}
                </div>
                <div class="news__description">
                    {!! $item['description'] !!}
                </div>
                <div>
                    <a href="{{ route('editNews', ['id' => $item['id']]) }}" class="btn btn-primary">Редактировать</a>
                    <a href="{{ route('deleteNews', ['id' => $item['id']]) }}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection