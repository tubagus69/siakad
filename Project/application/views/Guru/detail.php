<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<h1 style="text-align: center; margin-bottom: 30px">Detail Pelatih</h1>
	</div>
	<table class="table table-striped table-bordered" id="list_mhs">
				
				
				<th>Nama</th>
				<th>Tanggal Lahir </th>
                <th>Club </th>
                <th>Posisi </th>
				<th>Foto </th>
			</tr>
		</thead>
		<tbody>
			
					<tr>
						
						<td> <li class="list-group-item" > <?= $mahasiswa['nama']?> </li> </td>
						<td> <li class="list-group-item" >  <?= $mahasiswa['nim']?> </li> </td>
						<td> <li class="list-group-item"  > <?= $mahasiswa['email']?> </li> </td>
           				<td> <li class="list-group-item" >  <?= $mahasiswa['jurusan']?> </li> </td>
                        <td> <img width="100" src="<?=base_url();?>image/<?=$mahasiswa['foto'];?>"></td>
                        
                    </tr>
				
		</tbody>
        
	</table>
    
<a href="<?= base_url();?>Guru" class="btn btn-primary"> Kembali </a>
</div>