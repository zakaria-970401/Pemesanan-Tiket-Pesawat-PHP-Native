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
		<?php
		include('koneksi/conn.php');
		$noksm=$_POST['no_konsumen'];
		$notiket=$_POST['no_tiket'];
		$tberangkat=$_POST['tgl_berangkat'];
		$hberangkat=$_POST['hari_berangkat'];
		$wberangkat=$_POST['waktu_berangkat'];
		$notujuan=$_POST['no_tujuan'];
		$update = mysqli_query ($conn,"UPDATE  tbl_tiket SET no_tiket='$notiket',tgl_berangkat='$tberangkat',hari_berangkat='$hberangkat',waktu_berangkat='$wberangkat',no_tujuan='$notujuan' where no_konsumen='$noksm' ") or die (mysqli_error());

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_tiket.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edittujuan.php?id_tujuan='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>

