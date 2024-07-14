@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/objects.css')}}">
<div class="container">
    <div class="objects">
        <div class="bread">
            <a href="#">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="#"> Главная <span>></span></a><a href="#"> Объекты <span>></span></a>
        </div>
        <h1>Объекты</h1>

        <form class="filter-wrapper">
            <div class="filter-window">
                <div class="filter-content">
                    <div class="filter-1 d-flex">
                        <button class="btn d-flex align-items-center active" id="rentBtn"><i class="fas fa-check" style="margin-right: 10px;"></i> Аренда</button>
                        <button class="btn d-flex align-items-center" id="saleBtn" style="margin-left: 10px; margin-right: 10px"><i class="fas fa-times" style="margin-right: 10px;"></i> Продажа</button>
                        <select class="form-select" name="" id="">
                            <option value="">Складские помещения</option>
                            <option value="">Промышленные участки</option>
                        </select>
                    </div>

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Цена</span>
                        </div>
                        <input type="number" class="form-control" placeholder="10 000">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">-</span>
                        </div>
                        <input type="number" class="form-control" placeholder="20 000">
                        <div class="input-group-append">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>за м&sup2; в год</option>
                                <option value="1">Общая</option>
                            </select>
                        </div>
                    </div>

                    <div class="filter-3 d-flex mt-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Площадь</span>
                        </div>
                        <input type="number" class="form-control" placeholder="6300">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">-</span>
                        </div>
                        <input type="number" style="border-right: 1px solid #ced4da;border-radius: .25rem;" class="form-control" placeholder="700 000">
                        <button class="btn">Наличие стеллажей</button>
                    </div>

                    <div class="filter-4 d-flex mt-3">
                        <select class="form-select" name="region" id="" @if($regions->isEmpty()) disabled @endif>
                            @if($regions->isNotEmpty())
                                @foreach($regions as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach

                            @else
                                <option value="empty">Не выбрано</option>
                            @endif
                        </select>

                        <select class="form-select" name="direction" id="" @if($directions->isEmpty()) disabled @endif>
                            <option value="">Все направления</option>
                            @if($directions->isNotEmpty())
                                @foreach($directions as $direction)
                                    <option value="{{$direction->id}}">{{$direction->name}}</option>
                                @endforeach

                                @else
                                <option value="empty">Не выбрано</option>
                            @endif
                        </select>

                        <select class="form-select" name="highway" id="" @if($highways->isEmpty()) disabled @endif>
                            <option value="">Все шоссе</option>
                            @if($highways->isNotEmpty())
                                @foreach($highways as $highway)
                                    <option value="{{$highway->id}}">{{$highway->name}}</option>
                                @endforeach
                                <option value="">Все шоссе</option>
                                @else
                                <option value="empty">Не выбрано</option>
                            @endif
                        </select>
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Расстояние от МКАД</span>
                        </div>
                        <input type="number" class="form-control" placeholder="4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">-</span>
                        </div>
                        <input type="number" class="form-control" placeholder="92">
                        <div class="input-group-append">
                            <span class="input-group-text">км</span>
                        </div>
                    </div>
                    <div class="buttons">
                      <button class="btn btn-apply-filter">Показать</button><button class="btn reset">Очистить</button>
                  </div>
                </div>
            </div>

        </form>

        <div class="group">
            <p>Найдено 0 предложений</p>
            <div>
                <button>Б/М</button>
                <button>Флекс</button>
                <button>Грид</button>
            </div>
        </div>


        <div class="list">
            @if($objects->isNotEmpty())
                @foreach($objects as $object)
                    <a href="{{route('objects.show', $object->id)}}" class="item">
                        <img src="{{asset('img/slider-1.jpg')}}"/>
                        <div class="text ob">
                            <h2>

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

                                {{$object->title}}</h2>
                            <p>

                                <svg fill="#b1bbc5" width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                                </svg>


                                <strong>Общая:</strong> {{$object->all_square}} м²</p>
                            <hr>
                            <div class="price">
                                <h3>{{$object->type_room == 1 ? 'Аренда' : 'Продажа'}}</h3>
                                <p>{{$object->price}} ₽/м²</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif

        </div>
        <div class="pagination">
            <button disabled><</button>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
            <button>></button>
        </div>
        <div class="news">
            <h2>Новости</h2>
            <div class="list">
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                     <div class="text">
                         <p class="date">25.06.2024</p>
                         <h3>Загаловоок</h3>
                     </div>
                </a>
            </div>
            <a class="news_more" href="#">Все новости</a>
        </div>
        <div class="news">
            <h2>Новости</h2>
            <div class="list">
                <a href="#" class="item">
                    <img src="{{asset('img/slider-1.jpg')}}"/>
                     <div class="text">
                         <p class="date">25.06.2024</p>
                         <h3>Загаловоок</h3>
                     </div>
                </a>
            </div>
            <a class="news_more" href="#">Все обзоры</a>
        </div>
    </div>
</div>
@endsection
