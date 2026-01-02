<footer class="bg-[var(--color-footer-bg)] dark:bg-[var(--color-footer-bg-dark)] text-[var(--color-footer-text)] transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="flex flex-col lg:flex-row justify-between gap-12 lg:gap-8">
            <!-- Col 1: Brand & About -->
            <div class="space-y-6 lg:max-w-sm">
                <div class="flex items-center space-x-4">
                    <!-- Using placeholders for logos now, assuming user will replace or assets exist -->
                    <img src="{{ asset('image/um.png') }}" alt="Logo UM" class="h-16 w-auto" onerror="this.src='https://via.placeholder.com/64?text=UM'">
                    <img src="{{ asset('image/ikabri.png') }}" alt="Logo IKABRI" class="h-16 w-auto" onerror="this.src='https://via.placeholder.com/64?text=IKABRI'">
                </div>
                <p class="font-body text-5sm leading-relaxed opacity-90">
                    Rumah kedua bagi seluruh mahasiswa asal Kediri yang sedang menempuh studi di Universitas Negeri Malang.
                </p>

                <!-- Social Icons (Horizontal Circle) -->
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-white hover:text-[var(--color-footer-bg)] transition-colors duration-300">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-white hover:text-[var(--color-footer-bg)] transition-colors duration-300">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16.8217 5.1344C16.0886 4.29394 15.6479 3.19805 15.6479 2H14.7293M16.8217 5.1344C17.4898 5.90063 18.3944 6.45788 19.4245 6.67608C19.7446 6.74574 20.0786 6.78293 20.4266 6.78293V10.2191C18.645 10.2191 16.9932 9.64801 15.6477 8.68211V15.6707C15.6477 19.1627 12.8082 22 9.32386 22C7.50043 22 5.85334 21.2198 4.69806 19.98C3.64486 18.847 2.99994 17.3331 2.99994 15.6707C2.99994 12.2298 5.75592 9.42509 9.17073 9.35079M16.8217 5.1344C16.8039 5.12276 16.7861 5.11101 16.7684 5.09914M6.9855 17.3517C6.64217 16.8781 6.43802 16.2977 6.43802 15.6661C6.43802 14.0734 7.73249 12.7778 9.32394 12.7778C9.62087 12.7778 9.9085 12.8288 10.1776 12.9124V9.40192C9.89921 9.36473 9.61622 9.34149 9.32394 9.34149C9.27287 9.34149 8.86177 9.36884 8.81073 9.36884M14.7244 2H12.2097L12.2051 15.7775C12.1494 17.3192 10.8781 18.5591 9.32386 18.5591C8.35878 18.5591 7.50971 18.0808 6.98079 17.3564"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-white hover:text-[var(--color-footer-bg)] transition-colors duration-300">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M7.3418 1L12.8838 8.86328L13.6172 9.9043L14.4551 8.94434L21.3848 1H21.8008L14.3193 9.57617L13.8037 10.168L14.2559 10.8096L22.6592 22.7295C22.7058 22.7968 22.7181 22.9016 22.6777 22.9883C22.6758 22.9934 22.6719 22.9963 22.6699 23H16.6523L11.1094 15.1377L10.376 14.0967L9.53906 15.0566L2.60938 23H2.19336L9.67383 14.4248L10.1904 13.833L9.7373 13.1914L1.33496 1.27051C1.28801 1.20391 1.27502 1.09836 1.31543 1.01172C1.31748 1.00733 1.32109 1.00397 1.32324 1H7.3418Z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-white hover:text-[var(--color-footer-bg)] transition-colors duration-300">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/>
                            <path d="m10 15 5-3-5-3z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-white hover:text-[var(--color-footer-bg)] transition-colors duration-300">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Menu -->
            <div>
                <h3 class="text-2xl font-bold font-heading mb-6">Menu</h3>
                <ul class="space-y-4 font-body opacity-90">
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Beranda</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Profil</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Program Kerja</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Galeri</a></li>
                </ul>
            </div>

            <!-- Col 3: Social Text -->
            <div>
                <h3 class="text-2xl font-bold font-heading mb-6">Social</h3>
                <ul class="space-y-4 font-body opacity-90">
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Instagram</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Tiktok</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">X</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">YouTube</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-100 transition-opacity">Facebook</a></li>
                </ul>
            </div>

            <!-- Col 4: Alamat -->
            <div>
                <h3 class="text-2xl font-bold font-heading mb-6">Alamat Kami</h3>
                <div class="space-y-4 font-body opacity-90 leading-relaxed">
                    <p>Jl. Klampok Kasri GG 2D,</p>
                    <p>No.232, Gadingkasri, Klojen,</p>
                    <p>Kota Malang, Jawa Timur,</p>
                    <p>65115</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-[var(--color-footer-bottom)] dark:bg-[var(--color-footer-bottom-dark)] py-7 text-center">
        <p class="font-body text-10sm opacity-90">
            &copy; 2025 IKABRI UM. Developed by Divisi Huminfo
        </p>
    </div>
</footer>
