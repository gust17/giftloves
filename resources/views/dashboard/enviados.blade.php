@extends('dashboard.padrao')
@section('miolo')
    <div class="card">
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-striped text-center">
                    <thead>
                    <tr>
                        <th>Cartão</th>
                        <th>Presenteado</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse(auth()->user()->envios as $recebido)
                        <tr>
                            <td><img width="50px" class="img img-fluid"
                                     src="{{env('URL_IMG').$recebido->cartao->caminho}}"></td>
                            <td>{{$recebido->destinatario->name}}</td>
                            <td>R${{$recebido->valor}}</td>
                            <td>{{$recebido->updated_at->format('d/m/Y')}}</td>
                            <td><a class="btn btn-primary" href="{{url('enviados',$recebido->id)}}">Visualizar</a></td>

                        </tr>
                    @empty
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
