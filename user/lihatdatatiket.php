<?php 
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>
<div id="main">
	<div class="content">
		<h3>HARGA TIKET</h3>
		
		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<th style="width: 20px;">No</th>
				<th style="width: 50px;">Kode Tujuan</th>
				<th style="width: 100px;">Kode Tujuan</th>
				<th style="width: 50px;">Nomer Tiket</th>
	

			</tr>
			<?php include('koneksi/conn.php'); 
			$sql = "SELECT * FROM tbl_tujuan ORDER BY no_tujuan ASC"; 
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
			$no=1;
			while ($data = mysqli_fetch_array ($hasil)){
				$id=$data['no_tujuan'];
				?>
				<tr>

					<td><?php echo $no++?></td>
					<td><?php echo $data['no_tujuan'];?></td>
					<td><?php echo $data['kota_tujuan']; ?></td>
					<td><?php echo $data['no_tiket']; ?></td>
					
				
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>