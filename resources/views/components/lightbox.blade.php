<!-- Lightbox Modal -->
<div id="gallery-lightbox" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black/90 backdrop-blur-sm transition-opacity opacity-0" id="lightbox-backdrop"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            
            <!-- Modal Panel -->
            <div class="relative transform overflow-hidden rounded-lg bg-transparent text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-6xl">
                
                <!-- Close Button -->
                <button type="button" onclick="closeLightbox()" class="absolute top-4 right-4 z-50 text-white hover:text-gray-300 focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Navigation Buttons -->
                <button type="button" onclick="prevImage()" class="absolute left-4 top-1/2 -translate-y-1/2 z-40 text-white hover:text-gray-300 focus:outline-none hidden md:block">
                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <button type="button" onclick="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 z-40 text-white hover:text-gray-300 focus:outline-none hidden md:block">
                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                <!-- Main Image Container -->
                <div class="relative aspect-video w-full flex items-center justify-center">
                    <img id="lightbox-image" src="" alt="Gallery Image" class="max-h-[80vh] max-w-full object-contain rounded-md shadow-2xl">
                    
                    <!-- Caption -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white text-center">
                        <h3 id="lightbox-title" class="text-xl font-bold font-heading"></h3>
                        <p id="lightbox-description" class="text-sm text-gray-300 mt-1"></p>
                    </div>
                </div>

                <!-- Thumbnails (Optional, simplified for now) -->
                <div class="mt-4 flex space-x-2 overflow-x-auto p-4 justify-center" id="lightbox-thumbnails">
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
        document.getElementById('lightbox-title').textContent = img.name;
        document.getElementById('lightbox-description').textContent = img.description;
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
</script>
