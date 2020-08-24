<?php 
error_reporting(0);
include('template/top.php');
include('template/navigasi.php');
?>
<div id="main">
	<div class="content">
		<h3>Data Tujuan Penerbangan</h3>
	<p align=center><a href="export/exportpdf_rute.php"><button class="print"><img src="img/pdf.png">Print To PDF</button>
			<a href="export/exportexcel_rute.php"><button class="print"><img src="img/excel.png">Export Data ke Excel</button></a></p>
		<form action="" method="POST">
		<p align=center><input type="text" name="query" style="width: 280px; height: 30px;" placeholder="Masukan Kota Tujuan" autofocus autocomplete="off" /></p>
		
				<div class="input-group"><p align=center><input type="submit" name="cari" value="Cari" class="btn" style="width:150px";>
				</div>
		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<p align=center><th style="width: 200px;">No</th>
				<p align=center><th style="width: 400px;">Kode Tujuan</th>
				<p align=center><th style="width: 450px;">Kota Tujuan</th>
				<p align=center><th style="width: 450px;">No.Tiket</th>
				
				</p>
	</tr>
			</tr>
		<?php include('koneksi/conn.php');
	$no=1;
	$query = $_POST['query'];
	if ($query !=''){
	$select = mysql_query("SELECT * FROM tbl_tujuan where kota_tujuan like '%$query%'"); 
	}else{
		$select = mysql_query("SELECT * FROM tbl_tujuan ORDER by kota_tujuan ASC"); 
	}
	
	while ($data = mysql_fetch_array ($select)){
				?>
				<tr>
					<td><p align=center><?php echo $no++?></td>
					<td><p align=center><?php echo $data['no_tujuan'];?></td>
					<td><p align=center><?php echo $data['kota_tujuan']; ?></td>
					<td><p align=center><?php echo $data['no_tiket']; ?></td>
					
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>