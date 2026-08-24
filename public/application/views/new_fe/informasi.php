<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BAPENDA Purwakarta – Informasi</title>
    <meta name="description" content="Informasi pajak daerah, berita terkini, dan layanan PPID Badan Pendapatan Daerah Kabupaten Purwakarta." />
    <link rel="shortcut icon" href="<?= base_url('assets/new/img/favicon.ico') ?>" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Genos:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="<?= base_url('assets/css/output.css') ?>" rel="stylesheet" />

    <style>
/* ================================================================
   INFORMASI — BAPENDA Purwakarta
   Halaman scrollable: 3 seksi (Informasi Pajak · Berita · PPID)
   ================================================================ */

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; }

body {
    font-family: 'Genos', sans-serif;
    background: #f5f5f3;
    color: #1a1a2e;
    overflow-x: hidden;
}

/* ── Sidebar toggle shared ────────────────────────────────── */
.inf-sidebar-wrap {
    position: fixed;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    z-index: 100;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.inf-sidebar-toggle {
    width: 3.276vw; height: 3.276vw;
    min-width: 42px; min-height: 42px;
    background: #eaa90d;
    border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    padding: 0;
    z-index: 2;
}
.inf-sidebar-toggle svg { width: 1.716vw; height: 1.716vw; min-width: 22px; min-height: 22px; display: block; }
.inf-sidebar-wrap--open .inf-sidebar-toggle { display: none; }
.inf-sidebar {
    display: flex; flex-direction: column;
    overflow: hidden; max-height: 0; opacity: 0;
    pointer-events: none;
    transition: max-height 0.3s ease, opacity 0.2s ease;
}
.inf-sidebar-wrap--open .inf-sidebar { max-height: 400px; opacity: 1; pointer-events: auto; }
.inf-sidebar a {
    display: flex; align-items: center;
    width: 12.627vw; height: 3.12vw;
    min-width: 162px; min-height: 40px;
    padding: 0 1.716vw;
    background: #fff; color: #303752;
    font-family: 'Genos', sans-serif; font-size: 1.872vw; font-weight: 400;
    text-decoration: none; white-space: nowrap;
}
.inf-sidebar a:hover { background: #f5f6fa; }
.inf-sidebar a.active {
    background: #eaa90d;
    border-bottom: 2px solid #303752;
}
.inf-sidebar__active-row { display: flex; flex-direction: row; align-items: stretch; }
.inf-sidebar__close {
    width: 3.159vw; height: 3.159vw;
    min-width: 40.5px; min-height: 40.5px;
    background: #eaa90d; border: none;
    border-bottom: 2px solid #303752;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    padding: 0;
}
.inf-sidebar__close:hover { background: #d99c0c; }

/* ================================================================
   SEKSI 1 — INFORMASI (Definisi Pajak Daerah)
   ================================================================ */
.inf-section {
    padding: 52px;
    width: 100%;
    background: #ffff;
    overflow: hidden;
}

/* Judul seksi */
.inf-title {
    font-family: 'Krona One', sans-serif;
    font-size: clamp(36px, 5vw, 68px);
    font-weight: 400;
    color: #1a1a2e2e;
    letter-spacing: 2px;
    margin-bottom: 6px;
    line-height: 1.1;
    margin-left:-15px
}

.inf-subtitle {
    font-family: 'Genos', sans-serif;
    font-size: clamp(18px, 2.2vw, 28px);
    font-weight: 600;
    color: #303752;
    letter-spacing: 1px;
    margin-bottom: 28px;
    text-transform: uppercase;
}

/* Ornamen Group kiri */
.inf-ornamen-group-l {
    position: absolute;
    left: -30px; top: 60px;
    width: 80px;
    pointer-events: none;
    opacity: 0.18;
}
.inf-ornamen-group-l img { width: 100%; }

/* Body teks */
.inf-body-text {
    font-family: 'Genos', sans-serif;
    font-size: clamp(15px, 1.6vw, 19px);
    font-weight: 400;
    color: #303752;
    line-height: 1.75;
    margin-bottom: 32px;
    text-align: justify;
}
.inf-body-text strong {
    font-weight: 600;
    color: #1a1a2e;
}

/* ── Tabs navigasi (gaya about.php) ─────────────────────── */
.inf-tabs {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 0;
}

.inf-tabs-row {
    display: grid;
    gap: 8px;
}
.inf-tabs-row--4 {
    grid-template-columns: repeat(4, 1fr);
}
.inf-tabs-row--3 {
    grid-template-columns: repeat(3, 1fr);
}

.inf-tab-btn {
    position: relative;
    background: #303752;
    height: 3.113vw;
    min-height: 44px;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 0;
    border: none;
    border-bottom: 3px solid transparent;
    cursor: pointer;
    overflow: hidden;
    text-align: left;
    transition: background 0.25s ease, border-color 0.25s ease;
}
.inf-tab-btn:hover {
    background: #3d4668;
}
.inf-tab-btn.active {
    background: #303752;
    border-bottom: 3px solid #eaa90d;
}

/* overlay tidak dipakai */
.inf-tab-btn .tab-overlay {
    display: none;
}

.inf-tab-btn .tab-label {
    position: relative;
    z-index: 1;
    font-family: 'Genos', sans-serif;
    font-size: clamp(13px, 1.946vw, 28px);
    font-weight: 400;
    color: rgba(255, 255, 255, 0.70);
    line-height: 1;
    padding: 0 8px 6px;
    text-transform: uppercase;
    transition: color 0.25s ease;
    white-space: nowrap;
}
.inf-tab-btn:hover .tab-label {
    color: #ffffff;
}
.inf-tab-btn.active .tab-label {
    color: #eaa90d;
    font-weight: 600;
}

/* Konten tab */
.inf-tab-content-box {
    background: #1a1a2e2e;
    width: 100%;
    padding: 2.724vw;
    color: #303752;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: clamp(12px, 0.778vw, 15px);
    line-height: 1.75;
    min-height: 150px;
    text-align: justify;
}
.inf-tab-content-box h4 {
    font-family: 'Genos', sans-serif;
    font-size: clamp(14px, 1.2vw, 18px);
    font-weight: 600;
    color: #f4c24a;
    margin: 14px 0 6px;
}
.inf-tab-content-box p { margin-bottom: 10px; }
.inf-tab-content-box ul {
    list-style: none;
    padding: 0; margin: 0 0 10px;
}
.inf-tab-content-box ul li {
    padding-left: 18px;
    position: relative;
    margin-bottom: 5px;
}
.inf-tab-content-box ul li::before {
    content: '›';
    position: absolute;
    left: 0;
    color: #eaa90d;
    font-size: 18px;
    line-height: 1.4;
}

/* Responsive tab grid */
@media (max-width: 768px) {
    .inf-tabs-row--4,
    .inf-tabs-row--3 {
        grid-template-columns: repeat(2, 1fr);
    }
    .inf-tab-btn {
        height: 44px;
    }
    .inf-tab-btn .tab-label {
        font-size: 13px;
    }
    .inf-tab-content-box {
        font-size: 13px;
        padding: 18px;
    }
}
@media (max-width: 480px) {
    .inf-tabs-row--4,
    .inf-tabs-row--3 {
        grid-template-columns: 1fr 1fr;
    }
}

/* ================================================================
   SEKSI 2 — BERITA & ARTIKEL
   ================================================================ */
.inf-berita-section {
    position: relative;
    background: #ffff;
    overflow: hidden;
    padding: 0;
}

/* Watermark */
.inf-berita-watermark {
    position: absolute;
    left: 0; right: 0; top: -8px;
    font-family: 'Krona One', sans-serif;
    font-size: clamp(50px, 9vw, 120px);
    color: #ffffff;
    opacity: 0.05;
    text-align: center;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    letter-spacing: 3px;
    line-height: 1;
}

/* Ornamen sudut kanan */
.inf-berita-ornamen-r {
    position: absolute;
    right: 0; bottom: 0;
    width: 280px; height: 280px;
    pointer-events: none;
    opacity: 0.08;
}
.inf-berita-ornamen-r img { width: 100%; height: 100%; object-fit: contain; object-position: bottom right; }

.inf-berita-container {
    position: relative;
    margin: 0 auto;
    padding: 70px 52px 60px;
    z-index: 2;
}

.inf-berita-title {
    font-family: 'Krona One', sans-serif;
    font-size: clamp(28px, 12vw, 96px);
    font-weight: 400;
    color: #1a1a2e2e;
    letter-spacing: 2px;
    margin-bottom: 40px;
}
.inf-berita-title span {
    color: #1a1a2e2e
}

/* Grid 3 kartu */
.inf-berita-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
@media (max-width: 900px) {
    .inf-berita-grid { grid-template-columns: 1fr; }
}

/* Card */
.inf-card {
    background: #f5f5f3;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    cursor: pointer;
}
.inf-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.35);
}
.inf-card__img {
    width: 100%;
    aspect-ratio: 16/9;
    overflow: hidden;
    position: relative;
    background: #303752;
}
.inf-card__img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
}
.inf-card:hover .inf-card__img img { transform: scale(1.06); }
.inf-card__badge {
    position: absolute;
    bottom: 10px; left: 10px;
    background: #eaa90d;
    color: #1a1a2e;
    font-family: 'Genos', sans-serif;
    font-size: 13px; font-weight: 600;
    padding: 3px 10px;
    letter-spacing: 0.5px;
}
.inf-card__body {
    padding: 20px 20px 18px;
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.inf-card__title {
    font-family: 'Genos', sans-serif;
    font-size: clamp(16px, 1.6vw, 20px);
    font-weight: 600;
    color: #1a1a2e;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.inf-card__desc {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: #555;
    line-height: 1.6;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}
.inf-card__link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: 'Genos', sans-serif;
    font-size: 15px; font-weight: 500;
    color: #eaa90d;
    text-decoration: none;
    margin-top: 4px;
    transition: gap 0.15s;
}
.inf-card__link:hover { gap: 10px; }
.inf-card__link svg { width: 16px; height: 16px; }

/* ================================================================
   SEKSI 3 — PPID
   ================================================================ */
.inf-ppid-section {
    position: relative;
    background: #ffff;
    overflow: hidden;
}

.inf-ppid-watermark {
    position: absolute;
    left: 0; right: 0; top: -8px;
    font-family: 'Krona One', sans-serif;
    font-size: clamp(60px, 10vw, 130px);
    color: #1a1a2e;
    opacity: 0.05;
    text-align: center;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    letter-spacing: 4px;
    line-height: 1;
}

.inf-ppid-container {
    position: relative;
    margin: 0 auto;
    padding: 70px 52px 80px;
    z-index: 2;
}

.inf-ppid-title {
    font-family: 'Krona One', sans-serif;
    font-size: clamp(32px, 4.5vw, 60px);
    font-weight: 400;
    color: #1a1a2e2e;
    letter-spacing: 2px;
    margin-left: -15px
}

/* Accordion */
.inf-accordion {
    display: flex;
    flex-direction: column;
    gap: 0;
    border-top: 1px solid #c8cbd8;
}

.inf-acc-item {
    border-bottom: 1px solid #c8cbd8;
    overflow: hidden;
}

.inf-acc-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 20px;
    background: #ffffff;
    border: none;
    cursor: pointer;
    text-align: left;
    gap: 12px;
    transition: background 0.15s;
}
.inf-acc-header:hover { background: #f0f0ec; }
.inf-acc-item.open .inf-acc-header { background: #eaa90d; }

.inf-acc-icon {
    width: 32px; height: 32px;
    flex-shrink: 0;
}
.inf-acc-icon img { width: 100%; height: 100%; object-fit: contain; }

.inf-acc-label {
    font-family: 'Genos', sans-serif;
    font-size: clamp(15px, 1.6vw, 19px);
    font-weight: 500;
    color: #1a1a2e;
    flex: 1;
    line-height: 1.3;
}
.inf-acc-item.open .inf-acc-label { font-weight: 600; }

.inf-acc-chevron {
    width: 22px; height: 22px;
    flex-shrink: 0;
    transition: transform 0.25s ease;
    color: #303752;
}
.inf-acc-item.open .inf-acc-chevron { transform: rotate(180deg); color: #1a1a2e; }

/* Highlighted item */
.inf-acc-item--highlight .inf-acc-header {
    background: #303752;
}
.inf-acc-item--highlight .inf-acc-label { color: #ffffff; }
.inf-acc-item--highlight .inf-acc-chevron { color: #ffffff; }
.inf-acc-item--highlight.open .inf-acc-header { background: #eaa90d; }
.inf-acc-item--highlight.open .inf-acc-label { color: #1a1a2e; }

/* Panel konten */
.inf-acc-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
    background: #fafaf8;
}
.inf-acc-body-inner {
    padding: 20px 24px 24px 68px;
    font-family: 'Genos', sans-serif;
    font-size: clamp(14px, 1.4vw, 17px);
    color: #303752;
    line-height: 1.75;
}
.inf-acc-body-inner ul {
    list-style: none;
    padding: 0; margin: 0;
}
.inf-acc-body-inner ul li {
    padding-left: 20px;
    position: relative;
    margin-bottom: 6px;
}
.inf-acc-body-inner ul li::before {
    content: '›';
    position: absolute;
    left: 0;
    color: #eaa90d;
    font-size: 18px;
    line-height: 1.5;
}

/* ── Copyright footer ────────────────────────────────────── */
.inf-footer {
    background: #ffff;
    text-align: center;
    padding: 18px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    color: #8889a8;
}
    </style>
</head>
<body>

<?php
$bi = base_url('assets/Informasi/');
$berita_folder = base_url('loginwebsite/uploads/berita/');
?>

<!-- ── Sidebar nav ──────────────────────────────────────────── -->
<div class="inf-sidebar-wrap" id="inf-sidebar-wrap">
    <button class="inf-sidebar-toggle" id="inf-sidebar-toggle" aria-label="Buka menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
    <nav class="inf-sidebar" id="inf-sidebar">
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('tentang-kami') ?>">Profil</a>
        <a href="<?= base_url('layanan') ?>">Layanan</a>
        <div class="inf-sidebar__active-row">
            <a href="<?= base_url('informasi') ?>" class="active" aria-current="page">Informasi</a>
            <button class="inf-sidebar__close" id="inf-sidebar-close" aria-label="Tutup">
                <svg viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="18" height="18">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>
        <a href="<?= base_url('kritik-saran') ?>">Saran &amp; Kritik</a>
    </nav>
</div>

<!-- ================================================================
     SEKSI 1 — INFORMASI (Definisi Pajak Daerah)
     ================================================================ -->
<section class="inf-section" id="informasi">

    <!-- Watermark besar -->
    <!-- <div class="inf-watermark" aria-hidden="true">INFORMASI</div> -->

    <!-- Ornamen batik pojok kanan atas -->
    <!-- <div class="inf-ornamen-batik" aria-hidden="true">
        <img src="<?= $bi ?>batik sunda1 copy 2.png" alt="" />
    </div> -->

    <div class="inf-container">

        <div class="inf-title">INFORMASI</div>
        <div class="inf-subtitle">DEFINISI PAJAK DAERAH</div>

        <div class="inf-body-text">
            Pajak daerah adalah kontribusi wajib kepada Daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran rakyat. Objek Pajak Daerah adalah penghasilan, kekayaan, atau perbuatan tertentu yang menjadi dasar pengenaan pajak.
        </div>
        <div class="inf-body-text">
            Adapun Pajak Daerah diatur dalam <strong>Undang-Undang Nomor 1 Tahun 2022</strong> tentang Hubungan Keuangan antara Pemerintah Pusat dan Pemerintah Daerah (HKPD). Dalam UU HKPD, Pajak Daerah dibagi menjadi Pajak Provinsi dan Pajak Kabupaten/Kota. Dalam pelaksanaannya di Kabupaten Purwakarta, BAPENDA bertanggung jawab atas pemungutan dan pengelolaan seluruh jenis pajak kabupaten/kota sebagaimana diatur dalam regulasi tersebut. Kualitas BAPENDA — sebagai OPD penghasil terbesar Pendapatan Asli Daerah (PAD) — berdampak langsung terhadap kemampuan pembangunan daerah.
        </div>
        <div class="inf-body-text">
            Kepala Bapenda menyatakan bahwa UU HKPD merupakan landasan hukum paling strategis yang pernah ada bagi pengelolaan pajak daerah. UU ini tidak hanya mengubah terminologi dan jenis pajak, tetapi juga memperkuat otonomi fiskal daerah dan mengintegrasikan sistem pemungutan pajak secara digital. Dalam satu NPWPD sekarang terdiri atas semua jenis pajak, sehingga pelayanan kepada wajib pajak menjadi lebih efisien dan terintegrasi.
        </div>

        <!-- ── Tab navigasi gaya about.php ── -->
        <div class="inf-tabs" role="tablist">
            <!-- Baris 1: 4 tab -->
            <div class="inf-tabs-row inf-tabs-row--4">
                <button class="inf-tab-btn active" role="tab" data-tab="objek-pajak">
                    <span class="tab-label">Objek Pajak</span>
                </button>
                <button class="inf-tab-btn" role="tab" data-tab="subjek-wajib">
                    <span class="tab-label">Subjek &amp; Wajib Pajak</span>
                </button>
                <button class="inf-tab-btn" role="tab" data-tab="dasar-pengenaan">
                    <span class="tab-label">Dasar Pengenaan</span>
                </button>
                <button class="inf-tab-btn" role="tab" data-tab="tarif">
                    <span class="tab-label">Tarif Pajak</span>
                </button>
            </div>
            <!-- Baris 2: 3 tab, tidak ada ruang kosong -->
            <div class="inf-tabs-row inf-tabs-row--3">
                <button class="inf-tab-btn" role="tab" data-tab="masa-pajak">
                    <span class="tab-label">Masa Pajak</span>
                </button>
                <button class="inf-tab-btn" role="tab" data-tab="jenis-pajak">
                    <span class="tab-label">Denda Pajak</span>
                </button>
                <button class="inf-tab-btn" role="tab" data-tab="mekanisme">
                    <span class="tab-label">Mekanisme Pembayaran Pajak</span>
                </button>
            </div>
        </div>

        <!-- ── Konten tab (satu kotak, konten berganti) ── -->
        <div class="inf-tab-content-box" id="inf-tab-content">
            <!-- Default: Objek Pajak -->
            Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan), BPHTB (perolehan hak atas tanah dan bangunan), PBJT (makanan/minuman, tenaga listrik, perhotelan, parkir, hiburan), Pajak Reklame, Pajak Air Tanah, Pajak MBLB, dan Pajak Sarang Burung Walet.
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tabContents = {
                'objek-pajak': `Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan), BPHTB (perolehan hak atas tanah dan bangunan baik melalui jual beli, tukar menukar, hibah, maupun pemberian hak baru), PBJT (makanan/minuman, tenaga listrik, jasa perhotelan, jasa parkir, dan jasa kesenian & hiburan), Pajak Reklame (semua jenis penyelenggaraan reklame), Pajak Air Tanah (pengambilan dan/atau pemanfaatan air tanah), Pajak MBLB (kegiatan pengambilan mineral bukan logam dan batuan), serta Pajak Sarang Burung Walet.`,

                'subjek-wajib': `Subjek pajak adalah orang pribadi atau badan yang dapat dikenakan pajak. Wajib pajak adalah orang pribadi atau badan yang mempunyai hak dan kewajiban perpajakan sesuai ketentuan perundang-undangan daerah.<br><br>
<strong>Subjek PBB-P2:</strong> Orang pribadi atau badan yang secara nyata memiliki hak atau memperoleh manfaat atas bumi dan/atau bangunan.<br>
<strong>Subjek BPHTB:</strong> Orang pribadi atau badan yang memperoleh hak atas tanah dan/atau bangunan.<br>
<strong>Subjek PBJT:</strong> Konsumen barang dan jasa tertentu; pengusaha bertindak sebagai pemungut pajak.<br>
<strong>Subjek Pajak Reklame:</strong> Orang pribadi atau badan yang menyelenggarakan reklame.`,

                'dasar-pengenaan': `Dasar pengenaan pajak merupakan nilai/jumlah yang menjadi acuan menghitung besaran pajak terutang.<br><br>
<strong>PBB-P2:</strong> Nilai Jual Objek Pajak (NJOP) bumi dan/atau bangunan, ditetapkan berdasarkan harga rata-rata transaksi jual beli di pasaran.<br>
<strong>BPHTB:</strong> Nilai Perolehan Objek Pajak (NPOP), yaitu harga transaksi atau nilai pasar. Jika NPOP lebih rendah dari NJOP, maka NJOP yang digunakan.<br>
<strong>PBJT:</strong> Jumlah yang dibayarkan konsumen untuk pembelian makanan/minuman, tagihan listrik, pembayaran hotel, biaya parkir, dan tiket hiburan.<br>
<strong>Pajak Reklame:</strong> Nilai sewa reklame dihitung berdasarkan ukuran, lokasi, jenis, dan jangka waktu penyelenggaraan.`,

                'tarif': `Tarif pajak daerah ditetapkan dengan Peraturan Daerah (Perda), dengan batas maksimum berdasarkan UU HKPD:<br><br>
• <strong>PBB-P2:</strong> Maks 0,5% (progresif s.d. 0,3% untuk NJOP &gt; Rp 2 miliar)<br>
• <strong>BPHTB:</strong> Maks 5% dari NPOP dikurangi NPOPTKP<br>
• <strong>PBJT Makanan/Minuman:</strong> Maks 10%<br>
• <strong>PBJT Tenaga Listrik:</strong> Maks 1,5% (industri), 3% (non-industri)<br>
• <strong>PBJT Perhotelan:</strong> Maks 10%<br>
• <strong>PBJT Parkir:</strong> Maks 10%<br>
• <strong>PBJT Hiburan Khusus:</strong> 40% – 75%<br>
• <strong>Pajak Reklame:</strong> Maks 25%<br>
• <strong>Pajak Air Tanah:</strong> Maks 20%<br>
• <strong>Pajak MBLB:</strong> Maks 20%<br>
• <strong>Pajak Sarang Burung Walet:</strong> Maks 10%`,

                'masa-pajak': `Masa pajak adalah jangka waktu dasar bagi wajib pajak untuk menghitung, menyetor, dan melaporkan pajak terutang.<br><br>
<strong>PBB-P2:</strong> Tahun pajak satu tahun kalender (1 Januari – 31 Desember). Saat terutang adalah menurut keadaan objek pada tanggal 1 Januari.<br>
<strong>BPHTB:</strong> Saat terutang adalah sejak terjadinya perolehan hak atas tanah dan/atau bangunan.<br>
<strong>PBJT:</strong> Masa pajak adalah 1 (satu) bulan kalender.<br>
<strong>Pajak Reklame:</strong> Masa pajak disesuaikan dengan jangka waktu penyelenggaraan reklame.<br>
<strong>Pajak Air Tanah, MBLB, Sarang Burung Walet:</strong> Masa pajak adalah 1 (satu) bulan kalender.`,

                'jenis-pajak': `Denda pajak dikenakan apabila terjadi keterlambatan pembayaran atau pelanggaran kewajiban perpajakan. Ketentuan umum:<br><br>
• Keterlambatan pembayaran pajak dikenakan sanksi administrasi berupa <strong>bunga 2% per bulan</strong> dari jumlah pajak terutang.<br>
• Keterlambatan pelaporan SPTPD dikenakan <strong>denda administrasi</strong> sesuai jenis pajak.<br>
• Wajib pajak yang tidak memenuhi kewajiban pendaftaran dikenakan sanksi sesuai Perda.<br>
• SKPD Kurang Bayar dan SKPD Kurang Bayar Tambahan diterbitkan apabila ditemukan pajak yang belum/kurang dibayar.<br>
• Pengenaan bunga paling lama <strong>24 bulan</strong> dihitung sejak saat terutangnya pajak.`,

                'mekanisme': `Mekanisme pembayaran pajak daerah di Kabupaten Purwakarta terintegrasi secara digital:<br><br>
<strong>1. Pendaftaran &amp; Pengajuan:</strong> Wajib pajak mendaftarkan diri ke BAPENDA untuk mendapatkan NPWPD. Pengisian SPTPD dapat dilakukan secara online maupun offline.<br><br>
<strong>2. Penetapan &amp; Pemberitahuan:</strong> BAPENDA menerbitkan SKPD atau SPPT (untuk PBB-P2). Wajib pajak menerima tagihan dan batas waktu pembayaran.<br><br>
<strong>3. Pembayaran:</strong> Melalui bank yang ditunjuk, payment point, atau saluran digital (mobile/internet banking). Bukti SSPD diterima sebagai tanda lunas.<br><br>
<strong>4. Pelaporan:</strong> Wajib pajak melaporkan SPTPD sesuai masa pajak. Keterlambatan dikenakan sanksi bunga 2% per bulan.`
            };

            var tabBtns = document.querySelectorAll('.inf-tabs .inf-tab-btn');
            var contentBox = document.getElementById('inf-tab-content');

            if (!contentBox || !tabBtns.length) return;

            tabBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    // Reset semua tab
                    tabBtns.forEach(function (b) {
                        b.classList.remove('active');
                    });
                    // Aktifkan tab yang diklik
                    this.classList.add('active');
                    // Ganti konten
                    var key = this.getAttribute('data-tab');
                    if (tabContents[key]) {
                        contentBox.innerHTML = tabContents[key];
                    }
                });
            });
        });
        </script>

    </div><!-- /.inf-container -->
</section>

<!-- Divider batik -->
<!-- <div class="inf-divider">
    <div class="inf-divider-batik" aria-hidden="true">
        <img src="<?= $bi ?>batik sunda1 copy 2.png" alt="" />
    </div>
</div> -->

<!-- ================================================================
     SEKSI 2 — BERITA & ARTIKEL
     ================================================================ -->
<section class="inf-berita-section" id="berita">

    <!-- <div class="inf-berita-watermark" aria-hidden="true">BERITA &amp; ARTIKEL</div> -->

    <!-- Ornamen sudut kanan bawah -->
    <!-- <div class="inf-berita-ornamen-r" aria-hidden="true">
        <img src="<?= $bi ?>Group 263.png" alt="" />
    </div> -->

    <div class="inf-berita-container">
        <div class="inf-berita-title">BERITA &amp; <span>ARTIKEL</span></div>

        <div class="inf-berita-grid">
            <?php
            $berita_list = !empty($ShowDataBerita) ? array_slice($ShowDataBerita, 0, 3) : [];
            $berita_keys = [
                ['foto' => 'foto_berita', 'judul' => 'judul_berita', 'narasi' => 'narasi_berita', 'tgl' => 'tgl_upload', 'url' => 'url_berita'],
                // fallback untuk struktur lama
                ['foto' => 'foto', 'judul' => 'judul', 'narasi' => 'isi', 'tgl' => 'tanggal', 'url' => null],
            ];

            // Deteksi struktur data
            $k = !empty($berita_list) && isset($berita_list[0]['foto_berita']) ? $berita_keys[0] : $berita_keys[1];

            if (empty($berita_list)):
            ?>
                <!-- Placeholder jika belum ada data -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="inf-card">
                    <div class="inf-card__img" style="background:#303752;">
                        <img src="<?= $bi ?>IMG-20260729-WA0012-4279738261 1 (<?= $i ?>).png" alt="Berita <?= $i ?>" style="width:100%;height:100%;object-fit:cover;opacity:0.7;" />
                        <span class="inf-card__badge">Berita</span>
                    </div>
                    <div class="inf-card__body">
                        <div class="inf-card__title">Berita BAPENDA Purwakarta #<?= $i ?></div>
                        <div class="inf-card__desc">Informasi terkini dari Badan Pendapatan Daerah Kabupaten Purwakarta mengenai kegiatan, pelayanan, dan inovasi perpajakan daerah.</div>
                        <a href="<?= base_url('blog') ?>" class="inf-card__link">
                            Baca Selengkapnya
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>
                <?php endfor; ?>
            <?php else: ?>
                <?php foreach ($berita_list as $idx => $b): ?>
                <div class="inf-card">
                    <div class="inf-card__img">
                        <?php if (!empty($b[$k['foto']])): ?>
                        <img src="<?= $berita_folder . $b[$k['foto']] ?>" alt="<?= htmlspecialchars($b[$k['judul']] ?? '') ?>" />
                        <?php else: ?>
                        <img src="<?= $bi ?>IMG-20260729-WA0012-4279738261 1 (<?= ($idx % 3) + 1 ?>).png" alt="" style="opacity:0.7;" />
                        <?php endif; ?>
                        <span class="inf-card__badge">Berita</span>
                    </div>
                    <div class="inf-card__body">
                        <div class="inf-card__title"><?= htmlspecialchars($b[$k['judul']] ?? 'Berita BAPENDA') ?></div>
                        <div class="inf-card__desc"><?= htmlspecialchars(strip_tags($b[$k['narasi']] ?? '')) ?></div>
                        <a href="<?= !empty($k['url']) && !empty($b[$k['url']]) ? $b[$k['url']] : base_url('blog') ?>" target="_blank" class="inf-card__link">
                            Baca Selengkapnya
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div><!-- /.inf-berita-grid -->
    </div>
</section>

<!-- Divider batik -->
<!-- <div class="inf-divider">
    <div class="inf-divider-batik" aria-hidden="true">
        <img src="<?= $bi ?>batik sunda1 copy 2.png" alt="" />
    </div>
</div> -->

<!-- ================================================================
     SEKSI 3 — PPID
     ================================================================ -->
<section class="inf-ppid-section" id="ppid">

    <!-- <div class="inf-ppid-watermark" aria-hidden="true">PPID</div> -->

    <!-- Ornamen kiri -->
    <!-- <div class="inf-ppid-ornamen-l" aria-hidden="true">
        <img src="<?= $bi ?>Group 259.png" alt="" />
    </div> -->

    <div class="inf-ppid-container">
        <div class="inf-ppid-title">PPID</div>

        <div class="inf-accordion" id="ppid-accordion">

            <!-- Item 1 -->
            <div class="inf-acc-item inf-acc-item--highlight">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Info Tasilan PBB</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body">
                    <div class="inf-acc-body-inner">
                        <p>Informasi mengenai tagihan PBB (Pajak Bumi dan Bangunan) dapat diakses melalui portal BAPENDA atau langsung ke kantor BAPENDA Kabupaten Purwakarta. Pastikan NJOP dan data objek pajak Anda sudah tercatat dengan benar.</p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="inf-acc-item inf-acc-item--highlight">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Permohonan Keberatan/Pembatalan PBB</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body">
                    <div class="inf-acc-body-inner">
                        <p>Wajib pajak dapat mengajukan keberatan atas penetapan PBB apabila terdapat kesalahan data atau ketidaksesuaian NJOP. Syarat pengajuan:</p>
                        <ul>
                            <li>Fotokopi SPPT PBB yang diajukan keberatan</li>
                            <li>Surat permohonan bermaterai</li>
                            <li>Fotokopi identitas diri (KTP)</li>
                            <li>Dokumen pendukung (sertifikat, akta, dsb)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="inf-acc-item inf-acc-item--highlight">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Permohonan Pelayanan SPPT, SKPD, SKPDLB dan Pembetulan SPPT,SKPD,STPO</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body">
                    <div class="inf-acc-body-inner">
                        <p>Layanan penerbitan dan pembetulan dokumen perpajakan meliputi SPPT, SKPD, SKPDLB, dan STPO. Pengajuan dapat dilakukan secara langsung ke loket BAPENDA atau melalui sistem online.</p>
                    </div>
                </div>
            </div>

            <!-- Item 4 highlighted -->
            <div class="inf-acc-item inf-acc-item--highlight open">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Permohonan Mutasi Pecah Pengabsahan OP</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body" style="max-height: 500px;">
                    <div class="inf-acc-body-inner">
                        <p>Mutasi dan pecah pengabsahan objek pajak diperlukan saat terjadi perubahan kepemilikan atau pembagian objek pajak. Persyaratan:</p>
                        <ul>
                            <li>Fotokopi SPPT/SKPD tahun berjalan</li>
                            <li>Fotokopi sertifikat tanah</li>
                            <li>Surat permohonan mutasi bermaterai</li>
                            <li>Fotokopi KTP pemohon</li>
                            <li>Bukti pelunasan PBB 5 tahun terakhir</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="inf-acc-item inf-acc-item--highlight">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Permohonan Pendataan Objek Baru PBB</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body">
                    <div class="inf-acc-body-inner">
                        <p>Pendataan objek pajak baru PBB dilakukan untuk properti yang belum terdaftar. Persyaratan Pendaftaran Objek Pajak Baru:</p>
                        <ul>
                            <li>Sertifikat atau Surat Keterangan Tanah dari Kelurahan/Desa Setempat</li>
                            <li>Akta Jual Beli (AJB) dari PPAT/PPAT Sementara(Camat)</li>
                            <li>Foto Copy KTP</li>
                            <li>Gambar Denah Lokasi Objek Pajak</li>
                            <li>Gambar Denah Tanah atau Bangunan Objek Pajak</li>
                            <li>No IMB/Persetujuan Bangunan Gedung</li>
                            <li>No PBB Tetangga (jika ada)</li>
                            <li>No NJOP/PBB Tanah Asal (untuk pemecahan tanah)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="inf-acc-item inf-acc-item--highlight">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Persyaratan Permohonan Pemrosesan dan Pembebasan Pajak</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body">
                    <div class="inf-acc-body-inner">
                        <p>Pengajuan pembebasan pajak dapat dilakukan untuk objek yang memenuhi kriteria sesuai Perda. Persyaratan meliputi surat permohonan, dokumen identitas, dan dokumen pendukung sesuai jenis pembebasan yang diajukan.</p>
                    </div>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="inf-acc-item inf-acc-item--highlight">
                <button class="inf-acc-header" type="button">
                    <span class="inf-acc-label">Persyaratan Permohonan Mutasi/Inbreng/Balik Nama Objek Pajak</span>
                    <svg class="inf-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="inf-acc-body">
                    <div class="inf-acc-body-inner">
                        <p>Permohonan mutasi, inbreng, atau balik nama objek pajak memerlukan dokumen peralihan hak yang sah dari notaris/PPAT disertai identitas pemohon dan bukti pelunasan pajak.</p>
                    </div>
                </div>
            </div>

        </div><!-- /.inf-accordion -->
    </div>
</section>

<!-- Copyright -->
<footer class="inf-footer">
    Copyright &copy; 2026 – Badan Pendapatan Daerah Kabupaten Purwakarta
</footer>

<script>
(function () {
    /* ── Sidebar ──────────────────────────────────────────── */
    var sw    = document.getElementById('inf-sidebar-wrap');
    var stgl  = document.getElementById('inf-sidebar-toggle');
    var scls  = document.getElementById('inf-sidebar-close');
    if (stgl) {
        stgl.addEventListener('click', function () { sw.classList.toggle('inf-sidebar-wrap--open'); });
    }
    if (scls) {
        scls.addEventListener('click', function () { sw.classList.remove('inf-sidebar-wrap--open'); });
    }

    /* ── Tabs ─────────────────────────────────────────────── */
    var tabBtns = document.querySelectorAll('.inf-tab-btn');
    var tabPanels = document.querySelectorAll('.inf-tab-panel');
    tabBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var target = btn.getAttribute('data-tab');
            tabBtns.forEach(function (b) { b.classList.remove('active'); });
            tabPanels.forEach(function (p) { p.classList.remove('active'); });
            btn.classList.add('active');
            var panel = document.getElementById('tab-' + target);
            if (panel) panel.classList.add('active');
        });
    });

    /* ── Accordion ────────────────────────────────────────── */
    document.querySelectorAll('.inf-acc-header').forEach(function (header) {
        header.addEventListener('click', function () {
            var item   = header.parentElement;
            var body   = item.querySelector('.inf-acc-body');
            var isOpen = item.classList.contains('open');

            // Tutup semua
            document.querySelectorAll('.inf-acc-item').forEach(function (it) {
                it.classList.remove('open');
                it.querySelector('.inf-acc-body').style.maxHeight = '0';
            });

            // Buka jika sebelumnya tutup
            if (!isOpen) {
                item.classList.add('open');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });

    /* Buka item yang sudah di-mark open */
    document.querySelectorAll('.inf-acc-item.open').forEach(function (item) {
        var body = item.querySelector('.inf-acc-body');
        body.style.maxHeight = body.scrollHeight + 'px';
    });
})();
</script>
</body>
</html>
