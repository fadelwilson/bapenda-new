<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative" style="background-image: url('<?= base_url('assets/gambar/full-gallery-image-1.jpg') ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="fixed inset-0 bg-gray-500/50 -z-10"></div>

    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda']); ?>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>