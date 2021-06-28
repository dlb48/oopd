<?php

// public; dapat digunakan dikelas mana saja, bahkan diluar kelas.
// protected; Digunakan hanya didalam sebuah kelas dan turunanya atau child kelas
// private; hanya dapat digunakan pada kelas tertentu saja.


class Produk {
    public  $judul,
            $penulis,
            $penerbit;            

    private $harga,
            $diskon = 0;

    public function __construct ( $judul, $penulis, $penerbit, $harga){
       //mendeklarasikan class, karna ini didalam funcion
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }  
    
    public function setDiskon( $diskon) {
        $this->diskon = $diskon;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function getLabel (){
        return "$this->penulis, $this->penerbit";

    }

    public function getInfoProduk (){
        $str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";        

        return $str;
    }

}

class Komik extends Produk {
    public $jmlhalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfoProduk (){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktumain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktumain){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    public function getInfoProduk (){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktumain} Jam.";
        return $str;
    }

}


class CetakInfoProduk {

    public function cetak ( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;

    }

}

$produk1 = new komik ("Naruto", "Mashasi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon (0);
$produk1->setDiskon (10);
echo $produk2->getHarga();
echo "<br>";
echo $produk1->getHarga();

?>