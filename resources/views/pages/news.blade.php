@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/news.css')}}">

    <div class="news">
        <div class="container">
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
            @if(isset($news))
                <div class="pagination">
                    @if ($news->onFirstPage())
                        <button disabled><</button>
                    @else
                        <a href="{{ $news->previousPageUrl() }}"><</a>
                    @endif

                    @foreach ($news->links()->elements as $element)
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $news->currentPage())
                                    <a class="active" href="{{ $url }}">{{ $page }}</a>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($news->hasMorePages())
                        <a href="{{ $news->nextPageUrl() }}">></a>
                    @else
                        <button disabled>></button>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection
