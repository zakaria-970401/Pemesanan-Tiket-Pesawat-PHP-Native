<?php
$server="localhost";
$username="root";
$password="";
$database="zakaria_airline";

mysql_connect($server,$username,$password) or die ("Koneksi Gagal");

mysql_select_db($database) or die ('Database Tidak DItemukan');


?>