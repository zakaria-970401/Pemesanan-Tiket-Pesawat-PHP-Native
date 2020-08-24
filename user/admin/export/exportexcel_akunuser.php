<?php
	include ('conn.php');
	date_default_timezone_set("Asia/Jakarta");
	$sekarang = date('d-m-Y(H-i)', time());
	$nama = "Data Daftar Tiket-".$sekarang.".xls";
	header("Content-Disposition: attachment; filename='$nama'");
	header("Content-Type: application/vnd.ms-excel");
?>
<p align="center"> <th bgcolor="#FFE4C4"> -Data Daftar Tiket-</p></th>
<table border="3px">
	<tr>
		<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Nama Lengkap</th>
		<th bgcolor="#FFE4C4">No. Telpon</th>
		<th bgcolor="#FFE4C4">Alamat</th>
		<th bgcolor="#FFE4C4">Jenis Kelamin</th>
		<th bgcolor="#FFE4C4">Username</th>
		<th bgcolor="#FFE4C4">Password</th>

	</tr>
	<?php
		$sql = mysql_query("SELECT * FROM tbl_akunuser");
		$no =1;
		while ($data =  mysql_fetch_assoc($sql)) 
		{
			?>
					<tr>
					<td><p align=center><?php echo $no++?></td>
			<td><p align=center><?php echo $data['nama_lengkap'];?></td>
			<td><p align=center><?php echo $data['no_telpon']; ?></td>
			<td><p align=center><?php echo $data['alamat']; ?></td>
			<td><p align=center><?php echo $data['jenis_kelamin'];?></td>
			<td><p align=center><?php echo $data['username']; ?></td>
			<td><p align=center><?php echo $data['password']; ?></td>
		

				</tr>
				<?php } ?>
	
</table>