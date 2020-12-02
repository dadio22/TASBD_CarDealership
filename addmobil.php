<?php
    include 'connection.php';
    include 'config.php';

    $table_name = 'mobil';
    $tambahnama = $_POST['tambahnama'];
    $tambahidmobil = $_POST['tambahidmobil'];
    $tambahmerkmobil = $_POST['tambahmerkmobil'];
    $tambahhargamobil = $_POST['tambahhargamobil'];
    
    
    
      $query =  "INSERT INTO mobil (nama_mobil, id_mobil, merk_mobil, harga_mobil)
                 VALUES ('$_POST[tambahnama]', '$_POST[tambahidmobil]', '$_POST[tambahmerkmobil]', '$_POST[tambahhargamobil]')";
       mysqli_query($mysqli,$query);
    if(!$query) {
       die('ERROR : Data gagal ditambahkan kedalam tabel'. $table_name . ': ' .mysqli_error($mysqli));
    }
    echo ('data berhasil ditambahkan kedalam tabel ' . $table_name);
    
    header('location: mobil.php');




?>