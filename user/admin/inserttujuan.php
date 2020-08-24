<?php
include('koneksi/conn.php');
$kodetjn=$_POST['no_tujuan'];
$kota=$_POST['kota_tujuan'];
$ntiket=$_POST['no_tiket'];

$query	= "INSERT INTO tbl_tujuan values('$kodetjn','$kota','$ntiket')";
$result = mysql_query($query) or die(mysql_error()) ;
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_tujuan.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_tujuan.php>";
}
?>


