<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 50px;">No</th>
		<th style="width: 150px;">Nomor Pegawai</th>
		<th style="width: 150px;">Nama Pegawai</th>
		<th style="width: 150px;">Alamat</th>
		<th style="width: 150px;">Nomor Telepon</th>
		<th style="width: 100px;">Jenis kelamin</th>
		<th style="width: 300px;">TTL</th>
		<th style="width: 80px;">Delete</th>
		<th style="width: 80px;">Edit</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_pegawai ORDER BY no_pegawai ASC"; 
	$hasil=mysql_query($sql) or die(mysql_error());
	$no=1;
	while ($data = mysql_fetch_array ($hasil)){
		$id=$data['no_pegawai'];
		$nm=$data['nama_pegawai'];
		$jenis=$data['jenis_kelamin'];
		$alamat=$data['alamat_pegawai'];
		$nohp=$data['telepon'];
		$tmpt=$data['tmp_lahir'];
		$tgl=date('Y-m-d', strtotime($data['tgl_lahir']));
		$umur=$data['umur'];
	

		?>
		<tr>

			<td><p align=center><?php echo $no++?></td>
			<td><p align=center><?php echo $id;?></td>
			<td><p align=center><?php echo $nm; ?></td>
			<td><p align=center><?php echo $alamat; ?></td>
			<td><p align=center><?php echo $nohp; ?></td>
			<td><p align=center><?php echo $jenis; ?></td>
			<td><p align=center><?php echo "$tmpt, $tgl"; ?></td>
			<td class="delete">
				<a href="deletepegawai.php?id_pegawai=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="editpegawai.php?id_pegawai=<?php echo $id?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Dasta"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>
