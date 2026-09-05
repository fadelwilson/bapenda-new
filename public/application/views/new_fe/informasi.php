<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Informasi']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'informasi']); ?>

    <div class="px-[1.556vw] py-[1.556vw] max-md:p-[2.051vw]">
        <div>
            <h1 class="text-[4.669vw] text-(--text-title) uppercase krona-one leading-none max-md:text-[12.308vw]">
                Informasi
            </h1>

            <div class="px-[1.167vw] mt-[0.584vw] max-md:mt-[12.308vw] max-md:px-0">
                <h3 class="text-[2.335vw] text-(--blue-color) leading-none genos max-md:text-[9.231vw] max-md:text-center">
                    Definisi Pajak Daerah
                </h3>

                <div class="mt-[0.584vw] max-md:mt-[3.077vw] max-md:p-[2.051vw]">
                    <p class="open-sans text-[0.778vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify">
                        Jenis pajak yang diterapkan di Negara Republik Indonesia dibagi menjadi dua jenis yaitu: (i) Pajak Pusat; dan (ii) Pajak Daerah. Berdasarkan BAB I, Pasal 1 angka 21 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2022 Tentang Pajak Daerah dan Retribusi Daerah, definisi Pajak Daerah adalah kontribusi wajib kepada daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan daerah bagi sebesar-besarnya kemakmuran rakyat. <br/><br/>
                        Jenis Pajak sebagaimana dimaksud dapat tidak dipungut apabila potensinya kurang memadai dan/atau disesuaikan dengan kebijakan Daerah yang ditetapkan dengan Peraturan Daerah. Pajak Daerah, yang selanjutnya disebut Pajak, adalah kontribusi wajib kepada Daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran rakyat. <br/><br/>
                        <strong class="font-bold block text-(--blue-color) text-[0.875vw] max-md:text-[3.846vw]">Pajak Kendaraan Bermotor</strong>
                        Adapun Pajak Kendaraan Bermotor termasuk ke dalam jenis pajak provinsi yang merupakan bagian dari Pajak Daerah. Lebih lanjut, Pajak Kendaraan Bermotor sebagaimana yang didefinisikan dalam Pasal 1 angka 28 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2022 adalah pajak atas kepemilikan dan/atau penguasaan kendaraan bermotor. Dalam pelaksanaan pemungutannya dilakukan di kantor bersama samsat. Kantor Bersama SAMSAT ini melibatkan tiga instansi pemerintah, yaitu: Badan Pendapatan Daerah, Kepolisian Daerah Republik Indonesia, dan PT. (Persero) Asuransi Kerugian Jasa Raharja.
                    </p>
                </div>

                <?php $bi = base_url('assets/Informasi/'); ?>
                <div class="mt-[1.556vw] max-md:mt-[6.154vw]">
                    <!-- Baris 1: 4 Tab -->
                    <div class="grid grid-cols-4 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw]">
                        <!-- Tab 1: Objek Pajak (Active Default) -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:min-h-[13.128vw] max-md:h-auto flex items-end relative cursor-pointer tab-btn px-[0.584vw] pb-[0.292vw] max-md:px-[3.077vw] max-md:py-[2.051vw]" data-tab="objek-pajak" style="background-image: url('<?= $bi ?>IMG-20260729-WA0012-4279738261 1.png')">
                                <div class="absolute inset-0 bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-(--blue-color) leading-tight max-md:leading-[1.15] relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full">Objek Pajak</h3>
                            </div>
                            <div class="tab-accordion-content md:hidden bg-[#eaebee] w-full p-[4.103vw] text-[#303752] text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="objek-pajak">
                                Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan), BPHTB (perolehan hak atas tanah dan bangunan baik melalui jual beli, tukar menukar, hibah, maupun pemberian hak baru), PBJT (makanan/minuman, tenaga listrik, jasa perhotelan, jasa parkir, dan jasa kesenian &amp; hiburan), Pajak Reklame (semua jenis penyelenggaraan reklame), Pajak Air Tanah (pengambilan dan/atau pemanfaatan air tanah), Pajak MBLB (kegiatan pengambilan mineral bukan logam dan batuan), serta Pajak Sarang Burung Walet.
                            </div>
                        </div>

                        <!-- Tab 2: Subjek & Wajib Pajak -->
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

                        <!-- Tab 3: Dasar Pengenaan -->
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

                        <!-- Tab 4: Tarif Pajak -->
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

                    <!-- Baris 2: 3 Tab -->
                    <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw] mt-[0.778vw] max-md:mt-[2.051vw]">
                        <!-- Tab 5: Masa Pajak -->
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

                        <!-- Tab 6: Denda Pajak -->
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

                        <!-- Tab 7: Mekanisme Pembayaran Pajak -->
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

                    <!-- Desktop Shared Content Box -->
                    <div class="bg-[#eaebee] w-full p-[2.724vw] text-[#303752] text-[0.778vw] jakarta-sans max-md:hidden">
                        <div class="text-justify leading-relaxed min-h-[7.3vw]" id="tab-content-text">
                            Objek pajak adalah penghasilan, kekayaan, perbuatan, atau keadaan tertentu yang digunakan sebagai dasar pengenaan pajak. Berdasarkan UU HKPD, jenis pajak kabupaten/kota meliputi: PBB-P2 (bumi dan/atau bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan), BPHTB (perolehan hak atas tanah dan bangunan baik melalui jual beli, tukar menukar, hibah, maupun pemberian hak baru), PBJT (makanan/minuman, tenaga listrik, jasa perhotelan, jasa parkir, dan jasa kesenian &amp; hiburan), Pajak Reklame (semua jenis penyelenggaraan reklame), Pajak Air Tanah (pengambilan dan/atau pemanfaatan air tanah), Pajak MBLB (kegiatan pengambilan mineral bukan logam dan batuan), serta Pajak Sarang Burung Walet.
                        </div>
                    </div>
                </div>
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
            'is_local_asset'=> true,
        ],
        [
            'foto_berita'   => 'img20250923081406-2-68d242abed641541c5071bc2 1 (2).png',
            'judul_berita'  => 'Dongkrak Pendapatan, Purwakarta Justru Lakukan Dengan Langkah Keringanan',
            'narasi_berita' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.',
            'url_berita'    => base_url('blog'),
            'is_local_asset'=> true,
        ],
        [
            'foto_berita'   => 'Screen Shot 2026-08-02 at 15.12.17 1 (2).png',
            'judul_berita'  => 'Bapenda Band & Dancer - Juara 1 Festival Mobil Hias Hari Jadi Purwakarta',
            'narasi_berita' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.',
            'url_berita'    => base_url('blog'),
            'is_local_asset'=> true,
        ],
    ];

    $berita_list = !empty($ShowDataBerita) ? array_slice($ShowDataBerita, 0, 3) : $placeholder_berita;
    ?>

    <div class="px-[1.556vw] mt-[5.842vw] max-md:p-[2.051vw] max-md:mt-[12.308vw]">
        <h2 class="text-[4.669vw] text-(--text-title) uppercase krona-one leading-none max-md:text-[10vw]">
            BERITA &amp; ARTIKEL
        </h2>

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
                $judul_berita = !empty($dt['judul_berita']) ? $dt['judul_berita'] : 'Berita BAPENDA';

                $narasi_berita = !empty(trim(strip_tags($dt['narasi_berita'] ?? '')))
                    ? (mb_strlen(strip_tags($dt['narasi_berita'])) > 150 ? mb_substr(strip_tags($dt['narasi_berita']), 0, 150) . '...' : strip_tags($dt['narasi_berita']))
                    : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
                ?>
                <a href="<?= htmlspecialchars($url_berita) ?>" target="_blank" class="group flex flex-col no-underline">
                    <div class="relative w-full aspect-[390/280] overflow-hidden bg-[#303752]">
                        <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($judul_berita) ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" />
                    </div>

                    <div class="relative z-10 -mt-[3.891vw] max-md:-mt-[9.231vw] mx-auto w-[92%] self-center bg-[#303752] min-h-[6.5vw] max-md:min-h-[22vw] flex items-center justify-center p-[0.973vw] max-md:p-[3.077vw] shadow-md">
                        <h3 class="text-white text-[1.25vw] max-md:text-[4.615vw] font-bold text-center leading-snug genos line-clamp-3">
                            <?= htmlspecialchars($judul_berita) ?>
                        </h3>
                    </div>

                    <div class="mt-[0.973vw] max-md:mt-[3.077vw] px-[0.389vw]">
                        <p class="jakarta-sans text-[0.85vw] max-md:text-[3.59vw] text-[#303752] leading-relaxed text-justify line-clamp-4">
                            <?= htmlspecialchars($narasi_berita) ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    $ppid_items = [
        [
            'title'   => 'Info Tagihan PBB',
            'content' => 'Informasi mengenai tagihan PBB (Pajak Bumi dan Bangunan) dapat diakses melalui portal resmi BAPENDA atau langsung ke kantor BAPENDA Kabupaten Purwakarta. Pastikan NJOP dan data objek pajak Anda sudah tercatat dengan benar untuk memastikan kesesuaian nilai ketetapan pajak tahun berjalan.',
        ],
        [
            'title'   => 'Permohonan Keberatan / Pembatalan PBB',
            'content' => 'Wajib pajak dapat mengajukan keberatan atau pembatalan atas penetapan PBB apabila terdapat kesalahan data, sengketa kepemilikan, atau ketidaksesuaian NJOP. Persyaratan pengajuan meliputi: Surat permohonan bermaterai, fotokopi SPPT PBB yang diajukan keberatan, fotokopi identitas diri (KTP/KK), dan dokumen bukti kepemilikan pendukung (sertifikat tanah/AJB).',
        ],
        [
            'title'   => 'Permohonan Pelayanan SPPT, SKPD, SKPDLB dan Pembetulan SPPT, SKPD, STPD',
            'content' => 'Layanan penerbitan dan pembetulan dokumen ketetapan perpajakan daerah meliputi SPPT, SKPD, SKPDLB, dan STPD. Pengajuan dapat dilakukan untuk memperbaiki kekeliruan nama, alamat, luas bumi/bangunan, atau penyesuaian status wajib pajak secara langsung di loket BAPENDA.',
        ],
        [
            'title'   => 'Permohonan Mutasi Pecah / Pengabsahan Objek Pajak',
            'content' => 'Mutasi dan pemecahan pengabsahan objek pajak diperlukan saat terjadi perubahan kepemilikan atau pembagian bidang tanah. Persyaratan meliputi: Formulir SPOP/LSPOP terisi lengkap, fotokopi SPPT/SKPD tahun berjalan lunas, fotokopi sertifikat tanah hasil pemecahan, fotokopi KTP pemohon, dan bukti pelunasan PBB 5 tahun terakhir.',
        ],
        [
            'title'   => 'Permohonan Pendataan Objek Baru PBB',
            'content' => 'Pendataan objek pajak baru PBB ditujukan untuk tanah dan/atau bangunan yang belum terdaftar dalam basis data perpajakan daerah. Persyaratan: Sertifikat tanah atau Surat Keterangan Tanah dari desa/kelurahan, Akta Jual Beli (AJB), fotokopi KTP/KK pemohon, gambar denah lokasi objek pajak, serta persetujuan bangunan gedung (PBG/IMB jika ada).',
        ],
        [
            'title'   => 'Persyaratan Permohonan Pemrosesan dan Pembebasan Pajak',
            'content' => 'Pengajuan keringanan hingga pembebasan pajak daerah dapat diajukan oleh wajib pajak yang memenuhi kriteria sesuai ketentuan Peraturan Daerah (misalnya pensiunan, lahan sosial/ibadah, atau cagar budaya). Pemohon wajib melampirkan surat permohonan resmi, surat keterangan tidak mampu/SK pensiun, fotokopi SPPT PBB, dan fotokopi KTP.',
        ],
        [
            'title'   => 'Persyaratan Permohonan Mutasi / Inbreng / Balik Nama Objek Pajak',
            'content' => 'Layanan mutasi balik nama atau inbreng (penyertaan modal tanah/bangunan ke badan hukum) membutuhkan kelengkapan akta otentik notaris/PPAT, fotokopi identitas pemohon dan badan usaha, bukti pelunasan seluruh kewajiban pajak daerah terkait, serta verifikasi fisik lapangan oleh petugas BAPENDA.',
        ],
    ];
    ?>

    <!-- PPID Section -->
    <div class="relative px-[1.556vw] pt-[1.556vw] pb-0 mt-[5.842vw] max-md:px-[2.051vw] max-md:pt-[2.051vw] max-md:pb-0 max-md:mt-[12.308vw] overflow-hidden" id="ppid">
        <img src="<?= base_url('assets/gambar/batik_sunda1.png') ?>" alt="" class="absolute top-35 left-0 w-full h-[65%] max-md:h-[80%] object-cover object-bottom opacity-[4%] pointer-events-none -z-10">

        <h2 class="text-[4.669vw] text-(--text-title) uppercase krona-one leading-none max-md:text-[10vw] relative z-30">
            PPID
        </h2>

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
                        <p class="jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.33vw] text-justify relative z-20">
                            <?= htmlspecialchars($p_item['content']) ?>
                        </p>
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

        <img src="<?= base_url('assets/saran/tower 1.png') ?>" alt="" class="absolute -right-[2.051vw] -bottom-10 h-[44vw] w-auto pointer-events-none z-10 max-md:hidden">
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
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
            btn.addEventListener('click', function () {
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
            header.addEventListener('click', function () {
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

                    content.classList.remove('max-h-0', 'opacity-0', 'py-0');
                    content.classList.add('max-h-[1000px]', 'opacity-100', 'py-[1.5vw]', 'max-md:py-[3.5vw]');
                }
            });
        });
    });
    </script>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>