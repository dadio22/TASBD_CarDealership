<?php
    include 'connection.php';
    include 'config.php';

    $table_name = 'klien';
    $tambahnamaklien = $_POST['tambahnamaklien'];
    $tambahidklien = $_POST['tambahidklien'];
    $tambahnomertelepon = $_POST['tambahnomertelepon'];
    
    
      $query =  "INSERT INTO klien (nama_klien, id_klien, nomer_telepon)
                 VALUES ('$_POST[tambahnamaklien]', '$_POST[tambahidklien]', '$_POST[tambahnomertelepon]')";
       mysqli_query($mysqli,$query);
    if(!$query) {
       die('ERROR : Data gagal ditambahkan kedalam tabel'. $table_name . ': ' .mysqli_error($mysqli));
    }
    echo ('data berhasil ditambahkan kedalam tabel ' . $table_name);
    
    header('location: klien.php');




?>