<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->inputchannel($_POST['lcn'],$_POST['channel_name']);
	header("location:viewchannel.php");
}
elseif($aksi == "hapuschannel"){
	$db->hapuschannel($_GET['id']);
	header("location:viewchannel.php");
}
elseif($aksi == "updatechannel"){
	$db->updatechannel($_POST['id'],$_POST['lcn'],$_POST['channel_name']);
	header("location:viewchannel.php");
}
?>