<?php 
include('template/top.php');
include('template/navigasi.php');
error_reporting(0);

?>
<div id="main">
	<div class="content">
		<h3>Data Penumpang</h3>
			<p align=center><a href="export/exportpdf_pembayaran.php"><button class="print"><img src="img/pdf.png">Print To PDF</button>
		<a href="export/exportexcel_pembayaran.php"><button class="print"><img src="img/excel.png">Export Data ke Excel</button></a></p>
	<br>
	<br>
	<form action="" method="POST">
			<p align=center><input type="text" name="query" style="width: 280px; height: 30px;" placeholder="Masukan Nama Atau No Konsumen" autofocus autocomplete="off" /></p>
				<div class="input-group"><p align=center><input type="submit" name="cari" value="Cari" class="btn" style="width:150px";>
			</div> 
		</form>
		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<th style="width: 20px;">No</th>
				<th style="width: 50px;">Nomor Konsumen</th>
				<th style="width: 50px;">Nama Konsumen</th>
				<th style="width: 500px;">Nomor Tiket</th>
				<th style="width: 100px;">Tanggal Berangkat</th>
				<th style="width: 100px;">Hari Berangkat</th>
				<th style="width: 100px;">Waktu Berangkat</th>
				<th style="width: 100px;">Kode Tujuan</th>
				<th style="width: 100px;">Jumlah tiket</th>
				<th style="width: 100px;">Tagihan</th>

			</tr>	
			<?php include('koneksi/conn.php'); 
			$no=1;
				$query = $_POST['query'];
	if ($query !=''){
			$select = mysql_query("SELECT * FROM tbl_konsumen inner join tbl_tiket on tbl_konsumen.no_identitas=tbl_tiket.no_konsumen join tbl_pembayaran on tbl_tiket.no_tiket=tbl_pembayaran.no_tiket where nama_konsumen like '%$query%' or no_konsumen like '%$query%'"); 
	}else{
		$select = mysql_query("SELECT * FROM tbl_konsumen inner join tbl_tiket on tbl_konsumen.no_identitas=tbl_tiket.no_konsumen join tbl_pembayaran on tbl_tiket.no_tiket=tbl_pembayaran.no_tiket"); 
	}
			while ($data = mysql_fetch_array ($select)){
				$id=$data['no_tiket'];
				$identitas=$data['no_identitas'];
				$total=$data['total_pembayaran'];
				?>
				<tr>
					
					<td><p align=center><?php echo $no++?></td>
					<td><p align=center><?php echo $data['no_konsumen'];?></td>
					<td><p align=center><?php echo $data['nama_konsumen'];?></td>
					<td><p align=center><?php echo $data['no_tiket']; ?></td>
					<td><p align=center><?php echo $data['tgl_berangkat']; ?></td>
					<td><p align=center><?php echo $data['hari_berangkat']; ?></td>
					<td><p align=center><?php echo $data['waktu_berangkat']; ?></td>
					<td><p align=center><?php echo $data['no_tujuan']; ?></td>
					<td><p align=center><?php echo $data['jumlah_tiket']; ?></td>
					<td><p align=center><?php echo number_format($total,0,".","."); ?></td>
				</tr>
				<?php } ?>
		
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>