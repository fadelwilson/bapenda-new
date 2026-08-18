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

<body data-plugin-page-transition>

  <div class="body coming-soon">
    <header id="header" data-plugin-options="{'stickyEnabled': false}">
      <div class="header-body border border-top-0 border-end-0 border-start-0">
        <div class="header-container container py-2">
          <div class="header-row">
            <div class="header-column">
              <div class="header-row">
                <?php foreach ($ShowData as $dt) : ?>
                  <p class="mb-0 text-dark"><strong>Get in touch!</strong> <a href="tel:012345679" class="text-color-dark text-color-hover-primary"><?= $dt['no_telp']; ?></a></span><span class="d-none d-sm-inline-block ps-1"> | <a href="#">bapenda.purwakartakab.go.id@hosting.purwakartakab.go.id</a></span></p>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="header-column justify-content-end">
              <div class="header-row">
                <ul class="header-social-icons social-icons me-2">
                  <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                  <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <div class="header-nav-features">
                  <div class="header-nav-features-search-reveal-container">
                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                      <a href="#" class="header-nav-features-search-show-icon d-inline-flex text-decoration-none"><i class="fas fa-search header-nav-top-icon"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav-features header-nav-features-no-border p-static">
        <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
          <div class="container">
            <div class="row h-100 d-flex">
              <div class="col h-100 d-flex">
                <form role="search" class="d-flex h-100 w-100" action="page-search-results.html" method="get">
                  <div class="big-search-header input-group">
                    <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Type and hit enter...">
                    <a href="#" class="header-nav-features-search-hide-icon"><i class="fas fa-times header-nav-top-icon"></i></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div role="main" class="main" style="min-height: calc(100vh - 393px);">
      <div class="container">
        <div class="row mt-5">
          <div class="col text-center">
            <div class="logo">
              <?php foreach ($ShowData as $dt) : ?>
                <a href="<?= $dt['url_bapenda'] ?>">
                  <img alt="Porto" width="200" height="40" src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>">
                <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <hr class="solid my-5">
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <div class="overflow-hidden mb-2">
              <h2 class="font-weight-normal text-7 mb-0 appear-animation" data-appear-animation="maskUp"><strong class="font-weight-extra-bold">Maintenance Mode</strong></h2>
            </div>
            <div class="overflow-hidden mb-1">
              <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">The Menu is undergoing some scheduled maintenance.<br>Please come back later.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <hr class="solid my-5">
          </div>
        </div>
      </div>
    </div>

    <footer id="footer">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
            <?php foreach ($ShowData as $dt) : ?>
              <a href="<?= $dt['url_bapenda'] ?>">
                <img alt="Porto" width="120" height="40" src="<?= base_url('loginwebsite') ?>/uploads/header/<?= $dt['logo_bapenda'] ?>">
              <?php endforeach; ?>
              </a>
          </div>
          <div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
            <div class="row">
              <div class="col-md-12 mb-3 mb-md-0">
                <div class="ms-3 text-center text-md-end">
                  <h5 class="text-3 mb-0 text-color-light">Nomor Kami</h5>
                  <p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="ps-1"><a href="tel:012345679" class="text-color-hover-light"><?= $dt['no_telp']; ?></a></span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
          <div class="row py-4">
            <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-lg-0">
              <p>© Copyright 2024. Bapenda Kabuapten Purwakarta.</p>
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end mb-4 mb-lg-0">

              <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light ms-3">
                <li class="social-icons-facebook"><a href="<?= $dt['url_fb'] ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-x"><a href="<?= $dt['url_twitter'] ?>" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="<?= $dt['url_ig'] ?>" target="_blank" title="Linkedin"><i class="fab fa-brands fa-instagram"></i></a></li>
                <li class="social-icons-youtube"><a href="<?= $dt['url_yt'] ?>" target="_blank" title="Linkedin"><i class="fab fa-brands fa-youtube"></i></a></li>
              </ul>
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

</body>

</html>