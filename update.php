<?php 
 
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['asal'];
$asal = $_POST['asal'];
$moto = $_POST['moto'];
 
mysql_query("UPDATE user SET nim=$nim, nama=$nama, kelamin=$kelamin, prodi=$prodi, fakultas=$fakulta, asal=$asal, moto=$moto WHERE nim='$nim'");
 
header("location:liatdata.php?pesan=update");
?>