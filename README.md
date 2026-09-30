# Aplikasi Pengelolaan Data Peserta Sertifikasi

Teknologi: Laravel 12, PHP 8.2+, MySQL, Blade, Bootstrap 5.3.3 (CDN jsDelivr, lisensi MIT).

## Instalasi
1. Install Laragon/XAMPP (PHP 8.2+) dan Composer. Jalankan Apache dan MySQL.
2. Ekstrak project, buka terminal di folder project.
3. `composer install`
4. `copy .env.example .env`
5. `php artisan key:generate`
6. Buat database `db_sertifikasi` (atau import `database/db_sertifikasi.sql`).
7. Sesuaikan DB_* di file `.env` bila perlu.
8. `php artisan migrate --seed`
9. `php artisan serve`, lalu buka http://127.0.0.1:8000

## Akun dummy
- Email: admin@example.com
- Password: admin123