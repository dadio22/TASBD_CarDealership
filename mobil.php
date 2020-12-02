<?php
    include 'connection.php';
?>

<html>
    <head>
        <title>Mobil - Car Dealership</title>
        <body style = "background-color:#ffffff">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    <body style="background-image: url(black.jpg); background-repeat: no-repeat top-center; background-attachment: scroll; background-size: cover; height: 300vh">

    <div class="container">

<div style="padding: 5px">
        <div class="card mt-10";>
    <div class="card-header bg-dark text-center text-white";>
        <h1>Daftar Mobil</h1>
    </div>
    <div class = "text-center" class = "container" style = "padding: 50px">
    <form class = "d-flex mt-3" action = "mobil.php" method = "get">
        <input class = "form-control  mr-2" type = "search" placeholder = "Seach" aria-label = "Search" name = "search">
        <button class = "btn btn-dark" type = "submit">Search</button>
    </form>
        <table class="table table-bordered">
            <tr>
                <td>Nama Mobil</td>
                <td>ID Mobil</td>
                <td>Merk Mobil</td>
                <td>Harga Mobil</td>
            </tr>
            <?php
                if(isset($_GET['search'])){
                    $key = $_GET['search'];
                    $query = "SELECT * FROM mobil WHERE nama_mobil = '$key'";
                    $result = mysqli_query($connection, $query); 
                }else{ 
                $query = "SELECT * FROM mobil";
                $result = mysqli_query($connection, $query); 
                }
                while($mobil = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mobil['nama_mobil']; ?></td>
                <td><?php echo $mobil['id_mobil']; ?></td>
                <td><?php echo $mobil['merk_mobil']; ?></td>
                <td><?php echo $mobil['harga_mobil']; ?></td>
            </tr>
                <?php } ?>
        </table>
    <a href="addmobilhtml.php" class="btn btn-dark" style="float: right;" >Add New Car</a>
    <a href="updatemobilhtml.php" class="btn btn-dark" style="float: right; margin: 0 10px 0 0; padding: 6px 20px" >Update</a>
    <a href="homepage.php" class="btn btn-dark" style="float: left;" >Home</a>
        </div>
</div>
    </body>
</html>