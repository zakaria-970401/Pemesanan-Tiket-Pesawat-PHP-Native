<?php 
error_reporting(0);
include('template/top.php');
include('template/navigasi.php');

?>
<div id="main">
	<div class="content">
		<h3>Data Pemesan Tiket Online</h3>
				<p align=center><a href="export/exportpdf_konsumen.php"><button class="print"><img src="img/pdf.png">Print To PDF</button>
		<a href="export/exportexcel_konsumen.php"><button class="print"><img src="img/excel.png">Export Data ke Excel</button></a></p>
	<br>
	<br>
		<form action="" method="POST">
	<p align=center><input type="text" name="query" style="width: 280px; height: 30px;" placeholder="Masukan Nama" autofocus autocomplete="off" /></p>
		
				<div class="input-group"><p align=center><input type="submit" name="cari" value="Cari" class="btn" style="width:150px";>
				</div> 
				</form>

<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 70px;">No</th>
		<th style="width: 100px;">Nomor Indentitas</th>
		<th style="width: 140px;">Nama Konsumen</th>
		<th style="width: 140px;">Alamat</th>
		<th style="width: 140px;">Nomor Telepon</th>
		<th style="width: 100px;">Jenis kelamin</th>
		<th style="width: 100px;">Umur</th>
	
	</tr>
				<?php include('koneksi/conn.php'); 
			$no=1;
	$query = $_POST['query'];
	if ($query !=''){
	$select = mysql_query("SELECT * FROM tbl_konsumen where nama_konsumen like '%$query%'"); 
	}else{
		$select = mysql_query("SELECT * FROM tbl_konsumen ORDER by nama_konsumen ASC"); 
	}
	
	while ($data = mysql_fetch_array ($select)){
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
		<?php } ?>
	</table>
</div>
</div>
<?php include('template/footer.php'); ?>