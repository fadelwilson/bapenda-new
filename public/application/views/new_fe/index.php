<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">

    <!-- Carousel Data -->
    <?php
    $carousel_media = [];
    if (!empty($ShowDataCarousel)) {
        foreach ($ShowDataCarousel as $item) {
            $is_video = ($item['tipe'] === 'video');
            $file_url = base_url('loginwebsite/uploads/carousel/' . $item['file_media']);

            $carousel_media[] = [
                'type'  => $item['tipe'],
                'src'   => $file_url,
                'thumb' => $is_video ? '' : $file_url,
                'label' => $item['judul'],
            ];
        }
    }

    if (empty($carousel_media)) {
        $carousel_media = [
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel1.webp'),
                'thumb' => base_url('assets/images/bpd-carousel1.webp'),
                'label' => 'Ayo Bayar Pajak Tepat Waktu',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel2.webp'),
                'thumb' => base_url('assets/images/bpd-carousel2.webp'),
                'label' => 'Pajak Daerah untuk Pembangunan Purwakarta',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel3.webp'),
                'thumb' => base_url('assets/images/bpd-carousel3.webp'),
                'label' => 'Terima Kasih Telah Membayar Pajak',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel4.webp'),
                'thumb' => base_url('assets/images/bpd-carousel4.webp'),
                'label' => 'Taat Pajak, Wujud Peduli Daerah',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel5.webp'),
                'thumb' => base_url('assets/images/bpd-carousel5.webp'),
                'label' => 'Pajak Lunas, Pembangunan Lancar',
            ],
            [
                'type'  => 'video',
                'src'   => base_url('assets/images/bpd-vidcarousel.mp4'),
                'thumb' => '',
                'label' => 'Video Sosialisasi Pajak Daerah',
            ],
        ];
    }
    ?>

    <!-- Section Hero / Beranda (Tema Light Solid White) -->
    <div class="relative min-h-[112vh] max-md:min-h-[115vh] w-full bg-white flex flex-col justify-start">
        <!-- Ornamen Sigotaka di kiri dan kanan background (watermark halus elegan) -->
        <img src="<?= base_url('assets/images/sigotaka_left.svg') ?>" alt="" class="absolute left-0 bottom-[0.973vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-10 max-md:hidden" style="mix-blend-mode: multiply; filter: invert(1);">
        <img src="<?= base_url('assets/images/sigotaka_right.svg') ?>" alt="" class="absolute right-0 bottom-[0.973vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-10 max-md:h-[157.692vw] max-md:bottom-[20.513vw]" style="mix-blend-mode: multiply; filter: invert(1);">

        <!-- Header Top Bar (Non-Floating, Inline Document Flow) -->
        <div class="relative z-20 max-md:z-[99999] pt-[1.556vw] px-[1.556vw] max-md:pt-[2.051vw] max-md:px-[2.051vw] shrink-0 bg-white">
            <div class="flex items-start justify-between max-md:flex-col max-md:items-start max-md:gap-[4.103vw]">
                <img src="<?= base_url('assets/images/bapenda-blue.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto max-md:ml-[2.051vw] max-md:mt-[1.538vw]">

                <div class="flex flex-col items-end gap-[0.584vw] max-md:w-full">
                    <h1 class="text-[4.669vw] max-md:text-[9.231vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                        Beranda
                    </h1>
                    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda', 'navbar_bg' => 'white', 'is_floating' => false]); ?>
                </div>
            </div>
        </div>

        <!-- Content Area: Carousel di Atas (Mentok ke Atas) & Slogan Headline di Tengah Sisa Section -->
        <div class="relative z-10 w-full flex-1 flex flex-col items-center justify-start">
            <div id="beranda-carousel-wrap" class="relative w-full h-[33.560vw] max-md:h-[115vw] overflow-hidden select-none group bg-white border-y-2 border-[#EAA90D] shrink-0">
                <!-- Stage / Main Viewport -->
                <div id="carousel-stage" class="relative w-full h-full overflow-hidden flex items-center justify-center">
                    <?php foreach ($carousel_media as $idx => $m): ?>
                        <div
                            class="carousel-slide absolute inset-0 w-full h-full bg-white flex items-center justify-center transition-opacity duration-700 ease-in-out <?= $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 pointer-events-none z-0' ?>"
                            data-index="<?= $idx ?>"
                            data-label="<?= htmlspecialchars($m['label']) ?>"
                            data-type="<?= $m['type'] ?>"
                        >
                            <?php if ($m['type'] === 'image'): ?>
                                <img
                                    src="<?= $m['src'] ?>"
                                    alt="<?= htmlspecialchars($m['label']) ?>"
                                    class="w-full h-full object-contain select-none bg-white"
                                    loading="<?= $idx === 0 ? 'eager' : 'lazy' ?>"
                                />
                            <?php else: ?>
                                <video
                                    controls
                                    playsinline
                                    preload="metadata"
                                    class="w-full h-full object-contain bg-white"
                                >
                                    <source src="<?= $m['src'] ?>" type="video/mp4">
                                    Browser Anda tidak mendukung pemutar video.
                                </video>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                    <!-- Bottom Gradient Overlay & Controls -->
                    <div class="absolute inset-x-0 bottom-0 h-[8.755vw] max-md:h-[25.641vw] bg-gradient-to-t from-black/25 via-transparent to-transparent pointer-events-none z-20 flex items-end justify-between p-[1.556vw] max-md:p-[3.077vw]">
                        <!-- Counter Badge (Kiri: 1 / N) -->
                        <div class="flex items-center gap-[0.389vw] max-md:gap-[1.538vw] bg-black/50 backdrop-blur-md border border-white/20 px-[0.681vw] max-md:px-[2.564vw] py-[0.292vw] max-md:py-[1.026vw] rounded-full shadow-md pointer-events-auto">
                            <span class="inline-block size-[0.389vw] max-md:size-[1.538vw] rounded-full bg-[#EA6D0D] animate-pulse"></span>
                            <span id="carousel-counter-badge" class="text-white text-[0.681vw] max-md:text-[2.821vw] font-semibold geologica tracking-wider">
                                1 / <?= count($carousel_media) ?>
                            </span>
                        </div>

                        <!-- Dots Indicator (Kanan) -->
                        <div class="flex items-center gap-[0.486vw] max-md:gap-[1.538vw] bg-black/50 backdrop-blur-md border border-white/20 px-[0.681vw] max-md:px-[2.564vw] py-[0.389vw] max-md:py-[1.282vw] rounded-full shadow-md pointer-events-auto">
                            <?php foreach ($carousel_media as $idx => $m): ?>
                                <button
                                    type="button"
                                    onclick="goToSlide(<?= $idx ?>)"
                                    class="carousel-dot-btn transition-all duration-300 cursor-pointer <?= $idx === 0 ? 'w-[1.946vw] max-md:w-[6.154vw] h-[0.486vw] max-md:h-[1.538vw] bg-[#EA6D0D] rounded-full shadow-md' : 'w-[0.486vw] max-md:w-[1.538vw] h-[0.486vw] max-md:h-[1.538vw] bg-white/70 hover:bg-white rounded-full shadow-md' ?>"
                                    data-dot-index="<?= $idx ?>"
                                    aria-label="Slide <?= $idx + 1 ?>"
                                ></button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Navigation Arrows (Left & Right) -->
                    <button
                        type="button"
                        onclick="prevSlide()"
                        class="absolute left-[0.973vw] max-md:left-[2.051vw] top-1/2 -translate-y-1/2 z-30 size-[2.529vw] max-md:size-[8.205vw] rounded-full bg-black/40 hover:bg-[#EA6D0D] text-white border border-white/20 backdrop-blur-md shadow-lg flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 cursor-pointer opacity-70 group-hover:opacity-100"
                        aria-label="Sebelumnya"
                    >
                        <svg class="size-[0.973vw] max-md:size-[3.590vw]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>

                    <button
                        type="button"
                        onclick="nextSlide()"
                        class="absolute right-[0.973vw] max-md:right-[2.051vw] top-1/2 -translate-y-1/2 z-30 size-[2.529vw] max-md:size-[8.205vw] rounded-full bg-black/40 hover:bg-[#EA6D0D] text-white border border-white/20 backdrop-blur-md shadow-lg flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 cursor-pointer opacity-70 group-hover:opacity-100"
                        aria-label="Selanjutnya"
                    >
                        <svg class="size-[0.973vw] max-md:size-[3.590vw]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Slogan Headline: Di Tengah Secara Vertikal & Horizontal Pada Sisa Section -->
            <div class="w-full flex-1 flex flex-col items-center justify-center px-[3.891vw] py-[2.918vw] max-md:px-[4.103vw] max-md:py-[6.154vw]">
                <!-- Eyebrow Tagline / Aksen Styling di Atas Slogan -->
                <div class="flex items-center gap-[0.584vw] max-md:gap-[2.051vw] mb-[0.875vw] max-md:mb-[2.564vw]">
                    <span class="h-[1.5px] w-[2.335vw] max-md:w-[7.692vw] bg-[#EAA90D] rounded-full"></span>
                    <span class="text-[#EA6D0D] text-[0.875vw] max-md:text-[3.333vw] font-bold krona-one uppercase tracking-widest text-center">
                        Pemerintah Kabupaten Purwakarta
                    </span>
                    <span class="h-[1.5px] w-[2.335vw] max-md:w-[7.692vw] bg-[#EAA90D] rounded-full"></span>
                </div>

                <!-- Teks Slogan Utama -->
                <h2 class="text-[#303752] text-[2.237vw] max-md:text-[5.641vw] font-bold geologica leading-tight max-md:leading-snug text-center max-w-[63vw] max-md:max-w-full shrink-0">
                    Pembayaran Pajak Daerah Anda untuk Pembangunan Purwakarta Istimewa
                </h2>
            </div>
        </div>
    </div>

    <!-- Carousel Script -->
    <script>
    (function () {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot-btn');
        const counterBadge = document.getElementById('carousel-counter-badge');
        const totalSlides = slides.length;
        const mediaData = <?= json_encode($carousel_media) ?>;

        let autoSlideTimer = null;
        const AUTO_INTERVAL = 6000;

        function isCurrentVideoPlaying() {
            const activeSlide = slides[currentSlide];
            if (!activeSlide) return false;
            const vid = activeSlide.querySelector('video');
            return vid && !vid.paused && !vid.ended;
        }

        function stopAutoSlide() {
            if (autoSlideTimer) {
                clearInterval(autoSlideTimer);
                autoSlideTimer = null;
            }
        }

        function startAutoSlide() {
            stopAutoSlide();
            if (totalSlides <= 1) return;
            if (isCurrentVideoPlaying()) return;

            autoSlideTimer = setInterval(function () {
                if (isCurrentVideoPlaying()) {
                    stopAutoSlide();
                    return;
                }
                nextSlide();
            }, AUTO_INTERVAL);
        }

        // Pasang event listener pada video untuk menghentikan/melanjutkan auto-slide
        slides.forEach(slide => {
            const vid = slide.querySelector('video');
            if (vid) {
                vid.addEventListener('play', function () {
                    stopAutoSlide();
                });
                vid.addEventListener('pause', function () {
                    startAutoSlide();
                });
                vid.addEventListener('ended', function () {
                    startAutoSlide();
                });
            }
        });

        // Hover pause on desktop
        const carouselWrap = document.getElementById('beranda-carousel-wrap');
        if (carouselWrap) {
            carouselWrap.addEventListener('mouseenter', function () {
                stopAutoSlide();
            });
            carouselWrap.addEventListener('mouseleave', function () {
                startAutoSlide();
            });
        }

        function pauseAllVideos() {
            slides.forEach(slide => {
                const vid = slide.querySelector('video');
                if (vid && !vid.paused) {
                    vid.pause();
                }
            });
        }

        window.goToSlide = function (idx) {
            if (idx < 0) idx = totalSlides - 1;
            if (idx >= totalSlides) idx = 0;

            pauseAllVideos();

            slides.forEach((slide, i) => {
                if (i === idx) {
                    slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                    slide.classList.add('opacity-100', 'z-10');
                } else {
                    slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
                    slide.classList.remove('opacity-100', 'z-10');
                }
            });

            dots.forEach((dot, i) => {
                if (i === idx) {
                    dot.className = 'carousel-dot-btn transition-all duration-300 cursor-pointer w-[1.946vw] max-md:w-[6.154vw] h-[0.486vw] max-md:h-[1.538vw] bg-[#EA6D0D] rounded-full shadow-md';
                } else {
                    dot.className = 'carousel-dot-btn transition-all duration-300 cursor-pointer w-[0.486vw] max-md:w-[1.538vw] h-[0.486vw] max-md:h-[1.538vw] bg-white/70 hover:bg-white rounded-full shadow-md';
                }
            });

            currentSlide = idx;

            if (counterBadge) {
                counterBadge.textContent = (currentSlide + 1) + ' / ' + totalSlides;
            }

            startAutoSlide();
        };

        window.nextSlide = function () {
            goToSlide(currentSlide + 1);
        };

        window.prevSlide = function () {
            goToSlide(currentSlide - 1);
        };

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowRight') nextSlide();
            if (e.key === 'ArrowLeft') prevSlide();
        });

        // Touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;
        const stage = document.getElementById('carousel-stage');
        if (stage) {
            stage.addEventListener('touchstart', function (e) {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            stage.addEventListener('touchend', function (e) {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 40) {
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
            }, { passive: true });
        }

        // Mulai auto slide saat halaman siap
        document.addEventListener('DOMContentLoaded', function () {
            startAutoSlide();
        });
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            startAutoSlide();
        }
    })();
    </script>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>