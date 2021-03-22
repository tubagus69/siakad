<?php

if (isset($_GET['id_tanggal']))
{
	$id_tanggal = $_GET['id_tanggal'];
	$sqltampil = mysql_query("SELECT * FROM tanggal_keberangkatan WHERE id_tanggal='$id_tanggal'");
	$hasil = mysql_fetch_array($sqltampil);
			$tanggal = $hasil['tanggal'];
			$id_jadwal = $hasil['id_jadwal'];
			
			
if (isset($_POST['simpan']))
{	
			$tanggal = $_POST['tanggal'];
			$id_jadwal = $_POST['id_jadwal'];

		$masuk = mysql_query("UPDATE tanggal_keberangkatan SET  
							tanggal='$tanggal',
							id_jadwal='$id_jadwal'
							where id_tanggal='$id_tanggal'");
										
				if($masuk)
						{ echo " <script> alert ('file berhasil disimpan'); 
								window.location ='admin.php?page2=tampil_tanggal';</script>"; 
						}
				
				else	
						{ echo "<script> alert ('gagal simpan'); </script>"; 
						} 		
}
}
else{
	echo "Tidak ada id yang dipilih !!!";
}
?>
  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Tanggal Keberangkatan</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">			  				
			  				
			  					<form method='POST' enctype='multipart/form-data'>
		<fieldset>
									
											
										
										<div class="form-group">
											<label>Tanggal</label>
											<input class="form-control" type="date" name="tanggal" value="<?php echo $tanggal; ?>">
										</div>
										
										
										<div class="form-group">
											<label>Destinasi</label>
											<select name='id_jadwal' class='form-control'>
											<?php
											$tampil=("SELECT * FROM jadwal");
											$query_hasil=mysql_query($tampil);
											while($r=mysql_fetch_array($query_hasil))
											{
											if ($hasil['id_jadwal'] == $r['id_jadwal'])
											{
											echo "<option value=$r[id_jadwal] selected>$r[tujuan]</option>";
											}
											else
											{
											echo "<option value=$r[id_jadwal]>$r[tujuan]</option>";
											}
											}
											?>
											</select>
										</div>
														
										
										<div class="form-group">
										<input class="btn btn-primary" type='submit' value='Simpan' name='simpan'>
										<br><br>
										</div>
										
									</fieldset>
									<div>
																				
											
									</div>
								</form></div>
        </div>
   