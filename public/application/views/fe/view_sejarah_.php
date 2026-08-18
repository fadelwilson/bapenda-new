<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Sejarah</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?= base_url('assets'); ?>/gambar/logo-tab.jpg" type="<?= base_url('assets'); ?>/image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->

                                <!-- start -->
                                <?php foreach ($ShowData as $dt) : ?>
                                    <div class="rd-navbar-brand"><a class="brand" href="<?= $dt['url_bapenda'] ?>">
                                            <img class="brand-logo-dark" src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>" alt="" width="300" height="166" />
                                        </a></div>
                            </div>
                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <div class="rd-navbar-aside">
                                    <ul class="rd-navbar-contacts-2">
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                                <div class="unit-body"><a class="phone" href="tel:#"><?= $dt['no_telp']; ?></a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                                <div class="unit-body"><a class="address" href="#"><?= $dt['alamat_kantor']; ?></a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-share-2">
                                        <li><a class="icon mdi mdi-facebook" href=" <?= $dt['url_fb'] ?>"></a></li>
                                        <li><a class="icon mdi mdi-twitter" href=" <?= $dt['url_twitter'] ?> "></a></li>
                                        <li><a class="icon mdi mdi-instagram" href=" <?= $dt['url_ig'] ?> "></a></li>
                                        <li><a class="icon mdi mdi-youtube-play" href=" <?= $dt['url_yt'] ?> "></a></li>
                                        <li><a class="icon mdi mdi-tumblr" href=" <?= $dt['url_tiktok'] ?> "></a></li>
                                    </ul>
                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('BerandaController/Index')?>">Beranda</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('BerandaController/TentangKami') ?>">Tentang Kami</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('kritik-saran') ?>">Kritik & Saran</a>
                                        </li>
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="<?= site_url('media') ?>">Media</a>
                                        </li>
                                        <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Produk Hukum</a>
                      </li> -->
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- end navbar -->


                        <!-- button Aplikasi Bapenda -->
                        <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                            <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                            </div>
                        </div>
                        <div class="rd-navbar-project">
                            <div class="rd-navbar-project-header">
                                <h5 class="rd-navbar-project-title">APLIKASI BAPENDA</h5>
                                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <!-- Galeri poto -->
                            <div class="rd-navbar-project-content rd-navbar-content">
                                <div>
                                    <div class="row gutters-20" data-lightgallery="group">
                                        <div class="col-6">

                                            <!-- Start Aplikasi Bapenda-->
                                            <article class="box-icon-megan wow fadeInUp">
                                                <div class="box-icon-megan-header">
                                                    <div>
                                                        <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner8.jpg" alt="" width="800" height="800" />
                                                    </div>
                                                </div>
                                                <h5 class="box-icon-megan-title"><a href="http://192.168.2.6/bhumie/index.php/user/login" target="_blank">SIP PBB</a></h5>
                                                <p class="box-icon-megan-text">Sistem Informasi Pengelolaan PBB (P2)</p>
                                            </article>
                                            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
                                                <div class="box-icon-megan-header">
                                                    <div>
                                                        <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner9.jpg" alt="" width="800" height="800" />
                                                    </div>
                                                </div>
                                                <h5 class="box-icon-megan-title"><a href="http://36.67.50.122/pad/index.php/user/login" target="_blank">SIP PAD</a></h5>
                                                <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Pendapatan Daerah</p>
                                            </article>
                                            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
                                                <div class="box-icon-megan-header">
                                                    <div>
                                                        <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner10.jpg" alt="" width="800" height="800" />
                                                    </div>
                                                </div>
                                                <h5 class="box-icon-megan-title"><a href="http://192.168.2.6/sistemberkas/login.php" target="_blank">Sistem Berkas</a></h5>
                                                <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Berkas</p>
                                            </article>
                                            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
                                                <div class="box-icon-megan-header">
                                                    <div>
                                                        <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner11.jpg" alt="" width="800" height="800" />
                                                    </div>
                                                </div>
                                                <h5 class="box-icon-megan-title"><a href="http://36.67.50.122:1226/bphtb/index.php/site/login" target="_blank">BPHTB</a></h5>
                                                <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Pajak BPHTB</p>
                                            </article>
                                            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
                                                <div class="box-icon-megan-header">
                                                    <div>
                                                        <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner12.jpg" alt="" width="800" height="800" />
                                                    </div>
                                                </div>
                                                <h5 class="box-icon-megan-title"><a href="http://192.168.2.6/sip-arsip" target="_blank">SIP ARSIP</a></h5>
                                                <p class="box-icon-megan-text">Sistem Informasi Arsip</p>
                                            </article>
                                            <!--End Aplikasi Bapenda-->

                                            <!-- Thumbnail Creative-->
                                            <!--article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-2.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-2.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6"-->

                                            <!-- Thumbnail Creative-->
                                            <!--article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-1.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-1.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative>
                          <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-3.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-3.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative>
                          <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambarfull-gallery-image-4.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-4.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative>
                          <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-5.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-5.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative>
                          <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-6.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-6.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div-->
                </nav>
            </div>
        </header>


        <!-- end galeri (berita) -->
        <section class="section">
            <div class="container section-md">
                <h3 class="box-icon-megan-title"><a href="#">
                        <hr class="team_hr team_hr_left hr_gray" />Media
                        <hr class="team_hr team_hr_left hr_gray" />
                    </a>
                </h3>
                <div class="row">
                    <?php foreach ($vid as $row) { ?>
                        <div class="col-12 col-md-6">
                            <div class="card mt-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?= $row['link'] ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['judul'] ?></h5>
                                    <p class="card-text"><?= $row['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>



            </div>

        </section>
        <!-- akses cepat-->
        <section class="section">
            <div class="container section-md">
                <h3 class="box-icon-megan-title"><a href="#">
                        <hr class="team_hr team_hr_left hr_gray" />Akses Cepat
                        <hr class="team_hr team_hr_left hr_gray" />
                    </a></h3>
                <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
                    <article class="box-icon-megan wow fadeInUp">
                        <div class="box-icon-megan-header">
                            <div>
                                <img src="<?= base_url('assets'); ?>/gambar/partner1.jpg" alt="" width="100" height="100" />
                            </div>
                        </div>
                        <h5 class="box-icon-megan-title"><a href="https://play.google.com/store/apps/details?id=com.siceupolepbb.kabpwk2" target="_blank">SiCEUPOL</a></h5>
                        <p class="box-icon-megan-text">Sistem Informasi Cek PBB Online</p>
                    </article>
                    <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
                        <div class="box-icon-megan-header">
                            <div>
                                <img src="<?= base_url('assets'); ?>/gambar/partner2.jpg" alt="" width="100" height="100" />
                            </div>
                        </div>
                        <h5 class="box-icon-megan-title"><a href="http://36.67.50.122/e-sptpd/site/login" target="_blank">E SPTPD</a></h5>
                        <p class="box-icon-megan-text">Elektronik Surat Pemberitahuan Pajak Daerah</p>
                    </article>
                    <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
                        <div class="box-icon-megan-header">
                            <div>
                                <img src="<?= base_url('assets'); ?>/gambar/partner4.jpg" alt="" width="100" height="100" />
                            </div>
                        </div>
                        <h5 class="box-icon-megan-title"><a href="https://retribusi.purwakartakab.go.id/" target="_blank">SIP RETRIBUSI</a></h5>
                        <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Retribusi</p>
                    </article>
                    <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
                        <div class="box-icon-megan-header">
                            <div>
                                <img src="<?= base_url('assets'); ?>/gambar/partner5.jpg" alt="" width="100" height="100" />
                            </div>
                        </div>
                        <h5 class="box-icon-megan-title"><a href="http://takolsibokap.purwakartakab.go.id:81/site/login" target="_blank">TAKOL SIBOKAP</a></h5>
                        <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Pajak BPHTB</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end akses cepat -->

        <!-- Page Footer-->
        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-4">
                            <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Jenis Pajak</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Parkir</a></li>
                                <li><a href="#">Reklame</a></li>
                                <li><a href="#">Restoran</a></li>
                                <li><a href="#">Hiburan</a></li>
                                <li><a href="#">Air Tanah</a></li>
                                <li><a href="#">Penerangan Jalan</a></li>
                                <li><a href="#">MBLB</a></li>
                                <li><a href="#">PBB</a></li>
                                <li><a href="#">BPHTB</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Informasi</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="about-us.html">Tentang Kami</a></li>
                                <li><a href="#">Berita</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contacts.html">Hubungi Kami</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-xl-5">
                            <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Arah</span></h5>
                            <!-- RD Mailform-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.808429968791!2d107.44282961485622!3d-6.545857495265547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690fecc90cf4e3%3A0x8b0e32917971f16a!2sBAPENDA%20Kab.%20Purwakarta!5e0!3m2!1sid!2sid!4v1662811792494!5m2!1sid!2sid" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <?php foreach ($ShowData as $dt) : ?>
                <div class="footer-modern-line-2">
                    <div class="container">
                        <div class="row row-30 align-items-center">
                            <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4">
                                <div class="row row-30 align-items-center text-lg-center">
                                    <div class="col-md-7 col-xl-6"><a class="brand" href="index.html"><img src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>" alt="" width="198" height="66" /></a></div>
                                    <div class="col-md-5 col-xl-6">
                                        <!-- <div class="iso-1"><span><img src="<?= base_url('assets'); ?>/gambar/templatemo_logo.png" alt="" width="58" height="25"/></span><span class="iso-1-big">9.4k</span></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                                <div class="group-xmd group-sm-justify">
                                    <div class="footer-modern-contacts wow slideInUp">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                                            <div class="unit-body"><a class="phone" href="tel:#"><?= $dt['no_telp']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="footer-modern-contacts wow slideInDown">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                                            <div class="unit-body"><a class="mail" href="mailto:#">bapenda@purwakartakab.go.id</a></div>
                                        </div>
                                    </div>
                                    <div class="wow slideInRight">
                                        <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                                            <li><a class="icon mdi mdi-facebook" href=" <?= $dt['url_fb'] ?>"></a></li>
                                            <li><a class="icon mdi mdi-instagram" href=" <?= $dt['url_ig'] ?> "></a></li>
                                            <li><a class="icon mdi mdi-youtube-play" href=" <?= $dt['url_yt'] ?> "></a></li>
                                            <li><a class="icon mdi mdi-tumblr" href=" <?= $dt['url_tiktok'] ?> "></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-10 justify-content-between">
                        <div class="col-md-6"><span><?= $dt['alamat_kantor']; ?></span></div>
                        <div class="col-md-auto">
                        <?php endforeach; ?>
                        <!-- Rights-->
                        <!--
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span><!-- All Rights Reserved. -->
                        </span><span><!--  Design&nbsp;by&nbsp; --><a href="">
                                ©2022 BADAN PENDAPATAN DAERAH KABUPATEN PURWAKARTA </a></span></p>
                        </div>
                    </div>
                </div>
    </div>
    </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="<?= base_url('assets'); ?>/js/core.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/script.js"></script>
    <!-- coded by Himic-->

</body>

</html>