@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/guide.css')}}">
<div class="container">
    <div class="guide">
        <h1>Руководство</h1>
        <div class="list">
            <a href="#" class="item">
                <img src="{{asset('img/rykovod.jpg')}}"/>
                <h2>Владислав Рябов</h2>
                <p>Управляющий партнер NT Properties</p>
            </a>
        </div>
    </div>
</div>
@endsection
