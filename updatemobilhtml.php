<!DOCTYPE html>
<html>
<head>
    <title>Update Mobil - Car Dealership</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body style="background-image: url(.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="wrapper"></div>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div style="padding: 5px">
            <div class="card mt-10";>
        <div class="card-header bg-dark text-center text-white";>
            <h1>Daftar Mobil</h1>
        </div>
        <div class="card-body">
            
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>ID Mobil</th>
                    <th>Merk Mobil</th>
                    <th>Harga Mobil</th>
                    <th>Edit</th>
                    
                    
                </tr>
                <?php
                include "config.php";
                $no = 1;
                    $tampil = mysqli_query($mysqli, "SELECT * from mobil ");
                    while($data = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_mobil']; ?></td>
            <td><?php echo $data['id_mobil']; ?></td>
            <td><?php echo $data['merk_mobil']; ?></td>
            <td><?php echo $data['harga_mobil']; ?></td>
             <td>
             	<a href="deletemobil.php?nama_mobil=<?php echo $data['nama_mobil']; ?>">
             	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg> </button> </a>
                 <a href="formupdatemobil.php?nama_mobil=<?php echo $data['nama_mobil']; ?>">
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                </svg>  </a>
             </td>           
            
        </tr>
        <?php } ?>
            </table>
            <a href="mobil.php" class="btn btn-dark" style="float: left;" >Back</a>
      
    </div>
    </div>
</div>



</body>
</html>
