<?php 
/* video ke 8 : static
digunakan agar property dan method dapat diakses tanpa harus instansiasi object terlebih dahulu
 */

class cobaStatic {
    public static $angka = 1;

    public static function halo(){
        return "halo. " . self::$angka++ . " kali" . "<br>";
    }
}

echo cobaStatic::halo();
echo cobaStatic::halo();
echo cobaStatic::halo();
?>