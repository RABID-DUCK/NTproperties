@extends('layouts.app')

@section('content')
    <div id="carouselExampleInterval" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('img/slider-1.jpg')}}" class="d-block w-100" alt="слайдер 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('img/slider-2.jpg')}}" class="d-block w-100" alt="слайдер 2">
            </div>
        </div>

        <div class="filter-wrapper">
            <div class="filter-window">
                <div class="filter-content p-4">
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
                                <option selected>за м<sub>2</sub> в год</option>
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
                        <input type="number" class="form-control" placeholder="700 000">
                        <button class="btn">Наличие стеллажей</button>
                    </div>

                    <div class="filter-4 d-flex mt-3">
                        <select class="form-select" name="" id="">
                            <option value="">Города</option>
                        </select>

                        <select class="form-select" name="" id="">
                            <option value="">Все направления</option>
                        </select>

                        <select class="form-select" name="" id="">
                            <option value="">Все шоссе</option>
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
                </div>
            </div>

            <button class="btn btn-apply-filter">ПОКАЗАТЬ РЕЗУЛЬТАТЫ</button>
        </div>
    </div>

{{--    Секция подписки на рассылку   --}}
    <div class="mailing-wrapper">
        <div class="mailing-content d-flex justify-content-between align-items-center">
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
        <h1 class="text-center">Новости сферы недвижимости</h1>

        <div class="news-content d-flex">
            <div class="news-item">
                <img src="{{asset('img/slider-1.jpg')}}" alt="">
                <span class="date">25.05.2024</span><br>
                <h4>Холдинг "Строительный Альянс" построит 746 тыс. кв. м площадей Light Industrial</h4>
                <p>Холдинг "Строительный альянс" является одним из ведущих девелоперов на рынке Light</p>
                <a href="#" class="more">Читать полностью</a>
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
                    <a class="more" href="/kompaniya/">Читать полностью</a>
                </p>
            </div>
        </div>
    </div>
@endsection
