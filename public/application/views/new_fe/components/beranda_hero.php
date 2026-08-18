<?php
/**
 * Beranda Hero Section – BAPENDA Purwakarta
 * Implementasi dari desain Figma: Untitled, node 1:683
 *
 * Variabel opsional dari controller:
 *   $hero_headline  – judul utama
 *   $hero_desc      – deskripsi
 *   $active_menu    – menu aktif di sidebar (default: 'beranda')
 */

$headline = isset($hero_headline) ? $hero_headline : 'Pengelolaan Pendapatan yang Transparan';
$desc     = isset($hero_desc)     ? $hero_desc
    : 'Dinas Pendapatan Daerah Kabupaten Purwakarta hadir untuk mewujudkan tata kelola '
    . 'pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi demi '
    . 'pembangunan daerah yang berkeadilan.';

/* Inline SVG check-circle hijau – tidak bergantung pada file eksternal */
$svg_check = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#22c55e" width="17" height="17" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5-4.5-4.5 1.41-1.41L10 13.67l7.09-7.09 1.41 1.41L10 16.5z"/></svg>';

/* Inline SVG check-circle outline (untuk badge non-aktif) */
$svg_check_outline = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#22c55e" width="17" height="17" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5-4.5-4.5 1.41-1.41L10 13.67l7.09-7.09 1.41 1.41L10 16.5z"/></svg>';

$base   = base_url('assets/beranda/');
$badges = [
    ['label' => 'Transparan',  'active' => false],
    ['label' => 'Akuntabel',   'active' => false],
    ['label' => 'Informatif',  'active' => false],
    ['label' => 'Profesional', 'active' => false],
];
?>

<section class="beranda-hero" aria-label="Hero Beranda BAPENDA Purwakarta">

    <!-- ── Layer Background ──────────────────────────────── -->
    <div class="beranda-hero__bg" aria-hidden="true">
        <img
            src="<?= $base ?>bg-kantor.png"
            alt="Kantor BAPENDA Purwakarta"
            loading="eager"
        />
    </div>

    <!-- ── Ornamen gplay (kanan) ─────────────────────────── -->
    <div class="beranda-hero__ornamen" aria-hidden="true">
        <img src="<?= $base ?>ornamen-gplay.svg" alt="" />
    </div>

    <!-- ── Watermark teks "BERANDA" ─────────────────────── -->
    <span class="beranda-hero__watermark" aria-hidden="true">BERANDA</span>

    <!-- ── Logo BAPENDA (kiri atas) ─────────────────────── -->
    <div class="beranda-hero__logo">
        <img
            class="beranda-hero__logo-img"
            src="<?= $base ?>purwakarta-logo.png"
            alt="Logo BAPENDA Purwakarta"
            onerror="this.src='<?= base_url('assets/images/logo-bapenda-pwk.webp') ?>'"
        />
        <img
            class="beranda-hero__logo-text"
            src="<?= $base ?>purwakarta-text.png"
            alt="Purwakarta"
            onerror="this.style.display='none'"
        />
    </div>

    <!-- ── Sidebar Menu Kiri ─────────────────────────────── -->
    <?php $this->load->view('new_fe/components/beranda_sidebar', [
        'active_menu' => isset($active_menu) ? $active_menu : 'beranda'
    ]); ?>

    <!-- ── Konten Utama ──────────────────────────────────── -->
    <div class="beranda-hero__content">

        <!-- Headline kuning besar (font Genos) -->
        <h1 class="beranda-hero__headline">
            <?= htmlspecialchars($headline) ?>
        </h1>

        <!-- Deskripsi -->
        <p class="beranda-hero__desc">
            <?= htmlspecialchars($desc) ?>
        </p>

        <!-- Badge / Chip row -->
        <div class="beranda-hero__badges" role="list" aria-label="Nilai-nilai BAPENDA">
            <?php foreach ($badges as $badge): ?>
                <span
                    class="beranda-badge<?= !empty($badge['active']) ? ' beranda-badge--active' : '' ?>"
                    role="listitem"
                >
                    <?= $svg_check ?>
                    <?= htmlspecialchars($badge['label']) ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ── Footer Copyright ──────────────────────────────── -->
    <footer class="beranda-hero__footer" role="contentinfo">
        Copyright &copy; <?= date('Y') ?> Badan Pendapatan Daerah Kab. Purwakarta
    </footer>

</section>
