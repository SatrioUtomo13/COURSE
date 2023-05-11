<?php
/* 
video ke 2 : constructor method
constructor adalah method spesial yang berada didalam class dan akan terpanggil otomatis ketika sebuah object di instansiasi, fungsinya adalah untuk otomatisasi propery
*/
class mobil {
    //ini contoh property
    public $merk, $warna, $harga;

    //ini contoh penggunaan constructor
    public function __construct($merkMobil, $warnaMobil, $hargaMobil){
        $this->merk = $merkMobil;
        $this->warna = $warnaMobil;
        $this->harga = $hargaMobil;
    }

    // ini contoh method
    public function getLabel(){
        return "$this->merk , $this->warna , $this->harga";
    }

    
};

$produk = new mobil("Toyota", "merah", 10000);
// jika menggunakan construct tidak perlu mengisi manual seperti dibawah cukup masukkan di instansiasi object
// $produk->merk = "toyota";
// $produk->warna = "merah";
// $produk->harga = "10000";

echo $produk->getLabel();
?>