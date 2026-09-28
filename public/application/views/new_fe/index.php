<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda', 'navbar_bg' => 'white']); ?>

    <!-- Section Hero / Beranda (Tema Light) -->
    <div class="relative min-h-screen w-full bg-cover bg-center overflow-hidden max-md:bg-center" style="background-image: url('<?= base_url('assets/images/new-bg.webp') ?>');">
        <!-- Layer overlay light / gradient putih -->
        <div class="absolute inset-0 bg-white/60 z-0"></div>

        <!-- Ornamen Sigotaka di kiri dan kanan background (tema light: garis gelap elegan) -->
        <img src="<?= base_url('assets/images/sigotaka_left.svg') ?>" alt="" class="absolute left-0 bottom-[0.973vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-25 max-md:hidden" style="mix-blend-mode: multiply; filter: invert(1);">
        <img src="<?= base_url('assets/images/sigotaka_right.svg') ?>" alt="" class="absolute right-0 bottom-[0.973vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-25 max-md:h-[157.692vw] max-md:bottom-[20.513vw]" style="mix-blend-mode: multiply; filter: invert(1);">

        <!-- Konten Header & Body -->
        <div class="relative z-10 min-h-screen flex flex-col p-[1.556vw] max-md:p-[2.051vw]">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-[4.103vw]">
                <img src="<?= base_url('assets/images/bapenda-blue.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto max-md:ml-[2.051vw] max-md:mt-[1.538vw]">

                <h1 class="text-[4.669vw] max-md:text-[9.231vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                    Beranda
                </h1>
            </div>

            <div class="flex-1 flex items-center w-full">
                <div class="w-full px-[10.992vw] max-md:px-0">
                    <h2 class="text-[#303752] text-[2.918vw] font-bold geologica leading-tight max-md:text-[8.205vw] max-md:leading-snug max-md:text-center">
                        Pembayaran Pajak Daerah Anda untuk Pembangunan Purwakarta Istimewa
                    </h2>
                </div>
            </div>

            <!-- Scroll Indicator to Himbauan Section -->
            <div class="w-full flex justify-center pb-[0.973vw] max-md:pb-[2.051vw]">
                <a href="#section-himbauan" class="flex flex-col items-center gap-[0.778vw] max-md:gap-[3.077vw] group cursor-pointer" aria-label="Lihat Informasi & Himbauan Pajak">
                    <span class="text-[0.778vw] max-md:text-[3.077vw] geologica tracking-wider font-semibold uppercase px-[0.778vw] py-[0.195vw] max-md:px-[3.077vw] max-md:py-[1.026vw] bg-white/80 backdrop-blur-xs rounded-full border border-white/80 shadow-xs text-[#303752] group-hover:text-[#EA6D0D] group-hover:bg-white transition-all">Lihat Pojok Informasi</span>
                    <div class="size-[1.751vw] max-md:size-[7.692vw] rounded-full bg-white shadow-md border border-[#303752]/20 flex items-center justify-center group-hover:border-[#EA6D0D] group-hover:bg-[#EA6D0D] transition-all animate-bounce">
                        <svg class="size-[0.875vw] max-md:size-[3.846vw] text-[#303752] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Section 2: Himbauan & Sosialisasi Pajak Daerah (Background Putih) -->
    <section id="section-himbauan" class="relative w-full min-h-screen bg-white p-[1.556vw] max-md:p-[2.051vw] flex flex-col justify-between overflow-hidden">
        <div class="max-w-[56.03vw] max-md:max-w-full mx-auto w-full flex-1 flex flex-col justify-center">
            <!-- Section Header -->
            <div class="text-center mb-[2.918vw] max-md:mb-[7.179vw]">
                <span class="inline-flex items-center gap-[0.389vw] max-md:gap-[1.538vw] px-[0.681vw] max-md:px-[3.077vw] py-[0.292vw] max-md:py-[1.026vw] rounded-full bg-[#EA6D0D]/10 text-[#EA6D0D] text-[0.632vw] max-md:text-[2.821vw] font-semibold tracking-wider uppercase geologica mb-[0.389vw] max-md:mb-[2.051vw]">
                    <span class="size-[0.389vw] max-md:size-[1.538vw] rounded-full bg-[#EA6D0D] animate-pulse"></span>
                    Informasi Publik
                </span>
                <h2 class="text-[2.189vw] max-md:text-[6.154vw] font-bold text-[#303752] geologica leading-tight">
                    Pojok Informasi Bapenda
                </h2>
                <div class="w-[3.113vw] max-md:w-[12.308vw] h-[0.195vw] max-md:h-[0.769vw] bg-[#EA6D0D] mx-auto mt-[0.486vw] max-md:mt-[2.051vw] rounded-full"></div>
            </div>

            <!-- Carousel Card Container -->
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

            <div
                id="beranda-carousel-card"
                class="relative w-full bg-[#1a2035] border border-black/10 rounded-[0.778vw] max-md:rounded-[4.103vw] shadow-[0_20px_50px_rgba(0,0,0,0.18)] overflow-hidden flex flex-col select-none"
            >
                <!-- Top Info Bar -->
                <div class="flex items-center justify-between px-[0.681vw] max-md:px-[3.590vw] py-[0.584vw] max-md:py-[2.564vw] border-b border-white/10 bg-white/5">
                    <div class="flex items-center gap-[0.389vw] max-md:gap-[1.538vw]">
                        <span class="inline-block size-[0.486vw] max-md:size-[2.051vw] rounded-full bg-[#EA6D0D] animate-pulse"></span>
                        <span id="carousel-counter-badge" class="text-white text-[0.632vw] max-md:text-[2.821vw] font-semibold tracking-wide geologica">
                            1 / <?= count($carousel_media) ?>
                        </span>
                        <span class="text-white/40 text-[0.584vw] max-md:text-[2.564vw]">|</span>
                        <span id="carousel-label" class="text-white/90 text-[0.632vw] max-md:text-[2.821vw] open-sans font-medium truncate max-w-[19.455vw] max-md:max-w-[46.154vw]">
                            <?= htmlspecialchars($carousel_media[0]['label']) ?>
                        </span>
                    </div>

                    <div class="text-white/75 text-[0.535vw] max-md:text-[2.564vw] geologica font-medium flex items-center gap-[0.292vw] max-md:gap-[1.026vw] bg-white/5 border border-white/10 px-[0.486vw] max-md:px-[2.051vw] py-[0.195vw] max-md:py-[0.769vw] rounded-full">
                        <svg class="size-[0.584vw] max-md:size-[2.564vw] text-[#EA6D0D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span id="carousel-countdown">7s</span>
                    </div>
                </div>

                <!-- Stage / Main Viewport -->
                <div id="carousel-stage" class="relative w-full h-[28.016vw] max-md:h-[64.872vw] flex items-center justify-center bg-black/80 overflow-hidden">
                    <?php foreach ($carousel_media as $idx => $m): ?>
                        <div
                            class="carousel-slide absolute inset-0 flex items-center justify-center p-[0.778vw] max-md:p-[2.051vw] transition-opacity duration-300 <?= $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 pointer-events-none z-0' ?>"
                            data-index="<?= $idx ?>"
                            data-label="<?= htmlspecialchars($m['label']) ?>"
                            data-type="<?= $m['type'] ?>"
                        >
                            <?php if ($m['type'] === 'image'): ?>
                                <img
                                    src="<?= $m['src'] ?>"
                                    alt="<?= htmlspecialchars($m['label']) ?>"
                                    class="max-h-full max-w-full w-auto h-auto object-contain rounded-[0.389vw] max-md:rounded-[1.538vw] shadow-lg select-none"
                                    loading="lazy"
                                />
                            <?php else: ?>
                                <video
                                    controls
                                    playsinline
                                    preload="metadata"
                                    class="max-h-full max-w-full w-auto h-auto object-contain rounded-[0.389vw] max-md:rounded-[1.538vw] shadow-lg bg-black"
                                >
                                    <source src="<?= $m['src'] ?>" type="video/mp4">
                                    Browser Anda tidak mendukung pemutar video.
                                </video>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                    <!-- Prev Button -->
                    <button
                        type="button"
                        onclick="prevSlide()"
                        class="absolute left-[0.778vw] max-md:left-[2.051vw] top-1/2 -translate-y-1/2 z-20 bg-black/60 hover:bg-[#EA6D0D] text-white size-[1.946vw] max-md:size-[7.692vw] rounded-full border border-white/20 transition-all hover:scale-110 active:scale-95 shadow-xl flex items-center justify-center cursor-pointer backdrop-blur-sm"
                        aria-label="Sebelumnya"
                    >
                        <svg class="size-[0.875vw] max-md:size-[3.590vw]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>

                    <!-- Next Button -->
                    <button
                        type="button"
                        onclick="nextSlide()"
                        class="absolute right-[0.778vw] max-md:right-[2.051vw] top-1/2 -translate-y-1/2 z-20 bg-black/60 hover:bg-[#EA6D0D] text-white size-[1.946vw] max-md:size-[7.692vw] rounded-full border border-white/20 transition-all hover:scale-110 active:scale-95 shadow-xl flex items-center justify-center cursor-pointer backdrop-blur-sm"
                        aria-label="Selanjutnya"
                    >
                        <svg class="size-[0.875vw] max-md:size-[3.590vw]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Bottom Control & Thumbnail Row -->
                <div class="relative w-full px-[0.778vw] max-md:px-[2.564vw] py-[0.584vw] max-md:py-[2.051vw] bg-[#0f1424] border-t border-white/10 flex items-center justify-center overflow-hidden">
                    <!-- Thumbnails Scrollable Container -->
                    <div
                        id="carousel-thumbs-container"
                        class="w-full overflow-x-auto scroll-smooth py-[0.195vw] max-md:py-[0.769vw] scrollbar-none flex items-center cursor-grab active:cursor-grabbing select-none"
                    >
                        <div class="flex items-center gap-[0.389vw] max-md:gap-[1.538vw] m-auto shrink-0 min-w-min px-[0.389vw] max-md:px-[1.538vw]">
                            <?php foreach ($carousel_media as $idx => $m): ?>
                                <button
                                    type="button"
                                    onclick="goToSlide(<?= $idx ?>)"
                                    class="carousel-thumb-btn relative rounded-[0.292vw] max-md:rounded-[1.538vw] overflow-hidden border-2 transition-all duration-300 shrink-0 cursor-pointer <?= $idx === 0 ? 'border-[#EA6D0D] ring-2 ring-[#EA6D0D]/40 scale-105 opacity-100' : 'border-transparent opacity-50 hover:opacity-100 hover:border-white/30' ?>"
                                    data-thumb-index="<?= $idx ?>"
                                    title="<?= htmlspecialchars($m['label']) ?>"
                                >
                                    <?php if ($m['type'] === 'video'): ?>
                                        <div class="w-[3.113vw] max-md:w-[12.308vw] h-[1.946vw] max-md:h-[7.692vw] bg-[#0c101d] flex items-center justify-center border border-white/10">
                                            <svg class="size-[0.681vw] max-md:size-[3.077vw] text-(--yellow-color) fill-(--yellow-color)" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                        </div>
                                    <?php else: ?>
                                        <img src="<?= $m['thumb'] ?>" alt="<?= htmlspecialchars($m['label']) ?>" class="w-[3.113vw] max-md:w-[12.308vw] h-[1.946vw] max-md:h-[7.692vw] object-cover select-none pointer-events-none">
                                    <?php endif; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Copyright -->
        <footer class="relative z-10 mt-[3.891vw] max-md:mt-[6.154vw]">
            <div class="w-full text-[#303752] text-[0.584vw] open-sans max-md:text-[2.564vw] max-md:pb-[2.564vw]">
                <div class="text-center">
                    Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                </div>
            </div>
        </footer>
    </section>

    <!-- Carousel Script -->
    <script>
    (function () {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const thumbs = document.querySelectorAll('.carousel-thumb-btn');
        const thumbsContainer = document.getElementById('carousel-thumbs-container');
        const counterBadge = document.getElementById('carousel-counter-badge');
        const labelText = document.getElementById('carousel-label');
        const totalSlides = slides.length;

        const mediaData = <?= json_encode($carousel_media) ?>;

        const countdownEl = document.getElementById('carousel-countdown');
        let countdownTimer = null;
        let remainingSeconds = 7;
        const COUNTDOWN_TOTAL = 7;

        function updateCountdownDisplay() {
            if (!countdownEl) return;
            if (isCurrentVideoPlaying()) {
                countdownEl.textContent = 'Dijeda';
            } else {
                countdownEl.textContent = remainingSeconds + 's';
            }
        }

        function isCurrentVideoPlaying() {
            const activeSlide = slides[currentSlide];
            if (!activeSlide) return false;
            const vid = activeSlide.querySelector('video');
            return vid && !vid.paused && !vid.ended;
        }

        function stopAutoSlide() {
            if (countdownTimer) {
                clearInterval(countdownTimer);
                countdownTimer = null;
            }
            updateCountdownDisplay();
        }

        function startAutoSlide() {
            stopAutoSlide();
            if (totalSlides <= 1) return;

            remainingSeconds = COUNTDOWN_TOTAL;
            updateCountdownDisplay();

            // Jika video pada slide aktif sedang di-play, jangan jalankan auto slide
            if (isCurrentVideoPlaying()) {
                return;
            }

            countdownTimer = setInterval(function () {
                if (isCurrentVideoPlaying()) {
                    stopAutoSlide();
                    return;
                }

                remainingSeconds--;
                if (remainingSeconds <= 0) {
                    remainingSeconds = COUNTDOWN_TOTAL;
                    nextSlide();
                } else {
                    updateCountdownDisplay();
                }
            }, 1000);
        }

        function restartAutoSlide() {
            remainingSeconds = COUNTDOWN_TOTAL;
            startAutoSlide();
        }

        // Pasang event listener pada setiap video untuk auto-slide control
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

            thumbs.forEach((t, i) => {
                if (i === idx) {
                    t.classList.remove('border-transparent', 'opacity-50');
                    t.classList.add('border-[#EA6D0D]', 'ring-2', 'ring-[#EA6D0D]/40', 'scale-105', 'opacity-100');
                } else {
                    t.classList.remove('border-[#EA6D0D]', 'ring-2', 'ring-[#EA6D0D]/40', 'scale-105', 'opacity-100');
                    t.classList.add('border-transparent', 'opacity-50');
                }
            });

            // Otomatis geser thumbnail agar selalu terlihat di tengah (centered) saat pindah slide
            if (thumbsContainer && thumbs[idx]) {
                const activeThumb = thumbs[idx];
                const thumbRect = activeThumb.getBoundingClientRect();
                const containerRect = thumbsContainer.getBoundingClientRect();
                const currentScroll = thumbsContainer.scrollLeft;
                const targetScrollLeft = currentScroll + (thumbRect.left - containerRect.left) - (containerRect.width / 2) + (thumbRect.width / 2);
                thumbsContainer.scrollTo({
                    left: targetScrollLeft,
                    behavior: 'smooth'
                });
            }

            currentSlide = idx;

            if (counterBadge) {
                counterBadge.textContent = (currentSlide + 1) + ' / ' + totalSlides;
            }

            const activeMedia = mediaData[currentSlide];
            if (labelText && activeMedia) {
                labelText.textContent = activeMedia.label || '';
            }

            // Restart auto slide 7 detik
            restartAutoSlide();
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

        // Drag-to-scroll & wheel scroll pada thumbnail container (desktop)
        if (thumbsContainer) {
            let isDown = false;
            let startX = 0;
            let initialScroll = 0;

            thumbsContainer.addEventListener('mousedown', function (e) {
                isDown = true;
                startX = e.pageX - thumbsContainer.offsetLeft;
                initialScroll = thumbsContainer.scrollLeft;
            });
            thumbsContainer.addEventListener('mouseleave', function () {
                isDown = false;
            });
            thumbsContainer.addEventListener('mouseup', function () {
                isDown = false;
            });
            thumbsContainer.addEventListener('mousemove', function (e) {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - thumbsContainer.offsetLeft;
                const walk = (x - startX) * 1.5;
                thumbsContainer.scrollLeft = initialScroll - walk;
            });

            thumbsContainer.addEventListener('wheel', function (e) {
                if (e.deltaY !== 0 && thumbsContainer.scrollWidth > thumbsContainer.clientWidth) {
                    e.preventDefault();
                    thumbsContainer.scrollLeft += e.deltaY;
                }
            }, { passive: false });
        }

        // Jalankan auto-slide saat halaman siap
        document.addEventListener('DOMContentLoaded', function () {
            startAutoSlide();
        });
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            startAutoSlide();
        }
    })();
    </script>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>