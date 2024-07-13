<header>
    <div class="nav-wrap container">
        <div class="header-wrapper d-flex justify-content-between">
            <a class="navbar-brand nav-logo align-self-center" href="{{route('main-page')}}"></a>
            <div class="d-flex">
                <div class="d-flex">
                    <i class="fa-solid fa-location-dot" style="color: #ff6d12; margin-right: 10px;"></i>
                    <div>
                        <span>Москва, БЦ "Станколит"</span> <br>
                        <span> Складочная ул. 1, стр. 1</span>
                    </div>
                </div>
                <div class="item-header-wrapper">
                    <i class="fa-sharp fa-solid fa-phone-volume fa-rotate-by" style="color: #ff6d12; --fa-rotate-angle: 40deg;"></i>
                    <a href="tel:+84952233553"><span>8 495 223 35 53</span></a>
                </div>
                <div class="item-header-wrapper">
                    <a href="mailto:komolikova@ntproperties.ru"><i class="fa-regular fa-envelope" style="color: #ff6d12;"></i></a>
                </div>
                <div class="item-header-wrapper">
                    <select class="form-select">
                        <option value="ru" selected>RU</option>
                        <option value="en">EN</option>
                    </select>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('services')}}">УСЛУГИ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('objects')}}">ОБЪЕКТЫ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contacts')}}">КОНТАКТЫ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('partners')}}">ПАРТНЕРЫ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('analitick')}}">АНАЛИТИКА</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('company')}}">КОМПАНИЯ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('guide')}}">РУКОВОДСТВО</a>
                        </li>
                        <li class="nav-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>
