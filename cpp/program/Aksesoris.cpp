#include <iostream>
#include <string>
#include "Petshop.cpp"

using namespace std;

class Aksesoris : public Petshop{
    private:
        string jenis, bahan, warna;
    
    public:
        Aksesoris(){
            this->jenis = "";
            this->bahan = "";
            this->warna = "";
        }

        Aksesoris(string jenis, string bahan, string warna){
            this->jenis = jenis;
            this->bahan = bahan;
            this->warna = warna;
        }

        // Getter untuk jenis
        string getJenis() {
            return jenis;
        }

        // Setter untuk jenis
        void setJenis(string jenis) {
            this->jenis = jenis;
        }

        // Getter untuk bahan
        string getBahan() {
            return bahan;
        }

        // Setter untuk bahan
        void setBahan(string bahan) {
            this->bahan = bahan;
        }

        // Getter untuk warna
        string getWarna() {
            return warna;
        }

        // Setter untuk warna
        void setWarna(string warna) {
            this->warna = warna;
        }

        // destruktor,
        ~Aksesoris() {
        }
};