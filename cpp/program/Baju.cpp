#include <iostream>
#include <string>
#include "Aksesoris.cpp"

using namespace std;

class Baju : public Aksesoris{
    private:
        string untuk, size, merk;
    
    public:
        Baju(){
            this->untuk = "";
            this->size = "";
            this->merk = "";
        }

        Baju(string untuk, string size, string merk){
            this->untuk = untuk;
            this->size = size;
            this->merk = merk;
        }

        // Getter untuk 'untuk'
        string getUntuk() {
            return untuk;
        }

        // Setter untuk 'untuk'
        void setUntuk(string untuk) {
            this->untuk = untuk;
        }

        // Getter untuk 'size'
        string getSize() {
            return size;
        }

        // Setter untuk 'size'
        void setSize(string size) {
            this->size = size;
        }

        // Getter untuk 'merk'
        string getMerk() {
            return merk;
        }

        // Setter untuk 'merk'
        void setMerk(string merk) {
            this->merk = merk;
        }
        
        // destruktor,
        ~Baju() {
        }
};