<?php

    // echo __LINE__;
    // echo "<br>";

    // echo __FILE__;
    // echo "<br>";

    // echo __DIR__;
    // echo "<br>";

    // echo __CLASS__;
    // echo "<br>";

    // echo __TRAIT__;
    // echo "<br>";

    // echo __METHOD__;
    // echo "<br>";

    // echo __NAMESPACE__;
    // echo "<br>";


    // function coba(){
    //     return __FUNCTION__;
    // }

    // echo coba();

    class Coba {
        public $kelas = __CLASS__;
    }

    $obj = new Coba();
    echo $obj->kelas;
?>