<section class="py-50 bg-main-bg dark:bg-main-bg-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold font-heading text-[var(--color-secondary)] mb-4 uppercase drop-shadow-sm">
                Struktur Organisasi
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto font-body">
                Struktur organisasi yang dirancang secara kolaboratif untuk mengoptimalkan potensi dan pelayanan bagi seluruh anggota
            </p>
        </div>

        <!-- Structure Grid -->
        <div class="flex flex-col items-center space-y-12">
            <!-- Level 1: BPH -->
            <div class="w-full max-w-sm">
                <div class="group relative bg-white dark:bg-[#1E293B] border-[3px] border-[var(--color-secondary)] rounded-[20px] p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="w-16 h-16 mx-auto mb-4 bg-orange-100 rounded-full flex items-center justify-center text-[var(--color-secondary)]">
                        <img src="{{ asset('image/bph.png') }}" alt="BPH" class="w-full h-full object-cover transition-all duration-300 border-[2px] border-[var(--color-secondary)] rounded-[999px]" loading="lazy">
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-[var(--color-secondary)] mb-2">
                        Badan Pengurus Harian (BPH)
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 font-body">
                        <span class="font-semibold block mb-1">Tugas:</span>
                        Menjadi pusat komando dan koordinasi utama yang mengintegrasikan seluruh arah gerak dan administrasi organisasi IKABRI
                    </p>
                </div>
            </div>

            <!-- Level 2: Huminfo, Penalaran, Bakat Minat -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
                <!-- Huminfo -->
                <div class="relative bg-white dark:bg-[#1E293B] border-[3px] border-[var(--color-accent)] dark:border-[var(--color-accent-dark)] rounded-[20px] p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 dark:bg-slate-700 rounded-full flex items-center justify-center text-[var(--color-accent)] dark:text-[var(--color-accent-dark)]">
                        <img src="{{ asset('image/huminfo.png') }}" alt="Huminfo" class="w-full h-full object-cover transition-all duration-300 border-[2px] border-[var(--color-accent)] rounded-[999px] dark:border-[var(--color-accent-dark)]" loading="lazy">
                    </div>
                    <h3 class="text-xl font-bold font-heading text-primary-text dark:text-primary-text-dark mb-2">
                        Huminfo
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 font-body">
                        <span class="font-semibold block mb-1">Tugas:</span>
                        Mengelola arus informasi internal-eksternal serta membangun citra positif IKABRI di lingkungan Universitas Negeri Malang
                    </p>
                </div>

                <!-- Penalaran -->
                <div class="relative bg-white dark:bg-[#1E293B] border-[3px] border-[var(--color-accent)] dark:border-[var(--color-accent-dark)] rounded-[20px] p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 dark:bg-slate-700 rounded-full flex items-center justify-center text-[var(--color-accent)] dark:text-[var(--color-accent-dark)]">
                        <img src="{{ asset('image/penalaran.png') }}" alt="Penalaran" class="w-full h-full object-cover transition-all duration-300 border-[2px] border-[var(--color-accent)] rounded-[999px] dark:border-[var(--color-accent-dark)]" loading="lazy">
                    </div>
                    <h3 class="text-xl font-bold font-heading text-primary-text dark:text-primary-text-dark mb-2">
                        Penalaran
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 font-body">
                        <span class="font-semibold block mb-1">Tugas:</span>
                        Mewadahi pengembangan daya kritis, akademik, dan wawasan intelektual seluruh anggota agar unggul dalam perkuliahan
                    </p>
                </div>

                <!-- Bakat Minat -->
                <div class="relative bg-white dark:bg-[#1E293B] border-[3px] border-[var(--color-accent)] dark:border-[var(--color-accent-dark)] rounded-[20px] p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 dark:bg-slate-700 rounded-full flex items-center justify-center text-[var(--color-accent)] dark:text-[var(--color-accent-dark)]">
                        <img src="{{ asset('image/bakmin.png') }}" alt="Bakmin" class="w-full h-full object-cover transition-all duration-300 border-[2px] border-[var(--color-accent)] rounded-[999px] dark:border-[var(--color-accent-dark)]" loading="lazy">
                    </div>
                    <h3 class="text-xl font-bold font-heading text-primary-text dark:text-primary-text-dark mb-2">
                        Bakat Minat
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 font-body">
                        <span class="font-semibold block mb-1">Tugas:</span>
                        Fasilitator bagi "Cah Kediri" untuk mengeksplorasi potensi diri di bidang olahraga, seni, dan kreativitas non-akademik
                    </p>
                </div>

            </div>

            <!-- Level 3: Pengmas, Organisasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl">
                <!-- Pengmas -->
                <div class="relative bg-white dark:bg-[#1E293B] border-[3px] border-[var(--color-accent)] dark:border-[var(--color-accent-dark)] rounded-[20px] p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 dark:bg-slate-700 rounded-full flex items-center justify-center text-[var(--color-accent)] dark:text-[var(--color-accent-dark)]">
                        <img src="{{ asset('image/pengmas.png') }}" alt="Pengmas" class="w-full h-full object-cover transition-all duration-300 border-[2px] border-[var(--color-accent)] rounded-[999px] dark:border-[var(--color-accent-dark)]" loading="lazy">
                    </div>
                    <h3 class="text-xl font-bold font-heading text-primary-text dark:text-primary-text-dark mb-2">
                        Pengmas
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 font-body">
                        <span class="font-semibold block mb-1">Tugas:</span>
                        Jembatan aksi nyata pengabdian mahasiswa kepada masyarakat luas, khususnya dalam membawa dampak positif bagi daerah asal
                    </p>
                </div>

                <!-- Organisasi -->
                <div class="relative bg-white dark:bg-[#1E293B] border-[3px] border-[var(--color-accent)] dark:border-[var(--color-accent-dark)] rounded-[20px] p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 dark:bg-slate-700 rounded-full flex items-center justify-center text-[var(--color-accent)] dark:text-[var(--color-accent-dark)]">
                        <img src="{{ asset('image/organisasi.png') }}" alt="Organisasi" class="w-full h-full object-cover transition-all duration-300 border-[2px] border-[var(--color-accent)] rounded-[999px] dark:border-[var(--color-accent-dark)]" loading="lazy">
                    </div>
                    <h3 class="text-xl font-bold font-heading text-primary-text dark:text-primary-text-dark mb-2">
                        Organisasi
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 font-body">
                        <span class="font-semibold block mb-1">Tugas:</span>
                        Fokus pada penguatan internal, kaderisasi anggota, serta pengembangan manajemen sumber daya manusia di dalam IKABRI
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>
