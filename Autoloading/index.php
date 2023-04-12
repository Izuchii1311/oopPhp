<?php

require_once "App/init.php";

$produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24);
$produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo "<hr>";
new Coba();

?>