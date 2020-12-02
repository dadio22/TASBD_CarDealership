<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="card mt-7">
  <div class="card-header bg-dark text-white text-center">
    <h1>New Pemesanan Info</h1>
  </div>
  <div class="card-body">
    <form method="post" action="addpemesanan.php">
    	<div class="form-group">
    		<label>ID Mobil</label>
    		<input type="text" name="tambahidmobil" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label>ID Pesanan</label>
    		<input type="text" name="tambahidpesanan" class="form-control"  required>
      </div>
      <div class="form-group">
        <label>ID Klien</label>
        <input type="text" name="tambahidklien" class="form-control"  required>
      </div>     
      <div class="form-group">
        <label>Tanggal</label>
        <input type="text" name="tambahtanggal" class="form-control"  required>
      </div>   

    <a href="addklien.php">
    	<button type="submit" class="btn btn-block btn-dark mb-2" name="bsimpan2">Submit</button>
</a>
    	<button type="reset" class="btn btn-block btn-dark" name="breset">Reset</button>
    	<a href="klien.php" class="btn btn-block btn-dark">Back</a>

    </form>
  </div>
  </div>
</div>
</body>
</html>