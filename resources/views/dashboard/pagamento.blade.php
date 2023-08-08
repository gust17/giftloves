@extends('dashboard.padrao')

@section('miolo')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{url('finalizapagamento',$presente->id)}}"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
                                <h5 class="text-black mt-4 mb-5 pb-2">{{$presente->presenteado}}</h5>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{url('finalizapagamento',$presente->id)}}" class="btn btn-primary w-100">PIX</a>
                                </div>
                                <div class="col-md-4">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary w-100">Cartão de Credito/Debito</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary w-100">Boleto</button>
                                </div>
                            </div>
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
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm">Março, 01, 2020</h6>
                                <span class="text-xs">#MS-415646</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                R$180
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                        class="fas fa-file-pdf text-lg me-1"></i> PDF
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="text-dark mb-1 font-weight-bold text-sm">Fevereiro, 10, 2021</h6>
                                <span class="text-xs">#RV-126749</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                R$250
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                        class="fas fa-file-pdf text-lg me-1"></i> PDF
                                </button>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
