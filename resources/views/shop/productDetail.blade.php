@extends('layout.app')

@section('content')
    @include('layout.navigation')
    <section id="detail-product-page" class="detail-product-page">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('/uploads/images/collection/arrivals1.png') }}" alt="new-arrivals images">
                    <div>
                </div>
            </div>
        </div>
    </section>
@endsection