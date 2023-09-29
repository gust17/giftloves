@extends('site.padrao2')

@section('miolo')

    <!---->




    <!---->

    <section data-bs-version="5.1" class="section">


        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                    <strong>Termos</strong>
                </h3>

            </div>
            <div class="row mt-4">

                @forelse($termos as $termo)
                    <div class="card">
                        <div class="card-body">

                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>{{$termo->name}}</strong></h5>


                            </div>
                            <a href="{{env('URL_IMG').$termo->arquivo}}"
                                                                         class="btn btn-primary "
                                                                         target="_blank">Veja+
                                    &gt;</a>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>

    </section>

@endsection
@section('js')
@endsection
