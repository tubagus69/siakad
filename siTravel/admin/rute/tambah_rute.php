<?php

	if (isset($_POST['simpan']))
	{
	$deskripsi_rute = $_POST['deskripsi_rute'];
	$alamat_jemput = $_POST['alamat_jemput'];
	$id_jadwal = $_POST['id_jadwal'];
	

	
		$masuk = mysql_query("insert into rute(id_jadwal, deskripsi_rute, alamat_jemput) 
										  values 
												('$id_jadwal', '$deskripsi_rute', '$alamat_jemput')"); 
				
				if($masuk){ echo " <script> alert ('file berhasil disimpan'); 
					window.location ='admin.php?page2=tampil_rute'</script>"; 
						}
				else{ echo "<script> alert ('gagal simpan'); 
					window.location='admin.php?page2=tambah_rute'</script>"; 
					} 
				
		}		
	

?>	

  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Tambah Rute Keberangkatan</h2>

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
											<label>Deskripsi Rute</label>
											<textarea class="form-control" name='deskripsi_rute' rows="3"></textarea>
										</div>
										
										<div class="form-group">
											<label>Alamat Jemput</label>
											<textarea class="form-control" name='alamat_jemput' rows="3"></textarea>
										</div>
										
										
										<div class="form-group">
											<label>Destinasi</label>
											<select name='id_jadwal' class="form-control">
											<option value='0'>Pilih Destinasi</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from jadwal");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_jadwal]'>
														$r[id_jadwal] - $r[tujuan]
													</option>";
													
											}			
												echo"</select>";	
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
   