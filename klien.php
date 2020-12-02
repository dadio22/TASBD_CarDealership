<?php
    include 'connection.php';
?>

<html>
    <head>
        <title>Klien - Car Dealership</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">

<div style="padding: 5px">
        <div class="card mt-10";>
    <div class="card-header bg-dark text-center text-white";>
        <h1>Daftar Klien</h1>
    </div>
    <div class="card-body">
        <div class = "text-center" class = "container" style = "padding: 50px">
        <form class = "d-flex mt-3" action = "klien.php" method = "get">
        <input class = "form-control  mr-2" type = "search" placeholder = "Seach" aria-label = "Search" name = "search">
        <button class = "btn btn-dark" type = "submit">Search</button>
    </form>
        <table class="table table-bordered">
            <tr>
                <td>Nama Klien</td>
                <td>ID Klien</td>
                <td>Nomer Telepon</td>
            </tr>
            <?php

            if(isset($_GET['search'])){
            $key = $_GET['search'];
            $query = "SELECT * FROM klien WHERE nama_klien = '$key'";
            $result = mysqli_query($connection, $query);
            }else{ 
            $query = "SELECT * FROM klien";
            $result = mysqli_query($connection, $query); 
            }
            while($klien = mysqli_fetch_array($result)){


            ?>
            <tr>
                <td><?php echo $klien['nama_klien']; ?></td>
                <td><?php echo $klien['id_klien']; ?></td>
                <td><?php echo $klien['nomer_telepon']; ?></td>
            </tr>
                <?php } ?>
        </table>
        <a href="addklienhtml.php" class="btn btn-dark" style="float: right;" >Add New Klien</a>
        <a href="updateklienhtml.php" class="btn btn-dark" style="float: right; margin: 0 10px 0 0; padding: 6px 20px" >Update</a>
        <a href="homepage.php" class="btn btn-dark" style="float: left;" >Home</a>
        </div>
    </body>
</html>