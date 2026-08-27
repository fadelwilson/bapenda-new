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
        /* State classes untuk sidebar & accordion yang dikendalikan JS */
        .inf-sidebar-open .inf-sidebar-toggle  { display: none; }
        .inf-sidebar-open .inf-sidebar-menu    { max-height: 400px; opacity: 1; pointer-events: auto; }

        /* Tab active state */
        .inf-tab-btn.active                    { border-bottom: 3px solid #eaa90d; }
        .inf-tab-btn.active .tab-label         { color: #eaa90d; font-weight: 600; }

        /* Accordion open state */
        .inf-acc-item.open .inf-acc-header-el  { background: #eaa90d; }
        .inf-acc-item.open .inf-acc-chevron-el { transform: rotate(180deg); color: #1a1a2e; }
        .inf-acc-item.open .inf-acc-label-el   { font-weight: 600; }
        .inf-acc-item--highlight.open .inf-acc-header-el { background: #eaa90d; }
        .inf-acc-item--highlight.open .inf-acc-label-el  { color: #1a1a2e; }

        /* Card hover gap trick for link arrow */
        .inf-card__link:hover { gap: 10px; }

        /* clamp font sizes not expressible in Tailwind */
        .inf-title-text    { font-size: clamp(36px, 5vw, 68px); }
        .inf-subtitle-text { font-size: clamp(18px, 2.2vw, 28px); }
        .inf-body-fs       { font-size: clamp(15px, 1.6vw, 19px); }
        .inf-tab-label-fs  { font-size: clamp(13px, 1.946vw, 28px); }
        .inf-tab-box-fs    { font-size: clamp(12px, 0.778vw, 15px); }
        .inf-tab-h4-fs     { font-size: clamp(14px, 1.2vw, 18px); }
        .inf-berita-title-fs { font-size: clamp(28px, 12vw, 96px); }
        .inf-card-title-fs { font-size: clamp(16px, 1.6vw, 20px); }
        .inf-ppid-title-fs { font-size: clamp(32px, 4.5vw, 60px); }
        .inf-acc-label-fs  { font-size: clamp(15px, 1.6vw, 19px); }
        .inf-acc-body-fs   { font-size: clamp(14px, 1.4vw, 17px); }
        .inf-ppid-wm-fs    { font-size: clamp(60px, 10vw, 130px); }
        .inf-berita-wm-fs  { font-size: clamp(50px, 9vw, 120px); }

        /* Tab box padding clamp */
        .inf-tab-box-pad { padding: 2.724vw; }

        /* Tab btn height */
        .inf-tab-btn-h { height: max(3.113vw, 44px); }

        /* Accordion body list bullet */
        .inf-acc-body-inner ul { list-style: none; padding: 0; margin: 0; }
        .inf-acc-body-inner ul li { padding-left: 20px; position: relative; margin-bottom: 6px; }
        .inf-acc-body-inner ul li::before {
            content: '›';
            position: absolute;
            left: 0;
            color: #eaa90d;
            font-size: 18px;
            line-height: 1.5;
        }
        /* Tab content box list bullet */
        .inf-tab-content-box ul { list-style: none; padding: 0; margin: 0 0 10px; }
        .inf-tab-content-box ul li { padding-left: 18px; position: relative; margin-bottom: 5px; }
        .inf-tab-content-box ul li::before {
            content: '›';
            position: absolute;
            left: 0;
            color: #eaa90d;
            font-size: 18px;
            line-height: 1.4;
        }
        .inf-tab-content-box h4 { color: #f4c24a; margin: 14px 0 6px; font-weight: 600; }
        .inf-tab-content-box p  { margin-bottom: 10px; }

        @media (max-width: 768px) {
            .inf-tabs-row { grid-template-columns: repeat(2, 1fr) !important; }
            .inf-tab-btn-h { height: 44px; }
            .inf-tab-label-fs { font-size: 13px; }
            .inf-tab-box-fs  { font-size: 13px; }
            .inf-tab-box-pad { padding: 18px; }
        }
        @media (max-width: 480px) {
            .inf-tabs-row { grid-template-columns: 1fr 1fr !important; }
        }
    </style>
</head>
<body class="genos bg-[#f5f5f3] text-[#1a1a2e] overflow-x-hidden">

<?php
$bi = base_url('assets/Informasi/');
$berita_folder = base_url('loginwebsite/uploads/berita/');
?>

<!-- ── Sidebar nav ──────────────────────────────────────────── -->
<div class="fixed left-0 top-1/2 -translate-y-1/2 z-[100] flex flex-col items-start" id="inf-sidebar-wrap">

    <button class="shrink-0 w-[56px] h-[56px] bg-[#eaa90d] border-0 cursor-pointer flex items-center justify-center p-0 z-[2]"
            id="inf-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
        <svg class="w-[28px] h-[28px] block" viewBox="0 0 24 24" fill="none" stroke="#303752"
             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>

    <nav class="inf-sidebar-menu flex flex-col overflow-hidden max-h-0 opacity-0 pointer-events-none transition-[max-height,opacity] duration-300 ease-in-out"
         id="inf-sidebar" aria-label="Menu utama">
        <a href="<?= base_url('beranda') ?>"
           class="relative flex items-center w-[200px] h-[52px] px-[28px] bg-white text-[#303752] genos text-[28px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Beranda</a>
        <a href="<?= base_url('tentang-kami') ?>"
           class="relative flex items-center w-[200px] h-[52px] px-[28px] bg-white text-[#303752] genos text-[28px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Profil</a>
        <a href="<?= base_url('layanan') ?>"
           class="relative flex items-center w-[200px] h-[52px] px-[28px] bg-white text-[#303752] genos text-[28px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Layanan</a>

        <div class="flex flex-row items-stretch w-fit">
            <a href="<?= base_url('informasi') ?>"
               class="relative flex items-center w-[200px] h-[56px] px-[28px] bg-[#eaa90d] text-[#303752] genos text-[28px] font-normal leading-normal no-underline whitespace-nowrap overflow-visible border-b-[2.5px] border-[#303752] hover:bg-[#eaa90d]"
               aria-current="page">Informasi</a>
            <button class="shrink-0 w-[55px] h-[55px] bg-[#eaa90d] border-0 cursor-pointer flex items-center justify-center p-0 hover:bg-[#d99c0c]"
                    id="inf-sidebar-close" aria-label="Tutup menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round" width="28" height="28" aria-hidden="true">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>

        <a href="<?= base_url('kritik-saran') ?>"
           class="relative flex items-center w-[200px] h-[52px] px-[28px] bg-white text-[#303752] genos text-[28px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Saran &amp; Kritik</a>
    </nav>
</div>

<!-- ================================================================
     SEKSI 1 — INFORMASI (Definisi Pajak Daerah)
     ================================================================ -->
<section class="p-[52px] w-full bg-white overflow-hidden" id="informasi">

    <div>
        <div class="inf-title-text krona-one font-normal text-[#1a1a2e2e] tracking-[2px] mb-[6px] leading-[1.1] -ml-[15px]">INFORMASI</div>
        <div class="inf-subtitle-text genos font-semibold text-[#303752] tracking-[1px] mb-[28px] uppercase">DEFINISI PAJAK DAERAH</div>

        <div class="inf-body-fs genos font-normal text-[#303752] leading-[1.75] mb-[32px] text-justify">
            Pajak daerah adalah kontribusi wajib kepada Daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran rakyat. Objek Pajak Daerah adalah penghasilan, kekayaan, atau perbuatan tertentu yang menjadi dasar pengenaan pajak.
        </div>
        <div class="inf-body-fs genos font-normal text-[#303752] leading-[1.75] mb-[32px] text-justify">
            Adapun Pajak Daerah diatur dalam <strong class="font-semibold text-[#1a1a2e]">Undang-Undang Nomor 1 Tahun 2022</strong> tentang Hubungan Keuangan antara Pemerintah Pusat dan Pemerintah Daerah (HKPD). Dalam UU HKPD, Pajak Daerah dibagi menjadi Pajak Provinsi dan Pajak Kabupaten/Kota. Dalam pelaksanaannya di Kabupaten Purwakarta, BAPENDA bertanggung jawab atas pemungutan dan pengelolaan seluruh jenis pajak kabupaten/kota sebagaimana diatur dalam regulasi tersebut. Kualitas BAPENDA — sebagai OPD penghasil terbesar Pendapatan Asli Daerah (PAD) — berdampak langsung terhadap kemampuan pembangunan daerah.
        </div>
        <div class="inf-body-fs genos font-normal text-[#303752] leading-[1.75] mb-[32px] text-justify">
            Kepala Bapenda menyatakan bahwa UU HKPD merupakan landasan hukum paling strategis yang pernah ada bagi pengelolaan pajak daerah. UU ini tidak hanya mengubah terminologi dan jenis pajak, tetapi juga memperkuat otonomi fiskal daerah dan mengintegrasikan sistem pemungutan pajak secara digital. Dalam satu NPWPD sekarang terdiri atas semua jenis pajak, sehingga pelayanan kepada wajib pajak menjadi lebih efisien dan terintegrasi.
        </div>

        <!-- ── Tab navigasi ── -->
        <div class="flex flex-col gap-2" role="tablist">
            <!-- Baris 1: 4 tab -->
            <div class="inf-tabs-row grid gap-2" style="grid-template-columns: repeat(4, 1fr);">
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out active hover:bg-[#3d4668]"
                        role="tab" data-tab="objek-pajak">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Objek Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="subjek-wajib">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Subjek &amp; Wajib Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="dasar-pengenaan">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Dasar Pengenaan</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="tarif">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Tarif Pajak</span>
                </button>
            </div>
            <!-- Baris 2: 3 tab -->
            <div class="inf-tabs-row grid gap-2" style="grid-template-columns: repeat(3, 1fr);">
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="masa-pajak">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Masa Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="jenis-pajak">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Denda Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="mekanisme">
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-normal text-white/70 leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms]">Mekanisme Pembayaran Pajak</span>
                </button>
            </div>
        </div>

        <!-- Konten tab -->
        <div class="inf-tab-content-box inf-tab-box-fs inf-tab-box-pad bg-[#1a1a2e2e] w-full text-[#303752] jakarta-sans leading-[1.75] min-h-[150px] text-justify"
             id="inf-tab-content">
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
<strong>BPHTB:</strong> Nilai Perolehan Objek Pajak (NPOP), yaitu harga transaksi atau nilai pasar.<br>
<strong>PBJT:</strong> Jumlah yang dibayarkan konsumen untuk pembelian makanan/minuman, tagihan listrik, pembayaran hotel, biaya parkir, dan tiket hiburan.<br>
<strong>Pajak Reklame:</strong> Nilai sewa reklame dihitung berdasarkan ukuran, lokasi, jenis, dan jangka waktu penyelenggaraan.`,
                'tarif': `Tarif pajak daerah ditetapkan dengan Peraturan Daerah (Perda), dengan batas maksimum berdasarkan UU HKPD:<br><br>
• <strong>PBB-P2:</strong> Maks 0,5%<br>• <strong>BPHTB:</strong> Maks 5%<br>• <strong>PBJT Makanan/Minuman:</strong> Maks 10%<br>• <strong>PBJT Tenaga Listrik:</strong> Maks 1,5% (industri), 3% (non-industri)<br>• <strong>PBJT Perhotelan:</strong> Maks 10%<br>• <strong>PBJT Parkir:</strong> Maks 10%<br>• <strong>PBJT Hiburan Khusus:</strong> 40%–75%<br>• <strong>Pajak Reklame:</strong> Maks 25%<br>• <strong>Pajak Air Tanah:</strong> Maks 20%<br>• <strong>Pajak MBLB:</strong> Maks 20%<br>• <strong>Pajak Sarang Burung Walet:</strong> Maks 10%`,
                'masa-pajak': `Masa pajak adalah jangka waktu dasar bagi wajib pajak untuk menghitung, menyetor, dan melaporkan pajak terutang.<br><br>
<strong>PBB-P2:</strong> Tahun pajak satu tahun kalender (1 Januari – 31 Desember).<br>
<strong>BPHTB:</strong> Saat terutang adalah sejak terjadinya perolehan hak.<br>
<strong>PBJT:</strong> Masa pajak adalah 1 (satu) bulan kalender.<br>
<strong>Pajak Reklame:</strong> Masa pajak disesuaikan dengan jangka waktu penyelenggaraan reklame.<br>
<strong>Pajak Air Tanah, MBLB, Sarang Burung Walet:</strong> Masa pajak adalah 1 (satu) bulan kalender.`,
                'jenis-pajak': `Denda pajak dikenakan apabila terjadi keterlambatan pembayaran atau pelanggaran kewajiban perpajakan:<br><br>
• Keterlambatan pembayaran dikenakan sanksi bunga <strong>2% per bulan</strong>.<br>
• Keterlambatan pelaporan SPTPD dikenakan denda administrasi sesuai jenis pajak.<br>
• Wajib pajak yang tidak memenuhi kewajiban pendaftaran dikenakan sanksi sesuai Perda.<br>
• SKPD Kurang Bayar diterbitkan apabila ditemukan pajak yang belum/kurang dibayar.<br>
• Pengenaan bunga paling lama <strong>24 bulan</strong>.`,
                'mekanisme': `Mekanisme pembayaran pajak daerah di Kabupaten Purwakarta terintegrasi secara digital:<br><br>
<strong>1. Pendaftaran &amp; Pengajuan:</strong> Wajib pajak mendaftarkan diri ke BAPENDA untuk mendapatkan NPWPD.<br><br>
<strong>2. Penetapan &amp; Pemberitahuan:</strong> BAPENDA menerbitkan SKPD atau SPPT (untuk PBB-P2).<br><br>
<strong>3. Pembayaran:</strong> Melalui bank yang ditunjuk, payment point, atau saluran digital (mobile/internet banking).<br><br>
<strong>4. Pelaporan:</strong> Wajib pajak melaporkan SPTPD sesuai masa pajak. Keterlambatan dikenakan sanksi bunga 2% per bulan.`
            };

            var tabBtns = document.querySelectorAll('.inf-tab-btn');
            var contentBox = document.getElementById('inf-tab-content');
            if (!contentBox || !tabBtns.length) return;

            tabBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    tabBtns.forEach(function (b) { b.classList.remove('active'); });
                    this.classList.add('active');
                    var key = this.getAttribute('data-tab');
                    if (tabContents[key]) contentBox.innerHTML = tabContents[key];
                });
            });
        });
        </script>

    </div>
</section>

<!-- ================================================================
     SEKSI 2 — BERITA & ARTIKEL
     ================================================================ -->
<section class="relative bg-white overflow-hidden" id="berita">

    <div class="relative mx-auto px-[52px] pt-[70px] pb-[60px] z-[2]">
        <div class="inf-berita-title-fs krona-one font-normal text-[#1a1a2e2e] tracking-[2px] mb-[40px]">
            BERITA &amp; <span>ARTIKEL</span>
        </div>

        <div class="grid grid-cols-3 gap-[28px] max-[900px]:grid-cols-1">
            <?php
            $berita_list = !empty($ShowDataBerita) ? array_slice($ShowDataBerita, 0, 3) : [];
            $berita_keys = [
                ['foto' => 'foto_berita', 'judul' => 'judul_berita', 'narasi' => 'narasi_berita', 'tgl' => 'tgl_upload', 'url' => 'url_berita'],
                ['foto' => 'foto', 'judul' => 'judul', 'narasi' => 'isi', 'tgl' => 'tanggal', 'url' => null],
            ];
            $k = !empty($berita_list) && isset($berita_list[0]['foto_berita']) ? $berita_keys[0] : $berita_keys[1];

            // Gambar placeholder yang tersedia di folder assets/Informasi
            $placeholder_imgs = [
                1 => 'img20250923081406-2-68d242abed641541c5071bc2 1 (1).png',
                2 => 'img20250923081406-2-68d242abed641541c5071bc2 1 (2).png',
                3 => 'img20250923081406-2-68d242abed641541c5071bc2 1.png',
            ];

            if (empty($berita_list)):
                for ($i = 1; $i <= 3; $i++):
            ?>
                <div class="bg-[#f5f5f3] overflow-hidden flex flex-col transition-[transform,box-shadow] duration-[250ms] ease-in-out cursor-pointer hover:-translate-y-[6px] hover:shadow-[0_16px_40px_rgba(0,0,0,0.35)]">
                    <div class="w-full aspect-video overflow-hidden relative bg-[#303752]">
                        <img src="<?= $bi . $placeholder_imgs[$i] ?>" alt="Berita <?= $i ?>"
                             class="w-full h-full object-cover object-top block transition-transform duration-[350ms] ease-in-out" />
                        <span class="absolute bottom-[10px] left-[10px] bg-[#eaa90d] text-[#1a1a2e] genos text-[13px] font-semibold px-[10px] py-[3px] tracking-[0.5px]">Berita</span>
                    </div>
                    <div class="p-[20px_20px_18px] flex-1 flex flex-col gap-2">
                        <div class="inf-card-title-fs genos font-semibold text-[#1a1a2e] leading-[1.4] line-clamp-2">Berita BAPENDA <?= $i ?></div>
                        <div class="jakarta-sans text-[13px] text-[#555] leading-[1.6] line-clamp-3 flex-1">Informasi terkini dari Badan Pendapatan Daerah Kabupaten Purwakarta mengenai kegiatan, pelayanan, dan inovasi perpajakan daerah.</div>
                        <a href="<?= base_url('blog') ?>" class="inf-card__link inline-flex items-center gap-[6px] genos text-[15px] font-medium text-[#eaa90d] no-underline mt-1 transition-[gap] duration-150">
                            Baca Selengkapnya
                            <svg class="w-[16px] h-[16px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>
            <?php endfor; else: ?>
                <?php foreach ($berita_list as $idx => $b): ?>
                <div class="bg-[#f5f5f3] overflow-hidden flex flex-col transition-[transform,box-shadow] duration-[250ms] ease-in-out cursor-pointer hover:-translate-y-[6px] hover:shadow-[0_16px_40px_rgba(0,0,0,0.35)]">
                    <div class="w-full aspect-video overflow-hidden relative bg-[#303752]">
                        <?php if (!empty($b[$k['foto']])): ?>
                        <img src="<?= $berita_folder . $b[$k['foto']] ?>" alt="<?= htmlspecialchars($b[$k['judul']] ?? '') ?>"
                             class="w-full h-full object-cover object-top block transition-transform duration-[350ms]" />
                        <?php else: ?>
                        <?php $fallback_imgs = ['img20250923081406-2-68d242abed641541c5071bc2 1 (1).png','img20250923081406-2-68d242abed641541c5071bc2 1 (2).png','img20250923081406-2-68d242abed641541c5071bc2 1.png']; ?>
                        <img src="<?= $bi . $fallback_imgs[$idx % 3] ?>" alt=""
                             class="w-full h-full object-cover object-center block" />
                        <?php endif; ?>
                        <span class="absolute bottom-[10px] left-[10px] bg-[#eaa90d] text-[#1a1a2e] genos text-[13px] font-semibold px-[10px] py-[3px] tracking-[0.5px]">Berita</span>
                    </div>
                    <div class="p-[20px_20px_18px] flex-1 flex flex-col gap-2">
                        <div class="inf-card-title-fs genos font-semibold text-[#1a1a2e] leading-[1.4] line-clamp-2"><?= htmlspecialchars($b[$k['judul']] ?? 'Berita BAPENDA') ?></div>
                        <div class="jakarta-sans text-[13px] text-[#555] leading-[1.6] line-clamp-3 flex-1"><?= htmlspecialchars(strip_tags($b[$k['narasi']] ?? '')) ?></div>
                        <a href="<?= !empty($k['url']) && !empty($b[$k['url']]) ? $b[$k['url']] : base_url('blog') ?>" target="_blank"
                           class="inf-card__link inline-flex items-center gap-[6px] genos text-[15px] font-medium text-[#eaa90d] no-underline mt-1 transition-[gap] duration-150">
                            Baca Selengkapnya
                            <svg class="w-[16px] h-[16px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ================================================================
     SEKSI 3 — PPID
     ================================================================ -->
<section class="relative bg-white overflow-hidden" id="ppid">

    <div class="relative mx-auto px-[52px] pt-[70px] pb-[80px] z-[2]">
        <div class="inf-ppid-title-fs krona-one font-normal text-[#1a1a2e2e] tracking-[2px] -ml-[15px] mb-6">PPID</div>

        <div class="flex flex-col border-t border-[#c8cbd8]" id="ppid-accordion">

            <?php
            $accordion_items = [
                ['label' => 'Info Tasilan PBB', 'highlight' => true, 'open' => false,
                 'content' => '<p>Informasi mengenai tagihan PBB (Pajak Bumi dan Bangunan) dapat diakses melalui portal BAPENDA atau langsung ke kantor BAPENDA Kabupaten Purwakarta. Pastikan NJOP dan data objek pajak Anda sudah tercatat dengan benar.</p>'],
                ['label' => 'Permohonan Keberatan/Pembatalan PBB', 'highlight' => true, 'open' => false,
                 'content' => '<p>Wajib pajak dapat mengajukan keberatan atas penetapan PBB apabila terdapat kesalahan data atau ketidaksesuaian NJOP. Syarat pengajuan:</p><ul><li>Fotokopi SPPT PBB yang diajukan keberatan</li><li>Surat permohonan bermaterai</li><li>Fotokopi identitas diri (KTP)</li><li>Dokumen pendukung (sertifikat, akta, dsb)</li></ul>'],
                ['label' => 'Permohonan Pelayanan SPPT, SKPD, SKPDLB dan Pembetulan SPPT,SKPD,STPO', 'highlight' => true, 'open' => false,
                 'content' => '<p>Layanan penerbitan dan pembetulan dokumen perpajakan meliputi SPPT, SKPD, SKPDLB, dan STPO. Pengajuan dapat dilakukan secara langsung ke loket BAPENDA atau melalui sistem online.</p>'],
                ['label' => 'Permohonan Mutasi Pecah Pengabsahan OP', 'highlight' => true, 'open' => true,
                 'content' => '<p>Mutasi dan pecah pengabsahan objek pajak diperlukan saat terjadi perubahan kepemilikan. Persyaratan:</p><ul><li>Fotokopi SPPT/SKPD tahun berjalan</li><li>Fotokopi sertifikat tanah</li><li>Surat permohonan mutasi bermaterai</li><li>Fotokopi KTP pemohon</li><li>Bukti pelunasan PBB 5 tahun terakhir</li></ul>'],
                ['label' => 'Permohonan Pendataan Objek Baru PBB', 'highlight' => true, 'open' => false,
                 'content' => '<p>Pendataan objek pajak baru PBB dilakukan untuk properti yang belum terdaftar. Persyaratan:</p><ul><li>Sertifikat atau Surat Keterangan Tanah</li><li>Akta Jual Beli (AJB)</li><li>Foto Copy KTP</li><li>Gambar Denah Lokasi Objek Pajak</li><li>Gambar Denah Tanah atau Bangunan</li><li>No IMB/Persetujuan Bangunan Gedung</li></ul>'],
                ['label' => 'Persyaratan Permohonan Pemrosesan dan Pembebasan Pajak', 'highlight' => true, 'open' => false,
                 'content' => '<p>Pengajuan pembebasan pajak dapat dilakukan untuk objek yang memenuhi kriteria sesuai Perda. Persyaratan meliputi surat permohonan, dokumen identitas, dan dokumen pendukung sesuai jenis pembebasan yang diajukan.</p>'],
                ['label' => 'Persyaratan Permohonan Mutasi/Inbreng/Balik Nama Objek Pajak', 'highlight' => true, 'open' => false,
                 'content' => '<p>Permohonan mutasi, inbreng, atau balik nama objek pajak memerlukan dokumen peralihan hak yang sah dari notaris/PPAT disertai identitas pemohon dan bukti pelunasan pajak.</p>'],
            ];
            ?>

            <?php foreach ($accordion_items as $acc): ?>
            <?php
                $isHighlight = $acc['highlight'];
                $isOpen      = $acc['open'];
                $headerBg    = $isHighlight ? 'bg-[#303752]' : 'bg-white';
                $labelColor  = $isHighlight ? 'text-white' : 'text-[#1a1a2e]';
                $chevronColor = $isHighlight ? 'text-white' : 'text-[#303752]';
                $openClass   = $isOpen ? ' open' : '';
            ?>
            <div class="inf-acc-item<?= $isHighlight ? ' inf-acc-item--highlight' : '' ?><?= $openClass ?> border-b border-[#c8cbd8] overflow-hidden">
                <button class="inf-acc-header-el w-full flex items-center justify-between px-5 py-4 <?= $headerBg ?> border-0 cursor-pointer text-left gap-3 transition-[background] duration-150 hover:bg-[#f0f0ec]"
                        type="button">
                    <span class="inf-acc-label-el inf-acc-label-fs genos font-medium <?= $labelColor ?> flex-1 leading-[1.3]"><?= htmlspecialchars($acc['label']) ?></span>
                    <svg class="inf-acc-chevron-el <?= $chevronColor ?> transition-transform duration-[250ms] ease-in-out shrink-0 w-[22px] h-[22px]"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="inf-acc-body overflow-hidden transition-[max-height] duration-[350ms] ease-in-out bg-[#fafaf8]"
                     style="max-height: <?= $isOpen ? '500px' : '0' ?>;">
                    <div class="inf-acc-body-inner inf-acc-body-fs genos text-[#303752] leading-[1.75] pt-5 pr-6 pb-6 pl-[68px]">
                        <?= $acc['content'] ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Copyright footer -->
<footer class="bg-white text-center py-[18px] jakarta-sans text-[12px] text-[#8889a8]">
    Copyright &copy; 2026 – Badan Pendapatan Daerah Kabupaten Purwakarta
</footer>

<script>
(function () {
    /* ── Sidebar ── */
    var sw    = document.getElementById('inf-sidebar-wrap');
    var stgl  = document.getElementById('inf-sidebar-toggle');
    var scls  = document.getElementById('inf-sidebar-close');
    var menu  = document.getElementById('inf-sidebar');
    if (!stgl || !menu) return;

    function openMenu() {
        menu.style.maxHeight     = '400px';
        menu.style.opacity       = '1';
        menu.style.pointerEvents = 'auto';
        stgl.style.display       = 'none';
        stgl.setAttribute('aria-expanded', 'true');
        stgl.setAttribute('aria-label', 'Tutup menu');
    }
    function closeMenu() {
        menu.style.maxHeight     = '0';
        menu.style.opacity       = '0';
        menu.style.pointerEvents = 'none';
        stgl.style.display       = '';
        stgl.setAttribute('aria-expanded', 'false');
        stgl.setAttribute('aria-label', 'Buka menu');
    }
    stgl.addEventListener('click', function () {
        menu.style.maxHeight === '400px' ? closeMenu() : openMenu();
    });
    if (scls) scls.addEventListener('click', closeMenu);

    /* ── Accordion ── */
    document.querySelectorAll('.inf-acc-header-el').forEach(function (header) {
        header.addEventListener('click', function () {
            var item   = header.parentElement;
            var body   = item.querySelector('.inf-acc-body');
            var isOpen = item.classList.contains('open');

            document.querySelectorAll('.inf-acc-item').forEach(function (it) {
                it.classList.remove('open');
                it.querySelector('.inf-acc-body').style.maxHeight = '0';
            });

            if (!isOpen) {
                item.classList.add('open');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });

    /* Buka item yang sudah di-mark open */
    document.querySelectorAll('.inf-acc-item.open').forEach(function (item) {
        var body = item.querySelector('.inf-acc-body');
        if (body) body.style.maxHeight = body.scrollHeight + 'px';
    });
})();
</script>
</body>
</html>
