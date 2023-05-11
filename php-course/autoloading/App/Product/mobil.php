<?php
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