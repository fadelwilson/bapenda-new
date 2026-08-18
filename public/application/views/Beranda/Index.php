<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BAPENDA - Beranda</title>

  <meta name="keywords" content="WebSite Template" />
  <meta name="description" content="Porto - Multipurpose Website Template">
  <meta name="author" content="okler.net">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('assets'); ?>/new/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?= base_url('assets'); ?>/new/img/apple-touch-icon.png">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/animate/animate.compat.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/simple-line-icons/css/simple-line-icons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/owl.carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/vendor/magnific-popup/magnific-popup.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/css/theme.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/css/theme-elements.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/css/theme-blog.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/css/theme-shop.css">

  <!-- Skin CSS -->
  <link id="skinCSS" rel="stylesheet" href="<?= base_url('assets'); ?>/new/css/skins/skin-corporate-10.css">

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/new/css/custom.css">

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 0, 'effect': 'pulse'}">
  <div class="loading-overlay">
    <div class="bounce-loader">
      <div class="wrapper-pulse">
        <div class="cssload-pulse-loader"></div>
      </div>
    </div>
  </div>
  <div class="body">
    <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
      <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container container-xl-custom">
          <div class="header-row">
            <div class="header-column">
              <div class="header-row">
                <div class="header-logo">
                  <?php foreach ($ShowData as $dt) : ?>
                    <a href="<?= $dt['url_bapenda'] ?>">
                      <img alt="Porto" width="82" height="40" src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>">
                    <?php endforeach; ?>
                    </a>
                </div>
              </div>
            </div>
            <div class="header-column justify-content-end">
              <div class="header-row">
                <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                  <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                    <nav class="collapse">
                      <ul class="nav nav-pills" id="mainNav">
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle active" href="<?= site_url('BerandaController/Index') ?>">
                            Beranda
                          </a>
                        </li>
                        <li class="dropdown dropdown-mega">
                          <a class="dropdown-item dropdown-toggle" href="<?= site_url('BerandaController/TentangKami') ?>">
                            Tentang Kami
                          </a>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle" href="<?= site_url('BerandaController/blog') ?>">
                            Berita
                          </a>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle" href="<?= site_url('media') ?>">
                            Media
                          </a>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle" href="<?= site_url('kritik-saran') ?>">
                            Kritik & Saran
                          </a>
                        </li>

                      </ul>
                    </nav>
                  </div>
                  <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div role="main" class="main">

      <!-- poto geser -->
      <section class="section section-with-shape-divider border-0 py-0 m-0 mb-5">
        <div class="shape-divider shape-divider-bottom z-index-3" style="height: 136px;">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
            <path d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z" fill="#ffffff" />
          </svg>
        </div>
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-primary nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
          <div class="owl-stage-outer">
            <div class="owl-stage">
              <?php foreach ($ShowData as $dt) : ?>
                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background1'] ?>" style="background-size: cover; background-position: center; ">
                  <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                      <div class="col-lg-6">
                        <div class="d-flex flex-column align-items-center">
                          <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-normal px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                              <img src="<?= base_url('assets'); ?>/new/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                            </span>
                            BADAN PENDAPATAN DAERAH
                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                              <img src="<?= base_url('assets'); ?>/new/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                            </span>
                          </h3>
                          <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" style="font-size: 6rem;" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 300, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">BAPENDA</h2>
                          <p class="text-4 text-color-light font-weight-light text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Kabupaten Purwakarta</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background2'] ?>" style="background-size: cover; background-position: center; ">
                  <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                      <div class="col-lg-7 text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                          <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-normal ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                              <img src="<?= base_url('assets'); ?>/new/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                            </span>
                            BEKERJA KERAS MEMBERIKAN
                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                              <img src="<?= base_url('assets'); ?>/new/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                            </span>
                          </h3>
                          <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">PELAYANAN TERBAIK</h1>
                          <p class="text-4-5 text-color-light font-weight-light text-center mb-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Untuk Masyarakat Purwakarta</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Carousel Slide 3 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-2 lazyload" data-bg-src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['background3'] ?>" style="background-size: cover; background-position: center;">
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
          </div>
          <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
          </div>
        </div>
      </section>

      <!-- SEPUTAR BAPENDA -->
      <div class="container container-xl-custom py-5 my-5">
        <div class="row justify-content-center">
          <div class="col-xl-8 text-center mb-4">
            <h2 class="font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeIn">PROFIL SINGKAT KAMI</h2>
            <p class="line-height-9 text-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><span class="opacity-7">Badan Pendapatan Daerah (Bapenda) adalah lembaga pemerintah daerah yang bertugas untuk mengelola dan meningkatkan pendapatan daerah, terutama dari sektor pajak dan retribusi. Bapenda berperan penting dalam perencanaan, pemungutan, pengelolaan, dan pengawasan pendapatan yang berasal dari sumber-sumber asli daerah (PAD).</span></p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10 px-lg-5">
            <div class="row">
              <?php foreach ($ShowDataInformasi as $dt) : ?>
                <div class="col-md-6 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter">
                  <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
                    <span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/informasi/<?= $dt['foto_seputar'] ?>" class="img-fluid" alt="" style="width: 500; height: 350px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-slide-info-hover-1">
                          <span class="thumb-info-inner text-4"><?= $dt['judul_seputar'] ?></span>
                        </span>
                        <span class="thumb-info-slide-info-hover-2">
                          <span class="thumb-info-inner text-2">
                            <a href="<?= base_url('loginwebsite') ?>/uploads/seputar/informasi/<?= $dt['foto_seputar'] ?>" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">View Informasi <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
                          </span>
                        </span>
                      </span>
                    </span>
                  </span>
                </div>
              <?php endforeach; ?>
              <?php foreach ($ShowDataAlur as $dt) : ?>
                <div class="col-md-6 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInLeftShorter">
                  <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
                    <span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/alur/<?= $dt['foto_alur'] ?>" class="img-fluid" alt="" style="width: 500; height: 350px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-slide-info-hover-1">
                          <span class="thumb-info-inner text-4"><?= $dt['judul_alur'] ?></span>
                        </span>
                        <span class="thumb-info-slide-info-hover-2">
                          <span class="thumb-info-inner text-2">
                            <a href="<?= base_url('loginwebsite') ?>/uploads/seputar/alur/<?= $dt['foto_alur'] ?>" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">View Alur <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
                          </span>
                        </span>
                      </span>
                    </span>
                  </span>
                </div>
              <?php endforeach; ?>
              <?php foreach ($ShowDataVisi as $dt) : ?>
                <div class="col-md-4 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInLeftShorter">
                  <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
                    <span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/visi/<?= $dt['foto_visi'] ?>" class="img-fluid" alt="" style="width: 300; height: 150px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-slide-info-hover-1">
                          <span class="thumb-info-inner text-4"><?= $dt['judul_visi'] ?></span>
                        </span>
                        <span class="thumb-info-slide-info-hover-2">
                          <span class="thumb-info-inner text-2">
                            <a href="<?= base_url('loginwebsite') ?>/uploads/seputar/visi/<?= $dt['foto_visi'] ?>" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">View Visi <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
                          </span>
                        </span>
                      </span>
                    </span>
                  </span>
                </div>
              <?php endforeach; ?>
              <?php foreach ($ShowDataMisi as $dt) : ?>
                <div class="col-md-4 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                  <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
                    <span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/seputar/misi/<?= $dt['foto_misi'] ?>" class="img-fluid" alt="" style="width: 300; height: 150px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-slide-info-hover-1">
                          <span class="thumb-info-inner text-4"><?= $dt['judul_misi'] ?></span>
                        </span>
                        <span class="thumb-info-slide-info-hover-2">
                          <span class="thumb-info-inner text-2">
                            <a href="<?= base_url('loginwebsite') ?>/uploads/seputar/misi/<?= $dt['foto_misi'] ?>" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">View Misi <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
                          </span>
                        </span>
                      </span>
                    </span>
                  </span>
                </div>
              <?php endforeach; ?>
              <?php foreach ($ShowDataGaleri as $dt) : ?>
                <div class="col-md-4 px-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                  <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
                    <span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['poster_kaban'] ?>" class="img-fluid" alt="" style="width: 300; height: 150px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-slide-info-hover-1">
                          <span class="thumb-info-inner text-4">Informasi</span>
                        </span>
                        <span class="thumb-info-slide-info-hover-2">
                          <span class="thumb-info-inner text-2">
                            <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['poster_kaban'] ?>" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">View Informasi <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
                          </span>
                        </span>
                      </span>
                    </span>
                  </span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- galeri -->
      <section class="section section-height-3 border-0 m-0 position-relative" style="background-color: #1a1a1a; overflow: hidden;">
        <div class="container py-1">
          <div class="col">
            <h2 class="text-color-light font-weight-bold text-9 mb-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Galeri</h2>
            <div class="custom-half-carousel-style-1 carousel-half-full-width-wrapper carousel-half-full-width-right">
              <div class="owl-carousel owl-theme carousel-half-full-width-right dots-align-left dots-light custom-dots-style-1 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'loop': false, 'nav': false, 'dots': true, 'margin': 20}">
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400">
                  <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                    <div class="thumb-info-wrapper rounded-0">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri1'] ?>" class="img-fluid rounded-0" alt="" style="width: 500; height: 350px;" />
                      <div class="thumb-info-action">
                        <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri1'] ?>" aria-label="">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1"></h2>
                  <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                    <a href="#" class="text-decoration-none text-color-light opacity-hover-8"></a>
                  </h3>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="600">
                  <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                    <div class="thumb-info-wrapper rounded-0">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri2'] ?>" class="img-fluid rounded-0" alt="" style="width: 500; height: 350px;" />
                      <div class="thumb-info-action">
                        <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri2'] ?>" aria-label="">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1"></h2>
                  <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                    <a href="#" class="text-decoration-none text-color-light opacity-hover-8"></a>
                  </h3>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">
                  <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                    <div class="thumb-info-wrapper rounded-0">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri3'] ?>" class="img-fluid rounded-0" alt="" style="width: 500; height: 350px;" />
                      <div class="thumb-info-action">
                        <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri3'] ?>" aria-label="">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1"></h2>
                  <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                    <a href="#" class="text-decoration-none text-color-light opacity-hover-8"></a>
                  </h3>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                  <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                    <div class="thumb-info-wrapper rounded-0">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri4'] ?>" class="img-fluid rounded-0" alt="" style="width: 500; height: 350px;" />
                      <div class="thumb-info-action">
                        <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri4'] ?>" aria-label="">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1"></h2>
                  <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                    <a href="#" class="text-decoration-none text-color-light opacity-hover-8"></a>
                  </h3>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                  <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                    <div class="thumb-info-wrapper rounded-0">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri5'] ?>" class="img-fluid rounded-0" alt="" style="width: 500; height: 350px;" />
                      <div class="thumb-info-action">
                        <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri5'] ?>" aria-label="">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1"></h2>
                  <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                    <a href="#" class="text-decoration-none text-color-light opacity-hover-8"></a>
                  </h3>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                  <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                    <div class="thumb-info-wrapper rounded-0">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri6'] ?>" class="img-fluid rounded-0" alt="" style="width: 500; height: 350px;" />
                      <div class="thumb-info-action">
                        <a href="<?= base_url('loginwebsite') ?>/uploads/galeri/<?= $dt['galeri6'] ?>" aria-label="">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1"></h2>
                  <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                    <a href="#" class="text-decoration-none text-color-light opacity-hover-8"></a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- video -->
      <?php foreach ($ShowDataKegiatan as $dt) : ?>
        <div class="home-intro bg-color-grey my-0 py-0" id="home-intro">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                <div class="card bg-transparent border-0">
                  <div class="card-body my-2">
                    <a href="<?= $dt['url_yt_kegiatan']; ?>" target="_blank" rel="noopener noreferrer">
                      <div class="feature-box align-items-center">
                        <div class="feature-box-icon bg-color-light text-8">
                          <i class="fas fa-play text-color-dark text-1"></i>
                        </div>
                        <div class="feature-box-info">
                          <p class="mb-0 text-color-dark font-weight-bold negative-ls-1">
                            Kegiatan Pendataan Objek PBJT Atas Kesenian dan Hiburan (Uji Petik Pajak Hiburan)
                            <span class="text-color-dark opacity-5 ls-0">PAJAK ANDA, BUKTI CINTA UNTUK PURWAKARTA ISTIMEWA</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>

      <!-- INFORMASI -->
      <?php foreach ($ShowData as $dt) : ?>
        <div class="container container-xl-custom">
          <div class="row justify-content-center featured-boxes featured-boxes-style-4 pb-3 mb-4">
            <div class="col-md-4">
              <div class="featured-box featured-box-primary">
                <div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                  <i class="icon-featured icons icon-location-pin mb-3"></i>
                  <span class="d-block opacity-7 line-height-1">Alamat</span>
                  <h2 class="font-weight-bold text-color-dark text-5 mb-0"><?= $dt['alamat_kantor']; ?></h2>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="featured-box featured-box-primary mx-5">
                <div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                  <i class="icon-featured icons icon-clock mb-3"></i>
                  <span class="d-block opacity-7 line-height-1">Jam Kerja</span>
                  <h2 class="font-weight-bold text-color-dark text-5 mb-0">Senin - Jumat / 08:00 - 16:00</h2>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="featured-box featured-box-primary">
                <div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
                  <i class="icon-featured icons icon-call-in mb-3"></i>
                  <span class="d-block opacity-7 line-height-1">Nomor</span>
                  <h2 class="font-weight-bold text-color-dark text-5 mb-0">
                    <a href="tel:0123456789" class="text-decoration-none text-color-dark text-color-hover-primary"></a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <footer id="footer" class="bg-color-light border-0 pt-5 mt-0">
      <div class="footer-copyright curved-border curved-border-top d-flex align-items-center">
        <div class="container py-2">
          <div class="row py-4">
            <div class="col text-center">
              <p class="text-3">2024 © <strong class="font-weight-normal text-color-light opacity-7">Bapenda</strong> - Kabupaten Purwakarta.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Vendor -->
  <script src="<?= base_url('assets'); ?>/new/vendor/plugins/js/plugins.min.js"></script>

  <!-- Theme Base, Components and Settings -->
  <script src="<?= base_url('assets'); ?>/new/js/theme.js"></script>

  <!-- Current Page Vendor and Views -->
  <script src="<?= base_url('assets'); ?>/new/js/views/view.contact.js"></script>

  <!-- Theme Custom -->
  <script src="<?= base_url('assets'); ?>/new/js/custom.js"></script>

  <!-- Theme Initialization Files -->
  <script src="<?= base_url('assets'); ?>/new/js/theme.init.js"></script>

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

</body>

</html>