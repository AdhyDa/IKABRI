<section class="py-12 mb-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- ROW 1: Full Width (BPH) -->
            <div onclick="fetchGallery('BPH')" class="group relative col-span-1 md:col-span-3 h-[300px] md:h-[500px] rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] cursor-pointer transition-all duration-300">
                <!-- Content Default (Text) -->
                <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-20">
                    <h3 class="text-2xl md:text-4xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC] px-4">
                        BADAN PENGURUS HARIAN
                    </h3>
                </div>

                <!-- Hover Content (Image + Text) -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    <img src="{{ asset('image/placeholder.jpg') }}" alt="MAKRAB & MUBES" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-3xl md:text-5xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 px-4">
                            MAKRAB & MUBES
                        </h3>
                    </div>
                </div>
            </div>

            <!-- ROW 2: Split 2/3 (Huminfo) & 1/3 (Penalaran) -->
            <!-- Divisi Huminfo (Wider) -->
            <div onclick="fetchGallery('HUMINFO')" class="group relative col-span-1 md:col-span-2 h-[300px] rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] cursor-pointer transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-20">
                    <h3 class="text-2xl md:text-3xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC] px-4">
                        DIVISI HUMINFO
                    </h3>
                </div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    <img src="{{ asset('image/foto10.jpg') }}" alt="Pelatihan Fotografi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-2xl md:text-4xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 px-4">
                            PELATIHAN FOTOGRAFI
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Divisi Penalaran (Narrower) -->
            <div onclick="fetchGallery('PENALARAN')" class="group relative col-span-1 md:col-span-1 h-[300px] rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] cursor-pointer transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-20">
                    <h3 class="text-xl md:text-2xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC] px-4">
                        DIVISI PENALARAN
                    </h3>
                </div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    <img src="{{ asset('image/placeholder.jpg') }}" alt="Pelatihan Esai" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-xl md:text-3xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 px-4">
                            PELATIHAN ESAI
                        </h3>
                    </div>
                </div>
            </div>

            <!-- ROW 3: Equal Split (Bakmin, Pengmas, Organisasi) -->
            <!-- Divisi Bakmin -->
            <div onclick="fetchGallery('BAKMIN')" class="group relative col-span-1 md:col-span-1 h-[300px] rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] cursor-pointer transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-20">
                    <h3 class="text-xl md:text-2xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC] px-4">
                        DIVISI BAKMIN
                    </h3>
                </div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    <img src="{{ asset('image/foto9.jpeg') }}" alt="Ikabri Futsal Cup 9" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-lg md:text-2xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 px-4">
                            IKABRI FUTSAL CUP 9
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Divisi Pengmas -->
            <div onclick="fetchGallery('PENGMAS')" class="group relative col-span-1 md:col-span-1 h-[300px] rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] cursor-pointer transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-20">
                    <h3 class="text-xl md:text-2xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC] px-4">
                        DIVISI PENGMAS
                    </h3>
                </div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    <img src="{{ asset('image/foto5.jpeg') }}" alt="Ikabri Mengajar" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-lg md:text-2xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 px-4">
                            IKABRI MENGAJAR
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Divisi Organisasi -->
            <div onclick="fetchGallery('ORGANISASI')" class="group relative col-span-1 md:col-span-1 h-[300px] rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] cursor-pointer transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-20">
                    <h3 class="text-xl md:text-2xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC] px-4">
                        DIVISI ORGANISASI
                    </h3>
                </div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    <img src="{{ asset('image/foto8.jpeg') }}" alt="Dies Natalis Ikabri" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-lg md:text-2xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 px-4">
                            DIES NATALIS IKABRI 2026
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    async function fetchGallery(division) {
        // Show loading state if needed (optional)
        console.log(`Fetching gallery for ${division}...`);

        try {
            const response = await fetch(`/api/gallery/${division}`);
            if (!response.ok) throw new Error('Network response was not ok');

            const result = await response.json();

            if (result.status === 'success' && result.data.length > 0) {
                // Open Lightbox with fetched data
                openLightbox(result.data);
            } else {
                alert('Belum ada dokumentasi untuk divisi ini.');
            }
        } catch (error) {
            console.error('Error fetching gallery:', error);
            alert('Gagal memuat galeri. Silakan coba lagi.');
        }
    }
</script>
