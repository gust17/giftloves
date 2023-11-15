<!doctype html>
<html lang="pt-BR" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light"
      data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8"/>
    <title>GIFTLOVES </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Seu presente descomplicado" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{asset('novo/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('novo/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('novo/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('novo/assets/css/app.css')}}" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{asset('novo/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">

                                    <div class="position-relative h-100 d-flex flex-column">
                                        <div class="mb-4">
                                            <a href="{{url('/')}}" class="d-block">
                                                <img src="{{asset('logo.svg')}}" alt="" height="90">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h5 class="text-primary">Esqueceu sua senha?</h5>
                                        {{--                                        <p class="text-muted">Faça login para acessar seu painel no GiftLoves</p>--}}
                                    </div>

                                    <div class="mt-4">

                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf


                                            <div class="form-group mb-3">
                                                <label for="email"
                                                       class="">Digite seu email!</label>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>



                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    {{ __('Send Password Reset Link') }}
                                                </button>
                                            </div>

                                        </form>


                                    </div>


                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script>
                            GIFTLOVES. Crafted with <i class="mdi mdi-heart text-danger"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{asset('novo/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('novo/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('novo/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('novo/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('novo/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('novo/assets/js/plugins.js')}}"></script>

<!-- password-addon init -->
<script src="{{asset('novo/assets/js/pages/password-addon.init.js')}}"></script>
</body>

</html>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>


            </div>
        </div>
    </div>
</div>
