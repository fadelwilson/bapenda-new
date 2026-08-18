<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAPENDA Purwakarta – Beranda</title>

    <meta name="description" content="Situs resmi Badan Pendapatan Daerah (BAPENDA) Kabupaten Purwakarta. Pengelolaan pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi." />
    <meta name="keywords"    content="BAPENDA, Badan Pendapatan Daerah, Purwakarta, pajak daerah, retribusi, pendapatan daerah" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/new/img/favicon.ico') ?>" type="image/x-icon" />

    <!-- Google Fonts: Genos, Krona One, Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Genos:wght@400;500;600;700&family=Krona+One&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet"
    />

    <!-- CSS Beranda -->
    <link rel="stylesheet" href="<?= base_url('assets/css/beranda.css') ?>" />

    <style>
        /* Reset minimal agar tidak ada margin/scroll yang tidak diinginkan */
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;   /* hero full-screen, tidak scroll */
            background: #1e2235;
        }
        @media (max-width: 900px) {
            html, body { overflow: auto; }
        }
    </style>
</head>
<body>

    <?php $this->load->view('new_fe/components/beranda_hero'); ?>

</body>
</html>
