<?php

	if (isset($_POST['simpan']))
	{
	$tanggal = $_POST['tanggal'];
	$id_jadwal = $_POST['id_jadwal'];
	

	
		$masuk = mysql_query("insert into tanggal_keberangkatan(id_jadwal, tanggal) 
										  values 
												('$id_jadwal', '$tanggal')"); 
				
				if($masuk){ echo " <script> alert ('file berhasil disimpan'); 
					window.location ='admin.php?page2=tampil_tanggal'</script>"; 
						}
				else{ echo "<script> alert ('gagal simpan'); 
					window.location='admin.php?page2=tambah_tanggal'</script>"; 
					} 
				
		}		
	

?>	

  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Tambah Tanggal Keberangkatan</h2>

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
											<input class="form-control" name="tanggal" type="date">
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
   