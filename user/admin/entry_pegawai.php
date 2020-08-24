<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_pegawai ORDER BY no_pegawai DESC limit 1"; 
$hasil=mysql_query($sql) or die(mysql_error());


?>
<div id="main">
	<div class="content">
		<h3>Entry Pegawai</h3>
		<form action="insertpegawai.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				<input type="text" placeholder="Nomor Indentitas Pegawai" value="<?php while($rows=mysql_fetch_array($hasil)){ $num = $rows['no_pegawai']+$no; echo $num; }?>" name="no_pegawai" readonly >
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nama Pegawai" name="nama_pegawai">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Alamat Pegawai" style="width: 300px;" name="alamat_pegawai">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nomor Telepon" name="telepon">
			</div>
			<div class="input-group">
				<input type="text" name="tmp_lahir" id="tempat" placeholder="Tempat Lahir"> /
				<select name="tgl" id="tanggal">
					<option value='0'>-Pilih Tanggal-</option>
					<?php  for($tanggal=1;$tanggal<=31;$tanggal++) echo "<option value='".$tanggal."'>$tanggal</option>" ?>
				</select>
				<select name="bln" id="bulan">
					<?php $bulan = array("-Pilih Bulan-","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
					for($i=0;$i<=12;$i++)
					{
						echo "<option value=".$i.">".$bulan[$i]."</option>" ."<br>";
					}
					?>
				</select>
				<?php error_reporting(1); ?>
				<select name="thn" id="tahun" onchange="document.getElementById('dat').value=2019-this.options[this.selectedIndex].text">
					<option>-Pilih Tahun-<?php echo $_POST['tahun']?>
						<?php for($t=1990;$t<2016;$t++){?> <option><?php echo $t ?></option> 
						<?php };?>
					</select>
					<input type="text" name="umur" id="dat" style="width: 40px;" placeholder="Umur"> 
				</div>
				<div class="input-group">
					<select name="jenis_kelamin" id="">
					<option value="0">-Pilih Jenis Kelamin-</option>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				</div>
				<div class="input-group">
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>

			</form>
			<hr/>
			<h3>Data Pegawai</h3>
			<?php include('data/data_pegawai.php'); ?>
		</div>
	</div>


	<?php include('template/footer.php'); ?>