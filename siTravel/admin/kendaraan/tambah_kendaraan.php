<?php

	if (isset($_POST['simpan']))
	{
	$id_kendaraan = $_POST['id_kendaraan'];
	$merk = $_POST['merk'];	
	$warna=$_POST['warna'];
	$no_polisi=$_POST['no_polisi'];
	$no_rangka=$_POST['no_rangka'];
	$no_mesin=$_POST['no_mesin'];
	$transmisi=$_POST['transmisi'];
	$lokfoto = $_FILES['foto_kendaraan']['tmp_name'];
	$namfoto = $_FILES['foto_kendaraan']['name'];
	$dirfoto = "./photo/";
		
		if (is_uploaded_file($lokfoto))
		{
		move_uploaded_file($lokfoto, $dirfoto.$namfoto);
		}
		
	$masuk = mysql_query("insert into kendaraan 
				(id_kendaraan, merk, warna, no_polisi, no_rangka, no_mesin, transmisi, foto_kendaraan) 
				values 
				('$id_kendaraan', '$merk', '$warna', '$no_polisi', '$no_rangka', '$no_mesin', '$transmisi', '$namfoto')"); 
					
				if($masuk)
						{ echo " <script> alert ('file berhasil disimpan'); 
								 window.location ='admin.php?page2=tampil_kendaraan'</script>"; 
						}
				else
						{ echo "<script> alert ('gagal simpan'); 
								window.location='admin.php?page2=tambah_kendaraan'</script>"; 
						} 
						
	
						
	}
	

$query=mysql_query("select max(id_kendaraan)As akhir from kendaraan")or die (mysql_error());
$row=mysql_fetch_array($query);
$hasil=$row['akhir'];
$next=substr($hasil,3,4)+1;
$next_hasil='KN-'.sprintf('%03s',$next);

?>	

<script src="libs/jquery.js"></script>
		<script type="text/javascript" src="libs/jquery.validate.js"></script>
		<script type="text/javascript" src="libs/messages_id.js"></script>
<script>$(document).ready(function() {
				$("#formpeminjam").validate();
			});
</script>

  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

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
											<label>ID kendaraan</label>
											<input class="form-control" name="id_kendaraan" type="text" value=<?php echo" $next_hasil";?> READONLY>
										</div>
										
										<div class="form-group">
											<label>Merk</label>
											<input class="form-control" name="merk" type="text">
										</div>
										
										<div class="form-group">
											<label>No Polisi</label>
											<input class="form-control" name="no_polisi" type="text">
										</div>
										
										<div class="form-group">
											<label>No Rangka</label>
											<input class="form-control" name="no_rangka" type="text">
										</div>
										
										<div class="form-group">
											<label>No Mesin</label>
											<input class="form-control" name="no_mesin" type="text">
										</div>
																			
										<div class="form-group">
											<label>Warna</label>
											<input class="form-control" name="warna" type="text">
										</div>
										
										<div class="form-group">
											<label>Transmisi</label>
											<input class="form-control" name="transmisi" type="text">
										</div>
										
										<div class="form-group">
											<label>Foto kendaraan</label>
											<input name="foto_kendaraan" type="file">
										</div>
										
										
										
										<div class="form-group">
										<input class="btn btn-primary" type='submit' value='Simpan' name='simpan'>
										<br><br>
										</div>
										
									</fieldset>
									
								</form></div>
        </div></div>
   