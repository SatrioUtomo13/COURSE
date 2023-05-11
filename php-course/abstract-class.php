<?php
/* 
video ke 8: abstract class
cara lain dari sebuah oop, dimana sebuah abstact kelas memiliki satu method kosong yang akan digunakan di child class
*/

abstract class mobil {
    public $merk, $warna;
    protected $discount,$harga;

    public function __construct($merkMobil, $warnaMobil, $hargaMobil){
        $this->merk = $merkMobil;
        $this->warna = $warnaMobil;
        $this->harga = $hargaMobil;
    }

    public function getLabel(){
        return "$this->merk , $this->warna , $this->harga";
    }

    abstract public function infoProduct();

};

// buat anak kelas yang di extends ke parent kelas
class mobilSport extends mobil {
    public $akselerasi;

    public function __construct($merkMobil, $warnaMobil, $hargaMobil, $akselerasi){
        parent::__construct($merkMobil, $warnaMobil, $hargaMobil);
        $this->akselerasi = $akselerasi;
    }

    public function infoProduct(){
        $str = "Mobil Sport {$this->merk} | {$this->warna}  | {$this->akselerasi} Rpm";
        return $str;
    }
};

$mobil1 = new mobilSport("lambo", "red", 10000, 250000);
echo $mobil1->infoProduct();

?>