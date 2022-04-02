<?php
    $proses = $_POST['proses'];

    if (!empty($proses)) {

        $_nama = $_POST['nama'];
        $_berat = $_POST['berat'];
        $tinggi = $_POST['tinggi'];
        $_umur = $_POST['usia'];
        $_gol = $_POST['gol'];

        // Operasi if else
        if ($_berat > 70){
            echo 'Berat anda belum ideal';
        }else{
            echo 'Berat sudah ideal';
        }
 
        echo '<br/>Nama Lengkap :' .$_nama;
        echo '<br/>Berat/Tinggi :' .$_berat . 'Kg/' .$_tinggi. 'cm';
        echo '<br/>Usia :' .$_umur . ' Tahun';
        echo '<br/> Golongan Darah :' .$_gol; 


        // Operasi Ternary
        $status_umur = ($_umur <= 5)? "Balita": "Non Balita";
        echo '<br/>Status Umur :' .$status_umur;


        // Operasi If elseif
        if ($_umur <= 5) {
            # code...
        echo '<br/>kategori Balita';
        }elseif ($_umur <=13 ) {
        echo '<br/>Kategori Usia Anak-Anak';
            # code...
        }elseif ($_umur <=20 ) {
        echo '<br/>Kategori Remaja';
            # code...
        }elseif ($_umur <=40 ) {
        echo '<br/>Kategori Usia Bapak';   
            # code...
        }elseif ($_umur <= 60 ) {
        echo '<br/>Kategori Usia Dewasa';
            # code...
        }else {
        echo '<br/>Kategori Lansia';
            # code...
        }

        // operator switc
        switch ($_gol) {
            case 'A':
                echo '<br/>hanya boleh donor kepada golongan darah A dan AB';
                # code...
                break;
                
            case 'B':
                echo '<br/>hanya boleh donor kepada sesama golongan darah AB dan B';
                # code...
                break;
            
            case 'AB':
                echo '<br/>hanya boleh donor kepada sesama golongan darah AB';
                # code...
                break;
            
            default:
            echo '<br/>Boleh mendonorkan darahnya ke semua golongan darah';
                # code...

        }


    }
?>