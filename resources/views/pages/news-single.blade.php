

@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/news-single.css')}}">
    <div class="container">
        <div class="news-single">
            <h2>{{$news->title}}</h2>
                 <div class="item">
                    <span class="data">{{$news->created_at}}</span>
                    <div class="content">
                        <p>
                            <img src="{{asset('/storage/images/'.$news->image)}}" alt="{{$news->image}}" align="left"/>
                            {!! $news->description !!}
                        </p>
                    </div>
                 </div>
                 <hr>
                 <a href="{{route('main-page')}}">Назад</a>
        </div>

    </div>
@endsection
