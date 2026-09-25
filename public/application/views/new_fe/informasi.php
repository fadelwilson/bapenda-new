<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Informasi']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'informasi', 'navbar_bg' => 'white']); ?>

    <section id="peraturan" class="py-[1.556vw] max-md:p-[2.051vw]">
        <div>
            <div class="px-[1.556vw] max-md:px-0 flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-3">
                <img src="<?= base_url('assets/images/new-info.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto">

                <h1 class="text-[5.669vw] text-[#EA6D0D] uppercase krona-one leading-none max-md:text-[12.308vw]">
                    Informasi
                </h1>
            </div>

            <div class="mt-[0.584vw] max-md:mt-[10.308vw] max-md:px-0">
                <h1 class="text-[4.669vw] px-[1vw] mt-[5vw] max-md:mt-[0vw] text-(--blue-color)  uppercase krona-one leading-none max-md:text-left max-md:text-[5.508vw] ">
                    Peraturan & Publikasi
                </h1>

                <!-- <h3 class="text-[2.852vw] px-[1vw] mt-[1.223vw] text-[#EA6D0D] leading-none uppercase geologica max-md:text-[5.231vw] max-md:text-left max-md:mt-[12.208vw]">
                    Definisi Pajak Daerah
                </h3>

                <div class="mt-[0.584vw] px-[1vw] max-md:mt-[3.077vw] max-md:p-[2.051vw]">
                    <p class="open-sans text-[0.778vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify">
                        Jenis pajak yang diterapkan di Negara Republik Indonesia dibagi menjadi dua jenis yaitu: (i) Pajak Pusat; dan (ii) Pajak Daerah. Berdasarkan BAB I, Pasal 1 angka 21 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2022 Tentang Pajak Daerah dan Retribusi Daerah, definisi Pajak Daerah adalah kontribusi wajib kepada daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan daerah bagi sebesar-besarnya kemakmuran rakyat.<br>
                        Jenis Pajak sebagaimana dimaksud dapat tidak dipungut apabila potensinya kurang memadai dan/atau disesuaikan dengan kebijakan Daerah yang ditetapkan dengan Peraturan Daerah. Pajak Daerah, yang selanjutnya disebut Pajak, adalah kontribusi wajib kepada Daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran rakyat.<br>
                        Pajak Kendaraan Bermotor<br>
                        Adapun Pajak Kendaraan Bermotor termasuk ke dalam jenis pajak provinsi yang merupakan bagian dari Pajak Daerah. Lebih lanjut, Pajak Kendaraan Bermotor sebagaimana yang didefinisikan dalam Pasal 1 angka 28 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2022 adalah pajak atas kepemilikan dan/atau penguasaan kendaraan bermotor. Dalam pelaksanaan pemungutannya dilakukan di kantor bersama samsat. Kantor Bersama SAMSAT ini melibatkan tiga instansi pemerintah, yaitu: Badan Pendapatan Daerah, Kepolisian Daerah Republik Indonesia, dan PT. (Persero) Asuransi Kerugian Jasa Raharja.
                    </p>
                </div> -->

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

                <div class="flex flex-col px-20 gap-[0.19vw] mt-[2.33vw] max-md:gap-[1.538vw] max-md:mt-[6.154vw]">
                    <?php foreach ($publikasi_items as $p_item): ?>

                        <div class="ppid-accordion-item">

                            <!-- Header -->
                            <button
                                type="button"
                                class="relative z-30 w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-[#303752] text-white jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 ppid-accordion-header max-md:text-[4.615vw] text-left max-md:p-[2.051vw]"
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

                <!-- <div class="mt-[1.556vw] max-md:mt-[6.154vw]">
                    <div class="grid grid-cols-4 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw]">
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="objek-pajak" style="background-image: url('<?= $bi ?>IMG-20260729-WA0012-4279738261 1.png')">
                                <div class="absolute inset-0 bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Objek Pajak</h3>
                            </div>
                            <div class="tab-accordion-content md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="objek-pajak">
                                Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan), BPHTB (perolehan hak atas tanah dan bangunan baik melalui jual beli, tukar menukar, hibah, maupun pemberian hak baru), PBJT (makanan/minuman, tenaga listrik, jasa perhotelan, jasa parkir, dan jasa kesenian &amp; hiburan), Pajak Reklame (semua jenis penyelenggaraan reklame), Pajak Air Tanah (pengambilan dan/atau pemanfaatan air tanah), Pajak MBLB (kegiatan pengambilan mineral bukan logam dan batuan), serta Pajak Sarang Burung Walet.
                            </div>
                        </div>

                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="subjek-wajib" style="background-image: url('<?= $bi ?>img20250923081406-2-68d242abed641541c5071bc2 1 (1).png')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Subjek &amp; Wajib Pajak</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="subjek-wajib">
                                Subjek pajak adalah orang pribadi atau badan yang dapat dikenakan pajak. Wajib pajak adalah orang pribadi atau badan yang mempunyai hak dan kewajiban perpajakan sesuai ketentuan perundang-undangan daerah.<br><br>
                                <strong>Subjek PBB-P2:</strong> Orang pribadi atau badan yang secara nyata memiliki hak atau memperoleh manfaat atas bumi dan/atau bangunan.<br>
                                <strong>Subjek BPHTB:</strong> Orang pribadi atau badan yang memperoleh hak atas tanah dan/atau bangunan.<br>
                                <strong>Subjek PBJT:</strong> Konsumen barang dan jasa tertentu; pengusaha bertindak sebagai pemungut pajak.<br>
                                <strong>Subjek Pajak Reklame:</strong> Orang pribadi atau badan yang menyelenggarakan reklame.
                            </div>
                        </div>

                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="dasar-pengenaan" style="background-image: url('<?= $bi ?>Screen Shot 2026-08-02 at 15.12.17 1 (1).png')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Dasar Pengenaan</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="dasar-pengenaan">
                                Dasar pengenaan pajak merupakan nilai/jumlah yang menjadi acuan menghitung besaran pajak terutang.<br><br>
                                <strong>PBB-P2:</strong> Nilai Jual Objek Pajak (NJOP) bumi dan/atau bangunan, ditetapkan berdasarkan harga rata-rata transaksi jual beli di pasaran.<br>
                                <strong>BPHTB:</strong> Nilai Perolehan Objek Pajak (NPOP), yaitu harga transaksi atau nilai pasar.<br>
                                <strong>PBJT:</strong> Jumlah yang dibayarkan konsumen untuk pembelian makanan/minuman, tagihan listrik, pembayaran hotel, biaya parkir, dan tiket hiburan.<br>
                                <strong>Pajak Reklame:</strong> Nilai sewa reklame dihitung berdasarkan ukuran, lokasi, jenis, dan jangka waktu penyelenggaraan.
                            </div>
                        </div>

                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="tarif" style="background-image: url('<?= $bi ?>0cf5493d8e01976457fd1b2a8035a1fe 1.png')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Tarif Pajak</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="tarif">
                                Tarif pajak daerah ditetapkan dengan Peraturan Daerah (Perda), dengan batas maksimum berdasarkan UU HKPD:<br><br>
                                • <strong>PBB-P2:</strong> Maks 0,5%<br>
                                • <strong>BPHTB:</strong> Maks 5%<br>
                                • <strong>PBJT Makanan/Minuman:</strong> Maks 10%<br>
                                • <strong>PBJT Tenaga Listrik:</strong> Maks 1,5% (industri), 3% (non-industri)<br>
                                • <strong>PBJT Perhotelan:</strong> Maks 10%<br>
                                • <strong>PBJT Parkir:</strong> Maks 10%<br>
                                • <strong>PBJT Hiburan Khusus:</strong> 40%–75%<br>
                                • <strong>Pajak Reklame:</strong> Maks 25%<br>
                                • <strong>Pajak Air Tanah:</strong> Maks 20%<br>
                                • <strong>Pajak MBLB:</strong> Maks 20%<br>
                                • <strong>Pajak Sarang Burung Walet:</strong> Maks 10%
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw] mt-[0.778vw] max-md:mt-[2.051vw]">
                        
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="masa-pajak" style="background-image: url('<?= $bi ?>img20250923081406-2-68d242abed641541c5071bc2 1 (2).png')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Masa Pajak</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="masa-pajak">
                                Masa pajak adalah jangka waktu dasar bagi wajib pajak untuk menghitung, menyetor, dan melaporkan pajak terutang.<br><br>
                                <strong>PBB-P2:</strong> Tahun pajak satu tahun kalender (1 Januari – 31 Desember).<br>
                                <strong>BPHTB:</strong> Saat terutang adalah sejak terjadinya perolehan hak.<br>
                                <strong>PBJT:</strong> Masa pajak adalah 1 (satu) bulan kalender.<br>
                                <strong>Pajak Reklame:</strong> Masa pajak disesuaikan dengan jangka waktu penyelenggaraan reklame.<br>
                                <strong>Pajak Air Tanah, MBLB, Sarang Burung Walet:</strong> Masa pajak adalah 1 (satu) bulan kalender.
                            </div>
                        </div>

                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="denda-pajak" style="background-image: url('<?= $bi ?>Screen Shot 2026-08-02 at 15.12.17 1 (2).png')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Denda Pajak</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="denda-pajak">
                                Denda pajak dikenakan apabila terjadi keterlambatan pembayaran atau pelanggaran kewajiban perpajakan:<br><br>
                                • Keterlambatan pembayaran dikenakan sanksi bunga <strong>2% per bulan</strong>.<br>
                                • Keterlambatan pelaporan SPTPD dikenakan denda administrasi sesuai jenis pajak.<br>
                                • Wajib pajak yang tidak memenuhi kewajiban pendaftaran dikenakan sanksi sesuai Perda.<br>
                                • SKPD Kurang Bayar diterbitkan apabila ditemukan pajak yang belum/kurang dibayar.<br>
                                • Pengenaan bunga paling lama <strong>24 bulan</strong>.
                            </div>
                        </div>

                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="mekanisme" style="background-image: url('<?= $bi ?>IMG-20260729-WA0012-4279738261 1 (1).png')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Mekanisme Pembayaran Pajak</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="mekanisme">
                                Mekanisme pembayaran pajak daerah di Kabupaten Purwakarta terintegrasi secara digital:<br><br>
                                <strong>1. Pendaftaran &amp; Pengajuan:</strong> Wajib pajak mendaftarkan diri ke BAPENDA untuk mendapatkan NPWPD.<br><br>
                                <strong>2. Penetapan &amp; Pemberitahuan:</strong> BAPENDA menerbitkan SKPD atau SPPT (untuk PBB-P2).<br><br>
                                <strong>3. Pembayaran:</strong> Melalui bank yang ditunjuk, payment point, atau saluran digital (mobile/internet banking).<br><br>
                                <strong>4. Pelaporan:</strong> Wajib pajak melaporkan SPTPD sesuai masa pajak. Keterlambatan dikenakan sanksi bunga 2% per bulan.
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#eaebee] w-full p-[2.724vw] text-[#303752] text-[0.778vw] jakarta-sans max-md:hidden">
                        <div class="text-justify leading-relaxed min-h-[7.3vw]" id="tab-content-text">
                            Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan), BPHTB (perolehan hak atas tanah dan bangunan baik melalui jual beli, tukar menukar, hibah, maupun pemberian hak baru), PBJT (makanan/minuman, tenaga listrik, jasa perhotelan, jasa parkir, dan jasa kesenian &amp; hiburan), Pajak Reklame (semua jenis penyelenggaraan reklame), Pajak Air Tanah (pengambilan dan/atau pemanfaatan air tanah), Pajak MBLB (kegiatan pengambilan mineral bukan logam dan batuan), serta Pajak Sarang Burung Walet.
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

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
    ];

    $berita_list = !empty($ShowDataBerita) ? $ShowDataBerita : $placeholder_berita;
    $is_berita_carousel = count($berita_list) > 3;
    ?>

    <section id="berita" class="px-[1.556vw] mt-[5.842vw] max-md:p-[2.051vw] max-md:mt-[12.308vw]">
        <h1 class="text-[4.669vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
            Berita
        </h1>

        <h3 class="text-[2.852vw] mt-[1vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5.223vw]">
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
    </div>

    <div class="px-[1.556vw] mt-[5.842vw] max-md:p-[2.051vw] max-md:mt-[12.308vw]">
        <h1 class="text-[4.669vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
            Artikel
        </h1>

        <h3 class="text-[2.852vw] mt-[1vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5.223vw]">
            Bapenda Purwakarta
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

    $is_carousel = count($galeri_kegiatan) > 4;
    ?>

    <section id="galeri" class="px-[1.556vw] mt-[5.842vw] max-md:p-[2.051vw] max-md:mt-[12.308vw]">
        <!-- <h1 class="text-[4.669vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw]">
            GALERI
        </h1>

        <h3 class="text-[2.852vw] mt-[1vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5.223vw]">
            Kegiatan Bapenda Purwakarta
        </h3> -->

        <!-- <?php if ($is_carousel): ?>
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
            <div class="grid grid-cols-4 max-md:grid-cols-1 gap-[1vw] max-md:gap-[8.205vw] mt-[2.335vw] max-md:mt-[6.154vw]">
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
        <?php endif; ?> -->

        <?php
        $galeri_path = FCPATH . 'assets/images/';
        $galeri_url  = base_url('assets/images/ig-galeri.png');

        $galeri_kegiatan = [];

        if (is_dir($galeri_path)) {
            $files = scandir($galeri_path);

            foreach ($files as $file) {
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                    $galeri_kegiatan[] = [
                        'thumb'    => $galeri_url . $file,
                        'judul'    => pathinfo($file, PATHINFO_FILENAME),
                        'video_url' => '#',
                    ];
                }
            }
        }

        $is_carousel = count($galeri_kegiatan) > 4;
        ?>

        <?php if ($is_carousel): ?>

        <!-- <div
            class="owl-carousel owl-theme mt-[10.335vw] max-md:mt-[6.154vw] relative"
            id="galeri-kegiatan-carousel"
        >

            <?php foreach ($galeri_kegiatan as $item): ?>

                <div class="item">
                    <div
                        class="group relative block w-full overflow-hidden bg-[#303752] galeri-kegiatan-card"
                    >
                        <img
                            src="<?= base_url('assets/images/ig-galeri.png') ?>"
                            alt="<?= htmlspecialchars($item['judul']) ?>"
                            class="w-full h-auto object-cover object-center group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <?php else: ?>
            <div
                class="grid grid-cols-4 max-md:grid-cols-1 gap-[1vw] max-md:gap-[8.205vw] mt-[2.335vw] max-md:mt-[6.154vw]"
            >

                <?php foreach ($galeri_kegiatan as $item): ?>

                    <div
                        class="group relative block w-full overflow-hidden galeri-kegiatan-card"
                    >
                        <img
                            src="<?= base_url('assets/images/ig-galeri.png') ?>"
                            alt="<?= htmlspecialchars($item['judul']) ?>"
                            class="w-full h-auto object-cover object-center group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>
    </div> -->

    <?php
    $ppid_items = [
        [
            'title'   => 'Pengajuan Keberatan',
            'image'   => 'assets/images/pengajuan-keberatan.png',
        ],
        [
            'title'   => 'Tugas PPID',
            'image'   => 'assets/images/tugas-ppid.jpg',
        ],
        [
            'title'   => 'Tata Cara Penyelesaian Sengketa Informasi',
            'image'   => 'assets/images/tata-cara-penyelesaian.png',
        ],
        [
            'title'   => 'QR SOP Permohonan Informasi',
            'image'   => 'assets/images/qrsop-permohonan.png',
        ],
        [
            'title'   => 'QR SOP Uji Konsekuensi',
            'image'   => 'assets/images/qrsop-uji.png',
        ],
        [
            'title'   => 'SOP Permohonan Informasi',
            'image'   => 'assets/images/sop-permohonan.png',
        ],
        [
            'title'   => 'Struktur PPID',
            'image'   => 'assets/images/struktur-ppid.png',
        ],
        [
            'title'   => 'Visi dan Misi PPID',
            'image'   => 'assets/images/visi-misi.jpg',
        ],
    ];
    ?>

    <!-- PPID Section -->
    <div class="relative px-[1.556vw] pt-[1.556vw] pb-0 mt-[5.842vw] max-md:px-[2.051vw] max-md:pt-[2.051vw] max-md:pb-0 max-md:mt-[12.308vw] overflow-hidden" id="ppid">
        <img src="<?= base_url('assets/images/batik_sunda1.png') ?>" alt="" class="absolute top-35 left-0 w-full h-[65%] max-md:h-[80%] object-cover object-bottom opacity-[4%] pointer-events-none -z-10">

        <h1 class="text-[4.669vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[10vw] relative z-30">
            PPID
        </h1>

        <h3 class="text-[2.852vw] mt-[1vw] text-[#EA6D0D] uppercase geologica leading-none max-md:text-[5vw] max-md:mt-[5.223vw] relative z-30">
            Penjabat Pengelola Informasi &amp; Dokumentasi
        </h3>

        <!-- Accordion Container -->
        <div class="flex flex-col gap-[0.19vw] mt-[2.33vw] max-md:gap-[1.538vw] max-md:mt-[6.154vw]">
            <?php foreach ($ppid_items as $p_item): ?>
                <div class="ppid-accordion-item">
                    <button type="button" class="relative z-30 w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-[#303752] text-white jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 ppid-accordion-header max-md:text-[4.615vw] text-left max-md:p-[2.051vw]">
                        <span><?= htmlspecialchars($p_item['title']) ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform ppid-accordion-icon max-md:size-[6.154vw]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <div class="relative z-0 max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-[#eaebee] text-[#303752] px-[2vw] max-md:px-[3.5vw] ppid-accordion-content">
                        <!-- <p class="jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.33vw] text-justify relative z-20">
                            <?= htmlspecialchars($p_item['content']) ?>
                        </p> -->
                        <div class="flex justify-center w-full">
                            <img
                                src="<?= base_url($p_item['image']) ?>"
                                alt="<?= htmlspecialchars($p_item['title']) ?>"
                                class="max-w-[30vw] h-auto object-contain"
                            >
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

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
            const tabContents = {
                'objek-pajak': `Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan), BPHTB (perolehan hak atas tanah dan bangunan baik melalui jual beli, tukar menukar, hibah, maupun pemberian hak baru), PBJT (makanan/minuman, tenaga listrik, jasa perhotelan, jasa parkir, dan jasa kesenian &amp; hiburan), Pajak Reklame (semua jenis penyelenggaraan reklame), Pajak Air Tanah (pengambilan dan/atau pemanfaatan air tanah), Pajak MBLB (kegiatan pengambilan mineral bukan logam dan batuan), serta Pajak Sarang Burung Walet.`,
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
            • <strong>PBB-P2:</strong> Maks 0,5%<br>
            • <strong>BPHTB:</strong> Maks 5%<br>
            • <strong>PBJT Makanan/Minuman:</strong> Maks 10%<br>
            • <strong>PBJT Tenaga Listrik:</strong> Maks 1,5% (industri), 3% (non-industri)<br>
            • <strong>PBJT Perhotelan:</strong> Maks 10%<br>
            • <strong>PBJT Parkir:</strong> Maks 10%<br>
            • <strong>PBJT Hiburan Khusus:</strong> 40%–75%<br>
            • <strong>Pajak Reklame:</strong> Maks 25%<br>
            • <strong>Pajak Air Tanah:</strong> Maks 20%<br>
            • <strong>Pajak MBLB:</strong> Sesuai ketentuan zonasi/jenis mineral`,
                'masa-pajak': `Masa pajak adalah jangka waktu dasar bagi wajib pajak untuk menghitung, menyetor, dan melaporkan pajak terutang.<br><br>
            <strong>PBB-P2:</strong> Tahun pajak satu tahun kalender (1 Januari – 31 Desember).<br>
            <strong>BPHTB:</strong> Saat terutang adalah sejak terjadinya perolehan hak.<br>
            <strong>PBJT:</strong> Masa pajak adalah 1 (satu) bulan kalender.<br>
            <strong>Pajak Reklame:</strong> Masa pajak disesuaikan dengan jangka waktu penyelenggaraan reklame.<br>
            <strong>Pajak Air Tanah, MBLB, Sarang Burung Walet:</strong> Masa pajak adalah 1 (satu) bulan kalender.`,
                'denda-pajak': `Denda pajak dikenakan apabila terjadi keterlambatan pembayaran atau pelanggaran kewajiban perpajakan:<br><br>
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

            const tabButtons = document.querySelectorAll('.tab-btn');
            const contentText = document.getElementById('tab-content-text');
            const accordionPanels = document.querySelectorAll('.tab-accordion-content');

            tabButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabKey = this.getAttribute('data-tab');
                    const targetPanel = document.querySelector(`.tab-accordion-content[data-tab-content="${tabKey}"]`);
                    const isCurrentlyOpenMobile = targetPanel && !targetPanel.classList.contains('hidden');

                    tabButtons.forEach(b => {
                        const o = b.querySelector('.tab-overlay');
                        const t = b.querySelector('.tab-text');
                        o.classList.remove('bg-white/70');
                        o.classList.add('bg-(--blue-color)/65');
                        t.classList.remove('text-(--blue-color)');
                        t.classList.add('text-white');
                    });

                    accordionPanels.forEach(p => {
                        p.classList.add('hidden');
                    });

                    if (isCurrentlyOpenMobile && window.innerWidth < 768) {
                        return;
                    }

                    const o = this.querySelector('.tab-overlay');
                    const t = this.querySelector('.tab-text');
                    o.classList.remove('bg-(--blue-color)/65');
                    o.classList.add('bg-white/70');
                    t.classList.remove('text-white');
                    t.classList.add('text-(--blue-color)');

                    if (targetPanel) {
                        targetPanel.classList.remove('hidden');
                    }

                    if (tabContents[tabKey] && contentText) {
                        contentText.innerHTML = tabContents[tabKey];
                    }
                });
            });

            // PPID Accordion Handler
            const ppidHeaders = document.querySelectorAll('.ppid-accordion-header');
            ppidHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.ppid-accordion-icon');
                    const isOpen = content.classList.contains('opacity-100');

                    ppidHeaders.forEach(h => {
                        const c = h.nextElementSibling;
                        const i = h.querySelector('.ppid-accordion-icon');

                        h.classList.add('bg-[#303752]', 'text-white');
                        h.classList.remove('bg-(--yellow-color)', 'text-[#303752]');

                        if (i) i.classList.remove('rotate-180');

                        c.classList.remove('max-h-[1000px]', 'opacity-100', 'py-[1.5vw]', 'max-md:py-[3.5vw]');
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
                        content.classList.add('max-h-[1000px]', 'opacity-100', 'py-[1.5vw]', 'max-md:py-[3.5vw]');
                    }
                });
            });
        });
    </script>

    <style>
    #galeri-kegiatan-carousel,
    #galeri-kegiatan-carousel .owl-stage-outer,
    #galeri-kegiatan-carousel .owl-stage,
    #berita-carousel,
    #berita-carousel .owl-stage-outer,
    #berita-carousel .owl-stage {
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
    #galeri-kegiatan-carousel .owl-dots,
    #berita-carousel .owl-dots {
        display: flex;
        justify-content: center;
        gap: 0.4vw;
        margin-top: 1.5vw;
    }
    #galeri-kegiatan-carousel .owl-dot span,
    #berita-carousel .owl-dot span {
        background: #cbd5e1 !important;
        width: 0.6vw !important;
        height: 0.6vw !important;
        border-radius: 9999px !important;
        display: inline-block;
        transition: all 0.3s;
    }
    #galeri-kegiatan-carousel .owl-dot.active span,
    #berita-carousel .owl-dot.active span {
        background: #EAA90D !important;
        width: 1.8vw !important;
        border-radius: 9999px !important;
    }
    @media (max-width: 768px) {
        #galeri-kegiatan-carousel .owl-dots,
        #berita-carousel .owl-dots {
            gap: 1.5vw;
            margin-top: 3vw;
        }
        #galeri-kegiatan-carousel .owl-dot span,
        #berita-carousel .owl-dot span {
            width: 2vw !important;
            height: 2vw !important;
        }
        #galeri-kegiatan-carousel .owl-dot.active span,
        #berita-carousel .owl-dot.active span {
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
</script>