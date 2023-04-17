<?php

    class Produk{
        public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmleps,
            $waktumain;

        // Method Construct
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $jmleps = 0, $waktumain = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmleps = $jmleps;
            $this->waktumain = $waktumain;
        }

        // Method getLabel
        public function getLabel(){
            return "{$this->penulis}, {$this->penerbit}";
        }

        // Method InfoLengkap berdasarkan Tipe
        // get info produk ini tidak akan dipakai jika ada child class yg dipakai
        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} ($.{$this->harga})";
            return $str;
        }

    }

    // child class Anime
    class Anime extends Produk{
        // memanggil get Info Produk khusus yang anime saja
        public function getInfoProduk() {
            $str = "Anime : {$this->judul} | {$this->getLabel()} ($.{$this->harga}) - {$this->jmleps} Episode.";
            return $str;
        }
    }

    // child class Game
    class Game extends Produk{
        // memanggil get Info Produk khusus yang game saja
        public function getInfoProduk() {
            $str = "Game : {$this->judul} | {$this->getLabel()} ($.{$this->harga}) - {$this->waktumain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        // Method menampilkan produk berdasarkan class produk
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} ($.{$produk->harga})";
            return $str;
        }
    }

    // Object
    $produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24, 0);
    $produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 0, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

    echo "<hr>";
    echo "<br>";
    // berikut ini adalah penerapan dari inheritance dengan visibility public yang membuat user dapat merubah harga dari suatu barang
    $produk1->harga = 20;
    echo $produk1->harga;


?>