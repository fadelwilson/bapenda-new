<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bapenda - Media</title>

  <meta name="keywords" content="WebSite Template" />
  <meta name="description" content="Porto - Multipurpose Website Template">
  <meta name="author" content="okler.net">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('assets'); ?>/new/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?= base_url('assets'); ?>/new/img/apple-touch-icon.png">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

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
    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
      <div class="header-body border-top-0">
        <div class="header-container container-fluid px-lg-4">
          <div class="header-row">
            <div class="header-column header-column-border-right flex-grow-0">
              <div class="header-row pe-4">
                <div class="header-logo">
                  <?php foreach ($ShowData as $dt) : ?>
                    <a href="<?= $dt['url_bapenda'] ?>">
                      <img alt="Porto" width="200" height="40" src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>">
                    <?php endforeach; ?>
                    </a>
                </div>
              </div>
            </div>
            <div class="header-column">
              <div class="header-row">
                <div class="header-nav header-nav-links justify-content-center">
                  <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                    <nav class="collapse header-mobile-border-top">
                      <ul class="nav nav-pills" id="mainNav">
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle" href="<?= site_url('BerandaController/Index') ?>">
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
                          <a class="dropdown-item dropdown-toggle active" href="<?= site_url('media') ?>">
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
                </div>
              </div>
            </div>
            <div class="header-column header-column-border-left flex-grow-0 justify-content-center">
              <div class="header-row ps-4 justify-content-end">
                <?php foreach ($ShowData as $dt) : ?>
                  <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean m-0">
                    <li class="social-icons-facebook"><a href="<?= $dt['url_fb'] ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-x"><a href="<?= $dt['url_twitter'] ?>" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="<?= $dt['url_ig'] ?>" target="_blank" title="Linkedin"><i class="fab fa-brands fa-instagram"></i></a></li>
                    <li class="social-icons-youtube"><a href="<?= $dt['url_yt'] ?>" target="_blank" title="Linkedin"><i class="fab fa-brands fa-youtube"></i></a></li>
                  <?php endforeach; ?>
                  <button class="btn header-btn-collapse-nav ms-0 ms-sm-3" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div role="main" class="main">

      <section class="page-header page-header-modern bg-color-dark page-header-md mb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
              <h1 class="text-light font-weight-bold text-8">Media</h1>
              <span class="sub-title text-light">Bapenda Purwakarta!</span>
            </div>
            <div class="col-md-12 align-self-center order-1">
              <ul class="breadcrumb d-block text-center breadcrumb-light">
                <li><a href="#">Beranda</a></li>
                <li class="active">Media</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <div class="bg-grey-100 py-5">
        <div class="container py-4">

          <div class="row">
            <div class="col">
              <div class="blog-posts">

                <div class="row">
                  <div class="container py-2">

                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                      <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
                    </ul>
                    <?php foreach ($ShowDataKegiatan as $dt) : ?>
                      <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                        <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                          <div class="col-md-6 col-lg-3 isotope-item brands">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan1'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan1'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-3 isotope-item medias">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan2'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Watch</span>
                                    <span class="thumb-info-type">Media</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan2'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-3 isotope-item logos">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan3'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Identity</span>
                                    <span class="thumb-info-type">Logo</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan3'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-3 isotope-item websites">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan4'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Screens</span>
                                    <span class="thumb-info-type">Website</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan4'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-3 isotope-item logos">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan5'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Three Bottles</span>
                                    <span class="thumb-info-type">Logo</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan5'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-3 isotope-item brands">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan6'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Company T-Shirt</span>
                                    <span class="thumb-info-type">Brand</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan6'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-3 isotope-item websites">
                            <div class="portfolio-item">
                              <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                  <img src="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan7'] ?>" class="img-fluid border-radius-0" alt="" style="width: 260px; height: 290px;">
                                  <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Mobile Mockup</span>
                                    <span class="thumb-info-type">Website</span>
                                  </span>
                                  <span class="thumb-info-action">
                                    <a href="portfolio-single-wide-slider.html">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                    </a>
                                    <a href="<?= base_url('loginwebsite') ?>/uploads/kegiatan/<?= $dt['kegiatan7'] ?>" class="lightbox-portfolio">
                                      <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                    </a>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>
                        <?php endforeach; ?>
                        </div>
                      </div>

                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="bg-dark px-3 px-xl-0 border-radius-2 text-light p-relative overflow-hidden">
        <div class="custom-el-3 custom-pos-2 opacity-1">
          <img class="img-fluid opacity-5" src="img/demos/accounting-1/svg/waves-2.svg" alt="">
        </div>
        <div class="container p-relative z-index-1">
          <div class="row align-items-center py-5">
            <div class="col py-4">
              <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                <span class="badge bg-gradient-tertiary-dark text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Video Kegiatan</span></span>
              </div>
              <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2 text-light">Dokumentasi Kegiatan</h2>
              </div>
              <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <p class="pe-lg-5 text-light opacity-7">Badan Pendapatan Daerah</p>
              </div>

              <div class="pt-2 pb-4">
                <div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
                  <div class="owl-carousel owl-theme carousel-half-full-width-right nav-bottom nav-bottom-align-left nav-lg nav-transparent nav-borders-light nav-arrow-light rounded-nav mb-2" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 4}, '1200': {'items': 5}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">

                    <?php foreach ($vid as $row) : ?>
                      <div class="box-shadow-7 border-radius-2 overflow-hidden">
                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                          <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                            <!-- Menggunakan URL thumbnail YouTube -->
                            <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                              <!-- 56.25% adalah rasio 16:9 -->
                              <div class="embed-responsive embed-responsive-16by9" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0" allowfullscreen>
                                <?= $row['link'] ?>
                              </div>
                            </div>
                          </span>
                          <span class="thumb-info-content">
                            <span class="thumb-info-content-inner bg-light p-4">
                              <!-- Membatasi judul hingga 50 karakter -->
                              <h4 class="text-5 mb-2">
                                <?= substr($row['judul'], 0, 30) ?><?= strlen($row['judul']) > 30 ? '...' : '' ?>
                              </h4>
                              <!-- Membatasi deskripsi hingga 100 karakter -->
                              <p class="line-height-7 text-3 mb-0">
                                <?= substr($row['deskripsi'], 0, 50) ?><?= strlen($row['deskripsi']) > 50 ? '...' : '' ?>
                              </p>
                            </span>
                          </span>
                        </span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>

              <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <p class="mb-0 text-light d-flex justify-content-center">
                  <img src="img/demos/accounting-1/icons/icon-5.svg" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
                  © Copyright 2024 Bapenda kabupaten Purwakarta
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- <footer id="footer">
      <?php foreach ($ShowData as $dt) : ?>
        <div class="container my-4">
          <div class="row py-5">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Alamat</h5>
              <p class="text-4 mb-0"><?= $dt['alamat_kantor']; ?></p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Jam Kerja</h5>
              <p class="text-4 mb-0">Sen - Jum: <span class="text-color-light">8:00 - 16:00 </span></p>
              <p class="text-4 mb-0">Sab - Ming: <span class="text-color-light">Tutup</span></p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Call Us Now</h5>
              <p class="text-7 text-color-light font-weight-bold mb-2">
                <a href="tel:012345679" class="text-decoration-none text-color-light"><?= $dt['no_telp']; ?></a>
              </p>

            </div>
            <div class="col-md-6 col-lg-3">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Social Media</h5>
              <ul class="footer-social-icons social-icons m-0">
                <li class="social-icons-facebook"><a href="<?= $dt['url_fb'] ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-x"><a href="<?= $dt['url_twitter'] ?>" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="<?= $dt['url_ig'] ?>" target="_blank" title="Linkedin"><i class="fab fa-brands fa-instagram"></i></a></li>
                <li class="social-icons-youtube"><a href="<?= $dt['url_yt'] ?>" target="_blank" title="Linkedin"><i class="fab fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-copyright footer-copyright-style-2 pb-4">
            <div class="py-2">
              <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                  <p>© Copyright 2024. All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </footer> -->

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

</body>

</html>