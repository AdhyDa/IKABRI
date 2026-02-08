<section id="gallery-root" class="py-12 mb-20 relative z-10" x-data="galleryApp()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumbs Navigation -->
        <nav x-show="view !== 'bento'" class="mb-8 flex items-center space-x-2 text-sm md:text-base transition-all duration-300 overflow-x-auto whitespace-nowrap" style="display: none;">
            <button @click="resetToDivisions()" class="text-gray-500 hover:text-primary transition-colors cursor-pointer font-medium">Galeri</button>
            <template x-for="(crumb, index) in folderStack">
                <div class="flex items-center">
                    <span class="text-gray-400 mx-2">/</span>
                    <button
                        @click="jumpToFolder(index)"
                        :class="index === folderStack.length - 1 ? 'text-primary font-bold' : 'text-gray-500 hover:text-primary transition-colors cursor-pointer'"
                        x-text="crumb.name">
                    </button>
                </div>
            </template>
        </nav>

        <!-- VIEW 1: BENTO GRID (Divisions) -->
        <div x-show="view === 'bento'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <template x-for="item in divisions" :key="item.id">
                    <div :id="'div-' + item.id"
                        @click="openFolder(item.id, item.name)"
                        :class="['group relative cursor-pointer rounded-[20px] overflow-hidden border-[5px] border-[#4735E1] dark:border-[#6366F1] bg-white dark:bg-[#1E293B] shadow-[5px_10px_35px_rgba(71,53,225,0.2)] transition-all duration-300', item.gridClass, flashId === item.id ? 'scale-[1.02]' : '']">

                        <!-- Default Text -->
                        <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 z-20"
                            :class="(flashId === item.id) ? 'opacity-0' : 'group-hover:opacity-0'">
                            <h3 class="text-xl md:text-3xl font-bold font-heading uppercase text-center text-[#0F172A] dark:text-[#F8FAFC]" x-text="item.name"></h3>
                        </div>

                        <!-- Hover/Flash Content -->
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

        <!-- VIEW 2: CONTENT (Folders or Photos) -->
        <div x-show="view === 'content'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">
            <!-- Loading -->
            <div x-show="loading" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="i in 3">
                    <div class="rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-800 animate-pulse h-64"></div>
                </template>
            </div>

            <!-- FOLDER GRID (If subfolders exist) -->
            <div x-show="!loading && currentContent.folders.length > 0" class="mb-10">
                <h3 class="text-xl font-bold mb-4 font-heading text-primary-text dark:text-primary-text-dark">Album</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="folder in currentContent.folders" :key="folder.id">
                        <div @click="openFolder(folder.id, folder.name)" class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg cursor-pointer hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group ring-1 ring-gray-100 dark:ring-gray-700">
                            <div class="h-48 overflow-hidden relative">
                                <img :src="folder.cover"
                                    referrerpolicy="no-referrer"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    alt="Dokumentasi"
                                    loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <span class="absolute bottom-3 right-3 text-xs font-bold text-white bg-[#4735E1] px-2 py-1 rounded-full">Folder</span>
                            </div>
                            <div class="p-5">
                                <h4 class="font-bold text-lg mb-1 dark:text-gray-100" x-text="folder.name"></h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Klik untuk membuka</p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- PHOTO GRID (Masonry) -->
            <div x-show="!loading && currentContent.images.length > 0">
                <h3 x-show="currentContent.folders.length > 0" class="text-xl font-bold mb-4 font-heading text-primary-text dark:text-primary-text-dark">Foto</h3>
                <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
                    <template x-for="(photo, index) in currentContent.images" :key="photo.id">
                        <div @click="openLightboxGlobal(currentContent.images, index)" class="break-inside-avoid rounded-lg overflow-hidden cursor-zoom-in group relative shadow-md">
                            <img :src="photo.thumbnail"
                                referrerpolicy="no-referrer"
                                class="w-full h-auto transition-transform duration-300 group-hover:scale-105"
                                alt="Dokumentasi"
                                loading="lazy">
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- EMPTY STATE -->
            <div x-show="!loading && currentContent.folders.length === 0 && currentContent.images.length === 0" class="text-center py-20">
                <p class="text-gray-500 text-lg">Folder ini kosong.</p>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('galleryApp', () => ({
            view: 'bento', // 'bento', 'content'
            loading: false,
            flashId: null,

            // Navigation Stack
            folderStack: [], // Array of {id, name}

            // Currently Displayed Content
            currentContent: {
                folders: [],
                images: []
            },

            // Static Data for Bento Grid
            divisions: [
                { id: 'BPH', name: 'BADAN PENGURUS HARIAN', event: 'MAKRAB & MUBES', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-3 h-[300px] md:h-[500px]' },
                { id: 'HUMINFO', name: 'DIVISI HUMINFO', event: 'PELATIHAN FOTOGRAFI', image: '{{ asset("image/foto10.jpg") }}', gridClass: 'col-span-1 md:col-span-2 h-[300px]' },
                { id: 'PENALARAN', name: 'DIVISI PENALARAN', event: 'PELATIHAN ESAI', image: '{{ asset("image/placeholder.jpg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' },
                { id: 'BAKMIN', name: 'DIVISI BAKMIN', event: 'IKABRI FUTSAL CUP 9', image: '{{ asset("image/foto9.jpeg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' },
                { id: 'PENGMAS', name: 'DIVISI PENGMAS', event: 'IKABRI MENGAJAR', image: '{{ asset("image/foto5.jpeg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' },
                { id: 'ORGANISASI', name: 'DIVISI ORGANISASI', event: 'DIES NATALIS IKABRI 2026', image: '{{ asset("image/foto8.jpeg") }}', gridClass: 'col-span-1 md:col-span-1 h-[300px]' }
            ],

            init() {
                window.scrollToDivision = (id) => this.handleScrollToDivision(id);

                // Check for folder parameter in URL
                const urlParams = new URLSearchParams(window.location.search);
                const folderParam = urlParams.get('folder');
                if (folderParam) {
                    const division = this.divisions.find(d => d.id === folderParam);
                    if (division) {
                        setTimeout(() => {
                            this.openFolder(division.id, division.name);
                            const galleryRoot = document.getElementById('gallery-root');
                            if(galleryRoot) galleryRoot.scrollIntoView({ behavior: 'smooth' });
                        }, 100);
                    }
                }
            },

            // --- Navigation ---
            // 1. Open a new folder (Push to stack)
            async openFolder(folderId, folderName) {
                this.loading = true;
                this.view = 'content';

                // Add to stack
                this.folderStack.push({ id: folderId, name: folderName });

                await this.fetchContent(folderId);
                this.loading = false;
            },

            // 2. Go back to a specific level (Pop stack)
            async jumpToFolder(index) {
                // If clicking the current folder, do nothing
                if (index === this.folderStack.length - 1) return;

                this.loading = true;

                // Slice stack to the selected index + 1
                this.folderStack = this.folderStack.slice(0, index + 1);

                // Fetch content of the new top of stack
                const target = this.folderStack[this.folderStack.length - 1];
                await this.fetchContent(target.id);

                this.loading = false;
            },

            // 3. Reset to Home
            resetToDivisions() {
                this.view = 'bento';
                this.folderStack = [];
                this.currentContent = { folders: [], images: [] };
            },

            // --- Logic ---
            async fetchContent(folderId) {
                 this.currentContent = { folders: [], images: [] }; // Clear

                try {
                    const res = await fetch(`/api/gallery/content/${folderId}`);
                    const json = await res.json();
                    if (json.status === 'success') {
                        this.currentContent = json.data;
                    }
                } catch (e) {
                    console.error(e);
                    alert('Gagal memuat konten. Periksa koneksi internet.');
                }
            },

            handleScrollToDivision(id) {
                this.resetToDivisions();
                setTimeout(() => {
                    const element = document.getElementById('div-' + id);
                    if (element) {
                        element.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        this.flashId = id;
                        setTimeout(() => { this.flashId = null; }, 3000);
                    }
                }, 100);
            },

            openLightboxGlobal(images, index) {
                if (typeof openLightbox === 'function') {
                    openLightbox(images, index);
                }
            }
        }))
    });
</script>
