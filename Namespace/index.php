<?php

require_once "App/init.php";

// $produk1 = new Anime("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000, 24);
// $produk2 = new Game("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// membuat alias untuk namespace
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();

?>