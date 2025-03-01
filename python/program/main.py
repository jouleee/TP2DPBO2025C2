from Baju import Baju

def cetak_tabel(baju_list):
    headers = ["ID", "Nama", "Stok", "Harga", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk"]

    # Buat baris data dari setiap objek baju menggunakan method getter
    rows = []
    for baju in baju_list:
        rows.append([
            baju.get_id(),
            baju.get_nama(),
            baju.get_stok(),
            baju.get_harga(),
            baju.get_jenis(),
            baju.get_bahan(),
            baju.get_warna(),
            baju.get_untuk(),
            baju.get_size(),
            baju.get_merk()
        ])

    # Hitung lebar maksimal tiap kolom (bandingkan header dan data)
    widths = []
    for col in range(len(headers)):
        max_width = len(headers[col])
        for row in rows:
            max_width = max(max_width, len(str(row[col])))
        widths.append(max_width)

    # Fungsi untuk membuat garis horizontal penuh (top dan bottom border)
    border_line = "-" + "-".join("-" * (w + 2) for w in widths) + "-"

    # Cetak garis atas tabel
    print(border_line)

    # Cetak header
    header_row = "| " + " | ".join(headers[i].ljust(widths[i]) for i in range(len(headers))) + " |"
    print(header_row)

    # Cetak garis pemisah antara header dan data
    print(border_line)

    # Cetak setiap baris data
    for row in rows:
        row_str = "| " + " | ".join(str(row[i]).ljust(widths[i]) for i in range(len(row))) + " |"
        print(row_str)

    # Cetak garis bawah tabel
    print(border_line)

baju_list = [
    Baju("A001", "Jaket Anjing Sporty", "10", "Rp200.000", "Sport", "Waterproof", "Hitam", "Anjing", "L", "PetFashion"),
    Baju("A002", "Sweater Kucing Cozy", "8", "Rp150.000", "Casual", "Wool", "Merah", "Kucing", "M", "CatStyle"),
    Baju("A003", "Baju Kuda Elegan", "5", "Rp350.000", "Elegan", "Satin", "Putih", "Kuda", "XL", "Equine Couture"),
    Baju("A004", "Rompi Hamster Mini", "8", "Rp50.000", "Mini", "Cotton", "Biru", "Hamster", "S", "TinyPets"),
    Baju("A005", "Baju Reptil Stylish", "1", "Rp100.000", "Trendy", "Polyester", "Hijau", "Reptil", "M", "ReptileTrend")
]

n = int(input("Berapa banyak data yang akan diinput: "))
for i in range(n):
    id = input("Masukkan Id: ")
    nama = input("Masukkan Nama: ")
    stok = input("Masukkan Stok: ")
    harga = input("Masukkan Harga: ")
    jenis = input("Masukkan jenis: ")
    bahan = input("Masukkan bahan: ")
    warna = input("Masukkan warna: ")
    untuk = input("Masukkan untuk: ")
    size = input("Masukkan size: ")
    merk = input("Masukkan merk: ")
    baju_list.append(Baju(id, nama, stok, harga, jenis, bahan, warna, untuk, size, merk))
    print("Data berhasil ditambahkan!\n")

print("\nMenampilkan data")
cetak_tabel(baju_list)