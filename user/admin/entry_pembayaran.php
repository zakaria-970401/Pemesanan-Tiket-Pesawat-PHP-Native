<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_pembayaran ORDER BY no_pembayaran DESC limit 1"; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
$sql2 = "SELECT * FROM tbl_tiket ORDER BY no_tiket DESC limit 1"; 
$hasil2=mysqli_query($conn,$sql2) or die(mysqli_error());
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }

?>

<div id="main">
	<div class="content">
		<h3>Entry Pembayaran</h3>
		<form action="insertpembayaran.php" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Nomor Indentitas Pembayaran" value="PMB<?php while($rows=mysqli_fetch_array($hasil)){ $num = $rows['no_pembayaran']+$no; echo $num; }?>" name="no_pembayaran">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nomor Tiket" name="no_tiket" value="TIKT<?php while($rows=mysqli_fetch_array($hasil2)){ $dat = $rows['no_tiket']; $num = substr($dat,5)+$no; echo $num; }?>" >
			</div>
			<div class="input-group">
				<input type="date" placeholder="Tanggal Pembayaran" name="tgl_pembayaran">
			</div>
			<div class="input-group">
				<select name="hari_pembayaran" id="">
					<option value="0">-Pilih hari Berangkat-</option>
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="Jum'at">Jum'at</option>
					<option value="Sabtu">Sabtu</option>
					<option value="Minggu">Minggu</option>
				</select>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Jumlah Tiket" id="jumlah" oninput="calculate()" name="jumlah_tiket">
				<input type="text" placeholder="Harga Tiket" id="harga" oninput="calculate()" name="harga_tiket">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Total Harga" name="total_pembayaran" id="total" >
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
		<hr/>
		<h3>Data Pembayaran</h3>
		<?php include('data/data_pembayaran.php'); ?>
	</div>
</div>



<?php include('template/footer.php'); ?>