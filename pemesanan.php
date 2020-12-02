<?php
    include 'connection.php';
?>

<html>
    <head>
        <title>Pemesanan - Car Dealershop</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">

<div style="padding: 5px">
        <div class="card mt-10";>
    <div class="card-header bg-dark text-center text-white";>
        <h1>Daftar Pemesanan</h1>
    </div>
        <div class = "text-center" class = "container" style = "padding: 50px">
    <form class = "d-flex mt-3" action = "pemesanan.php" method = "get">
        <input class = "form-control  mr-2" type = "search" placeholder = "Seach" aria-label = "Search" name = "search">
        <button class = "btn btn-dark" type = "submit">Search</button>
    </form>
        <table class="table table-bordered">
        <tr>
                <td>ID Mobil</td>
                <td>ID Pesanan</td>
                <td>ID Klien</td>
                <td>Tanggal Pembelian</td>
            </tr>
            <?php

            if(isset($_GET['search'])){
            $key = $_GET['search'];
            $query = "SELECT * FROM pemesanan WHERE id_mobil = '$key'";
            $result = mysqli_query($connection, $query);
            }else{ 
            $query = "SELECT * FROM pemesanan";
            $result = mysqli_query($connection, $query); 
            }
            while($pemesanan = mysqli_fetch_array($result)){

            ?>
            <tr>
                <td><?php echo $pemesanan['id_mobil']; ?></td>
                <td><?php echo $pemesanan['id_pesanan']; ?></td>
                <td><?php echo $pemesanan['id_klien']; ?></td>
                <td><?php echo $pemesanan['tanggal']; ?></td>
            </tr>
                <?php } ?>
        </table>
    <a href="addpemesananhtml.php" class="btn btn-dark" style="float: right;" >Add Pemesanan</a>
    <a href="updatepemesananhtml.php" class="btn btn-dark" style="float: right; margin: 0 10px 0 0; padding: 6px 20px" >Update</a>
    <a href="homepage.php" class="btn btn-dark" style="float: left;" >Home</a>
        </div>
    </body>
</html>