<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->inputchannel($_POST['lcn'],$_POST['channel_name']);
	header("location:viewchannel.php");
}
elseif($aksi == "hapus"){
	$db->hapuschannel($_GET['id']);
	header("location:viewchannel.php");
}
elseif($aksi == "update"){
	$db->updatechannel($_POST['id'],$_POST['lcn'],$_POST['channel_name']);
	header("location:viewchannel.php");
}
?>