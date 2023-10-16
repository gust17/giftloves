@extends('site.padrao2')

@section('miolo')

    <section class="section" id="features3-16">
        <div class="container">


            <div class="row">
                @forelse($categorias as $cartao)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="item-wrapper">

                                        <img class="img-fluid" src="{{ env('URL_IMG') . ($cartao->cartaos[0]->caminho ?? 'logo.png') }}"
                                             alt="{{$cartao->name}}">

                                    <div class="item-content">
                                        <h5 class="item-title mbr-fonts-style display-7"><strong>{{$cartao->name}}</strong></h5>


                                    </div>
                                    <div class="mbr-section-btn item-footer mt-2">
                                        <a href="{{url('categoria',$cartao->id)}}"
                                           class="btn btn-primary item-btn">Veja+
                                        </a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                @empty


                @endforelse


            </div>
        </div>
    </section>

@endsection
