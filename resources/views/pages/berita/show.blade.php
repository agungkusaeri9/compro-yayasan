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
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">{{ $item->title }}</h1>
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
    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $item->image() }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{{ $item->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{ $item->user->name ?? '-' }}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> {{ $item->comments()->count() }}
                                        Comments</a></li>
                            </ul>
                            <p>
                                {!! $item->description !!}
                            </p>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>{{ $item->comments()->count() }} Comments</h4>
                        @forelse ($item->comments as $comment)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/frontend/img/blog/comment_1.png') }}" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                {{ $comment->comment }}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">{{ $comment->name }}</a>
                                                    </h5>
                                                    <p class="date">
                                                        {{ $comment->created_at->translatedFormat('l, d F Y H:i:s') }}</p>
                                                </div>
                                                {{-- <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{{ route('berita.komentar', $item->id) }}"
                            id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Name"
                                            @if (session('name')) value="{{ session('name') }}" readonly @endif>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Email"
                                            @if (session('name')) value="{{ session('email') }}" readonly @endif>
                                    </div>
                                </div>
                            </div>
                            @if (session('name'))
                            @else
                                <div class="form-group form-check">
                                    <input type="checkbox" name="simpan" class="form-check-input" id="simpan">
                                    <label class="form-check-label ml-2" for="simpan">Simpan nama dan email</label>
                                </div>
                            @endif
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post
                                    Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>
                        <x-Frontend.CardBeritaTerbaru />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
@endsection

@push('scripts')
    <script>
        $(function() {

        })
    </script>
@endpush
