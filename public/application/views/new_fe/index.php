<?php $this->load->view('new_fe/components/head', ['title' => 'BAPENDA - Beranda']); ?>

<body class="min-h-screen min-w-screen overflow-x-hidden relative bg-white">
    <?php $this->load->view('new_fe/components/beranda_sidebar', ['active_menu' => 'beranda', 'navbar_bg' => 'blue']); ?>

    <!-- Section Hero / Beranda -->
    <div class="relative min-h-screen w-full bg-cover bg-center overflow-hidden max-md:bg-center" style="background-image: url('<?= base_url('assets/images/new-bg.webp') ?>');">
        <!-- Layer overlay biru -->
        <div class="absolute inset-0 bg-(--blue-color)/75 z-0"></div>

        <!-- Ornamen Sigotaka di kiri dan kanan background -->
        <img src="<?= base_url('assets/images/sigotaka_left.svg') ?>" alt="" class="absolute left-0 bottom-[3vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-30 max-md:hidden">
        <img src="<?= base_url('assets/images/sigotaka_right.svg') ?>" alt="" class="absolute right-0 bottom-[3vw] h-[65vh] w-auto pointer-events-none select-none z-[1] opacity-30 max-md:h-[157.692vw] max-md:bottom-[94px]">

        <!-- Konten Header & Body -->
        <div class="relative z-10 min-h-screen flex flex-col p-[1.556vw] max-md:p-[2.051vw]">
            <div class="flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-[4.103vw]">
                <img src="<?= base_url('assets/images/bapenda-white.svg') ?>" alt="Logo Bapenda" class="h-[4.229vw] w-auto object-contain max-md:w-[35vw] max-md:h-auto max-md:ml-[1.952vw] max-md:mt-[1.595vw]">

                <h1 class="text-[4.67vw] max-md:text-[9.231vw] max-md:w-full text-[#EA6D0D] uppercase krona-one leading-none text-right">
                    Beranda
                </h1>
            </div>

            <div class="flex-1 flex items-center w-full">
                <div class="w-full px-[10.992vw] max-md:px-0">
                    <h2 class="text-(--yellow-color) text-[2.53vw] geologica leading-none max-md:text-[8.205vw] max-md:text-center">
                        Pembayaran Pajak Daerah Anda untuk Pembangunan Purwakarta Istimewa
                    </h2>
                    <p class="text-[0.973vw] text-white mt-[0.97vw] open-sans max-md:text-[3.59vw] max-md:mt-[4.103vw] max-md:text-center">
                        Pengelola Pendapatan yang Transparan
                    </p>

                    <div class="w-fit mx-auto grid grid-cols-3 max-md:grid-cols-1 gap-[1.17vw] max-md:w-[60vw] max-md:gap-[4.103vw] mt-[2vw] max-md:mt-[8.205vw]">
                        <!-- Menu 1 -->
                        <div class="relative border border-white flex items-center rounded-xs justify-center bg-[#EA6D0D] p-[0.49vw] pl-[2.5vw] text-white open-sans text-[0.78vw] max-md:p-[1.538vw] max-md:pl-[9vw] max-md:text-[4.103vw]">
                            <img src="<?= base_url('assets/images/check-list.svg') ?>" alt="" class="absolute left-0 h-full w-[1.8vw] max-md:w-[7vw] shrink-0">
                            <span>PBB-P2</span>
                        </div>

                        <!-- Menu 2 -->
                        <div class="relative border border-white flex items-center rounded-xs justify-center bg-[#EA6D0D] p-[0.49vw] pl-[2.5vw] text-white open-sans text-[0.78vw] max-md:p-[1.538vw] max-md:pl-[9vw] max-md:text-[4.103vw]">
                            <img src="<?= base_url('assets/images/check-list.svg') ?>" alt="" class="absolute left-0 h-full w-[1.8vw] max-md:w-[7vw] shrink-0">
                            <span>BPHTB</span>
                        </div>

                        <!-- Menu 3 -->
                        <div class="relative border border-white flex items-center rounded-xs justify-center bg-[#EA6D0D] p-[0.49vw] pl-[2.5vw] text-white open-sans text-[0.78vw] max-md:p-[1.538vw] max-md:pl-[9vw] max-md:text-[4.103vw]">
                            <img src="<?= base_url('assets/images/check-list.svg') ?>" alt="" class="absolute left-0 h-full w-[1.8vw] max-md:w-[7vw] shrink-0">
                            <span>PAD</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <a
                href="http://mapagbumi.purwakartakab.go.id"
                target="_blank"
                rel="noopener noreferrer"
                class="block"
            >
                <div class="flex items-center justify-end max-md:hidden">
                    <img
                        src="<?= base_url('assets/images/bapendalogo.svg') ?>"
                        alt="Logo Bapenda"
                        class="h-[7vw] w-auto object-contain max-md:h-[40vw] max-md:mx-auto">              
                </div>
            </a> -->

            <footer>
                <div class="w-full text-white text-[0.58vw] max-md:text-[2.564vw] open-sans max-md:pb-[2.564vw]">
                    <div class="text-center">
                        Copyright © 2026 Badan Pendapatan Daerah Kabupaten Purwakarta.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Floating Re-open Button -->
    <button
        type="button"
        id="reopen-modal-btn"
        onclick="openBerandaModal()"
        class="fixed bottom-6 right-6 z-40 bg-[#EA6D0D] hover:bg-[#d05c08] text-white px-3.5 py-2 md:px-4 md:py-2.5 rounded-full flex items-center gap-2 text-xs md:text-sm font-medium border border-white/30 transition-all active:scale-95 cursor-pointer backdrop-blur-sm"
        title="Lihat Galeri & Video"
    >
        <svg class="size-4 md:size-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <span class="geologica">Galeri & Video</span>
    </button>

    <!-- Modal Popup / Carousel Foto & Video -->
    <?php
    $modal_media = [];
    if (!empty($ShowDataCarousel)) {
        foreach ($ShowDataCarousel as $item) {
            $is_video = ($item['tipe'] === 'video');
            $file_url = base_url('loginwebsite/uploads/carousel/' . $item['file_media']);

            $modal_media[] = [
                'type'  => $item['tipe'],
                'src'   => $file_url,
                'thumb' => $is_video ? '' : $file_url,
                'label' => $item['judul'],
            ];
        }
    }

    // Fallback ke media default jika belum ada data di database
    if (empty($modal_media)) {
        $modal_media = [
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel1.webp'),
                'thumb' => base_url('assets/images/bpd-carousel1.webp'),
                'label' => 'Foto 1',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel2.webp'),
                'thumb' => base_url('assets/images/bpd-carousel2.webp'),
                'label' => 'Foto 2',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel3.webp'),
                'thumb' => base_url('assets/images/bpd-carousel3.webp'),
                'label' => 'Foto 3',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel4.webp'),
                'thumb' => base_url('assets/images/bpd-carousel4.webp'),
                'label' => 'Foto 4',
            ],
            [
                'type'  => 'image',
                'src'   => base_url('assets/images/bpd-carousel5.webp'),
                'thumb' => base_url('assets/images/bpd-carousel5.webp'),
                'label' => 'Foto 5',
            ],
            [
                'type'  => 'video',
                'src'   => base_url('assets/images/bpd-vidcarousel.mp4'),
                'thumb' => '',
                'label' => 'Video Kegiatan Bapenda',
            ],
        ];
    }
    $next_initial = $modal_media[1] ?? $modal_media[0];
    ?>
    <div
        id="beranda-modal"
        class="fixed inset-0 z-[999999] flex items-center justify-center p-2 md:p-6 bg-black/30 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 select-none"
        onclick="if(event.target === this) closeBerandaModal()"
        aria-modal="true"
        role="dialog"
    >
        <!-- Modal Card -->
        <div
            id="beranda-modal-card"
            class="relative w-full max-w-4xl max-h-[95vh] bg-[#1a2035]/95 border border-white/20 rounded-2xl shadow-[0_25px_60px_-15px_rgba(0,0,0,0.8)] overflow-hidden flex flex-col transform scale-95 transition-transform duration-300"
            onclick="event.stopPropagation()"
        >
            <div class="flex items-center justify-between px-3 md:px-4 py-2.5 border-b border-white/10 bg-white/5">
                <div class="flex items-center gap-2">
                    <span class="inline-block size-2.5 rounded-full bg-[#EA6D0D] animate-pulse"></span>
                    <span id="modal-counter-badge" class="text-white text-xs md:text-sm font-semibold tracking-wide geologica">
                        1 / <?= count($modal_media) ?>
                    </span>
                    <span class="text-white/40 text-xs">|</span>
                    <span id="modal-label" class="text-white/80 text-xs md:text-sm open-sans font-light truncate max-w-[180px] md:max-w-none">
                        <?= htmlspecialchars($modal_media[0]['label']) ?>
                    </span>
                </div>

                <button
                    type="button"
                    onclick="closeBerandaModal()"
                    class="text-white/80 hover:text-white bg-white/10 hover:bg-red-600/90 size-8 md:size-9 rounded-full flex items-center justify-center transition-all hover:scale-110 active:scale-95 cursor-pointer border border-white/15"
                    aria-label="Tutup Modal"
                >
                    <svg class="size-4 md:size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div id="modal-stage" class="relative w-full h-[48vh] md:h-[62vh] flex items-center justify-center bg-black/60 overflow-hidden">
                <?php foreach ($modal_media as $idx => $m): ?>
                    <div
                        class="modal-slide absolute inset-0 flex items-center justify-center p-2 md:p-4 transition-opacity duration-300 <?= $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 pointer-events-none z-0' ?>"
                        data-index="<?= $idx ?>"
                        data-label="<?= htmlspecialchars($m['label']) ?>"
                        data-type="<?= $m['type'] ?>"
                    >
                        <?php if ($m['type'] === 'image'): ?>
                            <img
                                src="<?= $m['src'] ?>"
                                alt="<?= htmlspecialchars($m['label']) ?>"
                                class="max-h-full max-w-full w-auto h-auto object-contain rounded-lg shadow-lg select-none"
                                loading="lazy"
                            />
                        <?php else: ?>
                            <video
                                controls
                                playsinline
                                preload="metadata"
                                class="max-h-full max-w-full w-auto h-auto object-contain rounded-lg shadow-lg bg-black"
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
                    class="absolute left-2 md:left-4 top-1/2 -translate-y-1/2 z-20 bg-black/60 hover:bg-[#EA6D0D] text-white size-8 md:size-11 rounded-full border border-white/20 transition-all hover:scale-110 active:scale-95 shadow-xl flex items-center justify-center cursor-pointer backdrop-blur-sm"
                    aria-label="Sebelumnya"
                >
                    <svg class="size-4 md:size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <button
                    type="button"
                    onclick="nextSlide()"
                    class="absolute right-2 md:right-4 top-1/2 -translate-y-1/2 z-20 bg-black/60 hover:bg-[#EA6D0D] text-white size-8 md:size-11 rounded-full border border-white/20 transition-all hover:scale-110 active:scale-95 shadow-xl flex items-center justify-center cursor-pointer backdrop-blur-sm"
                    aria-label="Selanjutnya"
                >
                    <svg class="size-4 md:size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <div class="w-full px-3 md:px-4 py-2.5 bg-[#0f1424] border-t border-white/10 flex flex-wrap md:flex-nowrap items-center justify-between gap-3">
                <div
                    id="next-preview-card"
                    onclick="nextSlide()"
                    class="flex items-center gap-2.5 bg-white/5 hover:bg-white/10 border border-white/15 hover:border-[#EA6D0D] p-1.5 pr-3 rounded-xl cursor-pointer transition-all duration-200 group shrink-0"
                    title="Klik untuk membuka slide berikutnya"
                >
                    <div class="relative w-12 h-8 md:w-14 md:h-9 rounded-lg overflow-hidden bg-black shrink-0 border border-white/10 flex items-center justify-center">
                        <img
                            id="next-preview-thumb"
                            src="<?= htmlspecialchars($next_initial['thumb']) ?>"
                            alt="Preview Berikutnya"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 select-none <?= $next_initial['type'] === 'video' ? 'hidden' : '' ?>"
                        />
                        <div
                            id="next-preview-video-badge"
                            class="absolute inset-0 bg-[#0c101d] items-center justify-center <?= $next_initial['type'] === 'video' ? 'flex' : 'hidden' ?>"
                        >
                            <svg class="size-3.5 md:size-4 text-(--yellow-color) fill-(--yellow-color)" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-[9px] md:text-[10px] text-(--yellow-color) font-bold uppercase tracking-wider geologica flex items-center gap-1">
                            <span>Berikutnya</span>
                            <svg class="size-2.5 text-(--yellow-color) transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                        <span id="next-preview-title" class="text-white text-xs md:text-sm font-medium truncate max-w-[110px] md:max-w-[180px] open-sans">
                            <?= htmlspecialchars($next_initial['label']) ?>
                        </span>
                    </div>
                </div>

                <div class="flex items-center gap-1.5 md:gap-2 overflow-x-auto py-1 scrollbar-none max-w-full">
                    <?php foreach ($modal_media as $idx => $m): ?>
                        <button
                            type="button"
                            onclick="goToSlide(<?= $idx ?>)"
                            class="modal-thumb-btn relative rounded-lg overflow-hidden border-2 transition-all duration-300 shrink-0 cursor-pointer <?= $idx === 0 ? 'border-[#EA6D0D] ring-2 ring-[#EA6D0D]/40 scale-105 opacity-100' : 'border-transparent opacity-50 hover:opacity-100 hover:border-white/30' ?>"
                            data-thumb-index="<?= $idx ?>"
                            title="<?= htmlspecialchars($m['label']) ?>"
                        >
                            <?php if ($m['type'] === 'video'): ?>
                                <div class="w-10 h-7 md:w-14 md:h-9 bg-[#0c101d] flex items-center justify-center border border-white/10">
                                    <svg class="size-3 md:size-3.5 text-(--yellow-color) fill-(--yellow-color)" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            <?php else: ?>
                                <img src="<?= $m['thumb'] ?>" alt="<?= htmlspecialchars($m['label']) ?>" class="w-10 h-7 md:w-14 md:h-9 object-cover select-none">
                            <?php endif; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script>
    (function () {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.modal-slide');
        const thumbs = document.querySelectorAll('.modal-thumb-btn');
        const modal = document.getElementById('beranda-modal');
        const card = document.getElementById('beranda-modal-card');
        const counterBadge = document.getElementById('modal-counter-badge');
        const labelText = document.getElementById('modal-label');
        const nextPreviewThumb = document.getElementById('next-preview-thumb');
        const nextPreviewTitle = document.getElementById('next-preview-title');
        const nextPreviewVideoBadge = document.getElementById('next-preview-video-badge');
        const totalSlides = slides.length;

        const mediaData = <?= json_encode($modal_media) ?>;

        let autoSlideTimer = null;
        const AUTO_SLIDE_DELAY = 7000;

        function isCurrentVideoPlaying() {
            const activeSlide = slides[currentSlide];
            if (!activeSlide) return false;
            const vid = activeSlide.querySelector('video');
            return vid && !vid.paused && !vid.ended;
        }

        function stopAutoSlide() {
            if (autoSlideTimer) {
                clearTimeout(autoSlideTimer);
                autoSlideTimer = null;
            }
        }

        function startAutoSlide() {
            stopAutoSlide();
            if (totalSlides <= 1) return;
            if (!modal || modal.classList.contains('pointer-events-none')) return;

            // Jika video pada slide aktif sedang di-play, jangan jalankan auto slide
            if (isCurrentVideoPlaying()) {
                return;
            }

            autoSlideTimer = setTimeout(function () {
                if (!modal || modal.classList.contains('pointer-events-none')) return;
                if (!isCurrentVideoPlaying()) {
                    nextSlide();
                }
            }, AUTO_SLIDE_DELAY);
        }

        function restartAutoSlide() {
            stopAutoSlide();
            startAutoSlide();
        }

        // Pasang event listener pada setiap video
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

        window.openBerandaModal = function () {
            if (!modal || !card) return;
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
            document.body.style.overflow = 'hidden';
            restartAutoSlide();
        };

        window.closeBerandaModal = function () {
            if (!modal || !card) return;
            stopAutoSlide();
            pauseAllVideos();
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-100', 'pointer-events-auto');
            card.classList.add('scale-95');
            card.classList.remove('scale-100');
            document.body.style.overflow = '';
        };

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
                    t.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                } else {
                    t.classList.remove('border-[#EA6D0D]', 'ring-2', 'ring-[#EA6D0D]/40', 'scale-105', 'opacity-100');
                    t.classList.add('border-transparent', 'opacity-50');
                }
            });

            currentSlide = idx;

            if (counterBadge) {
                counterBadge.textContent = (currentSlide + 1) + ' / ' + totalSlides;
            }

            const activeMedia = mediaData[currentSlide];
            if (labelText && activeMedia) {
                labelText.textContent = activeMedia.label || '';
            }

            // Update preview media berikutnya
            const nextIdx = (currentSlide + 1) % totalSlides;
            const nextMedia = mediaData[nextIdx];
            if (nextMedia) {
                if (nextPreviewTitle) {
                    nextPreviewTitle.textContent = nextMedia.label || '';
                }
                if (nextMedia.type === 'video') {
                    if (nextPreviewThumb) nextPreviewThumb.classList.add('hidden');
                    if (nextPreviewVideoBadge) {
                        nextPreviewVideoBadge.classList.remove('hidden');
                        nextPreviewVideoBadge.classList.add('flex');
                    }
                } else {
                    if (nextPreviewThumb) {
                        nextPreviewThumb.src = nextMedia.thumb;
                        nextPreviewThumb.classList.remove('hidden');
                    }
                    if (nextPreviewVideoBadge) {
                        nextPreviewVideoBadge.classList.remove('flex');
                        nextPreviewVideoBadge.classList.add('hidden');
                    }
                }
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
            if (!modal || modal.classList.contains('pointer-events-none')) return;
            if (e.key === 'Escape') closeBerandaModal();
            if (e.key === 'ArrowRight') nextSlide();
            if (e.key === 'ArrowLeft') prevSlide();
        });

        // Touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;
        const stage = document.getElementById('modal-stage');
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

        // Auto open on page load
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                openBerandaModal();
            }, 600);
        });
    })();
    </script>

<?php $this->load->view('new_fe/components/footer_scripts'); ?>