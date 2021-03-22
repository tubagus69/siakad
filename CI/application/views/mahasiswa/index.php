<!--?php
var_dump($mahasiswa);
?-->
<table class="table table-bordered">
<thead>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
          <a href="<?= base_url();?>tambah"class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Daftar Mahasiswa</h2>
        <tr>
			<th>id</th>
			<th>nama</th>
			<th>email</th>
			<th>nim</th>
            <th>jurusan</th>
            <th>EDIT</th>
		</tr>
    <ul class="list-group">
        <?php foreach($mahasiswa as $mhs):?>
		
    </thead>
    <tbody>
		<tr>
            <td><?php echo $mhs['id'];?></td>
            <td><?php echo $mhs['nama'];?></td>
            <td><?php echo $mhs['email'];?></td>
            <td><?php echo $mhs['nim'];?></td>
            <td><?php echo $mhs['jurusan'];?></td>
            <td><a href="<?= base_url();?>hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right"
            onclick="return confirm('Yakin data ini akan dihapus?')" >HAPUS</a>
            <a href="<?= base_url();?>detail/<?=$mhs ['id'];?>"class="badge badge-warning float-right">detail</a>
            <a href="<?= base_url();?>edit/<?=$mhs ['id'];?>"class="badge badge-primary float-right">edit</a>
            
            </td>

		</tr>
	</tbody>

    <?php endforeach;?>
    </ul>
</div>
</div>
</div>
</table>