<?php
    function luas_lingkaran(){
        $phi = 3.14;
        $r = 7;
        $luas = $phi * $r * $r;
        return $luas;
    }
    echo "Luas Lingkaran :" . luas_lingkaran();
?>