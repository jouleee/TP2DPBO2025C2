# TP2DPBO2025C2

## Janji
Saya Julian Dwi Satrio dengan NIM 2300484 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi

Repositori ini berisi implementasi program berbasis Object-Oriented Programming (OOP) dalam berbagai bahasa pemrograman: C++, Java, Python, dan PHP. Program ini mengimplementasikan konsep **Multi-Level Inheritance** dengan tiga tingkat kelas:

1. **PetShop**: Kelas dasar yang berisi atribut umum terkait produk di toko hewan peliharaan.
2. **Aksesoris**: Kelas turunan dari `PetShop` yang menambahkan atribut khusus untuk aksesoris.
3. **Baju**: Kelas turunan dari `Aksesoris` yang berisi atribut khusus untuk produk baju hewan peliharaan.

## Diagram

![TP2DPBO Diagram drawio (1)](https://github.com/user-attachments/assets/8b43c823-d653-4125-af4d-160b8e7382b9)

## Desain Program

### **1. PetShop (Base Class)**

- `id` (string): ID produk
- `nama_produk` (string): Nama produk
- `harga_produk` (string): Harga produk
- `stok_produk` (string): Jumlah stok produk
- `foto_produk` (string): URL gambar produk

### **2. Aksesoris (Child of PetShop)**

- `jenis` (string): Jenis aksesoris
- `bahan` (string): Bahan aksesoris
- `warna` (string): Warna aksesoris

### **3. Baju (Child of Aksesoris)**

- `untuk` (string): Untuk jenis hewan tertentu
- `size` (string): Ukuran baju
- `merk` (string): Merek baju

## Implementasi Bahasa Pemrograman

Kode program tersedia dalam beberapa bahasa pemrograman:

- **C++** (`PetShop.cpp`)
- **Java** (`PetShop.java`)
- **Python** (`petshop.py`)
- **PHP** (`PetShop.php`)

## Alur Program

1. **Inisialisasi**: Program akan secara otomatis membuat 5 objek awal dari kelas `Baju` dengan data yang telah ditentukan.
2. **Menambahkan Objek**: Pengguna dapat menambahkan objek baru dengan memasukkan data yang diperlukan.
3. **Menampilkan Data**: Semua objek yang ada akan ditampilkan dalam bentuk tabel dinamis, yang menyesuaikan jumlah data yang tersimpan.

## Dokumentasi

1. **Cpp**

![image](https://github.com/user-attachments/assets/d51abf65-3d5a-4dac-8aab-f8bf295029d0)

2. **Java**

![image](https://github.com/user-attachments/assets/fe31f6c4-7c80-47ad-acb5-d44552d3de83)

3. **Python**

![image](https://github.com/user-attachments/assets/e9e954e2-14e1-4a4b-9b0d-63cd379cf886)


4. **PHP**

![Menampilkan Data](https://github.com/user-attachments/assets/a0b52d52-ae3b-44ac-ae9c-fc8a4c5bfb31)

![A2_Zapatista_Feature-e1387571361388](https://github.com/user-attachments/assets/fc5f76ff-8546-4fb0-8da3-800f0dd24a81)

