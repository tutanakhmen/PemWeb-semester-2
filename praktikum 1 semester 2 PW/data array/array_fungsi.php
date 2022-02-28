1. <!DOCTYPE html>
2. <html>
3. <body>
4.
5. <?php
6. $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
7. echo '<ol>';
8. foreach($ar_buah as $k =>$v){
9. echo '<li>'.$k.' - ' . $v .'</li>';
10. }
11. echo '</ol>';
12. sort($ar_buah);
13. echo '<hr/>';
14. echo '<ol>';
15. foreach($ar_buah as $k =>$v){
16. echo '<li>'.$k.' - ' . $v .'</li>';
17. }
18. echo '</ol>';
19. ?> 
20. </body>
21. </html>