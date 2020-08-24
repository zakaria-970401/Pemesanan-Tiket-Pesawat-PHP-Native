<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 40px;">No</th>
		<th style="width: 250px;">Nomor Konsumen</th>
		<th style="width: 250px;">Tanggal Berangkat</th>
		<th style="width: 250px;">Hari Berangkat</th>
		<th style="width: 250px;">Waktu Berangkat</th>
		<th style="width: 250px;">Kode Tujuan</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_tiket ORDER BY no_konsumen ASC"; 
	$hasil=mysql_query($sql) or die(mysql_error());
	$no=1;
	while ($data = mysql_fetch_array ($hasil)){
		?>
		<tr>

			<td><p align=center><?php echo $no++?></td>
			<td><p align=center><?php echo $data['no_konsumen'];?></td>
			<td><p align=center><?php echo $data['tgl_berangkat']; ?></td>
			<td><p align=center><?php echo $data['hari_berangkat']; ?></td>
			<td><p align=center><?php echo $data['waktu_berangkat']; ?></td>
			<td><p align=center><?php echo $data['no_tujuan']; ?></td>
			
		</tr>
		<?php } ?>
	</table>
