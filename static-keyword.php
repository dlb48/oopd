<?php

// //class yang mempunyai properti dan methode statis
// class Contohstatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "halo." . self::$angka . " kali";
//     }
// }

// echo Contohstatic:: $angka;
// echo "<br>";
// echo Contohstatic:: halo();

class contoh {
    public static $angka = 1;

    public function halo(){
return "halo. " . self::$angka++ . "kali <br>";

    }

}

//nilainya tidak direset
$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
$obj2 =new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();










?>