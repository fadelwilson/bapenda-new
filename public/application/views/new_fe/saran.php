<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Kritik & Saran']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-(--blue-color) flex flex-col justify-between">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'saran', 'navbar_bg' => 'blue']); ?>
    <div class="p-[1.556vw] flex-1 flex flex-col relative z-10 max-md:p-[2.051vw]">
        <div class="flex-1 flex flex-col">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-3">
                <img src="<?= base_url('assets/beranda/new-beranda.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto">

                <h1 class="text-[5.669vw] text-[#EA6D0D] uppercase krona-one leading-none max-md:text-[9vw]">
                    Kritik & Saran
                </h1>
            </div>
            <div class="px-[3.767vw] py-[3.767vw] my-auto max-md:my-[6.154vw]">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

                <form id="critic" method="post" class="grid grid-cols-2 gap-[1.56vw] mt-[1.17vw] relative z-20 max-md:grid-cols-1" onsubmit="submitForm(event)">
                    <!-- Honeypot trap anti-bot -->
                    <div style="display:none !important;" aria-hidden="true">
                        <input type="text" name="website_url" tabindex="-1" autocomplete="off">
                    </div>
                    
                    <div class="flex flex-col gap-[0.45vw]">
                        <!-- Nama Lengkap -->
                        <div>
                            <label for="nama_lengkap" class="block text-[1.17vw] pb-[0.39vw] geologica text-white max-md:text-[4.615vw] max-md:pb-[2.051vw]">
                                Nama <span class="text-red-600">*</span>
                            </label>
                            <input
                                type="text"
                                id="nama_lengkap"
                                name="nama_lengkap"
                                required
                                autocomplete="off"
                                placeholder="Masukkan Nama Anda"
                                class="w-full py-[0.39vw] px-[0.78vw] text-[1.17vw] bg-white border border-(--blue-color) geologica focus:outline-none disabled:opacity-50 max-md:text-[3.077vw] max-md:px-[1.538vw] max-md:py-[2.564vw]" />
                        </div>

                        <!-- No HP -->
                        <div>
                            <label for="no_hp" class="block text-[1.17vw] pb-[0.39vw] geologica text-white max-md:text-[4.615vw] max-md:pb-[2.051vw]">
                                No. Handphone
                            </label>
                            <input
                                type="tel"
                                id="no_hp"
                                name="no_hp"
                                maxlength="14"
                                placeholder="Contoh: 081234567890"
                                class="w-full py-[0.39vw] px-[0.78vw] text-[1.17vw] bg-white border border-(--blue-color) geologica focus:outline-none disabled:opacity-50 max-md:text-[3.077vw] max-md:px-[1.538vw] max-md:py-[2.564vw]" />
                        </div>

                        
                        <!-- Alamat -->
                        <div>
                            <label for="alamat" class="block text-[1.17vw] pb-[0.39vw] geologica text-white max-md:text-[4.615vw] max-md:pb-[2.051vw]">
                                Alamat
                            </label>
                            <input
                                type="text"
                                id="alamat"
                                name="alamat"
                                placeholder="Masukkan Alamat Anda"
                                class="w-full py-[0.39vw] px-[0.78vw] text-[1.17vw] bg-white border border-(--blue-color) geologica focus:outline-none disabled:opacity-50 max-md:text-[3.077vw] max-md:px-[1.538vw] max-md:py-[2.564vw]" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-[0.45vw]">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-[1.17vw] pb-[0.39vw] geologica text-white max-md:text-[4.615vw] max-md:pb-[2.051vw]">
                                E-mail <span class="text-red-600">*</span>
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                autocomplete="off"
                                placeholder="Masukkan Email Anda"
                                class="w-full py-[0.39vw] px-[0.78vw] text-[1.17vw] bg-white border border-(--blue-color) geologica focus:outline-none disabled:opacity-50 max-md:text-[3.077vw] max-md:px-[1.538vw] max-md:py-[2.564vw]" />
                        </div>
                    
                        <!-- Kritik -->
                        <div>
                            <label for="kritik" class="block text-[1.17vw] pb-[0.39vw] geologica text-white max-md:text-[4.615vw] max-md:pb-[2.051vw]">
                                Kritik & Saran <span class="text-red-600">*</span>
                            </label>
                            <textarea
                                id="kritik"
                                name="kritik"
                                required
                                rows="4"
                                placeholder="Kritik Anda Kepada BAPENDA Kab. Purwakarta"
                                class="w-full py-[0.39vw] px-[0.78vw] text-[1.17vw] bg-white border border-(--blue-color) geologica focus:outline-none disabled:opacity-50 max-md:text-[3.077vw] max-md:px-[1.538vw] max-md:py-[2.564vw]"></textarea>
                        </div>

                        <div class="w-full flex items-end gap-[3.89vw] mb-[0.29vw] text-[1.17vw] max-md:text-[4.615vw]">
                            <button
                                type="submit"
                                class="flex-1 inline-flex items-center justify-center gap-[0.39vw] bg-[#1C2032] hover:bg-[#1C2032]/90 text-white py-[0.58vw]  cursor-pointer transition-colors duration-150 disabled:opacity-50 disabled:cursor-not-allowed max-md:p-4">
                                <span class="material-symbols-outlined animate-spin text-lg !hidden" id="loading-icon">
                                    progress_activity
                                </span>
                                <span>Kirim</span>
                            </button>
    
                            <button
                                type="reset"
                                class="flex-1 inline-flex items-center justify-center gap-[0.39vw] bg-(--red-color) hover:bg-(--red-color)/90 text-white py-[0.58vw]  cursor-pointer transition-colors duration-150 max-md:p-[4.103vw]">
                                <span>Batal</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="relative mt-auto z-0">
        <!-- Tower di kanan di atas div batik -->
        <img src="<?= base_url('assets/gambar/towersaran.png') ?>" alt="" class="absolute -right-[2.051vw] opacity-[0.03] bottom-[0%] h-[39vw] w-auto pointer-events-none z-0 max-md:h-[140vw] max-md:bottom-[94%]">

        <!-- Section Info (Alamat, Jam Kerja, Telepon) -->
        <div class="relative overflow-hidden px-[7.78vw] max-md:px-[4.103vw]">
            <img src="<?= base_url('assets/gambar/batik_sunda1.png') ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-5 pointer-events-none z-0">

            <div
                class="grid grid-cols-[0.7fr_1.3fr_1px_1fr_1px_1fr]
           items-center gap-0
           relative z-10
           pt-[1.95vw]
           max-md:flex max-md:flex-col
           max-md:gap-[2vw]
           max-md:pt-[5.128vw]
           max-md:text-center"
                role="contentinfo">

                <!-- Logo -->
                <div class="flex items-center justify-start pr-[2vw] max-md:p-0 max-md:w-full max-md:justify-center">
                    <img
                        src="<?= base_url('assets/gambar/bapendalogo.svg') ?>"
                        alt="Logo Bapenda"
                        class="h-[5.604vw] w-auto object-contain max-md:h-[40vw] max-md:mx-auto">
                </div>

                <!-- Alamat -->
                <div class="min-w-0 pl-0 pr-[2vw] max-md:p-0 max-md:w-full">
                    <h2 class="geologica text-[1.56vw] text-(--yellow-color) mb-[0.5vw] max-md:text-[4.615vw] max-md:mb-1">
                        Alamat Kantor
                    </h2>

                    <p class="open-sans text-[0.78vw] leading-relaxed text-white max-md:text-[3.077vw]">
                        Jl. Surawinata No.30A, Nagri Tengah, Kec.<br>
                        Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114
                    </p>
                </div>

                <!-- Separator -->
                <div
                    class="bg-(--blue-color) h-full self-stretch
               max-md:w-full max-md:h-[1px]
               max-md:my-[1.5vw]"
                    aria-hidden="true"></div>

                <!-- Jam Kerja -->
                <div class="min-w-0 px-[2vw] max-md:p-0 max-md:w-full">
                    <h2 class="geologica text-[1.56vw] text-(--yellow-color) mb-[0.5vw] max-md:text-[4.615vw] max-md:mb-1">
                        Jam Kerja
                    </h2>

                    <p class="open-sans text-[0.78vw] leading-relaxed text-white max-md:text-[3.077vw]">
                        Senin - Jumat : 08:00 - 16:00 WIB<br>
                        Sabtu - Minggu : Tutup
                    </p>
                </div>

                <!-- Separator -->
                <div
                    class="bg-(--blue-color) h-full self-stretch
               max-md:w-full max-md:h-[1px]
               max-md:my-[1.5vw]"
                    aria-hidden="true"></div>

                <!-- Telepon -->
                <div class="min-w-0 pl-[2vw] pr-0 max-md:p-0 max-md:w-full">
                    <h2 class="geologica text-[1.56vw] text-(--yellow-color) mb-[0.5vw] max-md:text-[4.615vw] max-md:mb-1">
                        Telepon Kami Sekarang
                    </h2>

                    <p class="open-sans text-[0.78vw] leading-relaxed text-white max-md:text-[3.077vw]">
                        <a
                            href="tel:+6282111336025"
                            class="underline underline-offset-[2px]">
                            (+62)821-1133-6025
                        </a>
                    </p>
                </div>

            </div>

            <footer class="py-[1.95vw] relative z-10 max-md:mt-[4.103vw]">
                <div class="w-full text-white text-[0.584vw] jakarta-sans max-md:text-[2.564vw]">
                    <div class="text-center">
                        Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Notyf JS & Submit Handler -->
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        const notyf = new Notyf({
            position: {
                x: 'right',
                y: 'top'
            }
        });

        const submitForm = (e) => {
            e.preventDefault();

            const form = e.target;
            const btn = form.querySelector("button[type='submit']");
            const loadingIco = btn.querySelector("span#loading-icon");
            const sentIco = btn.querySelector("span#send-icon");

            loadingIco.classList.remove("!hidden");
            sentIco.classList.add("!hidden");
            btn.disabled = true;

            const formData = new FormData(form);

            fetch("<?= base_url('api/kritik-saran/store') ?>", {
                    method: "POST",
                    body: formData,
                })
                .then((res) => res.json())
                .then((res) => {
                    if (res.meta && res.meta.status === "success") {
                        notyf.success(res.meta.message || "Kritik dan saran berhasil dikirim.");
                        form.reset();
                    } else {
                        notyf.error(res.meta && res.meta.message ? res.meta.message : "Gagal mengirim kritik dan saran.");
                    }
                })
                .catch((err) => {
                    console.error("Error:", err);
                    notyf.error("Terjadi kesalahan saat mengirim kritik dan saran.");
                })
                .finally(() => {
                    loadingIco.classList.add("!hidden");
                    sentIco.classList.remove("!hidden");
                    btn.disabled = false;

                    form.querySelectorAll("input, textarea").forEach((input) => {
                        input.disabled = false;
                    });
                });
        };
    </script>

    <?php $this->load->view('new_fe/components/footer_scripts'); ?>