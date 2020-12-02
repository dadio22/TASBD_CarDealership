<?php
    include 'connection.php';
    include 'config.php';

    $table_name = 'pemesanan';
    $tambahidmobil = $_POST['tambahidmobil'];
    $tambahidpesanan = $_POST['tambahidpesanan'];
    $tambahidklien = $_POST['tambahidklien'];
    $tambahtanggal = $_POST['tambahtanggal'];

    
      $query =  "INSERT INTO pemesanan (id_mobil, id_pesanan, id_klien, tanggal)
                 VALUES ('$_POST[tambahidmobil]', '$_POST[tambahidpesanan]', '$_POST[tambahidklien]', '$_POST[tambahtanggal]')";
       mysqli_query($mysqli,$query);
    if(!$query) {
       die('ERROR : Data gagal ditambahkan kedalam tabel'. $table_name . ': ' .mysqli_error($mysqli));
    }
    echo ('data berhasil ditambahkan kedalam tabel ' . $table_name);
    
    header('location: pemesanan.php');




?>