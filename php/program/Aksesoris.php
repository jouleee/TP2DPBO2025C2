<?php
require('Petshop.php');

class Aksesoris extends Petshop{
    private $jenis;
    private $bahan;
    private $warna;

    public function __construct($id, $nama, $stok, $harga, $urlfoto, $jenis, $bahan, $warna){
        parent::__construct($id, $nama, $stok, $harga, $urlfoto);
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    // Getter dan Setter untuk jenis
    public function getJenis() {
        return $this->jenis;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    // Getter dan Setter untuk bahan
    public function getBahan() {
        return $this->bahan;
    }

    public function setBahan($bahan) {
        $this->bahan = $bahan;
    }

    // Getter dan Setter untuk warna
    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

?>
