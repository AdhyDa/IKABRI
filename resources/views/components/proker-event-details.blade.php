<section class="py-12 mb-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 relative">

            <!-- LEFT COLUMN: Daftar Isi (TOC) -->
            <div class="lg:col-span-4 lg:sticky lg:top-24 h-fit z-20"> <!-- z-20 to sit above sliding content -->
                <div class="bg-[#F5F3FF] dark:bg-[#1E293B] rounded-[10px] border-[1.5px] border-[#340958] dark:border-[#F59E0B] p-6 shadow-sm overflow-hidden">
                    <h3 class="text-xl font-bold font-heading text-[#0F172A] dark:text-[#F8FAFC] mb-6">Daftar Isi</h3>

                    <div class="flex flex-col gap-4">
                        <button onclick="switchDetailTab('pendahuluan')" id="btn-pendahuluan"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[3px] border-[#7C3AED] dark:border-[#431E82]">
                            Pendahuluan
                        </button>

                        <button onclick="switchDetailTab('pendaftaran')" id="btn-pendaftaran"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Pendaftaran & Biaya
                        </button>

                        <button onclick="switchDetailTab('timeline')" id="btn-timeline"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Timeline & Lokasi
                        </button>

                        <button onclick="switchDetailTab('pertandingan')" id="btn-pertandingan"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Peraturan Pertandingan
                        </button>

                        <button onclick="switchDetailTab('futsal')" id="btn-futsal"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Peraturan Dasar Futsal
                        </button>

                        <button onclick="switchDetailTab('pemain')" id="btn-pemain"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Ketentuan Pemain & Tim
                        </button>

                        <button onclick="switchDetailTab('supporter')" id="btn-supporter"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Aturan Supporter
                        </button>

                        <button onclick="switchDetailTab('hadiah')" id="btn-hadiah"
                                class="tab-detail-btn w-full text-left px-5 py-3 rounded-[10px] font-medium transition-all duration-300
                                        bg-[#F5F3FF] dark:bg-[#1E293B] text-[#0F172A] dark:text-[#F8FAFC]
                                        border-[2px] border-[#BABABA] dark:border-white/30 hover:border-[#7C3AED] dark:hover:border-[#431E82]">
                            Hadiah
                        </button>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Detail Content -->
            <div class="lg:col-span-8 relative z-10" id="detail-content-wrapper" style="perspective: 1000px;"> <!-- wrapper for animation context -->
                <div id="detail-card" class="bg-[#F5F3FF] dark:bg-[#1E293B] rounded-[10px] border-[1.5px] border-[#340958] dark:border-[#F59E0B] p-8 md:p-10 shadow-sm min-h-[600px] overflow-hidden">
                    <div id="content-inner" class="text-[#0F172A] dark:text-[#F8FAFC]">
                        <!-- Content Pendahuluan -->
                        <div id="content-pendahuluan" class="tab-content block">
                            <h4 class="text-xl font-bold font-heading mb-4">Nama Kegiatan</h4>
                            <p class="text-base md:text-lg leading-relaxed mb-8 opacity-90 text-justify">
                                Ikabri Futsal Cup 9 merupakan salah satu program kerja tahunan dari divisi Bakat Minat (Bakmin) IKABRI (Ikatan Bocah Kediri) Universitas Negeri Malang. Kegiatan ini dirancang khusus sebagai wadah pengembangan bakat minat dan bakat para pelajar SMA/SMK/MA se-Karesidenan Kediri terhadap olahraga futsal.
                            </p>

                            <h4 class="text-xl font-bold font-heading mb-4">Tema</h4>
                            <p class="text-base md:text-lg leading-relaxed mb-8 opacity-90 text-justify">
                                “Solidaritas Bersinar, Sportivitas Berkibar, Semangat Juang Berkobar”
                            </p>

                            <h4 class="text-xl font-bold font-heading mb-4">Tujuan</h4>
                            <p class="text-base md:text-lg leading-relaxed mb-4 opacity-90">
                                Kegiatan Ikabri Futsal Cup 9 bertujuan untuk:
                            </p>
                            <ol class="list-decimal list-outside pl-6 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Untuk mewadahi keterampilan yang dimiliki para pelajar SMA/SMK/MA se-Karesidenan Kediri dalam bentuk kegiatan yang positif.</li>
                                <li>Meningkatkan minat dan partisipasi para pelajar SMA/SMK/MA se-Karesidenan Kediri dalam olahraga futsal.</li>
                                <li>Mendorong semangat persaingan sehat dan etika olahraga di kalangan para pelajar SMA/SMK/MA seKaresidenan Kediri.</li>
                                <li>Memfasilitasi pertumbuhan pemain potensial untuk mencapai tingkat kompetisi yang lebih tinggi.</li>
                                <li>Mengasah kemampuan dan skill yang dimiliki para pelajar SMA/SMK/MA se-Karesidenan Kediri, baik ilmu ataupun praktiknya dibidang olahraga futsal.</li>
                            </ol>
                        </div>

                        <!-- Content Pendaftaran -->
                        <div id="content-pendaftaran" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-4">Informasi Pendaftaran</h4>
                            <ol class="list-decimal list-outside pl-6 space-y-4 text-base md:text-lg opacity-90 text-justify">
                                <li>
                                    Setiap tim wajib mengisi form pendaftaran pada link berikut
                                    <a href="https://bit.ly/PendaftaranIFC2026" class="text-[#7C3AED] dark:text-[#F59E0B] underline hover:opacity-80 transition-opacity" target="_blank">https://bit.ly/PendaftaranIFC2026</a>
                                </li>
                                <li>
                                    Setiap tim menyiapkan berkas yang nantinya dikumpulkan saat Technical Meeting, diantaranya:
                                    <ul class="list-disc list-outside pl-6 mt-2 space-y-2">
                                        <li>Fotokopi kartu pelajar masing-masing peserta 3 lembar.</li>
                                        <li>Surat rekomendasi dari sekolah 1 lembar.</li>
                                        <li>Foto formal terbaru ukuran 3x4 masing-masing peserta 2 lembar.</li>
                                        <li>
                                            Surat pernyataan pertanggungjawaban bermaterai Rp.10.000 yang sudah ditandatangani. Surat dapat diunduh pada link berikut:
                                            <a href="#" class="text-[#7C3AED] dark:text-[#F59E0B] underline hover:opacity-80 transition-opacity">Surat Pernyataan Pertanggungjawaban</a>
                                        </li>
                                        <li>Foto formal terbaru official ukuran 3x4 masing-masing official 2 lembar.</li>
                                    </ul>
                                </li>
                                <li>
                                    Setiap tim melakukan pembayaran sebesar <strong>Rp.400.000</strong>. Pembayaran bisa dilakukan melalui:
                                    <ul class="list-none pl-0 mt-2 space-y-1 font-medium">
                                        <li>- <strong>BRI</strong>: 627201042177531 a.n. Rahmadani Ritonga</li>
                                        <li>- <strong>BNI</strong>: 1888320794 a.n. Rahmadani Ritonga</li>
                                        <li>- <strong>Dana/Spay/Gopay</strong>: 085856515404 a.n. Rahmadani Ritonga</li>
                                    </ul>
                                </li>
                                <li>
                                    Setelah melakukan pembayaran, peserta diwajibkan melakukan konfirmasi via WhatsApp maksimal 1x24 jam dengan format: <strong>Nama Tim_Asal Sekolah_DP/Lunas</strong> (dengan melampirkan bukti hasil pembayaran) ke nomor
                                    <a href="https://wa.me/6285733887637" class="text-[#7C3AED] dark:text-[#F59E0B] underline hover:opacity-80 transition-opacity" target="_blank">wa.me/6285733887637</a> a.n. Aida.
                                </li>
                            </ol>
                        </div>

                        <!-- Content Timeline -->
                        <div id="content-timeline" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-4">Pelaksanaan Kegiatan</h4>
                            <div class="mb-8 bg-[#D6CEFF] dark:bg-black/20 p-6 rounded-xl border-l-4 border-[#7C3AED] dark:border-[#F59E0B]">
                                <div class="grid grid-cols-1 md:grid-cols-[150px_1fr] gap-y-3 text-base md:text-lg opacity-90">
                                    <div class="font-bold">Hari/Tanggal</div>
                                    <div>: Sabtu - Minggu / 10 - 11 Januari 2026</div>

                                    <div class="font-bold">Tempat</div>
                                    <div>: Gor Jayabaya Kediri</div>

                                    <div class="font-bold">Waktu</div>
                                    <div>
                                        <div>: Sabtu, 10 Januari 2026 (07.00 – 15.00 WIB)</div>
                                        <div class="mt-1">: Minggu, 11 Januari 2026 (07.00 – 15.30 WIB)</div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-xl font-bold font-heading mb-4">Technical Meeting</h4>
                            <div class="mb-4 bg-[#D6CEFF] dark:bg-black/20 p-6 rounded-xl border-l-4 border-[#7C3AED] dark:border-[#F59E0B]">
                                <div class="grid grid-cols-1 md:grid-cols-[150px_1fr] gap-y-3 text-base md:text-lg opacity-90">
                                    <div class="font-bold">Hari/Tanggal</div>
                                    <div>: Minggu, 4 Januari 2026</div>

                                    <div class="font-bold">Tempat</div>
                                    <div>: Gor Jayabaya Kediri</div>

                                    <div class="font-bold">Waktu</div>
                                    <div>: 08.30 WIB - Selesai</div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Pertandingan -->
                        <div id="content-pertandingan" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-4">Sistem Pertandingan</h4>
                            <ol class="list-decimal list-outside pl-6 mb-8 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Pertandingan dilaksanakan pada tanggal 10 dan 11 Januari mulai dari jam 08.00 WIB – selesai.</li>
                                <li>Pertandingan menggunakan sistem gugur. Peserta yang kalah dalam setiap pertandingan akan langsung didiskualifikasi dari pertandingan.</li>
                                <li>Waktu pertandingan selama 2 X 10 menit untuk penyisihan, dan 2 X 15 menit untuk semifinal dan final ditambah dengan waktu istirahat selama 5 menit.</li>
                            </ol>

                            <h4 class="text-xl font-bold font-heading mb-4">Tata Tertib Pertandingan</h4>
                            <ol class="list-decimal list-outside pl-6 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Setiap tim wajib mengikuti peraturan yang ditentukan panitia.</li>
                                <li>Setiap tim wajib hadir 30 menit sebelum pertandingan dimulai dan apabila dalam jangka waktu yang sudah ditentukan tidak hadir maka akan dianggap gugur atau lawan dianggap menang 3-0.</li>
                                <li>Bagi pemain yang tidak memenuhi syarat untuk bertanding, tidak dapat mengikuti pertandingan hingga pemain yang bersangkutan sudah memenuhi persyaratan.</li>
                                <li>Setiap pemain tidak boleh melakukan tindakan anarkis, berkata-kata kotor yang bisa menimbulkan kericuhan dan apabila pemain tersebut melakukan pelanggaran akan dikenakan sanksi yaitu: berupa kartu kuning atau kartu merah.</li>
                                <li>Setiap tim dan official tidak boleh melakukan tindakan yang anarkis selama pertandingan berlangsung yang dapat menimbulkan keributan, perkelahian dll. Apabila itu dilakukan maka panitia akan memberikan sanksi yang tegas berupa teguran, di beri kartu kuning/merah, ataupun di D.O.</li>
                                <li>Setiap tim wajib menggunakan kaos tim yang bernomor punggung dan setiap pemain menggunakan nomor punggung tetap, kaos kaki panjang, sepatu olahraga, dan skin/tebeng pengaman.</li>
                                <li>Setiap tim wajib menyerahkan uang jaminan sebesar 100.000 sebelum pertandingan dimulai.</li>
                                <li>Seluruh pemain dilarang menggunakan aksesoris (gelang, kalung, cincin, dll) yang dapat membahayakan diri sendiri maupun orang lain.</li>
                                <li>Pemain yang terkena kartu kuning akan dikenakan denda sebesar 25.000 dan pemain yang terkena kartu merah akan dikenakan denda sebesar 50.000.</li>
                                <li>Pemain yang dikenakan sanksi kartu merah (kartu kuning 2x) tidak boleh mengikuti 1x pertandingan selanjutnya.</li>
                                <li>Pemain yang sudah terdaftar di satu tim tidak boleh bermain di tim yang lain.</li>
                                <li>Setiap keputusan wasit dan panitia tidak boleh diganggu gugat, karena itu sudah final.</li>
                                <li>Peserta yang tidak setuju dengan keputusan wasit dan panitia boleh mengajukan protes secara tertulis selambat-lambatnya 15 menit setelah pertandingan selesai.</li>
                                <li>Protes bisa ditanggapi apabila peserta sudah memenuhi syarat tim yang mengajukan protes dan menandatangani surat pengajuan yang sudah ditentukan oleh panitia, serta membayar uang protes sebesar 500.000.</li>
                                <li>Keputusan panitia sewaktu-waktu bisa berubah, sesuai dengan kondisi apabila dianggap perlu.</li>
                            </ol>
                        </div>

                        <!-- Content Dasar Futsal -->
                        <div id="content-futsal" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-4">Peraturan Dasar Futsal</h4>
                            <ol class="list-decimal list-outside pl-6 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Jumlah minimal pemain dalam 1 tim saat <em>kick off</em> adalah 4 orang, apabila kurang dari hal tersebut maka dianggap <em>walk out</em>.</li>
                                <li>Setiap tim berhak mengajukan <em>time out</em> kepada wasit dengan durasi waktu 1 menit dalam 1 babak, <em>time out</em> hanya boleh diminta 1x per babak dengan ketentuan bola harus dikuasai timnya sendiri.</li>
                                <li>Pergantian pemain hanya bisa dilakukan di area pergantian pemain tanpa harus meminta persetujuan wasit kecuali penjaga gawang dan asalkan melewati garis yang sudah ditentukan.</li>
                                <li>Sistem pergantian pemain yang ada di dalam peraturan futsal menggunakan sistem bebas tanpa harus meminta instruksi dari wasit.</li>
                                <li><em>Kick off</em> dilakukan dengan cara sentuhan langsung atau tendangan langsung ke gawang lawan, ketentuan tersebut berlaku di setiap <em>kick off</em>.</li>
                                <li>Dalam keadaan bola <em>out</em>, tendangan ke dalam harus di lakukan di mana posisi bola tepat di atas garis dan tidak boleh melebihi waktu 4 detik dan posisi kaki penendang harus ada di luar garis.</li>
                                <li>Penjaga gawang hanya diperkenankan memegang bola selama 4 detik, lebih dari itu akan dikenakan sanksi tendangan bebas tidak langsung dari luar kotak penalti.</li>
                                <li>Penjaga gawang tidak diperkenankan menangkap bola operan dari rekan setimnya, dan apabila itu dilakukan maka akan dikenakan sanksi tendangan bebas tidak langsung di luar kotak penalti.</li>
                                <li>Setiap pelanggaran akan dikenakan sanksi tendangan bebas langsung maupun tidak langsung yang ditentukan oleh wasit yang sesuai dengan keadaan di lapangan. Apabila pelanggaran mencapai 6 pelanggaran maka akan dikenakan hukuman tendangan penalti dari titik ke 2, hukuman ini hanya berlaku dalam 1 babak.</li>
                                <li>Pemain dilarang keras melakukan <em>body charge</em> dan <em>slide tackling</em> ke arah lawan, apabila terjadi hal tersebut wasit akan diberikan sanksi berupa kartu kuning atau merah.</li>
                                <li>Apabila salah satu pemain mendapatkan kartu merah, maka pemain pengganti tidak bisa langsung menggantikan pemain tersebut, harus menunggu waktu selama 2 menit untuk memasukkan pemain pengganti, kecuali terjadi goal.</li>
                                <li>Apabila dalam jangka waktu yang sudah di tentukan sekiranya masih imbang maka akan langsung dilanjutkan dengan adu penalti dan apabila skor masih tetap imbang maka akan langsung dilanjutkan dengan tos atau koin.</li>
                            </ol>
                        </div>

                        <!-- Content Ketentuan Pemain -->
                        <div id="content-pemain" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-4">Peserta Pertandingan</h4>
                            <ol class="list-decimal list-outside pl-6 mb-8 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Pemain yang terdaftar merupakan siswa yang masih aktif di salah satu lembaga yang ada di Karesidenan Kediri setingkat SMA/SMK sederajat.</li>
                                <li>Setiap tim terdiri dari 10 orang (5 pemain inti dan 5 pemain cadangan), ditambah 1 official dan 1 manager.</li>
                                <li>Pemain yang bertanding hanya pemain yang sudah terdaftar dalam tim di saat <em>technical meeting</em>.</li>
                                <li>Pemain yang telah terdaftar atau bermain di salah satu tim tidak boleh bermain di tim lain.</li>
                            </ol>

                            <h4 class="text-xl font-bold font-heading mb-4">Ketentuan Khusus</h4>
                            <ol class="list-decimal list-outside pl-6 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Setiap peserta wajib menjunjung tinggi sportifitas.</li>
                                <li>Semua peserta wajib menghormati wasit, panitia, dan lawan yang bertanding.</li>
                                <li>Semua keputusan wasit bersifat mutlak dan tidak dapat diganggu gugat.</li>
                            </ol>
                        </div>

                        <!-- Content Aturan Supporter -->
                        <div id="content-supporter" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-4">Peraturan Suporter</h4>
                            <ol class="list-decimal list-outside pl-6 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Wajib menunjukkan kartu identitas siswa ketika hendak membeli tiket pertandingan.</li>
                                <li>Wajib memarkirkan kendaraan di tempat yang telah disediakan.</li>
                                <li>Wajib menunjukkan tiket pertandingan sebelum memasuki area <em>venue</em>.</li>
                                <li>Tiket hanya berlaku untuk satu orang dan satu hari pertandingan.</li>
                                <li>Wajib mematuhi peraturan dan larangan dari panitia.</li>
                                <li>Wajib menjaga barang bawaan milik pribadi.</li>
                                <li>Diharuskan memiliki satu koordinator.</li>
                                <li>Wajib menjaga kebersihan dan ketertiban di area gedung pertandingan.</li>
                                <li>Wajib melakukan cek barang bawaan sebelum memasuki area pertandingan.</li>
                                <li>Wajib membuang sampah pada tempatnya.</li>
                                <li>Wajib menjaga sportifitas antar suporter agar tercipta suasana yang aman dan nyaman.</li>
                                <li>Wajib berkelakuan baik dan menjaga sikap sebelum ataupun sesudah pertandingan.</li>
                                <li>Hanya diperbolehkan keluar masuk GOR maksimal 2 kali.</li>
                                <li>Suporter tidak diperbolehkan masuk melalui pintu peserta atau pemain pertandingan.</li>
                                <li>Tidak melemparkan benda apapun ke dalam lapangan yang dapat mengganggu jalannya pertandingan dan ikut menjaga keamanan serta ketertiban selama berlangsungnya pertandingan.</li>
                                <li>Supporter tidak diizinkan untuk melakukan konvoi, baik ketika sebelum atau setelah pertandingan dimulai.</li>
                                <li>Apabila tim yang didukung memenangkan pertandingan, wajib bagi para suporter untuk tidak melakukan konvoi dalam rangka merayakan kemenangan.</li>
                                <li>Saling mengingatkan satu sama lain apabila mendapati sebuah kesalahan.</li>
                            </ol>
                        </div>

                        <!-- Content Hadiah -->
                        <div id="content-hadiah" class="tab-content hidden">
                            <h4 class="text-xl font-bold font-heading mb-6">Total Hadiah Jutaan Rupiah</h4>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <!-- Juara List -->
                                <div class="bg-[#D6CEFF] dark:bg-black/20 p-6 rounded-xl border-l-4 border-[#7C3AED] dark:border-[#F59E0B]">
                                    <h5 class="font-bold text-lg mb-4 text-[#7C3AED] dark:text-[#F59E0B]">Juara Utama</h5>
                                    <ul class="space-y-4 opacity-90">
                                        <li>
                                            <span class="font-bold block text-lg">Juara 1</span>
                                            <span class="text-sm md:text-base">Uang pembinaan + Trophy + Piala bergilir + Sertifikat</span>
                                        </li>
                                        <li>
                                            <span class="font-bold block text-lg">Juara 2</span>
                                            <span class="text-sm md:text-base">Uang pembinaan + Trophy + Sertifikat</span>
                                        </li>
                                        <li>
                                            <span class="font-bold block text-lg">Juara 3</span>
                                            <span class="text-sm md:text-base">Uang pembinaan + Trophy + Sertifikat</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Individual & Supporter List -->
                                <div class="bg-[#D6CEFF] dark:bg-black/20 p-6 rounded-xl border-l-4 border-[#7C3AED] dark:border-[#F59E0B]">
                                    <h5 class="font-bold text-lg mb-4 text-[#7C3AED] dark:text-[#F59E0B]">Penghargaan Khusus</h5>
                                    <ul class="space-y-4 opacity-90">
                                        <li>
                                            <span class="font-bold block text-lg">Top Score</span>
                                            <span class="text-sm md:text-base">Uang pembinaan + Sertifikat</span>
                                        </li>
                                        <li>
                                            <span class="font-bold block text-lg">Best Player</span>
                                            <span class="text-sm md:text-base">Uang pembinaan + Sertifikat</span>
                                        </li>
                                        <li>
                                            <span class="font-bold block text-lg">Best Suporter</span>
                                            <span class="text-sm md:text-base">Uang pembinaan + Sertifikat</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <h4 class="text-xl font-bold font-heading mb-4">Kriteria Penilaian Best Suporter</h4>
                            <ol class="list-decimal list-outside pl-6 space-y-2 text-base md:text-lg opacity-90 text-justify">
                                <li>Koreografi</li>
                                <li>Kekompakan</li>
                                <li>Semangat</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script>
        let currentTabId = 'pendahuluan';
        let isAnimating = false;

        function switchDetailTab(newTabId) {
            if (currentTabId === newTabId || isAnimating) return;
            isAnimating = true;

            // 1. Update Buttons State
            const allBtns = document.querySelectorAll('.tab-detail-btn');
            allBtns.forEach(btn => {
                btn.classList.remove('border-[3px]', 'border-[#7C3AED]', 'dark:border-[#431E82]');
                btn.classList.add('border-[2px]', 'border-[#BABABA]', 'dark:border-white/30');
            });

            const activeBtn = document.getElementById('btn-' + newTabId);
            if (activeBtn) {
                activeBtn.classList.remove('border-[2px]', 'border-[#BABABA]', 'dark:border-white/30');
                activeBtn.classList.add('border-[3px]', 'border-[#7C3AED]', 'dark:border-[#431E82]');
            }

            // 2. Animate Content Slide with GSAP Safety Check
            const contentWrapper = document.getElementById('content-inner');
            const oldContent = document.getElementById('content-' + currentTabId);
            const newContent = document.getElementById('content-' + newTabId);

            if (typeof gsap !== 'undefined') {
                const tl = gsap.timeline();

                tl.to(contentWrapper, {
                    duration: 0.4,
                    x: -50,
                    opacity: 0,
                    ease: "power2.in",
                    onComplete: () => {
                        if (oldContent) {
                            oldContent.classList.add('hidden');
                            oldContent.classList.remove('block');
                        }

                        if (newContent) {
                            newContent.classList.remove('hidden');
                            newContent.classList.add('block');
                        }

                        gsap.set(contentWrapper, { x: 50 });
                    }
                })
                .to(contentWrapper, {
                    duration: 0.4,
                    x: 0,
                    opacity: 1,
                    ease: "power2.out",
                    onComplete: () => {
                        currentTabId = newTabId;
                        isAnimating = false;
                    }
                });
            } else {
                // Fallback if GSAP is missing
                if (oldContent) {
                    oldContent.classList.add('hidden');
                    oldContent.classList.remove('block');
                }

                if (newContent) {
                    newContent.classList.remove('hidden');
                    newContent.classList.add('block');
                }
                currentTabId = newTabId;
                isAnimating = false;
            }
        }
    </script>
</section>
