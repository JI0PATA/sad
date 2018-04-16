@extends('layouts.app')

@section('content')

    <div class="article wp">
        <div class="article__title">
            {{ $article['title'] }}
        </div>
        <img src="{{ asset('img/news/'.$article['img']) }}" alt="" class="article__img">
        <div class="article__description">
            {!! $article['description'] !!}
        </div><br>
        <div class="article__date">
            {{ $article['created_at']->format('d.m.Y H:i') }}
        </div>
    </div>

@endsection