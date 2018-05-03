@extends('layouts.app')

@section('content')

    <div class="news">
        @foreach($news as $item)
            <div class="news__item">
                <div class="wp">
                    <div class="news__title">{{ $item['title'] }}</div>
                    <div class="news__info">
                        <div class="news__img"
                             style="background-image: url({{ asset('img/news/'.$item['img']) }})"></div>
                        <div>
                            <div class="news__description">
                                {!!  $item['description'] !!}
                            </div>
                            <div>
                                <a href="{{ route('article', ['id' => $item['id']]) }}">Читать...</a>
                            </div>
                        </div>
                    </div>
                    <div class="news__date">{{ $item['created_at']->format('d.m.Y H:i') }}</div>
                </div>
            </div>
        @endforeach
    </div>

@endsection