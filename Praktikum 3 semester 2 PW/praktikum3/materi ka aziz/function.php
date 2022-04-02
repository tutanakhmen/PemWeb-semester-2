<?php
    function luas_lingkaran($r){
        $phi = 3.14;
        $luas = $phi * $r * $r;
        return $luas;
    }

    echo "Luas lingkaran : ".luas_lingkaran(6);
?>