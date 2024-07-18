@extends('layouts.app')

@section('content')

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('css/contacts.css')}}">
    <div class="container">
        <div class="contacts">
            <div class="bread">
                <a href="#">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a><a href="{{route('main-page')}}"> {{__('main.main')}} <span>></span></a><a href="#"> {{__('main.contacts')}} <span>></span></a>
            </div>
            <h1>{{__('main.contacts')}}</h1>
            <div class="text">
                <p>
                    <svg fill="#ff6d12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="32px" height="32px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                       <g>
                        <path d="M50,10.417c-15.581,0-28.201,12.627-28.201,28.201c0,6.327,2.083,12.168,5.602,16.873L45.49,86.823
                            c0.105,0.202,0.21,0.403,0.339,0.588l0.04,0.069l0.011-0.006c0.924,1.278,2.411,2.111,4.135,2.111c1.556,0,2.912-0.708,3.845-1.799
                            l0.047,0.027l0.179-0.31c0.264-0.356,0.498-0.736,0.667-1.155L72.475,55.65c3.592-4.733,5.726-10.632,5.726-17.032
                            C78.201,23.044,65.581,10.417,50,10.417z M49.721,52.915c-7.677,0-13.895-6.221-13.895-13.895c0-7.673,6.218-13.895,13.895-13.895
                            s13.895,6.222,13.895,13.895C63.616,46.693,57.398,52.915,49.721,52.915z"/>
                       </g>
                      </svg>
                {{app()->currentLocale() == 'ru' ? 'Москва, БЦ "Станколит", Складочная ул. 1, стр. 1' : 'Moscow, Stankolit OC, Skladochnaya street, bld.1 block 1'}}</p>
                <a href="tel:{{__('main.tel')}}">
                    <svg width="24px" height="24px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-call">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M14.031,11.852 C13.603,11.313 12.908,10.532 12.313,10.458 C11.951,10.413 11.535,10.713 11.125,10.996 C11.045,11.036 10.427,11.404 10.352,11.426 C9.956,11.539 9.111,11.572 8.6,11.106 C8.108,10.656 7.33,9.823 6.702,9.06 C6.102,8.274 5.473,7.329 5.151,6.749 C4.815,6.148 5.057,5.353 5.265,5.003 C5.303,4.94 5.763,4.467 5.866,4.357 L5.881,4.375 C6.262,4.055 6.661,3.73 6.706,3.378 C6.78,2.792 6.181,1.939 5.753,1.399 C5.325,0.858 4.662,-0.089 3.759,0.045 C3.419,0.095 3.126,0.214 2.837,0.385 L2.829,0.376 C2.823,0.38 2.795,0.402 2.781,0.413 C2.772,0.418 2.764,0.421 2.756,0.426 L2.759,0.43 C2.593,0.558 2.119,0.912 2.065,0.96 C1.479,1.481 0.597,2.708 1.279,4.915 C1.785,6.555 2.864,8.481 4.334,10.429 L4.326,10.436 C4.398,10.53 4.472,10.615 4.547,10.706 C4.617,10.799 4.686,10.891 4.758,10.983 L4.768,10.976 C6.328,12.855 7.964,14.357 9.457,15.243 C11.467,16.435 12.896,15.898 13.556,15.471 C13.618,15.43 14.09,15.063 14.25,14.942 L14.254,14.946 C14.26,14.94 14.264,14.932 14.272,14.926 C14.284,14.917 14.31,14.897 14.315,14.893 L14.309,14.885 C14.551,14.651 14.745,14.401 14.879,14.086 C15.23,13.257 14.459,12.393 14.031,11.852 L14.031,11.852 Z" fill="#ff6d12" class="si-glyph-fill">

                    </path>
                        </g>
                    </svg>
                    {{__('main.number')}}</a>
                <a href="mailto:komolikova@ntproperties.ru">

                <svg width="26px" height="26px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="mail" class="icon glyph"><path d="M22,8.32V18a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V8.69L4,9.78l7.52,4.1A1,1,0,0,0,12,14a1,1,0,0,0,.5-.14L20,9.49Z" style="fill:#ff6d12"></path><path d="M22,6h0L20,7.18l-8,4.67L4,7.5,2,6.4V6A2,2,0,0,1,4,4H20A2,2,0,0,1,22,6Z" style="fill:#ff6d12"></path></svg>

                    {{__('main.email')}}</a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('feedback')}}" method="POST">
                @csrf
                @method('post')

                <h2>{{__('main.feedback')}}</h2>
                <label>{{__('main.name_user')}}:<input name="name" /></label>
                <label>{{__('main.title_email')}}:<input name="title" /></label>
                <label>{{__('main.description')}}:<textarea name="description"  rows="10"></textarea></label>
                <button type="submit" class="btn btn-orange">{{__('main.send')}}</button>
            </form>
            <h2>{{__('main.scheme_drive')}}</h2>

            <div id="map"></div>
        </div>
    </div>

<script src="https://api-maps.yandex.ru/2.1?apikey={{config('ymaps.api_key')}}&load=package.full&lang=ru_RU"></script>
<script type="text/javascript">
    ymaps.ready(function () {
        var map = new ymaps.Map("map", {
            center: [55.800453, 37.594584],//сюда потом добавить широту и долготу с бд
            zoom: 16
        });

        var placemark = new ymaps.Placemark([55.800453, 37.594584], {}, {
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
