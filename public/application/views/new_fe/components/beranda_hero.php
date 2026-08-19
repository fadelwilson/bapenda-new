<?php
/**
 * BERANDA HERO — BAPENDA Purwakarta
 * Implementasi pixel-perfect dari Figma node 1:683 "MENU BERANDA"
 * Canvas: 1283 × 733 px, di-scale ke viewport via JS
 *
 * Koordinat semua elemen diambil langsung dari metadata Figma.
 */
$b = base_url('assets/beranda/');
?>

<!-- ═══════════════════════════════════════════════════════════
     CANVAS WRAPPER — 1283×733px, di-scale ke viewport
═══════════════════════════════════════════════════════════ -->
<div class="bap-wrap" id="bap-wrap">
<div class="bap-canvas" id="bap-canvas">

    <!-- ────────────────────────────────────────────────────
         NODE 1:686 — Background foto kantor
         left=0, top=0, w=1280, h=731
         img: left=-24.71%, w=185.73%, h=182.6%
    ──────────────────────────────────────────────────────── -->
    <div class="bap-bg" aria-hidden="true">
        <img src="<?= $b ?>bg-kantor.png" alt="Gedung Kantor BAPENDA Purwakarta" />
    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:690 — Ornamen Lawang Sigotaka kiri
         left=0, top=97, w=216, h=615
         img: left=-175.93%, top=-4.39%, w=356.02%, h=124.98%
    ──────────────────────────────────────────────────────── -->
    <div class="bap-ornamen-l" aria-hidden="true">
        <img src="<?= $b ?>ornamen-lawang.png" alt="" />
    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:691 — Ornamen Lawang Sigotaka kanan
         left=1073, top=97, w=208, h=615
         img: left=-86.06%, top=-4.39%, w=369.71%, h=124.98%
    ──────────────────────────────────────────────────────── -->
    <div class="bap-ornamen-r" aria-hidden="true">
        <img src="<?= $b ?>ornamen-lawang.png" alt="" />
    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:692 — gplay SVG overlay
         left=0, top=0, w=1283, h=733
    ──────────────────────────────────────────────────────── -->
    <div class="bap-gplay" aria-hidden="true">
        <img src="<?= $b ?>ornamen-gplay.svg" alt="" />
    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:693 — Watermark "BERANDA"
         left=644, top=0 (text x=644, y=12)
         font: Krona One 96px, white, opacity=0.35
    ──────────────────────────────────────────────────────── -->
    <div class="bap-watermark" aria-hidden="true">BERANDA</div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:751/1:752 — Logo Group
         group: left=17.467, top=26, w=429, h=61.588
         1:753 bapenda mark: left=0,       top=0      w=248.406 h=61.588
         1:754 PURWAKARTA:   left=276.138, top=57.820 w=170.394 h=14.371
    ──────────────────────────────────────────────────────── -->
    <div class="bap-logo" aria-label="Logo BAPENDA Purwakarta">

        <!-- 1:753 — purwakarta111 1.png (tulisan "bapenda") -->
        <!-- container 248.406×61.588px, img: h=142.66%, top=-0.66% -->
        <div class="bap-logo__mark">
            <img src="<?= $b . rawurlencode('purwakarta111 1.png') ?>" alt="bapenda" />
        </div>

        <!-- 1:754 — purwakarta112 1.png (tulisan "PURWAKARTA") -->
        <!-- container 170.394×14.371px, img: h=419.49%, top=-328.57%, left=-0.01% -->
        <div class="bap-logo__text">
            <img src="<?= $b . rawurlencode('purwakarta112 1.png') ?>" alt="PURWAKARTA" />
        </div>

    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:727 — Headline
         left=172, top=197, w=940, h=230
         font: Genos 96px, #f4c24a, text-center
    ──────────────────────────────────────────────────────── -->
    <h1 class="bap-headline">
        Pengelolaan Pendapatan yang Transparan
    </h1>

    <!-- ────────────────────────────────────────────────────
         NODE 1:726 — Deskripsi
         left=172, top=417, w=801, h=79.023
         font: Plus Jakarta Sans 20px, white
    ──────────────────────────────────────────────────────── -->
    <p class="bap-desc">
        Dinas Pendapatan Daerah Kabupaten Purrwakarta hadir untuk mewujudkan tata
        kelola pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi
        demi pembangunan daerah yang berkeadilan.
    </p>

    <!-- ────────────────────────────────────────────────────
         NODE 1:695/1:696 — Badges row
         group left=381, top=550, w=521, h=31.609
         Tiap badge: w=116, h=31.609
         Transparan  left=381 → offset 0    (no border)
         Akuntabel   left=516 → offset 135  (border)
         Informatif  left=654 → offset 273  (border)
         Profesional left=786 → offset 405  (border)
         icon check_circle: size=18.476px
    ──────────────────────────────────────────────────────── -->
    <div class="bap-badges" role="list" aria-label="Nilai-nilai BAPENDA">

        <!-- 1:718 — Transparan (bg white, NO border) -->
        <span class="bap-badge bap-badge--noborder" role="listitem">
            <img src="<?= $b ?>icon-check2.svg" alt="" class="bap-badge__icon" />
            Transparan
        </span>

        <!-- 1:711 — Akuntabel (border #303752) -->
        <span class="bap-badge" role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="bap-badge__icon" />
            Akuntabel
        </span>

        <!-- 1:704 — Informatif (border #303752) -->
        <span class="bap-badge" role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="bap-badge__icon" />
            Informatif
        </span>

        <!-- 1:697 — Profesional (border #303752) -->
        <span class="bap-badge" role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="bap-badge__icon" />
            Profesional
        </span>

    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:729 — Sidebar menu dengan toggle
         Toggle: bg=#eaa90d, w=42, h=42, ikon chevron
         Menu muncul saat toggle diklik
    ──────────────────────────────────────────────────────── -->
    <div class="bap-sidebar-wrap" id="bap-sidebar-wrap">

        <!-- Toggle button — kotak kuning, tampil saat menu TERTUTUP -->
        <button class="bap-sidebar-toggle" id="bap-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
            <svg class="bap-sidebar-toggle__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <!-- Menu items — tersembunyi default, muncul saat aktif -->
        <nav class="bap-sidebar" id="bap-sidebar" aria-label="Menu utama">

            <!-- Baris aktif: link teks + close button chevron terpisah -->
            <div class="bap-sidebar__active-row">
                <a href="<?= base_url('beranda') ?>" class="bap-sidebar__item bap-sidebar__item--active" aria-current="page">
                    Beranda
                </a>
                <button class="bap-sidebar__close" id="bap-sidebar-close" aria-label="Tutup menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="22" height="22" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>

            <a href="<?= base_url('tentang-kami') ?>" class="bap-sidebar__item">Profil</a>
            <a href="<?= base_url('layanan') ?>" class="bap-sidebar__item">Layanan</a>
            <a href="<?= base_url('blog') ?>" class="bap-sidebar__item">Informasi</a>
            <a href="<?= base_url('kritik-saran') ?>" class="bap-sidebar__item">Saran &amp; Kritik</a>
        </nav>

    </div>

    <!-- ────────────────────────────────────────────────────
         NODE 1:728 — Copyright
         left=414, top=712, w=351, h=20
         font: Plus Jakarta Sans 12px, #303752
    ──────────────────────────────────────────────────────── -->
    <div class="bap-copyright">
        Copyright &copy; 2026 Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div><!-- /.bap-canvas -->
</div><!-- /.bap-wrap -->

<script>
(function () {
    var wrap   = document.getElementById('bap-wrap');
    var canvas = document.getElementById('bap-canvas');
    var W = 1283, H = 733;

    function doScale() {
        var vw = wrap.clientWidth  || window.innerWidth;
        var vh = wrap.clientHeight || window.innerHeight;

        /* COVER — scale terbesar agar canvas menutupi penuh viewport */
        var s = Math.max(vw / W, vh / H);

        /* Tengahkan horizontal, tapi anchor vertikal dari atas (offsetY min 0)
           agar logo & watermark di top tidak pernah terpotong */
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
/* ── Sidebar toggle — desktop ───────────────────────────── */
(function () {
    var wrap   = document.getElementById('bap-sidebar-wrap');
    var toggle = document.getElementById('bap-sidebar-toggle');
    var close  = document.getElementById('bap-sidebar-close');
    var menu   = document.getElementById('bap-sidebar');

    if (!toggle || !menu) return;

    function openMenu() {
        wrap.classList.add('bap-sidebar-wrap--open');
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Tutup menu');
    }

    function closeMenu() {
        wrap.classList.remove('bap-sidebar-wrap--open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu');
    }

    toggle.addEventListener('click', function () {
        wrap.classList.contains('bap-sidebar-wrap--open') ? closeMenu() : openMenu();
    });

    if (close) {
        close.addEventListener('click', closeMenu);
    }
})();
</script>
