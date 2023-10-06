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
<style>
    #hero {
        background-image: url('{{ $topo ? env('URL_IMG') . $topo->img : '' }}');
        background-size: cover; /* A imagem de fundo cobrirá todo o elemento */
        background-position: center; /* Centralizar a imagem de fundo */
    }

    @media (max-width: 767px) {
        #hero {
            background-image: url('{{ asset("fundo1.png") }}');
            background-size: cover; /* A imagem de fundo cobrirá todo o elemento */
            background-position: center; /* Centralizar a imagem de fundo */
        }
    }

    @media (max-width: 576px) {
        #hero {
            background-image: url('{{ asset("375.png") }}');
            background-size: cover; /* A imagem de fundo cobrirá todo o elemento */
            background-position: center; /* Centralizar a imagem de fundo */
        }
    }
</style>


<body data-bs-spy="scroll" data-bs-target="#navbar-example">

<!-- Begin page -->
<div class="layout-wrapper landing">
    <nav style="background-color: #E9427D" class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top"
         id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('logo.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="40">
                <img src="{{asset('logo.png')}}" class="card-logo card-logo-light" alt="logo light" height="40">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                    <li style="color: white" class="nav-item">
                        <a style="color: white" class="nav-link active" href="{{url('/')}}">Inicio</a>
                    </li>
                    <li style="color: white" class="nav-item">
                        <a style="color: white" class="nav-link" href="#about">Sobre Nós</a>
                    </li>
                    <li style="color: white" class="nav-item">
                        <a style="color: white" class="nav-link" href="#destaque">Destaques</a>
                    </li>
                    <li style="color: white" class="nav-item">
                        <a style="color: white" class="nav-link" href="#categories">Categorias</a>
                    </li>
                    <li style="color: white" class="nav-item">
                        <a style="color: white" class="nav-link" href="#duvidas">Duvidas</a>

                    </li>

                    <li style="color: white" class="nav-item">
                        <a style="color: white" class="nav-link" href="{{url('termos')}}">Termos</a>

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

    <section id="hero" class="section nft-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 400px" class="col-lg-8 col-sm-10">
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light py-5" id="about">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 col-sm-7 mx-auto">
                    <div>
                        <img src="{{asset('sobre.png')}}" alt="" class="img-fluid mx-auto">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-muted">
                        <div class="avatar-sm icon-effect mb-4">

                        </div>
                        <h3 class="mb-3 fs-20">Seja bem-vindo à maior plataforma de presentes do Brasil.</h3>
                        <p class="mb-4 ff-secondary fs-16 text-justify">
                            Chegamos para revolucionar sua forma de comprar presentes. <br>
                            Nós somos apaixonados pela vida e queremos ajudar você a expressar seu amor pelas pessoas
                            que você ama ou admira da melhor forma possível.
                            <br>
                            Nosso objetivo é oferecer aos clientes um ambiente virtual seguro, tornando a compra de
                            presentes, uma experiência única e inesquecível.
                            <br>
                            Fundada pelos sócios Máxima Maia, Gustavo Pantoja, Yam Gomes, Lorran Telles e Sanny Souza, a
                            Gift Loves nasceu em Macapá-AP com o intuito de atender todo o Brasil.
                            Aqui você encontrará um universo de possibilidades para presentear.
                            <br>
                            Venha explorar todas as possibilidades que disponibilizamos em nossa plataforma de cartões
                            de presentes online e descubra novas formas de expressar seu amor pelas pessoas que você ama
                            ou admira. br
                            Divirta-se!

                        </p>

                        <div class="row pt-3">
                            <div class="col-3">
                                <div class="text-center">
                                    <h4>{{count($categorias_totals)}}</h4>
                                    <p>Categorias</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <h4>{{$total_cartao}}</h4>
                                    <p>Cartões</p>
                                </div>
                            </div>
                            {{--                            <div class="col-4">--}}
                            {{--                                <div class="text-center">--}}
                            {{--                                    <h4>7+</h4>--}}
                            {{--                                    <p>Functional Apps</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- start wallet -->


    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Veja com é fácil enviar o giftloves</h2>
                        {{--                        <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>--}}
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body text-center align-items-center justify-content-center">
                            <center>
                                <div
                                    style="width: 75px; height: 75px; background-color: #0dcaf0; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 20px; font-weight: bold;">
                                    1
                                </div>
                            </center>

                            <h5 class="mt-4">Navegue pelo nosso site</h5>
                            <p class="text-muted">Explore a nossa ampla seleção de cartões de presente e escolha o mais
                                adequado para a ocasião</p>

                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body text-center">
                            <center>
                                <div
                                    style="width: 75px; height: 75px; background-color: #ffbf00; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 20px; font-weight: bold;">
                                    2
                                </div>
                            </center>

                            <h5 class="mt-4">Personalize sua mensagem</h5>
                            <p class="text-muted">Preencha as informações do destinatário (nome, dia/mês de aniversário
                                e número de WhatsApp).</p>
                            {{--                            <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>--}}
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body text-center">
                            <center>
                                <div
                                    style="width: 75px; height: 75px; background-color: #E9427D; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 20px; font-weight: bold;">
                                    3
                                </div>
                            </center>
                            <h5 class="mt-4">Selecione o valor do cartão</h5>
                            <p class="text-muted">Escolha o valor do cartão de presente que deseja enviar.</p>
                            {{--                            <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>--}}
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body text-center">
                            <center>
                                <div
                                    style="width: 75px; height: 75px; background-color: #ff4c33; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 20px; font-weight: bold;">
                                    4
                                </div>
                            </center>
                            <h5 class="mt-4">Efetue o pagamento</h5>
                            <p class="text-muted">Finalize a compra com segurança e de forma conveniente.</p>
                            {{--                            <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>--}}
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!-- end container -->
    </section>

    <!-- start marketplace -->

    <!-- end marketplace -->

    <!-- start features -->
    <!-- end features -->
    <section class="section bg-light" id="destaque">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">{{$categorias->name}}</h2>
                        {{--                        <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>--}}
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper mySwiper pb-4">
                        <div class="swiper-wrapper">

                            @forelse($categorias->cartaos->take(10) as $cartao)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row g-1 mb-3">

                                                <div class="col-12">

                                                    <img src="{{ env('URL_IMG').$cartao->caminho }}" alt=""
                                                         class="img-fluid rounded">

                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <a href="{{url('show',$cartao->id)}}" class="btn btn-outline-warning"> Quero
                                                Esse! <i
                                                    class="ri-arrow-right-line align-bottom"></i></a>
                                            <h5 class="mb-0 fs-16"><a href="{{url('show',$cartao->id)}}"> <span
                                                        class="badge bg-success-subtle text-success"></span></a></h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse


                        </div>
                        <div class="swiper-pagination swiper-pagination-ligth"></div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>

    <section style="background-color: #FDC300FF" class="py-5  position-relative">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-2">Não achou o que precisa?</h4>
                        <p class="text-white-50 mb-0">Faça uma pesquisa</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">

                    <form action="{{url('pesquisar')}}" method="post">

                        @csrf
                        <div class="row">
                            <div class="col-md-8"><input type="text" name="pesquisa" class="form-control"></div>
                            <div class="col-md-4">
                                <button type="submit"
                                        class="btn bg-gradient btn-secondary">Pesquisar
                                </button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
</div>
<!-- end container -->
</section>
<!-- start plan -->
<section class="section bg-light" id="categories">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Veja todas Categorias</h2>
                    {{--                        <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>--}}
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Swiper -->
                <div class="swiper mySwiper pb-4">
                    <div class="swiper-wrapper">

                        @forelse($categorias_totals as $categorias_total)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">

                                        <h2 class="mb-0 fs-16"><a
                                                href="{{url('categoria',$categorias_total->id)}}">{{$categorias_total->name}}
                                                <span
                                                    class="badge bg-success-subtle text-success">{{$categorias_total->cartaos->count()}}</span></a>
                                        </h2>
                                    </div>
                                    <div class="card-body">

                                        <div class="row g-1 mb-3">

                                            <div class="col-6">
                                                @php
                                                    $primeiraMetade = $categorias_total->cartaos->take(2);
                                                @endphp
                                                @foreach($primeiraMetade as $cartao)
                                                    <img src="{{ env('URL_IMG').$cartao->caminho }}" alt=""
                                                         class="img-fluid rounded">
                                                @endforeach
                                            </div><!--end col-->

                                            <div class="col-6">
                                                @php
                                                    $segundaMetade = $categorias_total->cartaos->splice(2, 2); // Pula os 2 primeiros e pega os próximos 2
                                                @endphp
                                                @foreach($segundaMetade as $cartao)
                                                    <img src="{{ env('URL_IMG').$cartao->caminho }}" alt=""
                                                         class="img-fluid rounded">
                                                @endforeach
                                            </div><!--end col-->
                                        </div><!--end row-->

                                    </div>

                                    <div class="card-footer">
                                        <a href="{{url('categoria',$categorias_total->id)}}"
                                           class="btn btn-outline-warning w-100"> Veja Mais! <i
                                                class="ri-arrow-right-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                    <div class="swiper-pagination swiper-pagination-ligth"></div>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>


<section class="section bg-light" id="categories">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Nossas Parceiras</h2>
                    {{--                        <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>--}}
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Swiper -->
                <div class="swiper mySwiper pb-4">
                    <div class="swiper-wrapper">

                        @forelse($parceiras as $parceira)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        {{--                                            <a href="#!" class="btn btn-outline-warning float-end"> Veja Mais! <i--}}
                                        {{--                                                    class="ri-arrow-right-line align-bottom"></i></a>--}}
                                        <h2 class="mb-0 fs-16"><a href="#!">{{$parceira->name}} <span
                                                    class="badge bg-success-subtle text-success"></span></a>
                                        </h2>
                                    </div>
                                    <div class="card-body">

                                        <div class="row g-1 mb-3 text-center">

                                            <div class="col-12">

                                                <img style="height: 150px" src="{{env('URL_IMG').$parceira->logo}}"
                                                     alt=""
                                                     class="img-fluid rounded">

                                            </div><!--end col-->


                                        </div><!--end row-->

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                    <div class="swiper-pagination swiper-pagination-dark"></div>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- end plan -->

<!-- start Discover Items-->

<!--end Discover Items-->

<!-- start Work Process -->
<section class="section" id="duvidas">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-semibold">Perguntas Frequentes</h3>
                    {{--                        <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our FAQ, you can always contact us or email us. We will answer you shortly!</p>--}}

                    {{--                        <div class="hstack gap-2 justify-content-center">--}}
                    {{--                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>--}}
                    {{--                            <button type="button" class="btn btn-secondary btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us Tweet</button>--}}
                    {{--                        </div>--}}
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row g-lg-5 g-4">
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-1">
                        <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Duvidas Gerais</h5>
                    </div>
                </div>
                <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                     id="genques-accordion">


                    @forelse($perguntas as $pergunta)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="genques-headingOne{{$pergunta->id}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseOne{{$pergunta->id}}" aria-expanded="false"
                                        aria-controls="genques-collapseOne">
                                    {{$pergunta->titulo}}
                                </button>
                            </h2>
                            <div id="genques-collapseOne{{$pergunta->id}}" class="accordion-collapse collapse"
                                 aria-labelledby="genques-headingOne{{$pergunta->id}}"
                                 data-bs-parent="#genques-accordion" style="">
                                <div class="accordion-body ff-secondary">
                                    {{$pergunta->resposta}}
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse

                </div>
                <!--end accordion-->

            </div>
            <!-- end col -->

            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

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
                        <img src="{{asset('logo.png')}}" alt="logo light" height="40">
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
</body>

</html>
