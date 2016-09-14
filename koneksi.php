<?php
$host = "localhost";

$username = "root";
$password = "";
$database = "audiens";
$koneksi = mysql_connect($host,$username,$password);

if ($koneksi){
	echo ("Koneksi Berhasil");
}
else {
	echo ("Koneksi Gagal...!");
}
?>
