<?php 
error_reporting(0);
include('template/top.php');
include('template/navigasi.php');

?>
<div id="main">
	<div class="content">
		<h3>Data Tiket</h3>
				<p align=center><a href="export/exportpdf_tiket.php"><button class="print"><img src="img/pdf.png">Print To PDF</button>
		<a href="export/exportexcel_tiket.php"><button class="print"><img src="img/excel.png">Export Data ke Excel</button></a></p>
	<br>
	<br>
			<form action="" method="POST">
	<p align=center><input type="text" name="query" style="width: 300px; height: 30px;" placeholder="Masukan No.Konsumen, No.Tiket Atau Tanggal Keberangkatan" autofocus autocomplete="off" /></p>
		
				<div class="input-group"><p align=center><input type="submit" name="cari" value="Cari" class="btn" style="width:150px";>
				</div> 
				</form>
				
		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<th style="width: 60px;">No</th>
				<th style="width: 150px;">Nomor Konsumen</th>
				<th style="width: 400px;">Nomor Tiket</th>
				<th style="width: 200px;">Tanggal Berangkat</th>
				<th style="width: 200px;">Hari Berangkat</th>
				<th style="width: 200px;">Waktu Berangkat</th>
				<th style="width: 200px;">Kode Tujuan</th>

			</tr>
			
			<?php include('koneksi/conn.php'); 
			$no=1;
	$query = $_POST['query'];
	if ($query !=''){
	$select = mysql_query("SELECT * FROM tbl_tiket where no_konsumen like '%$query%' or no_tiket like '%$query%' or tgl_berangkat like '%$query%'"); 
	}else{
		$select = mysql_query("SELECT * FROM tbl_tiket ORDER by no_konsumen ASC"); 
	}
			while ($data = mysql_fetch_array ($select)){
		
				?>
				<tr>
					<td><p align=center><?php echo $no++?></td>
					<td><p align=center><?php echo $data['no_konsumen'];?></td>
					<td><p align=center><?php echo $data['no_tiket']; ?></td>
					<td><p align=center><?php echo $data['tgl_berangkat']; ?></td>
					<td><p align=center><?php echo $data['hari_berangkat']; ?></td>
					<td><p align=center><?php echo $data['waktu_berangkat']; ?></td>
					<td><p align=center><?php echo $data['no_tujuan']; ?></td>

				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>