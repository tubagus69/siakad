<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<h1 style="text-align: center; margin-bottom: 30px">Detail Ability</h1>
	</div>
	<table class="table table-striped table-bordered" id="list_mhs">
				
				
				<th>Nama</th>
				<th>Speed </th>
                <th>Dribble </th>
                <th>Power </th>
				
			</tr>
		</thead>
		<tbody>
			
					<tr>
						
						<td> <li class="list-group-item" > <?= $pemain['nama']?> </li> </td>
						<td> <li class="list-group-item"  > <?= $pemain['speed']?> </li> </td>
						<td> <li class="list-group-item" >  <?= $pemain['drible']?> </li> </td>
                        <td> <li class="list-group-item" >  <?= $pemain['power']?> </li> </td>
                        
                    </tr>
				
		</tbody>
        
	</table>
    
<a href="<?= base_url();?>Skill" class="btn btn-primary"> Kembali </a>
</div>