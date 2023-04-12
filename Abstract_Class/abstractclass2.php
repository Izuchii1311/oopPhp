<?php

// merubah class menjadi abstarct
    abstract class Produk{
        private $judul,
            $penulis,
            $penerbit, 
            $harga,
            $diskon = 0;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function setJudul($judul){
            $this->judul = $judul;
        }

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

        // membuat method ini menjadi abstract
        abstract public function getInfoProduk();
        
        // membuat method baru yang akan di panggil di childnya
        public function getInfo(){
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
            $str = "Anime : " . $this->getInfo() . " - {$this->jmleps} Episode.";
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
            $str = "Game : " . $this->getInfo() . " - {$this->waktumain} Jam.";
            return $str;
        }
    }

    // Memperbaiki class ini untuk mencetak banyak produk sekaligus
    class CetakInfoProduk {
        public $daftarProduk = [];

        // cara menambahkan produk produk ke dalam array dengan membuat method baru.
        public function tambahProduk(Produk $produk){
            $this->daftarProduk[] = $produk;
        }

        public function cetak(){
            $str = "Daftar Produk : <br>";
            
            // Melakukan looping untuk array daftarProduk
            foreach($this->daftarProduk as $p){
                $str .= "- {$p->getInfoProduk()} <br>";
            }
            return $str;
        }
    }

    // Object
    $produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24);
    $produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 50);
    
    // instansiasi untuk cetak produk
    $cetakProduk = new CetakInfoProduk();
    // menambahkan Produk
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);

    echo $cetakProduk->cetak();
    

?>