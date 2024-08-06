@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/objects.css')}}">
<div class="container">
    <div class="objects">
        <div class="bread">
            <a href="{{route('main-page')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.77778 10.2222V18C5.77778 19.1046 6.67321 20 7.77778 20H12M5.77778 10.2222L11.2929 4.70711C11.6834 4.31658 12.3166 4.31658 12.7071 4.70711L17.5 9.5M5.77778 10.2222L4 12M18.2222 10.2222V18C18.2222 19.1046 17.3268 20 16.2222 20H12M18.2222 10.2222L20 12M18.2222 10.2222L17.5 9.5M17.5 9.5V6M12 20V15" stroke="#ff6d12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a><a href="{{route('main-page')}}"> {{__('main.main')}} <span>></span></a><a href="#"> {{__('main.object')}} <span>></span></a>
        </div>
        <h1>{{ __('main.object') }}</h1>

        <form class="filter-wrapper" action="{{route('object-list')}}" id="filterForm">
            <div class="filter-window">
                <div class="filter-content">
                    <div class="filter-1 d-flex">
                        <div class="button">
                            <button type="button" class="btn d-flex align-items-center {{isset($price_type) && $price_type == 1 ? 'active' : ''}} {{!isset($price_type) ? 'active' : ''}}" id="rentBtn"><i class="fas fa-check" style="margin-right: 10px;"></i> {{__('main.type_room_1')}}</button>
                            <button type="button" class="btn d-flex align-items-center {{isset($price_type) && $price_type == 2 ? 'active' : ''}}" id="saleBtn" style="margin-left: 10px; margin-right: 10px"><i class="fas fa-times" style="margin-right: 10px;"></i> {{__('main.type_room_2')}}</button>
                        </div>
                        <input type="hidden" name="price_type" id="price_type" value="1">
                        <select class="form-select" name="type_room" id="">
                            <option value="1">{{__('main.type_room_3')}}</option>
                            <option value="2">{{__('main.type_room_4')}}</option>
                        </select>
                    </div>

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">{{__('main.price')}}</span>
                        </div>
                        <div class="button">
                            <input type="number" class="form-control" name="price_min" placeholder="10 000">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">-</span>
                            </div>
                            <input type="number" class="form-control" placeholders="20 000" name="price_max">
                        </div>
                        <div class="input-group-append">
                            <select class="form-select" id="inputGroupSelect01" name="price_type2">
                                <option value="metr" selected>{!! __('main.price_select_1') !!}</option>
                                <option value="main">{{__('main.price_select_2')}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="filter-3 d-flex mt-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">{{__('main.square')}}</span>
                        </div>
                        <div class="button">
                            <input type="number" class="form-control" placeholder="6300" name="square_min">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">-</span>
                            </div>
                            <input type="number" style="border-right: 1px solid #ced4da;border-radius: .25rem;" class="form-control" placeholder="700 000" name="square_max">
                        </div>
                        <input type="hidden" name="availability" value="">
                        <input type="checkbox" id="isHave" name="availability" value="on"></input>
                        <label class="btn" for="isHave">{{__('main.stellage')}}</label>
                    </div>

                    <div class="filter-4 d-flex mt-3">
                        <select class="form-select" name="region" id="" @if($regions->isEmpty()) disabled @endif>
                            @if($regions->isNotEmpty())
                                @foreach($regions as $region)
                                    <option value="{{$region->id}}">{{app()->currentLocale() == 'RU' ? $region->name : $region->eng_name}}</option>
                                @endforeach

                            @else
                                <option value="empty">{{ __('main.no_select') }}</option>
                            @endif
                        </select>

                        <select class="form-select" name="direction" id="" @if($directions->isEmpty()) disabled @endif>
                            <option value="">{{__('main.all_directions')}}</option>
                            @if($directions->isNotEmpty())
                                @foreach($directions as $direction)
                                    <option value="{{$direction->id}}">{{app()->currentLocale() == 'RU' ? $direction->name : $direction->eng_name}}</option>
                                @endforeach

                            @else
                                <option value="empty">{{ __('main.no_select') }}</option>
                            @endif
                        </select>

                        <select class="form-select" name="highway" id="" @if($highways->isEmpty()) disabled @endif>
                            <option value="">{{__('main.all_highways')}}</option>
                            @if($highways->isNotEmpty())
                                @foreach($highways as $highway)
                                    <option value="{{$highway->id}}">{{app()->currentLocale() == 'RU' ? $highway->name : $highway->eng_name}}</option>
                                @endforeach
                                    <option value="">{{__('main.all_highways')}}</option>
                            @else
                                <option value="empty">{{ __('main.no_select') }}</option>
                            @endif
                        </select>
                    </div>

                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">{{__('main.distance_mkad')}}</span>
                            </div>
                        <div class="button">
                            <input type="number" class="form-control" placeholder="4" name="distance_min">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">-</span>
                            </div>
                            <input type="number" class="form-control" placeholder="92" name="distance_max">

                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">{{__('main.km')}}</span>
                        </div>
                    </div>
                    <div class="buttons">
                      <button class="btn btn-apply-filter" type="submit">{{__('main.show')}}</button><button type="button" class="btn reset" id="clear_filter">{{__('main.clear')}}</button>
                  </div>
                </div>
            </div>
        </form>

        <div class="group">
            <p>{{app()->currentLocale() == 'RU' ? 'Найдено '. $objects->count() . ' предложений' : $objects->count() . ' offers found'}}</p>
            <div>
                <input id="sort" type="checkbox"/>
                <label for="sort" class="sort" id="sortIcon" data-sort-direction="asc">
                    <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00002 5C7.00002 4.44772 6.5523 4 6.00002 4C5.44773 4 5.00002 4.44772 5.00002 5V16.5858L3.7071 15.2929C3.31658 14.9024 2.68341 14.9024 2.29289 15.2929C1.90237 15.6834 1.90237 16.3166 2.2929 16.7071L5.29291 19.7071C5.68344 20.0976 6.3166 20.0976 6.70713 19.7071L9.70713 16.7071C10.0977 16.3166 10.0977 15.6834 9.70713 15.2929C9.3166 14.9024 8.68344 14.9024 8.29291 15.2929L7.00002 16.5858V5ZM13 6C12.4477 6 12 6.44772 12 7C12 7.55228 12.4477 8 13 8H14C14.5523 8 15 7.55228 15 7C15 6.44772 14.5523 6 14 6H13ZM13 11C12.4477 11 12 11.4477 12 12C12 12.5523 12.4477 13 13 13H17C17.5523 13 18 12.5523 18 12C18 11.4477 17.5523 11 17 11H13ZM13 16C12.4477 16 12 16.4477 12 17C12 17.5523 12.4477 18 13 18H21C21.5523 18 22 17.5523 22 17C22 16.4477 21.5523 16 21 16H13Z" fill="#ff6d12"/>
                    </svg>
                </label>

                <input name="display" id="fl" type="radio"/>
                <label class="fll" for="fl">

                    <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 6.00067L21 6.00139M8 12.0007L21 12.0015M8 18.0007L21 18.0015M3.5 6H3.51M3.5 12H3.51M3.5 18H3.51M4 6C4 6.27614 3.77614 6.5 3.5 6.5C3.22386 6.5 3 6.27614 3 6C3 5.72386 3.22386 5.5 3.5 5.5C3.77614 5.5 4 5.72386 4 6ZM4 12C4 12.2761 3.77614 12.5 3.5 12.5C3.22386 12.5 3 12.2761 3 12C3 11.7239 3.22386 11.5 3.5 11.5C3.77614 11.5 4 11.7239 4 12ZM4 18C4 18.2761 3.77614 18.5 3.5 18.5C3.22386 18.5 3 18.2761 3 18C3 17.7239 3.22386 17.5 3.5 17.5C3.77614 17.5 4 17.7239 4 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </label>
                <input name="display" id="gr" type="radio" checked/>
                <label class="grl" for="gr">
                    <svg fill="#000000" width="36px" height="36px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 12h4v-4h-4v4zM14 12h4v-4h-4v4zM20 8v4h4v-4h-4zM8 18h4v-4h-4v4zM14 18h4v-4h-4v4zM20 18h4v-4h-4v4zM8 24h4v-4h-4v4zM14 24h4v-4h-4v4zM20 24h4v-4h-4v4z"></path>
                  </svg>
                </label>
            </div>
        </div>


        <div id="list" class="list list-objects">
            @if($objects->isNotEmpty())
                @foreach($objects as $object)
                    @if(app()->currentLocale() == 'RU' && $object->title !== null)
                    <a href="{{route('objects.show', [$object->id, $price_type2 ?? 1])}}" class="item item-object" data-price="{{ $object->price }}">
                        @if(!empty($object->getImages($object->id)))
                            <img src="{{asset('storage/images/' . $object->getImages($object->id)->name)}}" alt="{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}" />
                        @endif
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

                                {{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}</h2>
                            <p>

                                <svg fill="#b1bbc5" width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                                </svg>


                                <strong>{{__('main.price_select_2')}}:</strong> {{ number_format($object->all_square, 0, '', ' ') }} {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                            <hr>
                            <div class="price price-object">
                                <div class="type_price">
                                    <h3>{{$object->price_type == 1 ? __("main.type_room_1_1") : __("main.type_room_2")}}</h3>
                                    <h3>dsadsa</h3>
                                </div>
                                <div class="text_price">
                                    <p data-price="{{ $object->price_type == 1 && $object->all_square !== null ? ($object->price * $object->all_square) / 12 : ($object->all_square !== null ? $object->price * $object->all_square : $object->price) }}" data-square="{{ $object->all_square }}">
                                        @if(isset($price_type2) && $price_type2 == 2 && $object->all_square !== null)
                                            {{ number_format($object->price_type == 1 ? ($object->price * $object->all_square) / 12 : $object->price * $object->all_square, 0, '', ' ') }}
                                            ₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}

                                        @else
                                            {{ number_format($object->price, 0, '', ' ') }}₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}
                                        @endif
                                    </p>
                                    <p>dsadsadswa</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    @elseif(app()->currentLocale() == 'EN' && $object->eng_title !== null)
                        <a href="{{route('objects.show', [$object->id, 1])}}" class="item item-object" data-price="{{ $object->price }}">
                            @if(!empty($object->getImages($object->id)))
                                <img src="{{asset('storage/images/' . $object->getImages($object->id)->name)}}" alt="{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}" />
                            @endif
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

                                    {{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}</h2>
                                <p>

                                    <svg fill="#b1bbc5" width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                                    </svg>


                                    <strong>{{__('main.price_select_2')}}:</strong> {{ number_format($object->all_square, 0, '', ' ') }} {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                                <hr>
                                <div class="price price-object">
                                    <div class="type_price">
                                        <h3>{{$object->type_room == 1 ? __("main.type_room_1") : __("main.type_room_2")}}</h3>
                                        <h3>fhtydsad</h3>
                                    </div>
                                    <div class="text_price">
                                        <p>
                                            @if(isset($price_type2) && $price_type2 == 2 && $object->all_square !== null)
                                            {{ number_format($object->price_type == 1 ? ($object->price * $object->all_square) / 12 : $object->price * $object->all_square, 0, '', ' ') }}
                                            ₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}

                                            @else
                                            {{ number_format($object->price, 0, '', ' ') }}₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}
                                            @endif
                                        </p>
                                        <p>dsadsadasd</p>
                                    </div>

                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            @endif

        </div>
        <div class="pagination">
            @if ($objects->onFirstPage())
                <button disabled><</button>
            @else
                <a href="{{ $objects->previousPageUrl() }}"><</a>
            @endif

            @foreach ($objects->links()->elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $objects->currentPage())
                            <a class="active" href="{{ $url }}">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($objects->hasMorePages())
                <a href="{{ $objects->nextPageUrl() }}">></a>
            @else
                <button disabled>></button>
            @endif
        </div>

        <div class="news">
            <h2>{{__('main.news')}}</h2>
            <div class="list">
                @if($news->isNotEmpty())
                    @foreach($news as $item)
                        @if(app()->currentLocale() == 'RU' && $item->title !== null)
                        <a href="{{route('news-single', $item->id)}}" class="item">
                            <img src="{{asset('storage/images/' . $item->image)}}" alt="{{$item->img}}" />
                             <div class="text">
                                 <p class="date">{{$item->created_at->format('d.m.y')}}</p>
                                 <h3>{{app()->currentLocale() == 'RU' ? $item->title : $item->eng_title}}</h3>
                             </div>
                        </a>

                        @elseif(app()->currentLocale() == 'EN' && $item->eng_title !== null)
                            <a href="{{route('news-single', $item->id)}}" class="item">
                                <img src="{{asset('storage/images/' . $item->image)}}" alt="{{$item->img}}" />
                                <div class="text">
                                    <p class="date">{{$item->created_at->format('d.m.y')}}</p>
                                    <h3>{{app()->currentLocale() == 'RU' ? $item->title : $item->eng_title}}</h3>
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
            <a class="news_more" href="{{route('news')}}">{{__('main.all_news')}}</a>
        </div>

        <div class="news">
            <h2>{{__('main.reviews')}}</h2>
            <div class="list">
                @if($reviews->isNotEmpty())
                    @foreach($reviews as $review)
                        @if(app()->currentLocale() == 'RU' && $review->title !== null)
                        <a href="{{route('reviews.single', $review->id)}}" class="item">
                            <img src="{{asset('storage/images/' . $review->image)}}"/>
                             <div class="text">
                                 <p class="date">{{$review->created_at->format('d.m.y')}}</p>
                                 <h3>{{app()->currentLocale() == 'RU' ? $review->title : $review->eng_title}}</h3>
                             </div>
                        </a>

                        @elseif(app()->currentLocale() == 'EN' && $review->eng_title !== null)
                            <a href="{{route('reviews.single', $review->id)}}" class="item">
                                <img src="{{asset('storage/images/' . $review->image)}}"/>
                                <div class="text">
                                    <p class="date">{{$review->created_at->format('d.m.y')}}</p>
                                    <h3>{{app()->currentLocale() == 'RU' ? $review->title : $review->eng_title}}</h3>
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
            <a class="news_more" href="{{route('reviews')}}">{{__('main.all_reviews')}}</a>
        </div>
    </div>
</div>

<script>
    document.getElementById('clear_filter').addEventListener('click', function() {
        document.getElementById('filterForm').reset();
    });

    let rentBtn = document.getElementById('rentBtn');
    let saleBtn = document.getElementById('saleBtn');

    if(rentBtn  && saleBtn){
        rentBtn.addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i> {{__("main.type_room_1")}}';
            saleBtn.innerHTML = '<i class="fas fa-times" style="margin-right: 10px;"></i> {{__("main.type_room_2")}}';
            let but = document.getElementById('price_type');
            but.setAttribute('value', '1')
            this.classList.add('active');
            saleBtn.classList.remove('active');
        });

        saleBtn.addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i> {{__("main.type_room_1")}}';
            rentBtn.innerHTML = '<i class="fas fa-times" style="margin-right: 10px;"></i> {{__("main.type_room_2")}}';
            let but = document.getElementById('price_type');
            but.setAttribute('value', '2')
            this.classList.add('active');
            rentBtn.classList.remove('active');
        });
    }

    document.getElementById('sortIcon').addEventListener('click', function () {
        var sortDirection = this.getAttribute('data-sort-direction') || 'asc';
        var newSortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
        this.setAttribute('data-sort-direction', newSortDirection);

        // Поворачиваем иконку
        this.querySelector('svg').style.transform = sortDirection === 'asc' ? 'rotate(180deg)' : 'rotate(0deg)';

        var container = document.querySelector('.list-objects');
        var items = Array.from(container.querySelectorAll('.item-object'));
        items.sort(function (a, b) {
            var priceA = parseFloat(a.getAttribute('data-price').match(/\d+/)[0]);
            var priceB = parseFloat(b.getAttribute('data-price').match(/\d+/)[0]);
            if (sortDirection === 'asc') {
                return priceA - priceB;
            } else {
                return priceB - priceA;
            }
        });

        items.forEach(function (item) {
            container.appendChild(item);
        });
    });
</script>
@endsection
