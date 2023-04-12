<?php

    class ContohStatic {
        // menambahkan static seletah visibilitynya
        public static $angka = 1;

        public static function halo(){
            // tidak dapet menggunakan $this-> karena harus ada yg di instansiasikan
            // self untuk mengambil property angka yg static
            return "Halo " . self::$angka++ . " kali."; 
        }

    }

    // biasanya kita menginstansiasikannya terlebih dahulu
    // $obj = new ContohStatic();

    // tetapi karena sekarang telah diberi static maka kita dapat mengaksesnya langsung
    echo ContohStatic::$angka;
    echo "<br>";
    echo ContohStatic::halo();
    echo "<br>";
    echo ContohStatic::halo();

?>