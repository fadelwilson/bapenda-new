<?php
/**
 * Beranda Sidebar – menu vertikal kiri sesuai desain Figma
 *
 * Variabel yang diterima:
 *   $active_menu – key menu yang sedang aktif
 *                  nilai valid: beranda | profil | layanan | informasi | saran
 */

$active = isset($active_menu) ? $active_menu : 'beranda';

$menu_items = [
    ['key' => 'beranda',   'label' => 'Beranda',       'url' => base_url()],
    ['key' => 'profil',    'label' => 'Profil',         'url' => base_url('tentang-kami')],
    ['key' => 'layanan',   'label' => 'Layanan',        'url' => base_url('layanan')],
    ['key' => 'informasi', 'label' => 'Informasi',      'url' => base_url('informasi')],
    ['key' => 'saran',     'label' => 'Saran & Kritik', 'url' => base_url('kritik-saran')],
];
?>

<div class="absolute top-[6.5vw] right-[1.556vw] z-[9999] flex items-center max-md:fixed max-md:right-[4.049vw] max-md:top-[4.049vw] max-md:z-[9999] max-md:flex max-md:flex-row max-md:items-start" id="beranda-sidebar-wrap">
    <nav
        class="flex items-center gap-[1.5vw] max-md:hidden"
        id="beranda-desktop-menu"
        aria-label="Menu utama"
    >
        <?php foreach ($menu_items as $item): ?>
            <?php $is_active = ($active === $item['key']); ?>

            <a
                href="<?= $item['url'] ?>"
                class="relative flex items-center h-[3vw] geologica-light text-[1.167vw] whitespace-nowrap transition-all duration-200
                    <?= $is_active
                        ? 'text-[#EAA90D]'
                        : 'text-white hover:text-[#EAA90D]'
                    ?>
                "
                <?= $is_active ? 'aria-current="page"' : '' ?>
            >
                <?= htmlspecialchars($item['label']) ?>

                <?php if ($is_active): ?>
                    <span
                        class="absolute left-0 right-0 bottom-0 top-10 h-[0.18vw] bg-[#EAA90D]"
                    ></span>
                <?php endif; ?>
            </a>

        <?php endforeach; ?>
    </nav>
    
    <div
        class="hidden max-md:flex flex-row items-start"
    >
    <nav 
        class="hidden absolute top-full right-0 flex-col bg-white shadow-xl overflow-hidden w-[12.16vw] max-md:w-full max-md:fixed max-md:top-[14.423vw] max-md:inset-0 max-md:h-[calc(100vh-12.4vw)]" 
        id="beranda-sidebar-menu" 
        aria-label="Menu utama"
    >
        <?php foreach ($menu_items as $item): ?>
            <?php $is_active = ($active === $item['key']); ?>
            
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

    var burger = document.getElementById('beranda-sidebar-burger');
    var closeIcon = document.getElementById('beranda-sidebar-close');

    if (!toggle || !menu) return;

    function openMenu() {
        menu.style.display = 'flex';
        toggle.setAttribute('aria-expanded', 'true');
        // if (arrow) burger.style.transform = 'rotate(180deg)';

        burger.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    }

    function closeMenu() {
        menu.style.display = 'none';
        toggle.setAttribute('aria-expanded', 'false');
        // if (arrow) burger.style.transform = 'rotate(0deg)';

        burger.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }

    toggle.addEventListener('click', function () {
        var isOpen = menu.style.display === 'flex';
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });
});
</script>
