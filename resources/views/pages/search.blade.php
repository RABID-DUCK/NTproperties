@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/search.css')}}">
<div class="container">
    <div class="searpage">
        <div class="bread">
            <a href="#">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="{{route('main-page')}}"> Главная <span>></span></a><a href="#"> Поиск по сайту <span>></span></a>
        </div>
        <h1>Поиск по сайту</h1>
        <div class="input">
            <form class="w-100 d-flex" action="{{route('search')}}">
                <input type="search" name="title" />
                <button style="margin-left: 5px" class="btn btn-orange">Искать</button>
            </form>
        </div>
        <div class="list">
            @if($news->isNotEmpty())
                @foreach($news as $item)
                    <a href="{{route('news-single', $item->id)}}" class="item">
                        <h2>{{$item->title}}</h2>
                        <p>{!! substr(strip_tags($item->description), 0, 300) !!}...</p>
                    </a>
                @endforeach
            @endif

            @if($objects->isNotEmpty())
                @foreach($objects as $object)
                    <a href="{{route('objects.show', $object->id)}}" class="item">
                        <h2>{{$object->title}}</h2>
                        <p>{!! substr(strip_tags($object->description), 0, 300) !!}...</p>
                    </a>
                @endforeach
            @endif

            @if($news->isEmpty() && $objects->isEmpty())
                <span class="mt-4">Результатов по запросу "{{$searchTerm}}" не нашлось...</span>
            @endif
        </div>
    </div>
</div>
@endsection
