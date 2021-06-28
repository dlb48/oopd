<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct ( $judul, $penulis, $penerbit, $harga){
           //mendeklarasikan class, karna ini didalam funcion
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
    }

    public function getLabel (){
            return "$this->penulis, $this->penerbit";

    }

}

class CetakInfoProduk {
    public function cetak ( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;

    }

}

$produk = new Produk ("Naruto", "Mashasi kishimoto", "Shonen Jump", 30000);
$produk1 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 250000);

$infoproduk1 = new CetakInfoProduk ();
echo $infoproduk1->cetak($produk);
echo $infoproduk1->cetak($produk1);

?>