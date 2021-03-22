<div class="container">

	<div class="row mt-4 mb-3">
		<div class="col-md-6">
			<a href="<?= base_url().'siswa/tambah'; ?>" class="btn btn-primary">Tambah Data</a>

			<div class="row mt-2">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Cari Data Pemain" name="keyword">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php if(empty($siswa)): ?>
	<div class="alert alert-danger" role="alert">
		Data tidak ditemukan
	</div>
	<?php endif; ?>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				
				<th scope="col">Nama</th>
				<!-- <th scope="col">Alamat</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Posisi</th> -->
				<th scope="col">Foto</th>
				
				
				
				
				<th scope="col" width="15%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($siswa as $data) : ?>
			<tr>

				
				<td><?= $data['nama'] ?></td>
				<!-- <td><?= $data['alamat'] ?></td>
				<td><?= $data['nim'] ?></td>
				<td><?= $data['keahlian'] ?></td> -->
				<td> <img width="100" src="<?=base_url();?>image/<?=$data['foto'];?>"></td>

				<td>
					<a href="<?= base_url(); ?>siswa/hapus/<?= $data['id'] ;?>" class="btn btn-danger float-right"
						onClick="return confirm('yakin mau hapus');">
						<i class="fa fa-trash" aria-hidden="true"></i>
					</a>
					<a href="<?= base_url(); ?>siswa/edit/<?= $data['id'] ;?>" class="btn btn-warning float-right mr-2">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
					<a href="<?= base_url(); ?>siswa/detail/<?= $data['id'] ;?>" class="btn btn-primary float-right mr-2">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
