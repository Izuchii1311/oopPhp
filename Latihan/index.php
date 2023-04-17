<?php 

require_once "App/init.php";

use App\Buah\User as BuahUser;
use App\Service\User as ServiceUser;

// Sample namespace
new BuahUser();
echo "<br>";
new ServiceUser();

echo "<hr>";

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

?>