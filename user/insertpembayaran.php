<?php
include('koneksi/conn.php');
$nopmb=$_POST['no_pembayaran'];
$notiket=$_POST['no_tiket'];
$tglbayar=$_POST['tgl_pembayaran'];
$hbayar=$_POST['hari_pembayaran'];
$jtiket=$_POST['jumlah_tiket'];
$htiket=$_POST['harga_tiket'];
$tbayar=$_POST['total_pembayaran'];

$query	= "INSERT INTO tbl_pembayaran values('$nopmb','$notiket','$tglbayar','$hbayar','$jtiket','$htiket','$tbayar')";
$result = mysql_query($query) or die(mysql_error()) ;
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_pembayaran.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_pembayaran.php>";
}
?>


