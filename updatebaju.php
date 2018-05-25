<?php
$id=$_REQUEST["id_baju"];
$nama=$_REQUEST["nama_baju"];
$harga=$_REQUEST["harga"];
$kategori=$_REQUEST["kategori"];
$mysqli = new mysqli("localhost", "root", "", "dbshop");
$sql = "UPDATE baju set nama_baju='$nama', harga=$harga, id_kategori='$kategori' where id_baju=$id"; //membuat string query//

$result = $mysqli->query($sql);//eksekusi query//
echo "Edit Data Sukses!!!<br>";	
?>

<a href="baju.php">lihat data</a>