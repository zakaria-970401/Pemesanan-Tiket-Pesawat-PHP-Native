<?php 
error_reporting(0);
include('template/top.php');
include('template/navigasi.php');

?>
<div id="main">
	<div class="content">
		<h3>Data Rute Penerbangan</h3>
		<table id="tabel"  border="1" cellpadding="3" >
		<form action="" method="POST">
			<p align=center><input type="text" name="query" style="width: 280px; height: 30px;" placeholder="Masukan Kota Tujuan" autofocus autocomplete="off" /></p>
				<div class="input-group"><p align=center><input type="submit" name="cari" value="Cari" class="btn" style="width:150px";>
			</div> 
		</form>
				
			<tr>
				<th style="width: 20px;">No</th>
				<th style="width: 50px;">Kode Tujuan</th>
				<th style="width: 100px;">Kota Tujuan</th>
				<th style="width: 100px;">No. Tiket</th>
				
			</tr>
			<?php include('koneksi/conn.php'); 
			$no=1;
	$query = $_POST['query'];
	if ($query !=''){
	$select = mysql_query("SELECT * FROM tbl_tujuan where kota_tujuan like '%$query%' or no_tujuan like '%$query%' "); 
	}else{
		$select = mysql_query("SELECT * FROM tbl_tujuan ORDER by no_tiket ASC"); 
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