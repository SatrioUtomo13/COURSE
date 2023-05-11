<?php
/* 
video ke 5: overriding
digunakan agar method yang dimiliki child class dapat menimpa method yang dimiliki parent class.
menggunakan keyword parent::
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

// buat anak kelas yang di extends ke parent kelas
class mobilSport extends mobil {
    public $akselerasi;

    public function __construct($merkMobil, $warnaMobil, $hargaMobil, $akselerasi){
        parent::__construct($merkMobil, $warnaMobil, $hargaMobil);
        $this->akselerasi = $akselerasi;
    }

    public function infoProduct(){
        $str = "Mobil Sport {$this->merk} | {$this->warna} | Rp.{$this->harga} | {$this->akselerasi} Rpm";
        return $str;
    }
};

$mobil1 = new mobilSport("lambo", "red", 10000, 250000);
echo $mobil1->infoProduct();

?>