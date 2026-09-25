<?php
$sub_menu = isset($sub_menu) ? strtolower($sub_menu) : 'peraturan';
$this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Informasi']);
?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white flex flex-col justify-between">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'informasi', 'navbar_bg' => 'white']); ?>

    <div class="relative overflow-hidden min-h-screen flex flex-col justify-between px-[1.556vw] py-[1.556vw] max-md:p-[2.051vw]">
        <div class="relative z-10">
            <div class="px-[1.556vw] max-md:px-0 flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-[4.103vw]">
                <img src="<?= base_url('assets/images/bapenda-blue.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto max-md:ml-[1.952vw] max-md:mt-[1.595vw]">

                <h1 class="text-[4.67vw] max-md:text-[9.231vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                    Informasi
                </h1>
            </div>

            <div class="mt-[4.5vw] max-md:mt-[8vw] relative z-10 max-md:px-0">
                <!-- Tab Pane 1: Peraturan & Publikasi -->
                <div id="content-peraturan" class="informasi-pane flex flex-col">
                    <h1 class="text-[4.669vw] px-[1.167vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-left max-md:text-[5.508vw]">
                        Peraturan & Publikasi
                    </h1>

                    <h3 class="text-[2.852vw] px-[1.167vw] mt-[1.223vw] text-[#EA6D0D] leading-none uppercase geologica max-md:text-[5.231vw] max-md:text-left max-md:mt-[5vw]">
                        Definisi Pajak Daerah
                    </h3>

                <div class="mt-[0.584vw] px-[1.167vw] max-md:mt-[3.077vw] max-md:p-[2.051vw]">
                    <p class="open-sans text-[0.778vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify">
                        Jenis pajak yang diterapkan di Negara Republik Indonesia dibagi menjadi dua jenis yaitu: (i) Pajak Pusat; dan (ii) Pajak Daerah. Berdasarkan BAB I, Pasal 1 angka 21 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2022 Tentang Pajak Daerah dan Retribusi Daerah, definisi Pajak Daerah adalah kontribusi wajib kepada daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan daerah bagi sebesar-besarnya kemakmuran rakyat.<br>
                        Jenis Pajak sebagaimana dimaksud dapat tidak dipungut apabila potensinya kurang memadai dan/atau disesuaikan dengan kebijakan Daerah yang ditetapkan dengan Peraturan Daerah. Pajak Daerah, yang selanjutnya disebut Pajak, adalah kontribusi wajib kepada Daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran rakyat.<br>
                        Pajak Kendaraan Bermotor<br>
                        Adapun Pajak Kendaraan Bermotor termasuk ke dalam jenis pajak provinsi yang merupakan bagian dari Pajak Daerah. Lebih lanjut, Pajak Kendaraan Bermotor sebagaimana yang didefinisikan dalam Pasal 1 angka 28 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2022 adalah pajak atas kepemilikan dan/atau penguasaan kendaraan bermotor. Dalam pelaksanaan pemungutannya dilakukan di kantor bersama samsat. Kantor Bersama SAMSAT ini melibatkan tiga instansi pemerintah, yaitu: Badan Pendapatan Daerah, Kepolisian Daerah Republik Indonesia, dan PT. (Persero) Asuransi Kerugian Jasa Raharja.
                    </p>
                </div>

                <?php $bi = base_url('assets/images/'); ?>

                <?php
                $publikasi_items = [
                    [
                        'title' => 'Peraturan Pajak Daerah',
                        'pdfs' => [
                            [
                                'title' => 'PERBUP No. 24 Tahun 2024 tentang BPHTB',
                                'file'  => 'assets/images/PERBUP NO 24 TH 2024 TTG BPHTB.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 25 Tahun 2024 tentang PBB-P2',
                                'file'  => 'assets/images/PERBUP NO 25 TH 2024 TTG PBB-P2.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 27 Tahun 2024 tentang Kenaikan NJOP PBB-P2',
                                'file'  => 'assets/images/PERBUP NO 27 TH 2024 TTG KENAIKAN NJOP PBB-P2.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 28 Tahun 2024 tentang Pemberian Stimulus PBB-P2',
                                'file'  => 'assets/images/PERBUP NO 28 TH 2024 TTG PEMBERIAN STIMULUS PBB-P2.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 48 Tahun 2024 tentang Tata Cara Pemungutan Pajak Air Tanah',
                                'file'  => 'assets/images/PERBUP NO 48 TH 2024 TTG TATA CARA PEMUNGUTAN PAJAK AIR TANAH.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 49 Tahun 2024 tentang Tata Cara Pemungutan Pajak MBLB',
                                'file'  => 'assets/images/PERBUP NO 49 TH 2024 TTG TATA CARA PEMUNGUTAN PAJAK MBLB.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 50 Tahun 2024 tentang Tata Cara Pemungutan PBJT',
                                'file'  => 'assets/images/PERBUP NO 50 TH 2024 TTG TATA CARA PEMUNGUTAN PBJT.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 51 Tahun 2024 tentang Tata Cara Pemungutan Pajak Reklame',
                                'file'  => 'assets/images/PERBUP NO 51 TH 2024 TTG TATA CARA PEMUNGUTAN PAJAK REKLAME.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 52 Tahun 2024 tentang Tata Cara Pemungutan Pajak Sarang Burung Walet',
                                'file'  => 'assets/images/PERBUP NO 52 TH 2024 TTG TATA CARA PEMUNGUTAN PAJAK SARANG BURUNG WALET.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 53 Tahun 2024 tentang Tata Cara Penagihan Pajak Daerah',
                                'file'  => 'assets/images/PERBUP NO 53 TH 2024 TTG TATA CARA PENAGIHAN PAJAK DAERAH.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 54 Tahun 2024 tentang Tata Cara Pemeriksaan Pajak Daerah',
                                'file'  => 'assets/images/PERBUP NO 54 TH 2024 TTG TATA CARA PEMERIKSAAN PAJAK DAERAH.pdf',
                            ],
                            [
                                'title' => 'PERBUP No. 55 Tahun 2024 tentang Sistem Monitoring Pelaporan dan Pembayaran Pajak Daerah Secara Online',
                                'file'  => 'assets/images/PERBUP NO 55 TH 2024 TTG SISTEM MONITORING PELAPORAN DAN PEMBAYARAN PAJAK DAERAH SECARA ONLINE.pdf',
                            ],
                            [
                                'title' => 'PERDA No. 15 Tahun 2023 tentang PDRD',
                                'file'  => 'assets/images/PERDA NO 15 TH 2023 TENTANG PDRD.pdf',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Publikasi',
                        'pdfs' => [
                            [
                                'title' => 'IKU 2025-2030',
                                'file'  => 'assets/images/IKU 2025-2030 n.pdf',
                            ],
                            [
                                'title' => 'LAKIP TA 2025',
                                'file'  => 'assets/images/Lakip TA 2025 fix n.pdf',
                            ],
                            [
                                'title' => 'Renja Bapenda 2026',
                                'file'  => 'assets/images/Renja  Bapenda 2026.pdf',
                            ],
                            [
                                'title' => 'RENJA 2025',
                                'file'  => 'assets/images/RENJA 2025 .pdf',
                            ],
                            [
                                'title' => 'Renja Perubahan Bapenda 2025',
                                'file'  => 'assets/images/Renja Perubahan Bapenda 2025.pdf',
                            ],
                            [
                                'title' => 'Renstra 2025-2029 Bapenda',
                                'file'  => 'assets/images/Renstra 2025-2029 Bapenda.pdf',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Formulir',
                        'pdfs' => [
                            [
                                'title' => 'Blanko',
                                'file'  => 'assets/images/blanko.pdf',
                            ],
                            [
                                'title' => 'Permohonan Mutasi',
                                'file'  => 'assets/images/permohonan-mutasi.pdf',
                            ],
                            [
                                'title' => 'Permohonan Pembetulan / Pembatalan',
                                'file'  => 'assets/images/permohonan-pembetulan-pembatalan.pdf',
                            ],
                            [
                                'title' => 'Keringanan / Pengurangan PBB',
                                'file'  => 'assets/images/keringanan-pengurangan-pbb.pdf',
                            ],
                            [
                                'title' => 'Permohonan Pendaftaran',
                                'file'  => 'assets/images/permohonan-pendaftaran.pdf',
                            ],
                        ],
                    ],
                ];
                ?>

                <div class="flex flex-col px-[2.33vw] gap-[0.19vw] mt-[2.33vw] max-md:gap-[1.538vw] max-md:mt-[6.154vw]">
                    <?php foreach ($publikasi_items as $p_item): ?>

                        <div class="ppid-accordion-item">

                            <!-- Header -->
                            <button
                                type="button"
                                class="relative z-30 w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-[#303752] text-white jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 ppid-accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]"
                            >
                                <span><?= htmlspecialchars($p_item['title']) ?></span>

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="3"
                                    stroke="currentColor"
                                    class="size-[1.17vw] shrink-0 transition-transform duration-300 transform ppid-accordion-icon max-md:size-[6.154vw]"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                    />
                                </svg>
                            </button>

                            <!-- Content -->
                            <div
                                class="relative z-0 max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-[#eaebee] text-[#303752] px-[2vw] max-md:px-[3.5vw] ppid-accordion-content"
                            >

                                <?php if (isset($p_item['pdfs'])): ?>

                                    <?php
                                    $pdf_count = count($p_item['pdfs']);
                                    ?>

                                    <div class="w-full py-[1.5vw] max-md:py-[4vw]">

                                        <!-- Judul PDF -->
                                        <div class="text-center mb-[1vw] max-md:mb-[3vw]">
                                            <h3
                                                class="pdf-form-title jakarta-sans font-semibold text-[1.1vw] max-md:text-[4.5vw]"
                                            >
                                                <?= htmlspecialchars($p_item['pdfs'][0]['title']) ?>
                                            </h3>
                                        </div>

                                        <!-- PDF Preview -->
                                        <div class="w-full h-[40vw] max-md:h-[120vw] bg-white overflow-hidden border border-[#303752]/20">

                                            <iframe
                                                class="pdf-form-preview w-full h-full border-0"
                                                src="<?= base_url($p_item['pdfs'][0]['file']) ?>"
                                                title="Preview PDF"
                                                referrerpolicy="no-referrer"
                                            ></iframe>

                                        </div>

                                        <!-- Navigasi -->
                                        <?php if ($pdf_count > 1): ?>

                                            <div class="flex items-center justify-center gap-[1vw] mt-[1.2vw] max-md:gap-[3vw] max-md:mt-[4vw]">

                                                <!-- Previous -->
                                                <button
                                                    type="button"
                                                    class="pdf-form-prev flex items-center justify-center bg-[#303752] text-white px-[1.2vw] py-[0.6vw] jakarta-sans text-[0.85vw] transition-all duration-300 hover:bg-[#EAA90D] hover:text-[#303752] max-md:px-[4vw] max-md:py-[2.5vw] max-md:text-[3.5vw]"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        class="size-[1vw] max-md:size-[4vw]"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M15.75 19.5L8.25 12l7.5-7.5"
                                                        />
                                                    </svg>
                                                </button>

                                                <!-- Counter -->
                                                <span
                                                    class="pdf-form-counter jakarta-sans text-[0.85vw] font-semibold max-md:text-[3.5vw]"
                                                >
                                                    1 / <?= $pdf_count ?>
                                                </span>

                                                <!-- Next -->
                                                <button
                                                    type="button"
                                                    class="pdf-form-next flex items-center justify-center bg-[#303752] text-white px-[1.2vw] py-[0.6vw] jakarta-sans text-[0.85vw] transition-all duration-300 hover:bg-[#EAA90D] hover:text-[#303752] max-md:px-[4vw] max-md:py-[2.5vw] max-md:text-[3.5vw]"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        class="size-[1vw] max-md:size-[4vw]"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                                        />
                                                    </svg>
                                                </button>

                                            </div>

                                        <?php endif; ?>


                                        <!-- Download -->
                                        <div class="flex justify-center mt-[1.2vw] max-md:mt-[4vw]">

                                            <a
                                                class="pdf-form-download inline-flex items-center justify-center gap-[0.5vw] bg-[#EAA90D] text-[#303752] jakarta-sans font-semibold text-[0.9vw] px-[1.5vw] py-[0.7vw] transition-all duration-300 hover:bg-[#303752] hover:text-white max-md:gap-[2vw] max-md:text-[3.5vw] max-md:px-[5vw] max-md:py-[2.5vw]"
                                                href="<?= base_url($p_item['pdfs'][0]['file']) ?>"
                                                download
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    class="size-[1.2vw] max-md:size-[5vw]"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12M12 16.5V3"
                                                    />
                                                </svg>
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /content-peraturan -->

            <?php
            $placeholder_berita = [
                [
                    'foto_berita'   => 'IMG-20260729-WA0012-4279738261 1 (2).png',
                    'judul_berita'  => 'Bapenda Kabupaten Purwakarta Apresiasi Para Wajib Pajakyang Turut Berkontribusi',
                    'narasi_berita' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
                [
                    'foto_berita'   => 'img20250923081406-2-68d242abed641541c5071bc2 1 (2).png',
                    'judul_berita'  => 'Dongkrak Pendapatan, Purwakarta Justru Lakukan Dengan Langkah Keringanan',
                    'narasi_berita' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
                [
                    'foto_berita'   => 'Screen Shot 2026-08-02 at 15.12.17 1 (2).png',
                    'judul_berita'  => 'Bapenda Band & Dancer - Juara 1 Festival Mobil Hias Hari Jadi Purwakarta',
                    'narasi_berita' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
                [
                    'foto_berita'   => 'KontenUpdate.png',
                    'judul_berita'  => 'Inovasi Layanan Pembayaran Pajak Daerah Berbasis Digital Terpadu',
                    'narasi_berita' => 'Bapenda Purwakarta terus menghadirkan kemudahan akses pembayaran pajak secara online guna meningkatkan kepatuhan dan kepuasan masyarakat.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
            ];

            $berita_list = !empty($ShowDataBerita) ? $ShowDataBerita : $placeholder_berita;
            $is_berita_carousel = count($berita_list) > 3;

            $placeholder_artikel = [
                [
                    'foto_berita'   => 'Screen Shot 2026-08-02 at 15.12.17 1 (2).png',
                    'judul_berita'  => 'Optimalisasi Pajak Daerah Mewujudkan Kemandirian Fiskal Purwakarta',
                    'narasi_berita' => 'Peningkatan kesadaran wajib pajak melalui inovasi layanan digital terpadu menjadi kunci utama dalam mendorong pertumbuhan pendapatan daerah yang berkelanjutan.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
                [
                    'foto_berita'   => 'img20250923081406-2-68d242abed641541c5071bc2 1 (2).png',
                    'judul_berita'  => 'Transformasi Digital Layanan Perpajakan Bapenda Menuju Smart City',
                    'narasi_berita' => 'Layanan perpajakan berbasis digital memudahkan masyarakat dalam pengecekan tagihan hingga proses pembayaran secara cepat, transparan, dan akuntabel.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
                [
                    'foto_berita'   => 'IMG-20260729-WA0012-4279738261 1 (2).png',
                    'judul_berita'  => 'Peran Strategis Pajak Bumi dan Bangunan dalam Pembangunan Daerah',
                    'narasi_berita' => 'Kontribusi nyata masyarakat melalui pembayaran PBB-P2 langsung dialokasikan untuk pemeliharaan fasilitas publik dan pembangunan sarana prasarana daerah.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
                [
                    'foto_berita'   => 'KontenUpdate.png',
                    'judul_berita'  => 'Strategi Pengelolaan Retribusi dan Pajak Daerah yang Berkeadilan',
                    'narasi_berita' => 'Bapenda terus memperkuat sinergi dengan berbagai instansi guna memastikan transparansi serta kepatuhan wajib pajak demi kesejahteraan masyarakat Purwakarta.',
                    'url_berita'    => base_url('blog'),
                    'is_local_asset' => true,
                ],
            ];

            $raw_artikel = !empty($ShowDataArtikel) ? $ShowDataArtikel : [];
            if (empty($raw_artikel)) {
                $ci =& get_instance();
                if (isset($ci->db) && $ci->db->table_exists('artikel')) {
                    $raw_artikel = $ci->db->order_by('id', 'desc')->get('artikel')->result_array();
                }
            }

            // Gunakan data dari backend tabel artikel jika tersedia
            $artikel_list = !empty($raw_artikel) ? $raw_artikel : $placeholder_artikel;
            $is_artikel_carousel = count($artikel_list) > 3;
            ?>

            <!-- Tab Pane 2: Berita & Artikel -->
            <div id="content-berita" class="informasi-pane hidden flex flex-col">
                <h1 class="text-[4.669vw] px-[1.167vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
                    Berita
                </h1>

                <h3 class="text-[2.852vw] px-[1.167vw] mt-[1.223vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5vw]">
                    Kabar Purwakarta Istimewa
                </h3>

        <?php if ($is_berita_carousel): ?>
            <!-- Carousel Mode (Jika lebih dari 3 item) -->
            <div class="owl-carousel owl-theme mt-[2.335vw] max-md:mt-[6.154vw] relative" id="berita-carousel">
                <?php foreach ($berita_list as $idx => $dt): ?>
                    <?php
                    if (!empty($dt['is_local_asset'])) {
                        $img_src = $bi . $dt['foto_berita'];
                    } elseif (!empty($dt['foto_berita'])) {
                        $img_src = base_url('loginwebsite') . '/uploads/berita/' . $dt['foto_berita'];
                    } else {
                        $img_src = $bi . $placeholder_berita[$idx % 3]['foto_berita'];
                    }

                    $url_berita   = !empty($dt['url_berita']) ? $dt['url_berita'] : base_url('blog');
                    $raw_judul    = !empty($dt['judul_berita']) ? $dt['judul_berita'] : 'Berita BAPENDA';
                    $judul_berita = html_entity_decode(html_entity_decode($raw_judul, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8');

                    $raw_narasi   = !empty($dt['narasi_berita']) ? $dt['narasi_berita'] : '';
                    $clean_narasi = trim(strip_tags(html_entity_decode(html_entity_decode($raw_narasi, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
                    $narasi_berita = !empty($clean_narasi)
                        ? (mb_strlen($clean_narasi) > 150 ? mb_substr($clean_narasi, 0, 150) . '...' : $clean_narasi)
                        : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
                    ?>
                    <div class="item">
                        <a href="<?= htmlspecialchars($url_berita) ?>" target="_blank" class="group flex flex-col no-underline">
                            <div class="relative w-full aspect-[390/280] overflow-hidden bg-[#303752]">
                                <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($judul_berita, ENT_QUOTES, 'UTF-8') ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                            </div>

                            <div class="relative z-10 -mt-[3.891vw] max-md:-mt-[9.231vw] mx-auto w-[92%] self-center bg-[#303752] min-h-[6.5vw] max-md:min-h-[22vw] flex items-center justify-center p-[0.973vw] max-md:p-[3.077vw] shadow-md">
                                <h3 class="text-white text-[1.25vw] max-md:text-[4.615vw] font-bold text-center leading-snug genos line-clamp-3">
                                    <?= $judul_berita ?>
                                </h3>
                            </div>

                            <div class="mt-[0.973vw] max-md:mt-[3.077vw] px-[0.389vw]">
                                <p class="jakarta-sans text-[0.85vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify line-clamp-4">
                                    <?= $narasi_berita ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Grid Mode (<= 3 item) -->
            <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[2.335vw] max-md:gap-[8.205vw] mt-[2.335vw] max-md:mt-[6.154vw]">
                <?php foreach ($berita_list as $idx => $dt): ?>
                    <?php
                    if (!empty($dt['is_local_asset'])) {
                        $img_src = $bi . $dt['foto_berita'];
                    } elseif (!empty($dt['foto_berita'])) {
                        $img_src = base_url('loginwebsite') . '/uploads/berita/' . $dt['foto_berita'];
                    } else {
                        $img_src = $bi . $placeholder_berita[$idx % 3]['foto_berita'];
                    }

                    $url_berita   = !empty($dt['url_berita']) ? $dt['url_berita'] : base_url('blog');
                    $raw_judul    = !empty($dt['judul_berita']) ? $dt['judul_berita'] : 'Berita BAPENDA';
                    $judul_berita = html_entity_decode(html_entity_decode($raw_judul, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8');

                    $raw_narasi   = !empty($dt['narasi_berita']) ? $dt['narasi_berita'] : '';
                    $clean_narasi = trim(strip_tags(html_entity_decode(html_entity_decode($raw_narasi, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
                    $narasi_berita = !empty($clean_narasi)
                        ? (mb_strlen($clean_narasi) > 150 ? mb_substr($clean_narasi, 0, 150) . '...' : $clean_narasi)
                        : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
                    ?>
                    <a href="<?= htmlspecialchars($url_berita) ?>" target="_blank" class="group flex flex-col no-underline">
                        <div class="relative w-full aspect-[390/280] overflow-hidden bg-[#303752]">
                            <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($judul_berita, ENT_QUOTES, 'UTF-8') ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                        </div>

                        <div class="relative z-10 -mt-[3.891vw] max-md:-mt-[9.231vw] mx-auto w-[92%] self-center bg-[#303752] min-h-[6.5vw] max-md:min-h-[22vw] flex items-center justify-center p-[0.973vw] max-md:p-[3.077vw] shadow-md">
                            <h3 class="text-white text-[1.25vw] max-md:text-[4.615vw] font-bold text-center leading-snug genos line-clamp-3">
                                <?= $judul_berita ?>
                            </h3>
                        </div>

                        <div class="mt-[0.973vw] max-md:mt-[3.077vw] px-[0.389vw]">
                            <p class="jakarta-sans text-[0.85vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify line-clamp-4">
                                <?= $narasi_berita ?>
                            </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Artikel Sub-Section (inside Berita Pane) -->
        <div class="mt-[4.5vw] max-md:mt-[8vw]">
            <h1 class="text-[4.669vw] px-[1.167vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
                Artikel
            </h1>

            <h3 class="text-[2.852vw] px-[1.167vw] mt-[1.223vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5vw]">
                Bapenda Purwakarta
            </h3>

            <?php if ($is_artikel_carousel): ?>
                <!-- Carousel Mode (Jika lebih dari 3 item) -->
                <div class="owl-carousel owl-theme mt-[2.335vw] max-md:mt-[6.154vw] relative" id="artikel-carousel">
                <?php foreach ($artikel_list as $idx => $dt): ?>
                    <?php
                    if (!empty($dt['gambar'])) {
                        $img_src = base_url('loginwebsite/uploads/artikel/' . $dt['gambar']);
                    } elseif (!empty($dt['is_local_asset']) && !empty($dt['foto_berita'])) {
                        $img_src = $bi . $dt['foto_berita'];
                    } elseif (!empty($dt['foto_berita'])) {
                        $img_src = base_url('loginwebsite/uploads/berita/' . $dt['foto_berita']);
                    } else {
                        $img_src = $bi . 'KontenUpdate.png';
                    }

                    $raw_judul    = !empty($dt['title']) ? $dt['title'] : (!empty($dt['judul_berita']) ? $dt['judul_berita'] : 'Artikel BAPENDA');
                    $judul_berita = html_entity_decode(html_entity_decode($raw_judul, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8');

                    $raw_narasi   = !empty($dt['content']) ? $dt['content'] : (!empty($dt['narasi_berita']) ? $dt['narasi_berita'] : '');
                    $clean_narasi = trim(strip_tags(html_entity_decode(html_entity_decode($raw_narasi, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
                    $narasi_card  = !empty($clean_narasi)
                        ? (mb_strlen($clean_narasi) > 150 ? mb_substr($clean_narasi, 0, 150) . '...' : $clean_narasi)
                        : 'Badan Pendapatan Daerah Kabupaten Purwakarta berkomitmen memberikan edukasi perpajakan yang transparan dan akuntabel demi kemakmuran masyarakat.';

                    $url_berita   = !empty($dt['url']) ? trim($dt['url']) : (!empty($dt['url_berita']) && empty($dt['title']) ? $dt['url_berita'] : '');
                    ?>
                    <div class="item">
                        <div onclick="openArtikelModal(this)"
                             data-title="<?= htmlspecialchars($judul_berita, ENT_QUOTES, 'UTF-8') ?>"
                             data-img="<?= htmlspecialchars($img_src, ENT_QUOTES, 'UTF-8') ?>"
                             data-url="<?= htmlspecialchars($url_berita, ENT_QUOTES, 'UTF-8') ?>"
                             data-content="<?= htmlspecialchars($clean_narasi, ENT_QUOTES, 'UTF-8') ?>"
                             class="group flex flex-col cursor-pointer select-none">
                            <div class="relative w-full aspect-[390/280] overflow-hidden bg-[#303752]">
                                <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($judul_berita, ENT_QUOTES, 'UTF-8') ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                            </div>

                            <div class="relative z-10 -mt-[3.891vw] max-md:-mt-[9.231vw] mx-auto w-[92%] self-center bg-[#303752] min-h-[6.5vw] max-md:min-h-[22vw] flex items-center justify-center p-[0.973vw] max-md:p-[3.077vw] shadow-md">
                                <h3 class="text-white text-[1.25vw] max-md:text-[4.615vw] font-bold text-center leading-snug genos line-clamp-3">
                                    <?= $judul_berita ?>
                                </h3>
                            </div>

                            <div class="mt-[0.973vw] max-md:mt-[3.077vw] px-[0.389vw]">
                                <p class="jakarta-sans text-[0.85vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify line-clamp-4">
                                    <?= $narasi_card ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Grid Mode (<= 3 item) -->
            <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[2.335vw] max-md:gap-[8.205vw] mt-[2.335vw] max-md:mt-[6.154vw]">
                <?php foreach ($artikel_list as $idx => $dt): ?>
                    <?php
                    if (!empty($dt['gambar'])) {
                        $img_src = base_url('loginwebsite/uploads/artikel/' . $dt['gambar']);
                    } elseif (!empty($dt['is_local_asset']) && !empty($dt['foto_berita'])) {
                        $img_src = $bi . $dt['foto_berita'];
                    } elseif (!empty($dt['foto_berita'])) {
                        $img_src = base_url('loginwebsite/uploads/berita/' . $dt['foto_berita']);
                    } else {
                        $img_src = $bi . 'KontenUpdate.png';
                    }

                    $raw_judul    = !empty($dt['title']) ? $dt['title'] : (!empty($dt['judul_berita']) ? $dt['judul_berita'] : 'Artikel BAPENDA');
                    $judul_berita = html_entity_decode(html_entity_decode($raw_judul, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8');

                    $raw_narasi   = !empty($dt['content']) ? $dt['content'] : (!empty($dt['narasi_berita']) ? $dt['narasi_berita'] : '');
                    $clean_narasi = trim(strip_tags(html_entity_decode(html_entity_decode($raw_narasi, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
                    $narasi_card  = !empty($clean_narasi)
                        ? (mb_strlen($clean_narasi) > 150 ? mb_substr($clean_narasi, 0, 150) . '...' : $clean_narasi)
                        : 'Badan Pendapatan Daerah Kabupaten Purwakarta berkomitmen memberikan edukasi perpajakan yang transparan dan akuntabel demi kemakmuran masyarakat.';

                    $url_berita   = !empty($dt['url']) ? trim($dt['url']) : (!empty($dt['url_berita']) && empty($dt['title']) ? $dt['url_berita'] : '');
                    ?>
                    <div onclick="openArtikelModal(this)"
                         data-title="<?= htmlspecialchars($judul_berita, ENT_QUOTES, 'UTF-8') ?>"
                         data-img="<?= htmlspecialchars($img_src, ENT_QUOTES, 'UTF-8') ?>"
                         data-url="<?= htmlspecialchars($url_berita, ENT_QUOTES, 'UTF-8') ?>"
                         data-content="<?= htmlspecialchars($clean_narasi, ENT_QUOTES, 'UTF-8') ?>"
                         class="group flex flex-col cursor-pointer select-none">
                        <div class="relative w-full aspect-[390/280] overflow-hidden bg-[#303752]">
                            <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($judul_berita, ENT_QUOTES, 'UTF-8') ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                        </div>

                        <div class="relative z-10 -mt-[3.891vw] max-md:-mt-[9.231vw] mx-auto w-[92%] self-center bg-[#303752] min-h-[6.5vw] max-md:min-h-[22vw] flex items-center justify-center p-[0.973vw] max-md:p-[3.077vw] shadow-md">
                            <h3 class="text-white text-[1.25vw] max-md:text-[4.615vw] font-bold text-center leading-snug genos line-clamp-3">
                                <?= $judul_berita ?>
                            </h3>
                        </div>

                        <div class="mt-[0.973vw] max-md:mt-[3.077vw] px-[0.389vw]">
                            <p class="jakarta-sans text-[0.85vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify line-clamp-4">
                                <?= $narasi_card ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
    <!-- /content-berita -->

    <!-- Modal Baca Artikel (Sesuai Desain Figma / Screenshot) -->
    <div id="modal-artikel" class="fixed inset-0 z-[999999] hidden items-center justify-center bg-[#303752]/80 p-4 md:p-10 overflow-y-auto" style="background-color: rgba(48, 55, 82, 0.8); z-index: 999999 !important;" onclick="if(event.target===this)closeArtikelModal()">
        <!-- Tombol Close (X Lingkaran di kanan atas) -->
        <button type="button" onclick="closeArtikelModal()" class="fixed top-4 right-4 md:top-8 md:right-10 text-white hover:text-(--yellow-color) bg-[#303752]/90 md:bg-transparent p-1.5 md:p-0 rounded-full transition-transform hover:scale-110 cursor-pointer shadow-lg md:shadow-none" style="z-index: 2147483647 !important;" aria-label="Tutup">
            <svg class="w-10 h-10 md:w-12 md:h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
        </button>

        <!-- Container Konten Popup -->
        <div class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto my-auto p-4 md:p-8 text-white custom-scrollbar">
            <!-- Row 1: 2 Kolom (Kiri Gambar, Kanan Box Judul Oranye + Lead Paragraph) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-start">
                <!-- Kolom Kiri: Gambar Artikel -->
                <div class="w-full aspect-[390/260] overflow-hidden bg-[#303752] shadow-2xl">
                    <img id="modal-artikel-img" src="" alt="" class="w-full h-full object-cover object-center" />
                </div>

                <!-- Kolom Kanan: Box Oranye Judul & Paragraf Pertama -->
                <div class="flex flex-col gap-4">
                    <div class="bg-[#EA6D0D] p-5 md:p-6 shadow-xl">
                        <h2 id="modal-artikel-title" class="text-white text-lg md:text-2xl font-bold leading-snug geologica uppercase"></h2>
                    </div>
                    <div id="modal-artikel-lead" class="text-white/95 text-xs md:text-sm leading-relaxed text-justify jakarta-sans"></div>
                </div>
            </div>

            <!-- Row 2: Paragraf Lanjutan Spanning Full Width -->
            <div id="modal-artikel-main" class="mt-6 md:mt-8 text-white/95 text-xs md:text-sm leading-relaxed text-justify jakarta-sans space-y-4"></div>

            <!-- Ujung: Sumber / URL Eksternal -->
            <div id="modal-artikel-source" class="mt-8 pt-4 border-t border-white/20 flex flex-wrap items-center justify-between gap-3 text-xs md:text-sm">
                <span class="text-white/70 jakarta-sans">Sumber:</span>
                <a id="modal-artikel-url" href="#" target="_blank" rel="noopener noreferrer" class="text-(--yellow-color) hover:underline font-semibold break-all flex items-center gap-1.5 transition-colors">
                    <span id="modal-artikel-url-text"></span>
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                </a>
            </div>
        </div>
    </div>

    <?php
    // Data Galeri Kegiatan dari endpoint/tabel sejarah
    $raw_sejarah = !empty($ShowDataSejarah) ? $ShowDataSejarah : [];
    if (empty($raw_sejarah)) {
        $ci =& get_instance();
        if (isset($ci->db)) {
            $raw_sejarah = $ci->db->order_by('id_sejarah', 'desc')->get('sejarah')->result_array();
        }
    }

    $galeri_kegiatan = [];
    $placeholder_galeri = [
        [
            'judul'     => 'Kegiatan BAPENDA 1',
            'deskripsi' => '',
            'video_url' => '',
            'thumb'     => base_url('assets/images/gambar-1.png'),
        ],
        [
            'judul'     => 'Kegiatan BAPENDA 2',
            'deskripsi' => '',
            'video_url' => '',
            'thumb'     => base_url('assets/images/gambar-2.png'),
        ],
        [
            'judul'     => 'Kegiatan BAPENDA 3',
            'deskripsi' => '',
            'video_url' => '',
            'thumb'     => base_url('assets/images/gambar-3.png'),
        ],
        [
            'judul'     => 'Kegiatan BAPENDA 4',
            'deskripsi' => '',
            'video_url' => '',
            'thumb'     => base_url('assets/images/gambar-4.png'),
        ],
    ];

    if (!empty($raw_sejarah)) {
        foreach ($raw_sejarah as $idx => $s) {
            $link_raw = $s['link'] ?? '';
            $link = html_entity_decode(html_entity_decode($link_raw, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $embedSrc = '';
            $youtubeId = '';
            $videoUrl = '';

            if (preg_match('/src=[\'"]([^\'"]+)[\'"]/', $link, $m)) {
                $embedSrc = $m[1];
            }

            $checkStr = $embedSrc . ' ' . $link;
            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/', $checkStr, $m)) {
                $youtubeId = $m[1];
                if (empty($embedSrc)) {
                    $embedSrc = 'https://www.youtube.com/embed/' . $youtubeId;
                }
                $videoUrl = 'https://www.youtube.com/watch?v=' . $youtubeId;
            } elseif (!empty($embedSrc)) {
                $videoUrl = $embedSrc;
            } elseif (!empty($link) && preg_match('/^https?:\/\//', $link)) {
                $videoUrl = $link;
            }

            if (!empty($youtubeId)) {
                $thumb = 'https://img.youtube.com/vi/' . $youtubeId . '/hqdefault.jpg';
            } elseif (!empty($s['thumbnail'])) {
                $thumb = (strpos($s['thumbnail'], 'http') === 0) ? $s['thumbnail'] : base_url('loginwebsite/uploads/seputar/' . $s['thumbnail']);
            } else {
                $thumb = base_url('assets/images/gambar-' . (($idx % 4) + 1) . '.png');
            }

            $judul = !empty($s['judul'])
                ? html_entity_decode(html_entity_decode($s['judul'], ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')
                : 'Kegiatan BAPENDA';

            $deskripsi = !empty($s['deskripsi'])
                ? html_entity_decode(html_entity_decode(strip_tags($s['deskripsi']), ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')
                : '';

            $galeri_kegiatan[] = [
                'judul'     => $judul,
                'deskripsi' => $deskripsi,
                'video_url' => $videoUrl,
                'embed_src' => $embedSrc,
                'thumb'     => $thumb,
            ];
        }
    }

    if (empty($galeri_kegiatan)) {
        $galeri_kegiatan = $placeholder_galeri;
    }

    $is_galeri_carousel = count($galeri_kegiatan) > 3;

    if (!function_exists('get_bapenda_instagram_posts')) {
        function get_bapenda_instagram_posts($username = 'bapendapwk', $ttl = 3600) {
            $cacheDir = APPPATH . 'cache/';
            $cacheFile = $cacheDir . 'ig_' . preg_replace('/[^a-zA-Z0-9_]/', '', $username) . '.json';
            $imgCacheDir = FCPATH . 'assets/images/ig_cache/';

            if (!is_dir($imgCacheDir)) {
                @mkdir($imgCacheDir, 0755, true);
            }

            if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $ttl)) {
                $cached = json_decode(@file_get_contents($cacheFile), true);
                if (!empty($cached) && is_array($cached)) {
                    foreach ($cached as &$cItem) {
                        $sc = $cItem['shortcode'] ?? '';
                        if ($sc && file_exists($imgCacheDir . $sc . '.jpg')) {
                            $cItem['thumb'] = base_url('assets/images/ig_cache/' . $sc . '.jpg');
                        }
                    }
                    return $cached;
                }
            }

            $url = 'https://www.instagram.com/' . urlencode($username) . '/embed';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 6);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $html = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            $posts = [];
            if ($httpCode === 200 && !empty($html)) {
                $pos = strpos($html, 'graphql_media');
                if ($pos !== false) {
                    $bracketPos = strpos($html, '[', $pos);
                    $endPos = strpos($html, "],\\\"owner_id\\\"", $bracketPos);
                    if ($endPos === false) {
                        $endPos = strpos($html, '],"owner_id"', $bracketPos);
                    }
                    if ($endPos !== false) {
                        $raw = substr($html, $bracketPos, $endPos - $bracketPos + 1);
                        if (strpos($raw, "[{\\\"") === 0) {
                            $raw = stripslashes($raw);
                        }
                        $data = json_decode($raw, true);
                        if (!empty($data) && is_array($data)) {
                            foreach ($data as $item) {
                                $m = $item['shortcode_media'] ?? [];
                                if (empty($m)) continue;

                                $shortcode = $m['shortcode'] ?? '';
                                $displayUrl = $m['display_url'] ?? '';

                                if (!empty($m['display_resources']) && is_array($m['display_resources'])) {
                                    foreach ($m['display_resources'] as $res) {
                                        if (($res['config_width'] ?? 0) === 750) {
                                            $displayUrl = $res['src'] ?? $displayUrl;
                                            break;
                                        }
                                    }
                                }

                                $thumbUrl = $displayUrl;
                                if ($shortcode && $displayUrl) {
                                    $localImgFile = $imgCacheDir . $shortcode . '.jpg';
                                    if (!file_exists($localImgFile)) {
                                        $imgData = @file_get_contents($displayUrl);
                                        if ($imgData) {
                                            @file_put_contents($localImgFile, $imgData);
                                        }
                                    }
                                    if (file_exists($localImgFile)) {
                                        $thumbUrl = base_url('assets/images/ig_cache/' . $shortcode . '.jpg');
                                    }
                                }

                                $caption = $m['edge_media_to_caption']['edges'][0]['node']['text'] ?? '';
                                $timestamp = $m['taken_at_timestamp'] ?? time();
                                $formattedDate = date('d M Y', $timestamp);

                                $posts[] = [
                                    'shortcode' => $shortcode,
                                    'thumb'     => $thumbUrl,
                                    'caption'   => trim($caption),
                                    'date'      => $formattedDate,
                                    'url'       => 'https://www.instagram.com/p/' . $shortcode . '/',
                                ];
                            }
                        }
                    }
                }
            }

            if (!empty($posts)) {
                @file_put_contents($cacheFile, json_encode($posts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                return $posts;
            }

            if (file_exists($cacheFile)) {
                $stale = json_decode(@file_get_contents($cacheFile), true);
                if (!empty($stale) && is_array($stale)) {
                    foreach ($stale as &$sItem) {
                        $sc = $sItem['shortcode'] ?? '';
                        if ($sc && file_exists($imgCacheDir . $sc . '.jpg')) {
                            $sItem['thumb'] = base_url('assets/images/ig_cache/' . $sc . '.jpg');
                        }
                    }
                    return $stale;
                }
            }

            return [
                [
                    'shortcode' => '',
                    'thumb'     => base_url('assets/images/ig-galeri.png'),
                    'caption'   => 'Pelayanan Pojok Pajak hadir lebih dekat untuk memudahkan warga Purwakarta dalam pembayaran PBB-P2 dan konsultasi perpajakan daerah.',
                    'date'      => 'Instagram @bapendapwk',
                    'url'       => 'https://www.instagram.com/bapendapwk/',
                ],
                [
                    'shortcode' => '',
                    'thumb'     => base_url('assets/images/img20250923081406-2-68d242abed641541c5071bc2 1 (2).png'),
                    'caption'   => 'Manfaatkan program pembebasan denda dan keringanan pajak daerah Kabupaten Purwakarta. Wajib pajak bijak, Purwakarta istimewa!',
                    'date'      => 'Instagram @bapendapwk',
                    'url'       => 'https://www.instagram.com/bapendapwk/',
                ],
                [
                    'shortcode' => '',
                    'thumb'     => base_url('assets/images/Screen Shot 2026-08-02 at 15.12.17 1 (2).png'),
                    'caption'   => 'Keseruan tim BAPENDA Purwakarta dalam karnaval mobil hias dan peringatan Hari Jadi Purwakarta ke-193 & Kabupaten ke-56.',
                    'date'      => 'Instagram @bapendapwk',
                    'url'       => 'https://www.instagram.com/bapendapwk/',
                ],
                [
                    'shortcode' => '',
                    'thumb'     => base_url('assets/images/IMG-20260729-WA0012-4279738261 1 (2).png'),
                    'caption'   => 'Penghargaan dan apresiasi setinggi-tingginya kepada para wajib pajak teladan yang taat berkontribusi demi kemajuan Purwakarta.',
                    'date'      => 'Instagram @bapendapwk',
                    'url'       => 'https://www.instagram.com/bapendapwk/',
                ],
            ];
        }
    }

    $ig_posts = get_bapenda_instagram_posts('bapendapwk');
    $is_ig_carousel = count($ig_posts) > 3;
    ?>

    <!-- Tab Pane 3: Galeri -->
    <div id="content-galeri" class="informasi-pane hidden flex flex-col">
        <h1 class="text-[4.669vw] px-[1.167vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
            GALERI
        </h1>

        <h3 class="text-[2.852vw] px-[1.167vw] mt-[1.223vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5vw]">
            Kegiatan Bapenda Purwakarta
        </h3>

        <?php if ($is_galeri_carousel): ?>
            <!-- Carousel Mode (Jika lebih dari 3 item) -->
            <div class="owl-carousel owl-theme mt-[2.335vw] max-md:mt-[6.154vw] relative" id="galeri-kegiatan-carousel">
                <?php foreach ($galeri_kegiatan as $item): ?>
                    <?php $has_link = !empty($item['video_url']) && $item['video_url'] !== '#'; ?>
                    <div class="item">
                        <<?= $has_link ? 'a href="' . htmlspecialchars($item['video_url']) . '" target="_blank"' : 'div' ?> class="group relative block w-full aspect-video overflow-hidden bg-[#303752] galeri-kegiatan-card">
                            <img
                                src="<?= htmlspecialchars($item['thumb']) ?>"
                                alt="<?= htmlspecialchars($item['judul']) ?>"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                        </<?= $has_link ? 'a' : 'div' ?>>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Grid Mode (<= 3 item) -->
            <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[1vw] max-md:gap-[8.205vw] mt-[2.335vw] max-md:mt-[6.154vw]">
                <?php foreach ($galeri_kegiatan as $item): ?>
                    <?php $has_link = !empty($item['video_url']) && $item['video_url'] !== '#'; ?>
                    <<?= $has_link ? 'a href="' . htmlspecialchars($item['video_url']) . '" target="_blank"' : 'div' ?> class="group relative block w-full aspect-video overflow-hidden bg-[#303752] galeri-kegiatan-card">
                        <img
                            src="<?= htmlspecialchars($item['thumb']) ?>"
                            alt="<?= htmlspecialchars($item['judul']) ?>"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                    </<?= $has_link ? 'a' : 'div' ?>>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Postingan Instagram Sub-Section (inside Galeri Pane) -->
        <div class="mt-[4.5vw] max-md:mt-[8vw]">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-[4.669vw] px-[1.167vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
                        Postingan Instagram
                    </h1>
                    <h3 class="text-[2.852vw] px-[1.167vw] mt-[1.223vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5vw]">
                        @bapendapwk
                    </h3>
                </div>
                <a href="https://www.instagram.com/bapendapwk/" target="_blank" rel="noopener noreferrer" class="hidden md:flex items-center gap-[0.5vw] px-[1.2vw] py-[0.6vw] bg-[#303752] text-white hover:bg-[#EA6D0D] transition-colors duration-300 text-[0.85vw] font-medium jakarta-sans mr-[1.167vw] group">
                    <svg class="size-[1.1vw] text-[#EA6D0D] group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    <span>Kunjungi @bapendapwk</span>
                </a>
            </div>

            <?php if ($is_ig_carousel): ?>
                <!-- Carousel Mode (Jika lebih dari 3 item) -->
                <div class="owl-carousel owl-theme mt-[2.335vw] max-md:mt-[6.154vw] relative" id="galeri-ig-carousel">
                    <?php foreach ($ig_posts as $item): ?>
                        <div class="item p-[0.3vw] pb-[0.8vw]">
                            <div class="bg-white rounded-[1.2vw] max-md:rounded-2xl border border-slate-200/90 shadow-[0_4px_20px_rgba(0,0,0,0.06)] overflow-hidden flex flex-col transition-all duration-300 hover:shadow-[0_12px_28px_rgba(0,0,0,0.12)] hover:-translate-y-1">
                                <!-- Header -->
                                <div class="flex items-center justify-between px-[1vw] py-[0.8vw] max-md:px-[3.5vw] max-md:py-[3vw] bg-white">
                                    <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-[0.6vw] max-md:gap-[2.5vw] group/user">
                                        <!-- Instagram Story Gradient Ring -->
                                        <div class="p-[2px] rounded-full bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]">
                                            <div class="p-[1.5px] bg-white rounded-full flex items-center justify-center">
                                                <img
                                                    src="<?= base_url('assets/images/logo-tab.jpg') ?>"
                                                    alt="BAPENDA PURWAKARTA"
                                                    class="size-[2vw] max-md:size-[8vw] rounded-full object-cover" />
                                            </div>
                                        </div>
                                        <span class="text-[0.8vw] max-md:text-[3.2vw] font-bold text-slate-800 tracking-wide uppercase font-sans group-hover/user:text-[#EA6D0D] transition-colors">
                                            BAPENDA PURWAKARTA
                                        </span>
                                    </a>
                                    <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-slate-800 transition-colors p-[0.2vw]" aria-label="Menu">
                                        <svg class="size-[1.1vw] max-md:size-[4.5vw]" fill="currentColor" viewBox="0 0 24 24">
                                            <circle cx="5" cy="12" r="1.8"/>
                                            <circle cx="12" cy="12" r="1.8"/>
                                            <circle cx="19" cy="12" r="1.8"/>
                                        </svg>
                                    </a>
                                </div>

                                <!-- Media / Image -->
                                <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="block w-full aspect-square overflow-hidden bg-slate-100 relative group/img">
                                    <img
                                        src="<?= htmlspecialchars($item['thumb']) ?>"
                                        alt="Instagram @bapendapwk"
                                        loading="lazy"
                                        referrerpolicy="no-referrer"
                                        class="w-full h-full object-cover object-center group-hover/img:scale-[1.03] transition-transform duration-500" />
                                </a>

                                <!-- Action Bar -->
                                <div class="flex items-center justify-between px-[1vw] py-[0.8vw] max-md:px-[3.5vw] max-md:py-[3vw] bg-white">
                                    <!-- Left Actions -->
                                    <div class="flex items-center gap-[0.9vw] max-md:gap-[3.5vw] text-slate-700">
                                        <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-red-500 transition-colors" aria-label="Suka">
                                            <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                            </svg>
                                        </a>
                                        <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors" aria-label="Komentar">
                                            <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                            </svg>
                                        </a>
                                        <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors" aria-label="Bagikan">
                                            <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                    <!-- Right Action -->
                                    <div>
                                        <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="text-slate-700 hover:text-slate-900 transition-colors" aria-label="Simpan">
                                            <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Grid Mode (<= 3 item) -->
                <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[1.5vw] max-md:gap-[6vw] mt-[2.335vw] max-md:mt-[6.154vw]">
                    <?php foreach ($ig_posts as $item): ?>
                        <div class="bg-white rounded-[1.2vw] max-md:rounded-2xl border border-slate-200/90 shadow-[0_4px_20px_rgba(0,0,0,0.06)] overflow-hidden flex flex-col transition-all duration-300 hover:shadow-[0_12px_28px_rgba(0,0,0,0.12)] hover:-translate-y-1">
                            <!-- Header -->
                            <div class="flex items-center justify-between px-[1vw] py-[0.8vw] max-md:px-[3.5vw] max-md:py-[3vw] bg-white">
                                <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-[0.6vw] max-md:gap-[2.5vw] group/user">
                                    <div class="p-[2px] rounded-full bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]">
                                        <div class="p-[1.5px] bg-white rounded-full flex items-center justify-center">
                                            <img
                                                src="<?= base_url('assets/images/logo-tab.jpg') ?>"
                                                alt="BAPENDA PURWAKARTA"
                                                class="size-[2vw] max-md:size-[8vw] rounded-full object-cover" />
                                        </div>
                                    </div>
                                    <span class="text-[0.8vw] max-md:text-[3.2vw] font-bold text-slate-800 tracking-wide uppercase font-sans group-hover/user:text-[#EA6D0D] transition-colors">
                                        BAPENDA PURWAKARTA
                                    </span>
                                </a>
                                <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-slate-800 transition-colors p-[0.2vw]" aria-label="Menu">
                                    <svg class="size-[1.1vw] max-md:size-[4.5vw]" fill="currentColor" viewBox="0 0 24 24">
                                        <circle cx="5" cy="12" r="1.8"/>
                                        <circle cx="12" cy="12" r="1.8"/>
                                        <circle cx="19" cy="12" r="1.8"/>
                                    </svg>
                                </a>
                            </div>

                            <!-- Media / Image -->
                            <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="block w-full aspect-square overflow-hidden bg-slate-100 relative group/img">
                                <img
                                    src="<?= htmlspecialchars($item['thumb']) ?>"
                                    alt="Instagram @bapendapwk"
                                    loading="lazy"
                                    referrerpolicy="no-referrer"
                                    class="w-full h-full object-cover object-center group-hover/img:scale-[1.03] transition-transform duration-500" />
                            </a>

                            <!-- Action Bar -->
                            <div class="flex items-center justify-between px-[1vw] py-[0.8vw] max-md:px-[3.5vw] max-md:py-[3vw] bg-white">
                                <!-- Left Actions -->
                                <div class="flex items-center gap-[0.9vw] max-md:gap-[3.5vw] text-slate-700">
                                    <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-red-500 transition-colors" aria-label="Suka">
                                        <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </a>
                                    <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors" aria-label="Komentar">
                                        <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                        </svg>
                                    </a>
                                    <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors" aria-label="Bagikan">
                                        <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
                                    </a>
                                </div>
                                <!-- Right Action -->
                                <div>
                                    <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="text-slate-700 hover:text-slate-900 transition-colors" aria-label="Simpan">
                                        <svg class="size-[1.35vw] max-md:size-[5.5vw]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- /content-galeri -->

    <?php
    $ppid_items = [
        [
            'title'   => 'Pengajuan Keberatan',
            'image'   => 'assets/images/pengajuan-keberatan.webp',
        ],
        [
            'title'   => 'Tugas PPID',
            'image'   => 'assets/images/tugas-ppid.webp',
        ],
        [
            'title'   => 'Tata Cara Penyelesaian Sengketa Informasi',
            'image'   => 'assets/images/tata-cara-penyelesaian.webp',
        ],
        [
            'title'   => 'QR SOP Permohonan Informasi',
            'image'   => 'assets/images/qrsop-permohonan.webp',
        ],
        [
            'title'   => 'QR SOP Uji Konsekuensi',
            'image'   => 'assets/images/qrsop-uji.webp',
        ],
        [
            'title'   => 'SOP Permohonan Informasi',
            'image'   => 'assets/images/sop-permohonan.webp',
        ],
        [
            'title'   => 'Struktur PPID',
            'image'   => 'assets/images/struktur-ppid.webp',
        ],
        [
            'title'   => 'Visi dan Misi PPID',
            'image'   => 'assets/images/visi-misi.webp',
        ],
    ];
    ?>

    <!-- Tab Pane 4: PPID -->
    <div id="content-ppid" class="informasi-pane hidden flex flex-col">
        <h1 class="text-[4.669vw] px-[1.167vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
            PPID
        </h1>

        <h3 class="text-[2.852vw] px-[1.167vw] mt-[1.223vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5vw]">
            Penjabat Pengelola Informasi &amp; Dokumentasi
        </h3>

        <!-- Accordion Container -->
        <div class="flex flex-col gap-[0.19vw] mt-[2.33vw] max-md:gap-[1.538vw] max-md:mt-[6.154vw]">
            <?php foreach ($ppid_items as $p_item): ?>
                <div class="ppid-accordion-item">
                    <button type="button" class="relative z-30 w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-[#303752] text-white jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 ppid-accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                        <span><?= htmlspecialchars($p_item['title']) ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform ppid-accordion-icon max-md:size-[6.154vw]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <div class="relative z-0 max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-[#eaebee] text-[#303752] px-[2vw] max-md:px-[3.5vw] ppid-accordion-content">
                        <div class="flex justify-center w-full py-[1vw] max-md:py-[3vw]">
                            <img
                                src="<?= base_url($p_item['image']) ?>"
                                alt="<?= htmlspecialchars($p_item['title']) ?>"
                                class="max-w-[30vw] h-auto max-md:max-w-full max-md:w-full max-md:h-[120vw] object-contain"
                            >
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

            </div>
            <!-- /panes container -->
        </div>
        <!-- /relative z-10 -->

        <footer class="mt-[4vw] max-md:mt-[12vw] relative z-30 overflow-visible">
            <div class="relative z-10 w-full p-[1.751vw] text-[#303752] text-[0.584vw] jakarta-sans max-md:text-[2.564vw]">
                <div class="text-center">
                    Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                </div>
            </div>
        </footer>

        <img src="<?= base_url('assets/images/towerakatsuki.png') ?>" alt="" class="absolute -right-[2.051vw] opacity-[0.03] -bottom-10 h-[44vw] w-auto pointer-events-none z-10 max-md:hidden">
    </div>


    <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
        window.scrollTo(0, 0);

        document.addEventListener('DOMContentLoaded', function() {
            const tabKeys = {
                'peraturan': 'peraturan',
                'publikasi': 'peraturan',
                'layanan': 'peraturan',
                'informasi': 'peraturan',
                'berita': 'berita',
                'article': 'berita',
                'artikel': 'berita',
                'galeri': 'galeri',
                'ppid': 'ppid'
            };

            const panes = {
                'peraturan': document.getElementById('content-peraturan'),
                'berita': document.getElementById('content-berita'),
                'galeri': document.getElementById('content-galeri'),
                'ppid': document.getElementById('content-ppid')
            };

            function switchTab(key) {
                const targetKey = tabKeys[key] || 'peraturan';

                Object.keys(panes).forEach(function(k) {
                    const pane = panes[k];
                    if (pane) {
                        if (k === targetKey) {
                            pane.classList.remove('hidden');
                        } else {
                            pane.classList.add('hidden');
                        }
                    }
                });

                setTimeout(function() {
                    if (targetKey === 'berita') {
                        var $bc = $('#berita-carousel');
                        if ($bc.length) {
                            $bc.trigger('refresh.owl.carousel');
                        }
                        var $ac = $('#artikel-carousel');
                        if ($ac.length) {
                            $ac.trigger('refresh.owl.carousel');
                        }
                    } else if (targetKey === 'galeri') {
                        var $gc = $('#galeri-kegiatan-carousel');
                        if ($gc.length) {
                            $gc.trigger('refresh.owl.carousel');
                        }
                        var $igc = $('#galeri-ig-carousel');
                        if ($igc.length) {
                            $igc.trigger('refresh.owl.carousel');
                        }
                    }
                }, 60);

                window.scrollTo({ top: 0, behavior: 'instant' });
            }

            function getActiveKey() {
                const hash = window.location.hash.replace('#', '').toLowerCase();
                if (tabKeys[hash]) return tabKeys[hash];

                const phpSub = '<?= $sub_menu ?>';
                if (tabKeys[phpSub]) return tabKeys[phpSub];

                return 'peraturan';
            }

            switchTab(getActiveKey());

            window.addEventListener('hashchange', function () {
                switchTab(getActiveKey());
            });

            document.querySelectorAll('a[href*="informasi"]').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href') || '';
                    const hashIndex = href.indexOf('#');
                    if (hashIndex !== -1) {
                        const rawHash = href.substring(hashIndex + 1).toLowerCase();
                        const key = tabKeys[rawHash] || 'peraturan';
                        switchTab(key);
                    } else {
                        if (window.location.pathname.indexOf('informasi') !== -1) {
                            e.preventDefault();
                            if (window.location.hash) {
                                history.pushState(null, '', '<?= base_url('informasi') ?>');
                            }
                            switchTab('peraturan');
                        }
                    }
                });
            });

            // Accordion Handler for Peraturan, Publikasi & PPID
            const ppidHeaders = document.querySelectorAll('.ppid-accordion-header');
            ppidHeaders.forEach(function(header) {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.ppid-accordion-icon');
                    const isOpen = content.classList.contains('opacity-100');

                    const item = this.closest('.ppid-accordion-item');
                    const group = item ? item.parentElement : null;
                    const siblingHeaders = group ? group.querySelectorAll('.ppid-accordion-header') : ppidHeaders;

                    siblingHeaders.forEach(function(h) {
                        const c = h.nextElementSibling;
                        const i = h.querySelector('.ppid-accordion-icon');

                        h.classList.add('bg-[#303752]', 'text-white');
                        h.classList.remove('bg-(--yellow-color)', 'text-[#303752]');

                        if (i) i.classList.remove('rotate-180');

                        c.classList.remove('max-h-[63.23vw]', 'max-md:max-h-[180vw]', 'opacity-100', 'py-[1.5vw]', 'max-md:py-[3.5vw]');
                        c.classList.add('max-h-0', 'opacity-0', 'py-0');
                    });

                    if (!isOpen) {
                        this.classList.remove('bg-[#303752]', 'text-white');
                        this.classList.add('bg-(--yellow-color)', 'text-[#303752]');

                        if (icon) icon.classList.add('rotate-180');

                        // Lazy load iframe PDF pas accordion dibuka
                        const iframe = content.querySelector('iframe[data-src]');
                        if (iframe && (!iframe.getAttribute('src') || iframe.getAttribute('src') === 'about:blank')) {
                            iframe.setAttribute('src', iframe.getAttribute('data-src'));
                        }

                        content.classList.remove('max-h-0', 'opacity-0', 'py-0');
                        content.classList.add('max-h-[63.23vw]', 'max-md:max-h-[180vw]', 'opacity-100', 'py-[1.5vw]', 'max-md:py-[3.5vw]');
                    }
                });
            });
        });
    </script>

    <style>
    @media (max-width: 768px) {
        .ppid-accordion-content.opacity-100 {
            max-height: 180vw !important;
        }
    }
    #galeri-kegiatan-carousel,
    #galeri-kegiatan-carousel .owl-stage-outer,
    #galeri-kegiatan-carousel .owl-stage,
    #galeri-ig-carousel,
    #galeri-ig-carousel .owl-stage-outer,
    #galeri-ig-carousel .owl-stage,
    #berita-carousel,
    #berita-carousel .owl-stage-outer,
    #berita-carousel .owl-stage,
    #artikel-carousel,
    #artikel-carousel .owl-stage-outer,
    #artikel-carousel .owl-stage {
        border-radius: 0 !important;
    }
    #galeri-kegiatan-carousel .item a,
    #galeri-kegiatan-carousel .item div,
    .galeri-kegiatan-card {
        /* aspect-ratio: 16 / 9 !important; */
        width: 100% !important;
        overflow: hidden !important;
    }
    #galeri-kegiatan-carousel img,
    .galeri-kegiatan-card img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center !important;
    }
    #galeri-ig-carousel .owl-stage-outer {
        padding: 0.5vw 0 1vw 0 !important;
        margin: -0.5vw 0 -1vw 0 !important;
    }
    #galeri-kegiatan-carousel .owl-dots,
    #galeri-ig-carousel .owl-dots,
    #berita-carousel .owl-dots,
    #artikel-carousel .owl-dots {
        display: flex;
        justify-content: center;
        gap: 0.4vw;
        margin-top: 1.5vw;
    }
    #galeri-kegiatan-carousel .owl-dot span,
    #galeri-ig-carousel .owl-dot span,
    #berita-carousel .owl-dot span,
    #artikel-carousel .owl-dot span {
        background: #cbd5e1 !important;
        width: 0.6vw !important;
        height: 0.6vw !important;
        border-radius: 9999px !important;
        display: inline-block;
        transition: all 0.3s;
    }
    #galeri-kegiatan-carousel .owl-dot.active span,
    #galeri-ig-carousel .owl-dot.active span,
    #berita-carousel .owl-dot.active span,
    #artikel-carousel .owl-dot.active span {
        background: #EAA90D !important;
        width: 1.8vw !important;
        border-radius: 9999px !important;
    }
    @media (max-width: 768px) {
        #galeri-kegiatan-carousel .owl-dots,
        #galeri-ig-carousel .owl-dots,
        #berita-carousel .owl-dots,
        #artikel-carousel .owl-dots {
            gap: 1.5vw;
            margin-top: 3vw;
        }
        #galeri-kegiatan-carousel .owl-dot span,
        #galeri-ig-carousel .owl-dot span,
        #berita-carousel .owl-dot span,
        #artikel-carousel .owl-dot span {
            width: 2vw !important;
            height: 2vw !important;
        }
        #galeri-kegiatan-carousel .owl-dot.active span,
        #galeri-ig-carousel .owl-dot.active span,
        #berita-carousel .owl-dot.active span,
        #artikel-carousel .owl-dot.active span {
            width: 6vw !important;
        }
    }
    </style>

    <?php $this->load->view('new_fe/components/footer_scripts'); ?>

    <script>
        $(document).ready(function() {
            var $beritaCarousel = $('#berita-carousel');
            if ($beritaCarousel.length) {
                $beritaCarousel.owlCarousel({
                    loop: true,
                    margin: 24,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        640: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        }
                    }
                });
            }

            var $artikelCarousel = $('#artikel-carousel');
            if ($artikelCarousel.length) {
                $artikelCarousel.owlCarousel({
                    loop: true,
                    margin: 24,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        640: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        }
                    }
                });
            }

            var $galeriCarousel = $('#galeri-kegiatan-carousel');
            if ($galeriCarousel.length) {
                $galeriCarousel.owlCarousel({
                    loop: true,
                    margin: 16,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        640: {
                            items: 2
                        },
                        1024: {
                            items: 4
                        }
                    }
                });
            }

            var $igCarousel = $('#galeri-ig-carousel');
            if ($igCarousel.length) {
                $igCarousel.owlCarousel({
                    loop: true,
                    margin: 24,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        640: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        }
                    }
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const publikasiData = <?= json_encode(
                array_map(function ($item) {
                    return [
                        'title' => $item['title'],
                        'pdfs'  => $item['pdfs'] ?? [],
                    ];
                }, $publikasi_items),
                JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
            ) ?>;


            document.querySelectorAll('.ppid-accordion-item').forEach(function (item) {

                const header = item.querySelector('.ppid-accordion-header');

                if (!header) {
                    return;
                }

                const title = header.querySelector('span')?.textContent.trim();

                const data = publikasiData.find(function (section) {
                    return section.title === title;
                });

                if (!data || !data.pdfs || data.pdfs.length === 0) {
                    return;
                }

                let currentPdf = 0;

                const preview = item.querySelector('.pdf-form-preview');
                const pdfTitle = item.querySelector('.pdf-form-title');
                const counter = item.querySelector('.pdf-form-counter');
                const download = item.querySelector('.pdf-form-download');

                const prevButton = item.querySelector('.pdf-form-prev');
                const nextButton = item.querySelector('.pdf-form-next');


                function updatePdf() {
                    const pdf = data.pdfs[currentPdf];
                    const pdfUrl = "<?= base_url() ?>" + pdf.file;

                    preview.src = pdfUrl;
                    pdfTitle.textContent = pdf.title;
                    counter.textContent =
                        `${currentPdf + 1} / ${data.pdfs.length}`;

                    download.href = pdfUrl;
                    download.setAttribute(
                        'download',
                        pdf.file.split('/').pop()
                    );
                }

                if (prevButton) {
                    prevButton.addEventListener('click', function (event) {
                        event.stopPropagation();
                        currentPdf--;
                        if (currentPdf < 0) {
                            currentPdf = data.pdfs.length - 1;
                        }
                        updatePdf();
                    });
                }

                if (nextButton) {
                    nextButton.addEventListener('click', function (event) {

                        event.stopPropagation();

                        currentPdf++;

                        if (currentPdf >= data.pdfs.length) {
                            currentPdf = 0;
                        }

                        updatePdf();
                    });
                }
            });
        });

        function openArtikelModal(el) {
            const title = el.getAttribute('data-title') || '';
            const img = el.getAttribute('data-img') || '';
            const url = el.getAttribute('data-url') || '';
            const rawContent = el.getAttribute('data-content') || '';

            const modalTitle = document.getElementById('modal-artikel-title');
            const modalImg = document.getElementById('modal-artikel-img');
            const modalLead = document.getElementById('modal-artikel-lead');
            const modalMain = document.getElementById('modal-artikel-main');
            const modalSource = document.getElementById('modal-artikel-source');
            const modalUrl = document.getElementById('modal-artikel-url');
            const modalUrlText = document.getElementById('modal-artikel-url-text');

            if (modalTitle) modalTitle.textContent = title;
            if (modalImg) modalImg.src = img;

            if (modalLead && modalMain) {
                modalLead.innerHTML = '';
                modalMain.innerHTML = '';

                const paragraphs = rawContent.split(/\n\s*\n/).map(p => p.trim()).filter(Boolean);

                if (paragraphs.length > 1) {
                    modalLead.innerHTML = '<p>' + paragraphs[0].replace(/\n/g, '<br>') + '</p>';
                    paragraphs.slice(1).forEach(p => {
                        modalMain.innerHTML += '<p>' + p.replace(/\n/g, '<br>') + '</p>';
                    });
                } else if (paragraphs.length === 1) {
                    const single = paragraphs[0];
                    if (single.length > 250) {
                        let splitIdx = single.indexOf('. ', 180);
                        if (splitIdx === -1 || splitIdx > 350) {
                            splitIdx = single.indexOf(' ', 220);
                        }
                        if (splitIdx !== -1) {
                            modalLead.innerHTML = '<p>' + single.slice(0, splitIdx + 1).replace(/\n/g, '<br>') + '</p>';
                            modalMain.innerHTML = '<p>' + single.slice(splitIdx + 1).replace(/\n/g, '<br>') + '</p>';
                        } else {
                            modalLead.innerHTML = '<p>' + single.replace(/\n/g, '<br>') + '</p>';
                        }
                    } else {
                        modalLead.innerHTML = '<p>' + single.replace(/\n/g, '<br>') + '</p>';
                    }
                }
            }

            // Tampilkan Source / URL di ujung jika ada
            if (modalSource && modalUrl && modalUrlText) {
                if (url && url !== '#' && url !== '') {
                    modalSource.classList.remove('hidden');
                    modalUrl.href = url;
                    modalUrlText.textContent = url;
                } else {
                    modalSource.classList.add('hidden');
                }
            }

            const modal = document.getElementById('modal-artikel');
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            const sidebarWrap = document.getElementById('beranda-sidebar-wrap');
            if (sidebarWrap) {
                sidebarWrap.style.setProperty('display', 'none', 'important');
            }
        }

        function closeArtikelModal() {
            const modal = document.getElementById('modal-artikel');
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }

            const sidebarWrap = document.getElementById('beranda-sidebar-wrap');
            if (sidebarWrap) {
                sidebarWrap.style.removeProperty('display');
            }
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeArtikelModal();
            }
        });
</script>