<?php

    // membuat interface
    interface InfoProduk{
        // cut getInfoProduk
        public function getInfoProduk();
    }

    Abstract class Produk{
        protected $judul,
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

        Abstract public function getInfo();

    }

    // karena telah melakukan implements InfoProduk maka harus ada method getInfoProduk di dalam child classnya
    class Anime extends Produk implements InfoProduk{
        public $jmleps;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $jmleps = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmleps = $jmleps;
        }

        public function getInfoProduk() {
            $str = "Anime : " . $this->getInfo() . " - {$this->jmleps} Episode.";
            return $str;
        }

        // pindahkan getInfo karena membuat method getInfoAbstract di parentnya
        public function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} ($.{$this->harga})";
            return $str;
        }
    }

    class Game extends Produk implements InfoProduk{
        public $waktumain;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $waktumain = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktumain = $waktumain;
        }

        public function getInfoProduk() {
            $str = "Game : " . $this->getInfo() . " - {$this->waktumain} Jam.";
            return $str;
        }

        public function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} ($.{$this->harga})";
            return $str;
        }
    }

    class CetakInfoProduk {
        public $daftarProduk = [];

        public function tambahProduk(Produk $produk){
            $this->daftarProduk[] = $produk;
        }

        public function cetak(){
            $str = "Daftar Produk : <br>";
            
            foreach($this->daftarProduk as $p){
                $str .= "- {$p->getInfoProduk()} <br>";
            }
            return $str;
        }
    }

    $produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24);
    $produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 50);
    
    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);

    echo $cetakProduk->cetak();
    

?>