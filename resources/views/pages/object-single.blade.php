@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/object-single.css')}}">
<style>
    .bx-wrapper{
        max-height: 563px;
    }
</style>
<div class="container">
    <div class="object">
        <div class="bread">
            <a href="{{route('main-page')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a></a><a href="{{route('main-page')}}"> {{__('main.main')}} <span>></span></a><a href="{{route('objects')}}"> {{__('main.object')}} <span>></span></a><a href="#"> {{\Illuminate\Support\Str::limit(app()->currentLocale() == 'RU' ? $object->title : $object->eng_title, 30)}} <span>></span></a>
        </div>
        <h1>{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}</h1>

        @if(!empty($object->allImages($object->id)))
        <div id="open" class="slider">
        	<ul id="slider-1">
                @foreach($object->allImages($object->id) as $image)
                    <li>
                        <a href="#">
                            <img class="myImage" src="{{asset('storage/images/' . $image->name)}}" alt="{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}" />
                        </a>
                    </li>
                @endforeach
        	</ul>
        </div>
        @endif
        <div class="info">
            <span class="data">{{$object->created_at->format('d.m.y')}}</span>
            <div class="text">
                <div class="geo">
                    <h3>

                    <svg fill="#ff6d12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    	 width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <g>
                    	<path d="M50,10.417c-15.581,0-28.201,12.627-28.201,28.201c0,6.327,2.083,12.168,5.602,16.873L45.49,86.823
                    		c0.105,0.202,0.21,0.403,0.339,0.588l0.04,0.069l0.011-0.006c0.924,1.278,2.411,2.111,4.135,2.111c1.556,0,2.912-0.708,3.845-1.799
                    		l0.047,0.027l0.179-0.31c0.264-0.356,0.498-0.736,0.667-1.155L72.475,55.65c3.592-4.733,5.726-10.632,5.726-17.032
                    		C78.201,23.044,65.581,10.417,50,10.417z M49.721,52.915c-7.677,0-13.895-6.221-13.895-13.895c0-7.673,6.218-13.895,13.895-13.895
                    		s13.895,6.222,13.895,13.895C63.616,46.693,57.398,52.915,49.721,52.915z"/>
                    </g>
                    </svg>

                    {{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}</h3>
                    <p>

                    <svg width="18px" height="18px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">


                        <g id="road" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="48" height="48" fill="white" fill-opacity="0"/>
                            <g id="编组" transform="translate(6.000000, 5.091863)" stroke="#ff6d12" stroke-width="4">
                                <path d="M5,0.908136641 L0,36.9081366" id="路径-9">

                    </path>
                                <path d="M36.9287415,0.908136641 L31.9643708,36.8633744" id="路径-9" transform="translate(33.964371, 18.886476) scale(-1, 1) translate(-33.964371, -18.886476) ">

                    </path>
                                <path d="M18,0.908136641 L18,6.90813664" id="路径-10">

                    </path>
                                <path d="M18,29.9081366 L18,36.9081366" id="路径-10">

                    </path>
                                <path d="M18,14.9081366 L18,21.9081366" id="路径-10">

                    </path>
                            </g>
                        </g>
                    </svg>

                    {{app()->currentLocale() == 'RU' ? $object->direction->name : $object->direction->eng_name}}</p>
                    <div class="tech">
                        <p>

                        <svg fill="#b1bbc5" width="18px" height="18px" viewBox="0 0 64 64" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><title/><path d="M53.94,54.93H10.06a2,2,0,0,1-2-2V30.6a2,2,0,0,1,2-2H53.94a2,2,0,0,1,2,2V52.93A2,2,0,0,1,53.94,54.93Zm-41.88-4H51.94V32.6H12.06Z"/><path d="M49.94,32.6H14.06a2,2,0,0,1-2-2V19.83a2,2,0,0,1,2-2H49.94a2,2,0,0,1,2,2V30.6A2,2,0,0,1,49.94,32.6Zm-33.88-4H47.94V21.83H16.06Z"/><path d="M45.6,21.83H18.4a2,2,0,0,1-2-2V11.06a2,2,0,0,1,2-2H45.6a2,2,0,0,1,2,2v8.77A2,2,0,0,1,45.6,21.83Zm-25.2-4H43.6V13.06H20.4Z"/></svg>

                             {{$object->type_room == 1 ? __('main.type_room_3') : __('main.type_room_4')}}</p>
                        <p>

                        <svg fill="#b1bbc5" width="18px" height="18px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                        </svg>


                        {{$object->all_square}} {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                    </div>
                </div>
                <div class="price">
                    <span>{{$object->price_type == 1 ? __('main.type_room_1_1') : __('main.type_room_2')}}</span>
                    <p>
                        @if($object->all_square !== null)
                            {{ number_format($object->price_type == 1 ? ($object->price * $object->all_square) / 12 : $object->price * $object->all_square, 0, '', ' ') }}
                            ₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}

                        @else
                            {{ number_format($object->price_type, 0, '', ' ') }}₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}
                        @endif</p>
                </div>
            </div>
        </div>
        <div class="description">
            <h3>{{__('main.description')}}</h3>
            <p>{!! app()->currentLocale() == 'RU' ? $object->description : $object->eng_description !!}</p>
        </div>
        <div class="feature">
            <h3>{{__('main.specifications')}}</h3>
            @if($object->region)
                <p><span>{{app()->currentLocale() == 'RU' ? 'Регион' : 'Region'}}:</span> {{app()->currentLocale() == 'RU' ? $object->region->name : $object->region->eng_name}}</p>
            @endif
            @if($object->direction)
                <p><span>{{app()->currentLocale() == 'RU' ? 'Направление' : 'Direction'}}:</span> {{app()->currentLocale() == 'RU' ? $object->direction->name : $object->direction->eng_name}}</p>
            @endif
            @if($object->highway)
                <p><span>{{app()->currentLocale() == 'RU' ? 'Шоссе' : 'Highway'}}:</span> {{app()->currentLocale() == 'RU' ? $object->highway->name : $object->highway->eng_name}}</p>
            @endif
            @if($object->distance_mkad)
                <p><span>{{__('main.distance_mkad')}}, {{__('main.km')}}:</span> {{$object->distance_mkad}}</p>
            @endif
            @if($object->class_house)
                <p><span>{{__('main.class_house')}} :</span> {{$object->class_house}}</p>
            @endif
            @if($object->all_square)
                <p><span>{{__('main.all_square')}}, {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}} :</span> {{ number_format($object->all_square, 0, '', ' ') }}</p>
            @endif
            @if($object->free_square)
                <p><span>{{__('main.free_square')}}, {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}} :</span> {{ number_format($object->free_square, 0, '', ' ')}}</p>
            @endif
            @if($object->min_square)
                <p><span>{{__('main.min_block')}}, {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}} :</span> {{ number_format($object->min_square, 0, '', ' ')}}</p>
            @endif
            <ul>
                @if($object->height)
                    <li><span>{{__('main.height')}}, {{app()->currentLocale() == 'RU' ? 'м' : 'm'}}:</span> {{$object->height}}</li>
                @endif
                @if($object->column_pitch)
                    <li><span>{{__('main.pitch_column')}}, {{app()->currentLocale() == 'RU' ? 'м' : 'm'}} :</span> {{$object->column_pitch}}</li>
                @endif
                @if($object->floor_load)
                    <li><span>{{__('main.floor_power')}}, {{app()->currentLocale() == 'RU' ? 'т.кв м' : 'sq.m.'}} :</span> {{$object->floor_load}}</li>
                @endif
                @if($object->lighting)
                    <li><span>{{__('main.lighting')}}:</span> {{app()->currentLocale() == 'RU' ? $object->lighting : $object->eng_lighting}}</li>
                @endif
                @if($object->fire_system)
                    <li><span>{{__('main.fire_system')}} :</span> {{app()->currentLocale() == 'RU' ? $object->fire_system : $object->eng_fire_system}}</li>
                @endif
            </ul>
        </div>
        @if($object->x_coord !== null && $object->y_coord)
        <div class="map">
            <h3>{{__('main.object_map')}}</h3>
            <div id="map" style="width: 100%; height: 500px"></div>
        </div>
        @endif

        @if(!empty($object->allImages($object->id)))
        <div id="modal" class='show'>
            <span class="close">&times;</span>
            <button id="slider-prev"></button>
            <div class="slider" >

                <ul id="slider-2">
                    @foreach($object->allImages($object->id) as $image)
                        <li>
                            <a href="#">
                                <img class="myImage" src="{{asset('storage/images/' . $image->name)}}" alt="{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}" />
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <button id="slider-next"></button>
        </div>
        @endif
    </div>
</div>

@if($object->x_coord !== null && $object->y_coord)
<script src="https://api-maps.yandex.ru/2.1?apikey={{config('ymaps.api_key')}}&load=package.full&lang={{app()->currentLocale() == 'RU' ? 'ru_RU' : 'en_US'}}">
</script>
<script type="text/javascript">
    ymaps.ready(function () {
        var map = new ymaps.Map("map", {
            center: [{{$object->x_coord}}, {{$object->y_coord}}],//сюда потом добавить широту и долготу с бд
            zoom: {{$object->zoom}}
        });

        var placemark = new ymaps.Placemark([{{$object->x_coord}}, {{$object->y_coord}}], {}, {
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
@endif
<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/bxslider/4.2.14/dist/jquery.bxslider.min.js"></script>
<script>
   var open = document.getElementById("open")
   var modal = document.getElementById("modal")


    open.addEventListener("click", () => {
          modal.classList.remove("show")
          if(modal.classList.length === 0) {

          $('#slider-2').bxSlider({
            pager: false,
            controls: true,
            auto: false,
            minSlides: 1,
            maxSlides: 1,
            nextSelector: '#slider-next',
              prevSelector: '#slider-prev',
              nextText:   `
                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 7L15 12L10 17" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              `,
                prevText: `
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <path d="M10 7L15 12L10 17" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g>

                    </svg>


                `
        });
        }
    })
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.classList.add("show");
    }
</script>
<script>
$(document).ready(function(){
	$('#slider-1').bxSlider({
		pager: true,
		controls: false,
		auto: true,
		pause: 10000,
		minSlides: 1,
		maxSlides: 1
	});
});
</script>
@endsection
