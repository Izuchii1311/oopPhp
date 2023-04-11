<?php

    class Produk{
        public $judul,
            $penulis,
            $penerbit,
            $harga;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "0"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    class CetakInfoProduk {
        // menerima inputan parameter untuk method cetak
        // ketika menginstansiasi object dari class produk, objectnya dapat menjadi parameter untuk class CetakInfoProduk
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} ($.{$produk->harga})";
            return $str;
        }
    }

    echo "Daftar Anime dan Game 2023";
    echo "<br><br>";

    $produk1 = new Produk("Kimetsu No Yaiba", "Koyouharu Gotouge", "Ufotable", 10000);

    echo "Anime 2023 : " . $produk1->judul;
    echo "<br>";    
    echo $produk1->getLabel();
    echo "<br>";
    echo "Harga per/eps : $" . $produk1->harga;

    echo "<br><br>";

    $produk2 = new Produk("Genshin Impact", "Maaya Uchida", "Mihoyo", 10000);

    // cara mencetak CetakInfoProduk
    $infoProduk2 = new CetakInfoProduk();   
    echo $infoProduk2->cetak($produk2);
?>