<?php

    // Child Buah 
class Buah extends BuahBuahan implements InfoBuah{
    // Property khusus child buah
    public $makan;

    // Method Construct khusus child buah
    public function __construct($nama = "Buah", $warna = "-", $bentuk = "-", $rasa = "-", $harga = "0", $kondisi = "-",$makan = "-"){
        parent::__construct($nama, $warna, $bentuk, $rasa, $harga, $kondisi);
        $this->makan = $makan;
    }

    // Method untuk membuat diskon
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    // Method Buah
    public function getInfoBuah(){
        $info = "Buah : " . $this->getInfo() . "dan bisa {$this->makan}.<br>";
        return $info;
    }

    public function getInfo(){
        $info = "{$this->nama}. {$this->warna} - {$this->bentuk}. {$this->rasa} - {$this->kondisi}  || Harga : {$this->harga}. ";
        return $info;
    }
}

?>