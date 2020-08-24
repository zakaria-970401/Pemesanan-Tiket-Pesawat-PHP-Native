<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 60px;">No</th>
		<th style="width: 250px;">Nama Lengkap</th>
		<th style="width: 200px;">No. Telpon</th>
		<th style="width: 240px;">Alamat</th>
		<th style="width: 140px;">Jenis Kelamin</th>
		<th style="width: 140px;">Username</th>
		<th style="width: 140px;">Password</th>
		<th style="width: 40px;">Delete</th>
		<th style="width: 40px;">Edit</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_akunuser ORDER BY nama_lengkap ASC"; 
	$hasil=mysql_query($sql) or die(mysql_error());
	$no=1;
	while ($data = mysql_fetch_array ($hasil)){
		?>
		<tr>

			<td><?php echo $no++?></td>
			<td><?php echo $data['nama_lengkap'];?></td>
			<td><?php echo $data['no_telpon']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['jenis_kelamin'];?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td class="delete">
				<a href="deletetujuan.php?id_tujuan=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="edittujuan.php?id_tujuan=<?php echo $id?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Dasta"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>
