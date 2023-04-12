<?php

    class Produk{
        public $judul,
            $penulis,
            $penerbit,
            $harga,
            $waktumain;

        // Method Construct
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
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
        // membuat property khusus untuk anime saja
        public $jmleps;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $jmleps = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmleps = $jmleps;
        }


        public function getInfoProduk() {
            // jika ingin memanggil getInfoProduk milik parentnya maka tidak menggunakan $this-> tetapi menggunakan parent::

            // Sebelumnya
            // $str = "Anime : {$this->judul} | {$this->getLabel()} ($.{$this->harga}) - {$this->jmleps} Episode.";

            // Memanggil getInfoProduk milik Parentnya
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
    // hapus waktu main / jml eps untuk setiap instansiasinya karena sekarang setiap child classnya sudah memiliki __constructnya masing masing.
    $produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24);
    $produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();


?>