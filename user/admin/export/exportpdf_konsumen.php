<?php
include("conn.php");
$sql=" SELECT * FROM tbl_konsumen";

$tampil=mysql_query($sql);
$html ='
<link rel="stylesheet" type="text/css" href="style.css"/>
<p align="center">DATA PEMESAN TIKET ONLINE </p>
  <table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th  bgcolor="#FFE4C4">No</th>
		<th bgcolor="#FFE4C4">Nomor Indentitas</th>
		<th bgcolor="#FFE4C4">Nama Konsumen</th>
		<th bgcolor="#FFE4C4">Alamat</th>
		<th bgcolor="#FFE4C4">Nomor Telepon</th>
		<th bgcolor="#FFE4C4">Jenis kelamin</th>
		<th bgcolor="#FFE4C4">Umur</th>
		<th bgcolor="#FFE4C4">Tempat</th>
		<th bgcolor="#FFE4C4">Tanggal Lahir</th>
	
	</tr>
';  
  $no =1;
  while($data=mysql_fetch_array($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['no_identitas'].'</td>
    <td>'.$data['nama_konsumen'].'</td>
    <td>'.$data['almt_komsumen'].'</td>
    <td>'.$data['telepon'].'</td>
    <td>'.$data['umur'].'</td>
    <td>'.$data['jenis_kelamin'].'</td>
	<td>'.$data['tmp_lahir'].'</td>
    <td>'.$data['tanggal'].'</td>
	
  </tr>';
  }
 $html .='</table>';
 
include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>