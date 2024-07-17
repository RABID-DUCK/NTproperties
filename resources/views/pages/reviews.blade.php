@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/reviews.css')}}">
     <div class="news">
        <div class="container">
            <div class="bread">
                <a href="#">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a><a href="#"> Главная <span>></span></a><a href="#"> Аналитика <span>></span><a href="#"> Обзоры <span>></span></a>
            </div>
            <h1>Обзоры</h1>
            <div class="list">
                @if($reviews->isNotEmpty(0))
                    @foreach($reviews as $review)
                        <a href="{{route('reviews.single', $review->id)}}" class="item">
                            <img src="{{asset('storage/images/' . $review->image)}}"/>
                            <div class="text">
                                <h3>{{$review->title}}</h3>
                                {{Str::limit($review->description, 100)}}
                                <span class="more">Читать полностью</span>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="pagination">
            @if ($reviews->onFirstPage())
                <button disabled><</button>
            @else
                <a href="{{ $reviews->previousPageUrl() }}"><</a>
            @endif

            @foreach ($reviews->links()->elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $reviews->currentPage())
                            <a class="active" href="{{ $url }}">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($reviews->hasMorePages())
                <a href="{{ $reviews->nextPageUrl() }}">></a>
            @else
                <button disabled>></button>
            @endif
        </div>
        </div>
     </div>
@endsection
