<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<h1 style="text-align: center; margin-bottom: 30px">Detail Pemain</h1>
	</div>
	<table class="table table-striped table-bordered" id="list_mhs">
				
				
				<th>Nama</th>
				<th>No. Induk </th>
                <th>Alamat </th>
                <th>Keahlian </th>
				<th>Foto </th>
			</tr>
		</thead>
		<tbody>
			
					<tr>
						
						<td> <li class="list-group-item" > <?= $siswa['nama']?> </li> </td>
						<td> <li class="list-group-item"  > <?= $siswa['nim']?> </li> </td>
						<td> <li class="list-group-item" >  <?= $siswa['alamat']?> </li> </td>
            <td> <li class="list-group-item" >  <?= $siswa['keahlian']?> </li> </td>
                        <td> <img width="100" src="<?=base_url();?>image/<?=$siswa['foto'];?>"></td>
                        
                    </tr>
				
		</tbody>
        
	</table>
    
<a href="<?= base_url();?>Siswa" class="btn btn-primary"> Kembali </a>
</div>