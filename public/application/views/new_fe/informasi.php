<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA Purwakarta – Informasi']); ?>

    <style>
        /* State classes untuk sidebar & accordion yang dikendalikan JS */
        .inf-sidebar-open .inf-sidebar-toggle  { display: none; }
        .inf-sidebar-open .inf-sidebar-menu    { max-height: 400px; opacity: 1; pointer-events: auto; }

        /* Tab active state */
        .inf-tab-btn.active                    { background: rgba(255,255,255,0.18); }
        .inf-tab-btn.active .tab-label         { color: #313752; font-weight: 700; }
        .inf-tab-btn.active:hover              { background: rgba(255,255,255,0.22); }
        .inf-tab-btn.active img                { opacity: 0.45; }

        /* Accordion open state */
        .inf-acc-item.open .inf-acc-header-el  { background: #eaa90d; }
        .inf-acc-item.open .inf-acc-chevron-el { transform: rotate(180deg); color: #1a1a2e; }
        .inf-acc-item.open .inf-acc-label-el   { font-weight: 600; }
        .inf-acc-item--highlight.open .inf-acc-header-el { background: #eaa90d; }
        .inf-acc-item--highlight.open .inf-acc-label-el  { color: #1a1a2e; }

        /* Card hover gap trick for link arrow */
        .inf-card__link:hover { gap: 10px; }

        .inf-tab-btn img.tab-bg { opacity: 0.35; }
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

<?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'informasi']); ?>

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
        <?php
        $bi = $bi ?? base_url('assets/Informasi/');
        $tab_bgs = [
            'IMG-20260729-WA0012-4279738261 1.png',
            'img20250923081406-2-68d242abed641541c5071bc2 1 (1).png',
            'Screen Shot 2026-08-02 at 15.12.17 1 (1).png',
            '0cf5493d8e01976457fd1b2a8035a1fe 1.png',
        ];
        ?>
        <div class="flex flex-col gap-2" role="tablist">
            <!-- Baris 1: 4 tab -->
            <div class="inf-tabs-row grid gap-2" style="grid-template-columns: repeat(4, 1fr);">
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out active hover:bg-[#3d4668]"
                        role="tab" data-tab="objek-pajak">
                    <img src="<?= $bi . $tab_bgs[0] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Objek Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="subjek-wajib">
                    <img src="<?= $bi . $tab_bgs[1] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Subjek &amp; Wajib Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="dasar-pengenaan">
                    <img src="<?= $bi . $tab_bgs[2] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Dasar Pengenaan</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="tarif">
                    <img src="<?= $bi . $tab_bgs[3] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Tarif Pajak</span>
                </button>
            </div>
            <!-- Baris 2: 3 tab -->
            <div class="inf-tabs-row grid gap-2" style="grid-template-columns: repeat(3, 1fr);">
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="masa-pajak">
                    <img src="<?= $bi . $tab_bgs[1] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Masa Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="jenis-pajak">
                    <img src="<?= $bi . $tab_bgs[2] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Denda Pajak</span>
                </button>
                <button class="inf-tab-btn inf-tab-btn-h relative bg-[#303752] flex items-end justify-start p-0 border-0 border-b-[3px] border-transparent cursor-pointer overflow-hidden text-left transition-[background,border-color] duration-[250ms] ease-in-out hover:bg-[#3d4668]"
                        role="tab" data-tab="mekanisme">
                    <img src="<?= $bi . $tab_bgs[0] ?>" alt="" class="tab-bg absolute inset-0 w-full h-full object-cover object-top pointer-events-none select-none" aria-hidden="true" />
                    <span class="tab-label inf-tab-label-fs relative z-[1] genos font-semibold text-white leading-none px-2 pb-[6px] uppercase transition-colors duration-[250ms] drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">Mekanisme Pembayaran Pajak</span>
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

    <div class="absolute left-0 top-0 h-full w-[266px] opacity-[0.05] pointer-events-none overflow-hidden" aria-hidden="true">
        <img src="<?= $bi ?>WhatsApp Image 2026-08-04 at 17.52.50 (1) copy copy 3.png" alt=""
             class="absolute w-full h-full object-cover object-center" />
    </div>

    <div class="relative mx-auto px-[52px] pt-[70px] pb-[60px] z-[2]">

        <div class="krona-one text-[clamp(48px,7.5vw,96px)] font-normal text-[#303752] opacity-35 leading-normal whitespace-nowrap mb-[40px] select-none pointer-events-none"
             aria-hidden="true">
            BERITA &amp; ARTIKEL
        </div>

        <div class="grid grid-cols-3 gap-[28px] max-[900px]:grid-cols-1">
            <?php
            $berita_list = !empty($ShowDataBerita) ? array_slice($ShowDataBerita, 0, 3) : [];
            $berita_keys = [
                ['foto' => 'foto_berita', 'judul' => 'judul_berita', 'narasi' => 'narasi_berita', 'tgl' => 'tgl_upload', 'url' => 'url_berita'],
                ['foto' => 'foto', 'judul' => 'judul', 'narasi' => 'isi', 'tgl' => 'tanggal', 'url' => null],
            ];
            $k = !empty($berita_list) && isset($berita_list[0]['foto_berita']) ? $berita_keys[0] : $berita_keys[1];

            $placeholder_imgs = [
                1 => 'img20250923081406-2-68d242abed641541c5071bc2 1 (1).png',
                2 => 'img20250923081406-2-68d242abed641541c5071bc2 1 (2).png',
                3 => 'img20250923081406-2-68d242abed641541c5071bc2 1.png',
            ];

            /* ── Helper render card ── */
            function render_berita_card_v2($img_src, $judul, $narasi, $url) { ?>
                <a href="<?= htmlspecialchars($url) ?>" target="_blank"
                   class="group flex flex-col no-underline">

                    <div class="relative w-full overflow-hidden bg-[#303752]" style="height:280px;">
                        <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($judul) ?>"
                             class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-[1.04]" />
                    </div>

                    <div class="relative z-[10] -mt-[65px] ml-[50px] rounded-md w-[361px] max-w-full h-[130px] bg-[#303752]
                                flex items-center justify-center px-[16px]">
                        <p class="text-white text-[20px] font-semibold text-center leading-snug line-clamp-3"
                           style="font-family:'Genos',sans-serif;">
                            <?= htmlspecialchars($judul) ?>
                        </p>
                    </div>

                    <div class="pt-[14px]">
                        <p class="jakarta-sans text-[14px] font-normal text-[#303752] leading-normal line-clamp-4">
                            <?= htmlspecialchars(strip_tags($narasi)) ?>
                        </p>
                    </div>
                </a>
            <?php } ?>

            <?php if (empty($berita_list)):
                $placeholders = [
                    ['img' => $bi.$placeholder_imgs[1], 'judul' => 'Bapenda Kabupaten Purwakarta Apresiasi Para Wajib Pajak yang Turut Berkontribusi', 'narasi' => 'Badan Pendapatan Daerah (Bapenda) Kabupaten Purwakarta mengapresiasi pihak-pihak yang selama ini turut berkontribusi dan sangat mendukung pembangunan daerah. Terutama para wajib pajak yang selama ini taat untuk membayar pajak daerah.', 'url' => base_url('blog')],
                    ['img' => $bi.$placeholder_imgs[2], 'judul' => 'Dongkrak Pendapatan, Purwakarta Justru Lakukan Dengan Langkah Keringanan', 'narasi' => 'Memaksimalkan layanan publik, pemerintah kabupaten Purwakarta menggelar "Gempungan" secara bergiliran ditiap kecamatan sekaligus desa setiap hari Selasa. Masyarakat dapat menerima layanan langsung karena dijemput bola oleh pemerintah kabupaten, yang umumnya selalu dihadiri oleh Bupati.', 'url' => base_url('blog')],
                    ['img' => $bi.$placeholder_imgs[3], 'judul' => 'Bapenda Band & Dancer - Juara 1 Festival Mobil Hias Hari Jadi Purwakarta', 'narasi' => 'Bapenda Squad memeriahkan event Festival Mobil Hias Purwakarta dalam rangkaian hari jadi Kabupaten Purwakarta. Bapenda Band & Dancer - Juara 1 Festival Mobil Hias Hari Jadi Purwakarta.', 'url' => base_url('blog')],
                ];
                foreach ($placeholders as $p):
                    render_berita_card_v2($p['img'], $p['judul'], $p['narasi'], $p['url']);
                endforeach;
            else:
                $fallback = [$bi.$placeholder_imgs[1], $bi.$placeholder_imgs[2], $bi.$placeholder_imgs[3]];
                foreach ($berita_list as $idx => $b):
                    $img    = !empty($b[$k['foto']]) ? $berita_folder . $b[$k['foto']] : $fallback[$idx % 3];
                    $judul  = $b[$k['judul']] ?? 'Berita BAPENDA';
                    $narasi = $b[$k['narasi']] ?? '';
                    $url    = !empty($k['url']) && !empty($b[$k['url']]) ? $b[$k['url']] : base_url('blog');
                    render_berita_card_v2($img, $judul, $narasi, $url);
                endforeach;
            endif; ?>
        </div>

        <div class="flex items-center justify-center gap-[10px] mt-[36px]">
            <span class="w-[10px] h-[10px] rounded-full bg-[#c8cbd8] block"></span>
            <span class="w-[13px] h-[13px] rounded-full bg-[#eaa90d] block"></span>
            <span class="w-[10px] h-[10px] rounded-full bg-[#c8cbd8] block"></span>
            <span class="w-[10px] h-[10px] rounded-full bg-[#c8cbd8] block"></span>
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
                <button class="inf-acc-header-el w-full flex items-center justify-between px-5 py-4 <?= $headerBg ?> border-0 cursor-pointer text-left gap-3 transition-[background] duration-150"
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
<footer class="bg-white text-center py-[18px] jakarta-sans text-[12px] text-[#303752]">
    Copyright &copy; 2026 – Badan Pendapatan Daerah Kabupaten Purwakarta
</footer>

<script>
(function () {
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
<?php $this->load->view('new_fe/components/footer_scripts'); ?>
