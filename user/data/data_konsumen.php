<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
		<th style="width: 100px;">Nomor Indentitas</th>
		<th style="width: 140px;">Nama Konsumen</th>
		<th style="width: 140px;">Alamat</th>
		<th style="width: 140px;">Nomor Telepon</th>
		<th style="width: 100px;">Jenis kelamin</th>
		<th style="width: 100px;">TTL</th>
		
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_konsumen ORDER BY no_identitas ASC"; 
	$hasil=mysql_query($sql) or die(mysql_error());
	$no=1;
	while ($data = mysql_fetch_array ($hasil)){
		$id=$data['no_identitas'];
		$nm=$data['nama_konsumen'];
		$jenis=$data['jenis_kelamin'];
		$alamat=$data['almt_komsumen'];
		$nohp=$data['telepon'];
		$tmpt=$data['tmp_lahir'];
		$tgl=date('Y-m-d', strtotime($data['tgl_lahir']));
	

		?>
		<tr>

			<td><p align=center><?php echo $no++?></td>
			<td><p align=center><?php echo $id;?></td>
			<td><p align=center><?php echo $nm; ?></td>
			<td><p align=center><?php echo $alamat; ?></td>
			<td><p align=center><?php echo $nohp; ?></td>
			<td><p align=center><?php echo $jenis; ?></td>
			<td><p align=center><?php echo "$tmpt, $tgl"; ?></td>
		
		<?php } ?>
	</table>
