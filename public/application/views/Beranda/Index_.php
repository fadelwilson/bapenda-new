<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
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
                    <img class="brand-logo-dark" 
                   src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>" alt="" width="300" height="166"/>
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
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="<?= site_url('BerandaController/Index')?>">Beranda</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('BerandaController/TentangKami')?>">Tentang Kami</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('kritik-saran')?>">Kritik & Saran</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('media')?>">Media</a>
                     <!--  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                      </li> -->
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
                  <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner8.jpg" alt="" width="800" height="800"/></div>
              </div>
              <h5 class="box-icon-megan-title" ><a href="http://192.168.2.6/bhumie/index.php/user/login" target="_blank">SIP PBB</a></h5>
              <p class="box-icon-megan-text">Sistem Informasi Pengelolaan PBB (P2)</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div>
                  <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner9.jpg" alt="" width="800" height="800"/></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="http://192.168.2.151/pad/index.php/user/login" target="_blank">SIP PAD</a></h5>
              <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Pendapatan Daerah</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div>
                  <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner10.jpg" alt="" width="800" height="800"/></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="http://192.168.2.6/sistemberkas/login.php" target="_blank">Sistem Berkas</a></h5>
              <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Berkas</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
               <div>
                  <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner11.jpg" alt="" width="800" height="800"/></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="http://192.168.2.6/bphtb/index.php/site/login" target="_blank">BPHTB</a></h5>
              <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Pajak BPHTB</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
               <div>
                  <img src="https://www.bapenda.purwakartakab.go.id/assets/gambar/partner12.jpg" alt="" width="800" height="800"/></div>
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


      <!-- Poto geser-->
      <?php foreach ($ShowData as $dt) : ?>
      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background1'] ?>">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0"></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="10"></p><!-- <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="10"></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background2'] ?>">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0"></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="10"></p>
                    <div class="button-wrap oh"><!-- <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0"></a> --></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background3'] ?>">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0"></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="10"></p>
                    <div class="button-wrap oh"><!-- <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0"></a> --></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background4'] ?>">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0"></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="10"></p>
                    <div class="button-wrap oh"><!-- <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0"></a> --></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background5'] ?>">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0"></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="10"></p>
                    <div class="button-wrap oh"><!-- <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0"></a> --></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
        <?php endforeach; ?>
      </section>
<!-- end Poto geser -->

<!-- seputar bapenda -->
<?php foreach ($ShowDataInformasi as $dt) : ?>
      <!-- <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Seputar Bapenda</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-1.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">About us</li>
          </ul>
        </div>
      </section> -->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
            <div class="col-lg-4 col-xl-3">
              <h5 class="text-spacing-200 text-capitalize">Seputar Bapenda</h5>
              <ul class="nav list-category list-category-down-md-inline-block">
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a class="active" href="#tabs-4-1" data-toggle="tab">Informasi</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a href="#tabs-4-2" data-toggle="tab">Alur Pembayaran Pajak</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a href="#tabs-4-3" data-toggle="tab">Visi</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".3s"><a href="#tabs-4-4" data-toggle="tab">Misi</a></li>
              </ul>
              <!-- <a class="button button-xl button-primary button-winona" href="contacts.html">Contact us</a> -->
            </div>
            <div class="col-lg-8 col-xl-9">
              <!-- Tab panes-->
               <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <h4><?= $dt['judul_seputar'] ?></h4>
                  <p><?= $dt['narasi_seputar'] ?>.</p>
                  <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/seputar/informasi/<?= $dt['foto_seputar'] ?>" data-lightgallery="item">
                <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/informasi/<?= $dt['foto_seputar'] ?>" alt="" width="835" height="418"/>
                </div></a>
                <?php endforeach; ?>

                <?php foreach ($ShowDataAlur as $dt) : ?>
                <div class="tab-pane fade" id="tabs-4-2">
                  <h4><?= $dt['judul_alur'] ?></h4>
                  <p><?= $dt['narasi_alur'] ?>.</p>
                  <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/seputar/alur/<?= $dt['foto_alur'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/alur/<?= $dt['foto_alur'] ?>" alt="" width="835" height="418"/>
                </div></a>
                <?php endforeach; ?>

                <?php foreach ($ShowDataVisi as $dt) : ?>
                <div class="tab-pane fade" id="tabs-4-3">
                <h4><?= $dt['judul_visi'] ?></h4>
                  <p><?= $dt['narasi_visi'] ?>.</p>
                  <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/seputar/visi/<?= $dt['foto_visi'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/visi/<?= $dt['foto_visi'] ?>" alt="" width="835" height="418"/>
                </div></a>
                <?php endforeach; ?>

                <?php foreach ($ShowDataMisi as $dt) : ?>
                <div class="tab-pane fade" id="tabs-4-4">
                <h4><?= $dt['judul_misi'] ?></h4>
                  <p><?= $dt['narasi_misi'] ?>.</p>
                  <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/seputar/misi/<?= $dt['foto_misi'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/misi/<?= $dt['foto_misi'] ?>" alt="" width="835" height="418"/></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end seputar bapenda -->

      <!-- poster Kaban -->
      <?php foreach ($ShowDataGaleri as $dt) : ?>
      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3 mt-5" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
        <a class="swiper-slide" href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['poster_kaban'] ?>" data-lightgallery="item">
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['poster_kaban'] ?>"></a></div>
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0"></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="10"></p><!-- <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="10"></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    
      <!-- end poster kaban -->

      <!-- Galeri wilujeng sumping-->
       <section class="section">
        <div class="container">
          <span class="d-inline-block wow slideInDown text-primary"></span></h3>
          <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- galeri 1-->
                <article class="thumbnail thumbnail-creative"><a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri1'] ?>" data-lightgallery="item">
                <div class="thumbnail-creative-figure"><img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri1'] ?>" alt="" width="195" height="164"/>
                    </div>
                  <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- galeri 2-->
                <article class="thumbnail thumbnail-creative"><a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri2'] ?>" data-lightgallery="item">
                <div class="thumbnail-creative-figure"><img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri2'] ?>" alt="" width="195" height="164"/>
                    </div>
                  <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="thumbnail thumbnail-creative"><a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri3'] ?>" data-lightgallery="item">
                <div class="thumbnail-creative-figure"><img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri3'] ?>" alt="" width="195" height="164"/>
                    </div>
                  <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="thumbnail thumbnail-creative"><a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri4'] ?>" data-lightgallery="item">
                <div class="thumbnail-creative-figure"><img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri4'] ?>" alt="" width="195" height="164"/>
                    </div>
                  <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="thumbnail thumbnail-creative"><a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri5'] ?>" data-lightgallery="item">
                <div class="thumbnail-creative-figure"><img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri5'] ?>" alt="" width="195" height="164"/>
                    </div>
                  <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="thumbnail thumbnail-creative"><a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri6'] ?>" data-lightgallery="item">
                <div class="thumbnail-creative-figure"><img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri6'] ?>" alt="" width="195" height="164"/>
                    </div>
                  <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endforeach ; ?>
<!-- end wilujeng sumping galeri -->


      

      <!-- <section class="section section-md bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp"><hr class="team_hr team_hr_left hr_gray"/>Pajak na Keur Purwakarta<hr class="team_hr team_hr_left hr_gray"/></span></h3>
      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['poster_kaban'] ?>" width="600" height="800">
        </div>
      </section>  -->
      <!-- end poster kaban -->

      <!-- Video Kegiatan Bapenda -->
      <style>
  .video-thumbnail {
    position: relative;
    display: inline-block;
    max-width: 600px;
    height: auto;
    overflow: hidden;
    border-radius: 8px;
  }

  .video-thumbnail img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
  }

  .video-thumbnail:hover img {
    transform: scale(1.1);
  }

  .play-button-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 50%;
    cursor: pointer;
  }

  .play-button-overlay:before {
    content: "";
    border-style: solid;
    border-width: 10px 0 10px 20px;
    border-color: transparent transparent transparent white;
  }

  .play-button-overlay:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  .play-button-overlay:hover:before {
    border-color: transparent transparent transparent #fff;
  }
</style>

<section class="section section-lg bg-gray-100 text-left section-relative">
  <div class="container">
    <div class="row row-60 justify-content-center justify-content-xxl-between">
      <div class="col-lg-6 col-xxl-5 position-static">
        <h3>Kegiatan Bapenda</h3>
        <?php foreach ($ShowDataKegiatan as $dt) : ?>
          <div class="tabs-custom" id="tabs-5">
            <div class="tab-content tab-content-1">
              <div class="tab-pane fade show active" id="tabs-5-4">
 <h5 class="font-weight-normal text-transform-none text-spacing-75">ORANG BIJAK BAYAR PAJAK</h5>
                    <p>PAJAK ANDA, BUKTI CINTA UNTUK PURWAKARTA ISTIMEWA.</p>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-9 col-lg-6 position-static index-1">
        <div class="video-thumbnail">
          <a href="<?= $dt['url_yt_kegiatan']; ?>" target="_blank" rel="noopener noreferrer">
            <img src="" alt="Video Thumbnail" id="videoThumbnail" />
            <div class="play-button-overlay"></div>
          </a>
        </div>
        <!-- <div class="link-play-modern">
          <a class="icon mdi mdi-play" data-lightgallery="item" href="<?= $dt['url_yt_kegiatan']; ?>"></a>
          <div class="link-play-modern-title">Video<span>Kegiatan Bapenda</span></div>
          <div class="link-play-modern-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url(assets/upload/logo-tab.jpg);"></div> -->
      </div>
    </div>
  </div>
</section>

<script>
  // YouTube Video URL
  var videoUrl = '<?= $dt['url_yt_kegiatan']; ?>';

  // Extract the video ID from the YouTube URL
  var videoId = videoUrl.match(/(?:\?v=|\/embed\/|\.be\/|\/v\/|\/\d{2,3}\/|\.be\/)([^#\&\?]*).*/)[1];

  // Construct the thumbnail URL
  var thumbnailUrl = 'https://img.youtube.com/vi/' + videoId + '/maxresdefault.jpg';

  // Update the thumbnail image source
  document.getElementById('videoThumbnail').src = thumbnailUrl;
</script>

<!-- end Video Kegiatan Bapenda -->

<!-- Poto Kegiatan Bapenda -->
       <section class="section section-last bg-default">
          <!-- <h3><span class="d-inline-block wow slideInDown"><hr class="team_hr team_hr_left hr_gray"/>Kegiatan Bapenda<hr class="team_hr team_hr_left hr_gray"/></span> -->
        <div class="container-fluid container-inset-0 isotope-wrap">
          <div class="row row-10 gutters-10 isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan1'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan1'] ?>"
                      style="width:310px;height:585px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
                    <div class="thumbnail-mary-location"> </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan2'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan2'] ?>"
                      style="width:631px;height:587px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
                    <div class="thumbnail-mary-location"></div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan3'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan3'] ?>"
                      style="width:311px;height:289px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
                    <div class="thumbnail-mary-location"></div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary wow slideInUp">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan4'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan4'] ?>"
                      style="width:631px;height:289px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
                    <div class="thumbnail-mary-location"> </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan5'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan5'] ?>" alt="" width="311" height="289"
                      style="width:311;height:289px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> asdasdsad </a></h6>
                    <div class="thumbnail-mary-location"> </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan6'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan6'] ?>"
                       style="width:311px;height:289px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
                    <div class="thumbnail-mary-location"></div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft">
                  <a class="thumbnail-mary-figure" href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan7'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan7'] ?>"
                       style="width:311px;height:289px;"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
                    <div class="thumbnail-mary-location"></div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </section>
<!-- end Poto Kegiatan Bapenda -->


 
<!-- berita-->
<style>
  .news-title {
    font-size: 24px;
  }

  .news-description {
    font-size: 14px;
  }

  .news-thumbnail img {
    width: 631px;
    height: 289px;
  }
</style>

<section class="section section-sm bg-default">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Berita Terkini</span></h3>
    <div class="row row-lg row-30">
      <?php foreach ($ShowDataBerita as $dt) : ?>
        <div class="col-lg-4 col-md-4">
          <div class="news-article">
            <div class="news-thumbnail">
              <img src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="<?= $dt['judul_berita'] ?>" width="311" height="289" />
            </div>
            <div class="news-content">
              <h3 class="news-title"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></h3>
              <p class="news-description"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?></p>
              <a class="button button-secondary" href="<?= $dt['url_berita'] ?>" target="_blank" rel="noopener noreferrer">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($ShowDataBerita2 as $dt) : ?>
        <div class="col-lg-4 col-md-4">
          <div class="news-article">
            <div class="news-thumbnail">
              <img src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="<?= $dt['judul_berita'] ?>" width="311" height="289" />
            </div>
            <div class="news-content">
              <h3 class="news-title"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></h3>
              <p class="news-description"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?></p>
              <a class="button button-secondary" href="<?= $dt['url_berita'] ?>" target="_blank" rel="noopener noreferrer">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($ShowDataBerita3 as $dt) : ?>
        <div class="col-lg-4 col-md-4">
          <div class="news-article">
            <div class="news-thumbnail">
              <img src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="<?= $dt['judul_berita'] ?>" />
            </div>
            <div class="news-content">
              <h3 class="news-title"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></h3>
              <p class="news-description"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?></p>
              <a class="button button-secondary" href="<?= $dt['url_berita'] ?>" target="_blank" rel="noopener noreferrer">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($ShowDataBerita4 as $dt) : ?>
        <div class="col-lg-4 col-md-4">
          <div class="news-article">
            <div class="news-thumbnail">
              <img src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="<?= $dt['judul_berita'] ?>" width="311" height="289" />
            </div>
            <div class="news-content">
              <h3 class="news-title"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></h3>
              <p class="news-description"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?></p>
              <a class="button button-secondary" href="<?= $dt['url_berita'] ?>" target="_blank" rel="noopener noreferrer">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($ShowDataBerita5 as $dt) : ?>
        <div class="col-lg-4 col-md-4">
          <div class="news-article">
            <div class="news-thumbnail">
              <img src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="<?= $dt['judul_berita'] ?>" width="311" height="289" />
            </div>
            <div class="news-content">
              <h3 class="news-title"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></h3>
              <p class="news-description"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?></p>
              <a class="button button-secondary" href="<?= $dt['url_berita'] ?>" target="_blank" rel="noopener noreferrer">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($ShowDataBerita6 as $dt) : ?>
        <div class="col-lg-4 col-md-4">
          <div class="news-article">
            <div class="news-thumbnail">
              <img src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="<?= $dt['judul_berita'] ?>" width="311" height="289" />
            </div>
            <div class="news-content">
              <h3 class="news-title"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></h3>
              <p class="news-description"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?></p>
              <a class="button button-secondary" href="<?= $dt['url_berita'] ?>" target="_blank" rel="noopener noreferrer">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- end berita -->

  
     <!-- akses cepat-->
      <section class="section">
        <div class="container section-md">
          <h3 class="box-icon-megan-title"><a href="#"><hr class="team_hr team_hr_left hr_gray"/>Akses Cepat<hr class="team_hr team_hr_left hr_gray"/></a></h3>
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div>
                  <img src="<?= base_url('assets'); ?>/gambar/partner1.jpg" alt="" width="100" height="100"/></div>
              </div>
              <h5 class="box-icon-megan-title" ><a href="https://play.google.com/store/apps/details?id=com.siceupolepbb.kabpwk3" target="_blank">SiCEUPOL</a></h5>
              <p class="box-icon-megan-text">Sistem Informasi Cek PBB Online</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div>
                  <img src="<?= base_url('assets'); ?>/gambar/partner2.jpg" alt="" width="100" height="100"/></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="http://sptpd.purwakartakab.go.id" target="_blank">E SPTPD</a></h5>
              <p class="box-icon-megan-text">Elektronik Surat Pemberitahuan Pajak Daerah</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div>
                  <img src="<?= base_url('assets'); ?>/gambar/partner4.jpg" alt="" width="100" height="100"/></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="https://retribusi.purwakartakab.go.id/" target="_blank">SIP RETRIBUSI</a></h5>
              <p class="box-icon-megan-text">Sistem Informasi Pengelolaan Retribusi</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
               <div>
                  <img src="<?= base_url('assets'); ?>/gambar/partner5.jpg" alt="" width="100" height="100"/></div>
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
                  <div class="col-md-7 col-xl-6"><a class="brand" href="index.html"><img src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>" alt="" width="198" height="66"/></a></div>
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
                      <div class="unit-body"><a class="mail" href="mailto:bapenda.purwakartakab.go.id@hosting.purwakartakab.go.id">bapenda.purwakartakab.go.id@hosting.purwakartakab.go.id</a></div>
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
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><span><?= $dt['alamat_kantor']; ?></span></div>
              <div class="col-md-auto">
                <?php endforeach ; ?>
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