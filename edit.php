<?php
include "koneksi.php";
	$id = $_GET['nim'];
	$query_mysql = "SELECT * FROM baru WHERE id='$id'";
	$nomor = 1;
	$data = mysqli_fetch_array($db, $query_mysql)
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['nim'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<label for="kelamin">Kelamin: </label>
				    <input type="radio" name="kelamin" value="<?php echo $data['kelamin'] ?>">laki-laki<br>
				    <input type="radio" name="kelamin" value="<?php echo $data['kelamin'] ?>">perempuan<br>					
			</tr>	
			<tr>
				<label for="prodi">Prodi: </label>
				   <select name="prodi">
				   <option value="<?php echo $data['prodi'] ?>">pilih</option>
				   <option value="<?php echo $data['prodi'] ?>">Manajemen Informatika</option>
				   <option value="<?php echo $data['prodi'] ?>">Teknik Informatika</option>				
			</tr>
			<tr>
				 <label for="fakultas">Fakultas: </label>
				   <select name="fakultas">
				   <option value="<?php echo $data['fakultas'] ?>">pilih</option>
				   <option value="<?php echo $data['fakultas'] ?>">terapan</option>
				   <option value="<?php echo $data['fakultas'] ?>">informatika</option>
				   </select>
			</tr>
			<tr>
				Asal: <input type="text" name="asal" value="<?php echo $data['asal'] ?>">
			</tr>
			<tr>
				<label for="alamat">Moto Hidup: </label>
    			<textarea name="moto" value="<?php echo $data['moto'] ?>" required></textarea>
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>