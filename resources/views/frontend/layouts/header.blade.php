<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles.css') }}">

    @yield('header')
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('authorization') }}" class="nav-link"> ورود / ثبت نام <i
                                class="fa fa-address-book-o" aria-hidden="true"></i></a>
                    </li>
                    <div class="dropdown">
                        <li class="list-group-item">چت</li>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">شخصی </li>
                            <li class="dropdown-item">گروهی</li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <li class="list-group-item">فروشگاه</li>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">شخصی</li>
                            <li class="dropdown-item">گروهی</li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <li class="list-group-item">بلاگ</li>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">شخصی</li>
                            <li class="dropdown-item">گروهی</li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <li class="list-group-item">امتیاز کلاب</li>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">شخصی</li>
                            <li class="dropdown-item">گروهی</li>
                        </ul>
                    </div>
                </ul>
                <a class="navbar-brand" href="#">
                  
                  </a>
                <a class="navbar-brand fw-bold" href="{{ route('index') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
                    پروژه
                </a>
            </div>
        </div>
    </nav>
