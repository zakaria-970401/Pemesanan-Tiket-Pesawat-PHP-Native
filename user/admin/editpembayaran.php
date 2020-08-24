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
$id=$_GET['id_pembayaran'];

$no=1;
$sql = "SELECT * FROM tbl_pembayaran WHERE no_pembayaran='$id' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
while ($tampil=mysqli_fetch_array($hasil))
{

?>

<div id="main">
	<div class="content">
		<h3>Entry Pembayaran</h3>
		<form action="updatepembayaran.php" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Nomor Indentitas Pembayaran" value="<?php echo $tampil['no_pembayaran']; ?>" name="no_pembayaran">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nomor Tiket" name="no_tiket" value="<?php echo $tampil['no_tiket']; ?>" >
			</div>
			<div class="input-group">
				<input type="date" placeholder="Tanggal Pembayaran" name="tgl_pembayaran" value="<?php echo $tampil['tgl_pembayaran']; ?>">
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
				<input type="text" placeholder="Jumlah Tiket" id="jumlah" oninput="calculate()" name="jumlah_tiket" value="<?php echo $tampil['jumlah_tiket']; ?>">
				<input type="text" placeholder="Harga Tiket" id="harga" oninput="calculate()" name="harga_tiket" value="<?php echo $tampil['harga_tiket']; ?>">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Total Harga" name="total_pembayaran" id="total" value="<?php echo $tampil['total_pembayaran']; ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
	</div>
</div>



<?php include('template/footer.php'); }?>