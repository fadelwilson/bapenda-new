<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>BAPENDA - Media</title>

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
            src="<?= base_url('assets'); ?>/images/media.webp"
            class="object-cover w-full h-full -z-10 grayscale-[0.8]" />
    </div>

    <div
        id="media"
        class="min-h-[100dvh] relative flex bg-stone-200 rounded-t-[2rem]">
        <div
            class="absolute -top-[50px] left-1/2 -translate-x-1/2 text-stone-800 text-xs text-center md:block hidden">
            <a href="#media" class="">
                <span class="material-symbols-outlined">arrow_downward</span>
                <div class="tracking-wide uppercase">Scroll Ke Bawah</div>
            </a>
        </div>

        <div class="py-12 px-6 md:py-20 md:px-16 grow bg-geo-3 overflow-hidden">
            <div
                class="goldman-regular font-bold text-[13.802vw] leading-[13.802vw] md:text-[5.5vw] md:leading-[5.5vw] text-stone-700 text-center relative z-10 uppercase mb-30 observe">
                Media

                <div
                    class="absolute w-[40vw] -right-[5rem] animate hidden overflow-hidden"
                    data-animate="fadeInRightBig"
                    style="animation-delay: 1s">
                    <div
                        class="h-[2vw] md:h-[1vw] bg-stone-700/40 -skew-x-[60deg] w-full"></div>
                </div>
                <div
                    class="absolute w-[5vw] -skew-x-[60deg] right-[calc(calc(40vw_-_5rem_+_1rem))] animate hidden"
                    data-animate="fadeInRightBig"
                    style="animation-delay: 0.5s">
                    <div
                        class="h-[2vw] md:h-[1vw] bg-stone-700/40 -skew-x-[60deg] w-full"></div>
                </div>
                <div
                    class="absolute w-[5vw] -skew-x-[60deg] right-[calc(calc(45vw_-_6rem_+_3rem))] animate hidden"
                    data-animate="fadeInRightBig">
                    <div
                        class="h-[2vw] md:h-[1vw] bg-stone-700/40 -skew-x-[60deg] w-full"></div>
                </div>
            </div>
            <?php
            $folder = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/kegiatan/';
            // $folder = base_url('loginwebsite/uploads/kegiatan/');
            $activity = $ShowDataKegiatan[0];

            $kegiatanImages = array_filter($activity, function ($value, $key) {
                return strpos($key, 'kegiatan') === 0 && !empty($value);
            }, ARRAY_FILTER_USE_BOTH);
            ?>

            <div id="galeriKegiatan"
                class="grid grid-cols-1 md:grid-cols-4 md:px-20 gap-6 md:gap-12 relative z-10 observe mb-6 md:mb-12">
                <?php foreach ($kegiatanImages as $filename): ?>
                    <div
                        class="group shadow-stone-700 shadow-xl flex-col rounded-lg overflow-hidden cursor-pointer group hover:-translate-y-4 duration-300 animate opacity-0"
                        data-display="flex"
                        data-animate="fadeInUp"
                        style="animation-delay: 0s">
                        <div class="aspect-video bg-stone-700 overflow-hidden relative">
                            <img
                                src="<?= $folder . $filename ?>"
                                alt="Kegiatan"
                                class="group-hover:grayscale-0 grayscale-[0.7] duration-300 group-hover:scale-[1.05]" />
                            <div
                                class="absolute -bottom-full group-hover:bottom-0 left-0 right-0 orbitron px-4 py-2 line-clamp-1 bg-stone-700/80 text-stone-200 tracking-widest duration-300">
                                Kegiatan
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <div
        id="video"
        class="min-h-[40dvh] relative bg-stone-800 rounded-tl-[10rem] py-6 px-10 md:py-12 md:px-20">
        <h2
            class="orbitron text-[3.125vw] leading-[3.125vw] text-stone-200 tracking-widest text-right mb-12">
            Dokumentasi Kegiatan
        </h2>

        <div>
            <div class="owl-carousel owl-theme relative rounded-none">
                <?php foreach ($vid as $v) : ?>
                    <div
                        class="aspect-video relative overflow-hidden rounded-none bg-stone-900">

                        <?php
                        preg_match('/src="([^"]+)"/', $v['link'], $match);
                        $embedSrc = $match[1] ?? '';
                        ?>

                        <iframe
                            class="w-full h-auto aspect-video"
                            src="<?= $embedSrc ?>"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>

                        <div
                            class="absolute bottom-0 left-0 w-full bg-stone-200/90 px-4 py-2 group">
                            <h2
                                class="line-clamp-1 text-sm md:text-base md:line-clamp-2 md:h-[calc(var(--text-base)_*_3)] mb-0 md:mb-4 font-bold orbitron tracking-widest">
                                <?= $v['judul'] ?>
                            </h2>
                            <div
                                class="h-[calc(var(--text-sm)_*_3)] group-hover:h-[calc(var(--text-sm)_*_6)] duration-300 hidden md:block">
                                <div
                                    class="line-clamp-2 group-hover:line-clamp-4 text-sm text-justify duration-300">
                                    <?= $v['deskripsi'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php $this->load->view('new_fe/components/footer', ['ShowData' => $ShowData]); ?>

    <script src="<?= base_url('assets'); ?>/new/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/animation/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/vendor/viewerjs/viewer.min.js') ?>"></script>
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const gallery = document.getElementById('galeriKegiatan');
            const viewer = new Viewer(gallery, {
                toolbar: true,
                navbar: false,
                title: false,
                tooltip: true,
                movable: false,
                scalable: false,
                transition: true,
                fullscreen: true,
                viewed() {
                    viewer.show();
                },
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
                // animateOut: "fadeOut",
                mouseDrag: false,
                lazyLoadEager: 3,
                // autoplay: true,
                // autoplayHoverPause: true,
                loop: true,
                margin: 10,
                center: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 2,
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