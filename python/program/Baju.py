from Aksesoris import Aksesoris

class Baju(Aksesoris):
    def __init__(self, id="", nama="", stok="", harga="", jenis="", bahan="", warna="", untuk="", size="", merk=""):
        super().__init__(id, nama, stok, harga, jenis, bahan, warna)
        self.__untuk = untuk
        self.__size = size
        self.__merk = merk
    
    # Getter dan Setter untuk 'untuk'
    def get_untuk(self):
        return self.__untuk
    
    def set_untuk(self, untuk):
        self.__untuk = untuk
    
    # Getter dan Setter untuk 'size'
    def get_size(self):
        return self.__size
    
    def set_size(self, size):
        self.__size = size
    
    # Getter dan Setter untuk 'merk'
    def get_merk(self):
        return self.__merk
    
    def set_merk(self, merk):
        self.__merk = merk