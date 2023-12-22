@extends('site.padrao2')
@section('miolo')
    <section class="section bg-light">
        @include('flash-message')
        <form action="{{url('seja-parceiro')}}" method="post">
            @csrf
            <div style="margin-top: 30px" class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dados da Empresa</h4>
                            </div>
                            <div class="card-body">

                                <div class="form-group mt-3">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" value="{{old('name_loja')}}"
                                           name="name_loja">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Endereço</label>
                                    <input type="text" class="form-control" value="{{old('endereco')}}"
                                           name="endereco">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Site</label>
                                    <input type="text" class="form-control" value="{{old('site')}}" name="site">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Facebook</label>
                                    <input type="text" class="form-control" value="{{old('facebook')}}"
                                           name="facebook">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Instagram</label>
                                    <input type="text" class="form-control" value="{{old('instagram')}}"
                                           name="instagram">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Tiktok</label>
                                    <input type="text" class="form-control" value="{{old('tiktok')}}" name="tiktok">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Administrador da Empresa</h4>
                            </div>
                            <div class="card-body">

                                <div class="form-group mt-3">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" value="{{old('endereco')}}"
                                           name="name_user">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">CPF</label>
                                    <input type="text" class="form-control" value="{{old('cpf')}}" name="cpf">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Whatsapp</label>
                                    <input type="text" class="form-control" value="{{old('whatsapp')}}"
                                           name="whatsapp">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{old('email')}}" name="email">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Taxas e Prazos</h4>
                    </div>
                    <div class="card-body">

                        @forelse($planos as $plano)
                            <div class="radio">
                                <label><input type="radio" value="{{$plano->id}}" name="plano_id">{{$plano->taxa}}%
                                    em {{$plano->name}}</label>
                            </div>
                        @empty
                        @endforelse


                    </div>
                </div>
                <div class="card">

                    <div class="card-body">

                        <button class="btn btn-primary w-100">Cadastrar</button>


                    </div>
                </div>

            </div>
        </form>
    </section>
@endsection
