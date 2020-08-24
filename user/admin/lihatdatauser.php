<?php 
error_reporting(0);
include('template/top.php');
include('template/navigasi.php');

?>
<div id="main">
	<div class="content">
		<h3>Data Account User</h3>
					<p align=center><a href="export/exportpdf_akunuser.php"><button class="print"><img src="img/pdf.png">Print To PDF</button>
		<a href="export/exportexcel_akunuser.php"><button class="print"><img src="img/excel.png">Export Data ke Excel</button></a></p>
	<br>
	<br>
		<form action="" method="POST">
	<p align=center><input type="text" name="query" style="width: 280px; height: 30px;" placeholder="Masukan Nama Atau Username" autofocus autocomplete="off" /></p>
		
				<div class="input-group"><p align=center><input type="submit" name="cari" value="Cari" class="btn" style="width:150px";>
				</div> 
				</form>

<table id="tabel"  border="1" cellpadding="3" >
<tr>
		<th style="width: 60px;">No</th>
		<th style="width: 250px;">Nama Lengkap</th>
		<th style="width: 200px;">No. Telpon</th>
		<th style="width: 240px;">Alamat</th>
		<th style="width: 140px;">Jenis Kelamin</th>
		<th style="width: 140px;">Username</th>
		<th style="width: 140px;">Password</th>
	
	</tr>
				<?php include('koneksi/conn.php'); 
			$no=1;
	$query = $_POST['query'];
	if ($query !=''){
	$select = mysql_query("SELECT * FROM tbl_akunuser where nama_lengkap like '%$query%' or username like '%query%'"); 
	}else{
		$select = mysql_query("SELECT * FROM tbl_akunuser ORDER by nama_lengkap ASC"); 
	}
	
	while ($data = mysql_fetch_array ($select)){
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
</div>
</div>
<?php include('template/footer.php'); ?>