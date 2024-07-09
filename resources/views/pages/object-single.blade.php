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
    </div>
</div>
@endsection
