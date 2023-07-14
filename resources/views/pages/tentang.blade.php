@extends('layouts.app')
@section('content')
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">Tentang</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Shape -->
        <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="{{ asset('assets/frontend/assets/img/hero/top-left-shape.png') }}"
                alt="">
        </div>
    </div>
    <!-- Slider Area End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
@endsection
