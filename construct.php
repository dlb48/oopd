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

}

$produk = new Produk ("Naruto", "Mashasi kishimoto", "Shonen Jump", 30000);
$produk1 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 250000);

?>