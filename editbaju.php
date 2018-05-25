<?php
$id=$_REQUEST["id"];
$mysqli = new mysqli("localhost", "root", "", "dbshop");
$sql = "SELECT * FROM baju where id_baju=$id"; //membuat string query//
$result = $mysqli->query($sql);//eksekusi query//
$row = $result->fetch_assoc();
$kategori = $row['id_kategori'];
?>
<form method="post" action="updatebaju.php">
<input type="hidden" name="id_baju" value="<?php echo $row['id_baju'];?>">
Nama Baju : <input type="text" size="50" name="nama_baju" value="<?php echo $row['nama_baju'];?>">
<br>
<br>
Harga Baju : <input type="text" size="30" name="harga" value="<?php echo $row['harga'];?>">
<br>
<br>
<?php
$sqlk = "SELECT * FROM kategori"; //membuat string query//
$resultk = $mysqli->query($sqlk);//eksekusi query//
?>
Kategori Baju : <select name="kategori">
<?php
while ($rowk = $resultk->fetch_assoc()) {
	?>
  <option value="<?php	echo $rowk['id_kategori']; ?>" <?php if($rowk['id_kategori']==$kategori){echo "selected ";}?>><?php	echo $rowk['nama_kategori']; ?></option>
<?php 
	}
?>

</select>
<br>
<input type="submit" name="submit" value="update">
</form>
