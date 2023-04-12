<?php

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

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} ($.{$this->harga})";
        return $str;
    }
}

?>