<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_siswa</title>
</head>
<body>
. <?php 
2. $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
3. $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
4. $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
5. $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
6.
7. $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
8.
9. ?>
. <h3>Daftar Nilai Siswa</h3>
11. <table border="1" width="100%">
12. <thead>
13. <tr>
14. <th>No</th><th>NIM</th><th>UTS</th>
15. <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
16. </tr> 
17. </thead>
18. <tbody>
19. <?php
20. $nomor = 1; 
21. foreach($ar_nilai as $ns){
22. echo '<tr><td>'.$nomor.'</td>';
23. echo '<td>'.$ns['nim'].'</td>';
24. echo '<td>'.$ns['uts'].'</td>';
25. echo '<td>'.$ns['uas'].'</td>';
26. echo '<td>'.$ns['tugas'].'</td>';
27. $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
28. echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
29. echo '<tr/>';
30. $nomor++;
31. }
32. ?>
33. </tbody> 
34. </table>
</body>
</html>