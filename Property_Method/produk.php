<?php

    # Jualan Produk (Komik, Game)

    // Class Produk
    class Produk {
        // property
        public $judul = "Judul"
            ,$penulis = "Penulis"
            ,$penerbit = "Penerbit"
            ,$harga = "Harga";

        // Method
        public function getLabel(){
            // $this-> memanggil property diluar method
            return "$this->penulis, $this->penerbit";
        }

    }

    // Object
    // $produk1 = new Produk();
    // $produk1->judul = "Kimi no Nawa";
    // var_dump($produk1); 

    // echo "<br><br>";


    // $produk2 = new Produk();
    // $produk2->judul = "Genshin Impact";
    // // $produk2->propertyBaru = "Karena property tidak ada maka otomatis akan dibuat property baru untuk produk 2 saja";
    // var_dump($produk2); 

    // echo "<br><br>";


    // $produk3 = new Produk();
    // $produk3->judul = "Kimi no Nawa";
    // $produk3->penulis = "Makoto Shinkai";
    // $produk3->penerbit = "Aniplex";
    // $produk3->harga = "$50000";

    // echo "Anime Terbaru : $produk3->judul ($produk3->penulis || $produk3->penerbit)";
    // echo "<br><br>";
    // // Menampilkan penulis dan penerbit
    // echo $produk3->getLabel();


    $produk4 = new Produk();
    $produk4->judul = "Genshin Impact";
    $produk4->penulis = "Maaya Uchida";
    $produk4->penerbit = "Mihoyo";
    $produk4->harga = "$1.200.000";

    echo "Game Terbaik : $produk4->judul<br>";
    echo $produk4->getLabel();
    echo "<br>";
    echo "Harga Game Per-tahun : $produk4->harga";

?>