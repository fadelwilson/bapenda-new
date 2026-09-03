<?php
/**
 * BERANDA HERO — BAPENDA Purwakarta
 * Canvas: 1283 × 733 px, di-scale ke viewport via JS
 */
$b = base_url('assets/beranda/');
?>

<div class="fixed inset-0 w-screen h-screen overflow-hidden bg-[#0d1020] max-md:hidden" id="bap-wrap">
<div class="absolute top-0 left-0 w-[1283px] h-[733px] overflow-visible" id="bap-canvas">

    <div class="absolute left-0 top-0 w-[1283px] h-[733px] overflow-hidden z-[1]" aria-hidden="true">
        <img src="<?= $b ?>bg-kantor.png" alt="Gedung Kantor BAPENDA Purwakarta"
             class="absolute inset-0 w-full h-full object-cover object-center max-w-none block" />
    </div>

    <div class="absolute left-[-3px] top-[120px] w-[190px] h-[513px] overflow-hidden pointer-events-none z-[3]" aria-hidden="true">
        <img src="<?= $b ?>ornamen-lawang.png" alt=""
             class="absolute max-w-none"
             style="left:-175.93%;top:-4.39%;width:356.02%;height:124.98%;" />
    </div>

    <div class="absolute right-[-1px] top-[120px] w-[183px] h-[513px] overflow-hidden pointer-events-none z-[3]" aria-hidden="true">
        <img src="<?= $b ?>ornamen-lawang.png" alt=""
             class="absolute max-w-none"
             style="left:-86.06%;top:-4.39%;width:369.71%;height:124.98%;" />
    </div>

    <div class="absolute left-0 top-0 w-[1283px] h-[733px] pointer-events-none z-[4]" aria-hidden="true">
        <img src="<?= $b ?>ornamen-gplay.svg" alt=""
             class="absolute inset-0 w-full h-full block" />
    </div>

    <div class="absolute left-[700px] top-[68px] krona-one text-[86px] font-normal text-white opacity-35 leading-normal whitespace-nowrap pointer-events-none select-none z-[6]"
         aria-hidden="true">BERANDA</div>

    <div class="absolute left-[17px] top-[80px] pointer-events-none z-[20] flex flex-row items-center gap-2"
         aria-label="Logo BAPENDA Purwakarta">
        <div class="block leading-none shrink-0">
            <img src="<?= $b . rawurlencode('purwakarta111 1.png') ?>" alt="bapenda" class="h-[48px] block" />
        </div>
        <div class="block leading-none shrink-0">
            <img src="<?= $b . rawurlencode('purwakarta112 1.png') ?>" alt="PURWAKARTA" class="block" />
        </div>
    </div>

    <h1 class="absolute left-[172px] top-[197px] w-[940px] h-[230px] genos text-[96px] font-normal text-[#f4c24a] text-center leading-normal flex items-end justify-center z-[10]">
        Pengelolaan Pendapatan yang Transparan
    </h1>

    <p class="absolute left-[172px] top-[417px] w-[801px] h-[79px] jakarta-sans text-[20px] font-normal text-white leading-normal z-[10]">
        Dinas Pendapatan Daerah Kabupaten Purwakarta hadir untuk mewujudkan tata
        kelola pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi
        demi pembangunan daerah yang berkeadilan.
    </p>

    <div class="absolute top-[550px] left-1/2 -translate-x-1/2 flex gap-[19px] z-[10]"
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

    <div class="absolute left-0 right-0 top-[621px] h-[20px] jakarta-sans text-[12px] font-normal text-[#303752] leading-normal z-[25] flex items-center justify-center">
        Copyright &copy; 2026 Badan Pendapatan Daerah Kab. Purwakarta
    </div>

</div>
</div>

<script>
(function () {
    var wrap   = document.getElementById('bap-wrap');
    var canvas = document.getElementById('bap-canvas');
    var W = 1283, H = 733;
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

