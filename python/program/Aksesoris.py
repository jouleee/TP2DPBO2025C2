from Petshop import Petshop

class Aksesoris(Petshop):
    def __init__(self, id="", nama="", stok="", harga="", jenis="", bahan="", warna=""):
        super().__init__(id, nama, stok, harga)
        self.__jenis = jenis
        self.__bahan = bahan
        self.__warna = warna
    
    # Getter dan Setter untuk jenis
    def get_jenis(self):
        return self.__jenis
    
    def set_jenis(self, jenis):
        self.__jenis = jenis
    
    # Getter dan Setter untuk bahan
    def get_bahan(self):
        return self.__bahan
    
    def set_bahan(self, bahan):
        self.__bahan = bahan
    
    # Getter dan Setter untuk warna
    def get_warna(self):
        return self.__warna
    
    def set_warna(self, warna):
        self.__warna = warna