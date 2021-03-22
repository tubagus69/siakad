

<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>	
	
<div class='kotak'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/2.css">
<div class='center3'>
<?php
					
					$item_per_page = 5;
					if (isset($_GET['page']))
					{
						$page = $_GET['page'];
					}
					else
					{
						$page = 1;
					}
					$query = "SELECT * FROM artikel ORDER BY id DESC";
					$sql = mysql_query($query);
					$jumlah_data = mysql_num_rows($sql);
					$jumlah_hal = ceil($jumlah_data/$item_per_page);
					if ($page > $jumlah_hal)
					{
						$page = $jumlah_hal;
					}
					$lanjut = $page + 1;
					$sebelum = $page - 1;
					
					$batas = ($page-1) * $item_per_page;
					$query_ = "select * from artikel ORDER BY id DESC LIMIT $batas,$item_per_page;";
					$sql_ = mysql_query($query_);
				echo "<center><table border='0' align='left' width='100%' class='tablelartikel'>";
				echo"<p align='right'><input type='button' value='Tambah Artikel' onclick=\"window.location.href='utama.php?page2=tartikel';\">
					<h3><p align='center'><b>Daftar Berita </h3></b></p>
<tr>
	";
while($c=mysql_fetch_array($sql_))
{?>	
<tr>
<td width='90%' colspan="3" class='jdul'><p align='left'><h2><a href="utama.php?page2=isiartikel&&id=<?php echo "$c[id]"; ?>"><?php echo $c['judul']; ?></a></h2>
</td>
<?php
		if($c['username'] == $_SESSION['login_username']) {
?>
<td width='10%' class="tdedit">
<a href="utama.php?page2=eartikel&&id=<?php echo $c['id']; ?>">Edit</a> | 
<?php echo"<a href='utama.php?page2=dartikel&id=$c[id]&gambar=$c[gambar]'>Delete</a><br>";?> 
</td>
</tr>
<tr><td colspan='2'>
		<?php echo $c['tgl_posting']; ?></td>
</tr>
        <tr>
		<td width='12%'><p><?php echo "<img src='photo/$c[gambar]' width='200px' height='100px'>"; ?></p></td>
        <td><p align='justify'><?php echo $w=substr($c['isi'],0,350); ?></p>
      [ <a href="utama.php?page2=isiartikel&&id=<?php echo "$c[id]"; ?>"><i>read more</a> ]</i></p><br></td>
	</td>

</tr>

<?php
		}else  {
?>

</tr>
<tr><td colspan='2'>
		<?php echo $c['tgl_posting']; ?></td>
</tr>
        <tr>
		<td width='12%'><p><?php echo "<img src='photo/$c[gambar]' width='200px' height='100px'>"; ?></p></td>
        <td><p align='justify'><?php echo $w=substr($c['isi'],0,350); ?></p>
      [ <a href="utama.php?page2=isiartikel&&id=<?php echo "$c[id]"; ?>"><i>read more</a> ]</i></p><br></td>
	</td>

</tr>
		<?php } ?>


				<?php
					}
					
					echo "<tr>
					<td colspan='2' align='center'>
					<a href='?page2=artikel&page=$sebelum' class='navigasi' title='Sebelumnya'> Prev&nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=artikel&page=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=artikel&page=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; Next</a></center>
					</td>
						</tr>
							</table>";
				?>

  </div>  </div>  </div> 			
