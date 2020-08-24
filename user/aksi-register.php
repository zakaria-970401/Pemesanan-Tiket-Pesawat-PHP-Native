<?php
include('koneksi/conn.php');


$nm=$_POST['nama_lengkap'];
$no=$_POST['no_telpon'];
$alamat=$_POST['alamat'];
$jekelamin=$_POST['jenis_kelamin'];
$username=$_POST['username'];
$password=$_POST['password'];

$query	= "INSERT INTO tbl_akunuser values('$nm','$no','$alamat','$jekelamin','$username','$password')";
$result = mysql_query($query) or die(mysql_error()) ;
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Dibuat, Silahkan Login Menggunakan Akun Anda..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('Oops, Gagal Membuat Akun. Coba Lagi!');
	}
</script>";

var_dump($_FILES);
echo "Data Berhasil Dibuat, Silahkan Login Menggunakan Akun Anda..!";
echo "<meta http-equiv=refresh content=3;url=login.php>";
}
?>


