@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/news.css')}}">

    <div class="news">
        <div class="container">
            <h2>Новости</h2>
            <div class="list">
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="more">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="more">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="more">Читать полностью</p>
                    </div>
                </a>
            </div>
            <div class="pagination">
                @if ($objects->onFirstPage())
                    <button disabled><</button>
                @else
                    <a href="{{ $objects->previousPageUrl() }}"><</a>
                @endif

                @foreach ($objects->links()->elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $objects->currentPage())
                                <a class="active" href="{{ $url }}">{{ $page }}</a>
                            @else
                                <a href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($objects->hasMorePages())
                    <a href="{{ $objects->nextPageUrl() }}">></a>
                @else
                    <button disabled>></button>
                @endif
            </div>
        </div>
    </div>
@endsection
