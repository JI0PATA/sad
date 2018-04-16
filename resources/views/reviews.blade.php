@extends('layouts.app')

@section('content')
    <section id="callback" class="wp">
        <div class="hor-center">
            <br><h2 class="title">Отзывы</h2>
        </div>
        <div class="callback__items">
            @foreach($reviews as $review)
                <div class="callback__item">
                    <div class="callback__name">{{ $review['name'] }}</div>
                    <div class="callback__comment">
                        {{ $review['comment'] }}
                    </div>
                </div>
            @endforeach
        </div><br><br>
    </section>
@endsection