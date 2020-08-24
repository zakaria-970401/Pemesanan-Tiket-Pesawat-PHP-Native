<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>

<div id="main">
	<div class="content">
		<h3>Entry Tujuan</h3>
		<form action="inserttujuan.php" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Nomor Indentitas Tujuan" name="no_tujuan">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Kota Tujuan" name="kota_tujuan">
			</div>
			<div class="input-group">
						<select name="no_tiket" id="" style="width: 250px;">
					<option value="0">-Pilih Nomor Tiket-</option>
					<?php 
					$sql = "SELECT * FROM tbl_tiket ORDER BY no_tiket ASC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysql_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['no_tiket']."'>". $rows['no_tiket']."</option>"; 
					}
					?>
				</select>
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
		<hr/>
		<h3>Data Tujuan</h3>
		<?php include('data/data_tujuan.php'); ?>
	</div>
</div>


<?php include('template/footer.php'); ?>