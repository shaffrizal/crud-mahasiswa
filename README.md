# CRUD Mahasiswa Laravel 12

Aplikasi CRUD (Create, Read, Update, Delete) data mahasiswa menggunakan Laravel 12 dan MySQL.

## Fitur

- Menampilkan data mahasiswa
- Menambah data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa

## Teknologi

- Laravel 12
- PHP
- MySQL
- XAMPP

## Prosedur Instalasi

### 1. Clone Repository

git clone https://github.com/shaffrizal/crud-mahasiswa.git

### 2. Masuk Folder Project

cd crud-mahasiswa

### 3. Install Dependency

composer install

### 4. Copy File .env

copy .env.example .env

### 5. Generate Key

php artisan key:generate

### 6. Buat Database

db_mahasiswa

### 7. Jalankan Migrasi

php artisan migrate

### 8. Jalankan Server

php artisan serve

### 9. Buka Browser

http://127.0.0.1:8000/mahasiswa

## Author

Shaffrizal