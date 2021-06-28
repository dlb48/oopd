<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain,
            $tipe;

    public function __construct ( $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain, $tipe){
       //mendeklarasikan class, karna ini didalam funcion
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getLabel (){
        return "$this->penulis, $this->penerbit";

    }

    public function getInfoLengkap (){
        $str ="{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";        
        if ( $this->tipe == "Komik"){
            $str .= " - {$this->jmlhalaman} Halaman.";   
        }else if ( $this->tipe == "Game"){
            $str .= " ~ {$this->waktumain} Jam.";
        }

        return $str;
    }

}

class CetakInfoProduk {

    public function cetak ( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;

    }

}

$produk = new Produk ("Naruto", "Mashasi kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk1 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");


echo $produk->getInfoLengkap();
echo "<br>";
echo $produk1->getInfoLengkap();


?>