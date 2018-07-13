<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
//membuat koneksi//
$mysqli = new mysqli("localhost", "root", "12345678", "dbshop");
$sql = "SELECT * FROM pengguna where username='$username' AND password='$password'"; //membuat string query//
$result = $mysqli->query($sql);//eksekusi query//
$jumlah = $result->num_rows;
if($jumlah>0){
  $_SESSION['username']=$username;
  header("location:home.php");
}
else{
  header("location:login.php");
}
?>
