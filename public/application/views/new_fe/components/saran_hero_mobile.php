<?php
/**
 * SARAN HERO MOBILE — BAPENDA Purwakarta
 * Halaman Kritik & Saran — Mobile
 * Canvas: 412 × 915 px
 */
$b  = base_url('assets/beranda/');
$bs = base_url('assets/saran/');
?>

<div class="sar-m-wrap" id="sar-m-wrap">
<div class="sar-m-canvas" id="sar-m-canvas">

    <!-- ── Background ───────────────────────────────────────── -->
    <div class="sar-m-bg" aria-hidden="true">
        <img src="<?= $b ?>bg-kantor.png" alt="" />
    </div>

    <!-- ── Tower ornamen kanan ──────────────────────────────── -->
    <div class="sar-m-tower" aria-hidden="true">
        <img src="<?= $bs ?>tower 1.png" alt="" />
    </div>

    <!-- ── Watermark ────────────────────────────────────────── -->
    <div class="sar-m-watermark" aria-hidden="true">KRITIK &amp; SARAN</div>

    <!-- ── Sidebar toggle ────────────────────────────────────── -->
    <div class="sar-m-sidebar-wrap" id="sar-m-sidebar-wrap">

        <button class="sar-m-sidebar-toggle" id="sar-m-sidebar-toggle" aria-label="Buka menu" aria-expanded="false">
            <svg class="sar-m-sidebar-toggle__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <nav class="sar-m-sidebar" id="sar-m-sidebar" aria-label="Menu utama">
            <a href="<?= base_url('beranda') ?>" class="sar-m-sidebar__item">Beranda</a>
            <a href="<?= base_url('tentang-kami') ?>" class="sar-m-sidebar__item">Profil</a>
            <a href="<?= base_url('layanan') ?>" class="sar-m-sidebar__item">Layanan</a>
            <a href="<?= base_url('blog') ?>" class="sar-m-sidebar__item">Informasi</a>
            <div class="sar-m-sidebar__active-row">
                <a href="<?= base_url('kritik-saran') ?>" class="sar-m-sidebar__item sar-m-sidebar__item--active" aria-current="page">
                    Saran &amp; Kritik
                </a>
                <button class="sar-m-sidebar__close" id="sar-m-sidebar-close" aria-label="Tutup menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#303752" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="26" height="26" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- ── Konten: form ──────────────────────────────────────── -->
    <div class="sar-m-content">

        <div class="sar-m-alert" id="sar-m-alert" role="alert"></div>

        <form class="sar-m-form" id="sar-m-form" novalidate>

            <div class="sar-m-field">
                <label for="sar-m-nama">Nama</label>
                <input type="text" id="sar-m-nama" name="nama_lengkap" required />
            </div>

            <div class="sar-m-field">
                <label for="sar-m-email">Email</label>
                <input type="email" id="sar-m-email" name="email" />
            </div>

            <div class="sar-m-field">
                <label for="sar-m-hp">No. HandPhone</label>
                <input type="tel" id="sar-m-hp" name="no_hp" />
            </div>

            <div class="sar-m-field">
                <label for="sar-m-alamat">Alamat</label>
                <input type="text" id="sar-m-alamat" name="alamat" />
            </div>

            <div class="sar-m-field">
                <label for="sar-m-kritik">Saran &amp; Kritik</label>
                <textarea id="sar-m-kritik" name="kritik" required></textarea>
            </div>

            <div class="sar-m-buttons">
                <button type="submit" class="sar-m-btn-kirim" id="sar-m-btn-kirim">Kirim</button>
                <button type="button" class="sar-m-btn-batal" id="sar-m-btn-batal">Batal</button>
            </div>

        </form>
    </div>

    <!-- ── Batik band — strip antara form dan footer ─────────── -->
    <div class="sar-m-batik-band" aria-hidden="true">
        <img src="<?= $bs ?>batik sunda1 copy 1.png" alt="" />
    </div>

    <!-- ── Footer info bar ───────────────────────────────────── -->
    <div class="sar-m-footer">

        <div class="sar-m-footer__col">
            <div class="sar-m-footer__title">Alamat Kantor</div>
            <div class="sar-m-footer__body">
                Jl. Surawinata No.30A, Nagri Tengah, Kec. Purwakarta,<br>
                Kabupaten Purwakarta, Jawa Barat 41114
            </div>
        </div>

        <div class="sar-m-footer__divider" aria-hidden="true"></div>

        <div class="sar-m-footer__col">
            <div class="sar-m-footer__title">Jam Kerja</div>
            <div class="sar-m-footer__body">
                Senin - Jumat : 08:00 - 16:00 WIB<br>
                Sabtu - Minggu : Tutup
            </div>
        </div>

        <div class="sar-m-footer__divider" aria-hidden="true"></div>

        <div class="sar-m-footer__col">
            <div class="sar-m-footer__title">Telepon Kami Sekarang</div>
            <div class="sar-m-footer__body">
                <a href="tel:+6282111336025">(+62)821-1133-6025</a>
            </div>
        </div>

    </div>

    <!-- ── Copyright ─────────────────────────────────────────── -->
    <div class="sar-m-copyright">
        Copyright &copy; 2026 – Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div><!-- /.sar-m-canvas -->
</div><!-- /.sar-m-wrap -->

<script>
(function () {
    var wrap   = document.getElementById('sar-m-wrap');
    var canvas = document.getElementById('sar-m-canvas');
    var W = 412, H = 915;
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
    var wrap   = document.getElementById('sar-m-sidebar-wrap');
    var toggle = document.getElementById('sar-m-sidebar-toggle');
    var close  = document.getElementById('sar-m-sidebar-close');
    var menu   = document.getElementById('sar-m-sidebar');
    if (!toggle || !menu) return;
    function openMenu()  { wrap.classList.add('sar-m-sidebar-wrap--open');    toggle.setAttribute('aria-expanded','true');  toggle.setAttribute('aria-label','Tutup menu'); }
    function closeMenu() { wrap.classList.remove('sar-m-sidebar-wrap--open'); toggle.setAttribute('aria-expanded','false'); toggle.setAttribute('aria-label','Buka menu');  }
    toggle.addEventListener('click', function () { wrap.classList.contains('sar-m-sidebar-wrap--open') ? closeMenu() : openMenu(); });
    if (close) close.addEventListener('click', closeMenu);
})();
</script>

<script>
(function () {
    var form  = document.getElementById('sar-m-form');
    var alert = document.getElementById('sar-m-alert');
    var btn   = document.getElementById('sar-m-btn-kirim');
    var batal = document.getElementById('sar-m-btn-batal');
    if (!form) return;

    function showAlert(msg, type) {
        alert.textContent   = msg;
        alert.className     = 'sar-m-alert sar-m-alert--' + type;
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
