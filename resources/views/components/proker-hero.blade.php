<section class="py-12 mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- HEADER: Outside Background Layer -->
        <h2 class="text-3xl md:text-3xl font-bold text-[#0F172A] dark:text-[#F8FAFC] mb-6 text-left font-heading">
            Ongoing Event
        </h2>

        <!-- WRAPPER for Overlap Layout -->
        <div class="relative mb-24"> <!-- Added margin bottom for the overlapping box space if needed -->
            <!-- 1. BACKGROUND LAYER CONTAINER -->
            <div class="relative w-full rounded-[30px] overflow-hidden min-h-[850px] flex items-center z-10">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('image/bg-ifc9.JPG') }}" alt="Background" class="w-full h-full object-cover blur-[2.5px]">
                </div>

                <!-- Overlay -->
                <div class="absolute inset-0 z-10 bg-[#1A052C] opacity-75"></div>

                <div class="relative z-20 w-full p-8 lg:p-16 flex flex-col md:flex-row gap-8 md:gap-12 items-center pb-40">
                    <!-- Left: Poster Image -->
                    <div class="flex-shrink-0 w-full md:w-[491px] lg:w-[491px] -mt-16">
                        <img src="{{ asset('image/pamflet-ifc9.png') }}" alt="Event Poster" class="w-full h-auto rounded-[20px] shadow-2xl">
                    </div>

                    <!-- Right: Title Only -->
                    <div class="flex-grow text-white">
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold font-proker mb-4 leading-tight">
                            IKABRI Futsal Cup 9:
                            <br>
                            "Solidaritas Bersinar, Sportivitas Berkibar, Semangat Juang Berkobar"
                        </h2>
                    </div>
                </div>
            </div>

            <!-- 2. DESCRIPTION BOX: Overlapping Bottom Edge -->
            <div class="relative z-30 -mt-16 w-[90%] md:w-[85%] mx-auto">
                <div class="w-full rounded-[20px] p-6 lg:p-8 flex flex-col md:flex-row gap-6 md:gap-0 justify-between items-start md:items-center
                            bg-[#7C3AED] dark:bg-[#431E82] text-white shadow-xl backdrop-blur-sm transition-colors duration-300">
                    <!-- Col 1: Kategori -->
                    <div class="flex-1">
                        <h4 class="text-white/80 text-sm mb-1">Kategori</h4>
                        <p class="font-bold text-lg leading-tight uppercase">SMA/SMK/MA Sederajat</p>
                    </div>

                    <!-- Separator -->
                    <div class="hidden md:block w-px h-12 bg-white/30 mx-6"></div>

                    <!-- Col 2: Lokasi -->
                    <div class="flex-1">
                        <h4 class="text-white/80 text-sm mb-1">Lokasi</h4>
                        <p class="font-bold text-lg leading-tight">GOR Jayabaya Kediri</p>
                    </div>

                        <!-- Separator -->
                        <div class="hidden md:block w-px h-12 bg-white/30 mx-6"></div>

                    <!-- Col 3: Tanggal -->
                    <div class="flex-1">
                        <h4 class="text-white/80 text-sm mb-1">Tanggal Pelaksanaan</h4>
                        <p class="font-bold text-lg leading-tight">10 – 11 Januari 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
