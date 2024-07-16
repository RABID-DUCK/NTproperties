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
            </a><a href="{{route('main-page')}}"> Главная <span>></span></a><a href="{{route('objects')}}"> Объекты <span>></span></a><a href="#"> {{$object->title}} <span>></span></a>
        </div>
        <h1>{{$object->title}}</h1>
        <img src="{{asset('img/slider-1.jpg')}}"/>
        <div class="info">
            <span class="data">{{$object->created_at->format('d.m.y')}}</span>
            <div class="text">
                <div class="geo">
                    <h3>{{$object->title}}</h3>
                    <p>{{$object->highway->name}}</p>
                    <div class="tech">
                        <p>{{$object->type_room == 1 ? 'Складские помещения' : 'Промышленные участки'}}</p>
                        <p>{{$object->all_square}} м²</p>
                    </div>
                </div>
                <div class="price">
                    <span>{{$object->price_type == 1 ? 'Аренда (в год)' : 'Продажа'}}</span>
                    <p>{{$object->price}} &#8381;/м²</p>
                </div>
            </div>
        </div>
        <div class="description">
            <h3>Описание</h3>
            <p>{{$object->description}}</p>
        </div>
        <div class="feature">
            <h3>Характеристики</h3>
            @if($object->region)
                <p><span>Регион:</span> {{$object->region->name}}</p>
            @endif
            @if($object->direction)
                <p><span>Направление:</span> {{$object->direction->name}}</p>
            @endif
            @if($object->highway)
                <p><span>Шоссе:</span> {{$object->highway->name}}</p>
            @endif
            @if($object->distance_mkad)
                <p><span>Удаленность от МКАД, км:</span> {{$object->distance_mkad}}</p>
            @endif
            @if($object->class_house)
                <p><span>Класс помещений :</span> {{$object->class_house}}</p>
            @endif
            @if($object->all_square)
                <p><span>Общая площадь, кв. м :</span> {{$object->all_square}}</p>
            @endif
            @if($object->free_square)
                <p><span>Свободная площадь, кв. м :</span> {{$object->free_square}}</p>
            @endif
            @if($object->min_square)
                <p><span>Минимальный блок, кв. м :</span> {{$object->min_square}}</p>
            @endif
            <ul>
                @if($object->height)
                    <li><span>высота, м:</span> {{$object->height}}</li>
                @endif
                @if($object->column_pitch)
                    <li><span>шаг колонн, м :</span> {{$object->column_pitch}}</li>
                @endif
                @if($object->floor_load)
                    <li><span>нагрузка на пол, т/кв. м :</span> {{$object->floor_load}}</li>
                @endif
                @if($object->lighting)
                    <li><span>освещение:</span> {{$object->lighting}}</li>
                @endif
                @if($object->fire_system)
                    <li><span>система пожаротушения :</span> {{$object->fire_system}}</li>
                @endif
            </ul>
        </div>
        <div class="map">
            <h3>Объект на карте</h3>
            <div id="map" style="width: 100%; height: 500px"></div>
        </div>
    </div>
</div>

<script src="https://api-maps.yandex.ru/2.1?apikey={{config('ymaps.api_key')}}&load=package.full&lang=ru_RU">
</script>
<script type="text/javascript">
    ymaps.ready(function () {
        var map = new ymaps.Map("map", {
            center: [55.591701, 37.635314],//сюда потом добавить широту и долготу с бд
            zoom: 10
        });

        var placemark = new ymaps.Placemark([55.591701, 37.635314], {}, {
            iconImageHref: '{{ asset('img/baloon.svg') }}',
            iconImageSize: [60, 84],
            iconImageOffset: [-5, -38],
            iconLayout: 'default#image',
            iconShape: {
                type: 'Circle',
                coordinates: [0, 0],
                radius: 20
            },
        });

        map.geoObjects.add(placemark);
    });
</script>
@endsection
