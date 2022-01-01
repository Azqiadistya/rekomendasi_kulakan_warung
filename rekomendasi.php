<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Rekomendasi</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Rekomendasi Kulakan</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="plot.php">Plot</a>
                <a class="nav-link active" href="#">Rekomendation</a>
            </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container content">
        <h3>Status Penjualan Produk </h3>
        <a type="button" class="btn btn-secondary" href="kurangLaris.php">Kurang Laris</a>
        <a type="button" class="btn btn-info" href="laris.php">Laris</a>
        <a type="button" class="btn btn-primary" href="sangatLaris.php">Sangat Laris</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
		<?php
			include "koneksi.php";
			$SQL = mysqli_query($konek, "SELECT * FROM rekomendasi");
			while($data=mysqli_fetch_array($SQL)) 
		{?>
			<tr>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['kode'];?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['jumlah'];?></td>
				<td><?php echo $data['harga'];?></td>
				<td><?php echo $data['total'];?></td>
				<td><?php echo $data['status'];?></td>
			<?php }
			?>
			</tr>
        </tbody>
    </table>
    </div>
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <footer class="footer text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2021 Copyright : Kelompok 11
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>