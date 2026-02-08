# 🏛️ IKABRI Web Platform

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css)
![Google Drive API](https://img.shields.io/badge/Google_Drive_API-Integration-4285F4?style=for-the-badge&logo=google-drive)

**Official Website of IKABRI (Ikatan Bocah Kediri) Universitas Negeri Malang.**

Platform ini dikembangkan untuk menjadi pusat informasi, branding, dan dokumentasi kegiatan organisasi mahasiswa daerah Kediri di Universitas Brawijaya. Website ini mengintegrasikan desain modern dengan manajemen aset berbasis Cloud.

## ✨ Key Features

### 🎨 UI/UX & Design
* **Modern Bento Grid Layout:** Tampilan galeri yang estetis dan responsif menggunakan grid asimetris.
* **Interactive Animations:** Transisi halus (*Hover Reveal*) menggunakan Tailwind CSS & Alpine.js.
* **Responsive Design:** Optimal di perangkat Desktop, Tablet, dan Mobile.

### 🚀 Backend & Integrations
* **Google Drive API V3 Integration:**
    * Mengambil foto dokumentasi langsung dari folder Google Drive organisasi.
    * Mendukung struktur folder bertingkat (*Division > Event > Day > Camera*).
    * *Server-side Caching* untuk performa loading yang cepat.
* **Google Maps API:** Peta interaktif dengan kustomisasi tema (*Dark Mode*) dan penanda lokasi (Kediri - Malang).
* **Dynamic Dropdown Navigation:** Navigasi section berbasis ID (*Anchor Links*).

### 🛠️ Tech Stack
* **Framework:** Laravel 12
* **Styling:** Tailwind CSS
* **Interactivity:** Alpine.js, Vanilla JS
* **API Client:** Google Client Library for PHP
* **Database:** MySQL

---

## ⚙️ Installation & Setup

Ikuti langkah ini untuk menjalankan project di local environment:

1.  **Clone Repository**
    ```bash
    git clone [https://github.com/AdhyDa/IKABRI.git](https://github.com/AdhyDa/IKABRI.git)
    cd IKABRI
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

4.  **Google API Configuration**
    Pastikan kamu memiliki file `google-credentials.json` (Service Account Key) dan letakkan di `storage/app/`.
    Lalu atur ID Folder di `.env`:
    ```env
    GDRIVE_BAKMIN_FOLDER=your_folder_id_here
    GDRIVE_PENGMAS_FOLDER=your_folder_id_here
    # dst...
    ```

5.  **Generate Key & Run**
    ```bash
    php artisan key:generate
    php artisan storage:link
    php artisan migrate
    npm run dev
    php artisan serve
    ```

---

## 📂 Folder Structure Highlight

* `app/Services/GoogleDriveService.php`: *Core logic* untuk fetching API dan Caching.
* `app/Http/Controllers/GalleryController.php`: *Endpoint* API untuk frontend.
* `resources/views/components/`: Komponen UI modular (Navbar, Footer, Gallery Grid).

---

## 🤝 Contribution

Kontribusi sangat terbuka untuk anggota IKABRI atau developer lain. Silakan buat *Pull Request* atau diskusikan ide fitur di *Issues*.

---

Made with ❤️ by **AdhyDa**
