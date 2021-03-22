<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Halaman Kategori User</title>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
         <a class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url().'homeUser'; ?>">Home</a>
      <a class="nav-item nav-link" href="<?= base_url().'kategoriUser'; ?>">Kategori</a>
      <a class="nav-item nav-link" href="<?= base_url().'barangUser'; ?>">Barang</a>
      <a class="nav-item nav-link" href="<?= base_url().'transaksiUser'; ?>">Transaksi</a>
      <a class="nav-item nav-link" href="<?= base_url().'login'; ?>">Logout</a>        
    </div>
  </div>
 
</nav>
     </div>
     <div class="container">
        <div class="row mt-4">
            <div class ="col">
                <h1 style="color: #343a40">Kategori</h1>
                <img src="<?php echo base_url().'assets/admin/img/kategori2.png' ?>" 
            </div>
        </div>
        <div class="row mt-2" id="daftar-menu">

        </div>
    </div>


    <div class="container" style="margin-top: 20px">
	<div class="col-md-12">

	</div>
	<table class="table table-striped table-bordered" id="table">
		<thead>
			<tr>
				<th>No. </th>
				<th>Kategori</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no=1;
				foreach($kategori as $jns){ ?>
					<tr>
						<td> <?= $no++; ?> </td>
						<td> <?= $jns->nama_kategori; ?> </td>
					</tr>
				<?php } ?>
		</tbody>
	</table>
</div>
<br>
<div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <center>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | TokoGrosirSumberJaya<i class="icon-heart text-danger" aria-hidden="true"></i></center>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>