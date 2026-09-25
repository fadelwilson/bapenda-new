<?php
$sub_menu = isset($sub_menu) ? strtolower($sub_menu) : 'pbb';
$main_titles = [
    'pbb'   => 'PBB',
    'bphtb' => 'BPHTB',
    'pdl'   => 'PDL',
];
$sub_titles = [
    'pbb'   => 'PAJAK BUMI DAN BANGUNAN',
    'bphtb' => 'BEA PEROLEHAN HAK ATAS TANAH DAN BANGUNAN',
    'pdl'   => 'PAJAK DAERAH LAINNYA',
];
$init_main_title = $main_titles[$sub_menu] ?? 'PBB';
$init_sub_title = $sub_titles[$sub_menu] ?? 'PAJAK BUMI DAN BANGUNAN';
$this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Layanan', 'navbar_bg' => 'blue']);
?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-(--blue-color) flex flex-col justify-between">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'layanan']); ?>

    <div class="relative overflow-hidden min-h-screen flex flex-col justify-between px-[1.556vw] py-[1.556vw] max-md:p-[2.051vw]">
        <img src="<?= base_url('assets/images/tower.png') ?>" alt="" class="absolute -left-1 bottom-0 h-[50vw] w-auto opacity-5 pointer-events-none z-0 max-md:h-[205.128vw] max-md:w-auto" style="filter: invert(1);">
        <img src="<?= base_url('assets/images/tower.png') ?>" alt="" class="absolute -right-1 bottom-0 h-[30vw] w-auto opacity-5 pointer-events-none z-0 transform scale-x-[-1] max-md:hidden" style="filter: invert(1);">

        <div class="relative z-10">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-[4.103vw]">
                <img src="<?= base_url('assets/images/bapenda-white.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto max-md:ml-[1.952vw] max-md:mt-[1.595vw]">

                <h1 class="text-[4.67vw] max-md:text-[9.231vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                    Layanan
                </h1>
            </div>

            <div class="px-[2.734vw] mt-[4.5vw] relative z-10 max-md:px-0 max-md:mt-[8vw]">
                <h1 id="layanan-main-title" class="text-[3.89vw] text-[#EA6D0D] krona-one uppercase leading-none max-md:text-[8vw] max-md:text-center transition-all duration-300 mb-[0.6vw] max-md:mb-[2vw] max-md:hidden">
                    <?= $init_main_title ?>
                </h1>
                <h3 id="layanan-sub-title" class="text-[2.33vw] text-white genos mb-[1.5vw] max-md:mb-4 max-md:text-[6.154vw] max-md:text-center max-md:leading-tight uppercase transition-all duration-300">
                    <?= $init_sub_title ?>
                </h3>

                <div id="content-pbb" class="layanan-pane flex flex-col gap-[0.19vw] max-md:gap-[1.538vw] max-md:px-[2.051vw]">
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Info Tagihan PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.6vw] max-md:space-y-[2vw]">
                                <li>
                                    <span>Info Tagihan PBB : </span>
                                    <a href="https://mapagbumi.purwakartakab.go.id/" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://mapagbumi.purwakartakab.go.id/</a>
                                </li>
                                <li>
                                    <span>Permohonan keringanan/pengurangan PBB : </span>
                                    <a href="https://s.id/wJQHO" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://s.id/wJQHO</a>
                                </li>
                                <li>
                                    <span>Permohonan Pembetulan SPPT,SKPD,STPD,SKPDLB dan Pembatalan SPPT,SKPD,STPD : </span>
                                    <a href="https://s.id/xisWi" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://s.id/xisWi</a>
                                </li>
                                <li>
                                    <span>Permohonan Mutasi Pecah Penggabungan OP : </span>
                                    <a href="https://s.id/GKxCv" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://s.id/GKxCv</a>
                                </li>
                                <li>
                                    <span>Permohonan Pendaftaran Objek dan Subjek Baru PBB : </span>
                                    <a href="https://s.id/lq6uF" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://s.id/lq6uF</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Pendaftaran Objek Pajak Baru</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Surat Permohonan Pendaftaran Objek Baru ditandatangani oleh Pemohon</li>
                                <li>Surat Pemberitahuan Objek Pajak (SPOP) dan Lampiran Surat Pemberitahuan Objek Pajak (LSPOP)</li>
                                <li>FC KTP Pemohon dan atau yang dikuasakan</li>
                                <li>FC Sertifikat atau AJB</li>
                                <li>Dokumen Pendukung Lain yang berkaitan langsung dengan Objek Pajak</li>
                                <li>Surat Kuasa Jika Dikuasakan</li>
                                <li>Fotocopy SPPT Tetangga</li>
                                <li>Surat Pernyataan Tanggung Jawab</li>
                                <li>Surat Keterangan Desa Belum Memiliki KTP</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Permohonan Pembetulan Dan Pembatalan SPPT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Surat Permohonan Pembetulan oleh Pemohon</li>
                                <li>Surat Pemberitahuan Objek Pajak (SPOP) dan Lampiran Surat Pemberitahuan Objek Pajak (LSPOP)</li>
                                <li>FC KTP Pemohon dan atau yang dikuasakan</li>
                                <li>FC Sertifikat atau AJB</li>
                                <li>Dokumen Pendukung Lain yang berkaitan langsung dengan Objek Pajak</li>
                                <li>Surat Kuasa Jika Dikuasakan</li>
                                <li>Pelunasan PBB tahun sebelumnya</li>
                                <li>Surat Pernyataan Tanggung Jawab</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Permohonan Mutasi/Pecah/Gabung Objek Pajak</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Surat Permohonan Mutasi/Pecah/Gabung Objek Pajak oleh Pemohon</li>
                                <li>Surat Pemberitahuan Objek Pajak (SPOP) dan Lampiran Surat Pemberitahuan Objek Pajak (LSPOP)</li>
                                <li>FC KTP Pemohon dan atau yang dikuasakan</li>
                                <li>FC Sertifikat atau AJB</li>
                                <li>Dokumen Pendukung Lain yang berkaitan langsung dengan Objek Pajak</li>
                                <li>Surat Kuasa Jika Dikuasakan</li>
                                <li>Pelunasan PBB tahun sebelumnya untuk mutasi habis dan penggabungan</li>
                                <li>Surat Pernyataan Tanggung Jawab</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Permohonan Penghapusan Atau Pengurangan Sanksi Administratif PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Surat Permohonan Penghapusan Atau Pengurangan Sanksi Administratif PBB oleh Pemohon</li>
                                <li>FC KTP Pemohon dan atau yang dikuasakan</li>
                                <li>FC SPPT/SKP tahun berjalan Objek Pajak yang akan diajukan</li>
                                <li>Dokumen Pendukung Lain yang berkaitan langsung dengan Objek Pajak</li>
                                <li>FC SK pengurangan tahun sebelumnya (jika pernah mengajukan)</li>
                                <li>FC Rekening Listrik, Telepon, dan Air</li>
                                <li>Struk Gaji/Pensiunan/Surat Keterangan Tidak Mampu dari Desa atau Kelurahan (PM-1) dan atau foto copy Kartu Bantuan Langsung Tunai</li>
                                <li>Pelunasan PBB tahun-tahun sebelumnya</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Permohonan Pengurangan PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Surat Permohonan Pengurangan PBB oleh Pemohon</li>
                                <li>FC KTP Pemohon dan atau yang dikuasakan</li>
                                <li>FC SPPT/SKP tahun berjalan Objek Pajak yang akan diajukan</li>
                                <li>Dokumen Pendukung Lain yang berkaitan langsung dengan Objek Pajak</li>
                                <li>FC SK pengurangan tahun sebelumnya (jika pernah mengajukan)</li>
                                <li>Struk Gaji/Pensiunan/Surat Keterangan Tidak Mampu dari Desa atau Kelurahan (PM-1) dan atau foto copy Kartu Bantuan Langsung Tunai</li>
                                <li>Pelunasan PBB tahun-tahun sebelumnya</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Permohonan Keberatan PBB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Surat Permohonan Keberatan PBB oleh Pemohon</li>
                                <li>FC KTP Pemohon dan atau yang dikuasakan</li>
                                <li>FC SPPT/SKP tahun berjalan Objek Pajak yang akan diajukan</li>
                                <li>Dokumen Pendukung Lain yang berkaitan langsung dengan Objek Pajak</li>
                                <li>FC IMB (jika ada)</li>
                                <li>Pelunasan PBB tahun-tahun sebelumnya</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Formulir Permohonan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.6vw] max-md:space-y-[2vw]">
                                <li>
                                    <span>Formulir PBB: </span>
                                    <a href="https://s.id/Iq6uF" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://s.id/Iq6uF</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="content-bphtb" class="layanan-pane hidden flex flex-col gap-[0.19vw] max-md:gap-[1.538vw] max-md:px-[2.051vw]">
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Info Tagihan BPHTB</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.6vw] max-md:space-y-[2vw]">
                                <li>
                                    <span>Pendaftaran BPHTB : </span>
                                    <a href="https://ebphtbpwk.purwakartakab.go.id/site/login" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://ebphtbpwk.purwakartakab.go.id/site/login</a>
                                </li>
                                <li>
                                    <span>Cek Transaksi Pajak BPHTB : </span>
                                    <a href="https://ebphtbpwk.purwakartakab.go.id/auth/check" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://ebphtbpwk.purwakartakab.go.id/auth/check</a>
                                </li>
                                <li>
                                    <span>Cek Objek Pajak BPHTB : </span>
                                    <a href="https://ebphtbpwk.purwakartakab.go.id/auth/checkobject" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://ebphtbpwk.purwakartakab.go.id/auth/checkobject</a>
                                </li>
                                <li>
                                    <span>Cek Simulasi Pajak BPHTB : </span>
                                    <a href="https://ebphtbpwk.purwakartakab.go.id/auth/calculator" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://ebphtbpwk.purwakartakab.go.id/auth/calculator</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Tarif Bea Perolehan Hak Atas Tanah dan Bangunan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Jual Beli : Harga Transaksi (Risalah Lelang, Brosur, Nilai Wajar) – NPOPTKP (80 Juta Rupiah) X 5%</li>
                                <li>Hibah : Total NJOP – NPOPTKP (80 Juta Rupiah) X 5%</li>
                                <li>APHB : Hitungan APHB - NPOPTKP (80 Juta Rupiah) X 5%</li>
                                <li>Lelang : Risalah Lelang - NPOPTKP (80 Juta Rupiah) X 5%</li>
                                <li>Waris : Total NJOP – NPOPTKP X 5% NPOPTKP Waris Satu Derajat Lurus sebesar 300 Juta Rupiah, selain itu sebesar 80 Juta Rupiah</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Jual Beli</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Pembeli</li>
                                <li>KTP dan KK Penjual</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Draft AJB</li>
                                <li>Sertifikat (SHGB/SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Kwitansi</li>
                                <li>Surat Pernyataan Jual Beli Bermaterai</li>
                                <li>Surat Kuasa dari Notaris</li>
                                <li>Dokumen lain yang dibutuhkan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Jual Beli (Perumahan Subsidi)</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Pembeli</li>
                                <li>KTP dan KK Penjual</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Draft AJB</li>
                                <li>Sertifikat (SHGB/SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Kwitansi (Jika Cash) / SP3K (Jika Kredit)</li>
                                <li>Surat Pernyataan Jual Beli Bermaterai</li>
                                <li>Surat Kuasa dari Notaris</li>
                                <li>Brosur Perumahan</li>
                                <li>Dokumen lain yang dibutuhkan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Jual Beli Perumahan Subsidi MBR/Masyarakat Berpenghasilan Rendah</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Pembeli (Jika sudah menikah wajib dilampirkan juga)</li>
                                <li>KTP dan KK Penjual</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Draft AJB</li>
                                <li>Sertifikat (SHGB/SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Kwitansi (Jika Cash) / SP3K (Jika Kredit)</li>
                                <li>Surat Pernyataan Jual Beli Bermaterai</li>
                                <li>Surat Kuasa dari Notaris</li>
                                <li>Brosur Perumahan</li>
                                <li>Dokumen lain yang dibutuhkan</li>
                                <li>Slip gaji 3 bulan terakhir sejak saat tanggal penyerahan berkas BPHTB</li>
                                <li>Slip gaji pasangan jika bekerja</li>
                                <li>Surat Pernyataan Penghasilan yang ditandatangani oleh atasan WP</li>
                                <li>Surat Pernyataan Belum Memiliki Rumah dari Kelurahan/Desa</li>
                                <li>Surat Pernyataan Tidak Bekerja dari Kelurahan/Desa (Jika pasangan tidak bekerja)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Hibah</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Penerima Hibah</li>
                                <li>KTP dan KK Pemberi Hibah</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Draft Akta Hibah</li>
                                <li>Sertifikat (SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Surat Kuasa dari Notaris</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Waris</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Para Ahli Waris</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Surat Keterangan Ahli Waris</li>
                                <li>Surat Kuasa Ahli Waris</li>
                                <li>Sertifikat (SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Akta Kematian</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Akta Pembagian Hak Bersama</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK yang menerima APHB</li>
                                <li>KTP dan KK para ahli waris yang tidak menerima APHB</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Draft APHB</li>
                                <li>Sertifikat (SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Surat Kuasa dari Notaris</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi Lelang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Pemenang Lelang</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Surat Keterangan Risalah Lelang</li>
                                <li>Sertifikat (SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi PTSL</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP dan KK Wajib Pajak yang mengikuti program PTSL</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>Sertifikat (SHM) bisa yang elektronik atau analog</li>
                                <li>SPPT</li>
                                <li>Surat Keterangan BPHTB Terhutang dari BPN</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Validasi SK BPN</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>KTP Direktur Perusahaan</li>
                                <li>NPWP Perusahaan</li>
                                <li>Foto Lokasi beserta Akses Jalannya</li>
                                <li>SK BPN</li>
                                <li>SPPT</li>
                                <li>Akta Pendirian Perusahaan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="content-pdl" class="layanan-pane hidden flex flex-col gap-[0.19vw] max-md:gap-[1.538vw] max-md:px-[2.051vw]">
                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Cek Status Pajak Daerah Lainnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.6vw] max-md:space-y-[2vw]">
                                <li>
                                    <a href="https://sptpd.purwakartakab.go.id/site/login" target="_blank" rel="noopener noreferrer" class="text-[#EAA90D] hover:underline underline-offset-2 break-all">https://sptpd.purwakartakab.go.id/site/login</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Persyaratan Pendaftaran NPWPD</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Fotokopi KTP/Paspor Pemilik</li>
                                <li>NIB dari OSS / Izin Usaha / Surat Pernyataan Kegiatan Usaha dari Pemilik</li>
                                <li>Foto Lokasi Usaha</li>
                                <li>Isi Formulir Pendaftaran</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Perubahan Data WP / OP</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Wajib lapor jika ada perubahan identitas pemilik atau nama usaha.</li>
                                <li>Syarat: Isi formulir perubahan data di kantor Bapenda.</li>
                                <li>Lampiran: NPWPD lama asli, KTP baru, NIB terbaru jika ada perubahan badan usaha, serta foto lokasi baru.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Pembetulan SPTPD / SKPD</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Wajib Pajak dapat mengajukan pembetulan jika ada salah tulis/hitung.</li>
                                <li>Syarat: Ajukan surat permohonan bermeterai ke Kepala Bapenda.</li>
                                <li>Lampiran: SPTPD/SKPD asli, bukti bayar, & dokumen pendukung/pembukuan riil.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Cara Hitung & Tarif PBJT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <div class="jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw]">
                                <p class="font-semibold text-[#EAA90D] mb-[0.5vw] max-md:mb-[2vw]">Sistem Self Assessment. Tarif PBJT Standar = 10%</p>
                                <ul class="list-disc list-inside space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                    <li>Restoran/Kafe: 10%</li>
                                    <li>Katering: 10%</li>
                                    <li>Perhotelan/Kos: 10%</li>
                                    <li>Jasa Parkir: 10%</li>
                                    <li>Hiburan Umum: 10%</li>
                                    <li>Pagelaran kesenian tradisional: 5%</li>
                                    <li>Hiburan Khusus (Diskotik/Spa/Karaoke): 40%</li>
                                    <li>
                                        Tenaga Listrik oleh rumah tangga:
                                        <ul class="list-[circle] list-inside ml-[1.5vw] max-md:ml-[4vw] space-y-[0.2vw] max-md:space-y-[1vw] mt-[0.2vw]">
                                            <li>Daya sampai dengan 2.200 VA: 5%</li>
                                            <li>Daya di atas 2.200 VA: 6%</li>
                                        </ul>
                                    </li>
                                    <li>Tenaga Listrik dari sumber lain: 3%</li>
                                    <li>Tenaga listrik yang dihasilkan sendiri dan dikonsumsi sendiri: 0,9%</li>
                                    <li>Tenaga listrik yang dihasilkan sendiri untuk kepentingan komersil: 1,5%</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Batas Waktu dan Sanksi Keterlambatan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Penyetoran pajak: Maksimal 10 hari kerja bulan berikutnya</li>
                                <li>Pelaporan omset (SPTPD): Maksimal 15 hari kerja bulan berikutnya</li>
                                <li>Terlambat lapor/bayar dikenakan sanksi administratif: BUNGA 1% PER BULAN dari pokok pajak yang belum dibayar</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Pajak Reklame & Tarif</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Pajak untuk spanduk komersial/nama pajak (NSR): 25% dari Nilai Strategis Reklame (NSR).</li>
                                <li>NSR dihitung dari: Ukuran, Jenis media, Lokasi, & Jangka waktu tayang.</li>
                                <li>Wajib lapor SEBELUM dipasang.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="w-full flex items-center justify-between gap-[1vw] max-md:gap-[2.051vw] p-[0.78vw] bg-white text-(--blue-color) jakarta-sans text-[0.97vw] cursor-pointer transition-all duration-300 accordion-header max-md:text-[3.59vw] text-left max-md:p-[2.051vw]">
                            <span>Pajak Air Tanah (PAT) & Tarif</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[1.17vw] shrink-0 transition-transform duration-300 transform accordion-icon max-md:size-[6.154vw]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="max-h-0 opacity-0 py-0 overflow-hidden transition-all duration-300 bg-transparent text-white px-[2vw] accordion-content max-md:text-[3.077vw]">
                            <ul class="list-disc list-inside jakarta-sans text-[0.9vw] leading-relaxed max-md:text-[3.077vw] max-md:p-[2.564vw] space-y-[0.35vw] max-md:space-y-[1.5vw]">
                                <li>Pajak untuk pemanfaatan air tanah komersil/usaha.</li>
                                <li>Tarif: 20% dari Nilai Perolehan Air Tanah (NPAT).</li>
                                <li>NPAT dihitung berdasarkan volume pemakaian x harga dasar air.</li>
                                <li>Wajib pasang meteran air.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="mt-[6vw] relative z-10 max-md:mt-[10vw]">
            <div class="w-full text-white text-[0.584vw] jakarta-sans max-md:text-[2.564vw]">
                <div class="text-center">
                    Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                </div>
            </div>
        </footer>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const mainTitles = {
            'pbb': 'PBB',
            'bphtb': 'BPHTB',
            'pdl': 'PDL'
        };

        const tabTitles = {
            'pbb': 'PAJAK BUMI DAN BANGUNAN',
            'bphtb': 'BEA PEROLEHAN HAK ATAS TANAH DAN BANGUNAN',
            'pdl': 'PAJAK DAERAH LAINNYA'
        };

        const mainTitleEl = document.getElementById('layanan-main-title');
        const titleEl = document.getElementById('layanan-sub-title');
        const panes = document.querySelectorAll('.layanan-pane');

        function switchTab(key) {
            if (!tabTitles[key]) key = 'pbb';

            if (mainTitleEl && mainTitles[key]) {
                mainTitleEl.textContent = mainTitles[key];
            }

            if (titleEl) {
                titleEl.textContent = tabTitles[key];
            }

            panes.forEach(pane => {
                if (pane.id === 'content-' + key) {
                    pane.classList.remove('hidden');
                } else {
                    pane.classList.add('hidden');
                }
            });
        }

        function getActiveKey() {
            const hash = window.location.hash.replace('#', '').toLowerCase();
            if (tabTitles[hash]) return hash;
            
            const phpSub = '<?= $sub_menu ?>';
            if (tabTitles[phpSub]) return phpSub;

            return 'pbb';
        }

        switchTab(getActiveKey());

        window.addEventListener('hashchange', function () {
            switchTab(getActiveKey());
        });

        const headers = document.querySelectorAll('.accordion-header');
        headers.forEach(header => {
            header.addEventListener('click', function () {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.accordion-icon');
                const isOpen = content.classList.contains('max-h-[60rem]');
                
                const item = this.closest('.accordion-item');
                const group = item ? item.parentElement : null;
                const siblingHeaders = group ? group.querySelectorAll('.accordion-header') : [];

                siblingHeaders.forEach(h => {
                    const c = h.nextElementSibling;
                    const i = h.querySelector('.accordion-icon');
                    
                    h.classList.remove('bg-(--yellow-color)');
                    h.classList.add('bg-white');
                    
                    if (i) i.classList.remove('rotate-180');
                    
                    c.classList.remove('max-h-[60rem]', 'opacity-100', 'py-[1.5vw]');
                    c.classList.add('max-h-0', 'opacity-0', 'py-0');
                });

                if (!isOpen) {
                    this.classList.remove('bg-white');
                    this.classList.add('bg-(--yellow-color)');
                    
                    if (icon) icon.classList.add('rotate-180');
                    
                    content.classList.remove('max-h-0', 'opacity-0', 'py-0');
                    content.classList.add('max-h-[60rem]', 'opacity-100', 'py-[1.5vw]');
                }
            });
        });
    });
    </script>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>