<?php
/**
 * Beranda Sidebar – menu vertikal kiri sesuai desain Figma node 1:683
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
    ['key' => 'informasi', 'label' => 'Informasi',      'url' => base_url('blog')],
    ['key' => 'saran',     'label' => 'Saran & Kritik', 'url' => base_url('kritik-saran')],
];

/* Inline SVG arrow_forward_ios */
$svg_arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#303752" width="18" height="18" aria-hidden="true"><path d="M6.23 20.23 8 22l10-10L8 2 6.23 3.77 14.46 12z"/></svg>';
?>

<nav class="beranda-sidebar" aria-label="Menu Utama">
    <?php foreach ($menu_items as $item): ?>
        <?php $is_active = ($active === $item['key']); ?>
        <a
            href="<?= $item['url'] ?>"
            class="beranda-sidebar__item<?= $is_active ? ' beranda-sidebar__item--active' : '' ?>"
            <?= $is_active ? 'aria-current="page"' : '' ?>
        >
            <?= htmlspecialchars($item['label']) ?>
            <?php if ($is_active): ?>
                <span class="beranda-sidebar__arrow" aria-hidden="true">
                    <?= $svg_arrow ?>
                </span>
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</nav>
