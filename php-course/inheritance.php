<?php
/* 
video ke 4: inheritance
digunakan agar dapat menggunakan property dan method milik parent object
*/

class mobil {
    public $merk, $warna, $harga, $akselerasi;

    public function __construct($merkMobil, $warnaMobil, $hargaMobil, $akselerasiMobil){
        $this->merk = $merkMobil;
        $this->warna = $warnaMobil;
        $this->harga = $hargaMobil;
        $this->akselerasi = $akselerasiMobil;
    }

    public function getLabel(){
        return "$this->merk , $this->warna , $this->harga";
    }

    
};

// buat anak kelas yang di extends ke parent kelas
class mobilSport extends mobil {
    public function infoProduct(){
        $str = "Mobil Sport {$this->merk} | {$this->warna} | Rp.{$this->harga} | {$this->akselerasi} Rpm";
        return $str;
    }
};

$mobil1 = new mobilSport("lambo", "red", 10000, 250000);
echo $mobil1->infoProduct();

?>