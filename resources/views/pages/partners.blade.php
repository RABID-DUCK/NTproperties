@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/partners.css')}}">
<div class="container">
    <div class="partners">
        <div class="bread">
            <a href="{{route('main-page')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="{{route('main-page')}}"> {{__('main.main')}} <span>></span></a><a href="#"> {{__('main.partners')}} <span>></span></a>
        </div>
        <h1>Партнеры</h1>
        <div class="list">
            <a href="https://www.pnkgroup.ru" class="item">
                <img src="{{asset('img/PNK.jpg')}}"/>
                <p>{{__('partners.p1')}}</p>
            </a>
            <a href="https://orientir.ru/" class="item">
                <img src="{{asset('img/orientir.jpg')}}"/>
                <p>{{__('partners.p2')}}</p>
            </a>
            <a href="https://www.rrpa.ru/" class="item">
                <img src="{{asset('img/raven.jpg')}}"/>
                <p>{{__('partners.p3')}}</p>
            </a>
            <a href="https://accent.ru/" class="item">
                <img src="{{asset('img/accent.jpg')}}"/>
                <p>{{__('partners.p4')}}</p>
            </a>
            <a href="https://mega-stroy.su/" class="item">
                <img src="{{asset('img/mega.jpg')}}"/>
                <p>{{__('partners.p5')}}</p>
            </a>
            <a href="https://mlprussia.com/" class="item">
                <img src="{{asset('img/mlp.jpg')}}"/>
                <p>{{__('partners.p6')}}</p>
            </a>
            <a href="https://pltpm.ru/" class="item">
                <img src="{{asset('img/plt.jpg')}}"/>
                <p>{{__('partners.p7')}}</p>
            </a>
            <a href="https://parametr.space/" class="item">
                <img src="{{asset('img/parametr.jpg')}}"/>
                <p>{{__('partners.p8')}}</p>
            </a>
        </div>
    </div>
</div>
@endsection
