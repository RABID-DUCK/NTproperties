@extends('layouts.app')

@section('content')
    <div id="carouselExampleInterval" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100" data-bs-interval="100000000000000000000">
                <img src="{{asset('img/slider-1.jpg')}}" class="d-block w-100 h-100" alt="слайдер 1">
                @include('components.UI.filter-window')
            </div>
            <div class="carousel-item h-100" data-bs-interval="10000000000000000000000">
                <img src="{{asset('img/slider-2.jpg')}}" class="d-block w-100 h-100" alt="слайдер 2">
                @include('components.UI.filter-window', compact('regions', 'directions', 'highways'))
            </div>
        </div>
    </div>

{{--    Секция подписки на рассылку   --}}
    <div class="mailing-wrapper">
        <div class="mailing-content d-flex justify-content-between align-items-center flex-sm-column flex-xxl-row">
            <div class="mailing-text d-flex align-items-start">
                <i class="fa-regular fa-envelope" style="color: #ff6d12; margin-right: 15px;"></i>
                <div>
                    <h2>Подписка на рассылку</h2>
                    <p>Подпишитесь на нашу рассылку чтобы своевременно получать уведомления об акциях и выгодных предложениях</p>
                </div>
            </div>
            <div class="mailing-write d-flex">
                <input type="text" class="form-control" placeholder="Ваш email">
                <button class="btn btn-orange">Подписаться</button>
            </div>
        </div>
    </div>

{{--    Конец секции подписки на рассылку--}}
<div class="container">
    <div class="main_object">
         <h2>Обьекты</h2>
         <div class="list">
           <a href="#" class="item">
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

                       ЛП Истра</h2>
                   <p>

                       <svg fill="#b1bbc5" width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                           <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                       </svg>


                       <strong>Общая:</strong> 2000 м²</p>
                   <hr>
                   <div class="price">
                       <h3>Аренда</h3>
                       <p>100000 ₽/м²</p>
                   </div>
               </div>
           </a>
         </div>
         <a href="# " class="news_more">Показать все</a>
    </div>
</div>



    <div class="news-wrapper">
        <div class="container">
        <a href="{{route('news')}}" class="text-center">Новости сферы недвижимости</a>
            <div class="list">
                 @if($news->isNotEmpty())
                    @foreach($news as $item)
                        <div class="news-content d-flex">
                            <div class="news-item">
                                <img src="{{asset('storage/images/' . $item->image)}}" alt="{{$item->img}}">
                                <span class="date">{{$item->created_at}}</span><br>
                                <h4>{{$item->title}}</h4>
                                <p>{!! substr(strip_tags($item->description), 0, 340) !!}...</p>
                                <a href="{{route('news-single', $item->id)}}" class="more">Читать полностью</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="about-blog">
        <div class="bg"></div>
        <div class="container">

            <div class="txt std">
                <h1>NT Properties</h1>
                <p>
                    Компания NT Properties является независимой консалтинговой компанией, предоставляющей профессиональные услуги на рынке коммерческой и жилой недвижимости.
                </p>
                <p>
                    Мы объединяем специалистов и брокеров, являющихся носителями уникальных знаний и компетенций с многолетним опытом работы в недвижимости. Наши клиенты получают полное сопровождение в процессе подбора или реализации объектов недвижимости.
                </p>
                <p>
                    Компания работает в соответствии с международными стандартами предоставления агентских и брокерских услуг RICS – Real Estate Agency and Brokerage Standards (REABS).
                </p>
                <p>
                    <a class="more" href="{{route('object-single')}}">Читать полностью</a>
                </p>
            </div>
        </div>
    </div>
@endsection
