<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 40px;">No</th>
		<th style="width: 100px;">Nomor Pembayaran</th>
		<th style="width: 160px;">Nomor Tiket</th>
		<th style="width: 140px;">Tanggal Pembayaran</th>
		<th style="width: 160px;">Hari Pembayaran</th>
		<th style="width: 120px;">Jumlah Tiket</th>
		<th style="width: 220px;">Harga Tiket</th>
		<th style="width: 220px;">Total Pembayaran</th>
	
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_pembayaran"; 
	$hasil=mysql_query($sql) or die(mysql_error());
	$no=1;
	while ($data = mysql_fetch_array ($hasil)){
		$id=$data['no_pembayaran'];
		$harga=$data['harga_tiket'];
		$total=$data['total_pembayaran'];
		
		?>
		<tr>

			<td><p align=center><?php echo $no++?></td>
			<td><p align=center><?php echo $data['no_pembayaran'];?></td>
			<td><p align=center><?php echo $data['no_tiket']; ?></td>
			<td><p align=center><?php echo $data['tgl_pembayaran']; ?></td>
			<td><p align=center><?php echo $data['hari_pembayaran']; ?></td>
			<td><p align=center><?php echo $data['jumlah_tiket']; ?></td>
			<td>Rp <?php echo number_format($harga,0,".","."); ?></td>
			<td>Rp <?php echo number_format($total,0,".","."); ?></td>
	
			
		</tr>
		<?php } ?>
	</table>
