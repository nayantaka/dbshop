<?php
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
//membuat koneksi//
$mysqli = new mysqli("localhost", "root", "12345678", "dbshop");
$sql = "SELECT * FROM pengguna where username='$username' AND password='$password'"; //membuat string query//
$result = $mysqli->query($sql);//eksekusi query//
$jumlah = $result->num_rows;
if($jumlah>0){
echo 'Selamat datang ' . $username;
}
else{
echo 'Maaf user / password yang anda masukkan salah!';
}
?>
