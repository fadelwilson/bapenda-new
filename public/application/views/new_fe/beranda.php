<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda']); ?>

    <!-- Section Hero / Beranda -->
    <div class="relative min-h-screen w-full bg-cover bg-center max-md:bg-[-90px_center] overflow-hidden" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>');">
        <!-- Layer overlay biru -->
        <div class="absolute inset-0 bg-(--blue-color)/45 z-0"></div>

        <!-- Ornamen Sigotaka di kiri dan kanan background -->
        <img src="<?= base_url('assets/gambar/sigotaka_left.svg') ?>" alt="" class="absolute left-0 bottom-[3vw] h-[80vh] w-auto pointer-events-none select-none z-[1] opacity-30 max-md:hidden">
        <img src="<?= base_url('assets/gambar/sigotaka_right.svg') ?>" alt="" class="absolute right-0 bottom-[3vw] h-[80vh] w-auto pointer-events-none select-none z-[1] opacity-30 max-md:h-[157.692vw] max-md:bottom-[94px]">

        <!-- Konten Header & Body -->
        <div class="relative z-10 min-h-screen flex flex-col p-[1.556vw] max-md:p-[2.051vw]">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-3">
                <img src="<?= base_url('assets/gambar/bapendaheaderico.svg') ?>" alt="Logo Bapenda" class="h-[3.229vw] w-auto object-contain max-md:w-full max-md:h-auto">

                <h1 class="text-[4.669vw] max-md:text-[12.308vw] max-md:w-full text-(--text-title) uppercase krona-one leading-none text-right">
                    Beranda
                </h1>
            </div>

            <div class="flex-1 flex items-center w-full">
                <div class="w-full px-[10.992vw] max-md:px-0">
                    <h2 class="text-(--yellow-color) text-[3.891vw] geologica leading-none max-md:text-[10.256vw] max-md:text-center">
                        Pengelolaan Pendapatan yang Transparan
                    </h2>
                    <p class="text-[0.973vw] text-white mt-[0.584vw] open-sans max-md:text-[3.59vw] max-md:mt-[4.103vw]">
                        Dinas Pendapatan Daerah Kabupaten Purrwakarta hadir untuk mewujudkan tata kelola pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi demi pembangunan daerah yang berkeadilan.
                    </p>

                    <div class="w-fit mx-auto grid grid-cols-4 max-md:grid-cols-2 gap-[1.17vw] max-md:gap-[4.103vw] mt-[2vw] max-md:mt-[8.205vw]">
                        <!-- Menu 1 -->
                        <div class="flex items-center justify-center gap-[0.29vw] bg-white p-[0.49vw] text-[#303752] open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/gambar/check_circle.svg') ?>" alt="" class="size-[0.88vw] max-md:size-[4.615vw] shrink-0">
                            <span>Transparan</span>
                        </div>

                        <!-- Menu 2 -->
                        <div class="flex items-center justify-center gap-[0.29vw] bg-white p-[0.49vw] text-[#303752] open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/gambar/check_circle.svg') ?>" alt="" class="size-[0.88vw] max-md:size-[4.615vw] shrink-0">
                            <span>Akuntabel</span>
                        </div>

                        <!-- Menu 3 -->
                        <div class="flex items-center justify-center gap-[0.29vw] bg-white p-[0.49vw] text-[#303752] open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/gambar/check_circle.svg') ?>" alt="" class="size-[0.88vw] max-md:size-[4.615vw] shrink-0">
                            <span>Informatif</span>
                        </div>

                        <!-- Menu 4 -->
                        <div class="flex items-center justify-center gap-[0.29vw] bg-white p-[0.49vw] text-[#303752] open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/gambar/check_circle.svg') ?>" alt="" class="size-[0.88vw] max-md:size-[4.615vw] shrink-0">
                            <span>Profesional</span>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="w-full text-white text-[0.584vw] max-md:text-[2.564vw] open-sans">
                    <div class="text-center">
                        Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                    </div>
                </div>
            </footer>
        </div>
    </div>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>