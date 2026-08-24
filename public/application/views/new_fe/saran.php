<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAPENDA Purwakarta – Kritik &amp; Saran</title>
    <meta name="description" content="Sampaikan kritik dan saran Anda kepada Badan Pendapatan Daerah (BAPENDA) Kabupaten Purwakarta." />
    <link rel="shortcut icon" href="<?= base_url('assets/new/img/favicon.ico') ?>" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Genos:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet" />

    <style>
/* ================================================================
   SARAN — BAPENDA Purwakarta
   Halaman Kritik & Saran — Desktop
   Canvas: 1283 × 733 px
   ================================================================ */

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html, body {
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: transparent;
}

/* ── Viewport wrapper ───────────────────────────────────────── */
.sar-wrap {
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    background: #ffffff;
}

/* ── Canvas 1283×733 ────────────────────────────────────────── */
.sar-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 1283px;
    height: 733px;
    overflow: visible;
    background: #ffffff;
}

/* ── Background foto kantor (terang, ringan) ────────────────── */
.sar-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 1283px;
    height: 733px;
    overflow: hidden;
    z-index: 1;
}
.sar-bg img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    max-width: none;
    display: block;
    opacity: 0.12;
}

/* ── Tower ornamen KANAN (gambar menara, semi-transparan) ────── */
.sar-tower-r {
    position: absolute;
    right: 0;
    top: 0;
    width: 260px;
    height: 550px;
    overflow: hidden;
    pointer-events: none;
    z-index: 2;
}
.sar-tower-r img {
    position: fixed;
    top: 70px;
    right: 0px;
    width: 28%;
    object-position: top right;
    max-width: none;
    display: block;
    opacity: 1;
}

/* ── Watermark "KRITIK & SARAN" ─────────────────────────────── */
.sar-watermark {
    position: absolute;
    left: 0;
    right: 125px;
    top: 70px;
    font-family: 'Krona One', sans-serif;
    font-size: 96px;
    font-weight: 400;
    color: #303752;
    opacity: 0.08;
    line-height: normal;
    white-space: nowrap;
    text-align: center;
    pointer-events: none;
    user-select: none;
    z-index: 3;
    letter-spacing: 2px;
}

/* ── Sidebar toggle ─────────────────────────────────────────── */
.sar-sidebar-toggle {
    flex-shrink: 0;
    width: 42px;
    height: 42px;
    background: #eaa90d;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    z-index: 2;
}
.sar-sidebar-toggle__icon { width: 22px; height: 22px; display: block; }
.sar-sidebar-wrap--open .sar-sidebar-toggle { display: none; }

.sar-sidebar {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    pointer-events: none;
    transition: max-height 0.3s ease, opacity 0.2s ease;
}
.sar-sidebar-wrap--open .sar-sidebar {
    max-height: 400px;
    opacity: 1;
    pointer-events: auto;
}
.sar-sidebar__item {
    position: relative;
    display: flex;
    align-items: center;
    width: 162px;
    height: 40px;
    padding: 0 22px;
    background: #ffffff;
    color: #303752;
    font-family: 'Genos', sans-serif;
    font-size: 24px;
    font-weight: 400;
    line-height: normal;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
}
.sar-sidebar__item:hover { background: #f5f6fa; }
.sar-sidebar__item--active {
    background: #eaa90d;
    color: #303752;
    width: 162px;
    height: 42px;
    border-bottom: 2px solid #303752;
    overflow: visible;
}
.sar-sidebar__item--active:hover { background: #eaa90d; }
.sar-sidebar__active-row {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    width: fit-content;
}
.sar-sidebar__close {
    flex-shrink: 0;
    width: 42px;
    height: 42px;
    background: #eaa90d;
    border: none;
    border-bottom: 2px solid #303752;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}
.sar-sidebar__close:hover { background: #d99c0c; }

/* ================================================================
   Area konten utama — form
   ================================================================ */
.sar-content {
    position: absolute;
    left: 60px;
    right: 40px;
    top: 190px;
    z-index: 10;
}

/* Alert */
.sar-alert {
    display: none;
    padding: 8px 16px;
    font-family: 'Genos', sans-serif;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 10px;
}
.sar-alert--success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
.sar-alert--error   { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

/* ── Form layout: 2 kolom ───────────────────────────────────── */
.sar-form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto auto auto;
    column-gap: 32px;
    row-gap: 0;
}

/* Field wrapper */
.sar-field {
    display: flex;
    flex-direction: column;
    margin-bottom: 14px;
}
.sar-field label {
    font-family: 'Genos', sans-serif;
    font-size: 18px;
    font-weight: 500;
    color: #303752;
    margin-bottom: 5px;
}
.sar-field input {
    width: 100%;
    height: 38px;
    padding: 0 12px;
    border: 1px solid #c8cbd8;
    border-radius: 0;
    background: #ffffff;
    font-family: 'Genos', sans-serif;
    font-size: 17px;
    color: #303752;
    outline: none;
    transition: border-color 0.15s;
}
.sar-field input:focus { border-color: #303752; }

/* Textarea Saran & Kritik — kiri, span baris 3 */
.sar-field--textarea {
    grid-column: 1;
    grid-row: 3 / 5;
    margin-bottom: 0;
}
.sar-field--textarea label {
    margin-bottom: 5px;
}
.sar-field textarea {
    width: 100%;
    height: 115px;
    padding: 10px 12px;
    border: 1px solid #c8cbd8;
    background: #ffffff;
    font-family: 'Genos', sans-serif;
    font-size: 17px;
    color: #303752;
    outline: none;
    resize: none;
    transition: border-color 0.15s;
}
.sar-field textarea:focus { border-color: #303752; }

/* Tombol Kirim + Batal — kanan bawah, baris 4 */
.sar-buttons {
    grid-column: 2;
    grid-row: 4;
    display: flex;
    flex-direction: row;
    gap: 16px;
    align-items: flex-end;
    padding-bottom: 0;
    margin-top: auto;
}

.sar-btn-kirim,
.sar-btn-batal {
    flex: 1;
    height: 42px;
    border: none;
    font-family: 'Genos', sans-serif;
    font-size: 22px;
    font-weight: 400;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    letter-spacing: 0.5px;
    transition: opacity 0.15s;
}
.sar-btn-kirim {
    background: #303752;
    color: #ffffff;
}
.sar-btn-kirim:hover { opacity: 0.85; }
.sar-btn-batal {
    background: #c0392b;
    color: #ffffff;
}
.sar-btn-batal:hover { opacity: 0.85; }

/* ================================================================
   Batik band — strip horizontal antara form dan footer
   ================================================================ */
.sar-batik-band {
    position: absolute;
    left: 0;
    right: 0;
    top: 505.5px;
    height: 190px;
    overflow: hidden;
    pointer-events: none;
    z-index: 5;
    opacity: 0.2;
}
.sar-batik-band img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    display: block;
    opacity: 0.22;
}

/* ================================================================
   Footer info bar — 3 kolom
   ================================================================ */
.sar-footer {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 115px;
    height: 130px;
    z-index: 10;
    display: grid;
    grid-template-columns: 1fr 1px 1fr 0.7px 1fr;
    align-items: start;
    padding: 22px 80px;
    gap: 0;
    overflow: hidden;
}

/* Garis pemisah vertikal */
.sar-footer__divider {
    background: #303752;
    height: 100%;
    align-self: stretch;
}

.sar-footer__col {
    padding: 0 28px;
}
.sar-footer__col:first-child { padding-left: 0; }
.sar-footer__col:last-child  { padding-right: 0; }

.sar-footer__title {
    font-family: 'Genos', sans-serif;
    font-size: 20px;
    font-weight: 500;
    color: #eaa90d;
    margin-bottom: 10px;
    letter-spacing: 0.3px;
}
.sar-footer__body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 400;
    color: #303752;
    line-height: 1.6;
}
.sar-footer__body a {
    color: #303752;
    text-decoration: underline;
    text-underline-offset: 2px;
}

/* ── Copyright ──────────────────────────────────────────────── */
.sar-copyright {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 85px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px;
    font-weight: 400;
    color: #0a0a0a;
    text-align: center;
    z-index: 11;
}

/* ── Sembunyikan di mobile ──────────────────────────────────── */
@media (max-width: 768px) {
    .sar-wrap { display: none; }
}

/* ================================================================
   SARAN MOBILE — BAPENDA Purwakarta
   Canvas: 412 × 915 px
   ================================================================ */

.sar-m-wrap *, .sar-m-wrap *::before, .sar-m-wrap *::after {
    box-sizing: border-box; margin: 0; padding: 0;
}

.sar-m-wrap {
    display: none;
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    background: #e8eaed;
}
@media (max-width: 768px) {
    .sar-m-wrap { display: block; }
}

.sar-m-canvas {
    position: absolute;
    top: 0; left: 0;
    width: 412px;
    height: 915px;
    overflow: visible;
    background: #f0f1f4;
}

/* ── Background ─────────────────────────────────────────────── */
/* .sar-m-bg {
    position: absolute;
    left: 0; top: 0;
    width: 412px; height: 915px;
    overflow: hidden;
    z-index: 1;
}
.sar-m-bg img {
    position: absolute;
    inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    object-position: center;
    max-width: none;
    display: block;
    opacity: 0.10;
} */

/* ── Tower ornamen kanan ────────────────────────────────────── */
.sar-m-tower {
    position: absolute;
    right: 0; top: 0;
    width: 160px; height: 500px;
    overflow: hidden;
    pointer-events: none;
    z-index: 2;
}
.sar-m-tower img {
    position: absolute;
    top: 0; right: 0;
    width: 100%; height: 100%;
    object-fit: contain;
    object-position: top right;
    max-width: none;
    display: block;
    opacity: 0.18;
}

/* ── Watermark ───────────────────────────────────────────────── */
.sar-m-watermark {
    position: absolute;
    left: 0; right: 0; top: 12px;
    font-family: 'Krona One', sans-serif;
    font-size: 38px;
    font-weight: 400;
    color: #303752;
    opacity: 0.08;
    text-align: center;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 3;
}

/* ── Sidebar toggle ─────────────────────────────────────────── */
.sar-m-sidebar-wrap {
    position: absolute;
    left: 0; top: 58px;
    z-index: 20;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.sar-m-sidebar-toggle {
    flex-shrink: 0;
    width: 56px; height: 56px;
    background: #eaa90d;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}
.sar-m-sidebar-toggle__icon { width: 28px; height: 28px; display: block; }
.sar-m-sidebar-wrap--open .sar-m-sidebar-toggle { display: none; }

.sar-m-sidebar {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    pointer-events: none;
    transition: max-height 0.3s ease, opacity 0.2s ease;
}
.sar-m-sidebar-wrap--open .sar-m-sidebar {
    max-height: 400px; opacity: 1; pointer-events: auto;
}
.sar-m-sidebar__item {
    display: flex;
    align-items: center;
    width: 200px; height: 52px;
    padding: 0 24px;
    background: #ffffff;
    color: #303752;
    font-family: 'Genos', sans-serif;
    font-size: 28px; font-weight: 400;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
}
.sar-m-sidebar__item:hover { background: #f5f6fa; }
.sar-m-sidebar__item--active {
    background: #eaa90d;
    width: 200px; height: 56px;
    border-bottom: 2.5px solid #303752;
    overflow: visible;
}
.sar-m-sidebar__active-row {
    display: flex; flex-direction: row; align-items: stretch; width: fit-content;
}
.sar-m-sidebar__close {
    flex-shrink: 0;
    width: 56px; height: 56px;
    background: #eaa90d;
    border: none;
    border-bottom: 2.5px solid #303752;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    padding: 0;
}
.sar-m-sidebar__close:hover { background: #d99c0c; }

/* ================================================================
   Konten — form
   ================================================================ */
.sar-m-content {
    position: absolute;
    left: 14px; right: 14px;
    top: 124px;
    z-index: 10;
}

.sar-m-alert {
    display: none;
    padding: 8px 12px;
    font-family: 'Genos', sans-serif;
    font-size: 14px; font-weight: 500;
    margin-bottom: 10px;
    text-align: center;
}
.sar-m-alert--success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
.sar-m-alert--error   { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

.sar-m-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.sar-m-field {
    display: flex;
    flex-direction: column;
    gap: 3px;
}
.sar-m-field label {
    font-family: 'Genos', sans-serif;
    font-size: 16px; font-weight: 500;
    color: #303752;
}
.sar-m-field input,
.sar-m-field textarea {
    width: 100%;
    padding: 7px 10px;
    border: 1px solid #c8cbd8;
    background: #ffffff;
    font-family: 'Genos', sans-serif;
    font-size: 15px; color: #303752;
    outline: none; resize: none;
    transition: border-color 0.15s;
}
.sar-m-field input:focus,
.sar-m-field textarea:focus { border-color: #303752; }
.sar-m-field input { height: 36px; padding: 0 10px; }
.sar-m-field textarea { height: 80px; padding: 8px 10px; }

.sar-m-buttons {
    display: flex;
    flex-direction: row;
    gap: 12px;
    margin-top: 4px;
}
.sar-m-btn-kirim,
.sar-m-btn-batal {
    flex: 1;
    height: 40px;
    border: none;
    font-family: 'Genos', sans-serif;
    font-size: 20px; font-weight: 400;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: opacity 0.15s;
}
.sar-m-btn-kirim { background: #303752; color: #ffffff; }
.sar-m-btn-kirim:hover  { opacity: 0.85; }
.sar-m-btn-batal { background: #c0392b; color: #ffffff; }
.sar-m-btn-batal:hover  { opacity: 0.85; }

/* ================================================================
   Batik band mobile — strip antara form dan footer
   ================================================================ */
.sar-m-batik-band {
    position: absolute;
    left: 0; right: 0;
    top: 540px;
    height: 100px;
    overflow: hidden;
    pointer-events: none;
    z-index: 5;
}
.sar-m-batik-band img {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    object-position: center center;
    display: block;
    opacity: 0.22;
}

/* ── Footer info bar ────────────────────────────────────────── */
.sar-m-footer {
    position: absolute;
    left: 0; right: 0;
    bottom: 50px;
    z-index: 10;
    padding: 18px 20px 16px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    overflow: hidden;
}
.sar-m-footer__col { display: flex; flex-direction: column; gap: 4px; }
.sar-m-footer__divider {
    width: 100%;
    height: 1px;
    background: rgba(255,255,255,0.18);
}
.sar-m-footer__title {
    font-family: 'Genos', sans-serif;
    font-size: 17px; font-weight: 500;
    color: #eaa90d;
}
.sar-m-footer__body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px; font-weight: 400;
    color: #303752;
    line-height: 1.55;
}
.sar-m-footer__body a { color: #303752; text-decoration: underline; }

/* ── Copyright ──────────────────────────────────────────────── */
.sar-m-copyright {
    position: absolute;
    left: 0; right: 0;
    bottom: 15px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 10px; font-weight: 400;
    color: #303752;
    text-align: center;
    z-index: 11;
}
    </style>
</head>
<body>
    <?php $this->load->view('new_fe/components/saran_hero'); ?>
    <?php $this->load->view('new_fe/components/saran_hero_mobile'); ?>
</body>
</html>
