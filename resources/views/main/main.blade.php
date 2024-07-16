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

    <div class="news-wrapper">
        <div class="container">
        <a href="{{route('news')}}" class="text-center">Новости сферы недвижимости</a>
            <div class="list siema">
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
            <button class="prev">prev</button>
            <button class="next">next</button>
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

    <script src="{{ asset('/js/siema.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const mySiema = new Siema({
                selector: '.siema',
                duration: 200,
                easing: 'ease-out',
                perPage: 2,
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: false,
                rtl: false,
                onInit: () => {},
                onChange: () => {},
            });

            document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
            document.querySelector('.next').addEventListener('click', () => mySiema.next());
        });
    </script>
@endsection
