
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/analitick.css')}}">
<div class="container">
    <div class="analitick">
        <h1>Аналитика: новости и обзоры</h1>
        <div class="news">
            <h2>Новости</h2>
            <div class="list">
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <p class="date">25.06.2024</p>
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="about">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <p class="date">25.06.2024</p>
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="about">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <p class="date">25.06.2024</p>
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="about">Читать полностью</p>
                    </div>
                </a>
            </div>
        </div>
        <a href="#" class="news_more">Все новости</a>
        <hr>

        <div class="news">
            <h2>Обзоры</h2>
            <div class="list">
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="about">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="about">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="about">Читать полностью</p>
                    </div>
                </a>
            </div>
        </div>
        <a href="#" class="news_more">Все обзоры</a>
    </div>
</div>
@endsection
