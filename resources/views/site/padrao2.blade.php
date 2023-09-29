<!doctype html>
<html lang="pt-br" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light"
      data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8"/>
    <title>giftloves | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="GiftLoves seu presente descomplicado" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Swiper slider css-->
    <link href="{{asset('novo/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Layout config Js -->
    <script src="{{asset('novo/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('novo/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('novo/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('novo/assets/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{asset('novo/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

<!-- Begin page -->
<div class="layout-wrapper landing">
    <nav style="background-color: #E9427D" class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top"
         id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets/images/logo.svg')}}" class="card-logo card-logo-dark" alt="logo dark"
                     height="17">
                <img src="{{asset('assets/images/logo.svg')}}" class="card-logo card-logo-light" alt="logo light"
                     height="17">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{url('/')}}">Duvidas</a>

                    </li>
                </ul>

                <div class="">
                    <a style="background-color: #FDC300FF" href="{{url('login')}}" class="btn btn-warning">Login</a>
                </div>
            </div>

        </div>
    </nav>
    <div class="bg-overlay bg-overlay-pattern"></div>
    <!-- end navbar -->

    <!-- start hero section -->


    <!-- start wallet -->
    @yield('miolo')

    <!-- start cta -->
<section style="background-color: #23B9D6" class="py-5 position-relative">
    <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-sm">
                <div>
                    <h4 class="text-white mb-0 fw-semibold">Venha fazer Parte da GiftLoves</h4>
                </div>
            </div>
            <!-- end col -->
            <div class="col-sm-auto">
                <div>
                    <a style="background-color: #FDC300FF " href="{{url('login')}}" class="btn bg-gradient btn-success">Entre</a>
                    <a style="background-color: #E9427D" href="{{url('register')}}"
                       class="btn bg-gradient btn-secondary">Cadastre-se</a>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
    <!-- end cta -->

    <!-- Start footer -->
<footer class="custom-footer bg-dark py-5 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <div>
                    <div>
                        <img src="{{asset('assets/images/logo.svg')}}" alt="logo light" height="40">
                    </div>
                    <div class="mt-4">
                        {{--                            <p>Premium Multipurpose Admin & Dashboard Template</p>--}}
                        {{--                            <p>You can build any type of web application like eCommerce, CRM, CMS, Project management--}}
                        {{--                                apps, Admin Panels, etc using Velzon.</p>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-7 ms-lg-auto">
                {{--                    <div class="row">--}}
                {{--                        <div class="col-sm-4 mt-4">--}}
                {{--                            <h5 class="text-white mb-0">Company</h5>--}}
                {{--                            <div class="text-muted mt-3">--}}
                {{--                                <ul class="list-unstyled ff-secondary footer-list">--}}
                {{--                                    <li><a href="pages-profile.html">About Us</a></li>--}}
                {{--                                    <li><a href="pages-gallery.html">Gallery</a></li>--}}
                {{--                                    <li><a href="apps-projects-overview.html">Projects</a></li>--}}
                {{--                                    <li><a href="pages-timeline.html">Timeline</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-sm-4 mt-4">--}}
                {{--                            <h5 class="text-white mb-0">Apps Pages</h5>--}}
                {{--                            <div class="text-muted mt-3">--}}
                {{--                                <ul class="list-unstyled ff-secondary footer-list">--}}
                {{--                                    <li><a href="pages-pricing.html">Calendar</a></li>--}}
                {{--                                    <li><a href="apps-mailbox.html">Mailbox</a></li>--}}
                {{--                                    <li><a href="apps-chat.html">Chat</a></li>--}}
                {{--                                    <li><a href="apps-crm-deals.html">Deals</a></li>--}}
                {{--                                    <li><a href="apps-tasks-kanban.html">Kanban Board</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-sm-4 mt-4">--}}
                {{--                            <h5 class="text-white mb-0">Support</h5>--}}
                {{--                            <div class="text-muted mt-3">--}}
                {{--                                <ul class="list-unstyled ff-secondary footer-list">--}}
                {{--                                    <li><a href="pages-faqs.html">FAQ</a></li>--}}
                {{--                                    <li><a href="pages-faqs.html">Contact</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
            </div>

        </div>

        <div class="row text-center text-sm-start align-items-center mt-5">
            <div class="col-sm-6">

                <div>
                    <p class="copy-rights mb-0">
                        <script> document.write(new Date().getFullYear()) </script>
                        © giftloves
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end mt-3 mt-sm-0">
                    <ul class="list-inline mb-0 footer-social-link">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/giftloves.oficial/" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-facebook-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/giftloves.oficial/" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-instagram-fill"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
<!-- end layout wrapper -->


<!-- JAVASCRIPT -->
<script src="{{asset('novo/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('novo/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('novo/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('novo/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('novo/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('novo/assets/js/plugins.js')}}"></script>

<!--Swiper slider js-->
<script src="{{asset('novo/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

<script src="{{asset('novo/assets/js/pages/nft-landing.init.js')}}"></script>

@yield('js')
</body>

</html>
