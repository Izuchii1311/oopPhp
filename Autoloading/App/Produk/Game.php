<?php

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


?>