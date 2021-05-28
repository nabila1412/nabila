<?php
include 'database_latihan.php';
$db = new database();



$aksi = $_GET['aksi'];
if($aksi == "tambah") {
	$db->input($_POST['program_pendidikan'],$_POST['nama_lengkap'],$_POST['email']);
	header("location:tampil_latihan.php");
}
elseif($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header("location:tampil_latihan.php");
}
elseif($aksi == "update") {
	$db->update($_POST['id'],$_POST['program_pendidikan'],$_POST['nama_lengkap'],$_POST['email']);
	header("location:tampil_latihan.php");
}
?>
