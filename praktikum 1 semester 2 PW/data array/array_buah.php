<?php 
2. $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
3. // cetak buah ke index ke 2
4. echo $ar_buah[2];
5. // cetak jumlah buah
6. echo '<br/>Jumlah Buah ' . count($ar_buah);
7. // cetak seluruh buah 
8. echo '<ol>';
9. foreach($ar_buah as $buah){
10. echo '<li>'. $buah .'</li>';
11. }
12. echo '</ol>';
13. // tambahkan buah 
14. $ar_buah[]="Durian";
15. // hapus buah index ke 1
16. unset($ar_buah[1]);
17. // ubah buah index ke 2 menjadi Manggis
18. $ar_buah[2]="Manggis";
19. // cetak seluruh buah dengan index nya
20. echo '<ul>';
21. foreach($ar_buah as $k => $v){
22. echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
23. }
24. echo '</ul>';
25. ?>
