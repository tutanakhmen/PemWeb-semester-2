<?php
$x = 0;
while ($a < 20) {
    $x++; // $x = $x + 1;
    if ($x == 9 || $x == 14) continue;
    echo '<br/>bil ' .$x;
    if ($x == 17) break;
    # code...
}


?>