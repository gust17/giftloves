@extends('site.padrao2')

@section('miolo')
    <section class="section" id="">

        @include('flash-message2')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-5 image-wrapper">
                    <img class="w-100" src="{{env('URL_IMG').$cartao->caminho}}" alt="">
                </div>
                <div class="col-12 col-md-12 col-lg">

                    <div class="container">


                        <div class="card">
                            <div class="card-header text-center">
                                Digite sua Mensagem
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center mt-4">
                                    <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                                        <form action="{{url('visualizar')}}" method="POST" class="mbr-form form-with-styler"
                                              data-form-title="Form Name">
                                            @csrf
                                            <input type="hidden" name="cartao_id" value="{{$cartao->id}}">
                                            <div class="row">
                                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                                                    Thanks for filling out the form!
                                                </div>
                                                <div hidden="hidden" data-form-alert-danger=""
                                                     class="alert alert-danger col-12">
                                                    Oops...! some problem!
                                                </div>
                                            </div>
                                            <div class="dragArea row">
                                                <div class="col-md-12 col-sm-12 form-group mb-3" data-for="name">
                                                    <input type="text" name="name" placeholder="Nome" data-form-field="name"
                                                           class="form-control" value="" id="name-form02-10">
                                                </div>
                                                <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                                    <input type="text" name="nascimento" placeholder="Nascimento dia/mês"
                                                           class="form-control" value=""
                                                           id="nascimento">
                                                </div>
                                                <div class="col-12 form-group mb-3" data-for="url">
                                                    <input type="text" name="whatsapp" placeholder="Whatsapp"
                                                           class="form-control" value=""
                                                           id="whatsapp">
                                                </div>
                                                <div class="col-12 form-group mb-3" data-for="url">
                                                    <input type="text" name="valor" placeholder="R$ Valor do Cartão Presente"
                                                           class="form-control" id="valor">
                                                </div>
                                                <div class="col-12 form-group mb-3" data-for="textarea">
                                            <textarea name="textarea" placeholder="Mensagem" data-form-field="textarea"
                                                      class="form-control" id="textarea-form02-10"></textarea>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                                    <button type="submit" class="btn btn-primary w-100">Visualizar Cartão
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
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
