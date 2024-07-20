@extends('layouts.app')

@section('content')
    <div id="carouselExampleInterval" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100" data-bs-interval="10000">
                <img src="{{asset('img/slider-1.jpg')}}" class="d-block w-100 h-100" alt="слайдер 1">
                @include('components.UI.filter-window')
            </div>
            <div class="carousel-item h-100" data-bs-interval="10000">
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
                    <h2>{{__('main.subscribe_email')}}</h2>
                    <p>{{__('main.subscribe_email_text')}})</p>
                </div>
            </div>
            <div class="mailing-write d-flex">
                <input type="text" class="form-control" id="email_mailling" placeholder="{{__('main.placeholder_email')}}">
                <button type="button" class="btn btn-orange" id="sub_mail">{{__('main.subscribe_button')}}</button>
            </div>
        </div>
    </div>

{{--    Конец секции подписки на рассылку--}}
<div class="container">
    <div class="main_object">
         <h2>{{__('main.last_objects')}}</h2>
         <div class="list">
             @if($objects->isNotEmpty())
                 @foreach($objects as $object)
                   @if(app()->currentLocale() == 'RU' && $object->title !== null)
                         <a href="{{route('objects.show', $object->id)}}" class="item">
                             @if(!empty($object->getImages($object->id)))
                                 <img src="{{asset('storage/images/' . $object->getImages($object->id)->name)}}" alt="{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}" />
                             @endif
                             <div class="text ob">
                                 <h2>
                                     <svg fill="#ff6d12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                          width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g><path d="M50,10.417c-15.581,0-28.201,12.627-28.201,28.201c0,6.327,2.083,12.168,5.602,16.873L45.49,86.823
                               c0.105,0.202,0.21,0.403,0.339,0.588l0.04,0.069l0.011-0.006c0.924,1.278,2.411,2.111,4.135,2.111c1.556,0,2.912-0.708,3.845-1.799
                               l0.047,0.027l0.179-0.31c0.264-0.356,0.498-0.736,0.667-1.155L72.475,55.65c3.592-4.733,5.726-10.632,5.726-17.032
                               C78.201,23.044,65.581,10.417,50,10.417z M49.721,52.915c-7.677,0-13.895-6.221-13.895-13.895c0-7.673,6.218-13.895,13.895-13.895
                               s13.895,6.222,13.895,13.895C63.616,46.693,57.398,52.915,49.721,52.915z"/></g></svg>

                                     {{ $object->title }}</h2>
                                 <p>

                                     <svg fill="#b1bbc5" width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                                     </svg>

                                     <strong>{{__('main.price_select_2')}}:</strong> {{$object->all_square}} {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                                 <hr>
                                 <div class="price">
                                     <h3>{{$object->type_room == 1 ? __('main.type_room_1') : __('main.type_room_2')}}</h3>
                                     <p>{{$object->price}} ₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                                 </div>
                             </div>
                         </a>

                     @elseif(app()->currentLocale() == 'EN' && $object->eng_title !== null)
                         <a href="{{route('objects.show', $object->id)}}" class="item">
                             @if(!empty($object->getImages($object->id)))
                                 <img src="{{asset('storage/images/' . $object->getImages($object->id)->name)}}" alt="{{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}" />
                             @endif
                             <div class="text ob">
                                 <h2>
                                     <svg fill="#ff6d12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                          width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g><path d="M50,10.417c-15.581,0-28.201,12.627-28.201,28.201c0,6.327,2.083,12.168,5.602,16.873L45.49,86.823
                               c0.105,0.202,0.21,0.403,0.339,0.588l0.04,0.069l0.011-0.006c0.924,1.278,2.411,2.111,4.135,2.111c1.556,0,2.912-0.708,3.845-1.799
                               l0.047,0.027l0.179-0.31c0.264-0.356,0.498-0.736,0.667-1.155L72.475,55.65c3.592-4.733,5.726-10.632,5.726-17.032
                               C78.201,23.044,65.581,10.417,50,10.417z M49.721,52.915c-7.677,0-13.895-6.221-13.895-13.895c0-7.673,6.218-13.895,13.895-13.895
                               s13.895,6.222,13.895,13.895C63.616,46.693,57.398,52.915,49.721,52.915z"/></g></svg>

                                     {{app()->currentLocale() == 'RU' ? $object->title : $object->eng_title}}</h2>
                                 <p>

                                     <svg fill="#b1bbc5" width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                                     </svg>

                                     <strong>{{__('main.price_select_2')}}:</strong> {{ number_format($object->all_square, 0, '', ' ') }} {{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                                 <hr>
                                 <div class="price">
                                     <h3>{{$object->type_room == 1 ? __('main.type_room_1') : __('main.type_room_2')}}</h3>
                                     <p>{{ number_format($object->price, 0, '', ' ') }} ₽/{{app()->currentLocale() == 'RU' ? 'м²' : 'sq.m.'}}</p>
                                 </div>
                             </div>
                         </a>
                   @endif
                 @endforeach
         @endif

         </div>
         <a href="{{route('objects')}}" class="news_more">{{__('main.show_all')}}</a>
    </div>
</div>

    <div class="news-wrapper">
        <div class="container">
        <a href="{{route('news')}}" class="text-center">{{__('main.title_news')}}</a>
            <div class="slider">
                <button class="prev">

                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                <g id="SVGRepo_iconCarrier"> <path d="M10 7L15 12L10 17" stroke="#c3d1d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g>

                </svg>

                </button>
                <div class="list siema">
                     @if($news->isNotEmpty())
                        @foreach($news as $item)
                            @if(app()->currentLocale() == 'RU')
                                <div class="news-item">
                                    <img src="{{asset('storage/images/' . $item->image)}}" alt="{{$item->img}}">
                                    <div class="text">
                                        <span class="date">{{$item->created_at->format('m.d.y')}}</span>
                                        <h4>{{ $item->title }}</h4>
                                    </div>
                                    <p>{!! substr(strip_tags($item->description), 0, 150) !!}...</p>
                                    <a href="{{route('news-single', $item->id)}}" class="more">{{__('main.read_all')}}</a>
                                </div>
                            @elseif(app()->currentLocale() == 'EN' && $item->eng_title !== null)
                                <div class="news-item">
                                    <img src="{{asset('storage/images/' . $item->image)}}" alt="{{$item->img}}">
                                    <div class="text">
                                        <span class="date">{{$item->created_at->format('m.d.y')}}</span>
                                        <h4>{{app()->currentLocale() == 'RU' ? $item->title : $item->eng_title}}</h4>
                                    </div>
                                    <p>{!! substr(strip_tags(app()->currentLocale() == 'RU' ? $item->description : $item->eng_description), 0, 150) !!}...</p>
                                    <a href="{{route('news-single', $item->id)}}" class="more">{{__('main.read_all')}}</a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                <button class="next">

                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 7L15 12L10 17" stroke="#c3d1d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                </button>
            </div>
        </div>
    </div>

    <div class="about-blog">
        <div class="bg"></div>
        <div class="container">

            <div class="txt std">
                <h1>NT Properties</h1>
                {!! __('main.about_main') !!}
                <p>
                    <a class="more" href="{{route('company')}}">{{__('main.read_all')}}</a>
                </p>
            </div>
        </div>
    </div>

    <div class="d-none" id="send_email_info" style="position:fixed; bottom: 0; right: 0; background-color: gray; color: white; padding: 10px">
        <span></span>
    </div>

    <script src="{{ asset('/js/siema.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const createSiema = (perPage) => {
                    return new Siema({
                        selector: '.siema',
                        duration: 200,
                        easing: 'ease-out',
                        perPage: perPage,
                        startIndex: 0,
                        draggable: true,
                        multipleDrag: true,
                        threshold: 20,
                        loop: false,
                        rtl: false,
                        onInit: () => {},
                        onChange: () => {},
                    });
                };
                let mySiema = createSiema(4)

            document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
            document.querySelector('.next').addEventListener('click', () => mySiema.next());

            const updateSiemaPerPage = () => {
                    const width = window.innerWidth;

                    let perPage;
                    if (width >= 320 && width <= 480) {
                        perPage = 1;
                    } else if (width >= 480 && width <= 768) {
                        perPage = 2;
                    } else if (width >= 768 && width <= 1024) {
                        perPage = 3;
                    } else {
                        perPage = 4;
                    }

                    mySiema.destroy(true);


                    mySiema = createSiema(perPage);


                    document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
                    document.querySelector('.next').addEventListener('click', () => mySiema.next());
                };

                updateSiemaPerPage();


                window.addEventListener("resize", updateSiemaPerPage);

            let email = document.getElementById('email_mailling');
            let button = document.getElementById('sub_mail');
            let modal = document.getElementById('send_email_info');
            let modalMessage = modal.querySelector('span');

            button.addEventListener('click', function() {
                let emailValue = email.value;

                fetch("{{ route('mailling') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ email: emailValue })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.message) {
                            email.style.display = 'none';
                            button.style.display = 'none';

                            modal.classList.remove('d-none');
                            modalMessage.textContent = data.message;

                            setTimeout(function() {
                                modal.classList.add('d-none');
                                modalMessage.textContent = '';
                            }, 2000);
                        } else {
                            modal.classList.remove('d-none');
                            modalMessage.textContent = data.error;

                            setTimeout(function() {
                                modal.classList.add('d-none');
                                modalMessage.textContent = '';
                            }, 2000);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
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
    </script>
@endsection
