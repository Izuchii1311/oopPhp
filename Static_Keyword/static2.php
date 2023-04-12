<?php

    class Contoh {
        public static $angka = 1;

        public function halo(){
            return "Halo " . self::$angka++ . " kali. <br>";
        }
    }

    $obj = new Contoh;
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<hr>";

    // angka akan di set lagi dari 1
    $obj2 = new Contoh;
    echo $obj2->halo();

    // jika menggunakan static nilainya akan tetap berlanjut meskipun objectnya di instansiasi berulang kali
    // tetapi jika tidak menggunakan static maka nilainya akan di set dari 1 lagi
?>