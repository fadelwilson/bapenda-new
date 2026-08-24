<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>BAPENDA - Tentang Kami</title>

    <meta name="keywords" content="BAPENDA, Badan Pendapatan Daerah, Purwakarta, pajak daerah, retribusi, pelayanan pajak, informasi pajak Purwakarta, pendapatan daerah, e-pajak, sistem informasi pajak, Purwakarta digital" />
    <meta name="description" content="Situs resmi Badan Pendapatan Daerah (BAPENDA) Kabupaten Purwakarta. Temukan informasi pajak daerah, layanan retribusi, serta berbagai inovasi digital dalam pengelolaan pendapatan daerah." />
    <meta name="facebook-domain-verification" content="u7cyt5xgrow1db0yzok1uoyr02ez3i"   />

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

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="<?= base_url('assets'); ?>/css/output.css" rel="stylesheet" />
</head>

<body class="min-h-screen min-w-screen overflow-x-hidden relative montserrat bg-stone-200">
    <!-- HEADER NAVIGATION -->
    <?php $this->load->view('new_fe/components/navbar'); ?>

    <div
        class="h-[50dvh] md:h-[60dvh] relative flex bg-stone-500 inner-curve-bottom md:inner-curve-bottom rounded-b-[15rem] md:rounded-b-3xl observe overflow-hidden">
        <img
            src="<?= base_url('assets'); ?>/images/team-2.webp"
            class="object-cover object-top w-full h-full -z-10 grayscale-[0.8]" />
    </div>

    <div
        id="news"
        class="min-h-[100dvh] relative flex bg-stone-200 rounded-t-[2rem]">
        <div
            class="absolute -top-[50px] left-1/2 -translate-x-1/2 text-stone-800 text-xs text-center md:block hidden">
            <a href="#news" class="">
                <span class="material-symbols-outlined">arrow_downward</span>
                <div class="tracking-wide uppercase">Scroll Ke Bawah</div>
            </a>
        </div>

        <div class="py-8 px-10 md:py-20 md:px-16 grow bg-geo-1 overflow-hidden">
            <div
                class="goldman-regular font-bold text-[13.802vw] leading-[13.802vw] md:text-[5.5vw] md:leading-[5.5vw] text-stone-700 text-center relative z-10 uppercase mb-12 observe">
                Tim Kami

                <div
                    class="absolute w-[40vw] -right-[5rem] animate opacity-0"
                    data-animate="fadeInRightBig"
                    style="animation-delay: 1s">
                    <div
                        class="h-[2vw] md:h-[1vw] bg-stone-700/40 -skew-x-[60deg] w-full"></div>
                </div>
                <div
                    class="absolute w-[5vw] -skew-x-[60deg] right-[calc(calc(40vw_-_5rem_+_1rem))] animate opacity-0"
                    data-animate="fadeInRightBig"
                    style="animation-delay: 0.5s">
                    <div
                        class="h-[2vw] md:h-[1vw] bg-stone-700/40 -skew-x-[60deg] w-full"></div>
                </div>
                <div
                    class="absolute w-[5vw] -skew-x-[60deg] right-[calc(calc(45vw_-_6rem_+_3rem))] animate opacity-0"
                    data-animate="fadeInRightBig">
                    <div
                        class="h-[2vw] md:h-[1vw] bg-stone-700/40 -skew-x-[60deg] w-full"></div>
                </div>
            </div>

            <?php
            // $folder = base_url('loginwebsite/uploads/tentangkami/profiltim/');
            $folder = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/tentangkami/profiltim/';
            ?>

            <div class="grid grid-cols-2 gap-12 relative z-10 px-0 md:px-20 py-12">
                <div class="flex flex-col md:flex-row-reverse gap-8 md:gap-12 observe col-span-2">
                    <div
                        class="rounded-full aspect-square overflow-hidden w-auto md:w-[350px] shadow-2xl relative z-20 hidden animate"
                        data-animate="bounceIn">
                        <img
                            src="<?= $folder . $ShowDataTim[0]['foto_kaban'] ?>"
                            class="w-full aspect-square object-top object-cover" />
                    </div>
                    <div class="grow content-center">
                        <h2
                            class="orbitron text-[3.125vw] tracking-widest animate opacity-0"
                            data-animate="fadeInUp">
                            <?= $ShowDataTim[0]['nama_kaban'] ?>
                        </h2>
                        <div
                            class="orbitron tracking-widest animate opacity-0"
                            data-animate="fadeInUp"
                            style="animation-delay: 1s">
                            Kepala Badan Pendapatah Daerah
                        </div>
                        <div class="grid grid-cols-8 gap-4 observe mt-4">
                            <div class="animate opacity-0" data-animate="fadeInRightBig">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                            <div
                                class="animate opacity-0"
                                data-animate="fadeInRightBig"
                                style="animation-delay: 0.5s">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                            <div
                                class="animate opacity-0"
                                data-animate="fadeInRightBig"
                                style="animation-delay: 1s">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                            <div
                                class="animate opacity-0 col-span-5"
                                data-animate="fadeInRightBig"
                                style="animation-delay: 1.5s">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-12 observe col-span-2">
                    <div
                        class="rounded-full aspect-square overflow-hidden w-auto md:w-[350px] shadow-2xl relative z-20 hidden animate"
                        data-animate="bounceIn">
                        <img
                            src="<?= $folder . $ShowDataTim[0]['foto_sekban'] ?>"
                            class="w-full aspect-square object-top object-cover" />
                    </div>
                    <div class="grow content-center text-right">
                        <h2
                            class="orbitron text-[3.125vw] tracking-widest animate opacity-0"
                            data-animate="fadeInUp">
                            <?= $ShowDataTim[0]['nama_sekban'] ?>
                        </h2>
                        <div
                            class="orbitron tracking-widest animate opacity-0"
                            data-animate="fadeInUp"
                            style="animation-delay: 1s">
                            Sekretaris Badan Pendapatah Daerah
                        </div>
                        <div class="grid grid-cols-8 gap-4 mt-4">
                            <div
                                class="animate opacity-0 col-span-5"
                                data-animate="fadeInLeftBig"
                                style="animation-delay: 1.5s">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>

                            <div
                                class="animate opacity-0"
                                data-animate="fadeInLeftBig"
                                style="animation-delay: 1s">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                            <div
                                class="animate opacity-0"
                                data-animate="fadeInLeftBig"
                                style="animation-delay: 0.5s">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                            <div class="animate opacity-0" data-animate="fadeInLeftBig">
                                <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 grid md:grid-cols-3 grid-cols-1 pt-0 md:pt-20 content-center gap-12">
                    <div
                        class="flex flex-col gap-6 observe items-center overflow-hidden">
                        <div
                            class="rounded-full aspect-square overflow-hidden w-[35.807vw] md:w-[13.021vw] shadow-2xl relative z-20 hidden animate"
                            data-animate="bounceIn">
                            <img
                                src="<?= $folder . $ShowDataTim[0]['foto_kabid1'] ?>"
                                class="w-full aspect-square object-top object-cover" />
                        </div>
                        <div class="grow content-center text-center">
                            <h2
                                class="orbitron text-[3.125vw] md:text-[2.083vw] leading-[2.083vw] tracking-widest animate opacity-0"
                                data-animate="fadeInUp">
                                <?= $ShowDataTim[0]['nama_kabid1'] ?>
                            </h2>
                            <div
                                class="orbitron tracking-widest animate opacity-0 mt-2 md:mt-4 md:h-[calc(0.729vw_*_3)] h-auto overflow-hidden text-[14px] md:text-[0.729vw]"
                                data-animate="fadeInUp"
                                style="animation-delay: 1s">
                                Kepala Bidang Penetapan dan Pengolahan Data Badan Pendapatan
                                Daerah
                            </div>
                            <div class="grid grid-cols-8 gap-4 observe mt-4">
                                <div class="animate opacity-0" data-animate="fadeInRightBig">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                                <div
                                    class="animate opacity-0 col-span-6"
                                    data-animate="fadeInRightBig"
                                    style="animation-delay: 0.5s">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                                <div
                                    class="animate opacity-0"
                                    data-animate="fadeInRightBig"
                                    style="animation-delay: 1s">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col gap-6 observe items-center overflow-hidden">
                        <div
                            class="rounded-full aspect-square overflow-hidden w-[35.807vw] md:w-[13.021vw] shadow-2xl relative z-20 hidden animate"
                            data-animate="bounceIn">
                            <img
                                src="<?= $folder . $ShowDataTim[0]['foto_kabid2'] ?>"
                                class="w-full aspect-square object-top object-cover" />
                        </div>
                        <div class="grow content-center text-center">
                            <h2
                                class="orbitron text-[3.125vw] md:text-[2.083vw] leading-[2.083vw] tracking-widest animate opacity-0"
                                data-animate="fadeInUp">
                                <?= $ShowDataTim[0]['nama_kabid2'] ?>
                            </h2>
                            <div
                                class="orbitron tracking-widest animate opacity-0 mt-2 md:mt-4 md:h-[calc(0.729vw_*_3)] h-auto overflow-hidden text-[14px] md:text-[0.729vw]"
                                data-animate="fadeInUp"
                                style="animation-delay: 1s">
                                Kepala Bidang Pendapatan dan Pelayanan Badan Pendapatan Daerah
                            </div>
                            <div class="grid grid-cols-8 gap-4 observe mt-4">
                                <div class="animate opacity-0" data-animate="fadeInRightBig">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                                <div
                                    class="animate opacity-0 col-span-6"
                                    data-animate="fadeInRightBig"
                                    style="animation-delay: 0.5s">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                                <div
                                    class="animate opacity-0"
                                    data-animate="fadeInRightBig"
                                    style="animation-delay: 1s">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col gap-6 observe items-center overflow-hidden">
                        <div
                            class="rounded-full aspect-square overflow-hidden w-[35.807vw] md:w-[13.021vw] shadow-2xl relative z-20 hidden animate"
                            data-animate="bounceIn">
                            <img
                                src="<?= $folder . $ShowDataTim[0]['foto_kabid3'] ?>"
                                class="w-full aspect-square object-top object-cover" />
                        </div>
                        <div class="grow content-center text-center">
                            <h2
                                class="orbitron text-[3.125vw] md:text-[2.083vw] leading-[2.083vw] tracking-widest animate opacity-0"
                                data-animate="fadeInUp">
                                <?= $ShowDataTim[0]['nama_kabid3'] ?>
                            </h2>
                            <div
                                class="orbitron tracking-widest animate opacity-0 mt-2 md:mt-4 md:h-[calc(0.729vw_*_3)] h-auto overflow-hidden text-[14px] md:text-[0.729vw]"
                                data-animate="fadeInUp"
                                style="animation-delay: 1s">
                                Kepala Bidang Penagihan, Pengendalian dan Evaluasi Pelaporan
                                Badan Pendapatan Daerah
                            </div>
                            <div class="grid grid-cols-8 gap-4 observe mt-4">
                                <div class="animate opacity-0" data-animate="fadeInRightBig">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                                <div
                                    class="animate opacity-0 col-span-6"
                                    data-animate="fadeInRightBig"
                                    style="animation-delay: 0.5s">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                                <div
                                    class="animate opacity-0"
                                    data-animate="fadeInRightBig"
                                    style="animation-delay: 1s">
                                    <div class="h-[.5rem] bg-stone-700 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="px-0 md:px-20 mt-20 z-20 relative ">
                <?php
                $folder = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/tentangkami/struktur/';
                // $folder = base_url('loginwebsite/uploads/tentangkami/struktur/');
                ?>
                <?php foreach ($ShowDataStruktur as $dt) : ?>
                    <div class="rounded-2rem bg-stone-700 rounded-[2rem] overflow-hidden mb-10">
                        <div class="p-6 md:p-10 orbitron text-stone-200 tracking-widest">
                            <div class="text-[2.083vw] leading-[2.083vw]">
                                <?= strtoupper($dt['judul1']) ?> dan <?= strtoupper($dt['judul2']) ?>
                            </div>
                            <div class="text-sm mt-2">
                                <?= strtoupper($dt['narasi1']) ?> dan <?= strtoupper($dt['narasi2']) ?>
                            </div>
                        </div>
                        <div id="img-carousel-container">
                            <div class="owl-carousel owl-theme rounded-none fadeOut relative z-20">
                                <?php if (!empty($dt['foto_struk'])) : ?>
                                    <div class="aspect-[3/2] relative overflow-hidden rounded-none bg-white">
                                        <img
                                            src="<?= $folder . $dt['foto_struk'] ?>"
                                            class="w-full h-full object-contain" />
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($dt['foto_matrix'])) : ?>
                                    <div class="aspect-[3/2] relative overflow-hidden rounded-none bg-white">
                                        <img
                                            src="<?= $folder . $dt['foto_matrix'] ?>"
                                            class="w-full h-full object-contain" />
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div
        id="video"
        class="min-h-[40dvh] relative bg-stone-800 md:rounded-tl-[10rem] py-8 px-4 md:py-12 md:px-20">
        <h2
            class="orbitron md:text-[3.125vw] text-[6.208vw] leading-[3.125vw] text-stone-200 tracking-widest text-right my-8">
            Produk Unduh
        </h2>

        <div id="produk-hukum-container">

        </div>
    </div>

    <?php $this->load->view('new_fe/components/footer', ['ShowData' => $ShowData]); ?>

    <script src="<?= base_url('assets'); ?>/new/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/animation/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/vendor/viewerjs/viewer.min.js') ?>"></script>
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>

    <script>
        let currentPage = 1;
        let currentNomor = 1;

        function loadProdukHukum(page = 1) {
            currentPage = page;

            document.getElementById('produk-hukum-container').innerHTML = `
            <div class="flex justify-center items-center py-10 bg-stone-200 border border-stone-50 rounded-xl">
                <span class="material-symbols-outlined animate-spin">hourglass_empty</span>
            </div>
        `;

            fetch('<?= base_url('BerandaController/getProdukHukum') ?>?page=' + page)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('produk-hukum-container').innerHTML = data;
                    attachPaginationClicks();
                    currentPage = page
                    updateNomorUrut(page);
                });
        }

        function attachPaginationClicks() {
            document.querySelectorAll('[data-page]').forEach(btn => {
                btn.onclick = () => {
                    loadProdukHukum(btn.dataset.page);
                };
            });

            document.getElementById('prevPage').onclick = function() {
                if (currentPage > 1) {
                    loadProdukHukum(currentPage - 1);
                }
            };

            document.getElementById('nextPage').onclick = function() {
                loadProdukHukum(currentPage + 1);
            };
        }

        function updateNomorUrut(page) {
            currentNomor = (page - 1) * 5 + 1;
            document.querySelectorAll('#produk-hukum-body tr').forEach(row => {
                row.querySelector('td:first-child').textContent = currentNomor;
                currentNomor++;
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            loadProdukHukum();
        });
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const gallery = document.getElementById('img-carousel-container');
            const owl = $('.owl-carousel');

            owl.on('initialized.owl.carousel', function() {
                const viewer = new Viewer(gallery, {
                    toolbar: true,
                    navbar: false,
                    title: false,
                    tooltip: true,
                    movable: false,
                    scalable: false,
                    transition: true,
                    fullscreen: true,
                });

                const images = gallery.querySelectorAll('img');
                images.forEach((img, i) => {
                    img.addEventListener('click', function() {
                        viewer.view(i);
                    });
                });
            });

            owl.owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                animateOut: 'fadeOut',
            });
        });
    </script>

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

        const submitForm = (e) => {
            console.log(e.target);
            e.preventDefault();

            let btn = e.target.querySelector("button[type='submit']");
            let loadingIco = btn.querySelector("span#loading-icon");
            let sentIco = btn.querySelector("span#send-icon");

            loadingIco.classList.remove("!hidden");
            sentIco.classList.add("!hidden");
            btn.disabled = true;

            let inputs = e.target.querySelectorAll("input, textarea");
            inputs.forEach((input) => {
                input.disabled = true;
            });

            setTimeout(function() {
                inputs.forEach((input) => {
                    input.value = null;
                    input.disabled = false;
                });

                loadingIco.classList.add("!hidden");
                sentIco.classList.remove("!hidden");
                btn.disabled = false;
            }, 2000);
        };
        $(document).ready(function() {
            var $owl = $(".owl-carousel");
            $owl.on("initialized.owl.carousel", function(data) {
                let current = data.target.querySelector(".owl-item.active");
                current.querySelectorAll("[class*=animate__]").forEach((child) => {
                    child.classList.add("animate__animated");
                });
            });
            $owl.owlCarousel({
                items: 2,
                animateOut: "fadeOut",
                mouseDrag: false,
                lazyLoadEager: 3,
                // autoplay: true,
                // autoplayHoverPause: true,
                nav: true,
                loop: true,
                margin: 0,
                dots: false,
                center: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
            $owl.on("translate.owl.carousel", function(data) {
                setTimeout(() => {
                    let current = data.target.querySelector(".owl-item.active");
                    current.querySelectorAll(".animate").forEach((child) => {
                        animateCSS(child, child.getAttribute("data-animate"));
                    }, 1000);
                });
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
            threshold: 0.2,
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

        // window.onload = displayClock();
        // function displayClock() {
        //   document.querySelector(".running-clock").innerHTML =
        //     new Date().toLocaleTimeString("en-GB");
        //   document.querySelector(".running-date").innerHTML =
        //     new Date().toLocaleDateString("en-GB");
        //   setTimeout(displayClock, 1000);
        // }

        // document.addEventListener("DOMContentLoaded", () => {
        //   new TypeIt(".typing-animation", {
        //     waitUntilVisible: true,
        //     speed: 0,
        //   })
        //     .type("B")
        //     .pause(378)
        //     .type("a")
        //     .pause(319)
        //     .type("d")
        //     .pause(205)
        //     .type("a")
        //     .pause(371)
        //     .type("n")
        //     .pause(208)
        //     .type(" ")
        //     .pause(830)
        //     .type("P")
        //     .pause(209)
        //     .type("e")
        //     .pause(173)
        //     .type("n")
        //     .pause(115)
        //     .type("d")
        //     .pause(148)
        //     .type("a")
        //     .pause(168)
        //     .type("p")
        //     .pause(77)
        //     .type("a")
        //     .pause(90)
        //     .type("t")
        //     .pause(145)
        //     .type("a")
        //     .pause(284)
        //     .type("n")
        //     .pause(137)
        //     .type(" ")
        //     .pause(372)
        //     .type("D")
        //     .pause(259)
        //     .type("a")
        //     .pause(203)
        //     .type("e")
        //     .pause(178)
        //     .type("r")
        //     .pause(131)
        //     .type("a")
        //     .pause(185)
        //     .type("h")
        //     .pause(1666)
        //     .type(" ")
        //     .pause(384)
        //     .type("(")
        //     .pause(393)
        //     .type("B")
        //     .pause(533)
        //     .type("A")
        //     .pause(261)
        //     .type("P")
        //     .pause(309)
        //     .type("E")
        //     .pause(258)
        //     .type("N")
        //     .pause(161)
        //     .type("D")
        //     .pause(506)
        //     .type("A")
        //     .pause(506)
        //     .type(")")
        //     .pause(756)
        //     .break()
        //     .pause(379)
        //     .type("K")
        //     .pause(347)
        //     .type("a")
        //     .pause(149)
        //     .type("b")
        //     .pause(118)
        //     .type("u")
        //     .pause(294)
        //     .type("p")
        //     .pause(94)
        //     .type("a")
        //     .pause(188)
        //     .type("t")
        //     .pause(125)
        //     .type("e")
        //     .pause(185)
        //     .type("n")
        //     .pause(337)
        //     .type(" ")
        //     .pause(239)
        //     .type("P")
        //     .pause(228)
        //     .type("u")
        //     .pause(92)
        //     .type("r")
        //     .pause(157)
        //     .type("w")
        //     .pause(168)
        //     .type("a")
        //     .pause(229)
        //     .type("k")
        //     .pause(113)
        //     .type("a")
        //     .pause(155)
        //     .type("r")
        //     .pause(252)
        //     .type("t")
        //     .pause(171)
        //     .type("a")
        //     .pause(387)
        //     .type(",")
        //     .pause(546)
        //     .break()
        //     .pause(542)
        //     .type("P")
        //     .pause(213)
        //     .type("r")
        //     .pause(164)
        //     .type("o")
        //     .pause(264)
        //     .type("v")
        //     .pause(160)
        //     .type("i")
        //     .pause(446)
        //     .type("n")
        //     .pause(257)
        //     .type("s")
        //     .pause(160)
        //     .type("i")
        //     .pause(250)
        //     .type(" ")
        //     .pause(302)
        //     .type("J")
        //     .pause(459)
        //     .type("a")
        //     .pause(177)
        //     .type("w")
        //     .pause(160)
        //     .type("a")
        //     .pause(231)
        //     .type(" ")
        //     .pause(284)
        //     .type("B")
        //     .pause(340)
        //     .type("a")
        //     .pause(139)
        //     .type("r")
        //     .pause(175)
        //     .type("a")
        //     .pause(163)
        //     .type("t")
        //     .pause(414)
        //     .type(".")
        //     .go();
        // });
    </script>
</body>

</html>