<?php

// Mendefinisikan kelas Petshop untuk merepresentasikan item yang dijual di petshop
class Petshop{
    // Properti dengan akses private agar hanya bisa diakses melalui metode getter dan setter
    private $id;
    private $nama;
    private $stok;
    private $harga;
    private $urlfoto; // URL foto produk untuk menampilkan gambar produk

    // Konstruktor untuk menginisialisasi objek Petshop dengan nilai awal
    public function __construct($id, $nama, $stok, $harga, $urlfoto){
        $this->id = $id;
        $this->nama = $nama;
        $this->stok = $stok;
        $this->harga = $harga;
        $this->urlfoto = $urlfoto;
    }

    // Metode getter untuk mendapatkan nilai id
    public function getId() {
        return $this->id;
    }

    // Metode setter untuk mengubah nilai id
    public function setId($id) {
        $this->id = $id;
    }

    // Metode getter untuk mendapatkan nilai nama produk
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk mengubah nilai nama produk
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk mendapatkan stok produk
    public function getStok() {
        return $this->stok;
    }

    // Metode setter untuk mengubah stok produk
    public function setStok($stok) {
        $this->stok = $stok;
    }

    // Metode getter untuk mendapatkan harga produk
    public function getHarga() {
        return $this->harga;
    }

    // Metode setter untuk mengubah harga produk
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Metode getter untuk mendapatkan URL foto produk
    public function getUrlFoto() {
        return $this->urlfoto;
    }

    // Metode setter untuk mengubah URL foto produk
    public function setUrlFoto($urlfoto) {
        $this->urlfoto = $urlfoto;
    }

    public function __destruct() {
    }  
}
?>