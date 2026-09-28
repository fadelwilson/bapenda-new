<?php
$foldervisi = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/visi/';
$foldermisi = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/misi/';
$folderinformasi = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/informasi/';
$folderalur = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/alur/';

$visi_img = !empty($ShowDataVisi[0]['foto_visi']) ? $foldervisi . $ShowDataVisi[0]['foto_visi'] : base_url('assets/images/full-gallery-image-1.webp');
$misi_img = !empty($ShowDataMisi[0]['foto_misi']) ? $foldermisi . $ShowDataMisi[0]['foto_misi'] : base_url('assets/images/full-gallery-image-2.webp');
$informasi_img = !empty($ShowDataInformasi[0]['foto_seputar']) ? $folderinformasi . $ShowDataInformasi[0]['foto_seputar'] : base_url('assets/images/full-gallery-image-3.webp');
$alur_img = !empty($ShowDataAlur[0]['foto_alur']) ? $folderalur . $ShowDataAlur[0]['foto_alur'] : base_url('assets/images/full-gallery-image-4.webp');

$this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Tentang Kami']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'profil', 'navbar_bg' => 'white']); ?>

    <div class="flex flex-col">
        <!-- Section 1: Header Profil & Struktur Organisasi -->
        <div class="relative px-[1.556vw] py-[1.556vw] max-md:p-[2.051vw]">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-[4.103vw]">
                <img src="<?= base_url('assets/images/bapenda-blue.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto max-md:ml-[1.952vw] max-md:mt-[1.595vw]">

                <h1 class="text-[4.67vw] max-md:text-[9.231vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                    Profil
                </h1>
            </div>
    
            <div class="relative z-10 px-[1.167vw] mt-[7.3vw] max-md:px-[2.051vw] max-md:mt-[5.641vw]">
                <h1 class="text-[4.47vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[7.692vw]">
                    STRUKTUR ORGANISASI
                </h1>
    
                <div class="mt-[2.72vw] max-md:mt-[6vw]">
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
                            <div class="cursor-pointer preview-btn flex justify-center w-full" data-preview="<?= base_url('assets/images/struktur 1.png') ?>">
                                <img src="<?= base_url('assets/images/struktur 1.png') ?>" alt="Struktur Organisasi" class="!w-[65%] max-md:!w-full h-auto object-contain">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Profil & Visi Misi (Tabs: Tentang Kami, Visi, Misi) -->
        <div class="mt-[5.447vw] max-md:mt-0 max-md:p-[4.103vw]">
            <div class="px-[2.723vw] max-md:px-0">
                <h1 class="text-[4.47vw] text-(--blue-color) uppercase krona-one leading-none max-md:text-[7.692vw] z-10 max-md:py-[4.103vw]">
                    Seputar Bapenda Purwakarta
                </h1>
            </div>

            <div class="pt-[10.117vw] max-md:pt-[4.103vw] max-md:mt-0 mt-[2.335vw] pb-[3.113vw] relative">
                <div class="absolute max-md:hidden inset-0 bg-repeat bg-left-top opacity-3 pointer-events-none" style="background-image: url('<?= base_url('assets/images/batik_sunda1.png') ?>'); z-index: -2; background-size: 1280px auto;"></div>
                <!-- Wayang Arjuna decoration -->
                <img src="<?= base_url('assets/images/andkomin-arjuna.png') ?>" alt="" class="absolute max-md:hidden right-[1vw] top-[-7vw] h-[50vw] w-auto opacity-75 pointer-events-none -z-1">
                <div class="relative z-10 max-md:px-0">
                    <div class="grid grid-cols-3 max-md:grid-cols-1 gap-[0.778vw] max-md:gap-[2.051vw]">
                        <!-- Tab 1: Tentang Kami -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer about-tab-btn" data-about-tab="tentangkami" style="background-image: url('<?= base_url('assets/images/full-gallery-image-1.webp') ?>')">
                                <div class="absolute inset-0 bg-white/70 transition-all duration-300 about-tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-(--blue-color) leading-none relative uppercase transition-all duration-300 about-tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-left">Tentang Kami</h3>
                            </div>
                            <div class="about-tab-accordion-content md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[0.78vw] max-md:text-[3.077vw] jakarta-sans text-justify leading-relaxed" data-about-tab-content="tentangkami">
                                <p class="leading-relaxed">
                                    Badan Pendapatan Daerah Kabupaten Purwakarta merupakan unsur pelaksana urusan pemerintahan bidang fungsi penunjang keuangan yang menjadi kewenangan daerah. Dipimpin oleh Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah, BAPENDA berkomitmen mengelola dan mengoptimalkan pendapatan daerah demi mewujudkan tata kelola pemerintahan yang baik, bersih, dan profesional untuk Purwakarta Istimewa.
                                </p>
                            </div>
                        </div>

                        <!-- Tab 2: Visi -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer about-tab-btn" data-about-tab="visi" style="background-image: url('<?= base_url('assets/images/full-gallery-image-2.webp') ?>')">
                                <div class="absolute inset-0 bg-[#EA6D0D]/65 group-hover:bg-white/70 transition-all duration-300 about-tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 about-tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-right">Visi</h3>
                            </div>
                            <div class="about-tab-accordion-content hidden md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[0.78vw] max-md:text-[3.077vw] jakarta-sans text-justify leading-relaxed" data-about-tab-content="visi">
                                <div class="space-y-4 text-justify leading-relaxed">
                                    <div class="border-b border-white/20 pb-2 mb-3">
                                        <h4 class="text-[1.2vw] max-md:text-[4.5vw] font-bold text-(--yellow-color) geologica uppercase leading-tight">VISI</h4>
                                        <p class="text-[0.85vw] max-md:text-[3.2vw] text-white/80 font-medium">Badan Pendapatan Daerah Kab. Purwakarta</p>
                                    </div>
                                    <div class="space-y-3">
                                        <p>
                                            <strong>1.</strong> Badan Pendapatan Daerah Kabupaten Purwakarta sebagai salah satu institusi pada pemerintah Kabupaten Purwakarta diharapkan mampu mengemban tugas dan tanggung jawab yang diberikan oleh Bupati dan Masyarakat, sebagaimana tercermin dalam peraturan daerah Kabupaten Purwakarta nomer 9 tahun 2016 tentang pembentukan dan susunan perangkat daerah Kabupaten Purwakarta (Lembaran Daerah Kabupaten Purwakarta nomer 9 tahun 2016) dan peraturan Bupati Purwakarta nomer 148 tahun 2016 tentang kedudukan, Susunan Organisasi, Tugas dan fungsi serta tata kerja perangkat daerah. Dengan peraturan daerah tersebut Badan Pendapatan Daerah Kabupaten Purwakarta mempunyai kewenangan dalam pengelolaan pendapatan daerah yang mengarah pada peningkatan penyelenggaraan pelayanan publik yang transparan dan Profesional.
                                        </p>
                                        <p>
                                            <strong>2.</strong> Sebagai Koordinator dalam pemungutan pajak/retribusi daerah dan pendapatan lainnya yang sah, maka Badan Pendapatan Daerah Kabupaten Purwakarta harus mampu melayani dan bekerja secara profesional, selain itu sebagai perencana dan penggali pendapatan Asli Daerah (PAD). Badan Pendapatan Daerah Kabupaten Purwakarta harus mampu menggali potensi dan meningkatkan pendapatan daerah, sebagai upaya mewujudkan Purwakarta Istimewa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3: Misi -->
                        <div>
                            <div class="group bg-cover bg-center h-[3.113vw] max-md:h-[13.128vw] flex items-end relative cursor-pointer about-tab-btn" data-about-tab="misi" style="background-image: url('<?= base_url('assets/images/full-gallery-image-3.webp') ?>')">
                                <div class="absolute inset-0 bg-[#EA6D0D]/65 group-hover:bg-white/70 transition-all duration-300 about-tab-overlay"></div>
                                <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 about-tab-text text-left max-md:text-[8.205vw] max-md:w-full max-md:text-left">Misi</h3>
                            </div>
                            <div class="about-tab-accordion-content hidden md:hidden bg-(--blue-color)/60 w-full p-[4.103vw] text-white text-[0.78vw] max-md:text-[3.077vw] jakarta-sans text-justify leading-relaxed" data-about-tab-content="misi">
                                <div class="space-y-4 text-justify leading-relaxed">
                                    <div class="border-b border-white/20 pb-2 mb-3">
                                        <h4 class="text-[1.2vw] max-md:text-[4.5vw] font-bold text-(--yellow-color) geologica uppercase leading-tight">MISI</h4>
                                        <p class="text-[0.85vw] max-md:text-[3.2vw] text-white/80 font-medium">Badan Pendapatan Daerah Kab. Purwakarta</p>
                                    </div>
                                    <div class="space-y-4">
                                        <div>
                                            <p class="font-semibold text-white">1. Meningkatkan transparansi dan profesionalisme aparatur dalam pelayanan pajak daerah.</p>
                                            <p class="text-white/90 mt-1 pl-4 border-l-2 border-(--yellow-color)">
                                                Misi ini mengandung makna bahwa sebagai koordinator pendapatan daerah, maka Badan Pendapatan Daerah Kabupaten Purwakarta harus mampu melakukan koordinasi secara baik dengan instansi terkait dan menggugah kesadaran masyarakat selaku Wajib Pajak daerah dalam membayar pajak.
                                            </p>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-white">2. Meningkatkan transparansi dan profesionalisme aparatur dalam pelayanan pajak daerah.</p>
                                            <p class="text-white/90 mt-1 pl-4 border-l-2 border-(--yellow-color)">
                                                Misi ini mengandung makna bahwa dalam rangka meningkatkan PAD. Badan Pendapatan Daerah Kabupaten Purwakarta harus meningkatkan pelayanan kepada Wajib Pajak yang mudah, nyaman dan cepat serta transparan dengan didukung sistem teknologi informasi yang handal.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Shared Content Box -->
                    <div class="bg-(--blue-color)/60 w-full px-[2.723vw] py-[2.724vw] text-white text-[0.778vw] jakarta-sans max-md:hidden">
                        <div class="text-justify leading-relaxed min-h-[7.3vw]" id="about-tab-content-text">
                            <p class="leading-relaxed">
                                Badan Pendapatan Daerah Kabupaten Purwakarta merupakan unsur pelaksana urusan pemerintahan bidang fungsi penunjang keuangan yang menjadi kewenangan daerah. Dipimpin oleh Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah, BAPENDA berkomitmen mengelola dan mengoptimalkan pendapatan daerah demi mewujudkan tata kelola pemerintahan yang baik, bersih, dan profesional untuk Purwakarta Istimewa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script>
            document.addEventListener('DOMContentLoaded', function () {
                // --- Tabs Section: Tentang Kami ---
                const aboutTabContents = {
                    tentangkami: `<p class="leading-relaxed">
                        Badan Pendapatan Daerah Kabupaten Purwakarta merupakan unsur pelaksana urusan pemerintahan bidang fungsi penunjang keuangan yang menjadi kewenangan daerah. Dipimpin oleh Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah, BAPENDA berkomitmen mengelola dan mengoptimalkan pendapatan daerah demi mewujudkan tata kelola pemerintahan yang baik, bersih, dan profesional untuk Purwakarta Istimewa.
                    </p>`,
                    visi: `<div class="space-y-4 text-justify leading-relaxed">
                        <div class="border-b border-white/20 pb-2 mb-3">
                            <h4 class="text-[1.2vw] max-md:text-[4.5vw] font-bold text-(--yellow-color) geologica uppercase leading-tight">VISI</h4>
                            <p class="text-[0.85vw] max-md:text-[3.2vw] text-white/80 font-medium">Badan Pendapatan Daerah Kab. Purwakarta</p>
                        </div>
                        <div class="space-y-3">
                            <p>
                                <strong>1.</strong> Badan Pendapatan Daerah Kabupaten Purwakarta sebagai salah satu institusi pada pemerintah Kabupaten Purwakarta diharapkan mampu mengemban tugas dan tanggung jawab yang diberikan oleh Bupati dan Masyarakat, sebagaimana tercermin dalam peraturan daerah Kabupaten Purwakarta nomer 9 tahun 2016 tentang pembentukan dan susunan perangkat daerah Kabupaten Purwakarta (Lembaran Daerah Kabupaten Purwakarta nomer 9 tahun 2016) dan peraturan Bupati Purwakarta nomer 148 tahun 2016 tentang kedudukan, Susunan Organisasi, Tugas dan fungsi serta tata kerja perangkat daerah. Dengan peraturan daerah tersebut Badan Pendapatan Daerah Kabupaten Purwakarta mempunyai kewenangan dalam pengelolaan pendapatan daerah yang mengarah pada peningkatan penyelenggaraan pelayanan publik yang transparan dan Profesional.
                            </p>
                            <p>
                                <strong>2.</strong> Sebagai Koordinator dalam pemungutan pajak/retribusi daerah dan pendapatan lainnya yang sah, maka Badan Pendapatan Daerah Kabupaten Purwakarta harus mampu melayani dan bekerja secara profesional, selain itu sebagai perencana dan penggali pendapatan Asli Daerah (PAD). Badan Pendapatan Daerah Kabupaten Purwakarta harus mampu menggali potensi dan meningkatkan pendapatan daerah, sebagai upaya mewujudkan Purwakarta Istimewa.
                            </p>
                        </div>
                    </div>`,
                    misi: `<div class="space-y-4 text-justify leading-relaxed">
                        <div class="border-b border-white/20 pb-2 mb-3">
                            <h4 class="text-[1.2vw] max-md:text-[4.5vw] font-bold text-(--yellow-color) geologica uppercase leading-tight">MISI</h4>
                            <p class="text-[0.85vw] max-md:text-[3.2vw] text-white/80 font-medium">Badan Pendapatan Daerah Kab. Purwakarta</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p class="font-semibold text-white">1. Meningkatkan transparansi dan profesionalisme aparatur dalam pelayanan pajak daerah.</p>
                                <p class="text-white/90 mt-1 pl-4 border-l-2 border-(--yellow-color)">
                                    Misi ini mengandung makna bahwa sebagai koordinator pendapatan daerah, maka Badan Pendapatan Daerah Kabupaten Purwakarta harus mampu melakukan koordinasi secara baik dengan instansi terkait dan menggugah kesadaran masyarakat selaku Wajib Pajak daerah dalam membayar pajak.
                                </p>
                            </div>
                            <div>
                                <p class="font-semibold text-white">2. Meningkatkan transparansi dan profesionalisme aparatur dalam pelayanan pajak daerah.</p>
                                <p class="text-white/90 mt-1 pl-4 border-l-2 border-(--yellow-color)">
                                    Misi ini mengandung makna bahwa dalam rangka meningkatkan PAD. Badan Pendapatan Daerah Kabupaten Purwakarta harus meningkatkan pelayanan kepada Wajib Pajak yang mudah, nyaman dan cepat serta transparan dengan didukung sistem teknologi informasi yang handal.
                                </p>
                            </div>
                        </div>
                    </div>`
                };

                const aboutTabButtons = document.querySelectorAll('.about-tab-btn');
                const aboutContentText = document.getElementById('about-tab-content-text');
                const aboutAccordionPanels = document.querySelectorAll('.about-tab-accordion-content');

                if (aboutTabButtons.length > 0) {
                    aboutTabButtons.forEach(btn => {
                        btn.addEventListener('click', function () {
                            const tabKey = this.getAttribute('data-about-tab');
                            const targetPanel = document.querySelector(`.about-tab-accordion-content[data-about-tab-content="${tabKey}"]`);
                            const isCurrentlyOpenMobile = targetPanel && !targetPanel.classList.contains('hidden');

                            aboutTabButtons.forEach(b => {
                                const overlay = b.querySelector('.about-tab-overlay');
                                const text = b.querySelector('.about-tab-text');
                                if (overlay) {
                                    overlay.classList.remove('bg-white/70');
                                    overlay.classList.add('bg-[#EA6D0D]/65');
                                }
                                if (text) {
                                    text.classList.remove('text-(--blue-color)');
                                    text.classList.add('text-white');
                                }
                            });

                            aboutAccordionPanels.forEach(p => {
                                p.classList.add('hidden');
                            });

                            if (isCurrentlyOpenMobile && window.innerWidth < 768) {
                                return;
                            }

                            const overlay = this.querySelector('.about-tab-overlay');
                            const text = this.querySelector('.about-tab-text');
                            if (overlay) {
                                overlay.classList.remove('bg-[#EA6D0D]/65');
                                overlay.classList.add('bg-white/70');
                            }
                            if (text) {
                                text.classList.remove('text-white');
                                text.classList.add('text-(--blue-color)');
                            }

                            if (targetPanel) {
                                targetPanel.classList.remove('hidden');
                            }
                            if (aboutTabContents[tabKey] && aboutContentText) {
                                aboutContentText.innerHTML = aboutTabContents[tabKey];
                            }
                        });
                    });
                }

                // --- Tabs Section: Tugas Pokok dan Fungsi ---
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
                            overlay.classList.add('bg-[#EA6D0D]/65');
                            
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
                            zIndex: 999999,
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

            <style>
            .viewer-container {
                z-index: 999999 !important;
            }
            </style>
        </div>
    </div>

    <footer class="relative overflow-visible mt-[11.67vw] max-md:mt-[4.103vw] pb-[1.556vw] max-md:pb-[4.615vw]">
        <img src="<?= base_url('assets/images/arjuna_woawan.png') ?>" alt="" class="hidden max-md:block absolute right-0 bottom-0 h-[200vw] w-auto pointer-events-none -z-1">

        <div class="relative z-10 w-full text-(--blue-color) text-[0.58vw] open-sans max-md:text-[2.564vw]">
            <div class="text-center">
                Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
            </div>
        </div>
    </footer>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>