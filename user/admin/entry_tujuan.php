<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<h3>Input Rute</h3>
		<form action="inserttujuan.php" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Kode Tujuan" name="no_tujuan">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Kota Tujuan" name="kota_tujuan">
			</div>
			<div class="input-group">
				<div class="input-group">
				<input type="text" placeholder="No. Tiket" name="no_tiket">
			</div>
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