<?php
	include ('conn.php');
	date_default_timezone_set("Asia/Jakarta");
	$sekarang = date('d-m-Y(H-i)', time());
	$nama = "Daftar Nama Pegawai-".$sekarang.".xls";
	header("Content-Disposition: attachment; filename='$nama'");
	header("Content-Type: application/vnd.ms-excel");
?>
<p align="center"> <th bgcolor="#FFE4C4"> -Daftar Nama Pegawai-</p></th>
<table border="3px">
	<tr>
		<th bgcolor="#FFE4C4">No</th>
		<th bgcolor="#FFE4C4">Nomor Pegawai</th>
		<th bgcolor="#FFE4C4">Nama Pegawai</th>
		<th bgcolor="#FFE4C4">Alamat</th>
		<th bgcolor="#FFE4C4">Tempat</th>
		<th bgcolor="#FFE4C4">Tanggal Lahir</th>
		<th bgcolor="#FFE4C4">Nomor Telepon</th>
		<th bgcolor="#FFE4C4">Umur</th>
		<th bgcolor="#FFE4C4">Jenis kelamin</th>
		<th bgcolor="#FFE4C4">Username</th>
		<th bgcolor="#FFE4C4">Password</th>

	</tr>
	<?php
		$sql = mysql_query("SELECT * FROM tbl_pegawai");
		$no =1;
		while ($data =  mysql_fetch_assoc($sql)) 
		{
			?>
					<tr>
					<td><p align=center><?php echo $no++?></td>
					<td><p align=center><?php echo $data['no_pegawai'];?></td>
					<td><p align=center><?php echo $data['nama_pegawai']; ?></td>
					<td><p align=center><?php echo $data['alamat_pegawai']; ?></td>
					<td><p align=center><?php echo $data['tmp_lahir']; ?></td>
					<td><p align=center><?php echo $data['tgl_lahir']; ?></td>
					<td><p align=center><?php echo $data['telepon']; ?></td>
					<td><p align=center><?php echo $data['jenis_kelamin']; ?></td>
					<td><p align=center><?php echo $data['umur_pegawai']; ?></td>
					<td><p align=center><?php echo $data['username']; ?></td>
					<td><p align=center><?php echo $data['password']; ?></td>
					
				</tr>
				<?php } ?>
	
</table>