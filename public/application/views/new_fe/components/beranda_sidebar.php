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

<div class="fixed left-[0.049vw] top-[13.375vw] z-[9999] flex flex-row items-start" id="beranda-sidebar-wrap">

    <nav 
        class="hidden flex-col bg-white shadow-xl overflow-hidden w-[250px]" 
        id="beranda-sidebar-menu" 
        aria-label="Menu utama"
    >
        <?php foreach ($menu_items as $item): ?>
            <?php $is_active = ($active === $item['key']); ?>
            
            <?php if ($is_active): ?>
                <a 
                    href="<?= $item['url'] ?>" 
                    class="flex items-center h-[56px] px-6 bg-[#EAA90D] text-[#303752] font-bold genos text-[1.167vw]"
                    aria-current="page"
                >
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php else: ?>
                <a 
                    href="<?= $item['url'] ?>" 
                    class="flex items-center h-[56px] px-6 text-[#303752] bg-white hover:bg-slate-50 border-b border-slate-100 genos text-[1.167vw] transition-all duration-200"
                >
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>

    <button 
        class="size-[56px] flex-shrink-0 bg-[#EAA90D] flex items-center justify-center text-[#303752] font-bold cursor-pointer hover:bg-[#EAA90D/80] transition-all duration-200" 
        id="beranda-sidebar-toggle" 
        aria-label="Toggle menu" 
        aria-expanded="false"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var wrap = document.getElementById('beranda-sidebar-wrap');
    var toggle = document.getElementById('beranda-sidebar-toggle');
    var menu = document.getElementById('beranda-sidebar-menu');

    if (!toggle || !menu) return;

    function openMenu() {
        menu.style.display = 'flex';
        toggle.setAttribute('aria-expanded', 'true');
    }

    function closeMenu() {
        menu.style.display = 'none';
        toggle.setAttribute('aria-expanded', 'false');
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
