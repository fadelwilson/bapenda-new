<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Layanan']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-(--blue-color)">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'layanan']); ?>

    <div class="px-[1.556vw] py-[1.556vw]">
        <div>
            <h1 class="text-[4.669vw] text-(--text-title-sec) uppercase krona-one leading-none">
                Layanan
            </h1>
    
            <div class="px-[1.167vw] mt-[0.584vw]">
                <h3 class="text-[2.335vw] text-white leading-none genos">
                    Pajak Bumi Bangunan
                </h3>
                <div class="flex flex-col gap-1 mt-12">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Info Tagihan PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan pendaftaran objek pajak baru untuk mendapatkan SPPT PBB Baru. Persyaratan meliputi: Mengisi Formulir SPOP dan LSPOP, fotokopi KTP/KK wajib pajak, fotokopi sertifikat tanah/akta jual beli, surat keterangan lurah/kades (jika tidak ada sertifikat), dan SPPT PBB tetangga sebelah.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Permohonan Keringanan atau Pengurangan PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan pengajuan balik nama (mutasi subjek) atau pemecahan SPPT PBB akibat jual beli, waris, atau hibah. Persyaratan: Mengisi SPOP/LSPOP, SPPT PBB asli tahun berjalan, fotokopi KTP/KK, bukti peralihan hak (Sertifikat/AJB/Surat Waris), dan fotokopi SSPD BPHTB.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Permohonan Pembetulan SPPT, SKPD, SKPDLB dan Pembatalan SPPT,SKPD ,STPD</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan untuk membetulkan kesalahan tulis atau hitung pada SPPT PBB (seperti salah ketik nama, alamat, luas tanah/bangunan). Persyaratan: Mengisi formulir permohonan pembetulan, SPPT PBB asli yang salah, fotokopi KTP/KK pemohon, dan dokumen pendukung (Sertifikat/IMB/PBB tetangga).
                            </p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Keberatan & Pengurangan PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan bagi wajib pajak yang merasa ketetapan nilai PBB terlalu tinggi atau tidak mampu secara ekonomi. Persyaratan: Surat permohonan tertulis, fotokopi KTP/KK, SPPT PBB asli, fotokopi bukti kepemilikan, slip gaji/surat keterangan tidak mampu dari lurah/kades, serta bukti pendukung lainnya.
                            </p>
                        </div>
                    </div>

                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const headers = document.querySelectorAll('.accordion-header');

                    headers.forEach(header => {
                        header.addEventListener('click', function () {
                            const content = this.nextElementSibling;
                            const icon = this.querySelector('.accordion-icon');
                            const isOpen = content.classList.contains('max-h-96');
                            
                            const item = this.closest('.accordion-item');
                            const group = item ? item.parentElement : null;
                            const siblingHeaders = group ? group.querySelectorAll('.accordion-header') : [];

                            siblingHeaders.forEach(h => {
                                const c = h.nextElementSibling;
                                const i = h.querySelector('.accordion-icon');
                                
                                h.classList.remove('bg-(--yellow-color)');
                                h.classList.add('bg-white');
                                
                                if (i) i.classList.remove('rotate-180');
                                
                                c.classList.remove('max-h-96', 'opacity-100', 'py-[1.5vw]');
                                c.classList.add('max-h-0', 'opacity-0', 'py-0');
                            });

                            if (!isOpen) {
                                this.classList.remove('bg-white');
                                this.classList.add('bg-(--yellow-color)');
                                
                                if (icon) icon.classList.add('rotate-180');
                                
                                content.classList.remove('max-h-0', 'opacity-0', 'py-0');
                                content.classList.add('max-h-96', 'opacity-100', 'py-[1.5vw]');
                            }
                        });
                    });
                });
                </script>
            </div>
        </div>
    </div>
    
    <div class="relative overflow-hidden">
        <img src="<?= base_url('assets/gambar/tower.png') ?>" alt="" class="absolute -left-1 bottom-0 h-[40vw] w-auto opacity-5 pointer-events-none z-0" style="filter: invert(1);">
        <img src="<?= base_url('assets/gambar/tower.png') ?>" alt="" class="absolute -right-1 bottom-0 h-[25vw] w-auto opacity-5 pointer-events-none z-0 transform scale-x-[-1]" style="filter: invert(1);">

        <div class="mt-[15.953vw]">
            <div class="px-[2.734vw] mt-[0.584vw] relative z-10">
                <h3 class="text-[2.335vw] text-white genos mb-[1.5vw]">
                    BEA PEROLEHAN HAK atas TANAH dan BANGUNAN
                </h3>
        
                <!-- BPHTB Accordion Container -->
                <div class="flex flex-col gap-1 mt-12">
                    
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Pemberian Tarif 0% BPHTB (Waris/Hibah)</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan pengenaan tarif pajak BPHTB sebesar 0% khusus untuk perolehan hak pertama kali karena Waris atau Hibah Wasiat kepada keluarga sedarah dalam garis keturunan lurus satu derajat ke atas atau ke bawah. Persyaratan: Mengisi formulir SSDP BPHTB, fotokopi KTP penerima & pemberi hak, Surat Keterangan Waris/Akta Hibah, dan bukti pelunasan PBB.
                            </p>
                        </div>
                    </div>
    
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Validasi/Verifikasi Lapangan SSPD BPHTB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Proses penelitian dan pencocokan data transaksi jual beli tanah/bangunan terhadap nilai pasar wajar di lapangan sebelum pembayaran divalidasi. Persyaratan: Draft Akta Jual Beli (AJB) dari PPAT, fotokopi Sertifikat Tanah, fotokopi KTP penjual & pembeli, SPPT PBB tahun berjalan, dan foto lokasi objek pajak.
                            </p>
                        </div>
                    </div>
    
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Restitusi/Pengembalian Kelebihan Pembayaran BPHTB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan pengajuan pengembalian uang pajak BPHTB apabila terjadi kelebihan bayar atau pembatalan transaksi akta oleh PPAT. Persyaratan: Surat permohonan restitusi, bukti bayar SSPD BPHTB asli (lembar 1 & 3), fotokopi KTP/KK pemohon, bukti pembatalan akta dari notaris/PPAT, serta fotokopi buku rekening pemohon.
                            </p>
                        </div>
                    </div>
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Pemberian Tarif 0% BPHTB (Waris/Hibah)</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan pengenaan tarif pajak BPHTB sebesar 0% khusus untuk perolehan hak pertama kali karena Waris atau Hibah Wasiat kepada keluarga sedarah dalam garis keturunan lurus satu derajat ke atas atau ke bawah. Persyaratan: Mengisi formulir SSDP BPHTB, fotokopi KTP penerima & pemberi hak, Surat Keterangan Waris/Akta Hibah, dan bukti pelunasan PBB.
                            </p>
                        </div>
                    </div>
    
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Validasi/Verifikasi Lapangan SSPD BPHTB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Proses penelitian dan pencocokan data transaksi jual beli tanah/bangunan terhadap nilai pasar wajar di lapangan sebelum pembayaran divalidasi. Persyaratan: Draft Akta Jual Beli (AJB) dari PPAT, fotokopi Sertifikat Tanah, fotokopi KTP penjual & pembeli, SPPT PBB tahun berjalan, dan foto lokasi objek pajak.
                            </p>
                        </div>
                    </div>
    
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between p-[16px] bg-white text-(--blue-color) jakarta-sans text-[20px] cursor-pointer transition-all duration-300 accordion-header">
                            <span>Restitusi/Pengembalian Kelebihan Pembayaran BPHTB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6 transition-transform duration-300 transform accordion-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-(--blue-color) text-white px-[2vw] accordion-content">
                            <p class="jakarta-sans text-[0.9vw] leading-relaxed">
                                Layanan pengajuan pengembalian uang pajak BPHTB apabila terjadi kelebihan bayar atau pembatalan transaksi akta oleh PPAT. Persyaratan: Surat permohonan restitusi, bukti bayar SSPD BPHTB asli (lembar 1 & 3), fotokopi KTP/KK pemohon, bukti pembatalan akta dari notaris/PPAT, serta fotokopi buku rekening pemohon.
                            </p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        
        <footer class="mt-60 relative z-10">
            <div class="w-full p-[1.751vw] text-white text-[0.584vw] jakarta-sans">
                <div class="text-center">
                    Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                </div>
            </div>
        </footer>
    </div>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>