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
                <!-- Static BPH Layout matching dynamic Logic -->
                <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                    <!-- Left (Side) - Standard -->
                    <div class="order-2 md:order-1 pt-12 md:pt-12">
                        <div class="profile-card opacity-1 flex-shrink-0 flex flex-col mx-auto relative group perspective-container" style="width: 280px; height: 373px;">
                            <div class="tilt-frame w-full h-full bg-white dark:bg-[#1E293B] rounded-[20px] overflow-hidden border-[5px] border-[#7C3AED] shadow-lg flex flex-col transition-transform duration-100 ease-out" style="transform-style: preserve-3d;">
                                <div class="flex-grow relative overflow-hidden">
                                    <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-full object-cover" alt="DEKA SABILA">
                                </div>
                                <div class="p-8 text-center bg-white dark:bg-[#1E293B] shrink-0 z-10 relative">
                                    <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] text-lg uppercase leading-tight mb-2">DEKA SABILA ALIFIA S.</h4>
                                    <p class="text-sm text-[#0F172A] dark:text-[#F8FAFC] opacity-80 font-medium">Bendahara Umum</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Center (Main) - Large -->
                    <div class="order-1 md:order-2 z-10">
                        <div class="profile-card opacity-1 flex-shrink-0 flex flex-col mx-auto relative group perspective-container" style="width: 308px; height: 410px;">
                            <div class="tilt-frame w-full h-full bg-white dark:bg-[#1E293B] rounded-[24px] overflow-hidden border-[5px] border-[#7C3AED] shadow-lg flex flex-col transition-transform duration-100 ease-out" style="transform-style: preserve-3d;">
                                <div class="flex-grow relative overflow-hidden">
                                    <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-full object-cover" alt="PUTRA GANA W.">
                                </div>
                                <div class="p-8 text-center bg-white dark:bg-[#1E293B] shrink-0 z-10 relative">
                                    <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] text-xl uppercase leading-tight mb-2">PUTRA GANA WACANA</h4>
                                    <p class="text-base text-[#0F172A] dark:text-[#F8FAFC] opacity-80 font-medium">Ketua Umum</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right (Side) - Standard -->
                    <div class="order-3 md:order-3 pt-12 md:pt-12">
                        <div class="profile-card opacity-1 flex-shrink-0 flex flex-col mx-auto relative group perspective-container" style="width: 280px; height: 373px;">
                            <div class="tilt-frame w-full h-full bg-white dark:bg-[#1E293B] rounded-[20px] overflow-hidden border-[5px] border-[#7C3AED] shadow-lg flex flex-col transition-transform duration-100 ease-out" style="transform-style: preserve-3d;">
                                <div class="flex-grow relative overflow-hidden">
                                    <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-full object-cover" alt="CLARISTHA S.">
                                </div>
                                <div class="p-8 text-center bg-white dark:bg-[#1E293B] shrink-0 z-10 relative">
                                    <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] text-lg uppercase leading-tight mb-2">CLARISTHA FIRNANDA</h4>
                                    <p class="text-sm text-[#0F172A] dark:text-[#F8FAFC] opacity-80 font-medium">Sekretaris Umum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STYLE for 3D Perspective -->
    <style>
        .perspective-container {
            perspective: 1000px;
        }
    </style>

    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>

    <script>
        // Data Structure with EXPLICIT member arrays
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
                    { name: 'MARWA ULIA HASANA', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SINA ALFIAN RUHIL `ILMI', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    { name: 'ADHYAKSA DAUDI M. A.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'DHEFITA MATHOVANI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'AZ-ZAHRA FIRSTA N. P.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'NAFIDATUS SA`ADAH', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'MAHAGO SETIAWAN', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'SACRALIA AURORA A. R.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'NOUVAL PRASETYA H.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'ANIKHA PUTRI Y.', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'penalaran': {
                title: "Divisi Penalaran",
                layout: 'standard',
                members: [
                    { name: 'ESTRI SULISTYO RINI', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'NAUFAL', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    { name: 'SITI MUDDAWAMAH', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'GUSTI SINAR PAMENANG', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'FEBY YURIKAWATI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'FINNA KURNIA S.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'BAYU', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'bakmin': {
                title: "Divisi Bakmin",
                layout: 'standard',
                members: [
                    { name: 'SURYA DHAMAR S.', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'AYU LESTARI FEBMI', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    { name: 'AVINA KHOIRUNNISA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'NADIATUL AKMA F.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'GADING NICKO S.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'AMMAR IQBAL F.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'M. IQBAL RISKI M.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'ADIBSYAH J. A.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'M. DIAN RIZAL A.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'FRIDA NUR ASVIANA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'RAHMADANI RITONGA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'YESSICA RAHMAWATI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'ERINE FISDIAN M.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'FIFI NUR FADILAH', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'pengmas': {
                title: "Divisi Pengmas",
                layout: 'standard',
                members: [
                    { name: 'M. ALVIN RIDHO U.', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'SAYYID NUR ROHMAN', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    { name: 'YAHYA IMELYA PUTRI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'SALSA NABILA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'DANIEL LUTVI P.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'NAUFAL NUR FAHMI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'ENJELITA SETIA A.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'ADELIA BRILLIAN N.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'M. IRGI FAHREZI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'SITI NURANISA', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            },
            'organisasi': {
                title: "Divisi Organisasi",
                layout: 'standard',
                members: [
                    { name: 'SITI NABILA A.', role: 'Ketua Divisi', img: 'placeholder.jpg' },
                    { name: 'M. ZAMZAM S.', role: 'Sekretaris Divisi', img: 'placeholder.jpg' },
                    { name: 'AIDA FARAH R.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'KHILDA JAUHAIRINA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'HAFIZZAMAN', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'M. RISMA ZADHA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'DEVI MIFTAKHUL J.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'RIDA IRMAYANTI S.', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'FADILA GIASVANI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'AULINA RAMADHANI', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'BIMA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'KAMILA', role: 'Staff Divisi', img: 'placeholder.jpg' },
                    { name: 'INEZA', role: 'Staff Divisi', img: 'placeholder.jpg' }
                ]
            }
        };

        // Helper to generate member card HTML
        function createCard(name, role, isLarge = false) {
            const widthStyle = isLarge ? 'width: 308px;' : 'width: 280px;';
            const heightStyle = isLarge ? 'height: 410px;' : 'height: 373px;';
            const rounded = isLarge ? 'rounded-[24px]' : 'rounded-[20px]';
            const border = 'border-[5px] border-[#7C3AED]';
            const bg = 'bg-white dark:bg-[#1E293B]';
            
            return `
                <div class="profile-card opacity-0 flex-shrink-0 flex flex-col mx-auto relative group perspective-container" style="${widthStyle} ${heightStyle}">
                    <div class="tilt-frame w-full h-full ${bg} ${rounded} overflow-hidden ${border} shadow-lg flex flex-col transition-transform duration-100 ease-out" style="transform-style: preserve-3d;">
                        <div class="flex-grow relative overflow-hidden">
                            <img src="{{ asset('image/placeholder.jpg') }}" class="w-full h-full object-cover" alt="${name}">
                        </div>
                        <div class="p-8 text-center bg-white dark:bg-[#1E293B] shrink-0 z-10 relative">
                            <h4 class="font-bold text-[#0F172A] dark:text-[#F8FAFC] ${isLarge ? 'text-xl' : 'text-lg'} uppercase leading-tight mb-2">${name}</h4>
                            <p class="${isLarge ? 'text-base' : 'text-sm'} text-[#0F172A] dark:text-[#F8FAFC] opacity-80 font-medium">${role}</p>
                        </div>
                    </div>
                </div>
            `;
        }

        function switchTab(key) {
            const container = document.getElementById('division-content-container');
            const titleEl = document.getElementById('division-title');
            const data = divisionData[key];

            // 1. Update Tabs
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('border-[#F59E0B]', 'text-[#F59E0B]', 'font-bold');
                btn.classList.add('border-[#7C3AED]', 'dark:border-[#5A28AF]', 'font-medium', 'text-[#0F172A]', 'dark:text-[#F8FAFC]');
            });

            const activeBtn = document.getElementById('tab-' + key);
            activeBtn.classList.remove('border-[#7C3AED]', 'dark:border-[#5A28AF]', 'font-medium', 'text-[#0F172A]', 'dark:text-[#F8FAFC]');
            activeBtn.classList.add('border-[#F59E0B]', 'text-[#F59E0B]', 'font-bold');

            // 2. GSAP Animation
            const tl = gsap.timeline();
            const currentCards = document.querySelectorAll('.profile-card');
            
            tl.to([titleEl, ...currentCards], {
                duration: 0.3, x: -50, autoAlpha: 0, stagger: 0.05, ease: "power2.in"
            });

            tl.call(() => {
                titleEl.textContent = data.title;
                gsap.set(titleEl, { x: 50, autoAlpha: 0 });

                const cardsContainer = document.getElementById('cards-container');
                
                if (data.layout === 'bph') {
                    const m = data.members;
                    cardsContainer.innerHTML = `
                        <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                            <div class="order-2 md:order-1 pt-12 md:pt-12">${createCard(m[0].name, m[0].role)}</div>
                            <div class="order-1 md:order-2 z-10">${createCard(m[1].name, m[1].role, true)}</div>
                            <div class="order-2 md:order-3 pt-12 md:pt-12">${createCard(m[2].name, m[2].role)}</div>
                        </div>
                    `;
                } else {
                    const m = data.members;
                    let leadersHTML = `
                        <div class="flex flex-col md:flex-row justify-center items-center gap-6 mb-12">
                            <div>${createCard(m[0].name, m[0].role)}</div>
                            <div>${createCard(m[1].name, m[1].role)}</div>
                        </div>
                    `;
                    let gridHTML = `<div class="flex flex-wrap justify-center gap-6 max-w-7xl mx-auto">`;
                    for(let i=2; i < m.length; i++) {
                        gridHTML += `<div>${createCard(m[i].name, m[i].role)}</div>`;
                    }
                    gridHTML += `</div>`;
                    cardsContainer.innerHTML = leadersHTML + gridHTML;
                }
            });

            tl.call(() => {
                const newCards = document.querySelectorAll('.profile-card');
                gsap.set(newCards, { x: 50, autoAlpha: 0 });
                gsap.to(titleEl, { duration: 0.5, x: 0, autoAlpha: 1, ease: "power2.out" });
                gsap.to(newCards, {
                    duration: 0.5, x: 0, autoAlpha: 1, stagger: 0.1, ease: "back.out(1.2)", delay: 0.1
                });
                
                refreshTiltEffect();
            });
        }

        // TILT EFFECT LOGIC (Vanilla JS)
        function refreshTiltEffect() {          
            const cards = document.querySelectorAll('.perspective-container');
            
            cards.forEach(card => {
                const frame = card.querySelector('.tilt-frame');
                
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -10; // Inverted for natural feel
                    const rotateY = ((x - centerX) / centerX) * 10;
                    
                    frame.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    frame.style.transform = `rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
                });
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            const titleEl = document.getElementById('division-title');
            const cards = document.querySelectorAll('.profile-card');
            gsap.set([titleEl, ...cards], { x: 50, autoAlpha: 0 });
            
            const tl = gsap.timeline({ delay: 0.5 });
            tl.to(titleEl, { duration: 0.5, x: 0, autoAlpha: 1, ease: "power2.out" })
                .to(cards, { duration: 0.5, x: 0, autoAlpha: 1, stagger: 0.1, ease: "back.out(1.2)" }, "-=0.3");
            
            refreshTiltEffect();
        });
    </script>
</section>
