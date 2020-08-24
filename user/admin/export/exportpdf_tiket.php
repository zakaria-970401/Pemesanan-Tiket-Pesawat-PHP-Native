<?php
include("conn.php");
$sql=" SELECT * FROM tbl_tiket";

$tampil=mysql_query($sql);
$html ='
<link rel="stylesheet" type="text/css" href="style.css"/>
<p align="center">DATA PEMESAN TIKET ONLINE </p>
  <table id="tabel"  border="1" cellpadding="3" >
	<tr>
	<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Nomor Konsumen</th>
		<th bgcolor="#FFE4C4">Nomor Tiket</th>
		<th bgcolor="#FFE4C4">Tanggal Berangkat</th>
		<th bgcolor="#FFE4C4">Hari Berangkat</th>
		<th bgcolor="#FFE4C4">Waktu Berangkat</th>
		<th bgcolor="#FFE4C4">Kode Tujuan</th>

	</tr>
';  
  $no =1;
  while($data=mysql_fetch_array($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['no_konsumen'].'</td>
	<td>'.$data['no_tiket'].'</td>
    <td>'.$data['tgl_berangkat'].'</td>
    <td>'.$data['hari_berangkat'].'</td>
    <td>'.$data['waktu_berangkat'].'</td>
    <td>'.$data['no_tujuan'].'</td>

	
	
  </tr>';
  }
 $html .='</table>';
 
include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>