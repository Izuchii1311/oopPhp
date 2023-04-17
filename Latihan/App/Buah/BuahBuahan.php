<?php

    // Class
abstract class BuahBuahan {
    // Property
    public $nama, $warna, $bentuk, $rasa, $kondisi;
    protected $harga, $diskon = 0;

    // Method __construct
    public function __construct($nama = "Buah", $warna = "-", $bentuk = "-", $rasa = "-", $harga = "0", $kondisi = "-"){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->bentuk = $bentuk;
        $this->rasa = $rasa;
        $this->harga = $harga;
        $this->kondisi = $kondisi;
    }

    public function setNama($nama){
        // Dapat juga memberikan validasi
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setWarna($warna){
        // Dapat juga memberikan validasi
        $this->warna = $warna;
    }

    public function getWarna(){
        return $this->warna;
    }

    public function setBentuk($bentuk){
        // Dapat juga memberikan validasi
        $this->bentuk = $bentuk;
    }

    public function getBentuk(){
        return $this->bentuk;
    }

    public function setRasa($rasa){
        // Dapat juga memberikan validasi
        $this->rasa = $rasa;
    }

    public function getRasa(){
        return $this->rasa;
    }

    public function setKondisi($kondisi){
        // Dapat juga memberikan validasi
        $this->kondisi = $kondisi;
    }

    public function getKondisi(){
        return $this->kondisi;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    // Method
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    // Method
    public function getLabel(){
        return "$this->warna - $this->bentuk";
    }

    // Method
    abstract public function getInfo();

}

?>