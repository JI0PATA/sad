@extends('layouts.admin')

@section('content')
    <div class="wp">
        @foreach($reviews as $review)
            <div class="slider__item border">
                <div class="news__title">
                    {{ $review['name'] }} Опубликовано: {{ $review['created_at']->format('d.m.Y H:i') }}
                </div>
                <div class="text">
                    {{ $review['email'] }}
                </div>
                <div class="text">
                    {{ $review['comment'] }}
                </div>
                <div>
                    @if($review['active'] === 1)
                        <a href="{{ route('blockReview', ['id' => $review['id']]) }}">Заблокировать</a>
                    @else
                        <a href="{{ route('activeReview', ['id' => $review['id']]) }}">Опубликовать</a>
                    @endif
                    <br><a href="{{ route('deleteReview', ['id' => $review['id']]) }}">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection