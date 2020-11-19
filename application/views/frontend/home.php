<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul>
            <li data-transition="parallaxvertical">
                <img src="<?php echo base_url() ?>assets/frontend/img/phb1.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                <div class="tp-caption sfl tp-resizeme thm-banner-h1" data-x="left" data-hoffset="0" data-y="top" data-voffset="225" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                    Materi Seminar Computer<br> Engineering Festival
                </div>
                <div class="tp-caption sfb tp-resizeme thm-banner-p" data-x="left" data-hoffset="0" data-y="top" data-voffset="430" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="2000">
                    Hendra Kusumah S.komHendra's Resume (1)<br>.pdfTrima Mustofa S.ST MTBig data & data analytics.pdf...
                </div>
                <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="185" data-y="top" data-voffset="505" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="2600">
                    <a href="#" class="thm-btn inverse">Read More</a>
                </div>
            </li>
            <li data-transition="parallaxvertical">
                <img src="<?php echo base_url() ?>assets/frontend/img/phb3.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                <div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg" data-x="left" data-hoffset="0" data-y="top" data-voffset="249" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                    SERTIFIKAT AKREDITASI PRODI DIII <br>TEKNIK KOMPUTER
                </div>
                <div class="tp-caption sfb tp-resizeme thm-banner-h3" data-x="left" data-hoffset="0" data-y="top" data-voffset="386" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="1500">
                    Sertifikat Akreditasi Prodi DIII Teknik Komputer...
                </div>
                <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="185" data-y="top" data-voffset="450" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="2600">
                    <a href="#" class="thm-btn inverse">Read More</a>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="overlay-white sec-padding parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 promote-project text-center">
                <h3>POLITEKNIK HARAPAN BERSAMA KOTA TEGAL</h3>
                <div class="sec-title colored text-center">
                    <span class="decor">
                        <span class="inner"></span>
                    </span>
                </div>
                <h2>D3 TEKNIK KOMPUTER</h2>
                <p>Prodi DIII Teknik Komputer Politeknik Harapan Bersama Tegal merupakan salah satu pendidikan tinggi vokasi yang sudah menerapkan kurikulum berbasis KKNI dengan rasio mata kuliah praktek 70% dan teori 30% untuk mencetak lulusan yang siap terjun untuk bekerja dan berwirausaha dengan dibekali 3 (tiga) kompetensi utama yaitu Hardaware, Pemrograman dan Jaringan Komputer.</p>
            </div>
        </div>
    </div>
</section>
<section class="footer-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-9 sm-text-center">
                <h3>Here will be any kind lorem ipsum heading</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have lorem</p>
            </div>
            <div class="col-md-3 text-right sm-text-center">
                <a href="#" class="thm-btn inverse mt-sm-15">Klik To localhost</a>
            </div>
        </div>
    </div>
</section>
<section class="sec-padding testimonials-wrapper parallax-section">
    <div class="container">
        <div class="sec-title colored text-center">
            <h2>Nama Karyawan</h2>
            <span class="decor">
                <span class="inner"></span>
            </span>
        </div>
        <div class="testimonaials-carousel owl-carousel owl-theme">
            <?php foreach ($isi as $data) : ?>
                <div class="item">
                    <div class="single-testimonaials">
                        <div class="qoute-box">
                            <i class="qoute">“</i>
                        </div>
                        <h3><?php echo $data->name_karyawan ?></h3>
                        <span><?php echo $data->nama ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="gallery-section pb_2">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Profile Taem</h2>
            <p>Kelompok UTS Pemprogaman Website</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
    </div>

    <div class="clearfix">
        <!--Image Box-->
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="<?php echo base_url() ?>assets/frontend/img/atik.jpeg" class="lightbox-image"><img src="<?php echo base_url() ?>assets/frontend/img/atik.jpeg" alt=""></a></figure>
                <a href="<?php echo base_url() ?>assets/frontend/img/atik.jpeg" class="lightbox-image btn-zoom" title="Atik Mulyani">
                    <h3 class="text-white">Atik Mulyani</h3>
                    <span class="text-white">18040011</span>
                </a>
            </div>
        </div>

        <!--Image Box-->
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="<?php echo base_url() ?>assets/frontend/img/balqis.jpeg" class="lightbox-image"><img src="<?php echo base_url() ?>assets/frontend/img/balqis.jpeg" alt=""></a></figure>
                <a href="<?php echo base_url() ?>assets/frontend/img/balqis.jpeg" class="lightbox-image btn-zoom" title="Balqis shafawardahni">
                    <h3 class="text-white">Balqis shafawardahni</h3>
                    <span class="text-white">18040003</span>
                </a>
            </div>
        </div>

        <!--Image Box-->
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="<?php echo base_url() ?>assets/frontend/img/rijal.jpg" class="lightbox-image"><img src="<?php echo base_url() ?>assets/frontend/img/rijal.jpg" alt=""></a></figure>
                <a href="<?php echo base_url() ?>assets/frontend/img/rijal.jpg" class="lightbox-image btn-zoom" title="Mohammad Rijal Arfani">
                    <h3 class="text-white">Mohammad Rijal Arfani</h3>
                    <span class="text-white">18040004</span>
                </a>
            </div>
        </div>

        <!--Image Box-->
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="<?php echo base_url() ?>assets/frontend/img/pp.jpg" class="lightbox-image"><img src="<?php echo base_url() ?>assets/frontend/img/pp.jpg" alt=""></a></figure>
                <a href="<?php echo base_url() ?>assets/frontend/img/pp.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>
    </div>
</section>

<section class="blog-home sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Latest News</h2>
            <p></p>
            <span class="decor">
                <span class="inner"></span>
            </span>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
                <div class="single-blog-post">
                    <div class="img-box">
                        <img class="full-width" src="<?php echo base_url() ?>assets/frontend/img/phb1.jpg" alt="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <ul>
                                        <li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="date-box">
                            <div class="inner">
                                <div class="date">
                                    <b>24</b>
                                    apr
                                </div>
                                <div class="comment">
                                    <i class="flaticon-interface-1"></i> 8
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <a href="blog-details.html">
                                <h3>Materi Seminar Computer Engineering Festival</h3>
                            </a>
                            <p>Hendra Kusumah S.komHendra's Resume (1).pdfTrima Mustofa S.ST MTBig data & data analytics.pdf... </p>
                            <a class="btn-details" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
                <div class="single-blog-post">
                    <div class="img-box">
                        <img class="full-width" src="<?php echo base_url() ?>assets/frontend/img/phb2.jpeg" alt="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <ul>
                                        <li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="date-box">
                            <div class="inner">
                                <div class="date">
                                    <b>24</b>
                                    apr
                                </div>
                                <div class="comment">
                                    <i class="flaticon-interface-1"></i> 8
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <a href="blog-details.html">
                                <h3>WEBINAR "AIoT and Robot"</h3>
                            </a>
                            <p>silahkan materi bisa di download di sini... </p>
                            <a class="btn-details" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
                <div class="single-blog-post">
                    <div class="img-box">
                        <img class="full-width" src="<?php echo base_url() ?>assets/frontend/img/phb3.jpg" alt="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <ul>
                                        <li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="date-box">
                            <div class="inner">
                                <div class="date">
                                    <b>24</b>
                                    apr
                                </div>
                                <div class="comment">
                                    <i class="flaticon-interface-1"></i> 8
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <a href="blog-details.html">
                                <h3>SERTIFIKAT AKREDITASI PRODI DIII TEKNIK KOMPUTER</h3>
                            </a>
                            <p>Sertifikat Akreditasi Prodi DIII Teknik Komputer... </p>
                            <a class="btn-details" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>