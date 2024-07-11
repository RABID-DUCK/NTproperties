@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/object-single.css')}}">
<div class="container">
    <div class="object">
        <h2>ЛП Истра</h2>
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
    </div>
</div>
@endsection
