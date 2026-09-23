<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda', 'navbar_bg' => 'blue']); ?>

    <!-- Section Hero / Beranda -->
    <div class="relative min-h-screen w-full bg-cover bg-center overflow-hidden max-md:bg-center" style="background-image: url('<?= base_url('assets/images/new-bg.webp') ?>');">
        <!-- Layer overlay biru -->
        <div class="absolute inset-0 bg-(--blue-color)/75 z-0"></div>

        <!-- Ornamen Sigotaka di kiri dan kanan background -->
        <img src="<?= base_url('assets/images/sigotaka_left.svg') ?>" alt="" class="absolute left-0 bottom-[3vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-30 max-md:hidden">
        <img src="<?= base_url('assets/images/sigotaka_right.svg') ?>" alt="" class="absolute right-0 bottom-[3vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-30 max-md:h-[157.692vw] max-md:bottom-[94px]">

        <!-- Konten Header & Body -->
        <div class="relative z-10 min-h-screen flex flex-col p-[1.556vw] max-md:p-[2.051vw]">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-3">
                <img src="<?= base_url('assets/images/bapenda-white.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto">

                <h1 class="text-[5.669vw] max-md:text-[12.308vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                    Beranda
                </h1>
            </div>

            <div class="flex-1 flex items-center w-full">
                <div class="w-full px-[10.992vw] max-md:px-0">
                    <h2 class="text-(--yellow-color) text-[3.891vw] geologica leading-none max-md:text-[8.205vw] max-md:text-center">
                        Pembayaran Pajak Daerah Anda untuk Pembangunan Purwakarta Istimewa
                    </h2>
                    <p class="text-[0.973vw] text-white mt-[0.584vw] open-sans max-md:text-[3.59vw] max-md:mt-[4.103vw] max-md:text-center">
                        Pengelola Pendapatan yang Transparan
                    </p>

                    <div class="w-fit mx-auto grid grid-cols-3 max-md:grid-cols-1 gap-[1.17vw] max-md:w-[60vw] max-md:gap-[4.103vw] mt-[2vw] max-md:mt-[8.205vw]">
                        <!-- Menu 1 -->
                        <div class="relative border border-white flex items-center rounded-xs justify-center bg-[#EA6D0D] p-[0.49vw] pl-[2.5vw] text-white open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:pl-[9vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/images/check-list.svg') ?>" alt="" class="absolute left-0 h-full w-[1.8vw] max-md:w-[7vw] shrink-0">
                            <span>PBB-P2</span>
                        </div>

                        <!-- Menu 2 -->
                        <div class="relative border border-white flex items-center rounded-xs justify-center bg-[#EA6D0D] p-[0.49vw] pl-[2.5vw] text-white open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:pl-[9vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/images/check-list.svg') ?>" alt="" class="absolute left-0 h-full w-[1.8vw] max-md:w-[7vw] shrink-0">
                            <span>BPHTB</span>
                        </div>

                        <!-- Menu 3 -->
                        <div class="relative border border-white flex items-center rounded-xs justify-center bg-[#EA6D0D] p-[0.49vw] pl-[2.5vw] text-white open-sans text-[0.681vw] max-md:p-[1.538vw] max-md:pl-[9vw] max-md:text-[3.59vw]">
                            <img src="<?= base_url('assets/images/check-list.svg') ?>" alt="" class="absolute left-0 h-full w-[1.8vw] max-md:w-[7vw] shrink-0">
                            <span>PAD</span>
                        </div>
                    </div>
                </div>
            </div>

            <a
                href="http://mapagbumi.purwakartakab.go.id"
                target="_blank"
                rel="noopener noreferrer"
                class="block"
            >
                <div class="flex items-center justify-end max-md:hidden">
                    <img
                        src="<?= base_url('assets/images/bapendalogo.svg') ?>"
                        alt="Logo Bapenda"
                        class="h-[6.81vw] w-auto object-contain max-md:h-[40vw] max-md:mx-auto">              
                </div>
            </a>

            <footer>
                <div class="w-full text-white text-[0.584vw] max-md:text-[2.564vw] open-sans max-md:pb-[2.564vw]">
                    <div class="text-center">
                        Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                    </div>
                </div>
            </footer>
        </div>
    </div>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>