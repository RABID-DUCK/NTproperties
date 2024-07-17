@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/news-single.css')}}">
    <div class="container">
        <div class="bread">
            <a href="#">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="{{route('main-page')}}"> Главная <span>></span></a><a href="{{route('analitick')}}"> Аналитика <span>></span></a><a href="{{route('news')}}"> Новости <span>></span></a><a href="#"> {{\Illuminate\Support\Str::limit($reviews->title, 30)}} <span>></span></a>
        </div>
        <div class="news-single">
            <h1>{{$reviews->title}}</h1>
                 <div class="item">
                    <span class="data">{{$reviews->created_at->format('m.d.y')}}</span>
                    <div class="content">
                        <p>
                            <img src="{{asset('/storage/images/'.$reviews->image)}}" alt="{{$reviews->image}}" align="left"/>
                            {!! $reviews->description !!}
                        </p>
                    </div>
                 </div>
                 <hr>
                 <a href="{{route('main-page')}}">Назад</a>
        </div>

    </div>
@endsection
