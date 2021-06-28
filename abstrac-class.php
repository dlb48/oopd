<?php

abstract class Produk {
    private  $judul,
            $penulis,
            $penerbit,           
            $harga,
            $diskon = 0;

    public function __construct ( $judul, $penulis, $penerbit, $harga){
       //mendeklarasikan class, karna ini didalam funcion
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    } 
//setter
    public function setJudul ( $judul) {
        $this->judul =$judul;
    } 

    public function setPenulis ( $penulis) {
        $this->penulis =$penulis;
    } 

    public function setPenerbit ( $penerbit) {
        $this->penerbit =$penerbit;
    } 

    public function setDiskon( $diskon) {
        $this->diskon = $diskon;
    }

//getter       
    public function getJudul () {
        return $this->judul;
    }
    
    public function getPenulis () {
        return $this->penulis;
    }

    public function getPenerbit () {
        return $this->penerbit;
    } 
    
    public function getDiskon () {
        return $this->diskon;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function getLabel (){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk ();
    
    public function getInfo(){
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
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlhalaman} Halaman.";
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
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktumain} Jam.";
        return $str;
    }

}

class CetakInfoProduk {
    public $daftarproduk = array ();
    public function tambahProduk( produk $produk){
        $this->daftarproduk[] =$produk;
    }

    public function cetak (){
        $str = "DAFTAR PRODUK : <br>";
        foreach( $this->daftarproduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";

        }
        return $str;

    }

}

$produk1 = new komik ("Naruto", "Mashasi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();

?>