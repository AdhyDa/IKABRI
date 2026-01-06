<section class="py-12 md:py-20 bg-main-bg dark:bg-main-bg-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Outside Heading -->
        <h1 class="text-3xl md:text-5xl font-extrabold font-heading text-primary-text dark:text-primary-text-dark mb-8 md:mb-12 leading-tight">
            Mengenal Lebih Dekat Rumah Kedua<br class="hidden md:block" />
            Cah Kediri di Malang
        </h1>
        <div class="relative w-full rounded-[40px] overflow-hidden p-6 md:p-12 flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <div class="absolute inset-0 bg-gradient-to-b from-[#7C3AED]/50 to-[#472187]/50 rounded-[40px]"></div>

            <!-- Content Container (Relative z-10) -->
            <div class="relative z-10 w-full md:w-1/2 flex flex-col justify-center text-left">
                <div class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold font-heading text-[#0F172A] dark:text-[#F8FAFC] mb-2">
                        IKABRI UM
                    </h2>
                    <h3 class="text-xl md:text-2xl font-semibold font-heading text-[#0F172A] dark:text-[#F8FAFC]">
                        (IKATAN BOCAH KEDIRI UM)
                    </h3>
                </div>

                <div class="space-y-4 font-body text-[#0F172A] dark:text-[#F8FAFC] leading-relaxed">
                    <p class="opacity-70 dark:opacity-100">
                        IKABRI UM adalah singkatan dari Ikatan Bocah Kediri Universitas Negeri Malang yaitu Organisasi daerah yang menampung Mahasiswa dari Kediri yang sedang menempuh pendidikan kuliah di Universitas Negeri Malang.
                    </p>
                    <p class="opacity-70 dark:opacity-100">
                        IKABRI UM berdiri sejak tanggal 3 November 2008 yang di prakarsai oleh Mifdal Zusron Alfaqi. IKABRI UM memiliki jargon "We Are Family".
                    </p>
                </div>

                <!-- Down Arrow Button -->
                <div class="mt-8">
                    <!-- Button on absolute bottom-left or simply below text as per "tombol panah di kiri bawah" -->
                    <button class="w-16 h-16 rounded-full flex items-center justify-center transition-transform hover:scale-110 shadow-lg bg-[#7C3AED] dark:bg-[#5A28AF] text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Image Container (Right Side) -->
            <div class="relative z-10 w-full md:w-1/2 flex items-center justify-center">
                <img src="{{ asset('image/placeholder.jpg') }}" alt="IKABRI Group" class="w-full max-w-lg object-contain drop-shadow-2xl" onerror="this.src='https://via.placeholder.com/500x300'">
            </div>
        </div>
    </div>

</section>
