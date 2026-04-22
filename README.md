# CRUD Mahasiswa Laravel 12

## Deskripsi Project

CRUD Mahasiswa Laravel 12 adalah aplikasi berbasis web yang dibuat menggunakan framework Laravel 12 dan database MySQL.

Project ini berfungsi untuk mengelola data mahasiswa dengan fitur:

- Menampilkan data mahasiswa
- Menambah data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa

Project ini dibuat sebagai tugas pembelajaran Framework Laravel.

---

## Fitur Utama

✅ Create (Tambah Data)  
✅ Read (Menampilkan Data)  
✅ Update (Edit Data)  
✅ Delete (Hapus Data)

---

## Teknologi yang Digunakan

- Laravel 12
- PHP
- MySQL
- XAMPP
- Blade Template
- HTML / CSS / Bootstrap

---

## Struktur Database

Nama Database:

db_mahasiswa

Nama Tabel:

mahasiswas

Field:

- id
- nama
- nim
- jurusan
- created_at
- updated_at

---

## Prosedur Instalasi

### 1. Clone Repository

git clone https://github.com/shaffrizal/crud-mahasiswa.git

### 2. Masuk Folder Project

cd crud-mahasiswa

### 3. Install Dependency

composer install

### 4. Copy File Environment

copy .env.example .env

### 5. Generate Key

php artisan key:generate

### 6. Buat Database

db_mahasiswa

### 7. Atur File .env

DB_DATABASE=db_mahasiswa  
DB_USERNAME=root  
DB_PASSWORD=

### 8. Jalankan Migrasi

php artisan migrate

### 9. Jalankan Server

php artisan serve

### 10. Buka Browser

http://127.0.0.1:8000/mahasiswa

---

## Developer

Nama : Shaffrizal  
NIM : 240180139  
Kelas : A4  
GitHub : https://github.com/shaffrizal

---

## Penutup

Project ini dibuat untuk memenuhi tugas mata kuliah pemrograman web / framework dan sebagai latihan memahami konsep CRUD menggunakan Laravel 12.