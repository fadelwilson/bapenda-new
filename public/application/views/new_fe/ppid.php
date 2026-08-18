<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>BAPENDA - PPID</title>

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
            src="<?= base_url('assets'); ?>/images/ppid.webp"
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
                Seputar PPID

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
            // $folder = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/seputar/ppid/';
            $folder = base_url('loginwebsite/uploads/seputar/ppid/');
            ?>

            <div id="ppid-img"
                class="grid grid-cols-1 md:grid-cols-3 md:px-20 gap-6 md:gap-12 relative z-10 observe mb-6 md:mb-12">
                <?php foreach ($ShowDataPPID as $d): ?>
                    <div
                        class="group shadow-stone-700 shadow-xl rounded-lg overflow-hidden cursor-pointer group hover:-translate-y-4 duration-300 animate opacity-0"
                        data-animate="fadeInUp"
                        style="animation-delay: 0s">
                        <div class="aspect-auto bg-stone-700 overflow-hidden relative">
                            <img
                                src="<?= $folder . $d['foto_ppid'] ?>"
                                alt="Kegiatan"
                                class="group-hover:grayscale-0 grayscale-[0.7] duration-300 group-hover:scale-[1.05]" />
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
            const gallery = document.getElementById('ppid-img');
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
            threshold: 0.1,
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
    </script>
</body>

</html>