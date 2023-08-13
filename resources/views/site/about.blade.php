@extends('site.site')

@section('miolo')

    <section data-bs-version="5.1" class="features3 cid-tM7qp0HvjO" id="features3-16">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ $sobre->img ? env('URL_IMG').$sobre->img : '' }}{{}}" alt="logo gift">
                        <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                            GIFTLOVES</p>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                            <strong>Sobre Nós</strong></h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {!! $sobre->texto !!}</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
