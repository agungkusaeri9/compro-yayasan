<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ $setting->image() }}" alt=""
                                        class="img-fluid gambar-logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('berita.index') }}">Berita</a></li>
                                            {{-- <li><a href="{{ route('kontak') }}">Kontak</a></li> --}}
                                            <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                                            <li><a href="{{ route('tentang') }}">Tentang</a></li>
                                            @auth
                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
