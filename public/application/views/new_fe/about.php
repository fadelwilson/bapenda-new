<?php
$foldervisi = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/visi/';
$foldermisi = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/misi/';
$folderinformasi = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/informasi/';
$folderalur = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/alur/';

$visi_img = !empty($ShowDataVisi[0]['foto_visi']) ? $foldervisi . $ShowDataVisi[0]['foto_visi'] : base_url('assets/gambar/full-gallery-image-1.jpg');
$misi_img = !empty($ShowDataMisi[0]['foto_misi']) ? $foldermisi . $ShowDataMisi[0]['foto_misi'] : base_url('assets/gambar/full-gallery-image-2.jpg');
$informasi_img = !empty($ShowDataInformasi[0]['foto_seputar']) ? $folderinformasi . $ShowDataInformasi[0]['foto_seputar'] : base_url('assets/gambar/full-gallery-image-3.jpg');
$alur_img = !empty($ShowDataAlur[0]['foto_alur']) ? $folderalur . $ShowDataAlur[0]['foto_alur'] : base_url('assets/gambar/full-gallery-image-4.jpg');

$this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Tentang Kami']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'profil']); ?>

    <div class="flex flex-col">
        <!-- Section: Tentang Kami -->
        <div class="max-md:order-3 relative px-[1.556vw] py-[1.556vw] max-md:p-[2.051vw] max-md:mt-[5.447vw]">
            <div class="hidden max-md:block absolute bottom-2 left-0 w-full h-[153.846vw] bg-no-repeat bg-cover bg-center opacity-[4%] pointer-events-none z-0" style="background-image: url('<?= base_url('assets/gambar/batik_sunda1.png') ?>');"></div>

            <h1 class="relative z-10 text-[4.669vw] text-(--text-title) uppercase krona-one leading-none max-md:text-[9.231vw]">
                Tentang Kami
            </h1>
    
            <div class="relative z-10 px-[1.167vw] mt-[0.584vw] max-md:px-0 max-md:mt-0">
                <h3 class="text-[2.335vw] text-(--blue-color) genos leading-none max-md:text-[9.231vw] max-md:mt-[16.41vw]">
                    Tentang BAPENDA
                </h3>
        
                <p class="jakarta-sans text-[0.778vw] w-[40%] pt-[0.195vw] max-md:text-[3.59vw] max-md:w-full max-md:mt-[2.051vw]">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, doloremque. Quisquam laudantium odio accusamus ipsam obcaecati fuga consequuntur pariatur ad nobis laborum ducimus eligendi rerum blanditiis beatae, impedit magni nisi. Ipsa ea perferendis, doloremque a inventore eaque nesciunt? Laboriosam sunt maiores, illum temporibus sed, itaque officia maxime natus, perferendis sapiente voluptatem sint a facere magnam vitae. Totam, dolore optio itaque velit nostrum dignissimos dolor ad. Labore quod quasi amet debitis ex fugiat, obcaecati similique maxime officia consectetur. Assumenda beatae amet perspiciatis eaque repellat explicabo, quidem dolor laudantium sint debitis magni quae saepe nam vero accusamus perferendis suscipit! Voluptatum, dignissimos delectus.    
                </p>
    
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw] mt-[1.556vw] max-md:mt-0 w-[60%] max-md:w-full pt-[2.724vw] max-md:py-[8.205vw]">
                    <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end justify-start relative z-10 cursor-pointer preview-btn" data-preview="<?= $visi_img ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 text-left max-md:text-[8.205vw] max-md:w-full max-md:text-left">Visi Bapenda</h3>
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end justify-end relative z-10 cursor-pointer preview-btn" data-preview="<?= $misi_img ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-2.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 text-right max-md:text-[8.205vw] max-md:w-full max-md:text-right">Misi Bapenda</h3>    
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end justify-start relative z-10 cursor-pointer preview-btn" data-preview="<?= $informasi_img ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-3.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 text-left max-md:text-[8.205vw] max-md:w-full max-md:text-left">Informasi</h3>
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end justify-end relative z-10 cursor-pointer preview-btn" data-preview="<?= $alur_img ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-4.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 text-right max-md:text-[8.205vw] max-md:w-full max-md:text-right">Alur Pembayaran</h3>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Section: Profil -->
        <div class="max-md:order-1 px-[1.556vw] mt-[15.953vw] max-md:mt-0 max-md:p-[2.051vw]">
            <h1 class="text-[4.669vw] text-(--text-title) uppercase krona-one leading-none max-md:text-[12.308vw]">
                Profil
            </h1>
    
            <div class="px-[1.167vw] mt-[0.584vw] max-md:mt-[12.308vw] max-md:px-0">
                <h3 class="text-[2.335vw] text-(--blue-color) genos leading-none max-md:text-[9.231vw] max-md:text-center">
                    Struktur Organisasi
                </h3>
        
                <div class="flex flex-col items-center justify-center gap-6 mt-[0.778vw] max-md:mt-[4.103vw]">
                    <?php
                    $folder_struk = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/tentangkami/struktur/';
                    $has_struktur = false;
                    ?>
                    <?php if (!empty($ShowDataStruktur)) : ?>
                        <?php foreach ($ShowDataStruktur as $dt) : ?>
                            <?php if (!empty($dt['foto_struk'])) : $has_struktur = true; ?>
                                <div class="cursor-pointer preview-btn flex justify-center w-full" data-preview="<?= $folder_struk . $dt['foto_struk'] ?>">
                                    <img src="<?= $folder_struk . $dt['foto_struk'] ?>" alt="Struktur Organisasi" class="!w-[65%] max-md:!w-full h-auto object-contain">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (!$has_struktur) : ?>
                        <div class="cursor-pointer preview-btn flex justify-center w-full" data-preview="<?= base_url('assets/gambar/struktur 1.png') ?>">
                            <img src="<?= base_url('assets/gambar/struktur 1.png') ?>" alt="Struktur Organisasi" class="!w-[65%] max-md:!w-full h-auto object-contain">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Section: Tugas Pokok dan Fungsi -->
        <div class="max-md:order-2 mt-[5.447vw] max-md:p-[2.051vw]">
            <h3 class="text-[2.335vw] text-(--blue-color) genos text-center max-md:text-[9.231vw] max-md:text-center">
                Tugas Pokok dan Fungsi
            </h3>

            <div class="pt-[10.117vw] max-md:pt-0 mt-[2.335vw] pb-[3.113vw] relative">
                <div class="absolute max-md:hidden inset-0 bg-repeat bg-left-top opacity-10 pointer-events-none" style="background-image: url('<?= base_url('assets/gambar/batik_sunda1.png') ?>'); z-index: 0; background-size: 1280px auto;"></div>
                <!-- Wayang Arjuna decoration -->
                <img src="<?= base_url('assets/gambar/andkomin-arjuna.png') ?>" alt="" class="absolute max-md:hidden right-[1vw] top-[-5vw] h-[50vw] w-auto opacity-90 pointer-events-none z-0">
                <div class="relative z-10">
                    <div class="grid grid-cols-4 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw]">
                        <!-- Tab 1: Dasar Hukum -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer tab-btn" data-tab="hukum" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                                <div class="absolute inset-0 bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-left">Dasar Hukum</h3>
                            </div>
                            <div class="tab-accordion-content md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="hukum">
                                Pengelolaan pendapatan daerah oleh Badan Pendapatan Daerah Kabupaten Purwakarta berlandaskan pada Peraturan Daerah Kabupaten Purwakarta Nomor 3 Tahun 2021 tentang Pajak Daerah dan Retribusi Daerah, serta Peraturan Bupati Purwakarta Nomor 87 Tahun 2022 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Badan Pendapatan Daerah.
                            </div>
                        </div>

                        <!-- Tab 2: Kedudukan -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer tab-btn" data-tab="kedudukan" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-right">Kedudukan</h3>    
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="kedudukan">
                                Badan Pendapatan Daerah merupakan unsur pelaksana fungsi penunjang urusan pemerintahan bidang keuangan sub pengelolaan pendapatan daerah. Badan Pendapatan Daerah dipimpin oleh Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah.
                            </div>
                        </div>

                        <!-- Tab 3: Tugas -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer tab-btn" data-tab="tugas" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-left">Tugas</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="tugas">
                                Badan Pendapatan Daerah mempunyai tugas membantu Bupati melaksanakan fungsi penunjang urusan pemerintahan yang menjadi kewenangan daerah bidang keuangan aspek pendapatan daerah meliputi pendaftaran, pendataan, penetapan, penagihan, keberatan, serta evaluasi dan pelaporan pendapatan daerah.
                            </div>
                        </div>

                        <!-- Tab 4: Fungsi -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer tab-btn" data-tab="fungsi" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                                <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-right">Fungsi</h3>
                            </div>
                            <div class="tab-accordion-content hidden md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[3.59vw] jakarta-sans text-justify leading-relaxed" data-tab-content="fungsi">
                                Dalam melaksanakan tugasnya, Badan Pendapatan Daerah menyelenggarakan fungsi:<br><br>
                                1. Penyusunan kebijakan teknis pengelolaan pajak dan retribusi daerah.<br>
                                2. Pelaksanaan pendaftaran dan pendataan wajib pajak/retribusi daerah.<br>
                                3. Penetapan besaran pajak daerah.<br>
                                4. Penagihan aktif dan penyelesaian sengketa pajak.<br>
                                5. Pengawasan, pengendalian, dan evaluasi penerimaan daerah.<br>
                                6. Pengelolaan administrasi umum, kepegawaian, keuangan, dan aset badan.
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Shared Content Box -->
                    <div class="bg-(--blue-color)/60 w-full p-[2.724vw] text-white text-[0.778vw] jakarta-sans max-md:hidden">
                        <div class="text-justify leading-relaxed min-h-[7.3vw]" id="tab-content-text">
                            Pengelolaan pendapatan daerah oleh Badan Pendapatan Daerah Kabupaten Purwakarta berlandaskan pada Peraturan Daerah Kabupaten Purwakarta Nomor 3 Tahun 2021 tentang Pajak Daerah dan Retribusi Daerah, serta Peraturan Bupati Purwakarta Nomor 87 Tahun 2022 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Badan Pendapatan Daerah.
                        </div>
                    </div>
                </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tabContents = {
                    hukum: `Pengelolaan pendapatan daerah oleh Badan Pendapatan Daerah Kabupaten Purwakarta berlandaskan pada Peraturan Daerah Kabupaten Purwakarta Nomor 3 Tahun 2021 tentang Pajak Daerah dan Retribusi Daerah, serta Peraturan Bupati Purwakarta Nomor 87 Tahun 2022 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Badan Pendapatan Daerah.`,
                    kedudukan: `Badan Pendapatan Daerah merupakan unsur pelaksana fungsi penunjang urusan pemerintahan bidang keuangan sub pengelolaan pendapatan daerah. Badan Pendapatan Daerah dipimpin oleh Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah.`,
                    tugas: `Badan Pendapatan Daerah mempunyai tugas membantu Bupati melaksanakan fungsi penunjang urusan pemerintahan yang menjadi kewenangan daerah bidang keuangan aspek pendapatan daerah meliputi pendaftaran, pendataan, penetapan, penagihan, keberatan, serta evaluasi dan pelaporan pendapatan daerah.`,
                    fungsi: `Dalam melaksanakan tugasnya, Badan Pendapatan Daerah menyelenggarakan fungsi:<br><br>
                        1. Penyusunan kebijakan teknis pengelolaan pajak dan retribusi daerah.<br>
                        2. Pelaksanaan pendaftaran dan pendataan wajib pajak/retribusi daerah.<br>
                        3. Penetapan besaran pajak daerah.<br>
                        4. Penagihan aktif dan penyelesaian sengketa pajak.<br>
                        5. Pengawasan, pengendalian, dan evaluasi penerimaan daerah.<br>
                        6. Pengelolaan administrasi umum, kepegawaian, keuangan, dan aset badan.`
                };

                const tabButtons = document.querySelectorAll('.tab-btn');
                const contentText = document.getElementById('tab-content-text');
                const accordionPanels = document.querySelectorAll('.tab-accordion-content');

                if (tabButtons.length === 0) return;

                tabButtons.forEach(btn => {
                    btn.addEventListener('click', function () {
                        const tabKey = this.getAttribute('data-tab');
                        const targetPanel = document.querySelector(`.tab-accordion-content[data-tab-content="${tabKey}"]`);
                        const isCurrentlyOpenMobile = targetPanel && !targetPanel.classList.contains('hidden');

                        tabButtons.forEach(b => {
                            const overlay = b.querySelector('.tab-overlay');
                            const text = b.querySelector('.tab-text');
                            
                            overlay.classList.remove('bg-white/70');
                            overlay.classList.add('bg-(--blue-color)/65');
                            
                            text.classList.remove('text-(--blue-color)');
                            text.classList.add('text-white');
                        });

                        accordionPanels.forEach(p => {
                            p.classList.add('hidden');
                        });

                        if (isCurrentlyOpenMobile && window.innerWidth < 768) {
                            return;
                        }

                        const overlay = this.querySelector('.tab-overlay');
                        const text = this.querySelector('.tab-text');
                        
                        overlay.classList.remove('bg-(--blue-color)/65');
                        overlay.classList.add('bg-white/70');
                        
                        text.classList.remove('text-white');
                        text.classList.add('text-(--blue-color)');

                        if (targetPanel) {
                            targetPanel.classList.remove('hidden');
                        }
                        if (tabContents[tabKey] && contentText) {
                            contentText.innerHTML = tabContents[tabKey];
                        }
                    });
                });

                const previewBtns = document.querySelectorAll('.preview-btn');
                previewBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const imgUrl = this.getAttribute('data-preview');
                        if (!imgUrl) return;
                        
                        const img = new Image();
                        img.src = imgUrl;
                        
                        const viewer = new Viewer(img, {
                            toolbar: true,
                            navbar: false,
                            title: false,
                            tooltip: true,
                            movable: true,
                            scalable: true,
                            transition: true,
                            fullscreen: true,
                            hidden: function() {
                                viewer.destroy();
                            }
                        });
                        viewer.show();
                    });
                });
            });
            </script>
        </div>
    </div>

    <footer class="relative overflow-visible mt-[11.67vw] max-md:mt-0">
        <img src="<?= base_url('assets/gambar/arjuna_woawan.png') ?>" alt="" class="hidden max-md:block absolute right-0 bottom-0 h-[200vw] w-auto pointer-events-none z-0">

        <div class="relative z-10 w-full p-[1.751vw] text-(--blue-color) text-[0.584vw] jakarta-sans max-md:text-[2.564vw]">
            <div class="text-center">
                Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
            </div>
        </div>
    </footer>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>