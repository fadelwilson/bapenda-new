<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA Purwakarta – Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda']); ?>
    <?php $this->load->view('new_fe/components/beranda_hero'); ?>
    <?php $this->load->view('new_fe/components/beranda_hero_mobile'); ?>
<?php $this->load->view('new_fe/components/footer_scripts'); ?>
