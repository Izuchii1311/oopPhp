<?php

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


?>