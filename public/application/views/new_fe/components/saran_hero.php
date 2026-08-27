<?php
/**
 * SARAN HERO — BAPENDA Purwakarta
 * Halaman Kritik & Saran — Desktop
 * Canvas: 1283 × 733 px
 */
$b  = base_url('assets/beranda/');
$bs = base_url('assets/saran/');
?>


<div class="fixed inset-0 w-screen h-screen overflow-hidden bg-white max-md:hidden" id="sar-wrap">

    <div class="absolute top-0 left-0 w-[1283px] h-[733px] overflow-visible bg-white" id="sar-canvas">

        <div class="absolute right-0 top-0 w-[260px] h-[550px] overflow-hidden pointer-events-none z-[2]" aria-hidden="true">
            <img src="<?= $bs ?>tower 1.png" alt=""
                 class="fixed top-[70px] right-0 w-[28%] object-right-top max-w-none block opacity-100" />
        </div>
       
        <div class="absolute left-0 right-[125px] top-[70px] krona-one text-[96px] font-normal text-[#303752] opacity-[0.08] leading-normal whitespace-nowrap text-center pointer-events-none select-none z-[3] tracking-[2px]" aria-hidden="true">
            KRITIK &amp; SARAN
        </div>

        <div class="fixed left-0 top-1/2 -translate-y-1/2 z-[100] flex flex-col items-start" id="sar-sidebar-wrap">

            <button class="shrink-0 w-[42px] h-[42px] bg-[#eaa90d] border-0 cursor-pointer flex items-center justify-center p-0 z-[2]"
                    id="sar-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
                <svg class="w-[22px] h-[22px] block" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>

            <nav class="flex flex-col overflow-hidden max-h-0 opacity-0 pointer-events-none transition-[max-height,opacity] duration-300 ease-in-out"
                 id="sar-sidebar" aria-label="Menu utama">
                <a href="<?= base_url('beranda') ?>"
                   class="relative flex items-center w-[162px] h-[40px] px-[22px] bg-white text-[#303752] genos text-[24px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Beranda</a>
                <a href="<?= base_url('tentang-kami') ?>"
                   class="relative flex items-center w-[162px] h-[40px] px-[22px] bg-white text-[#303752] genos text-[24px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Profil</a>
                <a href="<?= base_url('layanan') ?>"
                   class="relative flex items-center w-[162px] h-[40px] px-[22px] bg-white text-[#303752] genos text-[24px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Layanan</a>
                <a href="<?= base_url('informasi') ?>"
                   class="relative flex items-center w-[162px] h-[40px] px-[22px] bg-white text-[#303752] genos text-[24px] font-normal leading-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Informasi</a>

                <div class="flex flex-row items-stretch w-fit">
                    <a href="<?= base_url('kritik-saran') ?>"
                       class="relative flex items-center w-[162px] h-[42px] px-[22px] bg-[#eaa90d] text-[#303752] genos text-[24px] font-normal leading-normal no-underline whitespace-nowrap overflow-visible border-b-2 border-[#303752] hover:bg-[#eaa90d]"
                       aria-current="page">
                        Saran &amp; Kritik
                    </a>
                    <button class="shrink-0 w-[41px] h-[41px] bg-[#eaa90d] border-0 cursor-pointer flex items-center justify-center p-0 hover:bg-[#d99c0c]"
                            id="sar-sidebar-close" aria-label="Tutup menu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#303752" stroke-width="2.5" stroke-linecap="round"
                             stroke-linejoin="round" width="22" height="22" aria-hidden="true">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>

        <div class="absolute left-[60px] right-[40px] top-[190px] z-[10]">

            <div class="hidden py-2 px-4 genos text-[14px] font-medium mb-[10px]"
                 id="sar-alert" role="alert"></div>

            <form class="grid grid-cols-2 grid-rows-[auto_auto_auto_auto] gap-x-8 gap-y-0"
                  id="sar-form" novalidate>

                <div class="flex flex-col mb-[14px]">
                    <label for="sar-nama" class="genos text-[18px] font-medium text-[#303752] mb-[5px]">Nama</label>
                    <input type="text" id="sar-nama" name="nama_lengkap" required
                           class="w-full h-[38px] px-3 border border-[#c8cbd8] rounded-none bg-white genos text-[17px] text-[#303752] outline-none transition-colors duration-150 focus:border-[#303752]" />
                </div>

                <div class="flex flex-col mb-[14px]">
                    <label for="sar-email" class="genos text-[18px] font-medium text-[#303752] mb-[5px]">Email</label>
                    <input type="email" id="sar-email" name="email"
                           class="w-full h-[38px] px-3 border border-[#c8cbd8] rounded-none bg-white genos text-[17px] text-[#303752] outline-none transition-colors duration-150 focus:border-[#303752]" />
                </div>

                <div class="flex flex-col mb-[14px]">
                    <label for="sar-hp" class="genos text-[18px] font-medium text-[#303752] mb-[5px]">No. HandPhone</label>
                    <input type="tel" id="sar-hp" name="no_hp"
                           class="w-full h-[38px] px-3 border border-[#c8cbd8] rounded-none bg-white genos text-[17px] text-[#303752] outline-none transition-colors duration-150 focus:border-[#303752]" />
                </div>

                <div class="flex flex-col mb-[14px]">
                    <label for="sar-alamat" class="genos text-[18px] font-medium text-[#303752] mb-[5px]">Alamat</label>
                    <input type="text" id="sar-alamat" name="alamat"
                           class="w-full h-[38px] px-3 border border-[#c8cbd8] rounded-none bg-white genos text-[17px] text-[#303752] outline-none transition-colors duration-150 focus:border-[#303752]" />
                </div>

                <div class="flex flex-col col-start-1 row-start-3 row-end-5 mb-0">
                    <label for="sar-kritik" class="genos text-[18px] font-medium text-[#303752] mb-[5px]">Saran &amp; Kritik</label>
                    <textarea id="sar-kritik" name="kritik" required
                              class="w-full h-[115px] py-[10px] px-3 border border-[#c8cbd8] bg-white genos text-[17px] text-[#303752] outline-none resize-none transition-colors duration-150 focus:border-[#303752]"></textarea>
                </div>

                <div class="flex flex-col mb-[14px] invisible"></div>

                <div class="col-start-2 row-start-4 flex flex-row gap-4 items-end mt-auto">
                    <button type="submit" id="sar-btn-kirim"
                            class="flex-1 h-[42px] border-0 genos text-[22px] font-normal cursor-pointer flex items-center justify-center tracking-[0.5px] transition-opacity duration-150 bg-[#303752] text-white hover:opacity-85">
                        Kirim
                    </button>
                    <button type="button" id="sar-btn-batal"
                            class="flex-1 h-[42px] border-0 genos text-[22px] font-normal cursor-pointer flex items-center justify-center tracking-[0.5px] transition-opacity duration-150 bg-[#c0392b] text-white hover:opacity-85">
                        Batal
                    </button>
                </div>

            </form>
        </div>

        <div class="absolute left-0 right-0 top-[505.5px] h-[190px] overflow-hidden pointer-events-none z-[5] opacity-20" aria-hidden="true">
            <img src="<?= $bs ?>batik.png" alt=""
                 class="absolute top-0 left-0 w-full h-full object-cover object-center block opacity-100" />
        </div>

        <div class="absolute left-0 right-0 top-[515px] h-[130px] z-[10] grid grid-cols-[1fr_1px_1fr_0.7px_1fr] items-center px-[80px] py-[22px] gap-0 overflow-hidden" role="contentinfo">

            <div class="pl-0 pr-[28px]">
                <div class="genos text-[20px] font-medium text-[#eaa90d] mb-[10px] tracking-[0.3px]">Alamat Kantor</div>
                <div class="jakarta-sans text-[12px] font-normal text-[#303752] leading-[1.6]">
                    Jl. Surawinata No.30A, Nagri Tengah, Kec.<br>
                    Purwakarta, Kabupaten Purwakarta, Jawa Barat<br>
                    41114
                </div>
            </div>

            <div class="bg-[#303752] h-full self-stretch" aria-hidden="true"></div>

            <div class="px-[28px]">
                <div class="genos text-[20px] font-medium text-[#eaa90d] mb-[10px] tracking-[0.3px]">Jam Kerja</div>
                <div class="jakarta-sans text-[12px] font-normal text-[#303752] leading-[1.6]">
                    Senin - Jumat : 08:00 - 16:00 WIB<br>
                    Sabtu - Minggu : Tutup
                </div>
            </div>

            <div class="bg-[#303752] h-full self-stretch" aria-hidden="true"></div>

            <div class="pl-[28px] pr-0">
                <div class="genos text-[20px] font-medium text-[#eaa90d] mb-[10px] tracking-[0.3px]">Telepon Kami Sekarang</div>
                <div class="jakarta-sans text-[12px] font-normal text-[#303752] leading-[1.6]">
                    <a href="tel:+6282111336025" class="text-[#303752] underline underline-offset-[2px]">(+62)821-1133-6025</a>
                </div>
            </div>
        </div>

        <div class="absolute left-0 right-0 top-[640px] jakarta-sans text-[11px] font-normal text-[#0a0a0a] text-center z-[11]">
            Copyright &copy; 2026 – Badan Pendapatan Daerah Kab. Purwakarta
        </div>
</div>

<script>
(function () {
    /* ── Scale canvas to viewport ── */
    var wrap   = document.getElementById('sar-wrap');
    var canvas = document.getElementById('sar-canvas');
    var W = 1283, H = 733;
    function doScale() {
        var vw = wrap.clientWidth  || window.innerWidth;
        var vh = wrap.clientHeight || window.innerHeight;
        var s  = Math.max(vw / W, vh / H);
        var ox = (vw - W * s) / 2;
        var oy = Math.min(0, (vh - H * s) / 2);
        canvas.style.transform       = 'translate(' + ox + 'px,' + oy + 'px) scale(' + s + ')';
        canvas.style.transformOrigin = 'top left';
    }
    doScale();
    window.addEventListener('resize', doScale);
})();
</script>

<script>
(function () {
    /* ── Sidebar toggle ── */
    var toggle  = document.getElementById('sar-sidebar-toggle');
    var closeBtn = document.getElementById('sar-sidebar-close');
    var menu    = document.getElementById('sar-sidebar');
    if (!toggle || !menu) return;

    function openMenu() {
        menu.style.maxHeight    = '400px';
        menu.style.opacity      = '1';
        menu.style.pointerEvents = 'auto';
        toggle.style.display    = 'none';
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Tutup menu');
    }
    function closeMenu() {
        menu.style.maxHeight    = '0';
        menu.style.opacity      = '0';
        menu.style.pointerEvents = 'none';
        toggle.style.display    = '';
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu');
    }
    toggle.addEventListener('click', function () {
        menu.style.maxHeight === '400px' ? closeMenu() : openMenu();
    });
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
})();
</script>

<script>
(function () {
    /* ── Form submit ── */
    var form  = document.getElementById('sar-form');
    var alertEl = document.getElementById('sar-alert');
    var btn   = document.getElementById('sar-btn-kirim');
    var batal = document.getElementById('sar-btn-batal');
    if (!form) return;

    function showAlert(msg, type) {
        alertEl.textContent = msg;
        alertEl.className   = type === 'success'
            ? 'block py-2 px-4 genos text-[14px] font-medium mb-[10px] bg-[#d4edda] text-[#155724] border border-[#c3e6cb]'
            : 'block py-2 px-4 genos text-[14px] font-medium mb-[10px] bg-[#f8d7da] text-[#721c24] border border-[#f5c6cb]';
        setTimeout(function () { alertEl.className = 'hidden py-2 px-4 genos text-[14px] font-medium mb-[10px]'; }, 5000);
    }

    batal.addEventListener('click', function () {
        form.reset();
        alertEl.className = 'hidden py-2 px-4 genos text-[14px] font-medium mb-[10px]';
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (!form.nama_lengkap.value.trim() || !form.kritik.value.trim()) {
            showAlert('Nama dan Saran & Kritik wajib diisi.', 'error');
            return;
        }
        btn.disabled    = true;
        btn.textContent = 'Mengirim...';
        fetch('<?= base_url('api/kritik-saran/store') ?>', { method: 'POST', body: new FormData(form) })
            .then(function (r) { return r.json(); })
            .then(function (res) {
                if (res.meta && res.meta.code === 200) { showAlert(res.meta.message, 'success'); form.reset(); }
                else { showAlert((res.meta && res.meta.message) || 'Gagal mengirim.', 'error'); }
            })
            .catch(function () { showAlert('Terjadi kesalahan koneksi.', 'error'); })
            .finally(function () { btn.disabled = false; btn.textContent = 'Kirim'; });
    });
})();
</script>
