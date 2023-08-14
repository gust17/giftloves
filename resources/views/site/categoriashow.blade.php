@extends('site.site')

@section('miolo')

    <section data-bs-version="5.1" class="features3 cid-tM7qp0HvjO" id="features3-16">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>{{$categoria->name}}</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">{{$categoria->descricao}}</h5>
            </div>
            <div class="row mt-4">

                @forelse($categoria->cartaos as $cartao)
                    <div class="item features-image сol-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{env('URL_IMG').$cartao->caminho}}" alt="Mobirise Website Builder"
                                     data-slide-to="0" data-bs-slide-to="0">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>{{$cartao->name}}</strong></h5>


                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="{{url('show',$cartao->id)}}"
                                                                             class="btn btn-primary item-btn "
                                                                             target="_blank">Veja+
                                    &gt;</a></div>
                        </div>
                    </div>

                @empty


                @endforelse

            </div>
        </div>

    </section>
@endsection
