<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_pembayaran ORDER BY no_pembayaran DESC limit 1"; 
$hasil=mysql_query($sql) or die(mysql_error());

?>

<div id="main">
	<div class="content">
		<h3>Lakukan Transaksi Sekarang Juga</h3>
		<form action="insertpembayaran.php" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Nomor Indentitas Pembayaran" value="0000<?php while($rows=mysql_fetch_array($hasil)){ $num = $rows['no_pembayaran']+$no; echo $num; }?>" name="no_pembayaran" readonly>
			</div>
				<div class="input-group">
			<select name="no_tiket" id="no_tiket"  style="width: 250px;">
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
		<h3>History Pembayaran</h3>
		<?php include('data/data_pembayaran.php'); ?>
	</div>
</div>



<?php include('template/footer.php'); ?>