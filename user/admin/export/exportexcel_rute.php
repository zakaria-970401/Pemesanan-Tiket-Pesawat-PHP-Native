<?php
	include ('conn.php');
	date_default_timezone_set("Asia/Jakarta");
	$sekarang = date('d-m-Y(H-i)', time());
	$nama = "Data Daftar Rute-".$sekarang.".xls";
	header("Content-Disposition: attachment; filename='$nama'");
	header("Content-Type: application/vnd.ms-excel");
?>
<p align="center"> <th bgcolor="#FFE4C4"> Data Daftar Rute</p></th>
<table border="3px">
	<tr>
		<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Kode Tujuan</th>
		<th bgcolor="#FFE4C4">kota Tujuan</th>
		<th bgcolor="#FFE4C4">No. Tiket</th>
		

	</tr>
	<?php
		$sql = mysql_query("SELECT * FROM tbl_tujuan");
		$no =1;
		while ($data =  mysql_fetch_assoc($sql)) 
		{
			?>
				<tr>
					<td><p align=center><?php echo $no++?></td>
					<td><p align=center><?php echo $data['no_tujuan'];?></td>
					<td><p align=center><?php echo $data['kota_tujuan']; ?></td>
					<td><p align=center><?php echo $data['no_tiket']; ?></td>
					
				</tr>
				<?php } ?>
	
</table>