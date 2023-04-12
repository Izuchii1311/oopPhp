<?php

    class Produk{
        public $judul,
            $penulis,
            $penerbit;

        protected $diskon = 0;

        protected $harga;

        // Method Construct
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // Method getLabel
        public function getLabel() {
            return "{$this->penulis}, {$this->penerbit}";
        }

        // Membuat method baru untuk mendapatkan harga dari visibility private
        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} ($.{$this->harga})";
            return $str;
        }

    }

    // child class Anime
    class Anime extends Produk{
        public $jmleps;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $jmleps = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmleps = $jmleps;
        }


        public function getInfoProduk() {
            $str = "Anime : " . parent::getInfoProduk() . " - {$this->jmleps} Episode.";
            return $str;
        }
    }

    // child class Game
    class Game extends Produk{
        public $waktumain;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $waktumain = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktumain = $waktumain;
        }

        // membuat method diskon untuk memanggil diskon dari visibility protected
        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() . " - {$this->waktumain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} ($.{$produk->harga})";
            return $str;
        }
    }

    // Object
    $produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24);
    $produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    echo "<hr>";

    $produk2->setDiskon(75);    
    echo $produk2->getHarga();


?>