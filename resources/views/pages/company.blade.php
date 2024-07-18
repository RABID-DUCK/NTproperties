@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/company.css')}}">
<div class="container">
    <div class="company">
        <div class="bread">
            <a href="{{route('main-page')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="{{route('main-page')}}"> {{__('main.main')}} <span>></span></a><a href="#"> {{__('main.company')}} <span>></span></a>
        </div>
        <h1>{{__('main.company')}}</h1>
        <p>{{__('company.text1')}}</p>
        <p>{{__('company.text2')}}</p>
        <ul>
            @foreach(__('company.content1') as $item)
            <li>{{$item}}</li>
            @endforeach
        </ul>
        <p>{{__('company.text3')}}</p>
        <p>{{__('company.text4')}}</p>
        <h2>{{__('company.title')}}</h2>
        <ul>
            @foreach(__('company.content2') as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
        <p>{{__('company.text5')}}</p>
        <p>{{__('company.text6')}}</p>
    </div>
</div>
@endsection
