#include <bits/stdc++.h> // Mengimpor semua library standar
#include "Baju.cpp" 

using namespace std;

void cetakTabel(vector<Baju>& v) {
    // Data header
    string header[] = {"ID", "Nama", "Stok", "Harga", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk"};

    // Menyimpan lebar maksimal setiap kolom
    int lebar[10] = {0};

    // Hitung panjang maksimal tiap kolom (termasuk header)
    for (int i = 0; i < 10; i++) {
        lebar[i] = header[i].length();
    }

    for (int i = 0; i < v.size(); i++) {
        lebar[0] = max(lebar[0], (int)v[i].get_id().length());
        lebar[1] = max(lebar[1], (int)v[i].get_nama().length());
        lebar[2] = max(lebar[2], (int)v[i].get_stok().length());
        lebar[3] = max(lebar[3], (int)v[i].get_harga().length());
        lebar[4] = max(lebar[4], (int)v[i].getJenis().length());
        lebar[5] = max(lebar[5], (int)v[i].getBahan().length());
        lebar[6] = max(lebar[6], (int)v[i].getWarna().length());
        lebar[7] = max(lebar[7], (int)v[i].getUntuk().length());
        lebar[8] = max(lebar[8], (int)v[i].getSize().length());
        lebar[9] = max(lebar[9], (int)v[i].getMerk().length());
    }

    // Cetak garis pemisah
    for (int i = 0; i < 10; i++) {
        cout << "-";
        for (int j = 0; j < lebar[i] + 2; j++) cout << "-";
    }
    cout << "-\n";

    // Cetak header
    cout << "|";
    for (int i = 0; i < 10; i++) {
        cout << " " << header[i];
        for (int j = 0; j < lebar[i] - header[i].length() + 1; j++) cout << " ";
        cout << "|";
    }
    cout << "\n";

    // Cetak garis pemisah lagi
    for (int i = 0; i < 10; i++) {
        cout << "-";
        for (int j = 0; j < lebar[i] + 2; j++) cout << "-";
    }
    cout << "-\n";

    // Cetak isi tabel
    for (int i = 0; i < v.size(); i++) {
        cout << "| " << v[i].get_id();
        for (int j = 0; j < lebar[0] - v[i].get_id().length() + 1; j++) cout << " ";

        cout << "| " << v[i].get_nama();
        for (int j = 0; j < lebar[1] - v[i].get_nama().length() + 1; j++) cout << " ";

        cout << "| " << v[i].get_stok();
        for (int j = 0; j < lebar[2] - v[i].get_stok().length() + 1; j++) cout << " ";

        cout << "| " << v[i].get_harga();
        for (int j = 0; j < lebar[3] - v[i].get_harga().length() + 1; j++) cout << " ";

        cout << "| " << v[i].getJenis();
        for (int j = 0; j < lebar[4] - v[i].getJenis().length() + 1; j++) cout << " ";

        cout << "| " << v[i].getBahan();
        for (int j = 0; j < lebar[5] - v[i].getBahan().length() + 1; j++) cout << " ";

        cout << "| " << v[i].getWarna();
        for (int j = 0; j < lebar[6] - v[i].getWarna().length() + 1; j++) cout << " ";

        cout << "| " << v[i].getUntuk();
        for (int j = 0; j < lebar[7] - v[i].getUntuk().length() + 1; j++) cout << " ";

        cout << "| " << v[i].getSize();
        for (int j = 0; j < lebar[8] - v[i].getSize().length() + 1; j++) cout << " ";

        cout << "| " << v[i].getMerk();
        for (int j = 0; j < lebar[9] - v[i].getMerk().length() + 1; j++) cout << " ";

        cout << "|\n";
    }

    // Cetak garis pemisah terakhir
    for (int i = 0; i < 10; i++) {
        cout << "-";
        for (int j = 0; j < lebar[i] + 2; j++) cout << "-";
    }
    cout << "-\n";
}

int main(){
    vector<Baju> v;

    Baju baju1, baju2, baju3, baju4, baju5;
    baju1.set_id("A001");
    baju1.set_nama("Jaket Anjing Sporty");
    baju1.set_stok("10");
    baju1.set_harga("Rp200.000");
    baju1.setJenis("Sport");
    baju1.setBahan("Waterproof");
    baju1.setWarna("Hitam");
    baju1.setUntuk("Anjing");
    baju1.setSize("L");
    baju1.setMerk("PetFashion");

    baju2.set_id("A002");
    baju2.set_nama("Sweater Kucing Cozy");
    baju2.set_stok("8");
    baju2.set_harga("Rp150.000");
    baju2.setJenis("Casual");
    baju2.setBahan("Wool");
    baju2.setWarna("Merah");
    baju2.setUntuk("Kucing");
    baju2.setSize("M");
    baju2.setMerk("CatStyle");

    baju3.set_id("A003");
    baju3.set_nama("Baju Kuda Elegan");
    baju3.set_stok("5");
    baju3.set_harga("Rp350.000");
    baju3.setJenis("Elegan");
    baju3.setBahan("Satin");
    baju3.setWarna("Putih");
    baju3.setUntuk("Kuda");
    baju3.setSize("XL");
    baju3.setMerk("Equine Couture");

    baju4.set_id("A004");
    baju4.set_nama("Rompi Hamster Mini");
    baju4.set_stok("8");
    baju4.set_harga("Rp50.000");
    baju4.setJenis("Mini");
    baju4.setBahan("Cotton");
    baju4.setWarna("Biru");
    baju4.setUntuk("Hamster");
    baju4.setSize("S");
    baju4.setMerk("TinyPets");

    baju5.set_id("A005");
    baju5.set_nama("Baju Reptil Stylish");
    baju5.set_stok("1");
    baju5.set_harga("Rp100.000");
    baju5.setJenis("Trendy");
    baju5.setBahan("Polyester");
    baju5.setWarna("Hijau");
    baju5.setUntuk("Reptil");
    baju5.setSize("M");
    baju5.setMerk("ReptileTrend");

    v.push_back(baju1);
    v.push_back(baju2);
    v.push_back(baju3);
    v.push_back(baju4);
    v.push_back(baju5);

    string id, nama, stok, harga, jenis, bahan, warna, untuk, size, merk;
    Baju temp;

    cout << "Menambahkan data\n\n";
    cout << "Berapa banyak data yang akan diinput : ";
    int n;
    cin >> n; // input banyaknya
    cin.ignore(numeric_limits<streamsize>::max(), '\n');
    for(int i=0; i<n; i++){
        cout << "Masukkan Id : ";
        getline(cin, id);
        cout << "Masukkan Nama : ";
        getline(cin, nama);
        cout << "Masukkan Stok : ";
        getline(cin, stok);
        cout << "Masukkan Harga : ";
        getline(cin, harga);
        cout << "Masukkan jenis : ";
        getline(cin, jenis);
        cout << "Masukkan bahan : ";
        getline(cin, bahan);
        cout << "Masukkan warna : ";
        getline(cin, warna);
        cout << "Masukkan untuk : ";
        getline(cin, untuk);
        cout << "Masukkan size : ";
        getline(cin, size);
        cout << "Masukkan merk : ";
        getline(cin, merk);

        temp.set_id(id);
        temp.set_nama(nama);
        temp.set_stok(stok);
        temp.set_harga(harga);
        temp.setJenis(jenis);
        temp.setBahan(bahan);
        temp.setWarna(warna);
        temp.setUntuk(untuk);
        temp.setSize(size);
        temp.setMerk(merk);

        v.push_back(temp);
        cout << "Data berhasil ditambahkan!\n\n";
    }

    cout << "\nMenampilkan data\n";
    cetakTabel(v);
}