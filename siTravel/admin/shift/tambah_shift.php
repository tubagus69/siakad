<?php

	if (isset($_POST['simpan']))
	{
	$id_shift=$_POST['id_shift'];
	$shift = $_POST['shift'];
	$jam_masuk=$_POST['jam_masuk'];
	$jam_keluar = $_POST['jam_keluar'];
	
	$cekdata="select shift from shift where shift='$shift'"; 
	$ada=mysql_query($cekdata) or die(mysql_error());
	
	if(mysql_num_rows($ada)>0) 
		{
		echo"<script> alert ('MAAF Nama shift Telah ADA');
		window.location='admin.php?page2=tambah_shift'
		</script>";
		} 
	else {
	
		$masuk = mysql_query("insert into shift(id_shift,shift,jam_masuk,jam_keluar) 
										  values 
												('$id_shift','$shift','$jam_masuk','$jam_keluar')"); 
				if($masuk){ echo " <script> alert ('file berhasil disimpan'); 
					window.location ='admin.php?page2=tampil_shift'</script>"; 
						}
				else{ echo "<script> alert ('gagal simpan'); 
					window.location='admin.php?page2=tambah_shift'</script>"; 
					} 
				
		}		
		
	}

$query=mysql_query("select max(id_shift)As akhir from shift")or die (mysql_error());
$row=mysql_fetch_array($query);
$hasil=$row['akhir'];
$next=substr($hasil,1,2)+1;
$next_hasil='S'.sprintf('%02s',$next);
?>	

  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah shift</h2>

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
			  				
			  					<form method='POST' >
		<fieldset>
									
										<div class="form-group">
											<label>ID shift</label>
											<input class="form-control" name="id_shift" type="text" value=<?php echo" $next_hasil";?> READONLY>
										</div>
										
										<div class="form-group">
											<label>Shift</label>
											<input type='radio' name='shift' value='Pagi'>Pagi
											<input type='radio' name='shift' value='Siang'>Siang
										</div>
										
										<div class="form-group">
											<label>Jam Masuk</label>
											<input class="form-control" name="jam_masuk" type="text">
										</div>
										
										<div class="form-group">
											<label>Jam Keluar</label>
											<input class="form-control" name="jam_keluar" type="text">
										</div>
										
										
										<div class="form-group">
										<input class="btn btn-primary" type='submit' value='Simpan' name='simpan'>
										<br><br>
										</div>
										
									</fieldset>
									</div>
								</form></div>
        </div>
   