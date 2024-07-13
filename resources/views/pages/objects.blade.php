@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/objects.css')}}">
<div class="container">
    <div class="objects">
        <h1>Объекты</h1>

        <div class="list">
            <a href="#" class="item">
                <img src="{{asset('img/slider-1.jpg')}}"/>
                <div class="text">
                    <h2>Подольских курсантов</h2>
                    <p><strong>Общая:</strong> 15 754 м²</p>
                    <hr>
                    <div class="price">
                        <h3>Аренда</h3>
                        <p>70000 р/м²</p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>
@endsection
