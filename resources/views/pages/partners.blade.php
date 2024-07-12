@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/partners.css')}}">
<div class="container">
    <div class="partners">
        <h1>Партнеры</h1>
        <div class="list">
            <a href="https://www.pnkgroup.ru" class="item">
                <img src="{{asset('img/logo.svg')}}"/>
                <p>PNK Group</p>
            </a>
            <a href="https://www.pnkgroup.ru" class="item">
                <img src="{{asset('img/logo.svg')}}"/>
                <p>PNK Group</p>
            </a>
            <a href="https://www.pnkgroup.ru" class="item">
                <img src="{{asset('img/logo.svg')}}"/>
                <p>PNK Group</p>
            </a>
            <a href="https://www.pnkgroup.ru" class="item">
                <img src="{{asset('img/logo.svg')}}"/>
                <p>PNK Group</p>
            </a>
            <a href="https://www.pnkgroup.ru" class="item">
                <img src="{{asset('img/logo.svg')}}"/>
                <p>PNK Group</p>
            </a>
        </div>
    </div>
</div>
@endsection
