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
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">
                                @if (request()->keyword)
                                    Hasil pencarian : {{ request()->keyword }}
                                @else
                                    Berita Terbaru
                                @endif
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Shape -->
        <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="{{ asset('assets/frontend/img/hero/top-left-shape.png') }}" alt="">
        </div>
    </div>
    <!-- Slider Area End -->
    <!-- Hero Area End-->
    <!--? Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @forelse ($items as $item)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $item->image() }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ $item->created_at->translatedFormat('d') }}</h3>
                                        <p>{{ $item->created_at->translatedFormat('F') }}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('berita.show', $item->slug) }}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{ $item->title }}
                                        </h2>
                                    </a>
                                    <p>{{ $item->short_description }}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i>{{ $item->user->name ?? '-' }}</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-comments"></i>
                                                {{ $item->comments()->count() }} Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        @empty
                            <p class="text-center">Berita Tidak Ditemukan!</p>
                        @endforelse

                        {{ $items->appends(request()->all())->links('vendor.pagination.custom') }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <x-Frontend.CariBerita />
                        <x-Frontend.CardBeritaTerbaru />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!-- Contact Area End -->
@endsection
