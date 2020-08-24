<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');

$id=$_GET['id_tujuan'];

$no=1;
$sql = "SELECT * FROM tbl_tujuan WHERE no_tujuan='$id' "; 
$hasil=mysql_query($sql) or die(mysql_error());
while ($tampil=mysql_fetch_array($hasil))
{

?>

<div id="main">
	<div class="content">
		<h3>Entry Pembayaran</h3>
		<form action="updatetujuan.php" method="POST">
			<div class="input-group">
				<input type="text"  value="<?php echo $tampil['no_tujuan']; ?>" name="no_tujuan">
			</div>
			<div class="input-group">
				<input type="text"  name="kota_tujuan" value="<?php echo $tampil['kota_tujuan']; ?>" >
			</div>
			<div class="input-group">
				<input type="text" name="no_tiket" value="<?php echo $tampil['no_tiket']; ?>">
			</div>
			
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
	</div>
</div>



<?php include('template/footer.php'); }?>