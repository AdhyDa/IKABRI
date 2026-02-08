<!-- Lightbox Modal -->
<div id="gallery-lightbox" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black/90 backdrop-blur-sm transition-opacity opacity-0" id="lightbox-backdrop"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <!-- Modal Panel -->
            <div class="relative transform overflow-hidden rounded-lg bg-transparent text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-6xl">
                <!-- Close Button -->
                <button type="button" onclick="closeLightbox()" class="absolute top-4 right-4 z-50 text-white hover:text-gray-300 focus:outline-none bg-black/50 rounded-full p-2 transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Download Button -->
                <a id="lightbox-download" href="#" onclick="downloadCurrentImage(event)" class="absolute top-4 right-16 z-50 text-white hover:text-gray-300 focus:outline-none bg-black/50 rounded-full p-2 transition-colors mr-2 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </a>

                <!-- Navigation Buttons -->
                <button type="button" onclick="prevImage()" class="absolute left-4 top-1/2 -translate-y-1/2 z-40 text-white hover:text-gray-300 focus:outline-none hidden md:block bg-black/20 hover:bg-black/40 rounded-full p-2 transition-colors">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <button type="button" onclick="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 z-40 text-white hover:text-gray-300 focus:outline-none hidden md:block bg-black/20 hover:bg-black/40 rounded-full p-2 transition-colors">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                <!-- Main Image Container -->
                <div class="relative aspect-video w-full flex items-center justify-center bg-black/40">
                    <img id="lightbox-image" src="" alt="Gallery Image" class="max-h-[85vh] max-w-full object-contain shadow-2xl">

                    <!-- Caption -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent p-6 text-white text-center pb-8 pt-12">
                        <h3 id="lightbox-title" class="text-xl font-bold font-heading mb-1"></h3>
                        <p id="lightbox-description" class="text-sm text-gray-200"></p>
                    </div>
                </div>

                <!-- Thumbnails (Optional) -->
                <div class="hidden mt-4 flex space-x-2 overflow-x-auto p-4 justify-center" id="lightbox-thumbnails">
                    <!-- Thumbnails injected by JS -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentImages = [];
    let currentIndex = 0;

    function openLightbox(images, startIndex = 0) {
        currentImages = images;
        currentIndex = startIndex;

        const lightbox = document.getElementById('gallery-lightbox');
        const backdrop = document.getElementById('lightbox-backdrop');

        lightbox.classList.remove('hidden');

        // Simple animation
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
        }, 10);

        updateLightboxImage();
    }

    function closeLightbox() {
        const lightbox = document.getElementById('gallery-lightbox');
        const backdrop = document.getElementById('lightbox-backdrop');

        backdrop.classList.add('opacity-0');

        setTimeout(() => {
            lightbox.classList.add('hidden');
        }, 300);
    }

    function updateLightboxImage() {
        if (currentImages.length === 0) return;

        const img = currentImages[currentIndex];
        document.getElementById('lightbox-image').src = img.url;
        document.getElementById('lightbox-title').textContent = img.name || '';
        document.getElementById('lightbox-description').textContent = img.description || '';

        // Update Download Link HREF as fallback and for right-click -> save as
        const downloadBtn = document.getElementById('lightbox-download');
        if (downloadBtn) {
            downloadBtn.href = img.url;
            downloadBtn.setAttribute('data-filename', img.name || 'image.jpg');
        }
    }

    function nextImage() {
        if (currentImages.length === 0) return;
        currentIndex = (currentIndex + 1) % currentImages.length;
        updateLightboxImage();
    }

    function prevImage() {
        if (currentImages.length === 0) return;
        currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
        updateLightboxImage();
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.getElementById('gallery-lightbox').classList.contains('hidden')) return;

        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });

    // Force Download Function
    async function downloadCurrentImage(e) {
        e.preventDefault();
        const btn = e.currentTarget;
        const url = btn.href;
        const filename = btn.getAttribute('data-filename') || 'image.jpg';

        try {
            // Visual feedback
            const originalContent = btn.innerHTML;
            btn.innerHTML = `<svg class="animate-spin h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>`;

            const response = await fetch(url, {
                mode: 'cors', // Important for Google Drive/Photos
            });

            if (!response.ok) throw new Error('Network response was not ok');

            const blob = await response.blob();
            const blobUrl = window.URL.createObjectURL(blob);

            const link = document.createElement('a');
            link.href = blobUrl;
            link.download = filename;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            window.URL.revokeObjectURL(blobUrl);

            // Restore icon
            btn.innerHTML = originalContent;

        } catch (error) {
            console.error('Download failed:', error);
            // Fallback: Open in new tab if fetch fails (e.g. strict CORS)
            window.open(url, '_blank');
            btn.innerHTML = originalContent; // Restore icon
        }
    }
</script>
