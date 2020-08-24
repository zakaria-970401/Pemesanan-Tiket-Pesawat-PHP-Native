<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
		<th style="width: 50px;">Foto</th>
		<th style="width: 100px;">Nomor Indentitas</th>
		<th style="width: 140px;">Nama Konsumen</th>
		<th style="width: 140px;">Alamat</th>
		<th style="width: 140px;">Nomor Telepon</th>
		<th style="width: 100px;">Jenis kelamin</th>
		<th style="width: 100px;">TTL</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_konsumen ORDER BY no_identitas ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){
		$id=$data['no_identitas'];
		$nm=$data['nama_konsumen'];
		$jenis=$data['jenis_kelamin'];
		$alamat=$data['almt_komsumen'];
		$nohp=$data['telepon'];
		$tmpt=$data['tmp_lahir'];
		$tgl=date('Y-m-d', strtotime($data['tgl_lahir']));
		$umur=$data['umur'];
		$foto=$data['foto'];

		?>
		<tr>

			<td><?php echo $no++?></td>
			<td><img src="foto/<?php echo $foto; ?>" width="40" height="40"></td>
			<td><?php echo $id;?></td>
			<td><?php echo $nm; ?></td>
			<td><?php echo $alamat; ?></td>
			<td><?php echo $nohp; ?></td>
			<td><?php echo $jenis; ?></td>
			<td><?php echo "$tmpt, $tgl"; ?></td>
			<td class="delete">
	
			
		</tr>
		<?php } ?>
	</table>
