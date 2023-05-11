<?php
/* 
video ke 3: object type
digunakan agar sebuah object dapat dijadikan type data
*/
class mobil {
    public $merk, $warna, $harga;

    public function __construct($merkMobil, $warnaMobil, $hargaMobil){
        $this->merk = $merkMobil;
        $this->warna = $warnaMobil;
        $this->harga = $hargaMobil;
    }

    public function getLabel(){
        return "$this->merk , $this->warna , $this->harga";
    }

    
};

class getInfoProduct {
    public function cetak (mobil $mobil){
        $str = "{$mobil->merk} & {$mobil->warna} & {$mobil->harga}";
        return $str;
    }
}


$produk = new mobil("Toyota", "merah", 10000);

//instansiasi object menggunakan kelas yang dibuat lalu panggil function beserta object mana yang ingin ditampilkan
$infoProduk = new getInfoProduct();
echo $infoProduk->cetak($produk);

?>