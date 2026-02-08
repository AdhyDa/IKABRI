<section id="documentation-carousel" class="py-16 bg-main-bg dark:bg-main-bg-dark overflow-hidden transition-colors duration-300 relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-12 relative z-10">
        <h2 class="text-4xl md:text-5xl font-extrabold font-heading text-doc-header dark:text-doc-header-dark mb-4 drop-shadow-sm uppercase">
            Dokumentasi Kegiatan
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 font-body">
            Kilas Balik Momen Berharga
        </p>
    </div>

    <!-- Carousel Container -->
    <div id="doc-carousel-container" class="relative w-full space-y-8 py-10">
        <!-- Row 1: Right to Left -->
        <div class="flex space-x-6 w-max animate-scroll-left">
            <!-- Part 1: Items 1-5 -->
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto1.jpeg') }}" alt="Kegiatan 1" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Makrab dan Mubes 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto2.jpeg') }}" alt="Kegiatan 2" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Makrab dan Mubes 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto3.jpeg') }}" alt="Kegiatan 3" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Buka Bersama 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto4.jpg') }}" alt="Kegiatan 4" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">IKABRI Mengajar 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto5.jpeg') }}" alt="Kegiatan 5" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">IKABRI Mengajar 2025</span>
                </div>
            </div>

            <!-- Part 2: DUPLICATE Items 1-5 (Required for loop) -->
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto1.jpeg') }}" alt="Kegiatan 1" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Makrab dan Mubes 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto2.jpeg') }}" alt="Kegiatan 2" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Makrab dan Mubes 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto3.jpeg') }}" alt="Kegiatan 3" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Buka Bersama 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto4.jpg') }}" alt="Kegiatan 4" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">IKABRI Mengajar 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto5.jpeg') }}" alt="Kegiatan 5" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">IKABRI Mengajar 2025</span>
                </div>
            </div>
        </div>

        <!-- Row 2: Left to Right -->
        <div class="flex space-x-6 w-max animate-scroll-right pt-15">
            <!-- Part 1: Items 6-10 -->
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto6.jpeg') }}" alt="Kegiatan 6" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Sambut Maba 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto7.jpeg') }}" alt="Kegiatan 7" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Quality Time IKABRI</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto8.jpeg') }}" alt="Kegiatan 8" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Dies Natalis 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto9.jpeg') }}" alt="Kegiatan 9" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">IKABRI Futsal Cup 9</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto10.jpg') }}" alt="Kegiatan 10" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Pelatihan Fotografi</span>
                </div>
            </div>

            <!-- Part 2: DUPLICATE Items 6-10 (Required for loop) -->
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto6.jpeg') }}" alt="Kegiatan 6" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Sambut Maba 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto7.jpeg') }}" alt="Kegiatan 7" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Quality Time IKABRI</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto8.jpeg') }}" alt="Kegiatan 8" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Dies Natalis 2025</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto9.jpeg') }}" alt="Kegiatan 9" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">IKABRI Futsal Cup 9</span>
                </div>
            </div>
            <div class="relative group cursor-pointer transition-transform duration-300 hover:scale-105 carousel-item" onclick="toggleFocus(this)">
                <div class="w-80 h-56 rounded-2xl overflow-hidden shadow-[0_10px_30px_-5px_rgba(0,0,0,0.3)] dark:shadow-[0_10px_30px_-5px_rgba(124,58,237,0.3)]">
                    <img src="{{ asset('image/foto10.jpg') }}" alt="Kegiatan 10" class="w-full h-full object-cover transition-all duration-300" loading="lazy">
                </div>
                <div class="carousel-label absolute -bottom-12 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 whitespace-nowrap z-50 pointer-events-none">
                    <span class="text-sm font-semibold text-primary-text dark:text-white">Pelatihan Fotografi</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Simple inline script for this component interaction
    function toggleFocus(element) {
        const container = document.getElementById('doc-carousel-container');

        const isActive = element.classList.contains('active');

        // Reset all
        document.querySelectorAll('.carousel-item').forEach(item => {
            item.classList.remove('active');
        });
        container.classList.remove('is-paused');

        if (!isActive) {
            // Activate clicked
            element.classList.add('active');
            container.classList.add('is-paused');
        }
    }

    // Add click listener to document to close focus when clicking outside
    document.addEventListener('click', (event) => {
        const isClickInside = event.target.closest('.carousel-item');
        if (!isClickInside) {
            const container = document.getElementById('doc-carousel-container');
            document.querySelectorAll('.carousel-item').forEach(item => {
                item.classList.remove('active');
            });
            if(container) container.classList.remove('is-paused');
        }
    });
</script>
