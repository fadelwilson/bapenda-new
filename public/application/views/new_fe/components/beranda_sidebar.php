<?php
/**
 * Beranda Sidebar – menu navigasi utama & logo BAPENDA
 *
 * Variabel yang diterima:
 *   $active_menu – key menu yang sedang aktif
 *                  nilai valid: beranda | profil | layanan | informasi | saran
 *   $navbar_bg   – 'blue' | 'white' (default: 'white')
 *   $logo_color  – 'blue' | 'white' (opsional, default menyesuaikan $navbar_bg)
 */

$active = isset($active_menu) ? $active_menu : 'beranda';
$navbar_bg = isset($navbar_bg) ? $navbar_bg : 'white';
$logo_color = isset($logo_color) ? $logo_color : ($navbar_bg === 'blue' ? 'white' : 'blue');
$logo_file = ($logo_color === 'white') ? 'bapenda-white.svg' : 'bapenda-blue.svg';

$navbar_text_color = $navbar_bg === 'blue'
    ? 'text-white hover:text-[#EAA90D]'
    : 'text-[#303752] hover:text-[#EAA90D]';

$menu_items = [
    ['key' => 'beranda',   'label' => 'Beranda',       'url' => base_url()],
    ['key' => 'profil',   'label' => 'Profil',        'url' => base_url('tentang-kami')],
    [
        'key'      => 'layanan',
        'label'    => 'Layanan',
        'url'      => base_url('layanan'),
        'dropdown' => [
            [
                'key'   => 'pbb',
                'label' => 'PBB',
                'url'   => base_url('layanan#pbb'),
            ],
            [
                'key'   => 'bphtb',
                'label' => 'BPHTB',
                'url'   => base_url('layanan#bphtb'),
            ],
            [
                'key'   => 'pdl',
                'label' => 'PDL',
                'url'   => base_url('layanan#pdl'),
            ],
        ],
    ],
    [
        'key'      => 'informasi',
        'label'    => 'Informasi',
        'url'      => base_url('informasi'),
        'dropdown' => [
            [
                'key'   => 'peraturan & publikasi',
                'label' => 'Peraturan & Publikasi',
                'url'   => base_url('informasi#peraturan'),
            ],
            [
                'key'   => 'berita',
                'label' => 'Berita',
                'url'   => base_url('informasi#berita'),
            ],
            [
                'key'   => 'galeri',
                'label' => 'Galeri',
                'url'   => base_url('informasi#galeri'),
            ],
            [
                'key'   => 'ppid',
                'label' => 'PPID',
                'url'   => base_url('informasi#ppid'),
            ],
        ],
    ],
    ['key' => 'saran',     'label' => 'Kritik & Saran', 'url' => base_url('kritik-saran')],
];
?>

<!-- Menu Navigasi Desktop (di bawah H1) & Mobile Toggle (kanan atas) -->
<div class="absolute top-[7.5vw] right-[1.556vw] z-[11] flex items-center max-md:fixed max-md:right-[4.049vw] max-md:top-[4.049vw] max-md:z-[9999] max-md:flex max-md:flex-row max-md:items-start" id="beranda-sidebar-wrap">
    <nav
        class="flex items-center gap-[0.9vw] max-md:hidden"
        id="beranda-desktop-menu"
        aria-label="Menu utama"
    >
        <?php foreach ($menu_items as $item): ?>
            <?php
            $is_active = ($active === $item['key']);
            $has_dropdown = isset($item['dropdown']) && !empty($item['dropdown']);
            ?>

            <?php if ($has_dropdown): ?>

                <!-- MENU DENGAN DROPDOWN -->
                <div class="relative group w-fit shrink-0">

                    <!-- MENU UTAMA -->
                    <a
                        href="<?= $item['url'] ?>"
                        class="relative flex w-fit items-center px-[0.9vw] py-[0.19vw] geologica text-[1.167vw] whitespace-nowrap transition-all duration-200
                            <?= $is_active
                                ? 'bg-[#EAA90D] text-[#303752]'
                                : $navbar_text_color
                            ?>"
                        <?= $is_active ? 'aria-current="page"' : '' ?>
                    >
                        <?= htmlspecialchars($item['label']) ?>
                    </a>

                    <!-- DROPDOWN -->
                    <div
                        class="absolute left-0 top-full hidden group-hover:flex flex-col min-w-full w-max bg-[#EAA90D] z-[99999]"
                    >
                        <?php foreach ($item['dropdown'] as $dropdown): ?>
                            <a
                                href="<?= $dropdown['url'] ?>"
                                class="flex items-center justify-center text-center w-full px-[0.5vw] py-[0.25vw] geologica text-[1.167vw] text-[#303752] whitespace-nowrap hover:bg-[#d99b0b] transition-all duration-200"
                            >
                                <?= htmlspecialchars($dropdown['label']) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>

                <!-- MENU BIASA -->
                <a
                    href="<?= $item['url'] ?>"
                    class="relative flex w-fit shrink-0 items-center px-[0.9vw] py-[0.19vw] geologica text-[1.167vw] whitespace-nowrap transition-all duration-200
                        <?= $is_active
                            ? 'bg-[#EAA90D] text-[#303752]'
                            : $navbar_text_color
                        ?>"
                    <?= $is_active ? 'aria-current="page"' : '' ?>
                >
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>
    
    <div
        class="hidden max-md:flex flex-row items-start"
    >
    <nav 
        class="hidden absolute top-full right-0 flex-col bg-white shadow-xl overflow-hidden w-[12.16vw] max-md:w-full max-md:fixed max-md:inset-0 max-md:top-0 max-md:left-0 max-md:h-screen max-md:z-[99999] max-md:overflow-y-auto max-md:pb-[10vw]" 
        id="beranda-sidebar-menu" 
        aria-label="Menu utama"
    >
        <div class="hidden max-md:flex items-center justify-between w-full px-[4.003vw] py-[3.646vw] border-b border-slate-200 mb-[2vw]">
            <img src="<?= base_url('assets/images/bapenda-blue.svg') ?>" alt="Logo Bapenda" class="w-[35vw] h-auto object-contain">

            <button 
                type="button" 
                class="size-[10.385vw] flex-shrink-0 bg-[#EAA90D] flex items-center justify-center text-[#303752] font-bold cursor-pointer hover:bg-[#d99b0b] transition-all duration-200" 
                id="beranda-sidebar-inner-close" 
                aria-label="Tutup menu"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" stroke="currentColor" class="size-[5.128vw]">
                    <path d="M55.1 73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L147.2 256 9.9 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192.5 301.3 329.9 438.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.8 256 375.1 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192.5 210.7 55.1 73.4z"/>
                </svg>
            </button>
        </div>

        <?php foreach ($menu_items as $item): ?>
            <?php 
            $is_active = ($active === $item['key']); 
            $has_dropdown = isset($item['dropdown']) && !empty($item['dropdown']);
            ?>
            
            <?php if ($is_active): ?>
                <a 
                    href="<?= $item['url'] ?>" 
                    class="flex items-center h-[2.72vw] px-[1.17vw] bg-[#EAA90D] text-[#303752] font-bold genos text-[1.167vw] max-md:text-[4.615vw] max-md:px-[4.103vw] max-md:h-[10.385vw] max-md:mx-[3.2vw]"
                    aria-current="page"
                >
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php else: ?>
                <a 
                    href="<?= $item['url'] ?>" 
                    class="flex items-center h-[2.72vw] px-[1.17vw] text-[#303752] bg-white hover:bg-slate-50 border-b border-[#303752] genos text-[1.167vw] max-md:text-[4.615vw] max-md:px-[4.103vw] max-md:h-[10.385vw] transition-all duration-200 max-md:mx-[3.2vw]"
                >
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endif; ?>

            <?php if ($has_dropdown): ?>
                <?php foreach ($item['dropdown'] as $dropdown): ?>
                    <a 
                        href="<?= $dropdown['url'] ?>" 
                        class="flex items-center h-[2.72vw] pl-[2.8vw] pr-[1.17vw] text-[#303752] bg-slate-50 hover:bg-slate-100 border-b border-[#303752] genos text-[1.167vw] max-md:text-[4.615vw] max-md:pl-[10.5vw] max-md:pr-[4.103vw] max-md:h-[10.385vw] transition-all duration-200 max-md:mx-[3.2vw]"
                    >
                        <?= htmlspecialchars($dropdown['label']) ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>

    <button 
        class="size-[2.72vw] max-md:size-[10.385vw] flex-shrink-0 bg-[#EAA90D] flex items-center justify-center text-[#303752] font-bold cursor-pointer hover:bg-[#EAA90D/80] transition-all duration-200" 
        id="beranda-sidebar-toggle" 
        aria-label="Toggle menu" 
        aria-expanded="false"
    >
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="size-[1.17vw] max-md:size-[5.128vw] transition-transform duration-200" id="beranda-sidebar-arrow">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" stroke="currentColor" class="size-[1.17vw] max-md:size-[5.128vw] transition-transform duration-200" id="beranda-sidebar-burger"> 
            <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" stroke="currentColor" class="size-[1.17vw] hidden max-md:size-[5.128vw] transition-transform duration-200" id="beranda-sidebar-close">
            <path d="M55.1 73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L147.2 256 9.9 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192.5 301.3 329.9 438.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.8 256 375.1 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192.5 210.7 55.1 73.4z"/>
        </svg>
    </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var wrap = document.getElementById('beranda-sidebar-wrap');
    var toggle = document.getElementById('beranda-sidebar-toggle');
    var menu = document.getElementById('beranda-sidebar-menu');
    var innerClose = document.getElementById('beranda-sidebar-inner-close');

    var burger = document.getElementById('beranda-sidebar-burger');
    var closeIcon = document.getElementById('beranda-sidebar-close');

    if (!toggle || !menu) return;

    function openMenu() {
        menu.style.display = 'flex';
        toggle.setAttribute('aria-expanded', 'true');
        burger.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        menu.style.display = 'none';
        toggle.setAttribute('aria-expanded', 'false');
        burger.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
        var isOpen = menu.style.display === 'flex';
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    if (innerClose) {
        innerClose.addEventListener('click', function (e) {
            e.stopPropagation();
            closeMenu();
        });
    }

    var menuLinks = menu.querySelectorAll('a');
    menuLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (window.innerWidth < 768) {
                closeMenu();
            }
        });
    });
});
</script>
