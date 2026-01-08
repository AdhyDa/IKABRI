<section class="relative bg-[#F4F1FF] dark:bg-main-bg-dark transition-colors duration-300 py-12 md:py-20 lg:py-5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <!-- Main Outside Heading -->
        <h1 class="text-3xl md:text-5xl font-extrabold font-heading text-primary-text dark:text-primary-text-dark leading-[2.3]">
            Mengenal Lebih Dekat Rumah Kedua<br class="hidden md:block" />
            Cah Kediri di Malang
        </h1>
    </div>

    <!-- Added negative margin to pull the vector up so the header sits in the top-left cutout -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 md:-mt-16 lg:-mt-34">
        <div class="relative w-full md:h-[722px]">
            <!-- SVG Background Layer -->
            <div class="absolute inset-0 w-full h-full flex justify-center lg:justify-end pointer-events-none">
                <svg class="w-full h-full max-w-[1371px] lg:w-auto object-cover lg:object-contain" viewBox="0 0 1371 722" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M1321 0C1348.61 2.03264e-05 1371 22.3858 1371 50V672C1371 699.614 1348.61 722 1321 722H220C192.386 722 170 699.614 170 672V605C170 577.386 147.614 555 120 555H50C22.3858 555 0 532.614 0 505V191.856C0 164.242 22.3858 141.856 50 141.856H560C587.614 141.856 610 119.471 610 91.8564V50C610 22.3858 632.386 0 660 0H1321Z" fill="url(#paint0_linear_115_56)" fill-opacity="0.5"/>
                    <defs>
                        <linearGradient id="paint0_linear_115_56" x1="685.5" y1="-3.27396e-08" x2="686" y2="624" gradientUnits="userSpaceOnUse">
                            <stop offset="0.153846" stop-color="#7C3AED"/>
                            <stop offset="1" stop-color="#472187"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <!-- Content Grid Layer -->
            <div class="relative z-10 w-full h-full grid grid-cols-1 lg:grid-cols-[2fr_3fr] gap-12 items-center px-8 py-10 md:px-20 md:py-20 lg:pl-[30px] lg:pr-[30px]">
                <!-- Left Content (Text) -->
                <div class="flex flex-col mt-30 text-left h-full pt-8 md:pt-8">
                    <div class="mb-6 mt-8 md:mt-0">
                        <h2 class="text-2xl md:text-3xl font-bold font-heading text-[#0F172A] dark:text-[#F8FAFC] mb-2 leading-tight">
                            IKABRI UM<br/>
                            (IKATAN BOCAH KEDIRI UM)
                        </h2>
                    </div>

                    <div class="space-y-4 font-body text-[#0F172A] dark:text-[#F8FAFC] leading-relaxed text-sm md:text-base lg:text-lg">
                        <p class="opacity-70 dark:opacity-100 font-medium tracking-wide">
                            IKABRI UM adalah singkatan dari Ikatan Bocah Kediri Universitas Negeri Malang yaitu Organisasi daerah yang menampung Mahasiswa dari Kediri yang sedang menempuh pendidikan kuliah di Universitas Negeri Malang.
                        </p>
                        <p class="opacity-70 dark:opacity-100 font-medium tracking-wide">
                            IKABRI UM berdiri sejak tanggal 3 November 2008 yang di prakarsai oleh Mifdal Zusron Alfaqi. IKABRI UM memiliki jargon "We Are Family".
                        </p>
                    </div>
                </div>

                <!-- Right Content (Image) -->
                <div class="flex items-center justify-center h-full relative">
                    <img src="{{ asset('image/pengurus.png') }}" alt="IKABRI Group" class="w-full max-w-md lg:max-w-2xl object-contain drop-shadow-2xl relative z-20 rounded-2xl" onerror=this.src="{{ asset('image/placeholder.jpg') }}">
                </div>
            </div>

            <!-- Bottom Area: Arrow + Additional Text -->
            <div class="absolute bottom-4 left-4 right-4 md:bottom-[20px] md:left-[10px] md:right-[50px] z-30 flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-15">
                <!-- Arrow Button -->
                <button class="flex-shrink-0 w-16 h-16 md:w-30 md:h-30 rounded-full flex items-center justify-center transition-transform hover:scale-110 shadow-lg bg-[#7C3AED] dark:bg-[#5A28AF] text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-20 md:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </button>

                <!-- Additional Text -->
                <div class="max-w-full hidden md:block max-w-2xl text-sm md:text-base text-[#0F172A] dark:text-[#F8FAFC] opacity-70 dark:opacity-90 font-medium leading-relaxed">
                    <p>
                        IKABRI UM dapat menjadi wadah bagi mahasiswa UM kediri yang ingin menyalurkan bakat kreativitas maupun inovasi nya dalam dunia pendidikan maupun sosial. Organisasi ini berlandaskan asas kekeluargaan dan menjunjung tinggi nilai kekeluargaan sebagai pedoman utama dalam menjalankan organisasi, memperkenalkan serta mengharumkan nama Kediri telah menjadi komitmen Ikabri untuk Kabupaten/Kota Kediri.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
