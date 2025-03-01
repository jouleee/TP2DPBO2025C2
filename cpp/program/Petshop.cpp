#include <iostream>
#include <string>

using namespace std;

// kelas Petshop buat nyimpen data barang yang dijual di petshop 
class Petshop {
    private:
        // atribut private buat nyimpen id, nama, kategori, dan harga barang
        string id, nama, stok, harga;

    public:
        // konstruktor default, buat bikin objek tanpa diisi dulu
        Petshop() {
            this->id = "";
            this->nama = "";
            this->stok = "";
            this->harga = "";
        }

        // konstruktor pake parameter, langsung ngisi atribut saat objek dibuat
        Petshop(string id, string nama, string stok, string harga) {
            this->id = id;
            this->nama = nama;
            this->stok = stok;
            this->harga = harga;
        }

        // Getter buat ngambil id barang
        string get_id() {
            return this->id;
        }

        // Setter buat ngubah id barang
        void set_id(string id) {
            this->id = id;
        }

        // Getter buat ngambil nama barang
        string get_nama() {
            return this->nama;
        }

        // Setter buat ngubah nama barang
        void set_nama(string nama) {
            this->nama = nama;
        }

        // Getter buat ngambil kategori barang
        string get_stok() {
            return this->stok;
        }

        // Setter buat ngubah kategori barang
        void set_stok(string stok) {
            this->stok = stok;
        }

        // Getter buat ngambil harga barang
        string get_harga() {
            return this->harga;
        }

        // Setter buat ngubah harga barang
        void set_harga(string harga) {
            this->harga = harga;
        }

        // destruktor,
        ~Petshop() {
        }
};