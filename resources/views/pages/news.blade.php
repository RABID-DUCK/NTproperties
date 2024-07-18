@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/news.css')}}">

    <div class="news">
        <div class="container">
        <div class="bread">
            <a href="{{route('main-page')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="{{route('main-page')}}"> {{__('main.main')}} <span>></span></a><a href="{{route('analitick')}}"> {{__('main.analitick')}} <span>></span></a><a href="{{route('news')}}"> {{__('main.news')}} <span>></span></a>
        </div>
            <h1>{{__('main.news')}}</h1>
            <div class="list">
                @if(isset($news) && $news->isNotEmpty())
                    @foreach($news as $item)
                        <a href="{{route('news-single', $item->id)}}" class="item">
                            <img src="{{asset('/storage/images/'.$item->image)}}"/>
                            <div class="text">
                                <p class="date">{{$item->created_at->format('d.m.Y')}}</p>
                                <h3>{{app()->currentLocale() == 'RU' ? $item->title : $item->eng_title}}</h3>
                                <p>{!! substr(strip_tags( app()->currentLocale() == 'RU' ? $item->description : $item->eng_description), 0, 300) !!}...</p>
                                <span class="more">{{__('main.read_all')}}</span>
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
