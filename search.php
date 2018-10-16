<?php
include "koneksi.php";

if (isset($_POST['submit'])){
	$nim = $_POST['crnim'];
	$sql = "SELECT * from baru where nim like '$nim'";
	$result = mysqli_query($db, $sql);
	while ($data = mysqli_fetch_array($result)) { 
	echo "<tr>
	Nim : ".$data['nim']."<br>
	Nama : ".$data['nama']."<br>
	Jenis kelamin : ".$data['kelamin']."<br>
	Program Studi : ".$data['prodi']."<br>
	Fakultas : ".$data['fakultas']."<br>
	Asal : ".$data['asal']."<br>
	Moto Hidup : ".$data['moto']."<br>
	</tr>";
}
}
?>