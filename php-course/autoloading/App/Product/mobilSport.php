<?php
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