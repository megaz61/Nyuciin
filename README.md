# Nyuciin - Platform Booking Cuci Motor Online

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
    <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
    <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
    <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
</p>
<p align="center">
    <img src="https://drive.google.com/file/d/1FTMsGkdTRMzTDwSYEy1dTYChYM8gIR8v" alt="Tampilan Beranda Nyuciin" width="600"/>
</p>
## Tentang Nyuciin

Nyuciin adalah platform web yang dirancang untuk memudahkan pengguna dalam booking layanan cuci kendaraan, khususnya motor. Website ini dibuat sebagai bagian dari proyek kelompok selama masa kuliah, dengan fokus pada pengalaman pengguna yang mudah dan intuitif.

### Fitur Utama

- **📅 Booking Online**: Sistem pemesanan layanan cuci motor secara online yang mudah dan cepat
- **⭐ Rating & Review**: Sistem rating dan ulasan untuk tempat cuci motor berdasarkan pengalaman pengguna
- **👤 Manajemen Pengguna**: Sistem autentikasi dan profil pengguna
- **💼 Dashboard Admin**: Panel administrasi untuk mengelola layanan dan pesanan

### Teknologi yang Digunakan

- **Backend**: Laravel Framework
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Authentication**: Laravel Sanctum/Auth

## Instalasi

### Persyaratan Sistem

Pastikan sistem Anda memiliki:
- PHP >= 8.0
- Composer
- MySQL >= 5.7
- Node.js & NPM
- Git

### Langkah-langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/megaz61/Nyuciin.git
   cd Nyuciin
   ```

2. **Install Dependencies**
   ```bash
   # Install PHP dependencies
   composer install
   
   # Install JavaScript dependencies
   npm install
   ```

3. **Database Setup**
   
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nyuciin
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Jalankan Migrasi Database**
   ```bash
   # Jalankan migrasi
   php artisan migrate
   
   # Jalankan seeder (optional)
   php artisan db:seed
   ```

5. **Build Assets**
   ```bash
   # Compile assets
   npm run build
   # atau untuk development
   npm run dev
   ```

6. **Jalankan Aplikasi**
   ```bash
   # Start Laravel development server
   php artisan serve
   ```

   Website akan tersedia di `http://localhost:8000`

### Instalasi dengan Docker (Opsional)

Jika Anda menggunakan Docker:

```bash
# Build dan jalankan containers
docker-compose up -d

# Install dependencies
docker-compose exec app composer install

# Jalankan migrasi
docker-compose exec app php artisan migrate
```

## Penggunaan

### Untuk Pengguna
1. **Registrasi/Login**: Buat akun baru atau login dengan akun yang sudah ada
2. **Cari Tempat Cuci**: Cari Tempat Cuci Bedasarkan Nama Tempat Cuci 
3. **Booking Layanan**: Pilih tempat cuci dan waktu yang diinginkan
4. **Rating & Review**: Berikan rating dan ulasan setelah menggunakan layanan

### Untuk Admin
1. **Dashboard Admin**: Akses panel admin untuk mengelola sistem
2. **Manajemen Tempat Cuci**: Tambah, edit, atau hapus tempat cuci motor
3. **Manajemen Booking**: Kelola pesanan dan jadwal layanan
4. **Laporan**: Lihat statistik dan laporan penggunaan

## Kontribusi

Proyek ini adalah hasil kerja tim dengan pembagian tugas:
- **Full-stack Developer**: Pengembangan backend dan membantu pengembangan frontend
- **UI/UX Design**: Desain antarmuka pengguna
- **Front-End Developer**: Pengembangan Desain Website
- **Testing**: Pengujian sistem dan fitur

## Struktur Proyek

```
Nyuciin/
├── app/                 # Aplikasi Laravel
├── database/           # Migrasi dan seeder
├── public/             # Assets publik, CSS, JS
├── resources/          # Views
├── routes/             # Routing aplikasi
├── storage/            # File storage
├── tests/              # Unit tests
└── vendor/             # Dependencies
```

## Lisensi

Proyek ini dibuat untuk tujuan edukasi dan pembelajaran. Silakan gunakan sebagai referensi untuk proyek serupa.

## Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi:
- GitHub: [@megaz61](https://github.com/megaz61)
- Email: egawijaya355@gmail.com

---

⭐ Jika proyek ini membantu Anda, jangan lupa untuk memberikan star!
