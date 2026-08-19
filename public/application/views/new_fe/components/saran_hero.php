<?php
/**
 * SARAN HERO — BAPENDA Purwakarta
 * Halaman Kritik & Saran — Desktop
 * Canvas: 1283 × 733 px
 */
$b  = base_url('assets/beranda/');
$bs = base_url('assets/saran/');
?>

<div class="sar-wrap" id="sar-wrap">
<div class="sar-canvas" id="sar-canvas">

    <!-- ── Background foto kantor (terang, opacity rendah) ─── -->
    <!-- <div class="sar-bg" aria-hidden="true">
        <img src="<?= $b ?>bg-kantor.png" alt="" />
    </div> -->

    <!-- ── Tower ornamen KANAN ──────────────────────────────── -->
    <div class="sar-tower-r" aria-hidden="true">
        <img src="<?= $bs ?>tower 1.png" alt="" />
    </div>

    <!-- ── Watermark besar ───────────────────────────────────── -->
    <div class="sar-watermark" aria-hidden="true">KRITIK &amp; SARAN</div>

    <!-- ── Sidebar toggle ────────────────────────────────────── -->
    <div class="sar-sidebar-wrap" id="sar-sidebar-wrap">

        <button class="sar-sidebar-toggle" id="sar-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
            <svg class="sar-sidebar-toggle__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <nav class="sar-sidebar" id="sar-sidebar" aria-label="Menu utama">
            <a href="<?= base_url('beranda') ?>" class="sar-sidebar__item">Beranda</a>
            <a href="<?= base_url('tentang-kami') ?>" class="sar-sidebar__item">Profil</a>
            <a href="<?= base_url('layanan') ?>" class="sar-sidebar__item">Layanan</a>
            <a href="<?= base_url('blog') ?>" class="sar-sidebar__item">Informasi</a>
            <div class="sar-sidebar__active-row">
                <a href="<?= base_url('kritik-saran') ?>" class="sar-sidebar__item sar-sidebar__item--active" aria-current="page">
                    Saran &amp; Kritik
                </a>
                <button class="sar-sidebar__close" id="sar-sidebar-close" aria-label="Tutup menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="22" height="22" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- ── Konten: form ──────────────────────────────────────── -->
    <div class="sar-content">

        <!-- Alert -->
        <div class="sar-alert" id="sar-alert" role="alert"></div>

        <form class="sar-form" id="sar-form" novalidate>

            <!-- Kolom kiri baris 1: Nama -->
            <div class="sar-field">
                <label for="sar-nama">Nama</label>
                <input type="text" id="sar-nama" name="nama_lengkap" required />
            </div>

            <!-- Kolom kanan baris 1: Email -->
            <div class="sar-field">
                <label for="sar-email">Email</label>
                <input type="email" id="sar-email" name="email" />
            </div>

            <!-- Kolom kiri baris 2: No. HandPhone -->
            <div class="sar-field">
                <label for="sar-hp">No. HandPhone</label>
                <input type="tel" id="sar-hp" name="no_hp" />
            </div>

            <!-- Kolom kanan baris 2: Alamat -->
            <div class="sar-field">
                <label for="sar-alamat">Alamat</label>
                <input type="text" id="sar-alamat" name="alamat" />
            </div>

            <!-- Kolom kiri baris 3-4: Textarea Saran & Kritik -->
            <div class="sar-field sar-field--textarea">
                <label for="sar-kritik">Saran &amp; Kritik</label>
                <textarea id="sar-kritik" name="kritik" required></textarea>
            </div>

            <!-- Kolom kanan baris 3: kosong (spacer) -->
            <div class="sar-field" style="visibility:hidden;"></div>

            <!-- Kolom kanan baris 4: Tombol Kirim + Batal -->
            <div class="sar-buttons">
                <button type="submit" class="sar-btn-kirim" id="sar-btn-kirim">Kirim</button>
                <button type="button" class="sar-btn-batal" id="sar-btn-batal">Batal</button>
            </div>

        </form>
    </div>

    <!-- ── Batik band — strip antara form dan footer ─────────── -->
    <div class="sar-batik-band" aria-hidden="true">
        <img src="<?= $bs ?>batik sunda.png" alt="" />
    </div>

    <!-- ── Footer info bar ───────────────────────────────────── -->
    <div class="sar-footer" role="contentinfo">

        <div class="sar-footer__col">
            <div class="sar-footer__title">Alamat Kantor</div>
            <div class="sar-footer__body">
                Jl. Surawinata No.30A, Nagri Tengah, Kec.<br>
                Purwakarta, Kabupaten Purwakarta, Jawa Barat<br>
                41114
            </div>
        </div>

        <div class="sar-footer__divider" aria-hidden="true"></div>

        <div class="sar-footer__col">
            <div class="sar-footer__title">Jam Kerja</div>
            <div class="sar-footer__body">
                Senin - Jumat : 08:00 - 16:00 WIB<br>
                Sabtu - Minggu : Tutup
            </div>
        </div>

        <div class="sar-footer__divider" aria-hidden="true"></div>

        <div class="sar-footer__col">
            <div class="sar-footer__title">Telepon Kami Sekarang</div>
            <div class="sar-footer__body">
                <a href="tel:+6282111336025">(+62)821-1133-6025</a>
            </div>
        </div>

    </div>

    <!-- ── Copyright ─────────────────────────────────────────── -->
    <div class="sar-copyright">
        Copyright &copy; 2026 – Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div><!-- /.sar-canvas -->
</div><!-- /.sar-wrap -->

<script>
(function () {
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
    var wrap   = document.getElementById('sar-sidebar-wrap');
    var toggle = document.getElementById('sar-sidebar-toggle');
    var close  = document.getElementById('sar-sidebar-close');
    var menu   = document.getElementById('sar-sidebar');
    if (!toggle || !menu) return;
    function openMenu()  { wrap.classList.add('sar-sidebar-wrap--open');    toggle.setAttribute('aria-expanded','true');  toggle.setAttribute('aria-label','Tutup menu'); }
    function closeMenu() { wrap.classList.remove('sar-sidebar-wrap--open'); toggle.setAttribute('aria-expanded','false'); toggle.setAttribute('aria-label','Buka menu');  }
    toggle.addEventListener('click', function () { wrap.classList.contains('sar-sidebar-wrap--open') ? closeMenu() : openMenu(); });
    if (close) close.addEventListener('click', closeMenu);
})();
</script>

<script>
(function () {
    var form  = document.getElementById('sar-form');
    var alert = document.getElementById('sar-alert');
    var btn   = document.getElementById('sar-btn-kirim');
    var batal = document.getElementById('sar-btn-batal');
    if (!form) return;

    function showAlert(msg, type) {
        alert.textContent  = msg;
        alert.className    = 'sar-alert sar-alert--' + type;
        alert.style.display = 'block';
        setTimeout(function () { alert.style.display = 'none'; }, 5000);
    }

    batal.addEventListener('click', function () { form.reset(); alert.style.display = 'none'; });

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
