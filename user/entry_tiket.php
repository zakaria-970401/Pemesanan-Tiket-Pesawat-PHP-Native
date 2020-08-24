<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
$no = 1;
$sql = "SELECT * FROM tbl_tiket ORDER BY no_tiket DESC limit 1"; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());


$sql2 = "SELECT * FROM tbl_konsumen ORDER BY no_identitas ASC"; 
$konsumen=mysqli_query($conn,$sql2) or die(mysqli_error());

?>

<div id="main">
	<div class="content">
		<h3>Input Tiket</h3>
		<form action="inserttiket.php" method="POST">

			<div class="input-group">
				<select name="no_konsumen" id="" style="width: 250px;">
					<option value='0'>-Pilih Konsumen-</option>
					<?php while($rows=mysqli_fetch_array($konsumen)){
						echo "<option value='". $rows['no_identitas']."'>". $rows['no_identitas']."</option>"; 
					}?>

				</select>

			</div>

	

			<div class="input-group">
				<input type="date" name="tgl_berangkat">
				<select name="hari_berangkat" id="">
					<option value="0">-Pilih hari Berangkat-</option>
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="Jum'at">Jum'at</option>
					<option value="Sabtu">Sabtu</option>
					<option value="Minggu">Minggu</option>
				</select>
				<input type="time" placeholder="Waktu keberangkatan" name="waktu_berangkat">
			</div>
			<div class="input-group">
				<select name="no_tujuan" id="" style="width: 250px;">
					<option value="0">-Pilih Kota Tujuan-</option>
					<?php 
					$sql = "SELECT * FROM tbl_tujuan ORDER BY no_tujuan DESC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['no_tujuan']."'>". $rows['kota_tujuan']."</option>"; 
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
		<h3>Data Tiket</h3>
		<?php include('data/data_tiket.php'); ?>
	</div>
</div>


<?php include('template/footer.php'); ?>