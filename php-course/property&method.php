<?php
// video 1 : property & method
/*  property : adalah data didalam sebuah class
    method : function atau perilaku yang ada didalam kelas */
class mobil {
    //ini contoh property
    public $merk, $warna, $harga;

    // ini contoh method
    public function getLabel(){
        return "$this->merk , $this->warna , $this->harga";
    }
};

$produk = new mobil();
$produk->merk = "toyota";
$produk->warna = "merah";
$produk->harga = "10000";
echo $produk->getLabel();
?>