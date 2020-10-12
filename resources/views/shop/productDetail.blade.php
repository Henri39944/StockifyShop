@extends('layout.app')

@section('content')
    @include('layout.navigation')

	{{ Breadcrumbs::render('showDetailProducts') }}

    <section id="detail-product-page" class="detail-product-page">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="large-preview-parent">
                            <div class="large-preview">
                                <img src="{{ asset('/uploads/images/collection/arrivals1.png') }}" alt="new-arrivals images">
                            </div>
                        </div>
                        <div class="carousel_small_picture_preview_webshop">
                            <ul class="image-list">
                                <li class="image-item"><img src="{{ asset('/uploads/images/collection/arrivals9.png') }}" alt="new-arrivals images"></li>
                                <li class="image-item"><img src="{{ asset('/uploads/images/collection/arrivals10.png') }}" alt="new-arrivals images"></li>
                                <li class="image-item"><img src="{{ asset('/uploads/images/collection/arrivals11.png') }}" alt="new-arrivals images"></li>
                                <li class="image-item"><img src="{{ asset('/uploads/images/collection/arrivals12.png') }}" alt="new-arrivals images"></li>
                                <li class="image-item"><img src="{{ asset('/uploads/images/collection/arrivals13.png') }}" alt="new-arrivals images"></li>
                                <li class="image-item"><img src="{{ asset('/uploads/images/collection/arrivals14.png') }}" alt="new-arrivals images"></li>
                            </ul>
                            <a class="btnPrevious_carousel">terug</a>
                            <a class="btnNext_carousel">volgende</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>lorem ipsum</h4>
                        <h2>lorem ipsum</h2>
                        <h2>lorem ipsum</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection