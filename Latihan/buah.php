<?php

// Interface
interface InfoBuah{
    public function getInfoBuah();
}

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

// Class Menampilkan InfoProduk dari class Buah (Object Type)
// *** Akan error jika property harga tidak public
class TampilkanInfoBuahBuahan {
    public $daftarBuah = [];

    public function tambahBuah(BuahBuahan $buah){
        $this->daftarBuah[] = $buah;
    }

    public function cetakInfo(){
        $str = "Daftar Buah : <br>";

        foreach($this->daftarBuah as $p ){
            $str .= " - {$p->getInfoBuah()} <br>";
        }
        return $str;
    }
}


// Inisiasi Object
$buah1 = new Buah("Semangka", "Hijau", "Lonjong", "Manis", 15000, "Matang", "Dimakan Langsung");
$buah2 = new Sayur("Tomat", "Orange", "Bulat", "Asam", 7000, "Mentah", "Dimasak");
$buah3 = new Buah("Pepaya", "Orange", "Lonjong", "Pahit", 9000, "Matang", "Dimakan Langsung");

// Output   
$buah1->setDiskon(50);

echo $buah1->getInfoBuah();
echo "Anda mendapat diskon buah sebesar Rp. " . $buah1->getHarga();
echo "<br><br>";
echo $buah2->getInfoBuah();
echo "<br>";
echo $buah3->getInfoBuah();
echo "<br>";


// memberikan diskon untuk buah
echo "<hr>";
$buah3->setDiskon(75);    
echo $buah3->getHarga();
echo "<hr>";


// Menampilkan Class TampilkanInfoBuahBuahan
// $infoProduk = new TampilkanInfoBuahBuahan();
// echo $infoProduk->cetakInfo($buah2);

// Menampilkan foreach
$cetak = new TampilkanInfoBuahBuahan();
$cetak->tambahBuah($buah1);
$cetak->tambahBuah($buah2);
$cetak->tambahBuah($buah3);
echo $cetak->CetakInfo();

$buah1->setDiskon(25);
echo "Buah 1 Harga menjadi : " . $buah1->getHarga() . " <br>Karena sedang ada promo diskon 25%";