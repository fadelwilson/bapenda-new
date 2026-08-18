<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Tentang Kami</title>
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
        <!-- <div class="line-triangle">
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
          </div> -->
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
                        src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>" alt="" width="300" height="166" />
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
                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('BerandaController/Index') ?>">Beranda</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="">Tentang Kami</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('kritik-saran') ?>">Kritik & Saran</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?= site_url('media') ?>">Media</a>
                      <!--  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                      </li> -->
                      <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Produk Hukum</a>
                      </li> -->
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- end navbar -->


            <!-- button buka galeri  -->
            <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
              <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
              </div>
            </div>
            <div class="rd-navbar-project">
              <div class="rd-navbar-project-header">
                <h5 class="rd-navbar-project-title">Galeri</h5>
                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                  <div class="project-close"><span></span><span></span></div>
                </div>
              </div>
              <!-- Galeri poto -->
              <div class="rd-navbar-project-content rd-navbar-content">
                <div>
                  <div class="row gutters-20" data-lightgallery="group">
                    <div class="col-6">
                      <!-- Thumbnail Creative-->
                      <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-2.jpg" data-lightgallery="item">
                          <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-2.jpg" alt="" width="195" height="164" />
                          </div>
                          <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                        </a></article>
                    </div>
                    <div class="col-6">
                      <!-- Thumbnail Creative-->
                      <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-1.jpg" data-lightgallery="item">
                          <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-1.jpg" alt="" width="195" height="164" />
                          </div>
                          <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                        </a></article>
                    </div>
                    <div class="col-6">
                      <!-- Thumbnail Creative-->
                      <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-3.jpg" data-lightgallery="item">
                          <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-3.jpg" alt="" width="195" height="164" />
                          </div>
                          <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                        </a></article>
                    </div>
                    <div class="col-6">
                      <!-- Thumbnail Creative-->
                      <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambarfull-gallery-image-4.jpg" data-lightgallery="item">
                          <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-4.jpg" alt="" width="195" height="164" />
                          </div>
                          <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                        </a></article>
                    </div>
                    <div class="col-6">
                      <!-- Thumbnail Creative-->
                      <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-5.jpg" data-lightgallery="item">
                          <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-5.jpg" alt="" width="195" height="164" />
                          </div>
                          <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                        </a></article>
                    </div>
                    <div class="col-6">
                      <!-- Thumbnail Creative-->
                      <article class="thumbnail thumbnail-creative"><a href="<?= base_url('assets'); ?>/gambar/full-gallery-image-6.jpg" data-lightgallery="item">
                          <div class="thumbnail-creative-figure"><img src="<?= base_url('assets'); ?>/gambar/full-gallery-image-6.jpg" alt="" width="195" height="164" />
                          </div>
                          <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                        </a></article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end galeri  -->


    <!-- Poto geser-->
    <?php foreach ($ShowDataTim as $dt) : ?>
      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_header'] ?>">
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
        <?php endforeach; ?>
      </section>
      <!-- end Poto geser -->

      <!--profil team-->
      <?php foreach ($ShowDataTim as $dt) : ?>
        <!--<section class="bg-gray-7">-->
        <!--        <div class="breadcrumbs-custom box-transform-wrap context-dark">-->
        <!--          <div class="container">-->
        <!--            <h3 class="breadcrumbs-custom-title">Tentang Kami</h3>-->
        <!--            <div class="breadcrumbs-custom-decor"></div>-->
        <!--          </div>-->
        <!--          <div class="box-transform">-->
        <!--            <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_header'] ?>" alt="" width="1918" height="753"/>-->
        <!--          </div>-->
        <!--        </div>-->
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Beranda</a></li>
            <li class="active">Tentang Kami</li>
          </ul>
        </div>
        </section>


        <!--
<!--profil Kaban
<section class="section section-xl bg-default">
        <div class="container">
          <h3 class="wow fadeInLeft">Sejarah Kepala Badan Pendapatan Daerah</h3>
        </div>
        <div class="container container-style-1">
          <div class="owl-carousel owl-style-12" data-items="2" data-sm-items="3" data-lg-items="5" data-margin="30" data-xl-margin="45" data-autoplay="false" data-nav="true" data-center="true" data-smart-speed="400">
            <!-- kaban 1
              <article class="team-modern">
              <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban1'] ?>" data-lightgallery="item">
                <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban1'] ?>" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kaban1'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bapenda 2017 - 2019</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Kepala Bapenda Pertama</a></li>
     
                  </ul>
                </div>
              </article>
            <!-- kaban 2
              <article class="team-modern">
              <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban2'] ?>" data-lightgallery="item">
              <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban2'] ?>" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kaban2'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bapenda 2019 - 2021</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Kepala Bapenda Kedua</a></li>
                  </ul>
                </div>
              </article>
              <!-- kaban 3
              <article class="team-modern">
              <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban3'] ?>" data-lightgallery="item">
                <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban3'] ?>" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kaban3'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bapenda 2021 - 2022</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Kepala Bapenda Ketiga</a></li>
                  </ul>
                </div>
              </article>
              <!-- kaban 4
              <article class="team-modern"><a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban4'] ?>" data-lightgallery="item">
              <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban4'] ?>" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kaban4'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bapenda 2022 - sekarang</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Kepala Bapenda Terkini</a></li>
                  </ul>
                </div>
              </article>
      </section>
-->


        <section class="section section-xl bg-default">
          <div class="container">
            <h3 class="wow fadeInLeft">Badan Pendapatan Daerah</h3>
          </div>
          <div class="container container-style-1">
            <div class="owl-carousel owl-style-12" data-items="2" data-sm-items="3" data-lg-items="5" data-margin="30" data-xl-margin="45" data-autoplay="false" data-nav="true" data-center="true" data-smart-speed="400">
              <!-- kabid 1-->
              <article class="team-modern">
                <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid1'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid1'] ?>" alt="" width="270" height="236" /></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kabid1'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bidang</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Penetapan dan Pengolahan Data</a></li>

                  </ul>
                </div>
              </article>
              <!-- kabid2-->
              <article class="team-modern">
                <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid2'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid2'] ?>" alt="" width="270" height="236" /></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kabid2'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bidang</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Pendapatan dan Pelayanan</a></li>
                  </ul>
                </div>
              </article>
              <!-- kabid 3-->
              <article class="team-modern">
                <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid3'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid3'] ?>" alt="" width="270" height="236" /></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kabid3'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Bidang</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Penagihan, Pengendalian dan Evaluasi Pelaporan</a></li>
                  </ul>
                </div>
              </article>
              <!-- sekban-->
              <article class="team-modern"><a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban'] ?>" alt="" width="270" height="236" /></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_kaban'] ?> </a></h6>
                  <div class="team-modern-status">Kepala Badan</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Badan Pendapatan Daerah</a></li>
                  </ul>
                </div>
              </article>
              <!--Kaban-->
              <article class="team-modern"><a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_sekban'] ?>" data-lightgallery="item">
                  <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_sekban'] ?>" alt="" width="270" height="236" /></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#"><?= $dt['nama_sekban'] ?> </a></h6>
                  <div class="team-modern-status">Sekertaris Badan</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="" href="#">Badan Pendapatan Daerah</a></li>
                  </ul>
                </div>
              </article>
        </section>
      <?php endforeach; ?>
      <!-- end profil team -->

      <!-- kinerja dan struktur -->
      <?php foreach ($ShowDataStruktur as $dt) : ?>
        <section class="section section bg-default">
          <div class="container">
            <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
              <div class="col-lg-4 col-xl-3">
                <h5 class="text-spacing-200 text-capitalize">Tentang Bapenda</h5>
                <ul class="nav list-category list-category-down-md-inline-block">
                  <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a class="active" href="#tabs-4-1" data-toggle="tab"> <?= $dt['judul1'] ?> </a></li>
                  <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a href="#tabs-4-2" data-toggle="tab">Matrik Kinerja</a></li>
              </div>
              <div class="col-lg-8 col-xl-9">
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <h4><?= $dt['judul1'] ?></h4>
                    <p><?= $dt['narasi1'] ?>.</p>
                    <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_struk'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_struk'] ?>" alt="" width="835" height="418" />
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <h4><?= $dt['judul2'] ?></h4>
                    <p><?= $dt['narasi2'] ?>.</p>
                    <a class="team-modern-figure" href="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_matrix'] ?>" data-lightgallery="item">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_matrix'] ?>" alt="" width="835" height="418" /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endforeach; ?>
      <!-- end kinerja dan struktur -->

      <!-- Produk Hukum-->
      <div class="container section-md">
        <div class="card shadow mb-4">
          <div class="card-header py-3 ">
            <h5 class="text-spacing-200 text-capitalize">Produk Hukum</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Undang - Undang</th>
                    <th scope="col">File</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($ShowDataProdukHukum as $dt) : ?>
                    <tr>
                      <th scope="row"><?= $i ?></th>
                      <td><?= $dt['ket']; ?></td>
                      <td>
                        <a href="<?= base_url('loginwebsite/uploads/tentangkami/produkhukum/' . $dt['file_uu']); ?>" target="_blank"> View </a>
                        <!-- <button class="button button-lg button-secondary button-winona wow fadeInRight">View PDF</button> -->
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
              </form>
            </div>
          </div>
        </div>
      </div>
      </section>
      <!-- end produk hukum -->

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
          <div class="footer-modern-line-3">
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
  <script src="<?= base_url('loginwebsite'); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('loginwebsite'); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('loginwebsite'); ?>/assets/js/demo/datatables-demo.js"></script>
  <!-- coded by Himic-->
</body>

</html>