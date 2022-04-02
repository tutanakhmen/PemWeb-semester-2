<?php 
    // function luas segitiga
    function segitiga($a,$t){
        $luas = 1/2*$a*$t;
        return $luas;

    }

    // Function luas persegi panjang
    function persegipanjang($p,$l){
        $luas = $p * $l;
        return $luas;
    }

    // function volime kubus
    function kubus($sisi1){
        // $sisi1 = 2;
        $volume = $sisi1 * $sisi1 * $sisi1;
        return $volume;
    }

    // function luas balok
    function balok($p,$l,$t ){
        // $p = 5;
        // $l = 10;
        // $t = 5;
        $volume = $p * $l * $t;
        return $volume;
    }
?>