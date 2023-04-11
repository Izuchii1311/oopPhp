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

    $produk1 = new Produk();
    $produk1->judul = "Kimetsu no Yaiba";
    $produk1->penulis = "Koyouharu Gotouge";
    $produk1->penerbit = "Ufotable";
    $produk1->harga = "$10.000";

    echo "Anime 2023 : " . $produk1->judul;
    echo "<br>";
    echo $produk1->getLabel();
    echo "<br>";
    echo "Harga per/eps : " . $produk1->harga;

    echo "<br><br>";

    $produk2 = new Produk();
    $produk2->judul = "Genshin Impact";
    $produk2->penulis = "Maaya Uchida";
    $produk2->penerbit = "Mihoyo";
    $produk2->harga = "$10.000";

    echo "Game 2023 : " . $produk2->judul;
    echo "<br>";
    echo $produk2->getLabel();
    echo "<br>";
    echo "Harga per/update : " . $produk2->harga;

?>