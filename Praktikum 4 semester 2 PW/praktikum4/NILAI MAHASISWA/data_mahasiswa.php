<?php 
require_once('class_mahasiswa.php');
$mahasiswa = new Mahasiswa(4869, "Hasan Al Banna",4.0);
echo $mahasiswa->predikat_ipk();

?>