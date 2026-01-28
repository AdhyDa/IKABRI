<section id="update-agenda" class="py-16 bg-[var(--color-ua-section-bg)] dark:bg-[var(--color-ua-section-bg-dark)] transition-colors duration-300 relative overflow-hidden h-[800px] flex flex-col">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full flex-shrink-0">
        <!-- Header -->
        <div class="flex justify-between items-end mb-8 md:mb-12">
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold font-heading text-white mb-2 uppercase drop-shadow-sm">
                    Update & Agenda
                </h2>
                <p class="text-lg text-white/90 font-body">
                    Jangan Lewatkan Keseruan Kami
                </p>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex space-x-4">
                <button id="ua-prev" class="w-12 h-12 rounded-full border-2 border-white text-white flex items-center justify-center hover:bg-white hover:text-[var(--color-ua-section-bg)] transition-colors duration-300 cursor-pointer z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </button>
                <button id="ua-next" class="w-12 h-12 rounded-full border-2 border-white text-white flex items-center justify-center hover:bg-white hover:text-[var(--color-ua-section-bg)] transition-colors duration-300 cursor-pointer z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Carousel Container -->
    <div class="relative w-full flex-grow flex items-center justify-center perspective-[1000px]">
        <div id="ua-track" class="relative w-full max-w-4xl h-[450px] md:h-[500px] flex items-center justify-center">
            <!-- Card 1 -->
            <div class="ua-card absolute w-[90%] md:w-full h-full transition-all duration-500 ease-out origin-center" data-index="0">
                <div class="bg-[var(--color-ua-card-bg)] dark:bg-[var(--color-ua-card-bg-dark)] rounded-[30px] p-6 md:p-8 flex flex-col md:flex-row gap-6 shadow-2xl h-full border-4 border-transparent">
                    <div class="w-full md:w-5/12 rounded-2xl overflow-hidden h-48 md:h-auto border border-gray-200 dark:border-gray-700 relative">
                        <img src="{{ asset('image/poster1.jpg') }}" onerror="this.src='https://picsum.photos/400/600?random=1'" alt="Poster" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col items-start text-left">
                        <div class="flex justify-between w-full items-start mb-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-[var(--color-ua-tag-bg)] dark:bg-[var(--color-ua-tag-bg-dark)] text-[var(--color-ua-tag-text)]">Event</span>
                            <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">10-11 Januari 2026</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold font-heading text-[var(--color-ua-text)] dark:text-[var(--color-ua-text-dark)] mb-4 leading-tight">
                            IKABRI Futsal Cup 9: Solidaritas Bersinar
                        </h3>
                        <div class="text-sm text-gray-600 dark:text-[var(--color-ua-text-dark)] font-body mb-6 space-y-2 flex-grow">
                            <p><span class="font-semibold">Timeline:</span> 27 Nov - 1 Jan 2026</p>
                            <p><span class="font-semibold">Syarat:</span> Pelajar SMA/SMK/MA se-Karesidenan Kediri, Foto 3x4, dll.</p>
                        </div>
                        <a href="#" class="inline-flex items-center justify-center w-full md:w-auto px-6 py-3 rounded-xl bg-[var(--color-accent)] dark:bg-[var(--color-ua-inactive)] text-white font-bold transition-transform hover:scale-105 shadow-lg">
                            Baca Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="ua-card absolute w-[90%] md:w-full h-full transition-all duration-500 ease-out origin-center" data-index="1">
                <div class="bg-[var(--color-ua-card-bg)] dark:bg-[var(--color-ua-card-bg-dark)] rounded-[30px] p-6 md:p-8 flex flex-col md:flex-row gap-6 shadow-2xl h-full border-4 border-transparent">
                    <div class="w-full md:w-5/12 rounded-2xl overflow-hidden h-48 md:h-auto border border-gray-200 dark:border-gray-700 relative">
                        <img src="{{ asset('image/poster2.jpg') }}" onerror="this.src='https://picsum.photos/400/600?random=2'" alt="Poster" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col items-start text-left">
                        <div class="flex justify-between w-full items-start mb-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-[var(--color-ua-tag-bg)] dark:bg-[var(--color-ua-tag-bg-dark)] text-[var(--color-ua-tag-text)]">Agenda</span>
                            <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">14 Februari 2026</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold font-heading text-[var(--color-ua-text)] dark:text-[var(--color-ua-text-dark)] mb-4 leading-tight">
                            Dialog Interaktif: Membangun Generasi Emas
                        </h3>
                        <div class="text-sm text-gray-600 dark:text-[var(--color-ua-text-dark)] font-body mb-6 space-y-2 flex-grow">
                            <p><span class="font-semibold">Lokasi:</span> Gedung H3 UM</p>
                            <p>Diskusi terbuka mengenai peran mahasiswa dalam pembangunan daerah.</p>
                        </div>
                        <a href="#" class="inline-flex items-center justify-center w-full md:w-auto px-6 py-3 rounded-xl bg-[var(--color-accent)] dark:bg-[var(--color-ua-inactive)] text-white font-bold transition-transform hover:scale-105 shadow-lg">
                            Baca Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="ua-card absolute w-[90%] md:w-full h-full transition-all duration-500 ease-out origin-center" data-index="2">
                <div class="bg-[var(--color-ua-card-bg)] dark:bg-[var(--color-ua-card-bg-dark)] rounded-[30px] p-6 md:p-8 flex flex-col md:flex-row gap-6 shadow-2xl h-full border-4 border-transparent">
                    <div class="w-full md:w-5/12 rounded-2xl overflow-hidden h-48 md:h-auto border border-gray-200 dark:border-gray-700 relative">
                        <img src="{{ asset('image/poster3.jpg') }}" onerror="this.src='https://picsum.photos/400/600?random=3'" alt="Poster" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col items-start text-left">
                        <div class="flex justify-between w-full items-start mb-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-[var(--color-ua-tag-bg)] dark:bg-[var(--color-ua-tag-bg-dark)] text-[var(--color-ua-tag-text)]">Update</span>
                            <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">20 Maret 2026</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold font-heading text-[var(--color-ua-text)] dark:text-[var(--color-ua-text-dark)] mb-4 leading-tight">
                            Open Recruitment Anggota Baru IKABRI
                        </h3>
                        <div class="text-sm text-gray-600 dark:text-[var(--color-ua-text-dark)] font-body mb-6 space-y-2 flex-grow">
                            <p><span class="font-semibold">Deadline:</span> 30 Maret 2026</p>
                            <p>Mari bergabung menjadi bagian dari keluarga besar IKABRI UM.</p>
                        </div>
                        <a href="#" class="inline-flex items-center justify-center w-full md:w-auto px-6 py-3 rounded-xl bg-[var(--color-accent)] dark:bg-[var(--color-ua-inactive)] text-white font-bold transition-transform hover:scale-105 shadow-lg">
                            Baca Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* 3D Perspective Utilities */
    .perspective-[1000px] { perspective: 1000px; }

    /* Specific classes for carousel states */
    .ua-card-active {
        z-index: 30;
        opacity: 1;
        transform: translateX(0) scale(1) translateZ(0); /* Center, full size */
    }

    .ua-card-left {
        z-index: 10;
        opacity: 0.6;
        transform: translateX(-30%) scale(0.85) translateZ(-50px); /* Move left, shrink, push back */
        filter: brightness(0.8);
    }

    .ua-card-right {
        z-index: 10;
        opacity: 0.6;
        transform: translateX(30%) scale(0.85) translateZ(-50px); /* Move right, shrink, push back */
        filter: brightness(0.8);
    }

    /* Mobile tweaks */
    @media (max-width: 768px) {
        .ua-card-left { transform: translateX(-8%) scale(0.9) translateZ(-50px); opacity: 0; pointer-events: none; }
        .ua-card-right { transform: translateX(8%) scale(0.9) translateZ(-50px); opacity: 0; pointer-events: none; }
        /* On mobile, usually only show active */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cards = Array.from(document.querySelectorAll('.ua-card'));
        const totalCards = cards.length;
        let activeIndex = 0; // Start with first card centered

        function updateCarousel() {
            cards.forEach((card, index) => {
                // Reset classes
                card.classList.remove('ua-card-active', 'ua-card-left', 'ua-card-right');
                card.style.opacity = '';
                card.style.zIndex = '';
                card.style.transform = '';

                // Calculate position relative to activeIndex (Circular)
                // We want 3 positions: Active (0), Left (-1), Right (+1)

                // Find "distance" in circular array
                let relIndex = (index - activeIndex + totalCards) % totalCards;
                // relIndex 0 = Active
                // relIndex 1 = Right (Next)
                // relIndex 2 = Left (Prev) if total is 3

                // Use explicit logic for 3 cards
                if (relIndex === 0) {
                    card.classList.add('ua-card-active');
                } else if (relIndex === 1) {
                    card.classList.add('ua-card-right');
                } else if (relIndex === totalCards - 1) { // Equivalent to -1
                    card.classList.add('ua-card-left');
                } else {
                    // For >3 cards, hide others
                    card.style.opacity = '0';
                    card.style.zIndex = '0';
                    card.style.transform = 'scale(0.8)';
                }
            });
        }

        // Initial Draw
        updateCarousel();

        // Controls
        document.getElementById('ua-next').addEventListener('click', () => {
            activeIndex = (activeIndex + 1) % totalCards;
            updateCarousel();
        });

        document.getElementById('ua-prev').addEventListener('click', () => {
            activeIndex = (activeIndex - 1 + totalCards) % totalCards;
            updateCarousel();
        });
    });
</script>
