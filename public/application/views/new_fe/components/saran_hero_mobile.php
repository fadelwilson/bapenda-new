<?php
/**
 * SARAN HERO MOBILE — BAPENDA Purwakarta
 * Tailwind — scrollable, md:hidden
 */
$b  = base_url('assets/beranda/');
$bs = base_url('assets/saran/');
?>

<div class="hidden max-md:block min-h-screen bg-[#f0f1f4] flex flex-col overflow-x-hidden relative" id="sar-m-wrap">

    <div class="absolute right-0 top-0 w-[45%] max-w-[180px] h-[55%] overflow-hidden pointer-events-none z-[1]" aria-hidden="true">
        <img src="<?= $bs ?>tower 1.png" alt=""
             class="absolute top-0 right-0 w-full h-full object-contain object-right-top opacity-20" />
    </div>

    <div class="absolute left-0 right-0 top-3 krona-one text-[9vw] font-normal text-[#303752] opacity-[0.07] text-center whitespace-nowrap pointer-events-none select-none z-[1] leading-tight"
         aria-hidden="true">SARAN &amp;<br>KRITIK</div>

    <div class="absolute left-0 top-[58px] z-[20] flex flex-col items-start" id="sar-m-sidebar-wrap">

        <button class="shrink-0 w-[56px] h-[56px] bg-[#eaa90d] border-0 cursor-pointer flex items-center justify-center p-0"
                id="sar-m-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
            <svg class="w-[28px] h-[28px] block" viewBox="0 0 24 24" fill="none"
                 stroke="#303752" stroke-width="2.5" stroke-linecap="round"
                 stroke-linejoin="round" aria-hidden="true">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <nav class="flex flex-col overflow-hidden max-h-0 opacity-0 pointer-events-none transition-[max-height,opacity] duration-300 ease-in-out"
             id="sar-m-sidebar" aria-label="Menu utama">
            <a href="<?= base_url('beranda') ?>"
               class="flex items-center w-[200px] h-[52px] px-6 bg-white text-[#303752] genos text-[28px] font-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Beranda</a>
            <a href="<?= base_url('tentang-kami') ?>"
               class="flex items-center w-[200px] h-[52px] px-6 bg-white text-[#303752] genos text-[28px] font-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Profil</a>
            <a href="<?= base_url('layanan') ?>"
               class="flex items-center w-[200px] h-[52px] px-6 bg-white text-[#303752] genos text-[28px] font-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Layanan</a>
            <a href="<?= base_url('informasi') ?>"
               class="flex items-center w-[200px] h-[52px] px-6 bg-white text-[#303752] genos text-[28px] font-normal no-underline whitespace-nowrap overflow-hidden hover:bg-[#f5f6fa]">Informasi</a>
            <div class="flex flex-row items-stretch w-fit">
                <a href="<?= base_url('kritik-saran') ?>"
                   class="flex items-center w-[200px] h-[56px] px-6 bg-[#eaa90d] text-[#303752] genos text-[28px] font-normal no-underline whitespace-nowrap overflow-visible border-b-[2.5px] border-[#303752]"
                   aria-current="page">Saran &amp; Kritik</a>
                <button class="shrink-0 w-[56px] h-[56px] bg-[#eaa90d] border-0 border-b-[2.5px] border-[#303752] cursor-pointer flex items-center justify-center p-0 hover:bg-[#d99c0c]"
                        id="sar-m-sidebar-close" aria-label="Tutup menu">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round" width="26" height="26" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <div class="relative z-[10] flex flex-col px-4 pt-[130px] pb-6 gap-0">

        <div class="hidden text-[14px] font-medium genos text-center py-2 px-3 mb-3 rounded"
             id="sar-m-alert" role="alert"></div>

        <form class="flex flex-col gap-3" id="sar-m-form" novalidate>

            <div class="flex flex-col gap-1">
                <label for="sar-m-nama" class="genos text-[16px] font-medium text-[#303752]">Nama</label>
                <input type="text" id="sar-m-nama" name="nama_lengkap" required
                       class="w-full h-[38px] px-3 border border-[#c8cbd8] bg-white genos text-[15px] text-[#303752] outline-none focus:border-[#303752] rounded-none" />
            </div>

            <div class="flex flex-col gap-1">
                <label for="sar-m-email" class="genos text-[16px] font-medium text-[#303752]">Email</label>
                <input type="email" id="sar-m-email" name="email"
                       class="w-full h-[38px] px-3 border border-[#c8cbd8] bg-white genos text-[15px] text-[#303752] outline-none focus:border-[#303752] rounded-none" />
            </div>

            <div class="flex flex-col gap-1">
                <label for="sar-m-alamat" class="genos text-[16px] font-medium text-[#303752]">Alamat</label>
                <input type="text" id="sar-m-alamat" name="alamat"
                       class="w-full h-[38px] px-3 border border-[#c8cbd8] bg-white genos text-[15px] text-[#303752] outline-none focus:border-[#303752] rounded-none" />
            </div>

            <div class="flex flex-col gap-1">
                <label for="sar-m-hp" class="genos text-[16px] font-medium text-[#303752]">No. HandPhone</label>
                <input type="tel" id="sar-m-hp" name="no_hp"
                       class="w-full h-[38px] px-3 border border-[#c8cbd8] bg-white genos text-[15px] text-[#303752] outline-none focus:border-[#303752] rounded-none" />
            </div>

            <div class="flex flex-col gap-1">
                <label for="sar-m-kritik" class="genos text-[16px] font-medium text-[#303752]">Saran &amp; Kritik</label>
                <textarea id="sar-m-kritik" name="kritik" required rows="4"
                          class="w-full px-3 py-2 border border-[#c8cbd8] bg-white genos text-[15px] text-[#303752] outline-none focus:border-[#303752] rounded-none resize-none"></textarea>
            </div>

            <div class="flex flex-row gap-3 mt-1">
                <button type="submit" id="sar-m-btn-kirim"
                        class="flex-1 h-[48px] bg-[#303752] text-white genos text-[20px] font-normal border-0 cursor-pointer flex items-center justify-center hover:opacity-90 transition-opacity">
                    Kirim
                </button>
                <button type="button" id="sar-m-btn-batal"
                        class="flex-1 h-[48px] bg-[#c0392b] text-white genos text-[20px] font-normal border-0 cursor-pointer flex items-center justify-center hover:opacity-90 transition-opacity">
                    Batal
                </button>
            </div>

        </form>
    </div>

    <div class="relative w-full h-[90px] overflow-hidden pointer-events-none opacity-25 mt-2" aria-hidden="true">
        <img src="<?= $bs ?>batik.png" alt=""
             class="absolute inset-0 w-full h-full object-cover object-center" />
    </div>

    <div class="flex flex-col px-5 py-5 gap-4 bg-[#f0f1f4]">

        <div class="flex flex-col gap-1">
            <div class="genos text-[18px] font-medium text-[#eaa90d]">Alamat Kantor</div>
            <div class="jakarta-sans text-[12px] text-[#303752] leading-[1.6]">
                Jl. Surawinata No.30A, Nagri Tengah, Kec. Purwakarta,<br>
                Kabupaten Purwakarta, Jawa Barat 41114
            </div>
        </div>

        <div class="w-full h-px bg-[#c8cbd8]" aria-hidden="true"></div>

        <div class="flex flex-col gap-1">
            <div class="genos text-[18px] font-medium text-[#eaa90d]">Jam Kerja</div>
            <div class="jakarta-sans text-[12px] text-[#303752] leading-[1.6]">
                Senin - Jumat : 08:00 - 16:00 WIB<br>
                Sabtu - Minggu : Tutup
            </div>
        </div>

        <div class="w-full h-px bg-[#c8cbd8]" aria-hidden="true"></div>

        <div class="flex flex-col gap-1">
            <div class="genos text-[18px] font-medium text-[#eaa90d]">Telepon Kami Sekarang</div>
            <div class="jakarta-sans text-[12px] text-[#303752] leading-[1.6]">
                <a href="tel:+6282111336025" class="text-[#303752] underline underline-offset-2">(+62)821-1133-6025</a>
            </div>
        </div>

    </div>

    <div class="text-center jakarta-sans text-[11px] text-[#303752] py-4 px-4 bg-[#f0f1f4]">
        Copyright &copy; 2026 – Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div>

<script>
(function () {
    /* ── Sidebar toggle ── */
    var toggle   = document.getElementById('sar-m-sidebar-toggle');
    var closeBtn = document.getElementById('sar-m-sidebar-close');
    var menu     = document.getElementById('sar-m-sidebar');
    if (!toggle || !menu) return;

    function openMenu() {
        menu.style.maxHeight     = '400px';
        menu.style.opacity       = '1';
        menu.style.pointerEvents = 'auto';
        toggle.style.display     = 'none';
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Tutup menu');
    }
    function closeMenu() {
        menu.style.maxHeight     = '0';
        menu.style.opacity       = '0';
        menu.style.pointerEvents = 'none';
        toggle.style.display     = '';
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
    var form    = document.getElementById('sar-m-form');
    var alertEl = document.getElementById('sar-m-alert');
    var btn     = document.getElementById('sar-m-btn-kirim');
    var batal   = document.getElementById('sar-m-btn-batal');
    if (!form) return;

    function showAlert(msg, type) {
        alertEl.textContent = msg;
        alertEl.className   = type === 'success'
            ? 'block text-[14px] font-medium genos text-center py-2 px-3 mb-3 bg-[#d4edda] text-[#155724] border border-[#c3e6cb]'
            : 'block text-[14px] font-medium genos text-center py-2 px-3 mb-3 bg-[#f8d7da] text-[#721c24] border border-[#f5c6cb]';
        setTimeout(function () { alertEl.className = 'hidden'; }, 5000);
    }

    batal.addEventListener('click', function () {
        form.reset();
        alertEl.className = 'hidden';
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
