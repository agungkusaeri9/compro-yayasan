@extends('layouts.app')

@section('content')
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height ">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-5 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".3s">Selamat datang di</span>
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">{{ $setting->site_name }}</h1>
                                <p data-animation="fadeInLeft" data-delay=".8s">Yayasan Sekar Mawar adalah sebuah yayasan
                                    sosial yang berada di bawah naungan Keuskupan Bandung yang bergerak dalam bidang
                                    pencegahan dan penanggulangan ...</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right">
                                <img src="{{ $setting->image() }}" alt="" data-animation="fadeInRight"
                                    data-delay="1s">
                            </div>
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

    <!--? About-1 Area Start -->
    <div class="about-area1 section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle  section-tittle2 text-center mb-90">
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($berita_terbaru as $terbaru)
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ $terbaru->image() }}" alt=""
                                    style="max-height: 260px">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ $terbaru->created_at->translatedFormat('d') }}</h3>
                                    <p>{{ $terbaru->created_at->translatedFormat('F') }}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('berita.show', $terbaru->slug) }}">
                                    <h2 class="blog-head" style="color: #2d2d2d;">{{ \Str::limit($terbaru->title, 50) }}
                                    </h2>
                                </a>
                                <p>{{ \Str::limit($terbaru->short_description, 60) }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i>{{ $terbaru->user->name ?? '-' }}</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-comments"></i>
                                            {{ $terbaru->comments()->count() }} Comments</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>

        <!--? About-1 Area Start -->
        <div class="about-area1 section-padding40">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{ $setting->image() }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="about-caption ">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-30">
                                <h2>Tentang Kami</h2>
                            </div>
                            {!! $setting->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Testimonial Area Start -->
        <section class="testimonial-area">
            <div class="container">
                <div class="testimonial-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-10 ">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 text-center mb-90">
                                <h2>Testimoni</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-lg-10 col-md-12 col-sm-11">
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center mt-55">
                                    <div class="testimonial-caption">
                                        <img src="{{ asset('assets/frontend/img/icon/quotes-sign.png') }}" alt=""
                                            class="quotes-sign">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum magni saepe amet
                                            harum
                                            eum repellendus facere dolores obcaecati nobis vitae dignissimos quis iste
                                            similique
                                            qui quibusdam vero laborum illum beatae officiis hic exercitationem, sit,
                                            inventore
                                            optio architecto? Ratione, nisi maiores?</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="{{ asset('assets/frontend/img/icon/testimonial.png') }}"
                                                alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Bambang Pamungkas</span>
                                            <p>Direktur PT. ABC</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center mt-55"">
                                    <div class="testimonial-caption">
                                        <img src="{{ asset('assets/frontend/img/icon/quotes-sign.png') }}" alt=""
                                            class="quotes-sign">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ullam alias
                                            dolorem
                                            saepe vel praesentium ut nesciunt non aliquam autem. Tempora voluptate vero
                                            error
                                            quia, dicta nostrum. Debitis quos earum quia dignissimos veniam deleniti ad,
                                            veritatis vitae doloremque! Culpa laboriosam rem voluptatibus fugit nam deserunt
                                            recusandae commodi quis omnis? Nulla.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="{{ asset('assets/frontend/img/icon/testimonial.png') }}"
                                                alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Gonzales</span>
                                            <p>CEO PT.BCA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Testimonial Area End -->
        <!-- About-1 Area End -->
        <!-- ask questions -->
        <section class="ask-questions section-bg1 section-padding30 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-90">
                            <h2>Frequently ask questions</h2>
                            <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our
                                experts are just part of the reason Bluehost is the ideal home for your WordPress
                                website. We're here to help you succeed!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Apa yang dimaksud dengan profil perusahaan?</h2>
                                <p>Profil perusahaan adalah gambaran singkat yang menggambarkan informasi dasar tentang
                                    perusahaan. Hal ini meliputi visi, misi, nilai-nilai inti, sejarah perusahaan, produk
                                    atau
                                    layanan yang ditawarkan, dan pencapaian utama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Apa tujuan dari profil perusahaan?</h2>
                                <p>Tujuan profil perusahaan adalah untuk memberikan pemahaman yang jelas tentang identitas
                                    perusahaan kepada pemangku kepentingan, termasuk calon klien, mitra bisnis, dan calon
                                    karyawan. Profil perusahaan juga digunakan untuk membangun citra perusahaan yang kuat
                                    dan
                                    membedakan diri dari pesaing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Apa yang termasuk dalam profil perusahaan?</h2>
                                <p>Profil perusahaan biasanya mencakup informasi seperti sejarah perusahaan, visi dan misi,
                                    nilai-nilai perusahaan, struktur organisasi, produk atau layanan yang ditawarkan,
                                    portofolio
                                    pelanggan, dan pencapaian utama perusahaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Bagaimana cara mengakses profil perusahaan?</h2>
                                <p>Profil perusahaan biasanya dapat diakses melalui situs web perusahaan. Terkadang, profil
                                    perusahaan juga dapat ditemukan dalam brosur perusahaan atau materi promosi lainnya.
                                    Beberapa perusahaan juga menyediakan salinan profil perusahaan kepada calon klien atau
                                    mitra
                                    bisnis yang berminat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="more-btn text-center mt-20">
                            <a href="mailto:{{ $setting->email }}" class="btn">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ask questions -->

    </div>
@endsection
