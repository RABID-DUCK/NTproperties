@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/reviews.css')}}">
     <div class="news">
        <div class="container">
            <h2>Обзоры</h2>
            <div class="list">
                @if($reviews->isNotEmpty(0))
                    @foreach($reviews as $review)
                        <a href="{{route('reviews.single', $review->id)}}" class="item">
                            <img src="{{asset('storage/images/' . $review->image)}}"/>
                            <div class="text">
                                <h3>{{$review->title}}</h3>
                                <p>{{Str::limit($review->description, 100)}}</p>
                                <p class="more">Читать полностью</p>
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
