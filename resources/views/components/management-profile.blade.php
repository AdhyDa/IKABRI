<section id="management-profile" class="mt-50 py-50 bg-[#F4F1FF] dark:bg-main-bg-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold font-heading text-[#F59E0B] mb-4 uppercase tracking-wide">
                KENALI TIM KAMI
            </h2>
            <p class="text-lg text-[#0F172A] dark:text-[#F8FAFC] font-body opacity-80 mb-8">
                Sinergi 6 divisi untuk wujudkan Rumah Kedua bagi Cah Kediri
            </p>

            <!-- TABS -->
            <div class="flex flex-col items-center gap-6 mb-8">

                <!-- BPH Tab (Isolated Top) -->
                <div>
                    <button onclick="switchTab('bph')" id="tab-bph" class="tab-btn px-10 py-2 rounded-full bg-white dark:bg-[#1E293B] border-[3px] text-sm md:text-base font-bold transition-all duration-300
                        border-[#F59E0B] text-[#F59E0B] hover:border-[#F59E0B] hover:text-[#F59E0B] shadow-sm">
                        BPH
                    </button>
                </div>

                <!-- Division Tabs (Row) -->
                <div class="flex flex-wrap justify-center lg:justify-between gap-4 w-full max-w-5xl mx-auto px-4 md:px-0">
                    <button onclick="switchTab('huminfo')" id="tab-huminfo" class="tab-btn px-10 py-2 rounded-full bg-white dark:bg-[#1E293B] border-[3px] border-[#7C3AED] dark:border-[#5A28AF] text-[#0F172A] dark:text-[#F8FAFC] font-medium text-sm md:text-base transition-all duration-300 hover:border-[#F59E0B] hover:text-[#F59E0B]">
                        Huminfo
                    </button>
                    <button onclick="switchTab('penalaran')" id="tab-penalaran" class="tab-btn px-10 py-2 rounded-full bg-white dark:bg-[#1E293B] border-[3px] border-[#7C3AED] dark:border-[#5A28AF] text-[#0F172A] dark:text-[#F8FAFC] font-medium text-sm md:text-base transition-all duration-300 hover:border-[#F59E0B] hover:text-[#F59E0B]">
                        Penalaran
                    </button>
                    <button onclick="switchTab('bakmin')" id="tab-bakmin" class="tab-btn px-10 py-2 rounded-full bg-white dark:bg-[#1E293B] border-[3px] border-[#7C3AED] dark:border-[#5A28AF] text-[#0F172A] dark:text-[#F8FAFC] font-medium text-sm md:text-base transition-all duration-300 hover:border-[#F59E0B] hover:text-[#F59E0B]">
                        Bakmin
                    </button>
                    <button onclick="switchTab('pengmas')" id="tab-pengmas" class="tab-btn px-10 py-2 rounded-full bg-white dark:bg-[#1E293B] border-[3px] border-[#7C3AED] dark:border-[#5A28AF] text-[#0F172A] dark:text-[#F8FAFC] font-medium text-sm md:text-base transition-all duration-300 hover:border-[#F59E0B] hover:text-[#F59E0B]">
                        Pengmas
                    </button>
                    <button onclick="switchTab('organisasi')" id="tab-organisasi" class="tab-btn px-10 py-2 rounded-full bg-white dark:bg-[#1E293B] border-[3px] border-[#7C3AED] dark:border-[#5A28AF] text-[#0F172A] dark:text-[#F8FAFC] font-medium text-sm md:text-base transition-all duration-300 hover:border-[#F59E0B] hover:text-[#F59E0B]">
                        Organisasi
                    </button>
                </div>
            </div>
        </div>

        <!-- DYNAMIC CONTENT CONTAINER -->
        <div id="division-content-container" class="transition-all duration-500 opacity-100 transform translate-y-0">
            <!-- DIVISION TITLE -->
            <h3 id="division-title" class="text-2xl md:text-3xl font-bold font-heading text-[#0F172A] dark:text-[#F8FAFC] text-center mb-10 uppercase">
                BADAN PENGURUS HARIAN
            </h3>

            <!-- CARDS GRID -->
            <div id="cards-container" class="w-full">
                <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12">
                    <!-- Left (Side) -->
                    <div class="order-2 md:order-1 w-64 md:mt-12">
                        <div class="bg-white dark:bg-[#1E293B] rounded-[20px] overflow-hidden border-[5px] border-[#7C3AED] shadow-lg">
                            <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-64 object-cover" alt="Member">
                            <div class="p-4 text-center">
                                <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] text-lg uppercase">DEKA SABILA ALIFIA S.</h4>
                                <p class="text-sm text-[#0F172A] dark:text-[#F8FAFC] opacity-80">Bendahara Umum</p>
                            </div>
                        </div>
                    </div>

                    <!-- Center (Main) -->
                    <div class="order-1 md:order-2 w-72 md:w-80 z-10">
                        <div class="bg-white dark:bg-[#1E293B] rounded-[24px] overflow-hidden border-[5px] border-[#7C3AED] shadow-2xl transform scale-105">
                            <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-80 object-cover" alt="Member">
                            <div class="p-6 text-center">
                                <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] text-xl uppercase">PUTRA GANA WACANA</h4>
                                <p class="text-base text-[#0F172A] dark:text-[#F8FAFC] opacity-80">Ketua Umum</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right (Side) -->
                    <div class="order-3 md:order-3 w-64 md:mt-12">
                        <div class="bg-white dark:bg-[#1E293B] rounded-[20px] overflow-hidden border-[5px] border-[#7C3AED] shadow-lg">
                            <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-64 object-cover" alt="Member">
                            <div class="p-4 text-center">
                                <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] text-lg uppercase">CLARISTHA FIRNANDA</h4>
                                <p class="text-sm text-[#0F172A] dark:text-[#F8FAFC] opacity-80">Sekretaris Umum</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <script>
        // Data Structure with EXPLICIT member arrays for editing
        const divisionData = {
            'bph': {
                title: "BADAN PENGURUS HARIAN",
                layout: 'bph',
                members: [
                    { name: 'DEKA SABILA ALIFIA S.', role: 'Bendahara Umum', img: 'placeholder.jpg' },
                    { name: 'PUTRA GANA WACANA', role: 'Ketua Umum', img: 'placeholder.jpg' },
                    { name: 'CLARISTHA FIRNANDA', role: 'Sekretaris Umum', img: 'placeholder.jpg' }
                ]
            },
            'huminfo': {
                title: "Divisi Huminfo",
                layout: 'standard',
                members: [
                    // TOP 2 LEADERS
                    { name: 'MARWA ULIA HASANA', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SINA ALFIAN RUHIL `ILMI', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    // STAFF MEMBERS (8)
                    { name: 'ADHYAKSA DAUDI M.A.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'DHEFITA MATHOVANI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'AZ-ZAHRA FIRSTA N.P.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'NAFIDATUS SA`ADAH', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'MAHAGO SETIAWAN', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'SACRALIA AURORA A.R.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'NOUVAL PRASETYA H.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'ANIKHA PUTRI Y.', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'penalaran': {
                title: "Divisi Penalaran",
                layout: 'standard',
                members: [
                    // TOP 2 LEADERS
                    { name: 'KETUA PENALARAN', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SEKRETARIS PENALARAN', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    // STAFF MEMBERS (5)
                    { name: 'Staff Penalaran 1', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Penalaran 2', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Penalaran 3', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Penalaran 4', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Penalaran 5', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'bakmin': {
                title: "Divisi Bakmin",
                layout: 'standard',
                members: [
                    // TOP 2 LEADERS
                    { name: 'KETUA BAKMIN', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SEKRETARIS BAKMIN', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    // STAFF MEMBERS (12)
                    { name: 'Staff Bakmin 1', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 2', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 3', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 4', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 5', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 6', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 7', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 8', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 9', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 10', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 11', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Bakmin 12', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'pengmas': {
                title: "Divisi Pengmas",
                layout: 'standard',
                members: [
                    // TOP 2 LEADERS
                    { name: 'KETUA PENGMAS', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SEKRETARIS PENGMAS', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    // STAFF MEMBERS (8)
                    { name: 'Staff Pengmas 1', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 2', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 3', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 4', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 5', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 6', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 7', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Pengmas 8', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'organisasi': {
                title: "Divisi Organisasi",
                layout: 'standard',
                members: [
                    // TOP 2 LEADERS
                    { name: 'KETUA ORGANISASI', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SEKRETARIS ORGANISASI', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    // STAFF MEMBERS (11)
                    { name: 'Staff Organisasi 1', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 2', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 3', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 4', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 5', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 6', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 7', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 8', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 9', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 10', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'Staff Organisasi 11', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            }
        };

        // Helper to generate member card HTML
        function createCard(name, role, isLarge = false) {
            const h = isLarge ? 'h-80' : 'h-64';
            const w = isLarge ? 'w-full' : 'w-full';
            const rounded = isLarge ? 'rounded-[24px]' : 'rounded-[20px]';
            const scale = isLarge ? 'transform scale-105 shadow-2xl' : 'shadow-lg';
            const border = 'border-[5px] border-[#7C3AED]';
            const bg = 'bg-white dark:bg-[#1E293B]';

            return `
                <div class="${bg} ${rounded} overflow-hidden ${border} ${scale} h-full flex flex-col">
                    <img src="{{ asset('image/placeholder.jpg') }}" class="w-full ${h} object-cover" alt="${name}">
                    <div class="${isLarge ? 'p-6' : 'p-4'} text-center mt-auto">
                        <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] ${isLarge ? 'text-xl' : 'text-lg'} uppercase">${name}</h4>
                        <p class="${isLarge ? 'text-base' : 'text-sm'} text-[#0F172A] dark:text-[#F8FAFC] opacity-80">${role}</p>
                    </div>
                </div>
            `;
        }

        function switchTab(key) {
            const container = document.getElementById('division-content-container');
            const data = divisionData[key];

            // 1. Update Tabs Active State
            document.querySelectorAll('.tab-btn').forEach(btn => {
                // Reset to inactive state
                btn.classList.remove('border-[#F59E0B]', 'text-[#F59E0B]', 'font-bold');
                btn.classList.add('border-[#7C3AED]', 'dark:border-[#5A28AF]', 'font-medium', 'text-[#0F172A]', 'dark:text-[#F8FAFC]');
            });

            const activeBtn = document.getElementById('tab-' + key);
            // Apply active state
            activeBtn.classList.remove('border-[#7C3AED]', 'dark:border-[#5A28AF]', 'font-medium', 'text-[#0F172A]', 'dark:text-[#F8FAFC]');
            activeBtn.classList.add('border-[#F59E0B]', 'text-[#F59E0B]', 'font-bold');

            // 2. Animate Out
            container.classList.add('opacity-0', 'translate-y-4');

            setTimeout(() => {
                // 3. Update Content
                document.getElementById('division-title').textContent = data.title;
                const cardsContainer = document.getElementById('cards-container');

                if (data.layout === 'bph') {
                    // Specific BPH Layout
                    const m = data.members;
                    cardsContainer.innerHTML = `
                        <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12">
                            <div class="order-2 md:order-1 w-64 md:mt-12">${createCard(m[0].name, m[0].role)}</div>
                            <div class="order-1 md:order-2 w-72 md:w-80 z-10">${createCard(m[1].name, m[1].role, true)}</div>
                            <div class="order-2 md:order-3 w-64 md:mt-12">${createCard(m[2].name, m[2].role)}</div>
                        </div>
                    `;
                } else {
                    // Standard Layout: 2 Leaders + Grid
                    // Using EXPLICIT data from the array
                    const m = data.members;

                    // Leaders (Index 0 and 1)
                    let leadersHTML = `
                        <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-12 mb-12">
                            <div class="w-64 max-w-full mx-auto md:mx-0">${createCard(m[0].name, m[0].role)}</div>
                            <div class="w-64 max-w-full mx-auto md:mx-0">${createCard(m[1].name, m[1].role)}</div>
                        </div>
                    `;

                    // Grid (Index 2 onwards)
                    let gridHTML = `<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">`;

                    for(let i=2; i < m.length; i++) {
                        gridHTML += `<div class="w-full">${createCard(m[i].name, m[i].role)}</div>`;
                    }
                    gridHTML += `</div>`;

                    cardsContainer.innerHTML = leadersHTML + gridHTML;
                }

                // 4. Animate In
                container.classList.remove('opacity-0', 'translate-y-4');
            }, 500); // Wait for transition
        }
    </script>
</section>
