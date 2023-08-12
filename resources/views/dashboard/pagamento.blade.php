@extends('dashboard.padrao')

@section('miolo')

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-xl-6 mb-xl-0 mb-5">
                    <div style="width: 280px" class="card bg-transparent shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('{{url($presente->cartao->caminho)}}');background-repeat: no-repeat;
  background-size: auto 100%;height: 400px;">
                            <span class=""></span>
                            <div class="card-body position-relative z-index-1 p-3">
                                <i class="fas fa-wifi text-white p-2"></i>
                                <h5 style="background-color:#0dcaf0;color: white" class="text-black mt-4 mb-5 pb-2">


                                    {{ $presente->destinatario ? $presente->destinatario->name : $presente->presenteado }}


                                </h5>
                                <div class="d-flex">

                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                        <img class="w-60 mt-2" src="{{asset('logo.svg')}}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header mx-4 p-3 text-center">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <i class="fas fa-home opacity-10"></i>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">Valor</h6>
                                    <span class="text-xs">Cartão Presente</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">R${{$presente->valor}}</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-0">Metodos de Pagamentos</h6>
                                </div>
                                <div class="col-6 text-end">

                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">

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
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Ultimos Envios</h6>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-outline-primary btn-sm mb-0">Ver todos</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pb-0">
                    <ul class="list-group">



                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @if($presente->status ==0)
        <script>

            function verificarStatus(id) {
                $.ajax({
                    url: '{{url('api/verifica')}}/' + id,
                    method: 'GET',
                    success: function (response) {
                        if (response.status === 1) {
                            window.location.reload();
                        } else {
                            $('#status').text('Aguardando...');
                        }
                    },
                    error: function () {
                        console.log('Erro ao verificar o status.');
                    }
                });
            }

            $(document).ready(function () {
                var id = {{$presente->id}}; // Substitua pelo ID correto que você deseja verificar

                setInterval(function () {
                    verificarStatus(id);
                }, 10000); // 10 segundos
            });
        </script>
    @endif

@endsection
