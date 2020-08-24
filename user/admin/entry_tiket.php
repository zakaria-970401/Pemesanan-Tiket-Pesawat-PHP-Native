<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');

$no = 1;
$sql = "SELECT * FROM tbl_tiket ORDER BY no_tiket ASC"; 
$hasil=mysql_query($sql) or die(mysql_error());


$sql2 = "SELECT * FROM tbl_konsumen ORDER BY no_identitas ASC"; 
$konsumen=mysql_query($sql2) or die(mysql_error());

?>

<div id="main">
	<div class="content">
		<h3>Entry Tiket</h3>
		<form action="inserttiket.php" method="POST">

			<div class="input-group">
				<select name="no_konsumen" id="" style="width: 250px;">
					<option value='0'>-Pilih Konsumen-</option>
					<?php while($rows=mysql_fetch_array($konsumen)){
						echo "<option value='". $rows['no_identitas']."'>". $rows['no_identitas']."</option>"; 
					}?>

				</select>

			</div>

				<div class="input-group">
				<select name="no_tiket" id="no_tiket" style="width: 250px;">
				<option value=>-Pilih Tujuan-</option>
				<option value="DM00001(JAKARTA-ACEH)">DM00001(JAKARTA-ACEH)</option>
				<option value="DM00002(JAKARTA-BANDUNG)">DM00002(JAKARTA-BANDUNG)</option>
				<option value="DM00003(JAKARTA-MANADO)">DM00003(JAKARTA-MANADO)</option>
				<option value="DM00004(JAKARTA-MALANG)">DM00004(JAKARTA-MALANG)</option>
				<option value="DM00005(JAKARTA-BATAM)">DM00005(JAKARTA-BATAM)</option>
				<option value="DM00006(JAKARTA-PADANG)">DM00006(JAKARTA-PADANG)</option>
				<option value="DM00007(JAKARTA-PALU)">DM00007(JAKARTA-PALU)</option>
				<option value="DM00008(JAKARTA-SABANG)">DM00008(JAKARTA-SABANG)</option>
				<option value="DM00009(JAKARTA-MEDAN)">DM00009(JAKARTA-MEDAN)</option>
				<option value="DM00010(JAKARTA-LAMPUNG)">DM00010(JAKARTA-LAMPUNG)</option>
				<option value="DM00011(JAKARTA-TEBING TINGGI)">DM00011(JAKARTA-TEBING TINGGI)</option>
				<option value="DM00012(JAKARTA-SIBOLGA)">DM00012(JAKARTA-SIBOLGA)</option>
				<option value="DM00013(JAKARTA-BINJAI)">DM00013(JAKARTA-BINJAI)</option>
				<option value="DM00014(JAKARTA-SOLOK)">DM00014(JAKARTA-SOLOK)</option>
				<option value="DM00015(JAKARTA-BUKIT TINGGI)">DM00015(JAKARTA-BUKIT TINGGI)</option>
				<option value="DM00016(JAKARTA-BAU-BAU)">DM00016(JAKARTA-BAU-BAU)</option>
				<option value="DM00017(JAKARTA-MAKASSAR)">DM00017(JAKARTA-MAKASSAR)</option>
				<option value="DM00018(JAKARTA-PEKANBARU)">DM00018(JAKARTA-PEKANBARU)</option>
				<option value="DM00019(JAKARTA-JAYAPURA)">DM00019(JAKARTA-JAYAPURA)</option>
				<option value="DM00020(JAKARTA-SORONG)">DM00020(JAKARTA-SORONG)</option>
				<option value="DM00021(JAKARTA-AMBON)">DM00021(JAKARTA-AMBON)</option>
				<option value="DM00022(JAKARTA-SAMARINDA)">DM00022(JAKARTA-SAMARINDA)</option>
				<option value="DM00023(JAKARTA-PONTIANAK)">DM00023(JAKARTA-PONTIANAK)</option>
				<option value="DM00024(JAKARTA-KEDIRI)">DM00024(JAKARTA-KEDIRI)</option>
				<option value="DM00025(JAKARTA-MAGELANG)">DM00025(JAKARTA-MAGELANG)</option>
				<option value="DM00026(JAKARTA-BALI)">DM00026(JAKARTA-BALI)</option>
				<option value="DM00027(JAKARTA-PURWOKERTO)">DM00027(JAKARTA-PURWOKERTO)</option>
				<option value="DM00028(JAKARTA-SURABAYA)">DM00028(JAKARTA-SURABAYA)</option>
				<option value="DM00029(JAKARTA-TEGAL)">DM00029(JAKARTA-TEGAL)</option>
				<option value="DM00030(JAKARTA-PROBOLINGGO)">DM00030(JAKARTA-PROBOLINGGO)</option>
				
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
					$sql = "SELECT * FROM tbl_tujuan ORDER BY kota_tujuan ASC"; 
					$hasil=mysql_query($sql) or die(mysql_error());
					while($rows=mysql_fetch_array($hasil)){
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
		<h3>Data Yang Sudah Melakukan Pembayaran, Harap Di input Kedalam Tiket.</h3>
		<?php include('data/data_pembayaran.php'); ?>
		<br>
		
		<h3>=====================================================================================================	</h3>
		<h3>Data Yang Sudah Masuk Kedalam Tiket.</h3>
		<?php include('data/data_tiket.php')?>
		
	</div>
</div>


<?php include('template/footer.php'); ?>