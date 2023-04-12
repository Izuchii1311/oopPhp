<?php

// Memanggil semua class tanpa autoloading / manual menggunakan require
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Anime.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// memanggil semua class yang ada di dalam folder produk
spl_autoload_register(function($class){
    require_once __DIR__ . '/Produk/' . $class . ".php";
});

?>