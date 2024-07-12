@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/contacts.css')}}">
    <div class="container">
        <div class="contacts">
            <h2>Контакты</h2>
            <div class="text">
                <p><span></span> Москва, БЦ "Станколит", Складочная ул. 1, стр. 1</p>
                <a href="tel:+74952233553">+7 495 223 35 53</a>
                <a href="mailto:komolikova@ntproperties.ru">komolikova@ntproperties.ru</a>
            </div>
            <h3>Схема проезда</h2>
            <div id="map"></div>
        </div>
    </div>
@endsection
