@extends('site.padrao2')

@section('miolo')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Pesquisa</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active">Pesquisa</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="section" id="">

        @include('flash-message2')
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row justify-content-center mb-4">
                            <div class="col-lg-6">
                                <form action="{{url('pesquisar')}}" method="post">
                                    <div class="row g-2">
                                        <div class="col">
                                            <div class="position-relative mb-3">


                                                @csrf
                                                <input name="pesquisa" type="text"
                                                       class="form-control form-control-lg bg-light border-light"
                                                       placeholder="Search here.." value="{{$pesquisa}}">


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit"
                                                    class="btn btn-primary btn-lg waves-effect waves-light"><i
                                                    class="mdi mdi-magnify me-1"></i> Pesquisar
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h5 class="fs-16 fw-bold text-center mb-0">Mostrando resultados para "<span
                                    class="text-primary fw-semibold fst-italic">{{$pesquisa}}</span> "</h5>
                        </div>
                    </div>
                    <!--end row-->


                </div>
                <div>
                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab" aria-selected="true">
                                <i class="ri-search-2-line text-muted align-bottom me-1"></i> Todos Resultados
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="all" role="tabpanel">
                            @forelse($categorias as $categoria)
                                <div class="pb-3">
                                    <h5 class="mb-1"><a
                                            href="{{url('categoria',$categoria->id)}}">{{$categoria->name}}</a></h5>
                                    <p class="text-success mb-2">{{url('categoria',$categoria->id)}}</p>
                                    {{--                                        <p class="text-muted mb-2">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <span class="fw-bold">bootstrap 5</span> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>--}}
                                    <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                        <li class="list-inline-item me-3"><i
                                                class="ri-thumb-up-line align-middle me-1"></i>10
                                        </li>
                                        <li class="list-inline-item me-3"><i
                                                class="ri-question-answer-line align-middle me-1"></i>8
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-user-line"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-13 ms-1">
                                                    <span class="fw-medium">Themesbrand</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="border border-dashed"></div>
                            @empty
                            @endforelse

                            @forelse($parceiras as $parceira)
                                <div class="pb-3">
                                    <h5 class="mb-1"><a href="">{{$parceira->name}}</a></h5>
                                    <p class="text-success mb-2"></p>
                                    <img style="height: 150px" src="{{env('URL_IMG').$parceira->logo}}" alt="">
                                    {{--                                        <p class="text-muted mb-2">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <span class="fw-bold">bootstrap 5</span> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>--}}
                                    <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">

                                    </ul>
                                </div>

                                <div class="border border-dashed"></div>
                            @empty
                            @endforelse


                        </div>

                        <!--end tab-pane-->
                    </div>
                    <!--end tab-content-->

                </div>
                <!--end card-body-->
            </div>
            <!--end card -->
        </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Inclua a biblioteca jQuery Inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>

        $(document).ready(function () {
            // Aplicar a máscara de CPF usando o jQuery Inputmask
            $('#cpf').inputmask('999.999.999-99');
            $('#nascimento').inputmask('9999');
            $('#whatsapp').inputmask('(99)99999-9999');
            $('#valor').inputmask('currency', {
                prefix: 'R$ ',
                groupSeparator: '',
                radixPoint: ',',
                autoGroup: true,
                digits: 2,
                digitsOptional: false,
                rightAlign: false,
                allowMinus: false
            });
        });

    </script>
@endsection
