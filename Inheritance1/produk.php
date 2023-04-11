<?php

    class Produk{
        public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmleps,
            $waktumain,
            $tipe;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0", $jmleps = 0, $waktumain = 0, $tipe = "null"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmleps = $jmleps;
            $this->waktumain = $waktumain;
            $this->tipe = $tipe;
        }

        public function getLabel(){
            return "{$this->penulis}, {$this->penerbit}";
        }

        public function getInfoLengkap(){
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ($.{$this->harga})";
            if ( $this->tipe == "Anime" ) {
                $str .=  " - {$this->jmleps} Episode.";       
            } else if ( $this->tipe == "Game" ) {
                $str .= " - {$this->waktumain} Jam.";
            }

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
    $produk1 = new Produk("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24, 0, "Anime");
    $produk2 = new Produk("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 0, 50, "Game");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();


?>