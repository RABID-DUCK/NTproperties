<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://kit.fontawesome.com/0ca303331d.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navigation')

        <main id="app">
            @yield('content')
        </main>

        <footer class="">
            <div class="container">
            <a class="navbar-brand nav-logo align-self-center" href="{{route('main-page')}}"></a>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">УСЛУГИ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ОБЪЕКТЫ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">КОНТАКТЫ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ПАРТНЕРЫ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">АНАЛИТИКА</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">КОМПАНИЯ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">РУКОВОДСТВО</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
        </footer>

        <div class="bottom_block pdd">
            <div class="container">
                <div class="copy">© 2018-{{now()->year}} NT Properties. Все права защищены.</div>
                <div class="clear"></div>
            </div>
        </div>

        <script src="{{asset('js/main.js')}}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
