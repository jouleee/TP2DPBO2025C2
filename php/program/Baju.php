<?php
require('Aksesoris.php');

class Baju extends Aksesoris{
    private $untuk;
    private $size;
    private $merk;

    public function __construct($id, $nama, $stok, $harga, $urlfoto, $jenis, $bahan, $warna, $untuk, $size, $merk){
        parent::__construct($id, $nama, $stok, $harga, $urlfoto, $jenis, $bahan, $warna);
        $this->untuk = $untuk;
        $this->size = $size;
        $this->merk = $merk;
    }

    // Getter dan Setter untuk untuk
    public function getUntuk(){
        return $this->untuk;
    }

    public function setUntuk($untuk){
        $this->untuk = $untuk;
    }

    // Getter dan Setter untuk size
    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    // Getter dan Setter untuk merk
    public function getMerk(){
        return $this->merk;
    }

    public function setMerk($merk){
        $this->merk = $merk;
    }
}
?>