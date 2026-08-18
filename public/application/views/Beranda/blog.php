<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bapenda - Berita</title>

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
                          <a class="dropdown-item dropdown-toggle active" href="<?= site_url('BerandaController/blog') ?>">
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

      <section class="page-header page-header-modern bg-color-dark page-header-md mb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
              <h1 class="text-light font-weight-bold text-8">Berita Terkini</h1>
              <span class="sub-title text-light">Bapenda Purwakarta!</span>
            </div>
            <div class="col-md-12 align-self-center order-1">
              <ul class="breadcrumb d-block text-center breadcrumb-light">
                <li><a href="#">Beranda</a></li>
                <li class="active">Berita</li>
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

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <div class="p-absolute right-10 top-10">
                              <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                              <span class="badge badge-comments-count bg-primary text-color-light rounded-pill p-0 p-relative z-index-1">1</span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class=" card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita2 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita3 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita4 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita5 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita6 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita7 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita8 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita9 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <?php foreach ($ShowDataBerita10 as $dt) : ?>
                      <article class="post border-0 mb-4 pb-0">
                        <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                          <div class="p-relative rounded-3 overflow-hidden">
                            <div class="post-date p-absolute top-20 left-20">
                              <?php
                              $tanggal = date('d', strtotime($dt['tgl_upload'])); // Mengambil hari (tanggal)
                              $bulan = date('M', strtotime($dt['tgl_upload']));   // Mengambil bulan 3 huruf
                              ?>
                              <span class="day py-1 text-4 font-weight-bold"><?= $tanggal ?></span>
                              <span class="month"><?= $bulan ?></span>
                            </div>
                            <a href="<?= $dt['url_berita'] ?>" class="text-decoration-none">
                              <img class="card-img-top" src="<?= base_url('loginwebsite') ?>/uploads/berita/<?= $dt['foto_berita'] ?>" alt="Card Image" style="width: 380px; height: 200px;">
                            </a>
                            <div class="card-body bg-light p-4">
                              <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">News</span><span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">Design</span>
                              <h4 class="my-2"><a href="<?= $dt['url_berita'] ?>" class="text-decoration-none"><?php echo (mb_strlen($dt['judul_berita']) > 25) ? mb_substr($dt['judul_berita'], 0, 25) . '...' : $dt['judul_berita']; ?></a></h4>
                              <p class="card-text mb-1"><?php echo (mb_strlen($dt['narasi_berita']) > 150) ? mb_substr($dt['narasi_berita'], 0, 150) . '...' : $dt['narasi_berita']; ?>....</p>
                              <a href="<?= $dt['url_berita'] ?>" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                            </div>
                          </div>
                        </div>
                      </article>
                    <?php endforeach; ?>
                  </div>
                </div>

              </div>
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
                  <p>© Copyright 2024. All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </footer>

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