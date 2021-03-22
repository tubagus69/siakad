<div class="container">

	<div class="row mt-4 mb-3">
		<div class="col-md-6">
			<a href="<?= base_url().'Skill/tambah'; ?>" class="btn btn-primary">Tambah Data</a>

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
	<?php if(empty($pemain)): ?>
	<div class="alert alert-danger" role="alert">
		Data tidak ditemukan
	</div>
	<?php endif; ?>
	<table class="table" id="myTable">
		<thead class="thead-dark">
			<tr>
				
				<th scope="col">Nama</th>
				<th scope="col">Speed</th>
				<th scope="col">Dribble</th>
				<th scope="col">Power</th>
                <th scope="col">Rata-Rata</th>
				
				
				
				
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($pemain as $data) : ?>
			<tr>

				
				<td><?= $data['nama'] ?></td>
				<td><?= $data['speed'] ?></td>
				<td><?= $data['drible'] ?></td>
				<td><?= $data['power'] ?></td>
                <td><?= ($data['speed'] + $data['drible'] + $data['power']) / 3 ?></td>
				<td>
					<a href="<?= base_url(); ?>Skill/hapus/<?= $data['id'] ;?>" class="btn btn-danger float-right"
						onClick="return confirm('yakin mau hapus');">
						<i class="fa fa-trash" aria-hidden="true"></i>
					</a>
					<a href="<?= base_url(); ?>Skill/edit/<?= $data['id'] ;?>" class="btn btn-warning float-right mr-2">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
					<a href="<?= base_url(); ?>Skill/detail/<?= $data['id'] ;?>" class="btn btn-primary float-right mr-2">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
