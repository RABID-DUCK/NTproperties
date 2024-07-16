
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/analitick.css')}}">
<div class="container">
    <div class="analitick">
        <div class="bread">
            <a href="#">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="#"> Главная <span>></span></a><a href="#"> Аналитика <span>></span></a>
        </div>
        <h1>Аналитика: новости и обзоры</h1>
        <div class="news">
            <h2>Новости</h2>
            <div class="list">
                @if(isset($news) && $news->isNotEmpty())
                    @foreach($news as $item)
                        <a href="{{route('news-single', $item->id)}}" class="item">
                            <img src="{{asset('/storage/images/'.$item->image)}}"/>
                            <div class="text">
                                <p class="date">{{$item->created_at->format('d.m.Y')}}</p>
                                <h3>{{$item->title}}</h3>
                                <p>{!!   \Illuminate\Support\Str::limit($item->description, 100) !!}</p>
                                <p class="more">Читать полностью</p>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <a href="{{route('news')}}" class="news_more">Все новости</a>
        <hr>

        <div class="news">
            <h2>Обзоры</h2>
            @if($reviews->isNotEmpty())
            <div class="list">
                @foreach($reviews as $review)
                    <a href="{{route('reviews.single', $review->id)}}" class="item">
                        <img src="{{asset('storage/images/' . $review->image)}}"/>
                        <div class="text">
                            <h3>{{$review->title}}</h3>
                            <p>{{ Str::limit($review->description, 100) }}</p>
                            <p class="more">Читать полностью</p>
                        </div>
                    </a>
                @endforeach
            </div>
            @endif
        </div>
        <a href="{{route('reviews')}}" class="news_more">Все обзоры</a>
    </div>
</div>
@endsection
