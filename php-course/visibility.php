<?php
/* 
video ke 6: visibility
digunakan agar property dan method tidak dapat diakses di kondisi tertentu
public :
property dan method dapat diakses disemua kondisi
protected :
property dan method dapat diakses hanya di dalam kelas beserta turunannya saja
private : 
property dan method dapat diakses hanya di kelasnya saja
*/

class mobil {
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

};

// buat anak kelas yang di extends ke parent kelas
class mobilSport extends mobil {
    public $akselerasi;

    public function __construct($merkMobil, $warnaMobil, $hargaMobil, $akselerasi){
        parent::__construct($merkMobil, $warnaMobil, $hargaMobil);
        $this->akselerasi = $akselerasi;
    }

    public function infoProduct(){
        $str = "Mobil Sport {$this->merk} | {$this->warna} | Rp.{$this->getharga()} | {$this->akselerasi} Rpm";
        return $str;
    }

    public function diskon($discount){
        return $this->discount = $discount;
    }

    public function getharga(){
        return $this->harga - ($this->harga * $this->discount / 100);
    }

};

$mobil1 = new mobilSport("lambo", "red", 10000, 250000);
echo $mobil1->infoProduct();

echo "<hr>";

$mobil1 -> diskon(10);
echo $mobil1 -> getharga();
?>