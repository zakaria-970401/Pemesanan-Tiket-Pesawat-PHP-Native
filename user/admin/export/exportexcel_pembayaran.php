<?php
	include ('conn.php');
	date_default_timezone_set("Asia/Jakarta");
	$sekarang = date('d-m-Y(H-i)', time());
	$nama = "Data Daftar Pembayaran Tiket-".$sekarang.".xls";
	header("Content-Disposition: attachment; filename='$nama'");
	header("Content-Type: application/vnd.ms-excel");
?>
<p align="center"> <th bgcolor="#FFE4C4"> -Data Daftar Pembayaran Tiket-</p></th>
<table border="3px">
	<tr>
		<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Nomor Konsumen</th>
		<th bgcolor="#FFE4C4">Nomor Tiket</th>
		<th bgcolor="#FFE4C4">Tanggal Berangkat</th>
		<th bgcolor="#FFE4C4">Hari Berangkat</th>
		<th bgcolor="#FFE4C4">Waktu Berangkat</th>
		<th bgcolor="#FFE4C4">Kode Tujuan</th>
		<th bgcolor="#FFE4C4">Jumlah tiket</th>
		<th bgcolor="#FFE4C4">Tagihan</th>

			</tr>	

	</tr>
	<?php
		$sql = mysql_query("SELECT * FROM tbl_konsumen inner join tbl_tiket on tbl_konsumen.no_identitas=tbl_tiket.no_konsumen join tbl_pembayaran on tbl_tiket.no_tiket=tbl_pembayaran.no_tiket"); 
		$no =1;
		while ($data =  mysql_fetch_assoc($sql)) 
		{
			$id=$data['no_tiket'];
			$identitas=$data['no_identitas'];
			$total=$data['total_pembayaran'];
				
			?>
					<tr>
					<td><p align=center><?php echo $no++?></td>
					<td><p align=center><?php echo $data['no_konsumen'];?></td>
					<td><p align=center><?php echo $data['no_tiket']; ?></td>
					<td><p align=center><?php echo $data['tgl_berangkat']; ?></td>
					<td><p align=center><?php echo $data['hari_berangkat']; ?></td>
					<td><p align=center><?php echo $data['waktu_berangkat']; ?></td>
					<td><p align=center><?php echo $data['no_tujuan']; ?></td>
					<td><p align=center><?php echo $data['jumlah_tiket']; ?></td>
					<td><p align=center><?php echo number_format($total,0,".","."); ?></td>

				</tr>
				<?php } ?>
	
</table>