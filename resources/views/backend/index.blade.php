<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/admin/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/OverlayScrollbars.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/summernote-bs4.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0ca303331d.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Главная</a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.dashboard')}}" class="brand-link">
            <span class="brand-text font-weight-light">Админка</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('img/rykovod.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="{{route('admin.regions')}}" class="nav-link {{ Request::is('admin/regions') ? 'active' : '' }}">
                            <i class="fa-solid fa-city"></i>
                            <p>
                                Города
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.directions')}}" class="nav-link {{ Request::is('admin/directions') ? 'active' : '' }}">
                            <i class="fa-solid fa-compass"></i>
                            <p>
                                Направления
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.highways')}}" class="nav-link {{ Request::is('admin/highways') ? 'active' : '' }}">
                            <i class="fa-solid fa-road"></i>
                            <p>
                                Шоссе
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.news')}}" class="nav-link {{ Request::is('admin/news') ? 'active' : '' }}">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>
                                Новости
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.objects')}}" class="nav-link {{ Request::is('admin/objects') ? 'active' : '' }}">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>
                                Объекты
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.reviews')}}" class="nav-link {{ Request::is('admin/reviews') ? 'active' : '' }}">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>
                                Обзоры
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.feedbacks')}}" class="nav-link {{ Request::is('admin/feedbacks') ? 'active' : '' }}">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>
                                Обратная связь
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{route('admin.maillings')}}" class="nav-link {{ Request::is('admin/maillings') ? 'active' : '' }}">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>
                                Рассылка
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Админ панель</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
            @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0-rc
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{asset('js/admin/backend.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('js/admin/js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/admin/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('js/admin/js/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/admin/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/admin/js/adminlte.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
