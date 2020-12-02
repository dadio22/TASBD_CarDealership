<!doctype html>
<html>
<head>
	<title>Edit Pemesanan - Car Dealership</title>
  <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
	<body>
		<div class="card">
			<div class="container">	
				<div class = "row">

					<?php
					include "config.php";
					$id_mobil = $_GET['id_mobil'];
					$query_mysql = mysqli_query($mysqli, "SELECT * FROM pemesanan WHERE id_mobil='$id_mobil'")or die(mysqli_error($connection));
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
						<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
							<div class="card card-signin my-5">
								<div class="card-body">
									<h5 class="card-title text-center">Edit Pemesanan</h5>
										<form class="form-signing" action="updatepmsn.php" method="post">
											<div class="form-label-group">
											<label>ID Mobil</label>
												<input type="text" name="id_mobil" value="<?php echo $data['id_mobil'] ?>" class="form-control" required autofocus>
												</div><br>

												<label>ID Pesanan</label>
												<div class="form-label-group">
												<input type="text" name="id_pesanan" value="<?php echo $data['id_pesanan'] ?>" class="form-control" required>
												</div><br>
												<label>ID Klien</label>
												<div class="form-label-group">
												<input type="text" name="id_klien" value="<?php echo $data['id_klien'] ?>"class="form-control" required>
												</div>
												<label>Tanggal</label>
												<div class="form-label-group">
												<input type="text" name="tanggal" value="<?php echo $data['tanggal'] ?>"class="form-control" required>
												</div>
												<br>
												<input class ="btn btn-dark btn-block " type="submit" value="Simpan">
												<a class = "btn btn-dark btn-block " href="pemesanan.php">Kembali</a>	
																	
										</form>
									</div>
      						</div>
    					</div>
					<?php } ?>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</body>
</html>