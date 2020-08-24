<?php 
include('template/top.php');
include('template/navigasi.php');


?>
<div id="main">
	<div class="content">
		<h3>Data Pegawai</h3>
				<p align=center><a href="export/exportpdf_pegawai.php"><button class="print"><img src="img/pdf.png">Print To PDF</button>
		<a href="export/exportexcel_pegawai.php"><button class="print"><img src="img/excel.png">Export Data ke Excel</button></a></p>
	<br>
	<br>
<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 90px;">No</th>
		<th style="width: 200px;">Nomor Pegawai</th>
		<th style="width: 240px;">Nama Pegawai</th>
		<th style="width: 140px;">Alamat</th>
		<th style="width: 340px;">Tempat</th>
		<th style="width: 340px;">Tanggal Lahir</th>
		<th style="width: 190px;">Nomor Telepon</th>
		<th style="width: 100px;">Jenis kelamin</th>
		<th style="width: 100px;">Umur</th>
		<th style="width: 140px;">Username</th>
		<th style="width: 140px;">Password</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_pegawai ORDER BY no_pegawai ASC"; 
	$hasil=mysql_query($sql) or die(mysql_error());
	$no=1;
	while ($data = mysql_fetch_array ($hasil)){

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
</div>
</div>
<?php include('template/footer.php'); ?>