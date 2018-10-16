<?php 
include 'koneksi.php';
$id = $_GET['nim'];
$sql = "DELETE FROM baru WHERE nim = $id";
$delete = $db->query($sql);
	header('location:liatdata.php');
?>