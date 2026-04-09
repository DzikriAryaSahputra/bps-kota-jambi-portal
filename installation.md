# Panduan Instalasi Sempol

Dokumen ini menjelaskan proses instalasi aplikasi Simpol yang dibagi ke dalam dua prosedur utama: Mode Production dan Mode Development.

## Perbedaan Utama Instalasi

Secara konseptual, berikut adalah perbedaan paling mendasar antara kedua mode tersebut:

| Komponen | Mode Production (Rilis Publik) | Mode Development (Lokal) |
| --- | --- | --- |
| **Composer** | `composer install --no-dev` | `composer install` |
| **File .env (APP_ENV)** | `production` | `local` |
| **File .env (APP_DEBUG)** | `false` | `true` |
| **Migrasi Database** | `php artisan migrate --force` | `php artisan migrate` |
| **Kompilasi Aset Frontend**| `npm run build` | `npm run dev` |
| **Optimasi Server Akhir** | Perlu (Cache config, route, view) | Tidak disarankan menggunakan cache |

## 1. Instalasi Mode Production

Prosedur ini digunakan ketika aplikasi hendak diunggah dan dirilis di server publik yang diakses oleh pengguna umum.

1. **Siapkan File Proyek**
   Letakkan direktori *source code* aplikasi pada *document root* web server (misalnya di direktori `/var/www/html/simpol`).

2. **Instalasi Dependensi PHP**
   Gunakan parameter `--no-dev` agar hanya library tingkat *production* yang diinstall, guna meminimalkan ukuran direktori sistem.
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Instalasi Dependensi Frontend**
   ```bash
   npm install
   ```

4. **Konfigurasi Lingkungan (.env)**
   Silakan duplikasi file bawaan:
   ```bash
   cp .env.example .env
   ```
   Sesuaikan bagian terkait keamanan (`APP_ENV` dan `APP_DEBUG`) beserta otentikasi database pada file `.env` sebagai berikut:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_production
   DB_USERNAME=user_database
   DB_PASSWORD=password_database
   ```
   *Catatan: Sangat dilarang mengubah variabel `APP_DEBUG` menjadi true pada fase production.*

5. **Pembuatan Kunci Aplikasi Sistem**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi Database dan Implementasi Data Bawaan**
   Eksekusi perintah di bawah ini agar sistem membuat entitas tabel otomatis. Parameter `--force` dibutuhkan di env production.
   ```bash
   php artisan migrate --seed --force
   ```

7. **Aktivasi Sistem Media Internal (Storage Link)**
   ```bash
   php artisan storage:link
   ```

8. **Kompilasi Aset Final**
   Lakukan bundling *styling* dan *javascript* sehingga berkas siap dipergunakan oleh web tanpa adanya server Vite pembantu.
   ```bash
   npm run build
   ```

9. **Optimasi Cache Sistem Server**
   Mempercepat rute kerja framework.
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```


## 2. Instalasi Mode Development

Prosedur ini berlaku jika Anda hanya ingin menguji, memodifikasi, dan menjalankan aplikasi aplikasi tingkat lokal pada komputer pribadi.

1. **Buka Terminal / Command Prompt**
   Pindahkan navigasi *path* ke dalam direktori proyek Simpol.

2. **Instalasi Semua Dependensi PHP**
   ```bash
   composer install
   ```

3. **Instalasi Semua Dependensi Frontend**
   ```bash
   npm install
   ```

4. **Konfigurasi Lingkungan (.env)**
   Duplikasi kerangka:
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` dan gunakan konfigurasi mode terbuka berikut. Masukkan juga rincian *testing* MySQL lokal.
   ```env
   APP_ENV=local
   APP_DEBUG=true
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=simpol_tes_lokal
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Pembuatan Kunci Keamanan Sementara**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi dan Injeksi Data Utama**
   ```bash
   php artisan migrate --seed
   ```

7. **Tautan Penyimpanan Upload Publik**
   ```bash
   php artisan storage:link
   ```

8. **Aktifkan Pemantauan Asset Secara Langsung (Live Reload)**
   Perintah ini akan menyalakan sistem kompilasi berjalan. Terminal ini wajib tetap dibiarkan menyala.
   ```bash
   npm run dev
   ```

9. **Jalankan Aplikasi Web Lokal**
   Buka jendela *(tab)* terminal yang baru dan ketik.
   ```bash
   php artisan serve
   ```
   Sistem telah berjalan sepenuhnya. Aplikasi bisa dibuka lewat peramban pada alamat target `http://127.0.0.1:8000`.


## 3. Kredensial Akses Administrator Bawaan

Saat eksekusi parameter `--seed` dilakukan pada instalasi, sistem memuat `AdminSeeder` yang secara instan membuka akses kontrol administratif awal tanpa melakukan registrasi manual. 

Data untuk mengakses panel *dashboard* adalah sebagai berikut:
- Direktori Login: `/admin/login` (Buka melalui `http://127.0.0.1:8000/admin/login` di komputer lokal)
- Username: `admin`
- Password: `admin123`

Peringatan: Administrator diwajibkan untuk merevisi dan memperbarui sandi standar ini langsung dari *Database* pada rilis tipe pertama kali untuk meminimalisasi resiko keamanan eksploitasi oleh pihak asing.
