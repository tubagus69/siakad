<?php

if (isset($_GET['id_shift']))
{
	$id_shift = $_GET['id_shift'];
	$sqltampil = mysql_query("SELECT * FROM shift WHERE id_shift='$id_shift'");
	$hasil = mysql_fetch_array($sqltampil);
			$id_shift = $hasil['id_shift'];
			$shift = $hasil['shift'];
			$jam_masuk = $hasil['jam_masuk'];
			$jam_keluar = $hasil['jam_keluar'];
						
if (isset($_POST['simpan']))
{	
	$shift = $_POST['shift'];
	$jam_masuk = $_POST['jam_masuk'];
	$jam_keluar = $_POST['jam_keluar'];
		$masuk = mysql_query("UPDATE shift SET  
							shift='$shift',
							jam_masuk='$jam_masuk',
							jam_keluar='$jam_keluar'
							where id_shift='$id_shift'");
										
				if($masuk)
						{ echo " <script> alert ('file berhasil disimpan'); 
								window.location ='admin.php?page2=tampil_shift';</script>"; 
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
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Data shift</h2>

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
											<label>Kode shift</label>
											<input class="form-control" type="text" name="id_shift" readonly value="<?php echo $id_shift; ?>">
										</div>
										
										<div class="form-group">
											<label>Nama shift</label>
											<td><?php if ($hasil['shift'] == "Pagi") : ?>
												<input type="radio" name="shift" value="Pagi" id="Pagi" checked /><label for="Pagi">Pagi</label>
												<input type="radio" name="shift" value="Siang" id="Siang" /><label for="Siang">Siang</label>
												<?php else : ?>
												<input type="radio" name="shift" value="Pagi" id="Pagi" /><label for="Pagi">Pagi</label>
												<input type="radio" name="shift" value="Siang" id="Siang" checked /><label for="Siang">Siang</label>
												<?php endif; ?></td>
										</div>
										
										<div class="form-group">
											<label>Jam Masuk</label>
											<input class="form-control" type="text" name="jam_masuk" value="<?php echo $jam_masuk; ?>">
										</div>
										
										<div class="form-group">
											<label>Jam Keluar</label>
											<input class="form-control" type="text" name="jam_keluar" value="<?php echo $jam_keluar; ?>">
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
   