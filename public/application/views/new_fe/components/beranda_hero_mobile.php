<?php
/**
 * BERANDA HERO MOBILE — BAPENDA Purwakarta
 * Canvas: 412 × 915 px, di-scale ke viewport via JS
 */
$b = base_url('assets/beranda/');
?>

<div class="hidden md:hidden fixed inset-0 w-screen h-screen overflow-hidden bg-transparent max-md:block" id="bap-m-wrap">
<div class="absolute top-0 left-0 w-[412px] h-[915px] overflow-visible" id="bap-m-canvas">

    <div class="absolute left-0 top-0 w-[411px] h-[916px] overflow-hidden z-[1]" aria-hidden="true">
        <img src="<?= $b ?>bg-kantor.png" alt="Gedung Kantor BAPENDA Purwakarta"
             class="absolute max-w-none block"
             style="left:-137.53%;top:0;width:578.44%;height:145.72%;" />
    </div>

    <div class="absolute right-0 top-0 w-[208px] h-[615px] overflow-hidden pointer-events-none z-[3]" aria-hidden="true">
        <img src="<?= $b ?>ornamen-lawang.png" alt=""
             class="absolute max-w-none"
             style="left:-86.06%;top:-4.39%;width:369.71%;height:124.98%;" />
    </div>

    <div class="absolute left-0 top-0 w-[412px] h-[915px] pointer-events-none z-[4]" aria-hidden="true">
        <img src="<?= $b ?>ornamen-gplay.svg" alt=""
             class="absolute inset-0 w-full h-full block" />
    </div>

    <div class="absolute right-0 top-[10px] krona-one text-[48px] font-normal text-white opacity-35 leading-normal whitespace-nowrap pointer-events-none select-none z-[6]"
         aria-hidden="true">BERANDA</div>



    <h1 class="absolute left-0 right-0 top-[290px] px-3 genos text-[36px] font-normal text-[#f4c24a] text-center leading-normal z-[10]">
        Pengelolaan Pendapatan yang Transparan
    </h1>

    <p class="absolute left-3 right-3 top-[400px] jakarta-sans text-[14px] font-normal text-white leading-[1.5] z-[10]">
        Dinas Pendapatan Daerah Kabupaten Purwakarta hadir untuk mewujudkan tata
        kelola pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi
        demi pembangunan daerah yang berkeadilan.
    </p>

    <div class="absolute left-1/2 -translate-x-1/2 top-[560px] grid grid-cols-[repeat(2,116px)] gap-[10px] z-[10]"
         role="list" aria-label="Nilai-nilai BAPENDA">

        <span class="inline-flex items-center gap-[6px] w-[116px] h-[31.609px] px-2 bg-white border-0 jakarta-sans text-[14px] font-normal text-[#303752] whitespace-nowrap shrink-0"
              role="listitem">
            <img src="<?= $b ?>icon-check2.svg" alt="" class="w-[18.476px] h-[18.476px] block shrink-0" />
            Transparan
        </span>
        <span class="inline-flex items-center gap-[6px] w-[116px] h-[31.609px] px-2 bg-white border border-[#303752] jakarta-sans text-[14px] font-normal text-[#303752] whitespace-nowrap shrink-0"
              role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="w-[18.476px] h-[18.476px] block shrink-0" />
            Akuntabel
        </span>
        <span class="inline-flex items-center gap-[6px] w-[116px] h-[31.609px] px-2 bg-white border border-[#303752] jakarta-sans text-[14px] font-normal text-[#303752] whitespace-nowrap shrink-0"
              role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="w-[18.476px] h-[18.476px] block shrink-0" />
            Informatif
        </span>
        <span class="inline-flex items-center gap-[6px] w-[116px] h-[31.609px] px-2 bg-white border border-[#303752] jakarta-sans text-[14px] font-normal text-[#303752] whitespace-nowrap shrink-0"
              role="listitem">
            <img src="<?= $b ?>icon-check.svg" alt="" class="w-[18.476px] h-[18.476px] block shrink-0" />
            Profesional
        </span>
    </div>

    <div class="absolute left-0 right-0 bottom-3 jakarta-sans text-[12px] font-normal text-[#303752] text-center leading-normal z-[25] py-1 px-2">
        Copyright &copy; 2026 Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div>
</div>

<script>
(function () {
    var wrap   = document.getElementById('bap-m-wrap');
    var canvas = document.getElementById('bap-m-canvas');
    var W = 412, H = 915;
    function doScale() {
        var vw = wrap.clientWidth  || window.innerWidth;
        var vh = wrap.clientHeight || window.innerHeight;
        var s  = Math.max(vw / W, vh / H);
        var ox = (vw - W * s) / 2;
        var oy = Math.min(0, (vh - H * s) / 2);
        canvas.style.transform       = 'translate(' + ox + 'px,' + oy + 'px) scale(' + s + ')';
        canvas.style.transformOrigin = 'top left';
    }
    doScale();
    window.addEventListener('resize', doScale);
})();
</script>

