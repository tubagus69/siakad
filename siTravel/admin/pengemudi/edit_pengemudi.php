<?php

if (isset($_GET['id_pengemudi']))
{
	$id_pengemudi = $_GET['id_pengemudi'];
	$sqltampil = mysql_query("SELECT * FROM pengemudi WHERE id_pengemudi='$id_pengemudi'");
	$hasil = mysql_fetch_array($sqltampil);
			$id_pengemudi = $hasil['id_pengemudi'];
			$nama_pengemudi=$hasil['nama_pengemudi'];
			$alamat=$hasil['alamat'];
			$no_telp=$hasil['no_telp'];
			$id_kendaraan=$hasil['id_kendaraan'];
			$foto_pengemudi = $hasil['foto_pengemudi'];
			
			
if (isset($_POST['simpan']))
{
			$nama_pengemudi= $_POST['nama_pengemudi'];
			$alamat= $_POST['alamat'];
			$no_telp=$_POST['no_telp'];
			$id_kendaraan=$_POST['id_kendaraan'];
					
			if (isset($_FILES['foto_pengemudi']['tmp_name']))
			{
				$dir ="./photo/";
				$foto_pengemudi = $_FILES['foto_pengemudi']['name'];
				if (is_uploaded_file($_FILES['foto_pengemudi']['tmp_name']))
				{
					move_uploaded_file($_FILES['foto_pengemudi']['tmp_name'], $dir.$foto_pengemudi);
					$sqlfoto = mysql_query("UPDATE pengemudi SET 
											foto_pengemudi='$foto_pengemudi'
											WHERE id_pengemudi='$id_pengemudi'");
				}
			}
	$sqlupdate = mysql_query("UPDATE pengemudi SET 
								nama_pengemudi='$nama_pengemudi', 
								alamat='$alamat',
								no_telp='$no_telp',
								id_kendaraan='$id_kendaraan'
								WHERE id_pengemudi='$id_pengemudi'")or die(mysql_error());
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); 
				window.location='admin.php?page2=tampil_pengemudi'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
}
}
else{
	echo "Tid_pengemudiak ada id_pengemudi yang dipilih !!!";
}
?>
  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Data pengemudi</h2>

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
											<label>ID Pengemudi</label>
											<input class="form-control" type="text" name="id_pengemudi" readonly value="<?php echo $id_pengemudi; ?>">
										</div>
										
										<div class="form-group">
											<label>Nama Pengemudi</label>
											<input class="form-control" type="text" name="nama_pengemudi" value="<?php echo $nama_pengemudi; ?>">
										</div>
																	
										<div class="form-group">
											<label>Alamat Pengemudi</label>
											<textarea class="form-control" name="alamat" rows="3"> <?php echo $alamat; ?></textarea>
										</div>
										
										<div class="form-group">
											<label>No Telepon</label>
											<input class="form-control" type="number" name="no_telp"  value="<?php echo $no_telp; ?>">
										</div>
										
										<div class="form-group">
											<label>ID Kendaraan</label>
											<select name='id_kendaraan' class='form-control'>
											<?php
											$tampil=("SELECT * FROM kendaraan");
											$query_hasil=mysql_query($tampil);
											while($r=mysql_fetch_array($query_hasil))
											{
											if ($hasil['id_kendaraan'] == $r['id_kendaraan'])
											{
											echo "<option value=$r[id_kendaraan] selected>$r[merk]</option>";
											}
											else
											{
											echo "<option value=$r[id_kendaraan]>$r[merk]</option>";
											}
											}
											?>
											</select>
										</div>
																														
										<div class="form-group">
											<label>Foto pengemudi</label><br>
											<img src="./photo/<?php echo $foto_pengemudi; ?>" width="70px">
											<input name="foto_pengemudi" type="file">
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
   