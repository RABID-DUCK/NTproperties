<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>NT Properties</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://kit.fontawesome.com/0ca303331d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navigation')

        <main id="app">
            @yield('content')
        </main>

        <footer class="">
            <div class="container">
            <div class="icons">
                <a class="navbar-brand nav-logo align-self-center" href="{{route('main-page')}}"></a>
                @if(app()->currentLocale() == 'EN')
                <a id="facebook" href="https://www.facebook.com/pg/New-Trend-Properties-325367804687317/about/?ref=page_internal">
                <svg fill="#c3d1d8" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="-143 145 512 512" xml:space="preserve">
                <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M169.5,357.6l-2.9,38.3h-39.3
                    v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2
                    c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"/>
                </svg>
                </a>
                <a id="inst" href="https://www.instagram.com/ntproperties/">

                <svg fill="#c3d1d8" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                	 viewBox="-143 145 512 512" xml:space="preserve">
                <g>
                	<path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8
                		c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"/>
                	<polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 	"/>
                	<path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157
                		c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"/>
                	<path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8
                		c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157
                		c27.3,0,49.5,22.2,49.5,49.5V374.7z"/>
                </g>
                </svg>

                </a>
                @else
                <a id="vk" href="https://vk.com/ntproperties">
                    <svg fill="#c3d1d8" width="32px" height="32px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.692 10.831s.849.838 1.058 1.227c.006.008.009.016.011.02.085.143.105.254.063.337-.07.138-.31.206-.392.212h-1.5c-.104 0-.322-.027-.586-.209-.203-.142-.403-.375-.598-.602-.291-.338-.543-.63-.797-.63a.305.305 0 0 0-.095.015c-.192.062-.438.336-.438 1.066 0 .228-.18.359-.307.359h-.687c-.234 0-1.453-.082-2.533-1.221-1.322-1.395-2.512-4.193-2.522-4.219-.075-.181.08-.278.249-.278h1.515c.202 0 .268.123.314.232.054.127.252.632.577 1.2.527.926.85 1.302 1.109 1.302a.3.3 0 0 0 .139-.036c.338-.188.275-1.393.26-1.643 0-.047-.001-.539-.174-.775-.124-.171-.335-.236-.463-.26a.55.55 0 0 1 .199-.169c.232-.116.65-.133 1.065-.133h.231c.45.006.566.035.729.076.33.079.337.292.308 1.021-.009.207-.018.441-.018.717 0 .06-.003.124-.003.192-.01.371-.022.792.24.965a.216.216 0 0 0 .114.033c.091 0 .365 0 1.107-1.273a9.718 9.718 0 0 0 .595-1.274c.015-.026.059-.106.111-.137a.266.266 0 0 1 .124-.029h1.781c.194 0 .327.029.352.104.044.119-.008.482-.821 1.583l-.363.479c-.737.966-.737 1.015.046 1.748z"/></svg>
                </a>
                @endif
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('services')}}">{{ __('main.services') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('objects')}}">{{ __('main.object') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contacts')}}">{{ __('main.contacts') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('partners')}}">{{ __('main.partners') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('analitick')}}">{{ __('main.analitick') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('company')}}">{{ __('main.company') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('guide')}}">{{ __('main.guide') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
        </footer>

        <div class="bottom_block pdd">
            <div class="container">
                <div class="copy">© 2018-{{now()->year}} {{__('main.copyright')}}</div>
                <div class="clear"></div>
            </div>
        </div>

        <script src="{{asset('js/main.js')}}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
