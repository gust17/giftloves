<!--
=========================================================
* GiftLoves - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">

    <title>
        GiftLoves
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->
    <link href="{{asset('dash/assets/css/nucleo-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('dash/assets/css/nucleo-svg.css')}}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('dash/assets/css/nucleo-svg.css')}}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('dash/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet"/>
</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-info position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{url('dashboard')}}">
            <img src="{{asset('logo2.svg')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">GiftLoves</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('dashboard')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Site</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('recebidos')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Recebidos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('enviados')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Enviados</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('extrato')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Extratos</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Perfil</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/rtl.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Minha Conta</span>
                </a>
            </li>
            <li class="nav-item">


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sair</span>
                </a>
            </li>

        </ul>
    </div>

</aside>
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
         data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <h6 class="font-weight-bolder text-white mb-0">{{$page}}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{auth()->user()->name}}</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        @include('flash-message')
        @yield('miolo')
        <footer style="margin-top: 300px" class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            ,
                            <i class="fa fa-heart"></i> by
                            <a href="http://giftLoves.com.br" class="font-weight-bold" target="_blank">GiftLoves</a>
                            Seu presente descomplicado
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                            <li class="nav-item">
                                <a href="{{url('sobrenos')}}" class="nav-link text-muted" target="_blank">Sobre Nós</a>
                            </li>

                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                   target="_blank">Termos de Uso</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</main>

<!--   Core JS Files   -->
<script src="{{asset('dash/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('dash/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('dash/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('dash/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('dash/assets/js/plugins/chartjs.min.js')}}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dash/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>


@yield('js')
</body>

</html>
