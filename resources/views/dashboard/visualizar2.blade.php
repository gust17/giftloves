@extends('dashboard.padrao')

@section('miolo')
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-4 col-xl-4 ">
        <div class="card card-profile">
            <img src="{{env('URL_IMG').$presente->cartao->caminho}}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-4 col-lg-4 order-lg-2">
                    <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">

                    </div>
                </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <div class="d-flex justify-content-between">
                    <a href="{{url('enviados')}}" class="btn btn-sm btn-outline-warning btn-outline mb-0 d-none d-lg-block">Voltar</a>

                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">{{$presente->updated_at->format('d')}}</span>
                                <span class="text-sm opacity-8">Dia</span>
                            </div>
                            <div class="d-grid text-center mx-4">
                                <span class="text-lg font-weight-bolder">{{$presente->updated_at->format('m')}}</span>
                                <span class="text-sm opacity-8">Mes</span>
                            </div>
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">{{$presente->updated_at->format('Y')}}</span>
                                <span class="text-sm opacity-8">Ano</span>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <h5>
                       {{$presente->cartao->categoria->name}}
                    </h5>

                    <div class="h6 mt-4">
                        Mensagem
                    </div>
                    <div>
                       {{$presente->mensagem}}
                    </div>
                    <div class="h6 mt-4">
                        Valor
                    </div>
                    <div>
                       R$ {{$presente->valor}}
                    </div>
                </div>
                @if($presente->status == 0)

                    <div class="row">
                        <div class="col-md-4">
                            <a target="_blank" href="{{url('finalizapagamento/'.$presente->id.'/3')}}"
                               class="btn btn-primary w-100">PIX</a>
                        </div>
                        <div class="col-md-4">
                            <a target="_blank" href="{{url('finalizapagamento/'.$presente->id.'/2')}}"
                               class="btn btn-primary w-100">Cartão de Credito</a>
                        </div>
                        <div class="col-md-4">
                            <a target="_blank" href="{{url('finalizapagamento/'.$presente->id.'/1')}}"
                               class="btn btn-primary w-100">Boleto</a>
                        </div>
                    </div>
                @else
                    <button class="btn btn-primary w-100">Pagamento Confirmado</button>


                    <a href="{{url('enviarwhatsapp',$presente->id)}}" class="btn btn-primary w-100">Enviar
                        WhatsApp</a>
                @endif
            </div>
        </div>
    </div>

@endsection
