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
    <link href="<?= base_url('assets/css/output.css') ?>" rel="stylesheet" />
</head>
<body>
    <?php $this->load->view('new_fe/components/beranda_hero'); ?>
    <?php $this->load->view('new_fe/components/beranda_hero_mobile'); ?>
</body>
</html>
