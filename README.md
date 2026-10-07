# TugasWeb-P9-LaravelSetup

Tugas Rutin 9: Setup Laravel. Berisi 3 route custom (`/`, `/about`, `/contact`) yang menampilkan view Blade dengan data dinamis, ditambah bonus styling Tailwind CDN dan route parameter `/hello/{nama}`.

## Persyaratan
- PHP 8.2 atau lebih baru (sudah termasuk di XAMPP versi terbaru)
- Composer
- MySQL (XAMPP) dan phpMyAdmin

## Langkah instalasi

1. **Install Composer** dari getcomposer.org, lalu cek dengan `composer -V`.
2. **Buat project:**
   ```bash
   composer create-project laravel/laravel:^12.0 TugasWeb-P9-LaravelSetup
   cd TugasWeb-P9-LaravelSetup
   ```
3. **Buat database** `tugasweb_p9` di phpMyAdmin (collation `utf8mb4_unicode_ci`).
4. **Atur file `.env`:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugasweb_p9
   DB_USERNAME=root
   DB_PASSWORD=
   ```
5. **Jalankan migrasi** untuk memastikan koneksi database berhasil:
   ```bash
   php artisan migrate
   ```
6. **Generate controller dan model:**
   ```bash
   php artisan make:controller PageController
   php artisan make:model Post -m
   ```
7. **Jalankan server:**
   ```bash
   php artisan serve
   ```
   Buka `http://127.0.0.1:8000`.

## Route

| URL | Keterangan |
|---|---|
| `/` | Beranda, daftar fitur dari array di route |
| `/about` | Profil, array dikirim dari route |
| `/contact` | Kontak, ditangani `PageController` |
| `/hello/{nama}` | Bonus: route parameter |

## Struktur folder

| Folder / file | Fungsi |
|---|---|
| `app/Http/Controllers/` | Controller, tempat logika yang menangani request |
| `app/Models/` | Model Eloquent, representasi tabel database |
| `routes/web.php` | Daftar route untuk halaman web |
| `resources/views/` | Template Blade (tampilan) |
| `database/migrations/` | Skema tabel database |
| `public/` | Titik masuk aplikasi (`index.php`) dan aset publik |
| `config/` | File konfigurasi aplikasi |
| `.env` | Konfigurasi lingkungan (database, dll), tidak diupload ke Git |
| `vendor/` | Library hasil Composer, tidak diupload ke Git |

## Screenshot

- Welcome page bawaan Laravel: `screenshots/welcome.png`
- Halaman `/`, `/about`, `/contact`: `screenshots/`
