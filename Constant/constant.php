<?php
     
    // define(name, value) atau const
    define("NAMA", "Luthfi Nur Ramadhan");
    const NAMA2 = "Izuchii";

    echo NAMA;
    echo "<br>";
    echo NAMA2;

    // perbedaan penggunaan define dan const 
    // define tidak dapat digunakan disebuah class. disimpan diluar sebagai constanta global.
    // const dapat dimasukkan di dalam class.
?>