<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/styles.css') }}">

    @yield('header')
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 col-12">
            <nav class="nav nav-pills flex-column">
                <a class="navbar-brand text-dark" href="#">
                    <img src="{{ asset('assets/images/avatar.png') }}" alt="avatar" class="d-inline-block align-text-middle rounded-pill">
                    علی خوشکار
                  </a>
                    <ul class="navbar-nav border-start">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active" >
                                <span class="mx-3">داشبورد</span>
                            </a>
                            {{-- <div class="collapse" id="dashboad-tab">
                                <ul class="navbar-nav mx-5">
                                    <li class="nav-item"> <a class="child-link active" data-bs-toggle="collapse"
                                            href="#dashboard-collapse" role="button" aria-expanded="false"
                                            aria-controls="dashboard-collapse"> Active
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Longer nav link</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                    </ul>
                    
                </nav>
            </div>


  