@extends('site.padrao2')

@section('miolo')

    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 col-sm-7 mx-auto">
                    <div>
                        <img src="{{env('URL_IMG').$parceira->logo}}" alt="" class="img-fluid mx-auto">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-justify">
                        <div class="avatar-sm icon-effect mb-4">

                        </div>
                        <h3 class="mb-3 fs-20">{{$parceira->name}}</h3>
                        @if($parceira->site)
                            <a href="{{$parceira->site}}" target="_blank" class="btn btn-info"><i
                                    class="las la-link"></i>
                                Site</a>
                        @endif
                        @if($parceira->facebook)
                            <a href="{{$parceira->facebook}}" target="_blank" class="btn btn-primary"><i
                                    class="lab la-facebook"></i> Facebook</a>
                        @endif
                        @if($parceira->instagram)
                            <a href="{{$parceira->instagram}}" target="_blank" class="btn bg-body"><i
                                    class="lab la-instagram"></i> Instagram</a>
                        @endif
                        @if($parceira->tiktok)
                            <a href="{{$parceira->tiktok}}" target="_blank" class="btn btn-dark"><i
                                    class="bx bxl-tiktok"></i> Tik-Tok</a>
                        @endcanany
                        <div class="row pt-3">

                            <p><label  for="">Endereço</label>:
                                {{$parceira->endereco}}
                            </p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
    </section>
@endsection
