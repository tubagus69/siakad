<div class="container">

    <?= $this->session->flashdata('aktif');?>
	<div class="row mt-4 mb-3">
		<div class="col-md-6">
			<!-- <a href="<?= base_url().'siswa/tambah'; ?>" class="btn btn-primary">Tambah Data</a> -->

			<div class="row mt-2">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Cari Data User" name="keyword">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php if(empty($user)): ?>
	<div class="alert alert-danger" role="alert">
		Data tidak ditemukan
	</div>
	<?php endif; ?>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<!-- <th scope="col">ID</th> -->
				<th scope="col">Username</th>
				<th scope="col">level</th>
				<th scope="col">Status</th>
				<th scope="col">ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($user as $data) : ?>
			<tr>

				<!-- <td><?= $data['id'] ?></td> -->
				<td><?= $data['username'] ?></td>
				<td><?= $data['level'] ?></td>
				<td><?= $data['Status'] ?></td>
				<td>
                    <a href="<?= base_url(); ?>siswa/aktifkanUser/<?= $data['id'] ;?>" class="btn btn-primary float-right mr-2">
						Aktifkan
						<a href="<?= base_url(); ?>register/nonaktifkanUser/<?= $data['id'] ;?>" class="btn btn-danger float-right mr-2">
						Hapus
					</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
