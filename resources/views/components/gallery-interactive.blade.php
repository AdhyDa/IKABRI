<section id="gallery-root" class="py-12 mb-20 relative z-10" x-data="galleryApp()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumbs Navigation -->
        <nav x-show="view !== 'bento'" class="mb-8 flex items-center space-x-2 text-sm md:text-base transition-all duration-300" style="display: none;">
            <button @click="resetToDivisions()" class="text-gray-500 hover:text-primary transition-colors cursor-pointer">Galeri</button>
            <span class="text-gray-400">/</span>
            <button x-show="currentDivision" @click="view = 'albums'" x-text="currentDivisionName" class="text-gray-500 hover:text-primary transition-colors cursor-pointer"></button>
            <span x-show="currentFolder" class="text-gray-400">/</span>
            <span x-show="currentFolder" x-text="currentFolderName" class="text-primary font-bold"></span>
        </nav>

        <!-- VIEW 1: BENTO GRID (Main) -->
        <div x-show="view === 'bento'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Helper for grid items -->
                <template x-for="item in divisions" :key="item.id">
                    <div :id="'div-' + item.id"
                        @click="fetchFolders(item.id, item.name)"
                        :class="['group relative cursor-pointer rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] transition-all duration-300', item.gridClass, flashId === item.id ? 'scale-[1.02]' : '']">

                        <!-- Default Text State -->
                        <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 z-20"
                            :class="(flashId === item.id) ? 'opacity-0' : 'group-hover:opacity-0'">
                            <h3 class="text-xl md:text-3xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC]" x-text="item.name"></h3>
                        </div>

                        <!-- Hover/Flash Content (Image) -->
                        <div class="absolute inset-0 transition-opacity duration-500 z-10"
                            :class="(flashId === item.id) ? 'opacity-100' : 'opacity-0 group-hover:opacity-100'">
                            <img :src="item.image" class="w-full h-full object-cover transition-transform duration-700 decoration-clone"
                                :class="(flashId === item.id) ? 'scale-110' : 'group-hover:scale-110'">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                                <h3 class="text-xl md:text-4xl font-bold font-heading uppercase text-center text-white drop-shadow-md transform transition-transform duration-500"
                                    :class="(flashId === item.id) ? 'translate-y-0' : 'translate-y-4 group-hover:translate-y-0'" x-text="item.event"></h3>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- VIEW 2: ALBUMS GRID (Sub-folders) -->
        <div x-show="view === 'albums'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">

            <!-- Loading State -->
            <div x-show="loading" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="i in 3">
                    <div class="rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-800 animate-pulse h-64"></div>
                </template>
            </div>

            <!-- Content -->
            <div x-show="!loading" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="folder in folders" :key="folder.id">
                    <div @click="fetchPhotos(folder.id, folder.name)" class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg cursor-pointer hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group ring-1 ring-gray-100 dark:ring-gray-700">
                        <div class="h-48 overflow-hidden relative">
                            <img :src="folder.cover" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <span class="absolute bottom-3 right-3 text-xs font-bold text-white bg-[#4735E1] px-2 py-1 rounded-full" x-text="folder.count"></span>
                        </div>
                        <div class="p-5">
                            <h4 class="font-bold text-lg mb-1 dark:text-gray-100" x-text="folder.name"></h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Klik untuk melihat foto</p>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Empty State for Albums -->
            <div x-show="folders.length === 0 && !loading" class="text-center py-20">
                <p class="text-gray-500 text-lg">Tidak ada album ditemukan pada divisi ini.</p>
                <p class="text-sm text-gray-400 mt-2">Pastikan ID Folder Google Drive sudah dikonfigurasi dengan benar.</p>
            </div>
        </div>

        <!-- VIEW 3: PHOTO GRID (Masonry) -->
        <div x-show="view === 'photos'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" style="display: none;">
            <!-- Loading State -->
            <div x-show="loading" class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
                <template x-for="i in 8">
                    <div class="rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse break-inside-avoid" :class="i % 2 === 0 ? 'h-48' : 'h-64'"></div>
                </template>
            </div>

            <!-- Content -->
            <div x-show="!loading" class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
                <template x-for="(photo, index) in photos" :key="photo.id">
                    <div @click="openLightboxGlobal(photos, index)" class="break-inside-avoid rounded-lg overflow-hidden cursor-zoom-in group relative">
                        <img :src="photo.thumbnail" class="w-full h-auto transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                    </div>
                </template>
            </div>

            <div x-show="photos.length === 0 && !loading" class="text-center py-20">
                <p class="text-gray-500">Tidak ada foto ditemukan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Alpine.js Application Logic -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('galleryApp', () => ({
            view: 'bento', // bento, albums, photos
            loading: false,
            flashId: null, // For map interaction

            // Data Holders
            currentDivision: null,
            currentDivisionName: '',
            currentFolder: null,
            currentFolderName: '',

            folders: [],
            photos: [],

            // Bento Grid Data (Static Definition to match Blade)
            divisions: [
                { id: 'BPH', name: 'BADAN PENGURUS HARIAN', event: 'MAKRAB & MUBES', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-3 h-[300px] md:h-[500px]' },
                { id: 'HUMINFO', name: 'DIVISI HUMINFO', event: 'PELATIHAN FOTOGRAFI', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-2 h-[300px]' },
                { id: 'PENALARAN', name: 'DIVISI PENALARAN', event: 'PELATIHAN ESAI', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' },
                { id: 'BAKMIN', name: 'DIVISI BAKMIN', event: 'IKABRI FUTSAL CUP 9', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' },
                { id: 'PENGMAS', name: 'DIVISI PENGMAS', event: 'IKABRI MENGAJAR', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' },
                { id: 'ORGANISASI', name: 'DIVISI ORGANISASI', event: 'DIES NATALIS IKABRI 2026', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' }
            ],

            init() {
                // Expose Scroll Function Globally
                window.scrollToDivision = (id) => this.handleScrollToDivision(id);
            },

            // --- Navigation Logic ---
            resetToDivisions() {
                this.view = 'bento';
                this.currentDivision = null;
                this.currentFolder = null;
            },

            // --- Scroll & Flash Effect ---
            handleScrollToDivision(id) {
                // Reset to Bento View
                this.view = 'bento';

                // Scroll
                const element = document.getElementById('div-' + id);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth', block: 'center' });

                    // Trigger Flash
                    this.flashId = id;
                    setTimeout(() => {
                        this.flashId = null;
                    }, 3000); // 3 seconds as requested
                }
            },

            // --- Data Fetching ---
            async fetchFolders(divisionId, divisionName) {
                this.loading = true;
                this.view = 'albums';
                this.currentDivision = divisionId;
                this.currentDivisionName = divisionName;
                this.currentFolder = null; // Reset folder
                this.folders = []; // Clear old data

                try {
                    const res = await fetch(`/api/gallery/folders/${divisionId}`);
                    const json = await res.json();
                    if (json.status === 'success') {
                        this.folders = json.data;
                    }
                } catch (e) {
                    console.error(e);
                    alert('Failed to load albums');
                } finally {
                    this.loading = false;
                }
            },

            async fetchPhotos(folderId, folderName) {
                this.loading = true;
                this.view = 'photos';
                this.currentFolder = folderId;
                this.currentFolderName = folderName;
                this.photos = [];

                try {
                    const res = await fetch(`/api/gallery/photos/${folderId}`);
                    const json = await res.json();
                    if (json.status === 'success') {
                        this.photos = json.data;
                    }
                } catch (e) {
                    console.error(e);
                    alert('Failed to load photos');
                } finally {
                    this.loading = false;
                }
            },

            // Bridge to Lightbox Component
            openLightboxGlobal(images, index) {
                if (typeof openLightbox === 'function') {
                    openLightbox(images, index);
                }
            }
        }))
    });
</script>
