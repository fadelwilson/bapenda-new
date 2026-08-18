<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bapenda - Tentang Kami</title>

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
                          <a class="dropdown-item dropdown-toggle active" href="<?= site_url('BerandaController/TentangKami') ?>">
                            Tentang Kami
                          </a>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle " href="<?= site_url('BerandaController/blog') ?>">
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
      <?php foreach ($ShowDataTim as $dt) : ?>
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url(<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_header'] ?>);">
          <div class="container">
            <div class="row">
              <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Tim <strong>Kami</strong></h1>
                <span class="sub-title">Kami Melayani Dengan Hati</span>
              </div>
              <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                  <li><a href="#">Beranda</a></li>
                  <li class="active">Tentang Kami</li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </section>

        <div class="container py-4">

          <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
          </ul>

          <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div class="row team-list sort-destination" data-sort-id="team">

              <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                  <span class="thumb-info-wrapper">
                    <a href="about-me.html">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban'] ?>" class="img-fluid" alt="" style="width: 260px; height: 290px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-inner"><?= $dt['nama_kaban'] ?></span>
                        <span class="thumb-info-type">Kepala Badan</span>
                      </span>
                    </a>
                  </span>
                  <span class="thumb-info-caption">
                    <span class="thumb-info-caption-text">Badan Pendapatan Daerah</span>
                    <!-- <span class="thumb-info-social-icons mb-4">
                      <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                      <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                    </span> -->
                  </span>
                </span>
              </div>
              <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                  <span class="thumb-info-wrapper">
                    <a href="about-me.html">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_sekban'] ?>" class="img-fluid" alt="" style="width: 260px; height: 290px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-inner"><?= $dt['nama_sekban'] ?></span>
                        <span class="thumb-info-type">Sekretaris Badan</span>
                      </span>
                    </a>
                  </span>
                  <span class="thumb-info-caption">
                    <span class="thumb-info-caption-text">Badan Pendapatan Daerah</span>
                    <!-- <span class="thumb-info-social-icons mb-4">
                      <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                      <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                    </span> -->
                  </span>
                </span>
              </div>
              <div class="col-12 col-sm-6 col-lg-3 isotope-item design">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                  <span class="thumb-info-wrapper">
                    <a href="about-me.html">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid1'] ?>" class="img-fluid" alt="" style="width: 260px; height: 290px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-inner"><?= $dt['nama_kabid1'] ?></span>
                        <span class="thumb-info-type">Kepala Bidang </span>
                      </span>
                    </a>
                  </span>
                  <span class="thumb-info-caption">
                    <span class="thumb-info-caption-text">Penetapan dan Pengolahan Data Badan Pendapatan Daerah</span>
                    <!-- <span class="thumb-info-social-icons mb-4">
                      <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                      <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                      <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                    </span> -->
                  </span>
                </span>
              </div>
              <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                  <span class="thumb-info-wrapper">
                    <a href="about-me.html">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid2'] ?>" class="img-fluid" alt="" style="width: 260px; height: 290px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-inner"><?= $dt['nama_kabid2'] ?></span>
                        <span class="thumb-info-type">Kepala Bidang </span>
                      </span>
                    </a>
                  </span>
                  <span class="thumb-info-caption">
                    <span class="thumb-info-caption-text">Pendapatan dan Pelayanan Badan Pendapatan Daerah</span>
                    <!-- <span class="thumb-info-social-icons mb-4">
                      <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                    </span> -->
                  </span>
                </span>
              </div>
              <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                  <span class="thumb-info-wrapper">
                    <a href="about-me.html">
                      <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid3'] ?>" class="img-fluid" alt="" style="width: 260px; height: 290px;">
                      <span class="thumb-info-title">
                        <span class="thumb-info-inner"><?= $dt['nama_kabid3'] ?></span>
                        <span class="thumb-info-type">Kepala Bidang </span>
                      </span>
                    </a>
                  </span>
                  <span class="thumb-info-caption">
                    <span class="thumb-info-caption-text">Penagihan, Pengendalian dan Evaluasi Pelaporan Badan Pendapatan Daerah</span>
                    <!-- <span class="thumb-info-social-icons mb-4">
                      <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                    </span> -->
                  </span>
                </span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <?php foreach ($ShowDataStruktur as $dt) : ?>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="owl-carousel nav-inside show-nav-hover dots-inside mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'nav': true, 'dots': true, 'animateOut': 'fadeOut'}">
                  <div>
                    <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_struk'] ?>" data-thumb="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_struk'] ?>" alt="" />
                  </div>
                  <div>
                    <img src="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_matrix'] ?>" data-thumb="<?= base_url('loginwebsite') ?>/uploads/tentangkami/struktur/<?= $dt['foto_matrix'] ?>" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="home-intro home-intro-compact bg-primary border-radius-0 mt-0" id="home-intro">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <p>
                  <?= $dt['judul1'] ?> dan <?= $dt['judul2'] ?>
                  <span><?= $dt['narasi1'] ?> dan <?= $dt['narasi2'] ?> </span>
                </p>
              </div>
            </div>

          </div>
        </div>
    </div>

    <footer id="footer">
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
                  <p>© Copyright 2024. Bapenda kabupaten Purwakarta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
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

</body>

</html>