<?php
function nav_active($url, $is_desktop = false)
{
    $active = current_url() == base_url($url);

    if ($is_desktop) {
        return $active
            ? "after:bg-[#ee761e] after:h-[4px] text-[#ee761e]"
            : "after:h-0 hover:after:bg-[#ee761e] hover:after:h-[4px]";
    } else {
        return $active
            ? "text-[#ee761e] after:h-[4px]"
            : "after:h-0";
    }
}
?>

<div class="fixed md:absolute top-0 left-0 right-0 py-10 md:py-8 z-[999] bg-black-gradient orbitron">
    <div class="flex flex-row w-5/6 mx-auto md:gap-60 gap-2 place-content-start">

        <!-- LOGO -->
        <div class="w-[64px] md:w-[96px] relative z-[100]">
            <a href="<?= base_url() ?>" class="block w-[64px] md:w-[96px] hover:scale-[1.05] duration-300">
                <img src="<?= base_url('assets'); ?>/images/logo-bapenda-pwk.webp" class="w-full h-auto" />
                <div class="absolute hidden md:block bottom-[-50%] left-1/2 text-center text-[#ee761e] font-bold text-[18px] w-[275px] transform -translate-x-1/2 -translate-y-1/2 uppercase font-[Montserrat] [text-shadow:1px_1px_5px_black]">
                    BAPENDA Purwakarta
                </div>
            </a>
        </div>

        <!-- Text BAPENDA untuk Mobile -->
        <div class="text-center content-center md:hidden text-[#ee761e] font-bold text-[18px] uppercase font-[Montserrat] [text-shadow:1px_1px_5px_black]">
            BAPENDA Purwakarta
        </div>

        <!-- Desktop Nav -->
        <div class="basis-full md:flex justify-center hidden">
            <div class="grid grid-flow-col gap-8 content-center text-slate-50 tracking-wider text-[0.938vw] text-center">

                <a href="<?= base_url() ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('', true) ?>">Beranda</a>

                <a href="<?= base_url('tentang-kami') ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('tentang-kami', true) ?>">Tentang Kami</a>

                <a href="<?= base_url('#gallery') ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('#gallery', true) ?>">Galeri</a>

                <a href="<?= base_url('blog') ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('blog', true) ?>">Berita</a>

                <a href="<?= base_url('media') ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('media', true) ?>">Media</a>

                <a href="<?= base_url('#critic') ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('#critic', true) ?>">Kritik & Saran</a>

                <a href="<?= base_url('ppid') ?>"
                    class="py-3 px-2 relative tracking-widest after:content-[''] after:left-0 after:w-full after:absolute after:bottom-0 after:transition-all after:duration-[0.2s] after:scale-y-100 after:ease-linear duration-[0.2] ease-linear after:rounded <?= nav_active('ppid', true) ?>">PPID</a>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div class="basis-auto flex flex-col justify-center md:hidden">
            <div>
                <a href="#" id="toggle-menu" class="text-slate-50 z-[100] relative" onclick="toggleMenu(this, event)">
                    <span class="material-symbols-outlined !text-[10.417vw] relative menu"></span>
                </a>
            </div>
            <div id="menu" class="grid gap-4 content-center text-slate-50 tracking-wider text-[4.167vw] leading-[4.167vw] text-center fixed top-0 -right-full duration-700 w-[65dvw] h-[100dvh] z-50 bg-menu">
                <a href="<?= base_url() ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('', true) ?>">Beranda</a>
                <a href="<?= base_url('tentang-kami') ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('tentang-kami', true) ?>">Tentang Kami</a>
                <a href="<?= base_url('#gallery') ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('#gallery', true) ?>">Galeri</a>
                <a href="<?= base_url('blog') ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('blog', true) ?>">Berita</a>
                <a href="<?= base_url('media') ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('media', true) ?>">Media</a>
                <a href="<?= base_url('#critic') ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('#critic', true) ?>">Kritik & Saran</a>
                <a href="<?= base_url('ppid') ?>" class="py-3 px-2 relative tracking-widest <?= nav_active('ppid', true) ?>">PPID</a>
            </div>
        </div>
    </div>
</div>