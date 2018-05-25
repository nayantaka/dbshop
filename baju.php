<?php
//membuat koneksi//
$mysqli = new mysqli("localhost", "root", "", "dbshop");
$sql = "SELECT * FROM baju"; //membuat string query//
$result = $mysqli->query($sql);//eksekusi query//
while ($row = $result->fetch_assoc()) {
	echo $row['nama_baju'];
	?>
	 | 
	<?
	echo $row['harga'];
	?>
	 | 
	 <?php
	 $kategori = $row['id_kategori'];
$sqlk = "SELECT * FROM kategori where id_kategori=$kategori"; //membuat string query//
$resultk = $mysqli->query($sqlk);//eksekusi query//
$rowk = $resultk->fetch_assoc();
echo $rowk['nama_kategori'];
?>
	 | <a href="editbaju.php?id=<?php echo $row['id_baju'];
	?>">Edit</a>
	<br>
	<?php
}
?>