@extends('site.site')

@section('miolo')
    <section data-bs-version="5.1" class="image4 cid-tM6XOnvVvw" id="image04-e">


        <div class="image-block m-auto">
            <img src="{{ $topo ? env('URL_IMG') . $topo->img : '' }}" alt="Mobirise">

        </div>
    </section>

    <section data-bs-version="5.1" class="features24 cid-tM73zp5q9Q" id="features24-k">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card-wrapper mb-4">
                        <div class="card-box align-center">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2">
                                <strong>Veja como é Fácil</strong>
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item first mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div style="background-color: #0dcaf0" class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">1</span>
                            </div>
                        </div>

                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Navegue pelo nosso site</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4">Explore a nossa ampla seleção de
                                cartões de presente e escolha o
                                mais adequado para a ocasião</h5>
                        </div>
                    </div>
                    <!-- <span mbr-icon class="mbr-iconfont mobi-mbri-devices mobi-mbri"></span> -->
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div style="background-color: #ffbf00" class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">2</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Personalize sua mensagem</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4">Preencha as informações do
                                destinatário (nome, dia/mês de
                                aniversário e número de WhatsApp).</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div style="background-color: #e826cc" class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">3</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Selecione o valor do cartão</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4"> Escolha o valor do cartão de
                                presente que deseja enviar.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div style="background-color: #ff4c33" class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">4</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Efetue o pagamento</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4">Finalize a compra com segurança e
                                de forma conveniente.</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="slider4 mbr-embla cid-tM6ZqReduA" id="slider4-g">


        @forelse($categorias as $categoria)

            <div class="position-relative text-center">
                <div class="mbr-section-head">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>{{$categoria->name}}</strong></h4>

                </div>
                <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps"
                     data-auto-play-interval="5" data-draggable="true">
                    <div class="embla__viewport container-fluid">
                        <div class="embla__container">


                            @forelse($categoria->cartaos as $cartao)
                                <div class="embla__slide slider-image item"
                                     style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-wrapper">
                                            <div class="item-img">
                                                <img src="{{env('URL_IMG').$cartao->caminho}}"
                                                     alt="Mobirise Website Builder"
                                                     data-slide-to="5" data-bs-slide-to="5">
                                            </div>
                                        </div>
                                        <div class="item-content">


                                        </div>
                                        <div class="mbr-section-btn item-footer mt-2"><a
                                                href="{{url('show',$cartao->id)}}"
                                                class="btn btn-primary item-btn display-7"
                                            >Quero esse!
                                                </a></div>
                                    </div>
                                </div>

                            @empty

                            @endforelse


                        </div>
                    </div>
                    <button class="embla__button embla__button--prev">
                        <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Previous</span>
                    </button>
                    <button class="embla__button embla__button--next">
                        <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        @empty
        @endforelse


    </section>



    <section data-bs-version="5.1" class="slider1 mbr-embla cid-tM75HYCkPI" id="slider01-o">


        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 mbr-section-head d-flex flex-column justify-content-center">
                    <h4 class="mbr-section-title mbr-fonts-style display-2"><strong>Veja Mais</strong><br><strong>Categorias</strong>
                    </h4>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="embla" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps"
                         data-auto-play-interval="5">
                        <div class="embla__viewport">
                            <div class="embla__container">


                                @forelse($categorias_totals as $index => $categorias_total)

                                    <div class="embla__slide slider-image item {{ $index === 0 ? 'active' : '' }}"
                                         style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-wrapper">
                                                <div class="item-img">
                                                    <img src="{{env('URL_IMG').$categorias_total->img}}"
                                                         alt="Mobirise Website Builder" data-slide-to="5"
                                                         data-bs-slide-to="5">
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="item-title mbr-fonts-style mb-2 display-5">
                                                    <strong>{{$categorias_total->name}}</strong>
                                                </h5>

                                                <p class="mbr-text mbr-fonts-style display-7">
                                                    {{$categorias_total->descricao}}<br>
                                                </p>
                                            </div>
                                            <div class="mbr-section-btn item-footer mt-3">
                                                <a href="{{url('categoria',$categorias_total->id)}}"
                                                   class="btn btn-primary item-btn display-7">Veja Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                        <button class="embla__button embla__button--prev">
                            <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                            <span class="sr-only visually-hidden visually-hidden visually-hidden">Previous</span>
                        </button>
                        <button class="embla__button embla__button--next">
                            <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                            <span class="sr-only visually-hidden visually-hidden visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="clients1 cid-tM6VT7SYQO" id="clients1-c">

        <div class="images-container container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Nossas
                        Parceiras</strong></h3>


            </div>
            <div class="row justify-content-center mt-4">

                @forelse($parceiras as $parceira)

                    <div class="col-md-3 card">
                        <img src="{{env('URL_IMG').$parceira->logo}}" alt="Mobirise Website Builder">
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="header09 cid-tJS84Hb6Ph" id="header09-3">


        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    @if(isset($centro))

                        <h5 class="  mbr-section-title mbr-fonts-style mbr-white mb-4 display-1"><strong>{{$centro->titulo}}</strong></h5>

                        <p style="color: white" class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
                           {{$centro->texto}}
                        </p>
                        <div  class="mbr-section-btn"><a style="background-color: {{ $centro->cor ? $centro->cor : '#ffba00' }};color: white" class="btn display-7" href="{!! $centro->link !!}">{{$centro->botao}}</a></div>

                    @endif

                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="list1 cid-tM71wRhxB4" id="list01-h">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-10 m-auto">
                    <div class="content">
                        <div class="mbr-section-head align-left mb-5">

                            <h3 class="mbr-section-title mb-2 mbr-fonts-style display-2"><strong>Duvidas?</strong></h3>
                        </div>
                        <div id="bootstrap-accordion_17" class="panel-group accordionStyles accordion" role="tablist"
                             aria-multiselectable="true">

                            @forelse($perguntas as $pergunta)
                                <div class="card mb-3">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                           data-bs-toggle="collapse" data-core="" href="#collapse1_17-{{$pergunta->id}}"
                                           aria-expanded="false"
                                           aria-controls="collapse1">
                                            <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                                {{$pergunta->titulo}}
                                            </h6>
                                            <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                        </a>
                                    </div>
                                    <div id="collapse1_17-{{$pergunta->id}}" class="panel-collapse noScroll collapse" role="tabpanel"
                                         aria-labelledby="headingOne" data-parent="#accordion"
                                         data-bs-parent="#bootstrap-accordion_17">
                                        <div class="panel-body">
                                            <p class="mbr-fonts-style panel-text display-7">
                                                {{$pergunta->resposta}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
