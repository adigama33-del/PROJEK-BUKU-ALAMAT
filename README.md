# Aplikasi Manajemen Buku Alamat (Address Book)

## Deskripsi Singkat
Aplikasi **Buku Alamat** adalah sistem informasi sederhana berbasis web yang dirancang untuk membantu pengguna mengelola data kontak pribadi secara digital. Aplikasi ini menerapkan konsep **CRUD** (Create, Read, Update, Delete) menggunakan bahasa pemrograman PHP (Native) dengan driver database PDO untuk keamanan dan fleksibilitas.

Antarmuka pengguna (UI) dibangun dengan desain modern dan responsif (Mobile Friendly) menggunakan CSS murni (tanpa framework CSS eksternal), memprioritaskan pengalaman pengguna yang bersih dan intuitif.

## Daftar Anggota Tim
Berikut adalah identitas pengembang aplikasi ini:


| Nama Lengkap | NIM | Username GitHub | Peran / Tugas |
| :--- | :--- | :--- | :--- |
| **I Gede Wisnu Adigama** | **240030293** | **adigama33-del** | Mengatur pengerjaan projek, membuat fitur update dan mendesain dan merapikan style css|
| *Wayan Devanindra Kumara Yasa Putra Joker* | *240030200* | *jokerwayandevanindrakumarayasa-hub* | *Mengkoneksikan database, membuat query dan menyiapkan kelas kontak diawal* |
| *I Made Bayu Raditya* | *240030302* | *bayuradityaa* | *Membuat tampilan read data pada halaman index dan membuat fitur insert data dengan menambahkan file tambahKontak dan saveKontak* |
| *Komang Endik Sastrawan* | *240030200* | *endksstrwn* | *Menambahkan fitur pencarian data dan fungsi delete dengan menambahkan file deleteKontak* |

__* *note:*__ *Pengerjaan projek dicommit melalui satu laptop dan satu akun github saja, namun pengerjaan tugas masing-masing dilakukan di laptop/desktop masing-masing yang kemudian ditransfer ke akun github utama untuk dicommit. Ini dikarenakan kami tidak tahu sebelumnya kalau harus ada riwayat commit untuk masing-masing anggota.*

## Lingkungan Pengembangan
Alat dan teknologi yang digunakan dalam pengembangan proyek ini:

* **Bahasa Pemrograman:** PHP-8.4.13, HTML5, CSS3.
* **Database:** MySQL.
* **Web Server:** PHP Built-in Web Server.
* **Database Driver:** PHP PDO (PHP Data Objects).
* **Text Editor / IDE:** Visual Studio Code.
* **Browser:** Google Chrome, Microsoft Edge.

## Hasil Pengembangan (Fitur Utama)
Implementasi fitur berdasarkan modul yang telah dikembangkan:

1.  **Dashboard Kontak (Read)**
    * Menampilkan seluruh daftar kontak dalam format *Grid Card* yang responsif.
    * Menampilkan detail nama, nomor telepon, email, dan alamat.

2.  **Pencarian (Search)**
    * Fitur pencarian real-time (server-side) untuk mencari kontak berdasarkan nama, nomor telepon, atau email.

3.  **Tambah Kontak (Create)**
    * Formulir validasi untuk menambahkan data kontak baru.
    * Penyimpanan data aman menggunakan *Prepared Statements* untuk mencegah SQL Injection.

4.  **Edit Kontak (Update)**
    * Modul untuk memperbarui informasi kontak yang sudah ada.
    * Form otomatis terisi dengan data lama sebelum diedit.

5.  **Hapus Kontak (Delete)**
    * Fitur untuk menghapus kontak secara permanen dengan konfirmasi *pop-up* (JavaScript confirm) untuk mencegah ketidaksengajaan.

6.  **Desain Modern (UI/UX)**
    * Menggunakan variabel CSS (`:root`) untuk konsistensi tema warna (Indigo Theme).
    * Layout responsif yang menyesuaikan tampilan di Desktop dan Mobile.

## Struktur Folder
Berikut adalah susunan file dan folder dalam proyek ini:

```text
/projek-buku-alamat
│
├── /class
│   ├── Contacts.php       # Model: Berisi logika query CRUD tabel contacts
│   └── Database.php       # Koneksi: Mengatur koneksi PDO ke database
│
├── /css
│   └── style.css          # Styling: Desain visual aplikasi (Colors, Layout, Responsive)
│
├── /inc
│   └── config.php         # Konfigurasi: Autoloader class & kredensial database
│
├── index.php              # Halaman Utama: Menampilkan list kontak & hasil pencarian
├── tambahKontak.php       # View: Form tambah data
├── editKontak.php         # View: Form edit data
├── saveKontak.php         # Controller: Memproses input form (Simpan & Update)
├── deleteKontak.php       # Controller: Memproses penghapusan data
├── schema.sql             # Database: Script SQL untuk membuat database & tabel
└── README.md              # Dokumentasi proyek
```

## Cara Instalasi dan Menjalankan Aplikasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal (Localhost):

1. **Persiapan Database**
* Buka aplikasi manajemen database (MySQL).
* Impor file `schema.sql` yang disertakan dalam folder proyek untuk membuat database `buku_alamat` yang telah disiapkan beserta data dummy awal.


2. **Konfigurasi Koneksi**
* Buka file `inc/config.php`.
* Sesuaikan konfigurasi database dengan server lokal Anda:
```php
const DB_HOST = 'localhost';
const DB_USER = 'root';       // Default biasanya 'root'
const DB_PASS = '';           // Sesuaikan dengan password MySQL yang kamu buat sebelumnya
const DB_NAME = 'buku_alamat';

```




3. **Penempatan File**
* Salin folder proyek `PROJEK-BUKU-ALAMAT` ke folder yang anda inginkan.


4. **Menjalankan Aplikasi**
* Buka aplikasi Visual Studio Code
* Pastikan directory pada terminal mengarahkan ke projek ini.
* Jalankan PHP Built-in Web Server dengan mengketik `php -S localhost:8000` pada terminal.
