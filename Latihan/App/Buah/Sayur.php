<?php

    // Child Sayur
class Sayur extends BuahBuahan{
    // Property khusus child sayur
    public $olah;

    // Method Construct khusus child sayur
    public function __construct($nama = "Buah", $warna = "-", $bentuk = "-", $rasa = "-", $harga = "0", $kondisi = "-",$olah = "-"){
        parent::__construct($nama, $warna, $bentuk, $rasa, $harga, $kondisi);
        $this->olah = $olah;
    }

    public function getInfoBuah(){
        $info = "Sayur : ". $this->getInfo() ."dan bisa {$this->olah}.<br>";
        return $info;
    }

    public function getInfo(){
        $info = "{$this->nama}. {$this->warna} - {$this->bentuk}. {$this->rasa} - {$this->kondisi}  || Harga : {$this->harga}. ";
        return $info;
    }
}

?>