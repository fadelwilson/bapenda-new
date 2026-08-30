<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA Purwakarta – Kritik & Saran']); ?>

    <style>
        /* ── Reset global ── */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            /* padding: 0; */
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: transparent;
        }

        /* ── Viewport wrapper ───────────────────────────────────────── */
        #viewport {
            width: 100vw;
            height: 100vh;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body class="min-h-screen min-w-screen overflow-x-hidden relative">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'saran']); ?>
    <?php $this->load->view('new_fe/components/saran_hero'); ?>
    <!-- <?php $this->load->view('new_fe/components/saran_hero_mobile'); ?> -->
<?php $this->load->view('new_fe/components/footer_scripts'); ?>