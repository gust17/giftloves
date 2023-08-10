@extends('dashboard.padrao')

@section('miolo')

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-xl-6 mb-xl-0 mb-5 text-center ">
                    <center>
                        <div style="width: 280px" class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('{{url($presente->cartao->caminho)}}');background-repeat: no-repeat;
  background-size: auto 100%;height: 400px;">
                                <span class=""></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <i class="fas fa-wifi text-white p-2"></i>

                                    <div class="d-flex">

                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <img class="w-60 mt-2" src="{{asset('logo.svg')}}" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>

                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="height: 400px" class="card">
                                <div class="card-header mx-4 p-3 text-center">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <img style="margin-top: 5px" width="70%" class="img-fluid"
                                             src="{{asset('logo.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">Quem presenteou</h6>
                                    <span class="text-xs">{{$presente->user->name}}</span>
                                    <hr class="horizontal dark my-3">
                                    <h6 class="text-center mb-0">Valor</h6>
                                    <span class="text-xs">GiftLoves</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">R${{$presente->valor}}</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        @if($presente->status !=3)
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Valide o codigo para o resgate do saldo GiftLoves</h6>
                                    </div>
                                    <div class="col-6 text-end">

                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <form action="{{url('resgate')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="number" name="code" class="form-control">
                                                <input type="hidden" name="presente_id" value="{{$presente->id}}"
                                                       class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-primary w-100">Validar</button>
                                            </div>
                                        </div>


                                    </div>
                                </form>

                            </div>
                        @else
                            <button type="button" class="btn btn-primary">
                                <span>GiftLoves já Resgatado</span>

                            </button>


                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Ultimos Resgatados</h6>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-outline-primary btn-sm mb-0">Ver todos</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pb-0">
                    <ul class="list-group">

                        @forelse(auth()->user()->resgatados as $resgatado)
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">{{$resgatado->updated_at->isoFormat('MMMM,DD,YYYY')}}</h6>
                                    <span class="text-xs">#MS-{{$presente->code}}</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    R${{$resgatado->valor}}

                                </div>
                            </li>
                        @empty
                        @endforelse



                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
