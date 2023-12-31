@extends('site.padrao2')

@section('miolo')
    <section  class="section" id="">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-5 image-wrapper">
                    <img class="w-100" src="{{env('URL_IMG').$cartao->caminho}}" alt="Mobirise Website Builder">
                </div>
                <div class="col-12 col-md-12 col-lg">

                    <div class="container">
                        <div class="mbr-section-head mb-5">
                            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                <strong>{{$cartao->name}}</strong>
                            </h3>

                        </div>

                        <div class="card">
                            <div class="card-header text-center">
                                Confirme os dados
                            </div>
                           <div class="card-body">
                               <div class="row justify-content-center mt-4">
                                   <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                                       <form action="{{url('finalizar')}}" method="POST" class="mbr-form form-with-styler"
                                             data-form-title="Form Name">
                                           @csrf
                                           <input type="hidden" name="cartao_id" value="{{$cartao->id}}">
                                           <input type="hidden" name="name" value="{{$request->name}}">
                                           <input type="hidden" name="whatsapp" value="{{$request->whatsapp}}">
                                           <input type="hidden" name="valor" value="{{$request->valor}}">
                                           <input type="hidden" name="nascimento" value="{{$request->nascimento}}">
                                           <input type="hidden" name="textarea" value="{{$request->textarea}}">

                                           <div class="dragArea row">
                                               <div class="col-md-12 col-sm-12 form-group mb-3" data-for="name">
                                                   <input disabled type="text" name="name" placeholder="Nome" data-form-field="name"
                                                          class="form-control" value="{{$request->name}}" id="name-form02-10">
                                               </div>
                                               <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                                   <input disabled type="text" name="nascimento" placeholder="Nascimento dia/mês"
                                                          data-form-field="email" class="form-control" value="{{$request->nascimento}}"
                                                          id="email-form02-10">
                                               </div>
                                               <div class="col-12 form-group mb-3" data-for="url">
                                                   <input disabled type="text" name="whatsapp" placeholder="Whatsapp"
                                                          data-form-field="url" class="form-control" value="{{$request->whatsapp}}"
                                                          id="url-form02-10">
                                               </div>
                                               <div class="col-12 form-group mb-3" data-for="url">
                                                   <input disabled type="text" name="valor" placeholder="R$ Valor do Cartão Presente"
                                                          data-form-field="url" class="form-control" value="{{$request->valor}}"
                                                          id="url-form02-10">
                                               </div>
                                               <div class="col-12 form-group mb-3" data-for="textarea">
                                            <textarea disabled name="textarea" placeholder="Mensagem" data-form-field="textarea"
                                                      class="form-control" id="textarea-form02-10">{{$request->textarea}}</textarea>
                                               </div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                                   <div class="row">
                                                       <div class="col-sm-6">
                                                           <button class="btn btn-warning w-100">Voltar</button></div>
                                                       <div class="col-sm-6"><button type="submit" class="btn btn-primary w-100">Pagamento
                                                           </button></div>
                                                   </div>

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
