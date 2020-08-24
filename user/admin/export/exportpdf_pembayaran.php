<?php
include("conn.php");
$sql="SELECT * FROM tbl_konsumen inner join tbl_tiket on tbl_konsumen.no_identitas=tbl_tiket.no_konsumen join tbl_pembayaran on tbl_tiket.no_tiket=tbl_pembayaran.no_tiket"; 

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
		<th bgcolor="#FFE4C4">Jumlah tiket</th>

	</tr>
';  
  $no =1;
 while ($data = mysql_fetch_array ($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['no_konsumen'].'</td>
	<td>'.$data['no_tiket'].'</td>
    <td>'.$data['tgl_berangkat'].'</td>
    <td>'.$data['hari_berangkat'].'</td>
    <td>'.$data['waktu_berangkat'].'</td>
    <td>'.$data['no_tujuan'].'</td>
	<td>'.$data['jumlah_tiket'].'</td>
 

  </tr>';
  }
 $html .='</table>';
 
include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>