@extends('site.site')

@section('miolo')
    <section data-bs-version="5.1" class="image4 cid-tM6XOnvVvw" id="image04-e">


        <div class="image-block m-auto">
            <img src="assets/images/whatsapp-image-2023-08-05-at-17.21.59-1600x608.jpg" alt="Mobirise">

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
                            <div class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">1</span>
                            </div>
                        </div>

                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Navegue pelo nosso site</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4">Explore a nossa ampla seleção de cartões de presente e escolha o
                                mais adequado para a ocasião</h5>
                        </div>
                    </div>
                    <!-- <span mbr-icon class="mbr-iconfont mobi-mbri-devices mobi-mbri"></span> -->
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">2</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Personalize sua mensagem</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4">Preencha as informações do destinatário (nome, dia/mês de
                                aniversário e número de WhatsApp).</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">3</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Selecione o valor do cartão</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4"> Escolha o valor do cartão de presente que deseja enviar.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="item mbr-flex p-4">
                        <div class="icon-wrap w-100">
                            <div class="icon-box">
                                <span class="step-number mbr-fonts-style display-5">4</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                                <strong>Efetue o pagamento</strong>
                            </h4>
                            <h5 class="mbr-text mbr-black mbr-fonts-style display-4">Finalize a compra com segurança e de forma conveniente.</h5>
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
                                <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-wrapper">
                                            <div class="item-img">
                                                <img src="{{env('URL_IMG').$cartao->caminho}}" alt="Mobirise Website Builder"
                                                     data-slide-to="5" data-bs-slide-to="5">
                                            </div>
                                        </div>
                                        <div class="item-content">


                                        </div>
                                        <div class="mbr-section-btn item-footer mt-2"><a href="{{url('show',$cartao->id)}}"
                                                                                         class="btn btn-primary item-btn display-7"
                                                                                        >Veja +
                                                &gt;</a></div>
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


                                <div class="embla__slide slider-image item active"
                                     style="margin-left: 1rem; margin-right: 1rem;">
                                    <div class="slide-content">
                                        <div class="item-wrapper">
                                            <div class="item-img">
                                                <img src="assets/images/gift-marca-1-1200x848.jpg"
                                                     alt="Mobirise Website Builder" data-slide-to="4"
                                                     data-bs-slide-to="4">
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h5 class="item-title mbr-fonts-style mb-2 display-5">
                                                <strong>Unique Styles</strong>
                                            </h5>

                                            <p class="mbr-text mbr-fonts-style display-7">
                                                Select the theme that suits you. Each theme in the
                                                Mobirise Website Software contains a set of unique
                                                blocks.<br>
                                            </p>
                                        </div>
                                        <div class="mbr-section-btn item-footer mt-3">
                                            <a href="" class="btn btn-primary item-btn display-7">Learn More</a>
                                        </div>
                                    </div>
                                </div>

                                @forelse($categorias_totals as $categorias_total)
                                    <div class="embla__slide slider-image item"
                                         style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-wrapper">
                                                <div class="item-img">
                                                    <img src="assets/images/gift-marca-2-1200x848.jpg"
                                                         alt="Mobirise Website Builder" data-slide-to="5"
                                                         data-bs-slide-to="5">
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="item-title mbr-fonts-style mb-2 display-5">
                                                    <strong>{{$categorias_total->name}}</strong>
                                                </h5>

                                                <p class="mbr-text mbr-fonts-style display-7">
                                                    {{$categoria->descricao}}<br>
                                                </p>
                                            </div>
                                            <div class="mbr-section-btn item-footer mt-3">
                                                <a href="" class="btn btn-primary item-btn display-7">Veja Mais</a>
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
                <div class="col-md-3 card">
                    <img src="assets/images/1.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/2.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/3.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/4.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/2.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/3.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/4.png" alt="Mobirise Website Builder">
                </div>
                <div class="col-md-3 card">
                    <img src="assets/images/5.png" alt="Mobirise Website Builder">
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="header09 cid-tJS84Hb6Ph" id="header09-3">


        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1"><strong>Unlock boundless
                            possibilities</strong></h1>

                    <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
                        Mobirise Free Website Maker is perfect for non-techies and great for pro-coders for fast
                        prototyping and small customers' projects.
                    </p>
                    <div class="mbr-section-btn"><a class="btn btn-success display-7" href="https://mobiri.se">Learn
                            more</a></div>
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
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse1_17" aria-expanded="false"
                                       aria-controls="collapse1">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            Lorem ipsum dolor sit amet?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse1_17" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_17">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum
                                            laoreet tincidunt. Proin et sapien scelerisque, ornare lectus eget, iaculis
                                            lectus. Pellentesque viverra molestie tortor. Nunc sed interdum est, in
                                            maximus
                                            diam. Donec eu tellus dictum, gravida velit et, sagittis arcu. Proin et
                                            lectus
                                            dapibus. Cras fringilla elit velit placerat tortor mollis cursus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse2_17" aria-expanded="false"
                                       aria-controls="collapse2">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            Pellentesque nec purus ut massa?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse2_17" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_17">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum
                                            laoreet tincidunt. Proin et sapien scelerisque, ornare lectus eget, iaculis
                                            lectus. Pellentesque viverra molestie tortor. Nunc sed interdum est, in
                                            maximus
                                            diam. Donec eu tellus dictum, gravida velit et, sagittis arcu. Proin et
                                            lectus
                                            dapibus. Cras fringilla elit velit placerat tortor mollis cursus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse3_17" aria-expanded="false"
                                       aria-controls="collapse3">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            Mauris porttitor tempor orci vitae?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse3_17" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_17">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum
                                            laoreet tincidunt. Proin et sapien scelerisque, ornare lectus eget, iaculis
                                            lectus. Pellentesque viverra molestie tortor. Nunc sed interdum est, in
                                            maximus
                                            diam. Donec eu tellus dictum, gravida velit et, sagittis arcu. Proin et
                                            lectus
                                            dapibus. Cras fringilla elit velit placerat tortor mollis cursus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse4_17" aria-expanded="false"
                                       aria-controls="collapse4">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            Ut ultricies imperdiet volutpat?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse4_17" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_17">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum
                                            laoreet tincidunt. Proin et sapien scelerisque, ornare lectus eget, iaculis
                                            lectus. Pellentesque viverra molestie tortor. Nunc sed interdum est, in
                                            maximus
                                            diam. Donec eu tellus dictum, gravida velit et, sagittis arcu. Proin et
                                            lectus
                                            dapibus. Cras fringilla elit velit placerat tortor mollis cursus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse5_17" aria-expanded="false"
                                       aria-controls="collapse5">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            Mauris dui elit porta quis justo?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse5_17" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_17">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum
                                            laoreet tincidunt. Proin et sapien scelerisque, ornare lectus eget, iaculis
                                            lectus. Pellentesque viverra molestie tortor. Nunc sed interdum est, in
                                            maximus
                                            diam. Donec eu tellus dictum, gravida velit et, sagittis arcu. Proin et
                                            lectus
                                            dapibus. Cras fringilla elit velit placerat tortor mollis cursus.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
