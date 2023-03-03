<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Tugas Praktikum 2</title>
  </head>
  <body>

  <div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>
				Belanja Online
      </h1> 
      <form method ="POST">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label> 
          <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Produk</label> 
          <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
          <label for="produk_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
          <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
        </div>
        </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
          <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
        </div>
        </div> 
        <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
      </form>
		</div>
		<div class="col-md-4">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active"><b>DAFTAR HARGA</b></a>
				<div class="list-group-item">
          TV : 2.400.000
				</div>
        <div class="list-group-item">
          KULKAS : 3.100.000
				</div>
        <div class="list-group-item">
          MESIN CUCI : 3.800.000
				</div>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between"><b>HARGA DAPAT BERUBAH SETIAP SAAT</b><span class="badge badge-light badge-pill"></span></a>
			</div>
		</div>
	</div>
</div>
<div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            <?php require_once "proses_pemesanan.php"; ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $produk;?></td>
                <td><?= $jumlah;?></td>
                <td><?= "RP"  . number_format($total_harga, 0, ",", ".");?></td>
            </tr>
        </table>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>