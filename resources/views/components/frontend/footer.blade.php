<footer>
    <div class="footer-wrappr " data-background="{{ asset('assets/frontend/img/gallery/footer-bg.png') }}">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="{{ route('home') }}"><img src="assets/img/logo/logo2_footer.png"
                                        alt=""></a>
                            </div>
                            <div class="footer-tittle mb-50">
                                <img src=" {{ $setting->image() }}" style="max-width:160px" class="img-fluid"
                                    alt="">
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">

                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social mt-50">
                                <a href="{{ env('LINK_TWITTER') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ env('LINK_FACEBOOK') }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ env('LINK_INSTAGRAM') }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Sitemap</h4>
                                <ul>
                                    <li><a href="{{ route('berita.index') }}">Berita</a></li>
                                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                                    <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                {{-- <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Technology</a></li> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;
                                    {{ date('Y') }}
                                    All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i>by
                                    {{ $setting->author }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
