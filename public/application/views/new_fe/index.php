<?php
$foldergallery = base_url('loginwebsite/uploads/galeri/');

$folderinformasi = base_url('loginwebsite/uploads/seputar/informasi/');

$folderketentuan = base_url('loginwebsite/uploads/seputar/informasi/');

$folderalur = base_url('loginwebsite/uploads/seputar/alur/');

$foldervisi = base_url('loginwebsite/uploads/seputar/visi/');

$foldermisi = base_url('loginwebsite/uploads/seputar/misi/');

$folderformulir = base_url('loginwebsite/uploads/tentangkami/formulir/');


$galeryImages = array_filter($ShowDataGaleri[0], function ($value, $key) {
    return strpos($key, 'galeri') === 0 && !empty($value);
}, ARRAY_FILTER_USE_BOTH);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="facebook-domain-verification" content="u7cyt5xgrow1db0yzok1uoyr02ez3i"   />

    <title>BAPENDA - Beranda</title>

    <meta name="keywords" content="BAPENDA, Badan Pendapatan Daerah, Purwakarta, pajak daerah, retribusi, pelayanan pajak, informasi pajak Purwakarta, pendapatan daerah, e-pajak, sistem informasi pajak, Purwakarta digital" />
    <meta name="description" content="Situs resmi Badan Pendapatan Daerah (BAPENDA) Kabupaten Purwakarta. Temukan informasi pajak daerah, layanan retribusi, serta berbagai inovasi digital dalam pengelolaan pendapatan daerah." />

    <!-- Favicon -->
    <link
        rel="shortcut icon"
        href="<?= base_url('assets'); ?>/new/img/favicon.ico"
        type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url('assets'); ?>/new/img/apple-touch-icon.png" />

    <!-- Mobile Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />

    <!-- Web Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Molle&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&family=Orbitron:wght@400..900&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" />

    <link href="<?= base_url('assets'); ?>/animation/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets'); ?>/animation/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/viewerjs/viewer.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- notfy -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="<?= base_url('assets'); ?>/css/output.css" rel="stylesheet" />
</head>

<body class="min-h-screen min-w-screen overflow-x-hidden relative montserrat bg-stone-200">
    <!-- HEADER NAVIGATION -->
    <?php $this->load->view('new_fe/components/navbar'); ?>

    <div
        class="h-[75dvh] md:h-[95dvh] relative flex bg-stone-500 inner-curve-bottom md:inner-curve-bottom rounded-b-[15rem] md:rounded-b-3xl observe overflow-hidden">
        <img
            src="<?= base_url('assets'); ?>/images/bapenda logo baru 1.webp"
            class="object-cover w-full h-full -z-10 grayscale-[0.4]" />

        <div
            class="absolute right-1/2 translate-x-1/2 md:translate-0 top-[22vh] animate hidden md:w-auto w-[70vw] md:top-[70vh] md:right-auto md:left-[24vw] "
            data-animate="fadeInDown">
            <div
                class="hidden md:block w-[270px] h-[50px] absolute -skew-x-45 -top-[49px] border-l-[3px] border-t-[2px] border-solid left-[150px] border-l-[#cecece70] border-t-[#cecece70]">
                <div
                    class="w-[15px] h-[15px] bg-[#ee761e] rounded-full skew-x-45 absolute -right-[7.5px] -top-[8.5px]"></div>
            </div>
            <div
                class="folder text-[3.646vw] md:text-sm text-stone-100 text-center md:text-justify">
                Penerimaan Pajak, Retribusi <br />
                dan Pemenuhan Biaya Daerah
            </div>
        </div>

        <div
            class="absolute left-1/2 -translate-1/2 md:translate-0 top-[42vh] animate hidden md:w-auto w-[70vw] md:left-auto md:top-[22vh] md:right-[16vw]"
            data-animate="fadeInLeft"
            style="animation-delay: 1s">
            <div
                class="hidden md:block w-[270px] h-[50px] absolute -skew-x-45 -bottom-[49px] border-r-[3px] border-b-[2px] border-solid -left-[180px] border-r-[#cecece70] border-b-[#cecece70]">
                <div
                    class="w-[15px] h-[15px] bg-[#ee761e] rounded-full skew-x-45 absolute -left-[7.5px] -bottom-[8.5px]"></div>
            </div>
            <div
                class="folder text-[3.646vw] md:text-sm text-stone-100 text-center md:text-justify">
                Pencatatan dan Pelaporan<br />
                Pendapatan Daerah
            </div>
        </div>

        <div
            class="absolute right-1/2 translate-1/2 md:translate-0 top-[45vh] animate hidden md:w-auto w-[70vw] md:top-[30vh] md:right-auto md:left-[10vw]"
            data-animate="fadeInRight"
            style="animation-delay: 0.5s">
            <div
                class="hidden md:block w-[270px] h-[1px] absolute top-1/2 -translate-y-1/2 border-t-[2px] border-solid left-full border-t-[#cecece70]">
                <div
                    class="w-[15px] h-[15px] bg-[#ee761e] rounded-full absolute left-full -bottom-[6.5px]"></div>
            </div>
            <div
                class="folder text-[3.646vw] md:text-sm text-stone-100 text-center md:text-right">
                Pengelolaan Dana yang Berasal<br />
                Dari Pendapatan Daerah
            </div>
        </div>
    </div>

    <div
        id="about"
        class="min-h-[100dvh] relative flex bg-stone-200 rounded-t-[2rem]">
        <div
            class="absolute -top-[50px] left-1/2 -translate-x-1/2 text-stone-800 text-xs text-center md:block hidden">
            <a href="#about" class="">
                <span class="material-symbols-outlined">arrow_downward</span>
                <div class="tracking-wide uppercase">Scroll Ke Bawah</div>
            </a>
        </div>

        <div
            class="py-12 px-6 md:py-30 md:px-16 grow observe bg-geo-1 overflow-hidden">
            <div
                class="grid md:grid-cols-6 grid-cols-1 gap-y-12 md:gap-24 h-full relative z-10">
                <div
                    class="uppercase goldman-regular text-[10vw] font-bold text-stone-700/5 absolute -bottom-[8vw] -right-[7vw]"
                    data-animate="slideInRight">
                    BAPENDA
                </div>
                <div
                    class="col-span-1 md:col-span-2 hidden flex-col gap-8 animate"
                    data-animate="slideInLeft"
                    data-display="flex">
                    <div class="grow">
                        <div
                            class="uppercase text-stone-500 text-sm orbitron tracking-wider">
                            /Profil Singkat
                        </div>
                        <h1
                            class="font-semibold text-[7.813vw] leading-[7.813vw] md:text-[3.125vw] md:leading-[3.125vw] uppercase mt-4 tracking-wider orbitron">
                            Tentang Bapenda
                        </h1>
                    </div>

                    <div class="text-justify indent-12">
                        <div
                            class="rounded-3xl overflow-hidden mb-5 hover:scale-[1.1] hover:rotate-[-1deg] duration-300 md:w-2/3 w-full">
                            <img src="<?= base_url('assets'); ?>/images/img-section-1-1.webp" class="w-full" />
                        </div>

                        <div class="text-sm tracking-wide font-light">
                            Badan Pendapatan Daerah (Bapenda) adalah lembaga pemerintah
                            daerah yang bertugas untuk mengelola dan meningkatkan pendapatan
                            daerah, terutama dari sektor pajak dan retribusi. Bapenda
                            berperan penting dalam perencanaan, pemungutan, pengelolaan, dan
                            pengawasan pendapatan yang berasal dari sumber-sumber asli
                            daerah (PAD).
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-3">
                    <div class="relative">
                        <div
                            id="open-ketentuan-image"
                            class="inverted-radius-right md:inverted-radius-right overflow-hidden w-full aspect-square md:w-[600px] relative animate hidden ml-0 md:ml-8 img-text-container cursor-pointer"
                            data-animate="fadeIn">
                            <img
                                src="<?= base_url('assets'); ?>/images/img-section-1.webp"
                                class="object-contain w-full h-auto inline-block hover:scale-[1.05] duration-300" />
                            <div
                                class="absolute top-[110%] duration-300 -translate-1/2 left-1/2 text-stone-50 orbitron tracking-widest w-[400px] text-center img-text">
                                Ketentuan Perpajakan Daerah
                            </div>

                            <div id="ketentuan-image-container" style="display:none;position:absolute;width:0;height:0;overflow:hidden;visibility:hidden;">
                                <img src="<?= $folderketentuan . ($ShowDataInformasi[0]['foto_seputar'] ?? '') ?>" alt="Ketentuan Perpajakan" />
                            </div>
                        </div>
                        <a
                            href="<?= base_url() ?>"
                            class="bg-stone-800 text-stone-100 rounded-full absolute top-[25px] left-[525px] hover:bg-stone-800/90 hover:scale-[1.05] duration-100 animate hidden"
                            style="animation-delay: 0.5s"
                            data-animate="bounceIn">
                            <span class="material-symbols-outlined p-4 !text-[2.604vw]">
                                search
                            </span>
                        </a>
                    </div>
                </div>

                <div
                    class="orbitron text-3xl text-stone-700 text-justify relative hidden md:block -z-10">
                    <div
                        class="absolute -right-1/3 w-[400px] top-1/5 -translate-y-1/2 !opacity-40 text-left animate hidden"
                        data-animate="slideInDown">
                        <div class="typing-animation text-lg"></div>
                    </div>

                    <div
                        class="absolute right-0 top-[40%] -translate-y-1/2 !opacity-[0.15] hidden animate"
                        data-animate="fadeInRightBig"
                        style="animation-delay: 0.3s">
                        <img src="<?= base_url('assets'); ?>/images/chevron.svg" class="h-[100px]" />
                    </div>
                    <div
                        class="absolute -right-[20%] top-[40%] -translate-y-1/2 !opacity-[0.15] hidden animate"
                        data-animate="fadeInRightBig"
                        style="animation-delay: 0.8s">
                        <img src="<?= base_url('assets'); ?>/images/chevron.svg" class="h-[100px]" />
                    </div>

                    <div
                        class="absolute -left-[100%] top-[50%] -translate-y-1/2 !opacity-[0.15] animate hidden "
                        data-animate="fadeInRightBig">
                        <img
                            src="<?= base_url('assets'); ?>/images/doughnut.svg"
                            class="h-[100px] animate"
                            data-animate="animate-[spin_1s_linear_1]"
                            data-custom="1"
                            style="animation-delay: 0.5s" />
                    </div>

                    <div
                        class="absolute right-0 w-[300px] top-2/3 -translate-y-1/2 !opacity-30 animate hidden"
                        data-animate="slideInUp">
                        <div class="running-date text-3xl"></div>
                        <div class="running-clock text-[3vw]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative flex bg-stone-200 observe">
        <div
            class="pt-0 pb-20 px-4 md:pb-40 md:px-16 grow observe bg-geo-2 md:bg-geo-2 overflow-hidden">
            <div class="grid grid-cols-2 gap-10 md:gap-40 relative z-10">
                <div
                    class="relative col-span-2 animate align-middle"
                    data-animate="fadeIn">
                    <div class="flex items-center">
                        <div
                            class="p-2 bg-stone-300 rounded-full animate hidden align-middle"
                            data-display="inline-block">
                            <div
                                class="w-[30px] h-[30px] bg-stone-700/70 rounded-full orbitron"></div>
                        </div>

                        <div class="grow h-3px">
                            <div
                                class="border-b-[3px] border-b-stone-400 animate hidden"
                                data-animate="animate-reveal-left-to-right"
                                style="animation-delay: 0.2s"
                                data-custom="1"></div>
                        </div>

                        <a
                            href=""
                            id="open-visi-image"
                            class="uppercase orbitron hidden animate ml-4 md:ml-20 text-[4.167vw] leading-[4.167vw] tracking-wider align-middle text-stone-800/70 hover:scale-[1.05] duration-300"
                            data-display="inline-block"
                            data-animate="fadeIn"
                            style="animation-delay: 0.4s">
                            Visi Bapenda
                        </a>

                        <div id="visi-image-container" style="display:none;position:absolute;width:0;height:0;overflow:hidden;visibility:hidden;">
                            <img src="<?= $foldervisi . ($ShowDataVisi[0]['foto_visi'] ?? '') ?>" alt="Visi Bapenda" />
                        </div>
                    </div>
                </div>

                <div
                    class="relative col-span-2 animate align-middle"
                    data-animate="fadeIn"
                    style="animation-delay: 0.8s">
                    <div class="flex flex-row-reverse items-center">
                        <div
                            class="p-2 bg-stone-300 rounded-full animate hidden align-middle"
                            data-display="inline-block">
                            <div
                                class="w-[30px] h-[30px] bg-stone-700/70 rounded-full"></div>
                        </div>

                        <div class="grow h-3px">
                            <div
                                class="border-b-[3px] border-b-stone-400 animate hidden"
                                data-animate="animate-reveal-right-to-left"
                                style="animation-delay: 1s"
                                data-custom="1"></div>
                        </div>

                        <a
                            href=""
                            id="open-misi-image"
                            class="uppercase orbitron hidden animate mr-4 md:mr-20 text-[4.167vw] leading-[4.167vw] tracking-wider align-middle text-stone-800/70 hover:scale-[1.05] duration-300"
                            data-display="inline-block"
                            data-animate="fadeIn"
                            style="animation-delay: 1.2s">
                            Misi Bapenda
                        </a>

                        <div id="misi-image-container" style="display:none;position:absolute;width:0;height:0;overflow:hidden;visibility:hidden;">
                            <img src="<?= $foldermisi . ($ShowDataMisi[0]['foto_misi'] ?? '') ?>" alt="Misi Bapenda" />
                        </div>
                    </div>
                </div>

                <div class="relative animate text-center">
                    <div
                        class="border-b-[3px] border-b-stone-400 mb-4 md:mb-10 animate hidden"
                        data-animate="fadeInLeftBig"
                        style="animation-delay: 1.4s"></div>
                    <a
                        href=""
                        id="open-informasi-image"
                        class="uppercase orbitron hidden animate text-[4.167vw] leading-[4.167vw] tracking-wider align-middle text-stone-800/70 hover:rotate-[1deg] hover:scale-[1.05] duration-300"
                        data-display="inline-block"
                        data-animate="fadeInUp"
                        style="animation-delay: 1.4s">
                        Informasi
                    </a>

                    <div id="informasi-image-container" style="display:none;position:absolute;width:0;height:0;overflow:hidden;visibility:hidden;">
                        <img src="<?= $folderinformasi . ($ShowDataInformasi[0]['foto_seputar'] ?? '4f6e01ddd4c49c68ca0b1be8bf7438d3.jpg') ?>" alt="Informasi" />
                    </div>
                </div>

                <div class="relative animate text-center flex flex-col-reverse">
                    <div
                        class="border-b-[3px] border-b-stone-400 mt-4 md:mt-10 animate hidden"
                        data-animate="fadeInRightBig"
                        style="animation-delay: 1.4s"></div>
                    <a
                        href=""
                        id="open-alur-image"
                        class="uppercase orbitron hidden animate text-[4.167vw] leading-[4.167vw] tracking-wider align-middle text-stone-800/70 hover:-rotate-[1deg] hover:scale-[1.05] duration-300"
                        data-display="inline-block"
                        data-animate="fadeInDown"
                        style="animation-delay: 1.4s">
                        Alur BAYAR
                    </a>

                    <div id="alur-image-container" style="display:none;position:absolute;width:0;height:0;overflow:hidden;visibility:hidden;">
                        <img src="<?= $folderalur . ($ShowDataAlur[0]['foto_alur'] ?? '') ?>" alt="Alur" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="relative bg-stone-800 z-10 md:rounded-[3rem] py-12 px-6 md:p-20 observe overflow-hidden"
        id="gallery">
        <div class="uppercase text-stone-500 text-sm orbitron tracking-wider">
            /GALERI
        </div>
        <div class="overflow-hidden">
            <div
                class="font-semibold text-[5.208vw] leading-[5.208vw] md:text-[2.083vw] md:leading-[2.083vw] uppercase mt-4 tracking-wider orbitron text-stone-300 mb-12 animate relative opacity-0 animated__fast"
                data-animate="fadeInUp">
                Rangkuman Gambar dan Video Kegiatan BAPENDA Purwakarta
            </div>
        </div>
        <div>
            <div
                class="owl-carousel owl-theme relative rounded-none md:rounded-[2rem]">
                <?php foreach ($galeryImages as $g): ?>
                    <div
                        class="aspect-[3/2] item relative overflow-hidden rounded-none md:rounded-[2rem] bg-stone-900">
                        <div
                            class="bg-no-repeat bg-cover absolute top-0 left-0 w-full h-full z-20"
                            style="
                background-image: url('<?= $foldergallery . $g ?>');
              "></div>
                        <div class="absolute top-1/2 left-1/2 -translate-1/2 z-10">
                            <div
                                class="material-symbols-outlined animate-spin text-stone-200 !text-[4.167vw]">
                                app_badging
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="carousel-viewer-container" style="visibility: hidden; position: absolute; z-index: -9999; height: 0; overflow: hidden;">
                <?php foreach ($galeryImages as $g): ?>
                    <img src="<?= $foldergallery . $g ?>" alt="Galeri " class="carousel-image" style="display: none;" />
                <?php endforeach; ?>
            </div>
        </div>

        <div
            class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mt-6 md:mt-12 relative observe">
            <div
                class="absolute aspect-square w-[50px] border-b-4 border-l-4 border-stone-400/20 -bottom-10 -left-10 animate hidden"
                data-animate="bounceIn"
                style="animation-delay: 1s"></div>
            <div
                class="absolute aspect-square w-[25px] border-b-4 border-l-4 border-stone-400/20 -bottom-8 -left-8 animate hidden"
                data-animate="bounceIn"
                style="animation-delay: 1.2s"></div>

            <div
                class="absolute aspect-square w-[250px] rounded-full border-8 border-stone-400/20 -top-20 -right-48 animate hidden"
                data-animate="fadeInRight"
                style="animation-delay: 0.7s"></div>
            <div
                class="absolute aspect-square w-[150px] rounded-full border-8 border-stone-700/40 -top-20 -right-12 animate hidden"
                data-animate="fadeInRight"
                style="animation-delay: 0.2s"></div>

            <div
                class="rounded-lg bg-stone-400 overflow-hidden aspect-video relative after:absolute after:bg-stone-300/20 after:w-full after:h-full after:top-0 after:left-0">
                <img src="https://img.youtube.com/vi/tOa4RbHiXEE/maxresdefault.jpg" />
                <a
                    href="https://youtu.be/tOa4RbHiXEE"
                    target="_blank"
                    class="bg-stone-700 inline-block rounded-full absolute top-1/2 left-1/2 -translate-1/2 z-10 hover:scale-[1.1] hover:bg-stone-700/90 duration-300">
                    <span
                        class="material-symbols-outlined !text-[12vw] md:!text-[4vw] inline-block align-middle text-slate-50">
                        play_arrow
                    </span>
                </a>
            </div>
            <div
                class="flex-col justify-center orbitron text-stone-300 tracking-wider animate hidden"
                data-display="flex"
                data-animate="fadeInRight">
                <h2
                    class="text-[4.167vw] leading-[4.167vw] md:text-[1.667vw] font-semibold tracking-wider md:leading-[1.667vw] mb-4">
                    Kegiatan Pendataan Objek PBJT Atas Kesenian dan Hiburan (Uji Petik
                    Pajak Hiburan)
                </h2>
                <p class="font-light text-xs md:text-base">
                    PAJAK ANDA, BUKTI CINTA UNTUK PURWAKARTA ISTIMEWA
                </p>
            </div>
        </div>
    </div>

    <div
        class="min-h-[40dvh] relative flex flex-col bg-stone-200 observe py-12 px-6 md:p-20 bg-geo-3 observe overflow-hidden">
        <div
            class="goldman-bold uppercase text-stone-600/15 text-[4.167vw] leading-[4.167vw] absolute -right-4 z-[1]">
            Kritik dan saran
        </div>
        <div
            class="uppercase text-stone-500 text-sm orbitron tracking-wider z-10 relative hidden animate"
            data-animate="slideInLeft">
            /Kritik & Saran
        </div>
        <form
            id="critic"
            method="post"
            class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mt-12 orbitron z-10 relative"
            onsubmit="submitForm(event)">
            <div>
                <label
                    for="nama_lengkap"
                    class="block md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] tracking-widest">
                    Nama
                    <span
                        class="material-symbols-outlined !text-[2.083vw] leading-[2.083vw] md:!text-[0.833vw] md:leading-[0.833vw] text-red-900 align-super">
                        asterisk
                    </span>
                </label>
                <input
                    name="nama_lengkap"
                    type="text"
                    required
                    autocomplete="off"
                    placeholder="Masukkan Nama Anda"
                    class="py-2 px-4 md:py-4 md:px-6 bg-stone-100 border border-stone-300 block mt-4 md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] w-full tracking-widest focus:outline focus:outline-solid focus:outline-stone-400 disabled:text-stone-700/70" />
            </div>
            <div>
                <label
                    for="email"
                    class="block md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] tracking-widest">
                    E-mail
                    <span
                        class="material-symbols-outlined !text-[2.083vw] leading-[2.083vw] md:!text-[0.833vw] md:leading-[0.833vw] text-red-900 align-super">
                        asterisk
                    </span>
                </label>
                <input
                    name="email"
                    type="email"
                    required
                    autocomplete="off"
                    placeholder="Masukkan Email Anda"
                    class="py-2 px-4 md:py-4 md:px-6 bg-stone-100 border border-stone-300 block mt-4 md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] w-full tracking-widest focus:outline focus:outline-solid focus:outline-stone-400 disabled:text-stone-700/70" />
            </div>
            <div>
                <label
                    for="no_hp"
                    class="block md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] tracking-widest">
                    No. HP
                </label>
                <input
                    name="no_hp"
                    id="no_hp"
                    type="tel"
                    placeholder="Contoh: 081234567890"
                    maxlength="14"
                    class="py-2 px-4 md:py-4 md:px-6 bg-stone-100 border border-stone-300 block mt-4 md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] w-full tracking-widest focus:outline focus:outline-solid focus:outline-stone-400 disabled:text-stone-700/70" />
            </div>
            <div>
                <label
                    for="alamat"
                    class="block md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] tracking-widest">
                    Alamat
                </label>
                <input
                    name="alamat"
                    type="text"
                    placeholder="Masukkan Alamat Anda"
                    class="py-2 px-4 md:py-4 md:px-6 bg-stone-100 border border-stone-300 block mt-4 md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] w-full tracking-widest focus:outline focus:outline-solid focus:outline-stone-400 disabled:text-stone-700/70" />
            </div>

            <div>
                <label
                    for="kritik"
                    class="block md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] tracking-widest">Kritik
                    <span
                        class="material-symbols-outlined !text-[2.083vw] leading-[2.083vw] md:!text-[0.833vw] md:leading-[0.833vw] text-red-900 align-super">
                        asterisk
                    </span>
                </label>
                <textarea
                    name="kritik"
                    required
                    placeholder="Kritik Anda Kepada BAPENDA Kab. Purwakarta"
                    class="py-2 px-4 md:py-4 md:px-6 bg-stone-100 border border-stone-300 block mt-4 md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] w-full tracking-widest resize-none h-[150px] focus:outline focus:outline-solid focus:outline-stone-400 disabled:text-stone-700/70"></textarea>
            </div>
            <div>
                <label
                    for="saran"
                    class="block md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] tracking-widest">Saran
                    <span
                        class="material-symbols-outlined !text-[2.083vw] leading-[2.083vw] md:!text-[0.833vw] md:leading-[0.833vw] text-red-900 align-super">
                        asterisk
                    </span>
                </label>
                <textarea
                    name="saran"
                    required
                    placeholder="Saran Anda Kepada BAPENDA Kab. Purwakarta"
                    class="py-2 px-4 md:py-4 md:px-6 bg-stone-100 border border-stone-300 block mt-4 md:text-[1.042vw] md:leading-[1.042vw] text-[2.604vw] leading-[2.604vw] w-full tracking-widest resize-none h-[150px] focus:outline focus:outline-solid focus:outline-stone-400 disabled:text-stone-700/70"></textarea>
            </div>
            <div class="md:col-span-2 flex place-content-end">
                <button
                    type="submit"
                    class="bg-stone-500 text-stone-100 px-4 py-2 md:px-6 md:py-3 hover:enabled:outline hover:enabled:bg-stone-200 hover:enabled:text-stone-700 hover:enabled:outline-stone-700 duration-100 tracking-widest text-[2.344vw] leading-[2.344vw] md:text-[0.938vw] md:leading-[0.938vw] cursor-pointer disabled:opacity-45">
                    <span class="material-symbols-outlined align-middle" id="send-icon">
                        send
                    </span>
                    <span
                        class="material-symbols-outlined animate-spin !hidden align-middle"
                        id="loading-icon">
                        progress_activity
                    </span>
                    <span class="align-middle">Kirim Kritik dan Saran</span>
                </button>
            </div>
        </form>
    </div>

    <?php $this->load->view('new_fe/components/footer', ['ShowData' => $ShowData]); ?>

    <button id="open-qr-scanner"
        class="fixed bottom-6 right-6 z-50 bg-stone-500 hover:bg-stone-600 hover:scale-105 transition-all duration-300 text-stone-100 w-14 h-14 flex items-center justify-center rounded-full shadow-[0_10px_20px_rgba(0,0,0,0.3)]">
        <span class="material-symbols-outlined text-3xl">
            qr_code_scanner
        </span>
    </button>

    <div id="qr-reader-container"
        class="fixed inset-0 bg-black/60 flex items-center justify-center z-[9999999] hidden transition-opacity duration-300 ease-in-out">
        <div class="bg-white p-3 rounded-2xl shadow-2xl w-[90%] max-w-md animate-fade-in flex flex-col items-center gap-3">

            <!-- QR Scanner -->
            <div id="qr-reader" class="rounded-lg overflow-hidden border border-gray-300 w-full"></div>

            <!-- Tombol close di bawah tengah -->
            <button id="close-qr-scanner"
                class="bg-stone-600 text-white rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:bg-stone-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 8.586l4.95-4.95a1 1 0 111.414 1.414L11.414 10l4.95 4.95a1 1 0 01-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10l-4.95-4.95a1 1 0 011.414-1.414L10 8.586z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Modal Konfirmasi Hasil Scan -->
    <div id="qr-result-modal"
        class="fixed inset-0 bg-black/60 flex items-center justify-center z-[99999999] hidden transition-opacity duration-300 ease-in-out">
        <div class="bg-white p-5 rounded-2xl shadow-2xl w-[90%] max-w-md animate-fade-in flex flex-col gap-4 text-center">
            <h2 class="text-lg font-semibold text-stone-800">QR Terdeteksi</h2>
            <p id="qr-result-text" class="text-sm break-words text-stone-700"></p>
            <div class="flex justify-center gap-3 mt-3">
                <a href="#" id="open-link"
                    target="_blank"
                    class="bg-stone-600 text-white px-4 py-2 rounded-lg hover:bg-stone-700 transition">
                    Buka Link
                </a>
                <button id="close-result-modal"
                    class="bg-gray-300 text-stone-800 px-4 py-2 rounded-lg hover:bg-gray-400 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <button id="open-formulir-modal" class="fixed bottom-[calc(var(--spacing)_*_6_+_4.2rem)] right-6 z-50 bg-stone-500 hover:bg-stone-600 hover:scale-105 transition-all duration-300 text-stone-100 w-14 h-14 flex items-center justify-center rounded-full shadow-[0_10px_20px_rgba(0,0,0,0.3)]">
        <span class="inline-flex rounded-full bg-stone-500 hover:bg-stone-600 hover:scale-105 transition-all duration-300 w-14 aspect-square items-center justify-center">
            <img src="<?= base_url('assets/images') ?>/form.png" alt="Form Icon" class="block w-1/2 h-1/2 object-contain" />
        </span>
    </button>

    <div id="formulir-container"
        class="fixed inset-0 bg-black/60 flex items-center justify-center z-[9999999] hidden transition-opacity duration-300 ease-in-out">

        <div class="relative bg-white p-3 rounded-2xl shadow-2xl w-[95%] max-w-xl animate-fade-in flex flex-col items-center gap-3 max-h-[90vh] overflow-y-auto">

            <button id="close-formulir-modal"
                class="absolute top-3 right-3 bg-stone-600 text-white rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:bg-stone-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 8.586l4.95-4.95a1 1 0 111.414 1.414L11.414 10l4.95 4.95a1 1 0 01-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10l-4.95-4.95a1 1 0 011.414-1.414L10 8.586z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <h2 class="text-lg font-bold orbitron mb-2 mt-4">Daftar Formulir</h2>

            <table id="formulir-table"
                class="border-collapse w-full bg-stone-200 orbitron text-xs tracking-widest rounded-xl overflow-hidden border border-stone-50">
                <thead class="text-sm bg-stone-300">
                    <tr>
                        <th class="border-stone-300 border p-2">#</th>
                        <th class="border-stone-300 border p-2">Nama Formulir</th>
                        <th class="border-stone-300 border p-2">File</th>
                    </tr>
                </thead>
                <tbody class="text-center" id="produk-hukum-body">
                    <?php foreach ($formulir as $idx => $f): ?>
                        <tr>
                            <td class="border-stone-300 border p-2"><?= $idx + 1 ?></td>
                            <td class="border-stone-300 border p-2 w-[400px]">
                                <div class="line-clamp-2 break-words break-all">
                                    <?= htmlspecialchars($f['ket']) ?>
                                </div>
                            </td>

                            <td class="border-stone-300 border p-2">
                                <a href="<?= $folderformulir . $f['file_uu'] ?>" target="_blank" download
                                    class="inline-block group px-3 py-1 border border-stone-700 rounded hover:bg-stone-700 hover:text-stone-200 duration-100">
                                    <span class="material-symbols-outlined align-middle !text-xl">download</span>
                                    <span class="align-middle"> Unduh </span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?= base_url('assets'); ?>/new/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/animation/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/vendor/viewerjs/viewer.min.js') ?>"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("no_hp").addEventListener("tel", function(e) {
                this.value = this.value.replace(/[^0-9]/g, '').slice(0, 14);
            });
        });
    </script>

    <script>
        let html5QrCode;

        document.getElementById("open-qr-scanner").addEventListener("click", function() {
            document.getElementById("qr-reader-container").classList.remove("hidden");

            html5QrCode = new Html5Qrcode("qr-reader");

            const qrConfig = {
                fps: 10,
                qrbox: 250
            };

            html5QrCode.start({
                    facingMode: "environment"
                }, qrConfig,
                (decodedText, decodedResult) => {
                    html5QrCode.stop().then(() => {
                        html5QrCode.clear();
                    });

                    document.getElementById("qr-reader-container").classList.add("hidden");

                    document.getElementById("qr-result-text").textContent = decodedText;
                    document.getElementById("open-link").href = decodedText;
                    document.getElementById("qr-result-modal").classList.remove("hidden");
                },
                (errorMessage) => {
                    console.log("Scan error:", errorMessage);
                }
            ).catch((err) => {
                console.error("Unable to start QR scanner:", err);
            });
        });

        document.getElementById("qr-reader-container").addEventListener("click", function(e) {
            document.getElementById("qr-reader-container").classList.add("hidden");
            if (html5QrCode) {
                html5QrCode.stop().then(() => {
                    html5QrCode.clear();
                }).catch((err) => {
                    console.error("Error stopping QR scanner:", err);
                });
            }
        });

        document.getElementById("close-qr-scanner").addEventListener("click", function() {
            document.getElementById("qr-reader-container").classList.add("hidden");
            if (html5QrCode) {
                html5QrCode.stop().then(() => {
                    html5QrCode.clear();
                }).catch((err) => {
                    console.error("Error stopping QR scanner:", err);
                });
            }
        });

        document.getElementById("close-result-modal").addEventListener("click", function() {
            document.getElementById("qr-result-modal").classList.add("hidden");
        });

        document.getElementById("open-link").addEventListener("click", function() {
            document.getElementById("qr-result-modal").classList.add("hidden");
        });
    </script>

    <script>
        document.getElementById('open-formulir-modal').addEventListener("click", function() {
            document.getElementById("formulir-container").classList.remove("hidden");
        });

        document.getElementById('close-formulir-modal').addEventListener("click", function() {
            document.getElementById("formulir-container").classList.add("hidden");
        });

        document.getElementById("formulir-container").addEventListener("click", function(e) {
            if (e.target === this) {
                this.classList.add("hidden");
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('carousel-viewer-container');
            if (!container) return;

            const viewer = new Viewer(container, {
                toolbar: true,
                navbar: false,
                title: false,
                inline: false,
                loop: true,
                zIndex: 9999,
            });

            const thumbnails = document.querySelectorAll('.owl-carousel .bg-cover');

            thumbnails.forEach((thumb, index) => {
                thumb.style.cursor = 'pointer';
                thumb.addEventListener('click', function() {
                    viewer.show();
                    viewer.view(index);
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const visiContainer = document.getElementById('visi-image-container');
            const openVisiLink = document.getElementById('open-visi-image');
            if (!visiContainer || !openVisiLink) return;

            const viewer = new Viewer(visiContainer, {
                inline: false,
                toolbar: {
                    zoomIn: 1,
                    zoomOut: 1,
                    oneToOne: 1,
                    reset: 1,
                    rotateLeft: 1,
                    rotateRight: 1,
                    flipHorizontal: 1,
                    flipVertical: 1,
                    prev: 0,
                    next: 0,
                },
                navbar: false,
                title: false
            });

            openVisiLink.addEventListener('click', function(e) {
                e.preventDefault();
                viewer.show();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alurContainer = document.getElementById('alur-image-container');
            const openVisiLink = document.getElementById('open-alur-image');
            if (!alurContainer || !openVisiLink) return;

            const viewer = new Viewer(alurContainer, {
                inline: false,
                toolbar: {
                    zoomIn: 1,
                    zoomOut: 1,
                    oneToOne: 1,
                    reset: 1,
                    rotateLeft: 1,
                    rotateRight: 1,
                    flipHorizontal: 1,
                    flipVertical: 1,
                    prev: 0,
                    next: 0,
                },
                navbar: false,
                title: false
            });

            openVisiLink.addEventListener('click', function(e) {
                e.preventDefault();
                viewer.show();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const informasiContainer = document.getElementById('informasi-image-container');
            const openVisiLink = document.getElementById('open-informasi-image');
            if (!informasiContainer || !openVisiLink) return;

            const viewer = new Viewer(informasiContainer, {
                inline: false,
                toolbar: {
                    zoomIn: 1,
                    zoomOut: 1,
                    oneToOne: 1,
                    reset: 1,
                    rotateLeft: 1,
                    rotateRight: 1,
                    flipHorizontal: 1,
                    flipVertical: 1,
                    prev: 0,
                    next: 0,
                },
                navbar: false,
                title: false
            });

            openVisiLink.addEventListener('click', function(e) {
                e.preventDefault();
                viewer.show();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const misiContainer = document.getElementById('misi-image-container');
            const openMisiLink = document.getElementById('open-misi-image');
            if (!misiContainer || !openMisiLink) return;

            const viewer = new Viewer(misiContainer, {
                inline: false,
                toolbar: {
                    zoomIn: 1,
                    zoomOut: 1,
                    oneToOne: 1,
                    reset: 1,
                    rotateLeft: 1,
                    rotateRight: 1,
                    flipHorizontal: 1,
                    flipVertical: 1,
                    prev: 0,
                    next: 0,
                },
                navbar: false,
                title: false
            });

            openMisiLink.addEventListener('click', function(e) {
                e.preventDefault();
                viewer.show();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ppidContainer = document.getElementById('ppid-image-container');
            const openPpidLink = document.getElementById('open-ppid-image');
            if (!ppidContainer || !openPpidLink) return;

            const viewer = new Viewer(ppidContainer, {
                inline: false,
                toolbar: {
                    zoomIn: 1,
                    zoomOut: 1,
                    oneToOne: 1,
                    reset: 1,
                    rotateLeft: 1,
                    rotateRight: 1,
                    flipHorizontal: 1,
                    flipVertical: 1,
                    prev: 0,
                    next: 0,
                },
                navbar: false,
                title: false
            });

            openPpidLink.addEventListener('click', function(e) {
                e.preventDefault();
                viewer.show();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ketentuanContainer = document.getElementById('ketentuan-image-container');
            const openKetentuanLink = document.getElementById('open-ketentuan-image');
            if (!ketentuanContainer || !openKetentuanLink) return;

            const viewer = new Viewer(ketentuanContainer, {
                inline: false,
                toolbar: {
                    zoomIn: 1,
                    zoomOut: 1,
                    oneToOne: 1,
                    reset: 1,
                    rotateLeft: 1,
                    rotateRight: 1,
                    flipHorizontal: 1,
                    flipVertical: 1,
                    prev: 0,
                    next: 0,
                },
                navbar: false,
                title: false
            });

            openKetentuanLink.addEventListener('click', function(e) {
                e.preventDefault();
                viewer.show();
            });
        });
    </script>

    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <script>
        document.querySelectorAll("#menu a").forEach((link) => {
            link.addEventListener("click", function() {
                toggleMenu(document.querySelector("#toggle-menu"));
            });
        });

        const toggleMenu = (el, e) => {
            if (e) {
                e.preventDefault();
            }
            let menu = document.querySelector("#menu");
            let icon = el.querySelector("span");

            if (menu.classList.contains("-right-full")) {
                menu.classList.remove("-right-full");
                menu.classList.add("right-0");
                icon.classList.remove("menu", "close-to-menu");
                icon.classList.add("menu-to-close");
            } else {
                menu.classList.remove("right-0");
                menu.classList.add("-right-full");
                icon.classList.add("close-to-menu");
                icon.classList.remove("menu-to-close");
            }
        };

        const notyf = new Notyf({
            duration: 4000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top'
            }
        });

        const submitForm = (e) => {
            e.preventDefault();

            const form = e.target;
            const btn = form.querySelector("button[type='submit']");
            const loadingIco = btn.querySelector("span#loading-icon");
            const sentIco = btn.querySelector("span#send-icon");

            loadingIco.classList.remove("!hidden");
            sentIco.classList.add("!hidden");
            btn.disabled = true;

            const formData = new FormData(form);

            fetch("<?= base_url('api/kritik-saran/store') ?>", {
                    method: "POST",
                    body: formData,
                })
                .then((res) => res.json())
                .then((res) => {
                    if (res.meta && res.meta.status === "success") {
                        notyf.success("Kritik dan saran berhasil dikirim.");
                        form.reset();
                    } else {
                        notyf.error("Gagal mengirim kritik dan saran.");
                    }
                })
                .catch((err) => {
                    console.error("Error:", err);
                    notyf.error("Terjadi kesalahan saat mengirim kritik dan saran.");
                })
                .finally(() => {
                    loadingIco.classList.add("!hidden");
                    sentIco.classList.remove("!hidden");
                    btn.disabled = false;

                    form.querySelectorAll("input, textarea").forEach((input) => {
                        input.disabled = false;
                    });
                });
        };

        $(document).ready(function() {
            var $owl = $(".owl-carousel");
            if ($owl.length === 0 || $owl.children().length === 0) {
                return; // Skip jika tidak ada item carousel
            }
            $owl.on("initialized.owl.carousel", function(data) {
                let current = data.target.querySelector(".owl-item.active");
                if (current) {
                    current.querySelectorAll("[class*=animate__]").forEach((child) => {
                        child.classList.add("animate__animated");
                    });
                }
            });
            $owl.owlCarousel({
                // animateOut: "fadeOut",
                mouseDrag: false,
                lazyLoadEager: 3,
                // autoplay: true,
                // autoplayHoverPause: true,
                // loop: true,
                margin: 10,

                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1024: {
                        items: 3,
                    },
                },
            });

            $owl.on("translate.owl.carousel", function(data) {
                setTimeout(() => {
                    let current = data.target.querySelector(".owl-item.active");
                    if (current) {
                        current.querySelectorAll(".animate").forEach((child) => {
                            animateCSS(child, child.getAttribute("data-animate"));
                        });
                    }
                }, 1000);
            });
        });

        let callback = (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // console.log(entry.target);
                    entry.target.querySelectorAll(".animate").forEach((child) => {
                        animateCSS(child, child.getAttribute("data-animate"));
                    });
                } else {
                    // entry.target.classList.remove("animate__animated");
                }
            });
        };
        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        };
        let observer = new IntersectionObserver(callback, options);

        document.querySelectorAll(".observe").forEach((box) => {
            observer.observe(box);
        });

        const animateCSS = (element, animation, prefix = "animate__") =>
            // We create a Promise and return it
            new Promise((resolve, reject) => {
                const animationName = `${prefix}${animation}`;
                const node = element;
                node.classList.remove("hidden");
                if (node.getAttribute("data-display")) {
                    node.classList.add(node.getAttribute("data-display"));
                }

                if (node.getAttribute("data-custom")) {
                    node.classList.add(node.getAttribute("data-animate"));
                } else {
                    node.classList.add(`${prefix}animated`, animationName);
                }

                // When the animation ends, we clean the classes and resolve the Promise
                function handleAnimationEnd(event) {
                    event.stopPropagation();
                    // node.classList.remove(`${prefix}animated`, animationName);
                    resolve("Animation ended");
                }

                node.addEventListener("animationend", handleAnimationEnd, {
                    once: true,
                });
            });

        window.onload = displayClock();

        function displayClock() {
            document.querySelector(".running-clock").innerHTML =
                new Date().toLocaleTimeString("en-GB");
            document.querySelector(".running-date").innerHTML =
                new Date().toLocaleDateString("en-GB");
            setTimeout(displayClock, 1000);
        }

        document.addEventListener("DOMContentLoaded", () => {
            new TypeIt(".typing-animation", {
                    waitUntilVisible: true,
                    speed: 0,
                })
                .type("B")
                .pause(378)
                .type("a")
                .pause(319)
                .type("d")
                .pause(205)
                .type("a")
                .pause(371)
                .type("n")
                .pause(208)
                .type(" ")
                .pause(830)
                .type("P")
                .pause(209)
                .type("e")
                .pause(173)
                .type("n")
                .pause(115)
                .type("d")
                .pause(148)
                .type("a")
                .pause(168)
                .type("p")
                .pause(77)
                .type("a")
                .pause(90)
                .type("t")
                .pause(145)
                .type("a")
                .pause(284)
                .type("n")
                .pause(137)
                .type(" ")
                .pause(372)
                .type("D")
                .pause(259)
                .type("a")
                .pause(203)
                .type("e")
                .pause(178)
                .type("r")
                .pause(131)
                .type("a")
                .pause(185)
                .type("h")
                .pause(1666)
                .type(" ")
                .pause(384)
                .type("(")
                .pause(393)
                .type("B")
                .pause(533)
                .type("A")
                .pause(261)
                .type("P")
                .pause(309)
                .type("E")
                .pause(258)
                .type("N")
                .pause(161)
                .type("D")
                .pause(506)
                .type("A")
                .pause(506)
                .type(")")
                .pause(756)
                .break()
                .pause(379)
                .type("K")
                .pause(347)
                .type("a")
                .pause(149)
                .type("b")
                .pause(118)
                .type("u")
                .pause(294)
                .type("p")
                .pause(94)
                .type("a")
                .pause(188)
                .type("t")
                .pause(125)
                .type("e")
                .pause(185)
                .type("n")
                .pause(337)
                .type(" ")
                .pause(239)
                .type("P")
                .pause(228)
                .type("u")
                .pause(92)
                .type("r")
                .pause(157)
                .type("w")
                .pause(168)
                .type("a")
                .pause(229)
                .type("k")
                .pause(113)
                .type("a")
                .pause(155)
                .type("r")
                .pause(252)
                .type("t")
                .pause(171)
                .type("a")
                .pause(387)
                .type(",")
                .pause(546)
                .break()
                .pause(542)
                .type("P")
                .pause(213)
                .type("r")
                .pause(164)
                .type("o")
                .pause(264)
                .type("v")
                .pause(160)
                .type("i")
                .pause(446)
                .type("n")
                .pause(257)
                .type("s")
                .pause(160)
                .type("i")
                .pause(250)
                .type(" ")
                .pause(302)
                .type("J")
                .pause(459)
                .type("a")
                .pause(177)
                .type("w")
                .pause(160)
                .type("a")
                .pause(231)
                .type(" ")
                .pause(284)
                .type("B")
                .pause(340)
                .type("a")
                .pause(139)
                .type("r")
                .pause(175)
                .type("a")
                .pause(163)
                .type("t")
                .pause(414)
                .type(".")
                .go();
        });
    </script>


</body>
<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-fade-in {
        animation: fade-in 0.3s ease-out;
    }

    @media (max-width: 480px) {
        .notyf__toast {
            width: 84vw;
            top: 50px;
            right: 20px;
        }
    }
</style>

</html>