<h1>Data Laporan</h1>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Bulan</td>
		<td>Tahun</td>
		<td>Jumlah Meter</td>
		<td>STATUS</td>
	</tr>
	<?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key->NAMA?></td>
					<td><?php echo $key->ALAMAT?></td>
					<td><?php echo $key->BULAN?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php if($key->STATUS == 0){echo "Belum di Bayar";}else{echo "Sudah di Bayar";}?></td>
				</tr>
			<?php }
		}else{?>
			<tr>
				<td colspan="7">Tidak Ada Data</td>
			</tr>
		<?php }
	?>
<table>

<script type="text/javascript">
	window.print();
</script>