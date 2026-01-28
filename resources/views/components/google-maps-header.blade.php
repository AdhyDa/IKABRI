<div class="relative w-full h-[400px] bg-gray-900 border-b border-[#7C3AED]">
    <!-- Map Container -->
    <div id="leaflet-map" class="w-full h-full opacity-0 transition-opacity duration-1000 z-0"></div>

    <!-- Overlay Gradient -->
    <div class="absolute inset-0 pointer-events-none bg-gradient-to-b from-transparent via-transparent to-main-bg dark:to-main-bg-dark z-10"></div>

    <!-- Title Overlay -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-center z-20 pointer-events-none w-full">
        <h1 class="text-4xl md:text-5xl font-bold font-heading text-[--color-primary-text] dark:[--color-primary-text-dark] drop-shadow-lg tracking-wide uppercase">
            Jelajahi <span class="text-[#7C3AED] dark:text-[#A78BFA]">Ikabri</span>
        </h1>
        <p class="text-[--color-primary-text] dark:[--color-primary-text-dark] mt-2 text-sm md:text-base tracking-wider shadow-black drop-shadow-md">Kediri &bull; Malang</p>
    </div>
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Map
        const map = L.map('leaflet-map', {
            center: [-7.91, 112.3], // Center between Kediri and Malang
            zoom: 9,
            zoomControl: false, // Cleaner look
            scrollWheelZoom: false, // Prevent accidental scrolling
            attributionControl: false
        });

        // Tile Layers
        const darkTiles = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            subdomains: 'abcd'
        });

        const lightTiles = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            subdomains: 'abcd'
        });

        // Current Layer
        let currentLayer = null;

        // Function to set theme
        function setMapTheme() {
            const isDark = document.documentElement.classList.contains('dark');

            if (currentLayer) {
                map.removeLayer(currentLayer);
            }

            if (isDark) {
                currentLayer = darkTiles;
            } else {
                currentLayer = lightTiles;
            }

            currentLayer.addTo(map);
        }

        // Initial Set
        setMapTheme();

        // Observer for Theme Changes
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    setMapTheme();
                }
            });
        });

        observer.observe(document.documentElement, {
            attributes: true
        });

        // Custom Icon
        const markerIcon = L.divIcon({
            className: 'custom-marker',
            html: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#7C3AED" class="w-8 h-8 drop-shadow-lg filter"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>`,
            iconSize: [32, 22], // Adjusted anchor to prevent visual offset
            iconAnchor: [16, 22]
        });

        // Add Markers
        // Kediri
        const kediriContent = `
            <div class="text-center p-2">
                <h3 class="font-bold text-gray-900 mb-2">Kediri</h3>
                <div class="flex flex-col gap-2">
                    <button onclick="window.scrollToDivision('PENGMAS')" class="px-3 py-1 bg-[#7C3AED] text-white text-xs rounded hover:bg-[#6D28D9] transition">Divisi Pengmas</button>
                    <button onclick="window.scrollToDivision('BAKMIN')" class="px-3 py-1 bg-[#7C3AED] text-white text-xs rounded hover:bg-[#6D28D9] transition">Divisi Bakmin</button>
                    <button onclick="window.scrollToDivision('HUMINFO')" class="px-3 py-1 bg-[#7C3AED] text-white text-xs rounded hover:bg-[#6D28D9] transition">Divisi Huminfo</button>
                </div>
            </div>
        `;

        L.marker([-7.8480, 112.0178], { icon: markerIcon })
            .addTo(map)
            .bindPopup(kediriContent);

        // Malang
        const malangContent = `
            <div class="text-center p-2">
                <h3 class="font-bold text-gray-900 mb-2">Malang</h3>
                <div class="flex flex-col gap-2">
                    <button onclick="window.scrollToDivision('BPH')" class="px-3 py-1 bg-[#7C3AED] text-white text-xs rounded hover:bg-[#6D28D9] transition">BPH</button>
                    <button onclick="window.scrollToDivision('ORGANISASI')" class="px-3 py-1 bg-[#7C3AED] text-white text-xs rounded hover:bg-[#6D28D9] transition">Divisi Organisasi</button>
                    <button onclick="window.scrollToDivision('PENALARAN')" class="px-3 py-1 bg-[#7C3AED] text-white text-xs rounded hover:bg-[#6D28D9] transition">Divisi Penalaran</button>
                </div>
            </div>
        `;

        L.marker([-7.9666, 112.6326], { icon: markerIcon })
            .addTo(map)
            .bindPopup(malangContent);

        // Reveal map
        document.getElementById('leaflet-map').classList.remove('opacity-0');
    });
</script>
