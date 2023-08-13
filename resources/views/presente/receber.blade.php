@extends('site.site')
@section('miolo')
    <section data-bs-version="5.1" class="article2 cid-tM7banZmvK" id="article02-z">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-5 image-wrapper">
                    <img class="w-100" src="{{env('URL_IMG').$presente->cartao->caminho}}" alt="Mobirise Website Builder">
                </div>
                <div class="col-12 col-md-12 col-lg">

                    <div class="text-wrapper align-left">
                        <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>{{$presente->presenteado}}</strong> você ganhou um GiftLoves
                            de {{$presente->user->name}}
                        </h1>
                        <p class="mbr-text align-left mbr-fonts-style mb-4 display-7">
                            {{$presente->mensagem}}
                        </p>
                        @if($presente->status == 1 )
                            <div class="mbr-section-btn align-left mt-3"><a class="btn btn-primary display-7"
                                                                            href="{{url('resgatar',$presente->id)}}">Resgatar
                                    R$ {{$presente->valor}}</a></div>

                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
