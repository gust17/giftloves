@extends('site.site')

@section('miolo')

    <!---->




    <!---->

    <section data-bs-version="5.1" class="features3 cid-tM7qp0HvjO" id="features3-16">


        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                    <strong>Termos</strong>
                </h3>

            </div>
            <div class="row mt-4">

                @forelse($termos as $termo)
                    <div class="item features-image сol-12 col-md-12 col-lg-12">
                        <div class="item-wrapper">

                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>{{$termo->name}}</strong></h5>


                            </div>
                            <div class="mbr-section-btn item-footer "><a style="height: 30px" href="{{env('URL_IMG').$termo->arquivo}}"
                                                                         class="btn btn-primary "
                                                                         target="_blank">Veja+
                                    &gt;</a></div>
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
