<?php

    class Produk{
        // membuat property menjadi private
        private $judul,
            $penulis,
            $penerbit, 
            $harga,
            $diskon = 0;

        // Method Construct
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // Method untuk membuat set judul baru dengan contoh validasi
        public function setJudul($judul){
            // Validasi
            // if ( !is_string($judul) ){
            //     throw new Exception("Judul harus berupa string");
            // }
            $this->judul = $judul;
        }

        // Method celah untuk mengakses judul dari property yg private
        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis($penulis){
            $this->penulis = $penulis;
        }

        public function getPenulis(){
            return $this->penulis;
        }

        public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
        }

        public function getPenerbit(){
            return $this->penerbit;
        }

        public function setHarga($harga){
            $this->harga = $harga;
        }

        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        public function getDiskon(){
            return $this->diskon;
        }

        public function getLabel() {
            return "{$this->penulis}, {$this->penerbit}";
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

    // memberikan diskon untuk game
    $produk2->setDiskon(75);    
    echo $produk2->getHarga();
    echo "<hr>";
    
    // membuat judul baru menggunakan setter
    $produk1->setJudul("Judul Baru");
    echo $produk1->getJudul(0);



?>