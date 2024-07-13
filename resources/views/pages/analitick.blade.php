
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
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <p class="date">25.06.2024</p>
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="more">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <p class="date">25.06.2024</p>
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="more">Читать полностью</p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                    <div class="text">
                        <p class="date">25.06.2024</p>
                        <h3>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h3>
                        <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light Industrial...</p>
                        <p class="more">Читать полностью</p>
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
        </div>
        <a href="#" class="news_more">Все обзоры</a>
    </div>
</div>
@endsection
