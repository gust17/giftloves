@extends('dashboard.padrao')
@section('css')
    <style>
        /* Adicione estilos CSS para as caixas de token */
        .token-box {
            display: inline-block;
            border: 1px solid #ccc;
            padding: 5px;
            margin-right: 5px;
        }
    </style>

@endsection

@section('miolo')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Token Gerado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3 id="tokenText">Aguardando token...</h3>
                    <div class="progress">
                        <div class="progress-bar" id="progressBar" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn bg-gradient-primary">Gerar Novo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Saldo Atual</p>
                                <h5 class="font-weight-bolder">
                                    R$ {{ number_format(auth()->user()->saldoTotal(), 2, ',', '.') }}
                                </h5>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Recebido</p>
                                <h5 class="font-weight-bolder">
                                    R$ {{auth()->user()->entradas()}}
                                </h5>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Utilizado</p>
                                <h5 class="font-weight-bolder">
                                    R$ {{auth()->user()->saidas()}}
                                </h5>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">GiftLoves Recebidos</p>
                                <h5 class="font-weight-bolder">
                                    {{auth()->user()->resgatados->where('status',3)->count()}}
                                </h5>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">
        <div class="col-lg-9 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Ultimas movimentações</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>

                        @forelse(auth()->user()->extratos as $extrato)
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            #{{\Carbon\Carbon::now()->format('Y')}}{{$extrato->id}}
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-xs font-weight-bold mb-0">Descrição:</p>
                                            <h6 class="text-sm mb-0">{{$extrato->descricao}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Valor</p>
                                        <h6 class="text-sm mb-0">R${{$extrato->valor}}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Tipo</p>
                                        <h6 class="text-sm mb-0">{{ $extrato->tipo == 1 ? 'Entrada' : 'Saída' }}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Data:</p>
                                        <h6 class="text-sm mb-0">{{$extrato->created_at->format('d/m/Y')}}</h6>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="height: 600px" class="col-lg-3">
            <button type="button" class="btn btn-warning btn-lg w-100" id="openModalButton">GERAR TOKEN
            </button>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var interval; // Variável global para o intervalo da contagem regressiva

        function formatToken(token) {
            // Dividir o token em caixas de 1 caractere com uma classe CSS "token-box"
            return token.split('').map(char => '<span class="token-box">' + char + '</span>').join('');
        }

        function gerarToken() {
            // Solicitação AJAX para a URL "gerartoken"
            $.ajax({
                url: 'gerartoken',
                dataType: 'json',
                success: function (data) {
                    // Exibe o token retornado na resposta JSON
                    $('#tokenText').html(formatToken(data.token));
                    $('#progressBar').css('width', '100%');
                    clearInterval(interval);
                    iniciarContagemRegressiva();
                },
                error: function () {
                    $('#tokenText').text('Erro ao obter o token.');
                }
            });
        }

        function iniciarContagemRegressiva() {
            var countdown = 60; // 60 segundos (1 minuto)
            interval = setInterval(function () {
                countdown--;
                var percent = (countdown / 60) * 100;
                $('#progressBar').css('width', percent + '%');

                if (countdown <= 0) {
                    clearInterval(interval);
                    $('#tokenText').text('Aguardando token...');
                    gerarToken();
                }
            }, 1000);
        }

        // Adicione um ouvinte de evento ao botão para abrir o modal
        $('#openModalButton').click(function () {
            // Inicia a contagem regressiva e solicita o token quando o modal é mostrado
            $('#myModal').modal('show');
            $('#progressBar').css('width', '0%');
            $('#tokenText').text('Aguardando token...');
            gerarToken();
        });
    </script>

@endsection
