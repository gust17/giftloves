@extends('site.padrao2')

@section('miolo')

    <section class="section">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>{{$categoria->name}}</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">{{$categoria->descricao}}</h5>
            </div>
            <div class="row mt-4">

                @forelse($categoria->cartaos as $cartao)
                    <div class="item features-image сol-12 col-md-6 col-lg-3">
                        <div class="card">

                            <div class="card-body text-center">

                                <img style="height: 250px" src="{{env('URL_IMG').$cartao->caminho}}" alt=""
                                     data-slide-to="0" data-bs-slide-to="0">


                            </div>
                            <div class="card-footer">
                                <a href="{{url('show',$cartao->id)}}"
                                   class="btn btn-primary w-100 "
                                   target="_blank">Quero Esse!</a>

                            </div>


                        </div>
                    </div>

                @empty


                @endforelse

            </div>
        </div>

    </section>
@endsection
