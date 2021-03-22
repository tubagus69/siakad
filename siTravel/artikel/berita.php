<div id='center2'>
<div class='kotak'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/2.css">
<div class='center3'>
<b><h3><p align="center">Daftar Berita </h3></b></p>
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
				echo"
<tr>
	";
while($c=mysql_fetch_array($sql_))
{?>	
<tr>
<td width='90%' colspan="3" class='jdul'><p align='left'><h2><a href="index.php?page2=isiberita&&id=<?php echo "$c[id]"; ?>"><?php echo $c['judul']; ?></a></h2>
</td>

</tr>
<tr><td colspan='2'>
		<?php echo $c['tgl_posting']; ?></td>
</tr>
        <tr>
		<td width='12%'><p><?php echo "<img src='photo/$c[gambar]' width='200px' height='100px'>"; ?></p></td>
        <td><p align='justify'><?php echo $w=substr($c['isi'],0,350); ?></p>
      [ <a href="index.php?page2=isiberita&&id=<?php echo "$c[id]"; ?>"><i>read more</a> ]</i></p><br></td>
	</td>

</tr>



				<?php
					}
					
					echo "<tr>
					<td colspan='2' align='center'>
					<a href='?page2=berita&page=$sebelum' class='navigasi' title='Sebelumnya'> Prev&nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=berita&page=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=berita&page=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; Next</a></center>
					</td>
						</tr>
							</table>";
				?>

  </div>  </div> 	</div>			
