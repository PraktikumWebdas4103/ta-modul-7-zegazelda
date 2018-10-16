<?php
include "koneksi.php";
$query = mysqli_query($db,"SELECT * FROM baru ORDER BY nim DESC");
?>
<form name="formcari" method="post" action="search.php">
    <button><a href="daftar.php">tambah baru</a></button>
<table width="330" border="0" align="center" cellpadding="0">
<tr>
<td height="25" colspan="3">
</td>
</tr>
<tr>
    <td>Nim</td>
    <td><input type="text" name="crnim"></td>
</tr>
<td></td>
<td> <input type="submit" name="submit" > </td>
</table>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nim</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
             <td><?php echo $data["nim"];?></td>
             <td>
             <a class="hapus" href="delete.php?nim=<?php echo $data['nim']; ?>">Hapus</a>
             <a href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>