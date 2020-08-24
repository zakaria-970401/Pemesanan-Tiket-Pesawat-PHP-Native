<?php
	include ('conn.php');
	date_default_timezone_set("Asia/Jakarta");
	$sekarang = date('d-m-Y(H-i)', time());
	$nama = "Data Pemesan Tiket Online -".$sekarang.".xls";
	header("Content-Disposition: attachment; filename='$nama'");
	header("Content-Type: application/vnd.ms-excel");
?>
<p align="center"> <th bgcolor="#FFE4C4"> Data Pemesan Tiket Online</p></th>
<table border="3px">
	<tr>
		<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Nomor Identitas</th>
		<th bgcolor="#FFE4C4">Nama Konsumen</th>
		<th bgcolor="#FFE4C4">Alamat</th>
		<th bgcolor="#FFE4C4">No.Telpon</th>
		<th bgcolor="#FFE4C4">Jenis Kelamin</th>
		<th bgcolor="#FFE4C4">Umur</th>
	</tr>
	<?php
		$sql = mysql_query("SELECT * FROM tbl_konsumen");
		$no =1;
		while ($data =  mysql_fetch_assoc($sql)) 
		{
			?>
			<tr>

			<td><p align=center><?php echo $no++?></td>
			<td><p align=center><?php echo $data['no_identitas'];?></td>
			<td><p align=center><?php echo $data['nama_konsumen'];?></td>
			<td><p align=center><?php echo $data['almt_komsumen'];?></td>
			<td><p align=center><?php echo $data['telepon'];?></td>
			<td><p align=center><?php echo $data['jenis_kelamin'];?></td>
			<td><p align=center><?php echo $data['umur'];?></td>
		
		</tr>
			<?php
		}
	?>
</table>