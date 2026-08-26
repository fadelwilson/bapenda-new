<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Tentang Kami']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'profil']); ?>

    <div class="px-[1.556vw] py-[1.556vw]">
        <div>
            <h1 class="text-[4.669vw] text-(--text-title) uppercase krona-one leading-none">
                Tentang Kami
            </h1>
    
            <div class="px-[1.167vw] mt-[0.584vw]">
                <h3 class="text-[2.335vw] text-(--blue-color) genos leading-none">
                    Tentang BAPENDA
                </h3>
        
                <p class="jakarta-sans text-[0.778vw] w-[40%] pt-[0.195vw]">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, doloremque. Quisquam laudantium odio accusamus ipsam obcaecati fuga consequuntur pariatur ad nobis laborum ducimus eligendi rerum blanditiis beatae, impedit magni nisi. Ipsa ea perferendis, doloremque a inventore eaque nesciunt? Laboriosam sunt maiores, illum temporibus sed, itaque officia maxime natus, perferendis sapiente voluptatem sint a facere magnam vitae. Totam, dolore optio itaque velit nostrum dignissimos dolor ad. Labore quod quasi amet debitis ex fugiat, obcaecati similique maxime officia consectetur. Assumenda beatae amet perspiciatis eaque repellat explicabo, quidem dolor laudantium sint debitis magni quae saepe nam vero accusamus perferendis suscipit! Voluptatum, dignissimos delectus.    
                </p>
    
                <div class="grid grid-cols-2 gap-[0.778vw] mt-[1.556vw] w-[60%] pt-[2.724vw]">
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end justify-start relative cursor-pointer preview-btn" data-preview="<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300">Visi Bapenda</h3>
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end justify-end relative cursor-pointer preview-btn" data-preview="<?= base_url('assets/gambar/full-gallery-image-2.jpg') ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-2.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300">Misi Bapenda</h3>    
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end justify-start relative cursor-pointer preview-btn" data-preview="<?= base_url('assets/gambar/full-gallery-image-3.jpg') ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-3.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300">Informasi</h3>
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end justify-end relative cursor-pointer preview-btn" data-preview="<?= base_url('assets/gambar/full-gallery-image-4.jpg') ?>" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-4.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300">Alur Pembayaran</h3>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="mt-[15.953vw]">
            <h1 class="text-[4.669vw] text-(--text-title) uppercase krona-one leading-none">
                Profil
            </h1>
    
            <div class="px-[1.167vw] mt-[0.584vw]">
                <h3 class="text-[2.335vw] text-(--blue-color) genos leading-none">
                    Struktur Organisasi
                </h3>
        
                <div class="flex justify-center mt-[0.778vw]">
                    <img src="<?= base_url('assets/gambar/struktur 1.png') ?>" alt="" class="!w-[65%] h-auto">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-[5.447vw]">
        <h3 class="text-[2.335vw] text-(--blue-color) genos text-center">
            Tugas Pokok dan Fungsi
        </h3>

        <div class="pt-[10.117vw] mt-[2.335vw] pb-[3.113vw] relative">
            <div class="absolute inset-0 bg-repeat bg-left-top opacity-10 pointer-events-none" style="background-image: url('<?= base_url('assets/gambar/batik%20sunda1.png') ?>'); z-index: 0; background-size: 1280px auto;"></div>
            <!-- Wayang Arjuna decoration -->
            <img src="<?= base_url('assets/gambar/andkomin-arjuna.png') ?>" alt="" class="absolute right-[1vw] top-[-5vw] h-[50vw] w-auto opacity-90 pointer-events-none z-0">
            <div class="relative z-10">
                <div class="grid grid-cols-4 gap-[0.778vw]">
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end relative cursor-pointer tab-btn" data-tab="hukum" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                        <div class="absolute inset-0 bg-white/70 transition-all duration-300 tab-overlay"></div>
                        <h3 class="text-[1.946vw] genos text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text">Dasar Hukum</h3>
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end relative cursor-pointer tab-btn" data-tab="kedudukan" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text">Kedudukan</h3>    
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end relative cursor-pointer tab-btn" data-tab="tugas" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text">Tugas</h3>
                    </div>
                    <div class="group bg-cover bg-center h-[3.113vw] flex items-end relative cursor-pointer tab-btn" data-tab="fungsi" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>')">
                        <div class="absolute inset-0 bg-(--blue-color)/65 group-hover:bg-white/70 transition-all duration-300 tab-overlay"></div>
                        <h3 class="text-[1.946vw] genos text-white group-hover:text-(--blue-color) leading-none relative uppercase transition-all duration-300 tab-text">Fungsi</h3>
                    </div>
                </div>

                <div class="bg-(--blue-color)/60 w-full p-[2.724vw] text-white text-[0.778vw] jakarta-sans">
                    <div class="text-justify leading-relaxed min-h-[150px]" id="tab-content-text">
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

            if (!contentText || tabButtons.length === 0) return;

            tabButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                    tabButtons.forEach(b => {
                        const overlay = b.querySelector('.tab-overlay');
                        const text = b.querySelector('.tab-text');
                        
                        overlay.classList.remove('bg-white/70');
                        overlay.classList.add('bg-(--blue-color)/65');
                        
                        text.classList.remove('text-(--blue-color)');
                        text.classList.add('text-white');
                    });
                    
                    const overlay = this.querySelector('.tab-overlay');
                    const text = this.querySelector('.tab-text');
                    
                    overlay.classList.remove('bg-(--blue-color)/65');
                    overlay.classList.add('bg-white/70');
                    
                    text.classList.remove('text-white');
                    text.classList.add('text-(--blue-color)');

                    const tabKey = this.getAttribute('data-tab');
                    if (tabContents[tabKey]) {
                        contentText.innerHTML = tabContents[tabKey];
                    }
                });
            });

            // Preview images on grid click
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

    <footer class="mt-60">
        <div class="w-full p-[1.751vw] text-(--blue-color) text-[0.584vw] jakarta-sans">
            <div class="text-center">
                Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
            </div>
        </div>
    </footer>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>