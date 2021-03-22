<?php

if (isset($_GET['id_kendaraan']))
{
	$id_kendaraan = $_GET['id_kendaraan'];
	$sqltampil = mysql_query("SELECT * FROM kendaraan WHERE id_kendaraan='$id_kendaraan'");
	$hasil = mysql_fetch_array($sqltampil);
			$id_kendaraan = $hasil['id_kendaraan'];
			$merk=$hasil['merk'];
			$warna=$hasil['warna'];
			$transmisi=$hasil['transmisi'];
			$no_polisi=$hasil['no_polisi'];
			$no_rangka=$hasil['no_rangka'];
			$no_mesin=$hasil['no_mesin'];
			$foto_kendaraan = $hasil['foto_kendaraan'];
			
			
if (isset($_POST['simpan']))
{
			$merk=$_POST['merk'];
			$warna=$_POST['warna'];
			$transmisi=$_POST['transmisi'];
			$no_polisi=$_POST['no_polisi'];
			$no_rangka=$_POST['no_rangka'];
			$no_mesin=$_POST['no_mesin'];
					
			if (isset($_FILES['foto_kendaraan']['tmp_name']))
			{
				$dir ="./photo/";
				$foto_kendaraan = $_FILES['foto_kendaraan']['name'];
				if (is_uploaded_file($_FILES['foto_kendaraan']['tmp_name']))
				{
					move_uploaded_file($_FILES['foto_kendaraan']['tmp_name'], $dir.$foto_kendaraan);
					$sqlfoto = mysql_query("UPDATE kendaraan SET 
											foto_kendaraan='$foto_kendaraan'
											WHERE id_kendaraan='$id_kendaraan'");
				}
			}
	$sqlupdate = mysql_query("UPDATE kendaraan SET 
								merk='$merk', 
								warna='$warna',
								transmisi='$transmisi',
								no_polisi='$no_polisi',
								no_rangka='$no_rangka',
								no_mesin='$no_mesin'
								WHERE id_kendaraan='$id_kendaraan'")or die(mysql_error());
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); 
				window.location='admin.php?page2=tampil_kendaraan'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
}
}
else{
	echo "Tid_kendaraanak ada id_kendaraan yang dipilih !!!";
}
?>
  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Data kendaraan</h2>

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
											<input class="form-control" type="text" name="id_kendaraan" readonly value="<?php echo $id_kendaraan; ?>">
										</div>
										
										<div class="form-group">
											<label>Merk</label>
											<input class="form-control" type="text" name="merk" value="<?php echo $merk; ?>">
										</div>
																	
										<div class="form-group">
											<label>Warna </label>
											<input class="form-control" type="text" name="warna" value="<?php echo $warna; ?>">
										</div>
										
										<div class="form-group">
											<label>Transmisi</label>
											<input class="form-control" type="text" name="transmisi"  value="<?php echo $transmisi; ?>">
										</div>
										
										<div class="form-group">
											<label>No Polisi</label>
											<input class="form-control" type="text" name="no_polisi"  value="<?php echo $no_polisi; ?>">
										</div>
										
										<div class="form-group">
											<label>No Rangka</label>
											<input class="form-control" type="text" name="no_rangka"  value="<?php echo $no_rangka; ?>">
										</div>
										
										<div class="form-group">
											<label>No Mesin</label>
											<input class="form-control" type="text" name="no_mesin"  value="<?php echo $no_mesin; ?>">
										</div>
																														
										<div class="form-group">
											<label>Foto kendaraan</label><br>
											<img src="./photo/<?php echo $foto_kendaraan; ?>" width="70px">
											<input name="foto_kendaraan" type="file">
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
   