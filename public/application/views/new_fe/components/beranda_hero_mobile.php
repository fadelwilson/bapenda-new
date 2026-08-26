<?php
/**
 * BERANDA HERO MOBILE — BAPENDA Purwakarta
 * Implementasi dari Figma node 3:372 "M-Beranda"
 * Canvas: 412 × 915 px, di-scale ke viewport via JS
 */
$b = base_url('assets/beranda/');
?>

<div class="bap-m-wrap" id="bap-m-wrap">
<div class="bap-m-canvas" id="bap-m-canvas">

    <!-- ── Background foto kantor ──────────────────────────── -->
    <div class="bap-m-bg" aria-hidden="true">
        <img src="<?= $b ?>bg-kantor.png" alt="Gedung Kantor BAPENDA Purwakarta" />
    </div>

    <!-- ── Ornamen Lawang (kanan saja, sesuai Figma mobile) ── -->
    <div class="bap-m-ornamen" aria-hidden="true">
        <img src="<?= $b ?>ornamen-lawang.png" alt="" />
    </div>

    <!-- ── gplay SVG overlay ──────────────────────────────── -->
    <div class="bap-m-gplay" aria-hidden="true">
        <img src="<?= $b ?>ornamen-gplay.svg" alt="" />
    </div>

    <!-- ── Watermark "BERANDA" ────────────────────────────── -->
    <div class="bap-m-watermark" aria-hidden="true">BERANDA</div>

    <!-- ── Logo BAPENDA ──────────────────────────────────── -->
    <div class="bap-m-logo" aria-label="Logo BAPENDA Purwakarta">
        <div class="bap-m-logo__mark">
            <img src="<?= $b . rawurlencode('purwakarta111 1.png') ?>" alt="bapenda" />
        </div>
        <div class="bap-m-logo__text">
            <img src="<?= $b . rawurlencode('purwakarta112 1.png') ?>" alt="PURWAKARTA" />
        </div>
    </div>

    <!-- ── Sidebar menu dengan toggle ───────────────────────── -->
    <div class="bap-m-sidebar-wrap" id="bap-m-sidebar-wrap">

        <!-- Toggle button — kotak kuning dengan ikon chevron kanan -->
        <button class="bap-m-sidebar-toggle" id="bap-m-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
            <svg class="bap-m-sidebar-toggle__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <!-- Menu items — tampil saat toggle dibuka -->
        <nav class="bap-m-sidebar" id="bap-m-sidebar" aria-label="Menu utama">

            <!-- Baris aktif: link teks + close button chevron terpisah -->
            <div class="bap-m-sidebar__active-row">
                <a href="<?= base_url('beranda') ?>" class="bap-m-sidebar__item bap-m-sidebar__item--active" aria-current="page">
                    Beranda
                </a>
                <button class="bap-m-sidebar__close" id="bap-m-sidebar-close" aria-label="Tutup menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="26" height="26" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>

            <a href="<?= base_url('tentang-kami') ?>" class="bap-m-sidebar__item">Profil</a>
            <a href="<?= base_url('layanan') ?>" class="bap-m-sidebar__item">Layanan</a>
            <a href="<?= base_url('informasi') ?>" class="bap-m-sidebar__item">Informasi</a>
            <a href="<?= base_url('kritik-saran') ?>" class="bap-m-sidebar__item">Saran &amp; Kritik</a>
        </nav>

    </div>

    <!-- ── Headline ───────────────────────────────────────── -->
    <h1 class="bap-m-headline">
        Pengelolaan Pendapatan yang Transparan
    </h1>

    <!-- ── Deskripsi ──────────────────────────────────────── -->
    <p class="bap-m-desc">
        Dinas Pendapatan Daerah Kabupaten Purrwakarta hadir untuk mewujudkan tata
        kelola pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi
        demi pembangunan daerah yang berkeadilan.
    </p>

    <!-- ── Badges 2×2 ─────────────────────────────────────── -->
    <div class="bap-m-badges" role="list" aria-label="Nilai-nilai BAPENDA">

        <span class="bap-m-badge bap-m-badge--noborder" role="listitem">
            <img src="<?= $b ?>icon-check2.svg" alt="" class="bap-m-badge__icon" />
            Transparan
        </span>

        <span class="bap-m-badge" role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="bap-m-badge__icon" />
            Akuntabel
        </span>

        <span class="bap-m-badge" role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="bap-m-badge__icon" />
            Informatif
        </span>

        <span class="bap-m-badge" role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="bap-m-badge__icon" />
            Profesional
        </span>

    </div>

    <!-- ── Copyright ──────────────────────────────────────── -->
    <div class="bap-m-copyright">
        Copyright &copy; 2026 Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div><!-- /.bap-m-canvas -->
</div><!-- /.bap-m-wrap -->

<script>
(function () {
    var wrap   = document.getElementById('bap-m-wrap');
    var canvas = document.getElementById('bap-m-canvas');
    var W = 412, H = 915;

    function doScale() {
        var vw = wrap.clientWidth  || window.innerWidth;
        var vh = wrap.clientHeight || window.innerHeight;

        /* COVER — isi penuh viewport tanpa sisa putih */
        var s = Math.max(vw / W, vh / H);

        /* Tengahkan horizontal, anchor atas agar logo tidak terpotong */
        var offsetX = (vw - W * s) / 2;
        var offsetY = Math.min(0, (vh - H * s) / 2);

        canvas.style.transform       = 'translate(' + offsetX + 'px, ' + offsetY + 'px) scale(' + s + ')';
        canvas.style.transformOrigin = 'top left';
    }

    doScale();
    window.addEventListener('resize', doScale);
})();
</script>

<script>
/* ── Sidebar toggle — mobile ────────────────────────────── */
(function () {
    var wrap   = document.getElementById('bap-m-sidebar-wrap');
    var toggle = document.getElementById('bap-m-sidebar-toggle');
    var close  = document.getElementById('bap-m-sidebar-close');
    var menu   = document.getElementById('bap-m-sidebar');

    if (!toggle || !menu) return;

    function openMenu() {
        wrap.classList.add('bap-m-sidebar-wrap--open');
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Tutup menu');
    }

    function closeMenu() {
        wrap.classList.remove('bap-m-sidebar-wrap--open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu');
    }

    toggle.addEventListener('click', function () {
        wrap.classList.contains('bap-m-sidebar-wrap--open') ? closeMenu() : openMenu();
    });

    if (close) {
        close.addEventListener('click', closeMenu);
    }
})();
</script>
