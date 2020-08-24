<?php
include("conn.php");
$sql=" SELECT * FROM tbl_pegawai";

$tampil=mysql_query($sql);
$html ='
<link rel="stylesheet" type="text/css" href="style.css"/>
<p align="center">DATA PEGAWAI ZAKARIA AIRLINES </p>
  <table id="tabel"  border="1" cellpadding="3" >
	<tr>
<th bgcolor="#FFE4C4">No</th>
		<th bgcolor="#FFE4C4">Nomor Pegawai</th>
		<th bgcolor="#FFE4C4">Nama Pegawai</th>
		<th bgcolor="#FFE4C4">Alamat</th>
		<th bgcolor="#FFE4C4">Jenis kelamin</th>
		<th bgcolor="#FFE4C4">Umur</th>
		<th bgcolor="#FFE4C4">Nomor Telepon</th>
		<th bgcolor="#FFE4C4">Tempat</th>
		<th bgcolor="#FFE4C4">Tanggal Lahir</th>

		
	</tr>
';  
  $no =1;
  while($data=mysql_fetch_array($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['no_pegawai'].'</td>
    <td>'.$data['nama_pegawai'].'</td>
    <td>'.$data['alamat_pegawai'].'</td>
	<td>'.$data['jenis_kelamin'].'</td>
    <td>'.$data['umur_pegawai'].'</td>
    <td>'.$data['telepon'].'</td>
    <td>'.$data['tmp_lahir'].'</td>
    <td>'.$data['tgl_lahir'].'</td>
	
  </tr>';
  }
 $html .='</table>';
 
include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>