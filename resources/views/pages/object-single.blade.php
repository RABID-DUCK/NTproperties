@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/object-single.css')}}">
<div class="container">
    <div class="object">
        <div class="bread">
            <a href="#">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="#"> Главная <span>></span></a><a href="#"> Объекты <span>></span></a><a href="#"> ЛП Истра <span>></span></a>
        </div>
        <h1>ЛП Истра</h1>
        <img src="{{asset('img/slider-1.jpg')}}"/>
        <div class="info">
            <span class="data">18.04.2024</span>
            <div class="text">
                <div class="geo">
                    <h3>ЛП Истра</h3>
                    <p>Новорижское шоссе</p>
                    <div class="tech">
                        <p>Складские помещени</p>
                        <p>205 690 м²</p>
                    </div>
                </div>
                <div class="price">
                    <span>Аренда (в год)</span>
                    <p>13000 &#8381;/м²</p>
                </div>
            </div>
        </div>
        <div class="description">
            <h3>Описание</h3>
            <p>
                В действующем логистическом парке в аренду предлагается складской блок площадью - 8 444 кв. м. Объект имеет уникальное месторасположение на одной из наименее загруженных автомагистралей – Москва-Рига (М9) в 42 км от МКАД. Доступ ноябрь 2024 г.
            </p>
        </div>
        <div class="feature">
            <h3>Характеристики</h3>
            <p><span>Регион:</span> Московская область</p>
            <p><span>Направление:</span> Запад</p>
            <p><span>Шоссе:</span> Новорижское</p>
            <p><span>Удаленность от МКАД, км:</span> 42</p>
            <p><span>Класс помещений :</span> A</p>
            <p><span>Общая площадь, кв. м :</span> 205 690</p>
            <p><span>Свободная площадь, кв. м :</span> 8 444</p>
            <p><span>Минимальный блок, кв. м :</span> 8 444</p>
            <ul>
                <li><span>высота, м:</span> 12</li>
                <li><span>шаг колонн, м :</span> 12х18</li>
                <li><span>нагрузка на пол, т/кв. м :</span> 7</li>
                <li><span>освещение:</span> Светодиодное</li>
                <li><span>система пожаротушения :</span> Спринклерная</li>
            </ul>
        </div>
        <div class="map">
            <h3>Объект на карте</h3>
            <div id="map"></div>
        </div>
    </div>
</div>
@endsection
