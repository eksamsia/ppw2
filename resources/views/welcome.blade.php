@extends('master')
@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large">Belanja OOTD</h1>
                        <h5 class="h5-medium">Tanpa Capek Mondar mandir</h5>
                        <p class="p-large">Jastip.Yk solusi belanja brand mall harga terjangkau!</p>
                        <a class="btn-solid-lg" href="article.html">Tentang Kami</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/img/header3.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- About Us -->
    <div id="about" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Ngapain Aja?</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <img src="images/img/info.png"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jasa titip produk</h5>
                            <p>Kami melayani jasa titip pembelian berbagai brand mall yang terkenal dengan harga
                                terjangkau dan hemat buat kamu.</p>
                            <a class="read-more no-line" href="#brand">Lihat Brand<span
                                    class="fas fa-long-arrow-alt-right"></span></a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <img src="images/img/reseller.png"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Member Jastip.Yk</h5>
                            <p>Pengen bisnis jastip tapi belum tau caranya? Gabung dulu di Member kami dan rasakan
                                pengalamannya.</p>
                            <a class="read-more no-line" href="#login">Cek Selengkapnya <span
                                    class="fas fa-long-arrow-alt-right"></span></a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon green">
                            <img src="images/img/sharing.png"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">NgoBar</h5>
                            <p>Sesi NgoBar adalah sesi ngobrol bareng seputar dunia perjastipan. Disini para business
                                jastip saling belajar berkembang.</p>
                            <a class="read-more no-line" href="https://discord.gg/ENkmRhwN">Cek Selengkapnya <span
                                    class="fas fa-long-arrow-alt-right"></span></a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="cod" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/img/tugu.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">Ambil Barang</div>
                        <h2>Tempat Cash On Delivery</h2>
                        <div class="card">
                            <div class="card-header" style="background-color: bisque; text-align: center;">
                                Yogyakarta only
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Area Tugu : Kebon Dalem Coffee</h5>
                                <p class="card-text">Jam 4-5 sore</p>
                                <p class="card-text">Setiap hari Senin, Kamis, dan Minggu</p>
                                <a href="https://g.page/Kebonndalem?share" class="btn btn-primary">Google-Maps</a>
                            </div>
                        </div>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Testimonials -->
    <div id="testimoni" class="cards-2 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Apa Kata Mereka</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                        <div class="card-body">
                            <p class="testimonial-text">Langganan banget sama Jastip.Yk dari pertama kali nemu. Produk
                                Ori dan harganya juga ramah kantong dibanding beli langsung. cocok banget buat yang
                                sibuk dan masih awam.</p>
                            <div class="testimonial-author">Jennie Adhisty</div>
                            <div class="occupation">Customer Service BCA</div>
                        </div>
                        <div class="gradient-floor red-to-blue"></div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                        <div class="card-body">
                            <p class="testimonial-text">Harga worth it untuk sekelas produk brand mall terkenal, apalagi
                                kita tinggal nunggu mau cod atau kirim barang. Tanpa cape cari diskon dan ke store
                                langsung. Sukses Jastip.Yk</p>
                            <div class="testimonial-author">Samia Nadhira</div>
                            <div class="occupation">Masyarakat Yogyakarta</div>
                        </div>
                        <div class="gradient-floor blue-to-purple"></div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                        <div class="card-body">
                            <p class="testimonial-text">Paling juara kalo urusan jastip. Apalagi jadi reseller atau
                                member nya jadi beruntung banget. Dapet ilmu bisnis perjastipan dan dapet relasi banyak.
                                Good Job Jastip.Yk</p>
                            <div class="testimonial-author">Billa Adhistira Jehia</div>
                            <div class="occupation">Member</div>
                        </div>
                        <div class="gradient-floor purple-to-green"></div>
                    </div>
                    <!-- end of card -->


                    <!-- brands -->
                    <div class="slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Avaiable brand mall by over <span class="blue">30</span> in Indonesia
                                    </h4>
                                    <hr class="section-divider">

                                    <!-- Image Slider -->
                                    <div id="brand" class="slider-container">
                                        <div class="swiper-container image-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/hnm.png" alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/ysl2.png" alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/channel2.png"
                                                        alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/gucci1.png"
                                                        alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/ruby.png" alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/stradivar.png"
                                                        alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/body1.png"
                                                        alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/miniso1.png"
                                                        alt="alternative">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="images/img/uniqlo1.png"
                                                        alt="alternative">
                                                </div>
                                            </div> <!-- end of swiper-wrapper -->
                                        </div> <!-- end of swiper container -->
                                    </div> <!-- end of slider-container -->
                                    <!-- end of image slider -->

                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of slider-1 -->
                    <!-- end of customers -->
                @endsection
