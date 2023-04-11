<?php

    class Produk{
        // untuk memberikan nilai default dapat disimppan di __constructornya
        public $judul,
            $penulis,
            $penerbit,
            $harga;

        // Setiap dipanggil constructor akan menerima parameter untuk mengisi property di dalam class
        // $judul di dalam parameter beda dengan $judul yang ada di dalam class 
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0"){

            // prorpety di dalam class akan ditimpa dengan parameter yg ada di dalam contruct 
            // parameter yg ada di dalam construct menerima data dari object
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    echo "Daftar Anime dan Game 2023";
    echo "<br><br>";

    // isikan parameter dari object untuk mengisikan data di construct
    $produk1 = new Produk("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000);

    echo "Anime 2023 : " . $produk1->judul;
    echo "<br>";    
    echo $produk1->getLabel();
    echo "<br>";
    echo "Harga per/eps : $" . $produk1->harga;

    echo "<br><br>";

    $produk2 = new Produk("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000);

    echo "Game 2023 : " . $produk2->judul;
    echo "<br>";
    echo $produk2->getLabel();
    echo "<br>";
    echo "Harga per/update : $" . $produk2->harga;

    echo "<br><br>";

    $produk3 = new Produk();
    echo "Komik 2023 : " . $produk3->judul;
    echo "<br>";
    echo $produk3->getLabel();
    echo "<br>";
    echo "Harga per/update : $" . $produk3->harga;
?>