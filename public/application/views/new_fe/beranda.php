<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAPENDA Purwakarta – Beranda</title>
    <meta name="description" content="Situs resmi Badan Pendapatan Daerah (BAPENDA) Kabupaten Purwakarta." />
    <link rel="shortcut icon" href="<?= base_url('assets/new/img/favicon.ico') ?>" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Genos:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet" />

    <style>
/* ================================================================
   BERANDA — BAPENDA Purwakarta
   Pixel-perfect dari Figma node 1:683 "MENU BERANDA"
   Canvas: 1283 × 733 px
   ================================================================ */

/* ── Reset ─────────────────────────────────────────────────── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html, body {
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: transparent;
}

/* ── Viewport wrapper ───────────────────────────────────────── */
.bap-wrap {
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    background: #0d1020;
}

/* ── Canvas 1283×733 ─────────────────────────────────────────
   overflow:visible wajib agar elemen di top:26 (logo) dan
   top:712 (copyright) tidak terpotong saat di-transform
   ─────────────────────────────────────────────────────────── */
.bap-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 1283px;
    height: 733px;
    overflow: visible;
}

/* ================================================================
   NODE 1:686 — Background foto kantor
   ================================================================ */
.bap-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 1283px;
    height: 733px;
    overflow: hidden;
    z-index: 1;
}
.bap-bg img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    max-width: none;
    display: block;
}

/* ================================================================
   NODE 1:690 — Ornamen Lawang KIRI
   ================================================================ */
.bap-ornamen-l {
    position: absolute;
    left: -3px;
    top: 120px;
    width: 190px;
    height: 513px;
    overflow: hidden;
    pointer-events: none;
    z-index: 3;
}
.bap-ornamen-l img {
    position: absolute;
    left: -175.93%;
    top: -4.39%;
    width: 356.02%;
    height: 124.98%;
    max-width: none;
}

/* ================================================================
   NODE 1:691 — Ornamen Lawang KANAN
   ================================================================ */
.bap-ornamen-r {
    position: absolute;
    left: auto;
    right: -1px;
    top: 120px;
    width: 183px;
    height: 513px;
    overflow: hidden;
    pointer-events: none;
    z-index: 3;
}
.bap-ornamen-r img {
    position: absolute;
    left: -86.06%;
    top: -4.39%;
    width: 369.71%;
    height: 124.98%;
    max-width: none;
}

/* ================================================================
   NODE 1:692 — gplay SVG overlay
   ================================================================ */
.bap-gplay {
    position: absolute;
    left: 0;
    top: 0;
    width: 1283px;
    height: 733px;
    pointer-events: none;
    z-index: 4;
}
.bap-gplay img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
}

/* ================================================================
   NODE 1:693 — Watermark "BERANDA"
   ================================================================ */
.bap-watermark {
    position: absolute;
    left: 700px;
    top: 68px;
    font-family: 'Krona One', sans-serif;
    font-size: 86px;
    font-style: normal;
    font-weight: 400;
    color: #ffffff;
    opacity: 0.35;
    line-height: normal;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 6;
}

/* ================================================================
   NODE 1:751/1:752 — Logo Group
   ================================================================ */
.bap-logo {
    position: absolute;
    left: 17px;
    top: 80px;
    pointer-events: none;
    z-index: 20;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 8px;
}
.bap-logo__mark {
    display: block;
    line-height: 0;
    flex-shrink: 0;
}
.bap-logo__mark img {
    height: 48px;
    display: block;
}
.bap-logo__text {
    display: block;
    line-height: 0;
    flex-shrink: 0;
}
.bap-logo__text img {
    display: block;
}

/* ================================================================
   NODE 1:727 — Headline
   ================================================================ */
.bap-headline {
    position: absolute;
    left: 172px;
    top: 197px;
    width: 940px;
    height: 230px;
    font-family: 'Genos', sans-serif;
    font-size: 96px;
    font-weight: 400;
    color: #f4c24a;
    text-align: center;
    line-height: normal;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    z-index: 10;
}

/* ================================================================
   NODE 1:726 — Deskripsi
   ================================================================ */
.bap-desc {
    position: absolute;
    left: 172px;
    top: 417px;
    width: 801px;
    height: 79.023px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 20px;
    font-weight: 400;
    color: #ffffff;
    line-height: normal;
    z-index: 10;
}

/* ================================================================
   NODE 1:695 — Badges row
   ================================================================ */
.bap-badges {
    position: absolute;
    top: 550px;
    display: flex;
    gap: 19px;
    z-index: 10;
    left: 50%;
    transform: translateX(-50%);
}

.bap-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    width: 116px;
    height: 31.609px;
    padding: 0 8px;
    background: #ffffff;
    border: 1px solid #303752;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #303752;
    white-space: nowrap;
    flex-shrink: 0;
}
.bap-badge--noborder {
    border: none;
}
.bap-badge__icon {
    width: 18.476px;
    height: 18.476px;
    display: block;
    flex-shrink: 0;
}

/* ================================================================
   NODE 1:729 — Sidebar toggle + menu
   ================================================================ */
.bap-sidebar-wrap {
    position: absolute;
    left: 1px;
    top: 277px;
    z-index: 20;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.bap-sidebar-toggle {
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
.bap-sidebar-toggle__icon {
    width: 22px;
    height: 22px;
    display: block;
}
.bap-sidebar-wrap--open .bap-sidebar-toggle {
    display: none;
}
.bap-sidebar {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    pointer-events: none;
    transition: max-height 0.3s ease, opacity 0.2s ease;
}
.bap-sidebar-wrap--open .bap-sidebar {
    max-height: 400px;
    opacity: 1;
    pointer-events: auto;
}
.bap-sidebar__item {
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
.bap-sidebar__item:hover { background: #f5f6fa; }
.bap-sidebar__item--active {
    background: #eaa90d;
    color: #303752;
    width: 162px;
    height: 42px;
    border-bottom: 2px solid #303752;
    overflow: visible;
}
.bap-sidebar__item--active:hover { background: #eaa90d; }
.bap-sidebar__active-row {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    width: fit-content;
}
.bap-sidebar__close {
    flex-shrink: 0;
    width: 40.5px;
    height: 40.5px;
    background: #eaa90d;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}
.bap-sidebar__close:hover { background: #d99c0c; }

/* ================================================================
   NODE 1:728 — Copyright
   ================================================================ */
.bap-copyright {
    position: absolute;
    left: 0;
    right: 0;
    width: auto;
    top: 621px;
    height: 20px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 400;
    color: #ffffff;
    line-height: normal;
    z-index: 25;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* ── Sembunyikan di mobile ──────────────────────────────────── */
@media (max-width: 768px) {
    .bap-wrap { display: none; }
}

/* ================================================================
   BERANDA MOBILE — BAPENDA Purwakarta
   Figma node 3:372 "M-Beranda"
   Canvas: 412 × 915 px
   ================================================================ */

/* ── Reset ─────────────────────────────────────────────────── */
.bap-m-wrap *, .bap-m-wrap *::before, .bap-m-wrap *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* ── Outer wrapper — default: sembunyikan di desktop ────────── */
.bap-m-wrap {
    display: none;
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    background: transparent;
}
@media (max-width: 768px) {
    .bap-m-wrap { display: block; }
}

/* ── Inner canvas 412×915 ────────────────────────────────────── */
.bap-m-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 412px;
    height: 915px;
    overflow: visible;
}

/* ================================================================
   BG Foto kantor
   ================================================================ */
.bap-m-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 411px;
    height: 916px;
    overflow: hidden;
    z-index: 1;
}
.bap-m-bg img {
    position: absolute;
    left: -137.53%;
    top: 0;
    width: 578.44%;
    height: 145.72%;
    max-width: none;
    display: block;
}

/* ================================================================
   Ornamen Lawang — kanan
   ================================================================ */
.bap-m-ornamen {
    position: absolute;
    right: 0;
    top: 0;
    width: 208px;
    height: 615px;
    overflow: hidden;
    pointer-events: none;
    z-index: 3;
}
.bap-m-ornamen img {
    position: absolute;
    left: -86.06%;
    top: -4.39%;
    width: 369.71%;
    height: 124.98%;
    max-width: none;
}

/* ================================================================
   gplay SVG overlay
   ================================================================ */
.bap-m-gplay {
    position: absolute;
    left: 0;
    top: 0;
    width: 412px;
    height: 915px;
    pointer-events: none;
    z-index: 4;
}
.bap-m-gplay img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
}

/* ================================================================
   Watermark "BERANDA"
   ================================================================ */
.bap-m-watermark {
    position: absolute;
    right: 0;
    top: 10px;
    font-family: 'Krona One', sans-serif;
    font-size: 48px;
    font-weight: 400;
    color: #ffffff;
    opacity: 0.35;
    line-height: normal;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 6;
}

/* ── Logo — disembunyikan di mobile ────────────────────────── */
.bap-m-logo { display: none; }

/* ================================================================
   Sidebar toggle + menu — mobile
   ================================================================ */
.bap-m-sidebar-wrap {
    position: absolute;
    left: 0;
    top: 60px;
    z-index: 20;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.bap-m-sidebar-toggle {
    flex-shrink: 0;
    width: 56px;
    height: 56px;
    background: #eaa90d;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    z-index: 2;
}
.bap-m-sidebar-toggle__icon {
    width: 28px;
    height: 28px;
    display: block;
}
.bap-m-sidebar-wrap--open .bap-m-sidebar-toggle { display: none; }
.bap-m-sidebar {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    pointer-events: none;
    transition: max-height 0.3s ease, opacity 0.2s ease;
}
.bap-m-sidebar-wrap--open .bap-m-sidebar {
    max-height: 400px;
    opacity: 1;
    pointer-events: auto;
}
.bap-m-sidebar__item {
    position: relative;
    display: flex;
    align-items: center;
    width: 200px;
    height: 52px;
    padding: 0 24px;
    background: #ffffff;
    color: #303752;
    font-family: 'Genos', sans-serif;
    font-size: 28px;
    font-weight: 400;
    line-height: normal;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
}
.bap-m-sidebar__item:hover { background: #f5f6fa; }
.bap-m-sidebar__item--active {
    background: #eaa90d;
    color: #303752;
    width: 200px;
    height: 56px;
    border-bottom: 2.5px solid #303752;
    overflow: visible;
}
.bap-m-sidebar__item--active:hover { background: #eaa90d; }
.bap-m-sidebar__active-row {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    width: fit-content;
}
.bap-m-sidebar__close {
    flex-shrink: 0;
    width: 54px;
    height: 54px;
    background: #eaa90d;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}
.bap-m-sidebar__close:hover { background: #d99c0c; }

/* ================================================================
   Headline
   ================================================================ */
.bap-m-headline {
    position: absolute;
    left: 0;
    right: 0;
    top: 290px;
    padding: 0 12px;
    font-family: 'Genos', sans-serif;
    font-size: 36px;
    font-weight: 400;
    color: #f4c24a;
    text-align: center;
    line-height: normal;
    z-index: 10;
}

/* ================================================================
   Deskripsi
   ================================================================ */
.bap-m-desc {
    position: absolute;
    left: 12px;
    right: 12px;
    top: 400px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #ffffff;
    line-height: 1.5;
    z-index: 10;
}

/* ================================================================
   Badges — grid 2×2
   ================================================================ */
.bap-m-badges {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 560px;
    display: grid;
    grid-template-columns: repeat(2, 116px);
    gap: 10px;
    z-index: 10;
}
.bap-m-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    width: 116px;
    height: 31.609px;
    padding: 0 8px;
    background: #ffffff;
    border: 1px solid #303752;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #303752;
    white-space: nowrap;
    flex-shrink: 0;
}
.bap-m-badge--noborder { border: none; }
.bap-m-badge__icon {
    width: 18.476px;
    height: 18.476px;
    display: block;
    flex-shrink: 0;
}

/* ================================================================
   Copyright
   ================================================================ */
.bap-m-copyright {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 400;
    color: #ffffff;
    text-align: center;
    line-height: normal;
    z-index: 25;
    background: rgba(255, 255, 255, 0.15);
    padding: 4px 8px;
}
    </style>
</head>
<body>
    <?php $this->load->view('new_fe/components/beranda_hero'); ?>
    <?php $this->load->view('new_fe/components/beranda_hero_mobile'); ?>
</body>
</html>
